@extends('site.include.layout')

@section('content')
    <div class="hero-banner-five">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-md-7">
                    <h1 class="hero-heading">  <span>{{ __('messages.title_1') }}
                    {{ __('messages.title_2') }}
                </span></h1>
                    <p class="text-lg mb-50 pt-40 pe-xl-5 md-pt-30 md-mb-40">
                        {{ __('messages.homepage') }}e.</p>

                </div>
            </div>
        </div> <!-- /.container -->
        <div class="illustration-holder">
            <img src="{{ asset('asset/site/images/assets/ils_13.svg') }}" alt="" class="main-illustration ms-auto">
            <img src="{{ asset('asset/site/images/assets/ils_13_1.svg') }}" alt="" class="shapes shape-one">
            <img src="{{ asset('asset/site/images/assets/ils_13_2.svg') }}" alt="" class="shapes shape-two"
                data-aos="fade-down">
            <img src="{{ asset('asset/site/images/assets/ils_13_2.svg') }}" alt="" class="shapes shape-three"
                data-aos="fade-down">
        </div> <!-- /.illustration-holder -->
        <div class="shapes oval-one"></div>
    </div> <!-- /.hero-banner-five -->




    <div class="fancy-feature-seventeen position-relative mt-160 xl-mt-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-4" data-aos="fade-right">
                    <div class="title-style-three text-center text-lg-start">
                        <h2 class="main-title"><span>{{ __('messages.What_do_you') }} {{ __('messages.Our_Services') }} </span>
                            </h2>
                    </div> <!-- /.title-style-three -->
                </div>


                <div class="col-xl-8 col-lg-8" data-aos="fade-left">
                    <p class="m0 text-center text-lg-start md-pt-30">{{ __('messages.Our_Services_content') }}</p>
                </div>
            </div>

            <div class="row justify-content-center pt-30">
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-right">
                    <div class="block-style-twelve mt-30 ps-lg-0 pe-xl-5 me-xl-2">
                        <div class="icon d-flex align-items-end"><img
                                src="{{ asset('asset/site/images/icon/it-department.png') }}" alt=""></div>
                        <h5><a href="#">{{ __('messages.IT_Services') }}</a></h5>
                        <p>{{ __('messages.IT_Services_content') }}</p>

                    </div> <!-- /.block-style-twelve -->
                </div> <!-- /.item -->
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="block-style-twelve mt-30 active">
                        <div class="icon d-flex align-items-end"><img
                                src="{{ asset('asset/site/images/icon/cloud-computing.png') }}" alt=""></div>
                        <h5><a href="#">{{ __('messages.Networking') }}</a></h5>
                        <p>{{ __('messages.Networking_content') }}</p>

                    </div> <!-- /.block-style-twelve -->
                </div> <!-- /.item -->
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-left">
                    <div class="block-style-twelve mt-30">
                        <div class="icon d-flex align-items-end"><img
                                src="{{ asset('asset/site/images/icon/data-transfer.png') }}" alt=""></div>
                        <h5><a href="#">{{ __('messages.Products') }}</a></h5>
                        <p>{{ __('messages.Products_content') }}</p>

                    </div> <!-- /.block-style-twelve -->
                </div> <!-- /.item -->
            </div>
            {{-- <div class="row justify-content-center pt-30">
            <div class="col-lg-4 col-md-6" data-aos="fade-right">
                <div class="block-style-twelve mt-30 ps-lg-0 pe-xl-5 me-xl-2">
                    <div class="icon d-flex align-items-end">
                        <img src="{{ asset('asset/site/images/icon/contact-mail.png') }}" alt="">
                    </div>
                    <h5><a href="#">Networking</a></h5>
                    <p>providing a high quality of network , makes the work stable.

                        .</p>

                </div> <!-- /.block-style-twelve -->
            </div> <!-- /.item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="block-style-twelve mt-30 active">
                    <div class="icon d-flex align-items-end"><img
                            src="{{ asset('asset/site/images/icon/cloud-sync.png') }}" alt=""></div>
                    <h5><a href="#">Data recovery</a></h5>
                    <p>because your data is the most important thing you have, we can help you to restore it !

                        .</p>
                    <a href="#" class="tran3s more-btn"></a>
                </div> <!-- /.block-style-twelve -->
            </div> <!-- /.item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-left">
                <div class="block-style-twelve mt-30">
                    <div class="icon d-flex align-items-end"><img
                            src="{{ asset('asset/site/images/icon/web.png') }}" alt=""></div>
                    <h5><a href="#">Website creation</a></h5>
                    <p>Creating a website or E-commerce is necessary these days!

                        .</p>

                </div> <!-- /.block-style-twelve -->
            </div> <!-- /.item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-right">
                <div class="block-style-twelve mt-30 ps-lg-0 pe-xl-5 me-xl-2">
                    <div class="icon d-flex align-items-end"><img
                            src="{{ asset('asset/site/images/icon/original.png') }}" alt=""></div>
                    <h5><a href="#">Original license</a></h5>
                    <p>we can provide all the original license with the best price for you

                        .</p>

                </div> <!-- /.block-style-twelve -->
            </div> <!-- /.item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="block-style-twelve mt-30 active">
                    <div class="icon d-flex align-items-end"><img
                            src="{{ asset('asset/site/images/icon/computing.png') }}" alt=""></div>
                    <h5><a href="#">programming</a></h5>
                    <p>we can make any program you dream about to be true in any language

                        .</p>

                </div> <!-- /.block-style-twelve -->
            </div> <!-- /.item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-left">
                <div class="block-style-twelve mt-30">
                    <div class="icon d-flex align-items-end"><img
                            src="{{ asset('asset/site/images/icon/maintenance.png') }}" alt=""></div>
                    <h5><a href="#">Maintenance contract</a></h5>
                    <p>we provide our services to maintenance and fixing your devices.

                        .</p>

                </div> <!-- /.block-style-twelve -->
            </div> <!-- /.item -->
        </div> --}}
        </div> <!-- /.container -->
        <div class="shapes shape-one"></div>
    </div> <!-- /.fancy-feature-seventeen -->

    <div class="fancy-feature-nineteen position-relative pt-130 lg-pt-80">
        <div class="container">
            <div class="row">
                <div class="title-style-three pb-15">

                    <h3 class="main-title">{{ __('messages.What_We_Do') }}

                    </h3>
                </div> <!-- /.title-style-three -->
                <div class="col-xxl-6 col-lg-6 col-md-6">
                    <div class="block-style-thirteen" data-aos="fade-right">

                        <ul class="style-none list-item">

                            <ul class="style-none list-item">

                                <li data-aos="fade-up" data-aos-delay="100">
                                    <div class="numb tran3s"><img src="{{ asset('asset/site/images/icon/networks.png') }}"
                                            alt=""></div>
                                    <h6>{{ __('messages.NETWORK') }}</h6>
                                    <span>{{ __('messages.NETWORK_content') }}</span>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="numb tran3s"><img
                                            src="{{ asset('asset/site/images/icon/it-department.png') }}" alt="">
                                    </div>

                                    <h6>{{ __('messages.SECURITY_SOLUTION') }}</h6>
                                    <span>{{ __('messages.SECURITY_SOLUTION_content') }}</span>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="100">
                                    <div class="numb tran3s"><img src="{{ asset('asset/site/images/icon/control.png') }}"
                                            alt=""></div>
                                    <h6>{{ __('messages.CCESS_CONTROL') }}</h6>
                                    <span>{{ __('messages.CCESS_CONTROL_content') }}</span>
                                </li>

                            </ul>

                        </ul>
                    </div> <!-- /.block-style-thirteen -->
                </div>
                <div class="col-xxl-6 col-lg-6 col-md-6">
                    <div class="block-style-thirteen" data-aos="fade-right">

                        <ul class="style-none list-item">
                            <li data-aos="fade-up" data-aos-delay="50">
                                <div class="numb tran3s"><img src="{{ asset('asset/site/images/icon/data-center.png') }}"
                                        alt=""></div>
                                <h6>{{ __('messages.DATA_CENTER') }}</h6>
                                <span>{{ __('messages.DATA_CENTER_content') }}</span>
                            </li>

                            <li data-aos="fade-up">
                                <div class="numb tran3s"><img src="{{ asset('asset/site/images/icon/data-transfer.png') }}"
                                        alt=""></div>
                                <h6>{{ __('messages.CCTV_SOLUTION') }}</h6>
                                <span>{{ __('messages.CCTV_SOLUTION_content') }}</span>
                            </li>

                            <li data-aos="fade-up">
                                <div class="numb tran3s"><img
                                        src="{{ asset('asset/site/images/icon/INFRASTRiUCTURE.png') }}" alt="">
                                </div>
                                <h6>{{ __('messages.INFRASTRiUCTURE') }}</h6>
                                <span>{{ __('messages.INFRASTRiUCTURE_content') }}</span>
                            </li>
                        </ul>
                    </div> <!-- /.block-style-thirteen -->
                </div>
            </div>
        </div> <!-- /.container -->

    </div> <!-- /.fancy-feature-nineteen -->






    {{-- <div class="fancy-feature-twentyOne mt-200 pb-100 lg-mt-120 lg-pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7 ms-auto">
                <div class="block-style-five ps-xxl-5" data-aos="fade-left">
                    <div class="title-style-three">
                        <div class="sc-title">OVERVIEW
                        </div>
                        <h4 class="">The concept solution is Saudi company providing the best solutions
                            in information technology to match up the new technology and solutions

                            .</h4>
                    </div>

                    <a href="contact-us.html" class="btn-eight ripple-btn">Send Message</a>
                </div>
            </div>
        </div>
    </div>
    <div class="illustration-holder" data-aos="fade-right">
        <img src="{{ asset('asset/site/images/assets/ils_16.svg') }}" alt=""
            class="w-100 main-illustration">
    </div>
    <img src="{{ asset('asset/site/images/shape/shape_37.svg') }}" alt="" class="shapes shape-one">
    <div class="shapes oval-one"></div>
    <div class="shapes oval-two"></div>
</div> --}}


    {{-- <div class="partner-section-two mt-30 mb-130 lg-mb-80">
    <div class="container">
        <div class="title-style-three text-center mb-50 lg-mb-20" data-aos="fade-up">
            <div class="sc-title">Partners</div>
        </div> <!-- /.title-style-three -->
        <div class="row">

            <div class="col-12 m-auto">
                <ul class="style-none text-center mt-40 lg-mt-10">
                    <li class="partner-logo-block-one d-inline-block" data-aos="fade-up"><a href="#"
                            class="d-flex align-items-center justify-content-center"><img
                                src="{{ asset('asset/site/images/logo/Plogo-13.png') }}" alt=""></a>
                    </li>
                    <li class="partner-logo-block-one d-inline-block" data-aos="fade-up"
                        data-aos-delay="100"><a href="#"
                            class="d-flex align-items-center justify-content-center"><img
                                src="{{ asset('asset/site/images/logo/Plogo-12.png') }}" alt=""></a>
                    </li>
                    <li class="partner-logo-block-one d-inline-block" data-aos="fade-up"
                        data-aos-delay="200"><a href="#"
                            class="d-flex align-items-center justify-content-center"><img
                                src="{{ asset('asset/site/images/logo/Plogo-9.png') }}" alt=""></a>
                    </li>
                    <li class="partner-logo-block-one d-inline-block" data-aos="fade-up"
                        data-aos-delay="300"><a href="#"
                            class="d-flex align-items-center justify-content-center"><img
                                src="{{ asset('asset/site/images/logo/Plogo-7.png') }}" alt=""></a>
                    </li>
                    <li class="partner-logo-block-one d-inline-block" data-aos="fade-up"
                        data-aos-delay="400"><a href="#"
                            class="d-flex align-items-center justify-content-center"><img
                                src="{{ asset('asset/site/images/logo/Plogo-8.png') }}" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div> <!-- /.container -->
</div> --}}
    <div class="partner-section-two mt-30 mb-130 lg-mb-80">
        <div class="container">
            <div class="title-style-three text-center mb-50 lg-mb-20" data-aos="fade-up">
                <div class="sc-title">{{ __('messages.Clients') }}</div>
            </div> <!-- /.title-style-three -->
            <div class="row">

                <div class="col-12 m-auto">
                    <ul class="style-none text-center mt-40 lg-mt-10">

                        @foreach ($Clients as $Client)
                        <li class="partner-logo-block-one d-inline-block" data-aos="fade-up"><img
                            src="{{ asset($Client->name) }}" alt="" width="140px">
                    </li>
                        @endforeach





                    </ul>
                </div>
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.partner-section-two -->
    <div class="partner-section-two mt-30 mb-130 lg-mb-80">
        <div class="container">
            <div class="title-style-three text-center mb-50 lg-mb-20" data-aos="fade-up">
                <div class="sc-title">{{ __('messages.Suppliers') }}</div>
            </div> <!-- /.title-style-three -->
            <div class="row">

                <div class="col-12 m-auto">
                    <ul class="style-none text-center mt-40 lg-mt-10">

                        @foreach ($suppliers as $supplier)
                            <li class="partner-logo-block-one d-inline-block" data-aos="fade-up"><img
                                    src="{{ asset($supplier->name) }}" alt="" width="140px">
                            </li>
                        @endforeach





                    </ul>
                </div>
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.partner-section-two -->
@endsection
