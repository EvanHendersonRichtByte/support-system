<html lang="en">

<head>
    <title>@yield('tab-title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="resource-type" content="document">
    <meta name="robots" content="all, index, follow">
    <meta name="googlebot" content="all, index, follow">
    <script type="text/javascript">
        var base_url = "https://demo.appsbd.com/support-system/";
    </script>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" type="text/css">
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
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/3.3.7/css/bootstrap.min.css?v=1593445139')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/4.7.0/css/font-awesome.min.css?v=1517588080')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/ionicons/2.0.1/css/ionicons.min.css?v=1517588082')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2-bootstrap.min.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/default/css/AdminLTE.min.css?v=1517588088')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/default/css/custom.css?v=1530836036')}}" type="text/css">
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
    <link rel="stylesheet" href="{{asset('css/animate.min.css?v=1517588076')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/fa-ani.min.css?v=1517588076')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/magnific/magnific-bootstrap.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/sweetalert/sweetalert.css?v=1517588086')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/icon/style.css?v=1561641202')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app-responsive.css?v=1530836036')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/dropmenu/css/dropmenu.css?v=1523480130')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/jqui/jquery-ui.min.css?v=1517588082')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/grid/css/ui.jqgrid.css?v=1542128234')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app-custom.css?v=1561641200')}}" type="text/css">
    <script src="{{asset('plugins/jquery/3.3.1/jquery.min.js?v=1537555248')}}" type="text/javascript"></script>
    <script src="{{asset('common-script/js?v=1.5')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/bootstrap/3.3.7/js/bootstrap.min.js?v=1517588076')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/select2/js/select2.full.min.js?v=1517588086')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/grid/js/i18n/grid.locale-en.js?v=1517588082')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/grid/js/jquery.jqGrid.min.js?v=1517588082')}}" type="text/javascript"></script>
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
    <script src="{{asset('js/base64.js?v=1517588076')}}" type="text/javascript"></script>
    <script src="{{asset('js/main-script.min.js?v=2.2.2')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/magnific/magnific.min.js?v=1517588086')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/sweetalert/sweetalert.min.js?v=1517588086')}}" type="text/javascript"></script>
    <script src="{{asset('theme/default/js/app.min.js?v=1537555248')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/dropmenu/js/dropmenu.js?v=1523480130')}}" type="text/javascript"></script>
    <script src="{{asset('js/custom-app-script.min.js?v=1.5')}}" type="text/javascript"></script>
    <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>

<body class="aps-ctrl-p skin-green sidebar-mini    ">
    @include('partials.admin.page_loader')
    <div class="wrapper">
        <header class="main-header">

            <a href="https://demo.appsbd.com/support-system/admin.html" class="logo">

                <span class="logo-mini">DSS</span>

                <span class="logo-lg">
                    <b>Demo</b> Support System</span>
            </a>

            <nav class="navbar navbar-static-top" role="navigation">

                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <a href="https://demo.appsbd.com/support-system/" target="blank" class="top-bar-link "><i class="fa fa-globe"></i> View Site</a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">


                        <li class="dropdown messages-menu notifications-menu2">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope-o"></i> </a>
                            <ul class="dropdown-menu ">
                                <li class="header">You have no notifications right now</li>
                            </ul>
                        </li>

                        <li id="app_noti_container" class="dropdown messages-menu notifications-menu2">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <span class="count-label label label-warning">1</span> </a>
                            <ul class="dropdown-menu ">
                                <li class="msg-dp-heigt">
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 400px;">
                                        <ul class="menu msg-dp-heigt" style="max-height: 400px; width: 100%; overflow: hidden; height: 400px;">
                                            <li class=" unseen "> <a class="app-noti-click" href="https://demo.appsbd.com/support-system/admin/notification/show/4.html">
                                                    <h4>New ticket assigned <small><i class="fa fa-clock-o"></i> 4 months ago</small> </h4>
                                                    <p> A new ticket is assigned to you</p>
                                                </a> </li>
                                            <li class=" seen "> <a class="app-noti-click" href="https://demo.appsbd.com/support-system/admin/notification/show/2.html">
                                                    <h4>New ticket received <small><i class="fa fa-clock-o"></i> 1 year ago</small> </h4>
                                                    <p> A new ticket has been received, please assign</p>
                                                </a> </li>
                                            <li class=" seen "> <a class="app-noti-click" href="https://demo.appsbd.com/support-system/admin/notification/show/1.html">
                                                    <h4>New ticket received <small><i class="fa fa-clock-o"></i> 2 years ago</small> </h4>
                                                    <p> A new ticket has been received, please assign</p>
                                                </a> </li>
                                        </ul>
                                        <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
                                        <div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                                    </div>
                                </li>
                                <li class="footer"><a href="https://demo.appsbd.com/support-system/admin/notification/show-list/N.html">View all</a></li>
                            </ul>
                        </li>

                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs">admin</span>
                            </a>
                            <ul class="dropdown-menu">

                                <li class="user-header">
                                    <img src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg" class="img-circle" alt="User Image">
                                    <p>
                                        admin <small>Member since Feb. 2018</small>
                                    </p>
                                    <div id="user_chat_status_container" class="chat-status-bar">
                                        <label style="display: inline;" class="control-label" for="chatstatus">Chat Online Status &nbsp;</label>
                                        <div class="togglebutton " style="display: inline;">
                                            <label>
                                                <input class="ajax-toggle added-ajax-toggle" data-oncomplete="updatedChatStatus" type="checkbox" data-url="https://demo.appsbd.com/support-system/admin/dashboard/update-chat-status.html" checked="checked" value="Y" id="chatstatus" name="_chatstatus"><span class="toggle"></span>
                                            </label>
                                            <span class="form-group-help-block"></span>
                                        </div>
                                        <div class="row"></div>
                                    </div>
                                    <a href="https://demo.appsbd.com/support-system/alluser/user/change-password.html" data-effect="mfp-move-from-top" class="popupform btn btn-xs btn-black apopf added-ripples"><i class="fa fa-gear"></i> Change Password</a>
                                    <p></p>
                                </li>


                                <li class="user-footer text-center">
                                    <a href="https://demo.appsbd.com/support-system/admin/user/logout.html" class="btn btn-default btn-flat added-ripples">Sign out</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            &nbsp;
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        @include('partials.admin.sidebar')

        @yield('main-content')
        @include('partials.admin.footer')
    </div>
    <script type="text/javascript">
        $(function() {
            $("#user_chat_status_container").on("click", function(e) {
                e.stopPropagation();
            })
        });

        function updatedChatStatus(rdata, thisObj) {
            if (rdata.status) {
                update_basic_conf(rdata.data.status);
            }
        }
    </script>

    <iframe id="app-print-iframe" style="border:none;height:0;width:0" __idm_frm__="99"></iframe>
    <ul id="dpdown_AA" class="app-dropdownmenu app-sub-menu app-grid-submenu-box" style="display: none;">
        <li><a data-effect="mfp-move-from-top" class="popupformWR apopf" href="https://demo.appsbd.com/support-system/admin/app-permission/add-edit-appuser/AA.html"><i class="fa fa-edit"></i>Edit</a></li>
    </ul>
    <ul id="dpdown_AA" class="app-dropdownmenu app-sub-menu app-grid-submenu-box" style="display: none;">
        <li><a data-effect="mfp-move-from-top" class="popupformWR apopf" href="https://demo.appsbd.com/support-system/admin/app-permission/add-edit-appuser/AA.html"><i class="fa fa-edit"></i>Edit</a></li>
    </ul>
    <ul id="dpdown_AB" class="app-dropdownmenu app-sub-menu app-grid-submenu-box" style="display: none;">
        <li><a data-effect="mfp-move-from-top" class="popupformWR apopf" href="https://demo.appsbd.com/support-system/admin/app-permission/add-edit-appuser/AB.html"><i class="fa fa-edit"></i>Edit</a></li>
        <li role="separator" class="divider"></li>
        <li><a data-effect="mfp-move-from-top" class="popupformWR apopf" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission/set-user-pass/AB.html"><i class="fa fa-circle"></i> Set Password</a></li>
        <li><a class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/reset-user-pass/uid/AB.html"><i class="fa fa-envelope-o"></i>Email Password Reset Link</a></li>
        <li role="separator" class="divider"></li>
        <li><a class="ConfirmAjaxWR text-danger" data-msg="Are you sure to archive? Archive is like as delete. If you want to do it for temporary, then set inactive status instead of archive. You cann`t revert if you process it." href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/archive-user/AB.html"><i class="fa fa-trash "></i> Archive</a></li>
    </ul>
    <ul id="dpdown_AB" class="app-dropdownmenu app-sub-menu app-grid-submenu-box" style="display: none;">
        <li><a data-effect="mfp-move-from-top" class="popupformWR apopf" href="https://demo.appsbd.com/support-system/admin/app-permission/add-edit-appuser/AB.html"><i class="fa fa-edit"></i>Edit</a></li>
        <li role="separator" class="divider"></li>
        <li><a data-effect="mfp-move-from-top" class="popupformWR apopf" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission/set-user-pass/AB.html"><i class="fa fa-circle"></i> Set Password</a></li>
        <li><a class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/reset-user-pass/uid/AB.html"><i class="fa fa-envelope-o"></i>Email Password Reset Link</a></li>
        <li role="separator" class="divider"></li>
        <li><a class="ConfirmAjaxWR text-danger" data-msg="Are you sure to archive? Archive is like as delete. If you want to do it for temporary, then set inactive status instead of archive. You cann`t revert if you process it." href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/archive-user/AB.html"><i class="fa fa-trash "></i> Archive</a></li>
    </ul>
</body>

</html>