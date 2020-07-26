@extends('layout.user_master')

@section('tab-title')
User Login
@endsection

@section('body')

<body class="aps-ctrl-p site-theme site-theme-2 user-login">
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
                <strong class="system-title">Demo Site Notice:</strong> <span class="system-body">It's demo site of best
                    support system.
                    To Login Admin Panel Please go to : <strong> <a href="https://demo.appsbd.com/support-system/admin"
                            target="_blank">https://demo.appsbd.com/support-system/admin</a> </strong>
                    Username : <strong>admin</strong> Password: <strong>admin</strong></span>
            </div>
            <div id="msg_2" class="system-msg m-b-5 fadeIn animated  alert alert-success alert-dismissible">
                <div class="system-icon">
                    <i class="fa fa-bullhorn"></i>
                </div>
                <strong class="system-title">Purchase Link:</strong> <span class="system-body"><span
                        class="system-body">Do you want to purchase? Click the button </span><a
                        class="btn btn-success added-ripples" href="https://bit.ly/2venvhL" target="_blank">Buy
                        Now</a></span>
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
                                <a class="btn btn-orange btn-theme btn-lg popupformWR apopf added-ripples"
                                    id="app-login" href="{{url('/client/panel/dashboard')}}"
                                    data-effect="mfp-move-from-top">
                                    <span><i class="fa fa-lock"></i></span> Login <div class="ripple-container"></div>
                                </a>
                                <div>
                                    <h3 class="m-30">OR</h3>
                                </div>
                                <button class="popupformWR btn btn-info btn-lg apopf added-ripples" data-toggle="modal"
                                    data-target="#registerModal" data-effect="mfp-move-from-top" <span><i
                                        class="fa fa-wpforms"></i> Register </span>
                                </button>
                            </div>
                            <div class="modal fade" id="registerModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <form action="/user" method="POST">
                                    {{ csrf_field() }}
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">User Registration
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="form-group">
                                                            Email
                                                            <input name="email" type="email" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <div class="form-group">
                                                            First Name
                                                            <input name="firstname" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="form-group">
                                                            Last Name
                                                            <input name="lastname" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <div class="form-group">
                                                            Password
                                                            <input name="password" type="password" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="form-group">
                                                            Confirm Password
                                                            <input name="confirmPassword" type="password"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer ">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" type="button" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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

    @include('partials.user.stickey_top')
    @include('partials.user.chat_system')
</body>
@endsection