<meta charset="UTF-8">
<meta name="keywords" content="Data Science, Analytics, Data, sass, software company">
@php
    $rtl = app()->getLocale() === 'ar' ? '_rtl' : '';
@endphp

<meta name="description" content="Sinco - Data Science & Analytics HTML5 Template is designed especially for the agency, multipurpose and business and those who offer business-related services.">
  <meta property="og:site_name" content="Sinco">
  <meta property="og:url" content="https://heloshape.com/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Sinco - Data Science & Analytics HTML5 Template">
<meta name='og:image' content='images/assets/ogg.png'>
<!-- For IE -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- For Resposive Device -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- For Window Tab Color -->
<!-- Chrome, Firefox OS and Opera -->
{{-- <meta name="theme-color" content="#913BFF">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#913BFF">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#913BFF"> --}}
<title>THE CONCEPT SOLUTION.</title>
<!-- Favicon -->
<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('asset/site/images/logo/newlogo.png') }}">
<!-- Main style sheet -->
<!-- responsive style sheet -->

@if ( app()->getLocale() === 'ar')

<link rel="stylesheet" type="text/css" href="{{ asset('asset/site/css/style_rtl.css') }}" media="all">

@else

<link rel="stylesheet" type="text/css" href="{{ asset('asset/site/css/style.css') }}" media="all">

@endif


<link rel="stylesheet" type="text/css" href="{{ asset('asset/site/css/responsive.css') }}" media="all">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Fix Internet Explorer ______________________________________-->
<!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6374d93bdaff0e1306d7b7a5/1gi07145s';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    <!--End of Tawk.to Script-->
    <!--End of Tawk.to Script-->

    @yield('css')
