<header class="theme-main-menu sticky-menu theme-menu-four">
    <div class="inner-content">
        <div class="d-flex align-items-center">
            {{-- <div class="logo order-lg-0"><a href="{{ route('home') }}" class="d-block"><img
                        src="{{ asset('asset/site/images/logo/mask.png') }}" alt="" ></a></div> --}}
                        <div class="logo order-lg-0"><a href="#"><img src="{{ asset('asset/site/images/logo/mask.png') }}" alt="" width="180"></a></div>
            <div class="right-widget d-flex align-items-center ms-auto order-lg-3">
                <ul class="list-unstyled">



                    <li class="nav-item dropdown dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside"
                            aria-expanded="false">{{ Config::get('languages')[App::getLocale()] }} </a>
                        <ul class="dropdown-menu">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <li><a href="{{ route('lang.switch', $lang) }}"
                                            class="dropdown-item"><span>{{ $language }}</span></a></li>
                                @endif
                            @endforeach



                        </ul>
                    </li>



                </ul>
                {{-- <a href="contact-us.html" class="send-msg-btn tran3s d-none d-lg-block">Send us Message</a> --}}
            </div> <!-- /.right-widget -->


            <nav class="navbar navbar-expand-lg order-lg-2">
                <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="d-block d-lg-none">
                            <div class="logo"><a href="#"><img
                                        src="{{ asset('asset/site/images/logo/logo_1.png') }}" alt="" width=""
                                       ></a></div>
                        </li>
                        <li class="nav-item active dropdown">
                            <a class="nav-link " href="{{ route('home') }}" role="button"
                                data-bs-auto-close="outside" aria-expanded="false">{{ __('messages.Home') }}</a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="{{ route('about') }}" role="button"
                                data-bs-auto-close="outside" aria-expanded="false">{{ __('messages.about_us') }}</a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false">{{ __('messages.Services') }}</a>
                            <ul class="dropdown-menu">
                                {{-- {{ $servicesdata }} --}}
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
                                 {{-- @foreach ($servicesdata as $services)
                                    <li><a href="{{ route('services', $services->title_en) }}"
                                            class="dropdown-item"><span>
                                                @if (app()->getLocale() === 'ar')
                                                    {{ $services->title_ar }}
                                                @else
                                                    {{ $services->title_en }}
                                                @endif
                                            </span></a></li>
                                @endforeach --}}

                                {{-- <li><a href="{{ route('Networking') }}"
                                        class="dropdown-item"><span>Networking</span></a></li>
                                <li><a href="{{ route('Data_Recovery') }}" class="dropdown-item"><span>Data
                                            recovery</span></a></li>
                                <li><a href="{{ route('Website_Creation') }}" class="dropdown-item"><span>Website
                                            creation</span></a></li>
                                <li><a href="{{ route('Original_license') }}" class="dropdown-item"><span>Original
                                            license</span></a></li>
                                <li><a href="{{ route('programming') }}"
                                        class="dropdown-item"><span>programming</span></a>
                                </li>
                                <li><a href="{{ route('Maintenance') }}" class="dropdown-item"><span>Maintenance
                                            contract
                                        </span></a></li> --}}
                            </ul>
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
                    <!-- Mobile Content -->

                </div>
            </nav>
        </div>
    </div> <!-- /.inner-content -->
</header> <!-- /.theme-main-menu -->
