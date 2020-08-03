<html>

<head>
    <title>@yield('tab-title')</title>
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
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/3.3.7/css/bootstrap.min.css?v=1593445139')}}"
        type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/4.7.0/css/font-awesome.min.css?v=1517588080')}}"
        type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/ionicons/2.0.1/css/ionicons.min.css?v=1517588082')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2-bootstrap.min.css?v=1517588086')}}"
        type="text/css">
    <link rel="stylesheet" href="{{asset('theme/client/css/styles.css?v=1.0')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/client/css/theme-responsive.css?v=1.0')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/client/css/color.css?v=1593445149')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/client/css/app-custom.css?v=1519250402')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/main-style.css?v=2.2.2')}}" type="text/css">
    <link rel="stylesheet"
        href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"
        type="text/css">
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
    <link rel="stylesheet" href="{{asset('plugins/apsbd-chat/css/appsbd-chat.css?v=1582047122')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/animate.min.css?v=1517588076')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/fa-ani.min.css?v=1517588076')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/magnific/magnific-bootstrap.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/sweetalert/sweetalert.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/icon/style.css?v=1561641202')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app-custom.css?v=1561641200')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/user-custom.css?v=1517588076')}}" type="text/css">
    <script src="{{asset('plugins/jquery/3.3.1/jquery.min.js?v=1537555248')}}" type="text/javascript"></script>
    <script src="{{asset('common-script/js?v=1.5')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/bootstrap/3.3.7/js/bootstrap.min.js?v=1517588076')}}" type="text/javascript"></script>
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
    <script src="{{asset('plugins/select2/js/select2.js?v=1517588086')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/apsbd-chat/js/appsbd-chat.min.js?v=1531498776')}}" type="text/javascript"></script>
    <script src="{{asset('js/base64.js?v=1517588076')}}" type="text/javascript"></script>
    <script src="{{asset('js/main-script.min.js?v=2.2.2')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/magnific/magnific.min.js?v=1517588086')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/sweetalert/sweetalert.min.js?v=1517588086')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/summernote/summernote.min.js?v=1517588086')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/summernote/init.js?v=1530786218')}}" type="text/javascript"></script>
    <script src="{{asset('js/custom-app-script.min.js?v=1.5')}}" type="text/javascript"></script>
    <script src="{{asset('js/user-custom.js?v=1517588076')}}" type="text/javascript"></script>

    <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
        <![endif]-->
</head>

<body class="aps-ctrl-p site-theme site-theme-2 ticket-details">
    @include('partials.user.page_loader')
    <div class="container-fluid app-content">
        <div class="app-client-2-header">
            @include('partials.user.navbar')
            <div class="container ">
                <div class="row app-header-bottom">
                    <section class="content-header">
                        <h1>
                            Ticket Details </h1>
                    </section>
                </div>
            </div>
        </div>
        @yield('main-content')
    </div>
    <div class="note-popover popover in note-table-popover bottom">
        <div class="arrow"></div>
        <div class="popover-content note-children-container">
            <div class="note-btn-group btn-group note-add"><button type="button"
                    class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title=""
                    data-original-title="Add row below"><i class="note-icon-row-below"></i></button><button
                    type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title=""
                    data-original-title="Add row above"><i class="note-icon-row-above"></i></button><button
                    type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title=""
                    data-original-title="Add column left"><i class="note-icon-col-before"></i></button><button
                    type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title=""
                    data-original-title="Add column right"><i class="note-icon-col-after"></i></button></div>
            <div class="note-btn-group btn-group note-delete"><button type="button"
                    class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title=""
                    data-original-title="Delete row"><i class="note-icon-row-remove"></i></button><button type="button"
                    class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title=""
                    data-original-title="Delete column"><i class="note-icon-col-remove"></i></button><button
                    type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1" title=""
                    data-original-title="Delete table"><i class="note-icon-trash"></i></button></div>
        </div>
    </div>
    <div id="apbd-cht-container">
        <div id="apbd-cht-conversation" class="apc-msg-window apc-not-started" style="height: 264px; display: none;">
            <div class="apc-alert-msg"></div> <button class="apc-header-sound apc-enable">
                <i class="ap-volume-high ap"></i> </button>
            <button class="apc-header-close-window">
                <svg style="height: 15px;width: 15px;">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-340.000000, -32.000000)" fill="#FFFFFF">
                            <polygon
                                points="350.656537 44 346 39.343463 341.343463 44 340 42.656537 344.656537 38 340 33.343463 341.343463 32 346 36.656537 350.656537 32 352 33.343463 347.343463 38 352 42.656537">
                            </polygon>
                        </g>
                    </g>
                </svg>
            </button>
            <div class="apc-header">
                <div class="apc-header-row">
                    <div class="apc-company-img">
                        <img src="https://demo.appsbd.com/support-system/images/logo.png" alt="Logo">
                    </div>
                    <div class="apc-header-info">
                        <div class="apc-header-info-title">Appsbd Live Chat</div>
                        <div class="apc-header-info-tag-line">Smart Techonology</div>
                    </div>

                </div>

            </div>
            <div id="apc-system-single-msg" class="apc-system-single-msg">
                <div class="apc-msg">

                </div>
            </div>
            <div class="apc-msgs">
                <div class="apc-load-move text-center"><button class="btn btn-xs btn-info"><i
                            class="fa fa-arrow-circle-o-down"></i> Load More</button></div>
            </div>
            <div class="apc-type-container">
                <div class="apc-msg-typing">
                    <div class="apc-spinner">
                        <div class="apc-bounce1"></div>
                        <div class="apc-bounce2"></div>
                        <div class="apc-bounce3"></div>
                    </div>
                    typing
                </div>
                <div class="apc-file-up-status"></div> <textarea id="apbd-cht-input" placeholder="Send a message.."
                    class="apc-chat-input"></textarea>
                <div class="apc-send-ctrl">
                    <i class="apc-attach-btn fa fa-paperclip"></i>
                    <i class="apc-send-btn fa fa-send"></i>
                </div>
            </div>
            <div class="apc-start text-center">
                <p class="text-center">
                    Welcome to our chat system.if you want to start chat with our agent then please click the button
                    bellow..
                </p>
                <button id="apc-start-chat-btn" class="btn btn-success">Start Conversation </button>
            </div>
        </div>
        <div id="apbd-cht-btn" class="apc-main-icon">
            <i class="ap ap-chat2"></i>
        </div>
    </div>
</body>

</html>