@extends($themeName."::layouts.master")
@section('content')
    {{--    <main id="detail_article">--}}
    {{--        <section id="carousel">--}}
    {{--            <div id="carouselId_product" class="carousel slide carousel-fade " data-ride="carousel">--}}
    {{--                <div class="carousel-inner" role="listbox">--}}
    {{--                    <div class="carousel-item active detail__article--box">--}}
    {{--                        <img alt="{{ $post->title }}"--}}
    {{--                             src="{{ blog_post_image($post) }}" class="img-fluid">--}}
    {{--                        <div class="detail__article--box__one">--}}
    {{--                            <div class="row">--}}
    {{--                                <div class="col-md-6 left d-none d-md-block">--}}
    {{--                                    <h3>{{ $post->title }}</h3>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-6 right d-flex d-md-block">--}}
    {{--                                    <div class="">--}}
    {{--                                        <h5>Category</h5>--}}
    {{--                                        <p>{{ $post->categories->pluck('name')->join(', ') }}</p>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="d-md-block pl-50px">--}}
    {{--                                        <h5 class="pt-md-2">Share</h5>--}}
    {{--                                        <div class="d-flex">--}}
    {{--                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urldecode($post->getUrl()) }}"--}}
    {{--                                               target="_blank">--}}
    {{--                                                <svg width="11" height="20" viewBox="0 0 11 20" fill="none"--}}
    {{--                                                     xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                                    <path id="footer facebook"--}}
    {{--                                                          d="M6.93536 19.2706V10.5988H9.71347L10.1672 6.74471H6.93536V4.86775C6.93536 3.87532 6.96211 2.89059 8.42547 2.89059H9.90766V0.134894C9.90766 0.0934623 8.63453 0 7.34653 0C4.6566 0 2.9723 1.59657 2.9723 4.52859V6.74471H0V10.5988H2.9723V19.2706H6.93536Z"--}}
    {{--                                                          fill="#A6A6A6"/>--}}
    {{--                                                </svg>--}}
    {{--                                            </a>--}}
    {{--                                            <a href="https://plus.google.com/share?url={{ urldecode($post->getUrl()) }}"--}}
    {{--                                               target="_blank">--}}
    {{--                                                <svg width="24" height="16" viewBox="0 0 24 16" fill="none"--}}
    {{--                                                     xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                                    <path id="footer gg plus" fill-rule="evenodd" clip-rule="evenodd"--}}
    {{--                                                          d="M14.8601 8.22034C14.8601 7.73503 14.8106 7.36089 14.7412 6.98675V6.98671H7.88512V9.53485H12.0067C11.8383 10.6168 10.7583 12.7301 7.88512 12.7301C5.40821 12.7301 3.38702 10.637 3.38702 8.04848C3.38702 5.45992 5.40821 3.36683 7.88512 3.36683C9.30191 3.36683 10.2431 3.98363 10.7781 4.50944L12.7498 2.57814C11.4816 1.36473 9.84685 0.636719 7.88512 0.636719C3.87254 0.636719 0.622803 3.95329 0.622803 8.04848C0.622803 12.1437 3.87254 15.4602 7.88512 15.4602C12.076 15.4602 14.8601 12.4571 14.8601 8.22034ZM21.7541 5.08378V7.23524H23.8622V9.39704H21.7541V11.5485H19.6359V9.39704H17.5278V7.23524H19.6359V5.08378H21.7541Z"--}}
    {{--                                                          fill="#A6A6A6"/>--}}
    {{--                                                </svg>--}}
    {{--                                            </a>--}}
    {{--                                            <a href="https://twitter.com/share?url={{ urldecode($post->getUrl()) }}&amp;text={{ $post->title }}&amp;hashtags=simplesharebuttons"--}}
    {{--                                               target="_blank">--}}
    {{--                                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none"--}}
    {{--                                                     xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                                    <path id="footer tweeter"--}}
    {{--                                                          d="M17.2705 4.33101C17.2825 4.49313 17.2825 4.65529 17.2825 4.81742C17.2825 9.76243 13.3887 15.4602 6.27193 15.4602C4.0794 15.4602 2.04264 14.8464 0.329346 13.781C0.640863 13.8158 0.940358 13.8273 1.26386 13.8273C3.07297 13.8273 4.73835 13.2367 6.06825 12.2292C4.36694 12.1944 2.9412 11.1174 2.44997 9.63506C2.68961 9.66978 2.92921 9.69295 3.18084 9.69295C3.52827 9.69295 3.87575 9.64661 4.19922 9.56559C2.42603 9.21813 1.0961 7.71263 1.0961 5.89443V5.84813C1.61126 6.12607 2.21036 6.29978 2.84531 6.32292C1.80296 5.65121 1.12007 4.50472 1.12007 3.20765C1.12007 2.51281 1.31173 1.87586 1.64722 1.31997C3.55221 3.58982 6.41568 5.07215 9.62656 5.23431C9.56667 4.95637 9.53071 4.66688 9.53071 4.37735C9.53071 2.31593 11.256 0.636719 13.4006 0.636719C14.5148 0.636719 15.5212 1.08837 16.2281 1.81797C17.1027 1.65584 17.9414 1.34314 18.6842 0.914662C18.3966 1.78325 17.7856 2.51284 16.9829 2.97605C17.7617 2.89502 18.5165 2.68652 19.2114 2.39703C18.6843 3.13817 18.0253 3.79826 17.2705 4.33101Z"--}}
    {{--                                                          fill="#A6A6A6"/>--}}
    {{--                                                </svg>--}}
    {{--                                            </a>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </section>--}}
    {{--        <section>--}}
    {{--            <div class="detail__article">--}}
    {{--                <div class="container">--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col-md-7">--}}
    {{--                            <div class="detail__article--text">--}}
    {{--                                @if($post->excerpt)--}}
    {{--                                    <div class="text__detail-1">{!! $post->excerpt !!}</div>--}}
    {{--                                @endif--}}
    {{--                                {!! $post->body !!}--}}
    {{--                                <hr>--}}
    {{--                                <div class="d-flex align-content-center share" style="padding-left: 15px">--}}
    {{--                                    <h5 class="pt-2">Share</h5>--}}
    {{--                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urldecode($post->getUrl()) }}"--}}
    {{--                                       target="_blank">--}}
    {{--                                        <svg width="11" height="20" viewBox="0 0 11 20" fill="none"--}}
    {{--                                             xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                            <path id="footer facebook"--}}
    {{--                                                  d="M6.93536 19.2706V10.5988H9.71347L10.1672 6.74471H6.93536V4.86775C6.93536 3.87532 6.96211 2.89059 8.42547 2.89059H9.90766V0.134894C9.90766 0.0934623 8.63453 0 7.34653 0C4.6566 0 2.9723 1.59657 2.9723 4.52859V6.74471H0V10.5988H2.9723V19.2706H6.93536Z"--}}
    {{--                                                  fill="#A6A6A6"/>--}}
    {{--                                        </svg>--}}
    {{--                                    </a>--}}
    {{--                                    <a href="https://plus.google.com/share?url={{ urldecode($post->getUrl()) }}"--}}
    {{--                                       target="_blank">--}}
    {{--                                        <svg width="24" height="16" viewBox="0 0 24 16" fill="none"--}}
    {{--                                             xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                            <path id="footer gg plus" fill-rule="evenodd" clip-rule="evenodd"--}}
    {{--                                                  d="M14.8601 8.22034C14.8601 7.73503 14.8106 7.36089 14.7412 6.98675V6.98671H7.88512V9.53485H12.0067C11.8383 10.6168 10.7583 12.7301 7.88512 12.7301C5.40821 12.7301 3.38702 10.637 3.38702 8.04848C3.38702 5.45992 5.40821 3.36683 7.88512 3.36683C9.30191 3.36683 10.2431 3.98363 10.7781 4.50944L12.7498 2.57814C11.4816 1.36473 9.84685 0.636719 7.88512 0.636719C3.87254 0.636719 0.622803 3.95329 0.622803 8.04848C0.622803 12.1437 3.87254 15.4602 7.88512 15.4602C12.076 15.4602 14.8601 12.4571 14.8601 8.22034ZM21.7541 5.08378V7.23524H23.8622V9.39704H21.7541V11.5485H19.6359V9.39704H17.5278V7.23524H19.6359V5.08378H21.7541Z"--}}
    {{--                                                  fill="#A6A6A6"/>--}}
    {{--                                        </svg>--}}
    {{--                                    </a>--}}
    {{--                                    <a href="https://twitter.com/share?url={{ urldecode($post->getUrl()) }}&amp;text={{ $post->title }}&amp;hashtags=simplesharebuttons"--}}
    {{--                                       target="_blank">--}}
    {{--                                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none"--}}
    {{--                                             xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                            <path id="footer tweeter"--}}
    {{--                                                  d="M17.2705 4.33101C17.2825 4.49313 17.2825 4.65529 17.2825 4.81742C17.2825 9.76243 13.3887 15.4602 6.27193 15.4602C4.0794 15.4602 2.04264 14.8464 0.329346 13.781C0.640863 13.8158 0.940358 13.8273 1.26386 13.8273C3.07297 13.8273 4.73835 13.2367 6.06825 12.2292C4.36694 12.1944 2.9412 11.1174 2.44997 9.63506C2.68961 9.66978 2.92921 9.69295 3.18084 9.69295C3.52827 9.69295 3.87575 9.64661 4.19922 9.56559C2.42603 9.21813 1.0961 7.71263 1.0961 5.89443V5.84813C1.61126 6.12607 2.21036 6.29978 2.84531 6.32292C1.80296 5.65121 1.12007 4.50472 1.12007 3.20765C1.12007 2.51281 1.31173 1.87586 1.64722 1.31997C3.55221 3.58982 6.41568 5.07215 9.62656 5.23431C9.56667 4.95637 9.53071 4.66688 9.53071 4.37735C9.53071 2.31593 11.256 0.636719 13.4006 0.636719C14.5148 0.636719 15.5212 1.08837 16.2281 1.81797C17.1027 1.65584 17.9414 1.34314 18.6842 0.914662C18.3966 1.78325 17.7856 2.51284 16.9829 2.97605C17.7617 2.89502 18.5165 2.68652 19.2114 2.39703C18.6843 3.13817 18.0253 3.79826 17.2705 4.33101Z"--}}
    {{--                                                  fill="#A6A6A6"/>--}}
    {{--                                        </svg>--}}
    {{--                                    </a>--}}
    {{--                                </div>--}}
    {{--                                @if($relatedPosts->isNotEmpty())--}}
    {{--                                    <div class="bottom">--}}
    {{--                                        <h5>Related articles</h5>--}}
    {{--                                        <div class="row">--}}
    {{--                                            @foreach($relatedPosts as $rPost)--}}
    {{--                                                <div class="col-md-6 pr-lg-4">--}}
    {{--                                                    <img src="{{ blog_post_image($rPost) }}" class="w-100"--}}
    {{--                                                         alt="{{ $rPost->title }}">--}}
    {{--                                                    <p>{{ $rPost->title }}</p>--}}
    {{--                                                </div>--}}
    {{--                                            @endforeach--}}

    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                @endif--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        @if($post->quote)--}}
    {{--                            <div class="col-md-5 d-none d-md-block">--}}
    {{--                                <div class="blockquote">--}}
    {{--                                    <svg width="60" height="35" viewBox="0 0 60 35" fill="none"--}}
    {{--                                         xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                        <g id="QUOTE ICON">--}}
    {{--                                            <path id="Path" fill-rule="evenodd" clip-rule="evenodd"--}}
    {{--                                                  d="M20.5819 0L0 35H14.4181L35 0H20.5819Z" fill="#998543"/>--}}
    {{--                                            <path id="Path Copy" fill-rule="evenodd" clip-rule="evenodd"--}}
    {{--                                                  d="M45.5819 0L25 35H39.4181L60 0H45.5819Z" fill="#998543"/>--}}
    {{--                                        </g>--}}
    {{--                                    </svg>--}}
    {{--                                    <h2>{{ $post->quote }}</h2>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        @endif--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </section>--}}
    {{--    </main>--}}
    <div class="mainlist ui container segment" style="transform: none;">
        <p></p>
        <div class="speedbar ui  mobile_hidden"><span id="dle-speedbar"><span itemscope=""
                                                                              itemtype="http://data-vocabulary.org/Breadcrumb"><a
                        href="https://forward-drill.com/" itemprop="url"><span itemprop="title">FORWARD GROUP</span></a></span> » <span
                    itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
                        href="https://forward-drill.com/forward-in-operation/" itemprop="url"><span itemprop="title">FORWARD in operation</span></a></span> » Photo Gallery</span>
        </div>
        <p></p>
        <section id="content" class="ui equal width grid" style="transform: none;">
            <div class="column" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="theiaStickySidebar" style="padding-top: 1px; padding-bottom: 1px; position: static;">
                    <div id="dle-content">
                        <article class="fullstory story ui basic segment">
                            <h1 class="ui header">
        <span class="content">
            <span class="title"><span class="masha_index masha_index1" rel="1"></span>{{$post->title}}</span>
        </span>
                                <p><a href="#modal" class="mod"><img src="{{asset('images/zvonok.png')}}" width="200px"></a></p>
                                <div class="ui clearing divider"></div>
                                <div class="description">
                                    {!! $post->body !!}
                                </div>
                                <h3><span class="masha_index masha_index4" rel="4"></span>See also:</h3>
                                <div class="related-news ui default default ">
                                    <div class="ui stackable top_img three column grid">
                                        @if($relatedPosts->isNotEmpty())
                                            @foreach($relatedPosts as $rPost)
                                                <div class="column">
                                                    <div class="ui items default default ">
                                                        <div class="item">
                                                            <a href="{{$rPost->getUrl()}}"><img class="mb-4"
                                                                    src="{{ blog_post_image($rPost)}}"></a>
                                                            <div class="content">
                                                                <a href="{{$rPost->getUrl()}}"
                                                                   class="header"><span class="masha_index masha_index5"
                                                                                        rel="5"></span>{{$rPost->title}}
                                                                </a>
                                                                <div class="description"><span
                                                                        class="masha_index masha_index6"
                                                                        rel="6"></span>{{$rPost->excerpt}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
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
        </section>

    </div>
@endsection
