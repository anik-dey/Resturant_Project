.registerbtn {
background-color: #4CAF50;
color: white;
padding: 16px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
opacity: 0.9;
}
.registerbtn:hover {
opacity: 1;
}


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="description" content="#" />
<meta property="og:title" content="#" />
<meta property="og:description" content="#" />
<meta property="og:image" content="social-image.png" />
<meta name="format-detection" content="telephone=no">

<!-- FAVICONS ICON -->
<link rel="icon" href="{{ asset('assets/images/menuicon/oxdora.ico') }}" type="image/x-icon" />
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/menuicon/oxdora.png') }}" />
<!-- PAGE TITLE HERE -->
<title>@yield('title')</title>
<!-- MOBILE SPECIFIC -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
<script src="httpsassets/js/html5shiv.min.js"></script>
<script src="httpsassets/js/respond.min.js"></script>
<![endif]-->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--load all styles -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
<!--load all styles -->

<!-- STYLESHEETS -->
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/plugins.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/search.css') }}">
<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('/assets/css/skin/skin-1.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/templete.css') }}">
<!-- Revulation Slider CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/rs-plugin/css/settings.css') }}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/custom.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/jquery-ui.css') }}">
@stack('css')
