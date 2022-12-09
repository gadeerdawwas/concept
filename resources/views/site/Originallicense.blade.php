@extends('site.include.layout')

@section('content')
    <div class="theme-inner-banner">
        <div class="container">
            <h2 class="intro-title">Original license
            </h2>
            <ul class="page-breadcrumb style-none d-flex">
                <li><a href="index.html">Home</a></li>
                <li class="current-page">Original license
                </li>
            </ul>
        </div>
        <img src="{{ asset('asset/site/images/assets/ils_20.svg') }}" alt="" class="shapes illustration-two">
    </div> <!-- /.theme-inner-banner -->




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
                            <div class="sc-title">Services</div>
                            <h2 class="main-title">Original license
                            </h2>
                        </div> <!-- /.title-style-three -->
                        <p>
                            The concept solution is a Microsoft Certified Partner holding a series of Microsoft
                            Competencies/Specializations, such as:

                            windows,Office 365, Skype for Business, SQL, SQL enterprise

                            and many partner ship with companies like: ADOBE, AUTODESK, McAfee, NOD.
                        </p>
                    </div> <!-- /.block-style-nine -->
                </div>
                <div class="col-xl-4 col-md-4 order-md-first" data-aos="fade-right">
                    <div class="illustration-holder position-relative d-inline-block pe-md-5 me-xxl-5 sm-mt-60">
                        <img src="{{ asset('asset/site/images/assets/ils_18.svg') }}" alt="" class="transform-img-meta">
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('asset/site/images/shape/shape_25.svg') }}" alt="" class="shapes bg-shape">
    </div> <!-- /.fancy-feature-twelve -->
@endsection
