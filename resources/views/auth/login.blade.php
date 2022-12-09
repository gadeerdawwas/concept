<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.creativegigstf.com/sinco/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Nov 2022 21:33:55 GMT -->
<head>

@include('site.include.head')
	</head>

	<body>
		<div class="main-page-wrapper">
            <div class="user-data-page clearfix d-md-flex">
				<div class="illustration-wrapper d-none d-md-flex align-items-center">
					<div class="illustration-holder">
						<img src="{{ asset('asset/site/images/team/Business Card-01.jpg') }}" alt="" class="illustration m-auto">
					</div>
				</div> <!-- /.illustration-wrapper -->

				<div class="form-wrapper">
					<div class="d-flex justify-content-between align-items-center">
						<div class="logo"><a href="index.html" class="d-block"><img src="images/logo/logo_01.png" alt="" width="131"></a></div>

					</div>
					<form  method="POST" action="{{ route('login') }}" class="user-data-form mt-60 lg-mt-40">
						<h2>THE CONCEPT SOLUTION.</h2>

						<div class="row">


                                @csrf


                                <div class="col-12">
                                    <div class="input-group-meta mb-25">
                                        <label>Email</label>
                                        <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="input-group-meta mb-25">
                                        <label>Password</label>
                                        <input type="password" placeholder="Enter Password" class="pass_log_id" name="password">
                                        <span class="placeholder_icon"><span class="passVicon">
                                            <img src="images/icon/icon_40.svg" alt=""></span>
                                        </span>


                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>








                                        <div class="col-12">
                                            <button class="btn-eight w-100 mt-50 mb-40 lg-mt-30 lg-mb-30"> {{ __('Login') }}</button>
                                        </div>







						</div>
					</form>
				</div> <!-- /.form-wrapper -->
			</div> <!-- /.user-data-page -->





			<button class="scroll-top">
				<i class="bi bi-arrow-up-short"></i>
			</button>



@include('site.include.script')
		</div> <!-- /.main-page-wrapper -->
	</body>

<!-- Mirrored from html.creativegigstf.com/sinco/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Nov 2022 21:33:56 GMT -->
</html>
