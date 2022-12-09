@extends('site.include.layout')


@section('content')  <div class="theme-inner-banner">
        <div class="container">
          <h2 class="intro-title">DATA Recovery</h2>
          <ul class="page-breadcrumb style-none d-flex">
            <li><a href="index.html">Home</a></li>
            <li class="current-page">DATA Recovery</li>
          </ul>
        </div>
        <img
          src="{{ asset('asset/site/images/assets/ils_20.svg') }}"
          alt=""
          class="shapes illustration-two"
        />
      </div>

      <div class="fancy-feature-twelve mt-200 pb-50 lg-mt-120">
        <div class="container">
          <div class="row align-items-center align-items-xl-start">
            <div class="col-xl-8 col-md-8 order-md-last">
              <div class="block-style-nine color-two">
                <div class="title-style-three pb-10" data-aos="fade-up">
                  <div class="sc-title">Services</div>
                  <h2 class="main-title">DATA Recovery</h2>
                </div>
                <!-- /.title-style-three -->
                <p>
                  Recovering data from a hard disk is not always an easy task.
                  For a successful data recovery, you need to seek help from a
                  data recovery specialist company. Normally, an IT technician
                  will not be able to help, but they can recommend a good data
                  recovery company. In The concept solution I Thecs , we have
                  Data Recovery Lab senior technician with different approaches
                  towards data recovery.
                </p>
              </div>
              <!-- /.block-style-nine -->
            </div>
            <div class="col-xl-4 col-md-4 order-md-first" data-aos="fade-right">
              <div
                class="illustration-holder position-relative d-inline-block pe-md-5 me-xxl-5 sm-mt-60"
              >
                <img
                  src="{{ asset('asset/site/images/assets/ils_18.svg') }}"
                  alt=""
                  class="transform-img-meta"
                />
              </div>
            </div>
          </div>
        </div>
        <img src="{{ asset('asset/site/images/shape/shape_25.svg') }}" alt="" class="shapes bg-shape" />
      </div>
      <div class="fancy-feature-twelve mt-200 pb-50 lg-mt-120">
        <div class="container">
          <div class="row align-items-center align-items-xl-start">

            <div class="col-xl-4 col-md-4 order-md-first" data-aos="fade-right">
              <div
                class="illustration-holder position-relative d-inline-block pe-md-5 me-xxl-5 sm-mt-60"
              >
                <img
                  src="{{ asset('asset/site/images/assets/ils_18.svg') }}"
                  alt=""
                  class="transform-img-meta"
                />
              </div>
            </div>

            <div class="col-xl-8 col-md-8 order-md-last">
              <div class="block-style-nine color-two">
                <div class="title-style-three pb-10" data-aos="fade-up">
                  <div class="sc-title">Services</div>
                  <h2 class="main-title">Ransomware ATTACK</h2>
                </div>
                <!-- /.title-style-three -->
                <p>
                  Ransomware causes a waking nightmare—your most precious files
                  are locked and encrypted, and the anonymous cybercriminal
                  demands a chunk of money before you can regain access. Often,
                  once you do pay, you still don’t gain access to your files.
                  Here we have team of experts to get your data back without
                  worrying about losing any file
                </p>
              </div>
              <!-- /.block-style-nine -->
            </div>
          </div>
        </div>
        <img src="{{ asset('asset/site/images/shape/shape_25.svg') }}" alt="" class="shapes bg-shape" />
      </div>
@endsection
