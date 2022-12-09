@extends('site.include.layout')

@section('content')

<div class="theme-inner-banner">
    <div class="container">
        <h2 class="intro-title text-center">{{ __('messages.about_us') }}</h2>
        <ul class="page-breadcrumb style-none d-flex justify-content-center">
            <li><a href="{{ route('home') }}">{{ __('messages.Home') }}</a></li>
            <li class="current-page">{{ __('messages.about_us') }}</li>
        </ul>
    </div>
    <img src="{{ asset('asset/site/images/shape/shape_38.svg') }}" alt="" class="shapes shape-one">
    <img src="{{ asset('asset/site/images/shape/shape_39.svg') }}" alt="" class="shapes shape-two">
</div> <!-- /.theme-inner-banner -->



<div class="fancy-feature-two position-relative mt-140 lg-mt-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-7 col-lg-7 col-md-7 ms-auto">
                <div class="block-style-two" data-aos="fade-left">
                    <div class="title-style-one">
                        <div class="sc-title-four"><h3>{{ __('messages.about_us') }}</h3></div>
                        <p style="white-space: pre-wrap;">{{ __('messages.about_page') }}</p>
                    </div> <!-- /.title-style-one -->

                </div> <!-- /.block-style-two -->
            </div>
        </div>
    </div> <!-- /.container -->
    <div class="illustration-holder-two sm-mt-40">
        <img src="{{ asset('asset/site/images/assets/ils_05.svg') }}" alt="" class="main-illustration w-100">
        <img src="{{ asset('asset/site/images/assets/ils_05_1.svg') }}" alt="" class="shapes shape-one">
        <img src="{{ asset('asset/site/images/assets/ils_05_2.svg') }}" alt="" class="shapes shape-two" data-aos="fade-up" data-aos-anchor=".fancy-feature-two" data-aos-delay="100" data-aos-duration="2000">
        <img src="{{ asset('asset/site/images/assets/ils_05_3.svg') }}" alt="" class="shapes shape-three" data-aos="fade-up" data-aos-anchor=".fancy-feature-two" data-aos-delay="150" data-aos-duration="2000">
        <img src="{{ asset('asset/site/images/assets/ils_05_4.svg') }}" alt="" class="shapes shape-four">
        <img src="{{ asset('asset/site/images/assets/ils_05_5.svg') }}" alt="" class="shapes shape-five">
    </div> <!-- /.illustration-holder-two -->
</div> <!-- /.fancy-feature-two -->


<div class="counter-section-one">
    <div class="inner-container bg-color style-two rounded-0 w-100">
        <div class="container">

            <div class="row gx-xxl-5">
                <div class="col-lg-3 col-sm-6 d-flex" data-aos="fade-up">
                    <div class="block-style-fourteen mt-35">
                        <h5>
                            <a href="{{ $information ? $information->linkedin : '' }}" target="_blank" > <img src="{{ asset('asset/site/images/media/linkedin.png') }}" style="margin: auto;" alt="" width="80"></a>
                           </h5>
                        <h4>
                            <a href="{{ $information ? $information->linkedin : '' }}" target="_blank" > linkedin</a>
                        </h4>
                    </div> <!-- /.block-style-fourteen -->
                </div>
                <div class="col-lg-3 col-sm-6 d-flex" data-aos="fade-up">
                    <div class="block-style-fourteen mt-35">
                        <h5>
                            <a href="{{ $information ? $information->facebook : '' }}" target="_blank" > <img src="{{ asset('asset/site/images/media/facebook.png') }}" style="margin: auto;" alt="" width="80"></a>
                           </h5>
                        <h4>
                            <a href="{{ $information ? $information->facebook : '' }}" target="_blank" > facebook</a>
                        </h4>
                    </div> <!-- /.block-style-fourteen -->
                </div>
                <div class="col-lg-3 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="block-style-fourteen mt-35">
                        <h5>
                            <a href="{{ $information ? $information->twitter : '' }}" target="_blank" > <img src="{{ asset('asset/site/images/media/twitter.png') }}" style="margin: auto;" alt="" width="80"></a>
                           </h5>
                        <h4>
                            <a href="{{ $information ? $information->twitter : '' }}" target="_blank" > Twitter</a>
                        </h4>


                    </div> <!-- /.block-style-fourteen -->
                </div>
                <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="block-style-fourteen mt-35">
                        <h5>
                            <a href="{{ $information ? $information->instagram : '' }}" target="_blank" > <img src="{{ asset('asset/site/images/media/instagram.png') }}" style="margin: auto;" alt="" width="80"></a>
                           </h5>
                        <h4>
                            <a href="{{ $information ? $information->instagram : '' }}" target="_blank" > Instagram</a>
                        </h4>

                    </div> <!-- /.block-style-fourteen -->
                </div>
            </div>
        </div>
        <img src="{{ asset('asset/site/images/shape/shape_40.svg') }}" alt="" class="shapes shape-three">
        <img src="{{ asset('asset/site/images/shape/shape_41.svg') }}" alt="" class="shapes shape-four">
    </div>  <!-- /.inner-container -->
</div> <!-- /.counter-section-one -->



<!--
=============================================
    Feature Section Five
==============================================
-->
<div class="fancy-feature-five position-relative mt-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-7 col-lg-7 col-md-7">
                <div class="block-style-five pt-60 md-pt-20" data-aos="fade-right">
                    <div class="title-style-one">
                        <div class="sc-title-four">{{ __('messages.Our_Vision') }}
                        </div>
                        <h2 class="main-title">{{ __('messages.Our_Vision') }}
                        </h2>
                    </div> <!-- /.title-style-one -->
                    <p class="pt-10 pb-70">{{__('messages.Our_Vision_content')}}</p>

                </div> <!-- /.block-style-five -->
            </div>

            <div class="col-xxl-5 col-lg-5 col-md-5 text-end">
                <div class="illustration-holder d-inline-block position-relative xs-mt-20">
                    <img src="{{ asset('asset/site/images/assets/ils_16.svg') }}" alt="" class="main-illustration w-100">
                    <img src="{{ asset('asset/site/images/assets/ils_16.svg') }}" alt="" class="shapes shape-one">
                    <img src="{{ asset('asset/site/images/assets/ils_16.svg') }}" alt="" class="shapes shape-two">
                    <img src="{{ asset('asset/site/images/assets/ils_16.svg') }}" alt="" class="shapes shape-three" data-aos="fade-down" data-aos-duration="1800">
                    <img src="{{ asset('asset/site/images/assets/ils_16.svg') }}" alt="" class="shapes shape-four" data-aos="fade-left" data-aos-duration="1800">
                    <img src="{{ asset('asset/site/images/assets/ils_16.svg') }}" alt="" class="shapes shape-five">
                </div><!--  /.illustration-holder -->
            </div>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.fancy-feature-five -->
<div class="fancy-feature-five position-relative mt-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-7 col-lg-7 col-md-7">
                <div class="block-style-five pt-60 md-pt-20" data-aos="fade-right">
                    <div class="title-style-one">
                        <div class="sc-title-four">{{ __('messages.Our_Mission') }}
                        </div>
                        <h2 class="main-title">{{ __('messages.Our_Mission') }}
                        </h2>
                    </div> <!-- /.title-style-one -->
                    <p class="pt-10 pb-70">{{__('messages.Our_Mission_content')}}</p>

                </div> <!-- /.block-style-five -->
            </div>

            <div class="col-xxl-5 col-lg-5 col-md-5 text-end">
                <div class="illustration-holder d-inline-block position-relative xs-mt-20">
                    <img src="{{ asset('asset/site/images/assets/ils_06.svg') }}" alt="" class="main-illustration w-100">
                    <img src="{{ asset('asset/site/images/assets/ils_06_1.svg') }}" alt="" class="shapes shape-one">
                    <img src="{{ asset('asset/site/images/assets/ils_06_2.svg') }}" alt="" class="shapes shape-two">
                    <img src="{{ asset('asset/site/images/assets/ils_06_3.svg') }}" alt="" class="shapes shape-three" data-aos="fade-down" data-aos-duration="1800">
                    <img src="{{ asset('asset/site/images/assets/ils_06_4.svg') }}" alt="" class="shapes shape-four" data-aos="fade-left" data-aos-duration="1800">
                    <img src="{{ asset('asset/site/images/assets/ils_06_5.svg') }}" alt="" class="shapes shape-five">
                </div><!--  /.illustration-holder -->
            </div>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.fancy-feature-five -->


@endsection
