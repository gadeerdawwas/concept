<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.creativegigstf.com/sinco/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Nov 2022 21:32:26 GMT -->

<head>
    @include('site.include.head')
</head>

<!--Start of Tawk.to Script-->
{{-- <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/61f822cab9e4e21181bcccfa/1fqokfq8l';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script> --}}
<!--End of Tawk.to Script-->

<body>
    <div class="main-page-wrapper">
        <!-- ===================================================
    Loading Transition
   ==================================================== -->
{{--
        <section>
            <div id="preloader">
                <div id="ctn-preloader" class="ctn-preloader">
                    <div class="animation-preloader">
                        <div class="icon"><img src="{{ asset('asset/site/images/logo/load.png') }}" alt=""
                                class="m-auto d-block" width="280"></div>
                        <div class="txt-loading mt-2">
                            <span data-text-preloader="The" class="letters-loading">
                                The
                            </span>
                            <span data-text-preloader="concept" class="letters-loading">
                                concept
                            </span>
                            <span data-text-preloader="solution" class="letters-loading">
                                solution
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!--
   =============================================
    Search
   ==============================================
   -->
        <div class="offcanvas offcanvas-top theme-search-form bg-three justify-content-center" tabindex="-1"
            id="offcanvasTop">
            <button type="button" class="close-btn tran3s" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="bi bi-x-lg"></i></button>
                {{-- <a href="#"> --}}
                    {{-- <img src="{{ asset('asset/site/images/icon/whatapp.png') }}" alt="">
                </a> --}}
        </div>


        <!--
   =============================================
    Theme Main Menu
   ==============================================
   -->
       @include('site.include.header')


  @yield('content')

        @include('site.include.footer')




        @include('site.include.script')
    </div> <!-- /.main-page-wrapper -->
</body>

<!-- Mirrored from html.creativegigstf.com/sinco/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Nov 2022 21:32:47 GMT -->

</html>
