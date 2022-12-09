@extends('site.include.layout')

@section('content')
<div class="theme-inner-banner">
    <div class="container">
        <h2 class="intro-title">{{ __('messages.barcode') }}</h2>
        <ul class="page-breadcrumb style-none d-flex">
            <li><a href="{{ route('home') }}">{{ __('messages.Home') }}</a></li>
            <li class="current-page">{{ __('messages.barcode') }}</li>
        </ul>
    </div>

</div> <!-- /.theme-inner-banner -->


<div class="container">
   <img style="    margin: auto;" src="{{ asset('asset/site/images/assets/0000.png') }}" width="400px"  alt="">
</div>

@endsection
