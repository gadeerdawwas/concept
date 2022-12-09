@extends('site.include.layout')

@section('content')
<div class="theme-inner-banner">
    <div class="container">
      <h2 class="intro-title">


        @if ( app()->getLocale() === 'ar')
{{ $services->title_ar }}
        {{-- {{ $services->title_ar }} --}}
        @else

        {{ $services->title_en }}
        @endif

    </h2>
      <ul class="page-breadcrumb style-none d-flex">
        <li><a href="{{ route('home') }}">{{ __('messages.Home') }}</a></li>
        <li class="current-page"> @if ( app()->getLocale() === 'ar')

            {{ $services->title_ar }}
            @else

            {{ $services->title_en }}
            @endif</li>
      </ul>
    </div>
    <img
      src="{{ asset('asset/site/images/assets/ils_20.svg') }}"
      alt=""
      class="shapes illustration-two"
    />
  </div>
  <!-- /.theme-inner-banner -->

  <!--
        =============================================
            Feature Section Twelve
        ==============================================
        -->
  <div class="fancy-feature-twelve mt-200 pb-50 lg-mt-120">
    <div class="container">
      <div class="row align-items-center align-items-xl-start">
        <div class="col-xl-8 col-md-8 order-md-last">
          <div class="block-style-nine color-two">
            <div class="title-style-three pb-10" data-aos="fade-up">
              <div class="sc-title">{{ __('messages.Services') }}</div>
              <h2 class="main-title"> @if ( app()->getLocale() === 'ar')

                {{ $services->title_ar }}
                @else

                {{ $services->title_en }}
                @endif</h2>
            </div>
            <!-- /.title-style-three -->
            <p>

                @if ( app()->getLocale() === 'ar')

                {{ $services->content_ar }}
                @else

                {{ $services->content_en }}
                @endif

            </p>

          </div>
          <!-- /.block-style-nine -->
        </div>
        <div class="col-xl-4 col-md-4 order-md-first" data-aos="fade-right">
          <div
            class="illustration-holder position-relative d-inline-block pe-md-5 me-xxl-5 sm-mt-60"
          >
            <img
              src="{{ asset($services->image) }}"
              alt=""
              class="transform-img-meta"
            />
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection
