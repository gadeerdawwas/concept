@extends('site.include.layout')

@section('content')
<div class="theme-inner-banner">
    <div class="container">
        <h2 class="intro-title">{{ __('messages.Profile') }}</h2>
        <ul class="page-breadcrumb style-none d-flex">
            <li><a href="{{ route('home') }}">{{ __('messages.Home') }}</a></li>
            <li class="current-page">{{ __('messages.Profile') }}</li>
        </ul>
    </div>

</div> <!-- /.theme-inner-banner -->


<div class="container">
   
    <a href="https://online.flippingbook.com/view/809322760/" class="fbo-embed" data-fbo-id="31cd9d26a4" data-fbo-ratio="3:2" data-fbo-lightbox="yes" data-fbo-width="100%" data-fbo-height="auto" data-fbo-version="1" style="max-width: 100%">The concept solution</a><script async defer src="https://online.flippingbook.com/EmbedScriptUrl.aspx?m=redir&hid=809322760"></script>

</div>

@endsection
