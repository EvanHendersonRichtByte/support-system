@extends('layout.user_master')

@section('tab-title')
User Login
@endsection

@section('body')

<body class="aps-ctrl-p site-theme site-theme-2 user-login">
    <div id="MainLoader">
        <div class="app-loader">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <div class="bar4"></div>
            <div class="bar5"></div>
            <div class="bar6"></div>
        </div>
        <div class="msgText"></div>
    </div>
    <div class="page-loader">
        <div style="margin-top:20%;font-size: 45px">
            <i class="fa fa-circle-o faa-burst animated"></i> &nbsp;Loading..
        </div>
    </div>
    <div class="container-fluid app-content">
        <div class="app-client-2-header">
            @include('partials.user.navbar')
            <div class="container ">
                <div class="row app-header-bottom">

                    <section class="content-header">
                        <h1>
                            <i class="fa fa-unlock-alt  faa-pulse animated-hover "></i>
                            User Login </h1>
                    </section>
                </div>
            </div>
        </div>
        <div class="system-msg-list">
            <div id="msg_1" class="system-msg m-b-5 fadeIn animated  alert alert-success alert-dismissible">
                <div class="system-icon">
                    <i class="fa fa-bullhorn"></i>
                </div>
                <strong class="system-title">Demo Site Notice:</strong> <span class="system-body">It's demo site of best support system.
                    To Login Admin Panel Please go to : <strong> <a href="https://demo.appsbd.com/support-system/admin" target="_blank">https://demo.appsbd.com/support-system/admin</a> </strong>
                    Username : <strong>admin</strong> Password: <strong>admin</strong></span>
            </div>
            <div id="msg_2" class="system-msg m-b-5 fadeIn animated  alert alert-success alert-dismissible">
                <div class="system-icon">
                    <i class="fa fa-bullhorn"></i>
                </div>
                <strong class="system-title">Purchase Link:</strong> <span class="system-body"><span class="system-body">Do you want to purchase? Click the button </span><a class="btn btn-success added-ripples" href="https://bit.ly/2venvhL" target="_blank">Buy Now</a></span>
            </div>
        </div>
        <div class="app-content p-t-15">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="row">

                            <section class="content-breadcrumb">
                            </section>
                            <div class="text-center">
                                <h2 class="m-b-30">Login Required, Please login</h2>
                                <a class="btn btn-orange btn-theme btn-lg popupformWR apopf added-ripples" id="app-login" href="{{url('/client/panel/dashboard')}}" data-effect="mfp-move-from-top">
                                    <span><i class="fa fa-lock"></i></span> Login <div class="ripple-container"></div></a>
                                <div>
                                    <h3 class="m-30">OR</h3>
                                </div>
                                <a class="popupformWR btn btn-info btn-lg apopf added-ripples" data-effect="mfp-move-from-top" href="https://demo.appsbd.com/support-system/user/register.html?_ru=https%3A%2F%2Fdemo.appsbd.com%2Fsupport-system%2Fuser%2Flogin.html">
                                    <span><i class="fa fa-wpforms"></i> Register </span></a>
                            </div>
                            <script type="text/javascript">
                                $(function() {
                                    var obj = $('<a data-effect="mfp-move-from-top">').attr("href", "https://demo.appsbd.com/support-system/user/login?rurl=https%3A%2F%2Fdemo.appsbd.com%2Fsupport-system%2Fuser%2Flogin.html");
                                    obj.magnificPopup({
                                        type: 'ajax',
                                        preloader: true,
                                        removalDelay: 500,
                                        closeBtnInside: true,
                                        overflowY: 'auto',
                                        closeOnBgClick: false,
                                        fixedBgPos: false,
                                        zoom: {
                                            enabled: false
                                        },
                                        tLoading: '<i class="fa fa-circle-o faa-burst animated"></i> &nbsp;Loading..',
                                        callbacks: {
                                            beforeOpen: function() {
                                                this.st.mainClass = this.st.el.attr('data-effect');
                                            },
                                            open: function() {},
                                            close: OnClosed,
                                            updateStatus: function(data) {
                                                if (data.status === 'ready') {
                                                    _popupajaxLoadComplted();
                                                }
                                            }
                                        }
                                    }).click();
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-left m-t-0 m-b-5" style="font-size: 10px; font-style: italic;">
                        ** The time is base on Asia/Dhaka timezone</div>
                </div>
            </div>
        </div>

        @include('partials.user.footer')
        <button class="go_top btn-theme animated hidden zoomOut"><i class="fa fa-chevron-up"></i></button>
    </div>

    <script src="https://demo.appsbd.com/support-system/theme/client/js/theme-main.js" type="text/javascript"></script>
    @include('partials.user.stickey_top')
    @include('partials.user.chat_system')
</body>
@endsection