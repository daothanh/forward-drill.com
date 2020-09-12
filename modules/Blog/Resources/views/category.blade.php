@extends($themeName."::layouts.master")
{{--@section('content')--}}
{{--    <main id="articles">--}}
{{--        <?php $latestPost = blog_latest_post(); ?>--}}
{{--        @if($latestPost)--}}
{{--            <section>--}}
{{--                <div class="articles">--}}
{{--                    <div class="container-fluid" style="background-color: #F5F5F5">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="articles__left">--}}
{{--                                        <p><a href="{{ page(1)->getUrl() }}">{{ page(1)->title }}</a> / <a--}}
{{--                                                href="{{ page(3)->getUrl() }}">{{ page(3)->title }}</a></p>--}}
{{--                                        <img src="{{ blog_post_image($latestPost) }}" class="img-fluid"--}}
{{--                                             alt="{{ $latestPost->title }}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="articles__right">--}}
{{--                                        @foreach($latestPost->categories as $latestPostCategory)--}}
{{--                                            <a href="{{ $latestPostCategory->getUrl() }}">{{ $latestPostCategory->name }}</a>--}}
{{--                                        @endforeach--}}
{{--                                        <h3>{{ $latestPost->title }}</h3>--}}
{{--                                        <p class="text">{{ $latestPost->excerpt }}</p>--}}
{{--                                        <a href="{{ $latestPost->getUrl() }}" class="btn-stonex">--}}
{{--                                            <span>Chi tiết</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}
{{--        @endif--}}
{{--        <section>--}}
{{--            <div class="outproject">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <?php--}}
{{--                            $categories = blog_post_categories();--}}
{{--                            ?>--}}
{{--                            <ul class="nav justify-content-center d-none d-lg-flex">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="{{ page(3)->getUrl() }}" class="nav-link">Tất cả</a>--}}
{{--                                </li>--}}
{{--                                @foreach($categories as $c)--}}
{{--                                    <li class="nav-item @if($c->id === $category->id) active @endif">--}}
{{--                                        <a href="{{ $c->getUrl() }}" class="nav-link">{{ $c->name }}</a>--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                            <?php // $posts = blog_posts(); ?>--}}
{{--                            <div class="row">--}}
{{--                                @foreach($posts as $post)--}}
{{--                                    <div class="col-md-6 article__link">--}}
{{--                                        <a href="{{ $post->getUrl() }}" class="post-{{ $post->id }}">--}}
{{--                                            <div class="outproject__img text-center">--}}
{{--                                                <div class="img">--}}
{{--                                                    <img src="{{ blog_post_image($post) }}" class="img-fluid"--}}
{{--                                                         alt="{{ $post->title }}">--}}
{{--                                                </div>--}}
{{--                                                <p>{{ $post->created_at->format("d J Y") }}</p>--}}
{{--                                                <h4>{{ $post->title }}</h4>--}}
{{--                                                <span class="view_detail">Chi tiết</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                                <div class="col-12 justify-content-center text-center">--}}
{{--                                    {{ $posts->links() }}--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        @include('simple::partials/newsletter')--}}
{{--    </main>--}}
{{--@endsection--}}
@section('content')
    <div class="mainlist ui container segment" style="transform: none;">
        <p></p>
        <div class="speedbar ui  mobile_hidden"><span id="dle-speedbar"><span itemscope=""
                                                                              itemtype="http://data-vocabulary.org/Breadcrumb"><a
                        href="https://forward-drill.com/" itemprop="url"><span itemprop="title">FORWARD GROUP</span></a></span> » <span
                    itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
                        href="https://forward-drill.com/forward-in-operation/" itemprop="url"><span itemprop="title">FORWARD in operation</span></a></span></span>
        </div>
        <p></p>
        <section id="content" class="ui equal width grid" style="transform: none;">
            <div class="column"
                 style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="theiaStickySidebar" style="padding-top: 1px; padding-bottom: 1px; position: static;">
                    <div id="dle-content">
                        @foreach($posts as $post)
                            <article class="shortstory story ui basic segment">
                                <div class="column">
                                    <div class="ui items default default segment">
                                        <div class="item">
                                            <a href="https://forward-drill.com/forward-in-operation/103-photo-gallery.html"
                                               class="ui small image"><img
                                                    src="{{$post->image->path->getUrl()}}"></a>
                                            <div class="content">
                                                <a href="{{$post->getUrl()}}"
                                                   class="header">{{ $post->title }}</a>
                                                <div class="description">{!! $post->excerpt !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                        <div class="ui pagination menu ignore-select">
                            {{$posts->links()}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="four wide computer only column"
                 style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="theiaStickySidebar"
                     style="padding-top: 0px; padding-bottom: 1px; position: static; top: 16px; left: 1054.65px;">
                    <aside class="rightside">

                        <br>
                        <div class="form-outer sp-force-hide">
                            <style id="subscribe-form-style" class="">.sp-force-hide {
                                    display: none;
                                }

                                .sp-form[sp-id="79592"] {
                                    display: block;
                                    background: #ffffff;
                                    padding: 15px;
                                    width: 400px;
                                    max-width: 100%;
                                    border-radius: 8px;
                                    -moz-border-radius: 8px;
                                    -webkit-border-radius: 8px;
                                    border-color: #dddddd;
                                    border-style: solid;
                                    border-width: 1px;
                                    font-family: Arial, "Helvetica Neue", sans-serif;
                                }

                                .sp-form[sp-id="79592"] .sp-form-control {
                                    background: #ffffff;
                                    border-color: #cccccc;
                                    border-style: solid;
                                    border-width: 1px;
                                    font-size: 15px;
                                    padding-left: 8.75px;
                                    padding-right: 8.75px;
                                    border-radius: 4px;
                                    -moz-border-radius: 4px;
                                    -webkit-border-radius: 4px;
                                    height: 35px;
                                    width: 100%;
                                }

                                .sp-form[sp-id="79592"] .sp-field label {
                                    color: #444444;
                                    font-size: 13px;
                                    font-style: normal;
                                    font-weight: bold;
                                }

                                .sp-form[sp-id="79592"] .sp-button {
                                    border-radius: 4px;
                                    -moz-border-radius: 4px;
                                    -webkit-border-radius: 4px;
                                    background-color: #bf0101;
                                    color: #e6e1e1;
                                    width: auto;
                                    font-weight: 400;
                                    font-style: normal;
                                    font-family: Arial, "Helvetica Neue", sans-serif;
                                    box-shadow: inset 0 -2px 0 0 #820101;
                                    -moz-box-shadow: inset 0 -2px 0 0 #820101;
                                    -webkit-box-shadow: inset 0 -2px 0 0 #820101;
                                }

                                .sp-form[sp-id="79592"] .sp-button-container {
                                    text-align: center;
                                }
                            </style>
                            <div id="sp-form-79592" sp-id="79592"
                                 sp-hash="95504b4ca023e3006c3cbf7b47ffb16a961f9d013e86940380c01b1603658233" sp-lang="en"
                                 class="sp-form sp-form-regular sp-form-embed"
                                 sp-show-options="%7B%22condition%22%3A%22onEnter%22%2C%22delay%22%3A10%2C%22repeat%22%3A3%2C%22background%22%3A%22dark%22%2C%22position%22%3A%22bottom-right%22%2C%22amd%22%3Afalse%7D">
                                <div class="sp-message">
                                    <div></div>
                                </div>
                                <div id="droppableArea" class="sp-element-container ui-sortable ui-droppable">
                                    <div class="sp-field " sp-id="sp-af5b0263-1f04-42ab-8904-335c69a463ba">
                                        <div class=" " style="font-family: inherit; line-height: 1.2;"><p>Fill out the
                                                form and we will send you the catalogue of our equipment to the notified
                                                address.</p></div>
                                    </div>
                                    <div class="sp-field " sp-id="sp-265326c1-d87a-475e-a62b-ef5af0d34841"><label
                                            class="sp-control-label "> <span class="">Name</span> <strong
                                                class="">*</strong> </label> <input type="text" sp-type="input"
                                                                                    name="sform[0LjQvNGP]"
                                                                                    class="sp-form-control "
                                                                                    placeholder="Your Name"
                                                                                    sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%7D"
                                                                                    required="required"></div>
                                    <div class="sp-field " sp-id="sp-95b039d9-98ec-4942-a1ad-2a2c6a2aa631"><label
                                            class="sp-control-label "> <span class="">Email</span> <strong
                                                class="">*</strong> </label> <input type="email" sp-type="email"
                                                                                    name="sform[email]"
                                                                                    class="sp-form-control "
                                                                                    placeholder="mail@gmail.com"
                                                                                    sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%2C%22wrong%22%3A%22%D0%9D%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20email-%D0%B0%D0%B4%D1%80%D0%B5%D1%81%22%7D"
                                                                                    required="required"></div>
                                    <div class="sp-field " sp-id="sp-d57e57b5-2689-4c4b-95a9-56ff1ecb945a"><label
                                            class="sp-control-label "> <span class="">Phone number</span> </label>
                                        <input type="tel" sp-type="phone" name="sform[phone]" class="sp-form-control "
                                               placeholder="+79876543210" sp-tips="%7B%7D"></div>
                                </div>
                                <div class="sp-field sp-button-container "
                                     sp-id="sp-68971a6b-e1b4-410b-a18b-c5896158f830">
                                    <button id="sp-68971a6b-e1b4-410b-a18b-c5896158f830" class="sp-button "> Send the
                                        catalogue
                                    </button>
                                </div>
                                <div class="sp-link-wrapper sp-brandname__left"></div>
                            </div>
                        </div>
                        <div class="informer">
                            <center>
                                <h3>We are in social networks</h3>
                                <font size="6">
                                    <a href="https://www.facebook.com/ForwardGroupCo/" target="_blank"
                                       rel="external nofollow"><i class="facebook icon"></i></a>
                                    <a href="https://plus.google.com/u/0/b/101656338178462369420/+Forward-corp"
                                       target="_blank" rel="external nofollow"><i class="google icon"></i></a>
                                    <a href="https://www.linkedin.com/in/forward-group-59931390/" target="_blank"
                                       rel="external nofollow"><i class="linkedin icon"></i></a>
                                    <a href="https://www.youtube.com/watch?v=IlJjvDpvJCM&amp;list=PLTqCw_Z0EDwign2R17RfLyOodJjsEdB7l"
                                       target="_blank" rel="external nofollow"><i class="youtube icon"></i></a>
                                </font>
                            </center>
                        </div>
                        <br>
                        <div class="informer">
                            <iframe
                                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fforwardhddru%2F&amp;tabs=timeline&amp;width=253&amp;height=321&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId"
                                width="253" height="321" style="border:none;overflow:hidden" scrolling="no"
                                frameborder="3" allowtransparency="true"></iframe>

                        </div>
                    </aside>
                </div>
            </div>
@endsection
