@extends('simple::layouts.master')
@section('content')
    @include($themeName.'::page.'.$page->filename)
@endsection
