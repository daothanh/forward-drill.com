<!DOCTYPE html>
<html lang="{{ locale() }}">
<head>
    <meta charset="utf-8">
    <meta id="token" name="token" content="{{ csrf_token() }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="user-api-token" content="{{ Auth::check() ? Auth::user()->getFirstToken()->access_token : '' }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! SEO::generate() !!}
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="preload" href="{{ Theme::url('css/main.css') }}?version=1" as="style">
    <link rel="preload" href="{{ Theme::url('js/main.js') }}?version=1" as="script">

    <link rel="stylesheet" href="{{ Theme::url('css/main.css') }}?version=1">
    <link rel="stylesheet" href="{{ Theme::url('css/my.css') }}?version=1">
    <link rel="stylesheet" href="{{ Theme::url('css/semantic.css') }}?version=1">
    <link rel="stylesheet" href="{{ Theme::url('css/styles.css') }}?version=1">
    <link rel="stylesheet" href="{{ Theme::url('css/engine.css') }}?version=1">
    @stack('css-stack')
</head>
<body>
@include("simple::partials.header")
<div class="container">
    @yield('content')
    @include("simple::partials.footer")
</div>
<script>
    window.Webvi = {
        locale: "{{ locale() }}",
        locale_prefix: '{{ locale_prefix() }}',
        assets: {
            themeUrl: '{{ Theme::url('') }}',
            logo: '{{ get_logo() }}'
        }
    };
</script>
<!-- App functions -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="{{ Theme::url('js/owlCarousel/assets/owl.carousel.css') }}?version=1">
<script src="{{ Theme::url('js/jquery.min.js') }}?version=1"></script>
<script src="{{ Theme::url('js/main.js') }}?version=1"></script>
<script src="{{ Theme::url('js/script.js') }}?version=1"></script>
<script src="{{ Theme::url('js/semantic.min.js') }}?version=1"></script>
{!! \Settings::get('website', 'script') !!}
@stack('js-stack')
</body>
</html>
