@extends('site.include.layout')

@section('content')
<div class="theme-inner-banner">
    <div class="container">
        <h2 class="intro-title">Networking</h2>
        <ul class="page-breadcrumb style-none d-flex">
            <li><a href="index.html">Home</a></li>
            <li class="current-page">Networking</li>
        </ul>
    </div>
    <img src="{{ asset('asset/site/images/assets/ils_20.svg') }}" alt="" class="shapes illustration-two">
</div> <!-- /.theme-inner-banner -->



<div class="fancy-feature-twelve mt-200 pb-50 lg-mt-120">
    <div class="container">
        <div class="row align-items-center align-items-xl-start">
            <div class="col-xl-8 col-md-8 order-md-last">
                <div class="block-style-nine color-two">
                    <div class="title-style-three pb-10" data-aos="fade-up">
                        <div class="sc-title">Services</div>
                        <h2 class="main-title">Networking</h2>
                    </div> <!-- /.title-style-three -->
                    <p>Network infrastructure is the hardware and software resources of an entire network that enable network connectivity, communication, operations and management of an enterprise network. It provides the communication path and services between users, processes, applications, services and external networks/the internet.

                        and in The concept solution our team are highly trained to make the best network and offer the client the best solutions in every case.</p>
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
