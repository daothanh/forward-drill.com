<?php

namespace Modules\Blog\Transformers;

use Illuminate\Http\Resources\Json\Resource;

class SeoTransformer extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'keywords' => $this->keywords
        ];
    }
}
