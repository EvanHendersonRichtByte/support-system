<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="resource-type" content="document">
    <meta name="robots" content="all, index, follow">
    <meta name="googlebot" content="all, index, follow">
    <script type="text/javascript">
        var base_url="https://demo.appsbd.com/support-system/";
    </script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/default/css/skin/skin-blue.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/default/css/AdminLTE.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/default/css/custom.css')}}" type="text/css">
    <script src="{{asset('theme/default/js/app.min.js')}}" type="text/javascript"></script>
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
    <link rel="stylesheet" href="{{asset('css/fade-bg.css?v=1517588076')}}" type="text/css">
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
    <script src="{{asset('js/custom-app-script.min.js?v=1.5')}}" type="text/javascript"></script>
    <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
</head>

<body class="aps-ctrl-p login-page">
    @include('partials.admin.page_loader')
    <div class="login-box">
        <div class="login-logo">
            <img style="max-height: 90px; max-width: 100%;min-width: 90px;"
                src="{{asset('images/logo-admin.png?t=1582047116')}}" alt="Demo Support System"><br>
            <span style="color:#fff;">
                Admin Panel</span>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="/admin/check_login" class="form bv-form material" method="post" accept-charset="utf-8"
                novalidate="novalidate">
                @csrf
                <input type="hidden" name="app_form" value="9bb1ebc171b62e6344b41e28c505c685">
                <div class="form-group has-feedback">
                    <label for="username" class="control-label"><i class="fa fa-user"></i> Username</label>
                    <input autofocus="" name="username" id="username" class="form-control" value=""
                        data-bv-notempty-message="Username is required" data-bv-notempty="true"
                        data-bv-field="username"><i class="form-control-feedback" data-bv-icon-for="username"
                        style="display: none;"></i>
                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="username"
                        data-bv-result="NOT_VALIDATED" style="display: none;">Username is required</small></div>
                <div class="form-group has-feedback">
                    <label for="password" class="control-label"><i class="fa fa-lock"></i> Password</label>
                    <input type="password" name="password" id="password" class="form-control" value=""
                        data-bv-notempty-message="Password is required" data-bv-notempty="true"
                        data-bv-field="password"><i class="form-control-feedback" data-bv-icon-for="password"
                        style="display: none;"></i>
                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="password"
                        data-bv-result="NOT_VALIDATED" style="display: none;">Password is required</small></div>
                <div class="row">
                    <div class="col-sm-12">
                        <button type="submit"
                            class="btn btn-success btn-raised fa-btn-icon faa-parent animated-hover added-ripples"><i
                                class="fa fa-an-login   faa-pulse  "></i> Sign In</button>
                        <a data-effect="mfp-move-from-top" tabindex="-1"
                            href="https://demo.appsbd.com/support-system/admin/user/forget.html"
                            class="popupform pull-right apopf">Forgot password?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <style type="text/css">
        .demo-setit {}

        .demo-table {
            border: 1px solid #ddd;
        }

        .demo-table * {
            font-size: 10px;
        }

        .demo-table tr td,
        .demo-table tr th {
            padding: 5px !important;
        }
    </style>
    <script type="text/javascript">
        $(function(){
                $(".demo-setit").on("click",function (e) {
                    e.preventDefault();
                    $("#username").val($(this).data("user"));
                    $("#password").val($(this).data("pw"));
                });
            });
    </script>

    <iframe id="app-print-iframe" style="border:none;height:0;width:0" __idm_frm__="459"></iframe>
</body>

</html>