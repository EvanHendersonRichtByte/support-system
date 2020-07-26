<html lang="en">

<head>
    <title>@yield('tab-title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="resource-type" content="document">
    <meta name="robots" content="all, index, follow">
    <meta name="googlebot" content="all, index, follow">
    <link rel="stylesheet"
        href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"
        type="text/css">
    <link rel="stylesheet" href="{{asset('theme/default/css/skin/skin-green.min.css')}}" type="text/css">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/icon-logo/apple-touch-icon.png?t=1567576828')}}">
    <link rel="icon" type="image/png" href="{{asset('images/icon-logo/logo.png?t=1567576828')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/icon-logo/favicon-32x32.png?t=1567576828')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/icon-logo/favicon-16x16.png?t=1567576828')}}">
    <link rel="manifest" href="{{asset('images/icon-logo/manifest.json')}}">
    <meta name="theme-color" content="#0b8ec2">
    <meta name="msapplication-navbutton-color" content="#0b8ec2">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/3.3.7/css/bootstrap.min.css?v=1593445139')}}"
        type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/4.7.0/css/font-awesome.min.css?v=1517588080')}}"
        type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/ionicons/2.0.1/css/ionicons.min.css?v=1517588082')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2-bootstrap.min.css?v=1517588086')}}"
        type="text/css">
    <link rel="stylesheet" href="{{asset('theme/default/css/AdminLTE.min.css?v=1517588088')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/default/css/custom.css?v=1530836036')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/main-style.css?v=2.2.2')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/bootstrapValidation/css/bootstrapValidator.min.css?v=2.2.2')}}"
        type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/sliding-growl-notification/css/notify.css?v=2.2.2')}}"
        type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/datetimepicker/jquery.datetimepicker.css?v=2.2.2')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/perfect-scrollbar/css/perfect-scrollbar.min.css?v=2.2.2')}}"
        type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/selectize/css/selectize.bootstrap3.css?v=1517588086')}}"
        type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/selectize/css/selectize.default.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-material/css/material-all-css.css?v=1517588076')}}"
        type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-dropdown/css/bootstrap-dropmenu.min.css?v=1517588076')}}"
        type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/tooltipster/css/tooltipster.bundle.min.css?v=1517588086')}}"
        type="text/css">
    <link rel="stylesheet"
        href="{{asset('plugins/tooltipster/css/plugins/tooltipster/sideTip/themes/borderless.min.css?v=1517588086')}}"
        type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/colorpicker/css/bootstrap-colorpicker.min.css?v=1517588080')}}"
        type="text/css">
    <link rel="stylesheet" href="{{asset('css/animate.min.css?v=1517588076')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/fa-ani.min.css?v=1517588076')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/magnific/magnific-bootstrap.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/sweetalert/sweetalert.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/icon/style.css?v=1561641202')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app-responsive.css?v=1530836036')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/apsbd-chat/css/appsbd-chat-admin.css?v=1542128234')}}"
        type="text/css">
    <link rel="stylesheet" href="{{asset('css/app-custom.css?v=1561641200')}}" type="text/css">
    <script src="{{asset('plugins/jquery/3.3.1/jquery.min.js?v=1537555248')}}" type="text/javascript"></script>
    <script src="{{asset('common-script/js?v=1.5')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/bootstrap/3.3.7/js/bootstrap.min.js?v=1517588076')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/select2/js/select2.full.min.js?v=1517588086')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/bootstrapValidation/js/bootstrapValidator.min.js?v=2.2.2')}}" type="text/javascript">
    </script>
    <script src="{{asset('plugins/grid/js/jquery.ba-resize.min.js?v=1517588082')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/sliding-growl-notification/js/notify.min.js?v=2.2.2')}}" type="text/javascript">
    </script>
    <script src="{{asset('plugins/datetimepicker/jquery.datetimepicker.js?v=2.2.2')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js?v=2.2.2')}}"
        type="text/javascript"></script>
    <script src="{{asset('plugins/selectize/js/standalone/selectize.min.js?v=1517588086')}}" type="text/javascript">
    </script>
    <script src="{{asset('plugins/switch-btn/js/bootstrap-checkbox.min.js?v=1517588086')}}" type="text/javascript">
    </script>
    <script src="{{asset('plugins/bootstrap-material/js/material.js?v=1517588076')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/bootstrap-material/js/ripples.min.js?v=1593445139')}}" type="text/javascript">
    </script>
    <script src="{{asset('plugins/bootstrap-material/js/marerial-init.js?v=1517588076')}}" type="text/javascript">
    </script>
    <script src="{{asset('js/numbertotext.js?v=1517588076')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/tooltipster/js/tooltipster.bundle.min.js?v=1517588088')}}" type="text/javascript">
    </script>
    <script src="{{asset('plugins/colorpicker/js/bootstrap-colorpicker.min.js?v=1517588080')}}" type="text/javascript">
    </script>
    <script src="{{asset('js/jquery.maskedinput-1.6.min.js?v=1517588076')}}" type="text/javascript"></script>
    <script src="{{asset('js/Masking.js?v=1517588076')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/nicescroll/jquery.nicescroll.min.js?v=1517588086')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/quicksearch/jquery.quicksearch.min.js?v=1593445139')}}" type="text/javascript">
    </script>
    <script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js?v=1517588086')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/clipboard/clipboard.min.js?v=1517588080')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/clipboard/init.js?v=1517588080')}}" type="text/javascript"></script>
    <script src="{{asset('js/base64.js?v=1517588076')}}" type="text/javascript"></script>
    <script src="{{asset('js/main-script.min.js?v=2.2.2')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/magnific/magnific.min.js?v=1517588086')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/sweetalert/sweetalert.min.js?v=1517588086')}}" type="text/javascript"></script>
    <script src="{{asset('theme/default/js/app.min.js?v=1537555248')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/apsbd-chat/js/appsbd-chat-admin.min.js?v=1545932274')}}" type="text/javascript">
    </script>
    <script src="{{asset('plugins/apsbd-chat/js/init-admin.js?v=1530836036')}}" type="text/javascript"></script>
    <script src="{{asset('js/custom-app-script.min.js?v=1.5')}}" type="text/javascript"></script>
    <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>

<body class="aps-ctrl-p skin-green sidebar-mini    ">
    @include('partials.admin.page_loader')
    <div class="wrapper">
        @include('partials.admin.header')

        @include('partials.admin.sidebar')

        @yield('main-content')
        
        @include('partials.admin.footer')
    </div>
</body>

</html>