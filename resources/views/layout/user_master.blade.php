<html>

<head>
    <title>@yield('tab-title')</title>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript">
        // var base_url = "https://demo.appsbd.com/support-system/";
    </script>

    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/icon-logo/apple-touch-icon.png?t=1567576828')}}">
    <link rel="icon" type="image/png" href="{{asset('images/icon-logo/logo.png?t=1567576828')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/icon-logo/favicon-32x32.png?t=1567576828')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/icon-logo/favicon-16x16.png?t=1567576828')}}">
    <link rel="manifest" href="{{asset('images/icon-logo/manifest.json')}}">
    <meta name="theme-color" content="#0b8ec2">
    <meta name="msapplication-navbutton-color" content="#0b8ec2">
    <meta name="og:image" content="{{asset('images/icon-logo/logo.png')}}">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/3.3.7/css/bootstrap.min.css?v=1593445139')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/4.7.0/css/font-awesome.min.css?v=1517588080')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/ionicons/2.0.1/css/ionicons.min.css?v=1517588082')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2-bootstrap.min.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/client/css/styles.css?v=1.0')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/client/css/theme-responsive.css?v=1.0')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/client/css/color.css?v=1593445149')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/client/css/app-custom.css?v=1519250402')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/main-style.css?v=2.2.2')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/bootstrapValidation/css/bootstrapValidator.min.css?v=2.2.2')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/sliding-growl-notification/css/notify.css?v=2.2.2')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/datetimepicker/jquery.datetimepicker.css?v=2.2.2')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/perfect-scrollbar/css/perfect-scrollbar.min.css?v=2.2.2')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/selectize/css/selectize.bootstrap3.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/selectize/css/selectize.default.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-material/css/material-all-css.css?v=1517588076')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-dropdown/css/bootstrap-dropmenu.min.css?v=1517588076')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/tooltipster/css/tooltipster.bundle.min.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/tooltipster/css/plugins/tooltipster/sideTip/themes/borderless.min.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/colorpicker/css/bootstrap-colorpicker.min.css?v=1517588080')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/apsbd-chat/css/appsbd-chat.css?v=1582047122')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/animate.min.css?v=1517588076')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/fa-ani.min.css?v=1517588076')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/magnific/magnific-bootstrap.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/sweetalert/sweetalert.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/icon/style.css?v=1561641202')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app-custom.css?v=1561641200')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/user-custom.css?v=1517588076')}}" type="text/css">
    <script src="{{asset('plugins/jquery/3.3.1/jquery.min.js?v=1537555248')}}" type="text/javascript"></script>
    <script src="{{asset('common-script/js?v=1.5')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/bootstrap/3.3.7/js/bootstrap.min.js?v=1517588076')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/bootstrapValidation/js/bootstrapValidator.min.js?v=2.2.2')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/grid/js/jquery.ba-resize.min.js?v=1517588082')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/sliding-growl-notification/js/notify.min.js?v=2.2.2')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/datetimepicker/jquery.datetimepicker.js?v=2.2.2')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js?v=2.2.2')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/selectize/js/standalone/selectize.min.js?v=1517588086')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/switch-btn/js/bootstrap-checkbox.min.js?v=1517588086')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/bootstrap-material/js/material.js?v=1517588076')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/bootstrap-material/js/ripples.min.js?v=1593445139')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/bootstrap-material/js/marerial-init.js?v=1517588076')}}" type="text/javascript"></script>
    <script src="{{asset('js/numbertotext.js?v=1517588076')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/tooltipster/js/tooltipster.bundle.min.js?v=1517588088')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/colorpicker/js/bootstrap-colorpicker.min.js?v=1517588080')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.maskedinput-1.6.min.js?v=1517588076')}}" type="text/javascript"></script>
    <script src="{{asset('js/Masking.js?v=1517588076')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/nicescroll/jquery.nicescroll.min.js?v=1517588086')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/quicksearch/jquery.quicksearch.min.js?v=1593445139')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js?v=1517588086')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/clipboard/clipboard.min.js?v=1517588080')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/clipboard/init.js?v=1517588080')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/select2/js/select2.js?v=1517588086')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/apsbd-chat/js/appsbd-chat.min.js?v=1531498776')}}" type="text/javascript"></script>
    <script src="{{asset('js/base64.js?v=1517588076')}}" type="text/javascript"></script>
    <script src="{{asset('js/main-script.min.js?v=2.2.2')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/magnific/magnific.min.js?v=1517588086')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/sweetalert/sweetalert.min.js?v=1517588086')}}" type="text/javascript"></script>
    <script src="{{asset('js/custom-app-script.min.js?v=1.5')}}" type="text/javascript"></script>
    <script src="{{asset('js/user-custom.js?v=1517588076')}}" type="text/javascript"></script>

    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
</head>
@yield('body')
</html>