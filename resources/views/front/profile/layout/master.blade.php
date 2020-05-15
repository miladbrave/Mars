<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="icon" href="{{asset('/image/mars-icon2.ico')}}" type="image/x-icon"/>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/front/images/favicon.png')}}"/>

    <title>مارس هلدینگ | پروفایل کاربری</title>

    <link rel="stylesheet" href="{{asset('front/assets/plugins/morris/morris.css')}}">

    <link href="{{asset('front/assets/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <script src="{{asset('front/assets/js/modernizr.min.js')}}"></script>

</head>


<body class="fixed-left" style="position: relative">
<img src="{{asset('/image/10.jpg')}}" style="position: absolute" alt="mars">

 @yield('content')


<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{asset('front/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('front/assets/js/bootstrap-rtl.min.js')}}"></script>
<script src="{{asset('front/assets/js/detect.js')}}"></script>
<script src="{{asset('front/assets/js/fastclick.js')}}"></script>
<script src="{{asset('front/assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('front/assets/js/waves.js')}}"></script>
<script src="{{asset('front/assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('front/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('front/assets/js/jquery.scrollTo.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/assets/plugins/jquery-knob/excanvas.js')}}"></script>
<script src="{{asset('front/assets/plugins/jquery-knob/jquery.knob.js')}}"></script>
<script src="{{asset('front/assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{asset('front/assets/pages/jquery.dashboard.js')}}"></script>
<script src="{{asset('front/assets/js/jquery.core.js')}}"></script>
<script src="{{asset('front/assets/js/jquery.app.js')}}"></script>

</body>
</html>
