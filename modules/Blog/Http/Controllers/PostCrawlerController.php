<?php
namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Modules\Core\Http\Controllers\Controller;
use Modules\Media\Events\FileWasUploaded;
use Modules\Media\Repositories\MediaRepository;
use Modules\Media\Services\FileService;
use Modules\Blog\Repositories\CategoryRepository;
use Modules\Blog\Repositories\PostRepository;
use Symfony\Component\DomCrawler\Crawler;

class PostCrawlerController extends Controller
{
    protected $rsUrl = 'http://lvptravel.com';
    protected $fileService;
    protected $post;
    protected $category;
    protected $media;

    public function __construct(FileService $fileService, MediaRepository $file, CategoryRepository $categoryRepository, PostRepository $postRepository)
    {
        $this->fileService = $fileService;
        $this->category = $categoryRepository;
        $this->post = $postRepository;
        $this->media = $file;
    }
    public function posts(Request $req)
    {
        $crawlerLink = $req->get('url');
        $categoryIds = $req->get('cat');
        $force = $req->get('f', false);
        $postList = $this->getPostFromList($crawlerLink);
        $count = 0;
        foreach ($postList as $tl) {
            $post = $this->getPost($tl, $categoryIds);

            $exists = $this->post->newQueryBuilder()->whereHas('translations', function ($q) use ($post) {
                $q->where('slug', '=', $post['en']['slug']);
            })->exists();
            if ($exists) {
                if ($force) {
                    $post['en']['slug'] .= "-".time();
                } else {
                    continue;
                }
            }
            $this->post->create($post);
            $count++;
        }
        echo $count;
    }
    public function post(Request $request) {
        $this->getPost(['link' => $request->get('url'), 'featured_image' => '']);
    }
    protected function get_http_response_code($url)
    {
        $headers = get_headers($url);
        return substr($headers[0], 9, 3);
    }
    protected function getPostFromList($pageLink)
    {

        $posts = [];
        $html = file_get_contents($pageLink);
        $crawler = new Crawler();
        $crawler->addHtmlContent($html);
        $divs = $crawler->filterXPath('//div[contains(@id,"dle-content")]')->filterXPath('//article[contains(@class, "shortstory")]');
        $nodeCount = $divs->count();
        for ($i=$nodeCount-1; $i>=0; $i--) {
            $node = $divs->getNode($i);
            $crawler2 = new Crawler($node);
            $excerpt = $crawler2->filterXPath('//div[contains(@class, "description")]')->html('');
            $linkHeader = $crawler2->filterXPath('//a[contains(@class, "header")]')->getNode(0);
            $link = $title = null;
            if ($linkHeader) {
                $link = $linkHeader->getAttribute('href');
                $title = $linkHeader->textContent;
            }
            $featured_image = null;
            $image = $crawler2->filterXPath('//img')->getNode(0);
            $featured_image = null;
            if ($image) {
                $l = $image->getAttribute('src');
                $newImage = $this->crawl($l);
                if ($newImage) {
                    $featured_image = $newImage->id;
                }
            }
            $posts[]  = compact('title', 'link', 'excerpt', 'featured_image');
        }
        return $posts;
    }

    protected function getPost($tl, $categoryIds = null)
    {
        $link = $tl['link'];
        $post = [
            'user_id' => 1,
            'status' => 1,
            'medias_single' => [
                'image' => $tl['featured_image'] ?? 2,
            ]
        ];
        if ($categoryIds) {
            $post['category_ids'] = explode(",", $categoryIds);
        }
        $en = [
            'title' => $tl['title'],
            'slug' => \Str::slug($tl['title']),
            'excerpt' => $tl['excerpt'],
            'body' => ''
        ];
        $content = file_get_contents($link);
        $crawler = new Crawler();
        $crawler->addHtmlContent($content);
        $detail = $crawler->filterXPath('//div[contains(@class, "description")]');
        $en['body'] = $detail->html('');
        $images = $detail->filter('img');
        if ($images->count()) {
            $imgLinks = [];
            $newImages = [];
            $firstImage =null;
            for ($im =0; $im < $images->count(); $im++) {
                $l = $images->getNode($im)->getAttribute('src');
                $newImage = $this->crawl($l);
                if ($newImage) {
                    $imgLinks[] = $l;
                    $newImages[] = $newImage->path->getUrl();
                    if ($im === 0 && (!$tl['featured_image'] || $tl['featured_image'] === 2)) {
                        $post['medias_single'] = [
                            'image' => $newImage->id,
                        ];
                    }
                }
            }
            ksort($imgLinks);
            ksort($newImages);
            foreach ($imgLinks as $index => $imgL) {
                $en['body'] = str_replace($imgL, $newImages[$index], $en['body']);
            }
        }

        $post['en'] = $en;
        $post['vi'] = $en;
        return $post;
    }

    protected function crawl($url)
    {
        try {
            if ($url && $this->get_http_response_code($url)  == "200") {

                $contents = file_get_contents($url);
                if ($contents !== false) {
                    $parts = parse_url($url);
                    $str = $parts['scheme'] . '://' . $parts['host'] . $parts['path'];
                    $name = substr($str, strrpos($str, '/') + 1);
                    $filePath = storage_path('app/tmp/' . $name);
                    while (\File::exists($filePath)) {
                        $name = \Str::random(6)."_".$name;
                        $filePath = storage_path('app/tmp/' . $name);
                    }
                    if (\File::put($filePath, $contents)) {
                        $uploadedFile = new UploadedFile($filePath, $name, \File::mimeType($filePath));
                        $savedFile = $this->fileService->store($uploadedFile);

                        if (is_string($savedFile)) {
                            return null;
                        }

                        event(new FileWasUploaded($savedFile));
                        return $savedFile;
                    }
                }
            }
        } catch (\ErrorException $e) {
            return null;
        }

        return null;
    }
}
