<!DOCTYPE html>
<html lang="en">
<head>
    <base href="">
    <title>{{trans("panel.site_title")}}</title>
    <meta charset="utf-8"/>
    <meta name="description"
          content="Check out all the features of the Start admin panel. A large number of templates, components and widgets."/>
    <meta name="keywords"
          content="Start, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard, html admin theme, html template"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Start HTML Pro - Bootstrap 5 HTML Multipurpose Admin Dashboard Template"/>
    <meta property="og:url" content="https://keenthemes.com/products/start-html-pro"/>
    <meta property="og:site_name" content="Keenthemes | Start HTML Pro"/>
    <link rel="canonical" href="https://preview.keenthemes.com/start-html-pro"/>
    <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
</head>
<body id="kt_body" class="page-loading-enabled page-loading">
@include("user.layout._loader")
@include("user.layout.master")

<script>var hostUrl = "assets/";</script>
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
<script src="{{asset('assets/js/custom/modals/create-app.js')}}"></script>
<script src="{{asset('assets/js/custom/modals/select-location.js')}}"></script>
<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('assets/js/custom/intro.js')}}"></script>
@yield("script")
</body>
</html>
