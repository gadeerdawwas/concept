<div class="footer-style-four theme-basic-footer">
    <div class="container">
        <div class="inner-wrapper">

            <div class="row">
                <div class="col-lg-4 footer-intro mb-40">
                    <div class="logo"><a href="#"><img src="{{ asset('asset/site/images/logo/logo_1.png') }}" alt="" width="180"></a></div>
                    <p>{{ __('messages.foot') }}</p>
                    <ul class="d-flex social-icon style-none">
                        <li><a href="{{ $information ? $information->facebook : '' }}" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ $information ? $information->twitter : '' }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ $information ? $information->linkedin : '' }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="{{ $information ? $information->instagram : '' }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="mailto:info{{ $information ? $information->gmail : '' }}" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i>
                        </a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-4 ms-auto mb-30">
                    <h5 class="footer-title">{{ __('messages.Links') }}</h5>
                    <ul class="footer-nav-link style-none">
                        <li class="d-block d-lg-none">
                            <div class="logo"><a href="{{ route('home') }}"><img
                                        src="{{ asset('asset/site/images/logo/logo_1.png') }}" alt=""
                                        width="130"></a></div>
                        </li>
                        <li class="nav-item active ">
                            <a class="nav-link " href="{{ route('home') }}"
                                >{{ __('messages.Home') }}</a>

                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('about') }}"
                               >{{ __('messages.about_us') }}</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Profile') }}"
                                role="button">{{ __('messages.Profile') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact_us') }}"
                                role="button">{{ __('messages.Contact_us') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-4 mb-30">
                    <h5 class="footer-title">{{ __('messages.Services') }}</h5>
                    <ul class="footer-nav-link style-none">

                        @foreach ($servicesdata as $services)

                        <li><a href="{{ route('services', $services->blog) }}"
                                class="dropdown-item"><span>
                                    @if (app()->getLocale() === 'ar')
                                        {{ $services->title_ar }}
                                    @else
                                        {{ $services->title_en }}
                                    @endif



                                </span></a></li>
                    @endforeach
                    </ul>
                </div>

            </div>

            <div class="bottom-footer">
                <div class="d-lg-flex justify-content-between align-items-center">

                    <p class="copyright text-center order-lg-0 pb-15">All rights reserved  @2022 .</p>
                </div>
            </div>
        </div> <!-- /.inner-wrapper -->
    </div>
</div> <!-- /.footer-style-four -->

<button class="scroll-top">
    <i class="bi bi-arrow-up-short"></i>
</button>
