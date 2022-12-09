@extends('site.include.layout')
@section('css')

    <style>
     h3{
    font-family:Quicksand;
}
.alert{
  width:50%;
  margin:20px auto;
  padding:30px;
  position:relative;
  border-radius:5px;
  box-shadow:0 0 15px 5px #ccc;
}
.close{
  /* position:absolute;
  width:30px;
  height:30px;
  opacity:0.5;
  border-width:1px;
  border-style:solid;
  border-radius:50%;
  right:15px;
  top:25px;
  text-align:center;
  font-size:1.6em;
  cursor:pointer; */
  position: absolute;
    width: 30px;
    height: 30px;
    /* opacity: 0.5; */
    border-width: 1px;
    border-style: solid;
    border-radius: 50%;
    right: 3px;
    top: 2px;
    text-align: center;
    font-size: 1.6em;
    cursor: pointer;
    background-color: #f54302;
    color: #000;
}

    </style>

@endsection
@section('content')
    <div class="theme-inner-banner">
        <div class="container">
            <h2 class="intro-title text-center">{{ __('messages.Contact_us') }}
            </h2>
            <ul class="page-breadcrumb style-none d-flex justify-content-center">
                <li><a href="{{ route('home') }}">{{ __('messages.Home') }}</a></li>

                <li class="current-page">{{ __('messages.Contact_us') }}</li>
            </ul>
    @if (session()->has('success'))
    <div class="alert success-alert">
        <h3>{{ __('messages.message') }}</h3>
        <a class="close" style="background: red">&times;</a>
      </div>
@endif

        </div>



        <img src="{{ asset('asset/site/images/shape/shape_38.svg') }}" alt="" class="shapes shape-one">
        <img src="{{ asset('asset/site/images/shape/shape_39.svg') }}" alt="" class="shapes shape-two">
    </div> <!-- /.theme-inner-banner -->


    <div class="contact-section-one mb-170 lg-mb-120">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="address-block-two text-center mb-40 sm-mb-20">
                        <div class="icon d-flex align-items-center justify-content-center m-auto"><img
                                src="{{ asset('asset/site/images/icon/icon_18.svg') }}" alt=""></div>
                        <h5 class="title">{{ __('messages.Contact_Info') }}</h5>

                        <p>{{ __('messages.Email') }} :<a href="tel:310.841.5500" class="call"> info@thecs.com.sa</a>



                            </a></p>
                    </div> <!-- /.address-block-two -->
                </div>
                <div class="col-md-6">
                    <div class="address-block-two text-center mb-40 sm-mb-20">
                        <div class="icon d-flex align-items-center justify-content-center m-auto"><img
                                src="{{ asset('asset/site/images/icon/icon_19.svg') }}" alt=""></div>
                        <h5 class="title">{{ __('messages.OUR_HOURS') }}
                        </h5>
                        <p>{{ __('messages.OUR_HOURS_info') }}
                        </p>
                    </div> <!-- /.address-block-two -->
                </div>
            </div>
        </div>

        <div class="mt-100 lg-mt-70">
            <div class="container">
                <div class="row gx-xxl-5">
                    <div class="col-lg-8 d-flex order-lg-last">
                        <div class="form-style-one">
                            <h3 class="form-title pb-40 lg-pb-20">{{ __('messages.Send_Message') }}</h3>
                            <form action="{{ route('contact') }}" method="POST" id="contact-form"
                                data-toggle="validator">
                                @csrf

                                <div class="messages"></div>
                                <div class="row controls">
                                    <div class="col-12">
                                        <div class="input-group-meta form-group mb-30">
                                            <label>{{ __('messages.Name') }}*</label>
                                            <input type="text"  name="name"
                                                required="required" data-error="Name is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="input-group-meta form-group mb-30">
                                            <label>{{ __('messages.Email') }}*</label>
                                            <input type="email"  name="email"
                                                required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group-meta form-group mb-30">
                                            <label>{{ __('messages.Subject') }}</label>

                                            <input type="text" name="message" required="required"
                                                data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>{{ __('messages.Your_Message') }}
                                        </label>
                                        <div class="input-group-meta form-group mb-30">
                                            <textarea placeholder="Your message*" name="message_title" required="required" data-error="Please,leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-12"><button class="btn-eight ripple-btn">{{ __('messages.send_Message') }}</button></div>
                                </div>
                            </form>
                        </div> <!-- /.form-style-one -->
                    </div>

                    {{-- <div class="col-lg-6 d-flex order-lg-first">
                        <div class="map-area-one mt-10 me-lg-4 md-mt-50">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe class="gmap_iframe"
                                        src="https://maps.google.com/maps?q=vibes%20jeddah&amp;t=m&amp;z=18&amp;output=embed&amp;iwloc=near"
                                        title="vibes jeddah" aria-label="vibes jeddah"></iframe>

                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div> <!-- /.contact-section-one -->
@endsection
@section('js')


<script>
    $(".close").click(function() {
    $(this)
      .parent(".alert")
      .fadeOut();
  });
</script>

@endsection
