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
                                <button class="btn btn-warning btn-theme btn-lg popupformWR apopf added-ripples" data-toggle="modal"
                                    data-target="#loginModal" data-effect="mfp-move-from-top"><span><i class="fa fa-lock"></i></span> Login</button>
                                <div>
                                    <h3 class="m-30">OR</h3>
                                </div>
                                <button class="popupformWR btn btn-info btn-lg apopf added-ripples" data-toggle="modal"
                                    data-target="#registerModal" data-effect="mfp-move-from-top"> <span><i
                                        class="fa fa-wpforms"></i> Register </span>
                                </button>
                            </div>

                            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <form action="{{url('login/cek')}}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">User Login
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
                                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                                            @if ($errors->has('email'))
                                                                <span class="help-block">
                                                                 <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12 ">
                                                        <div class="form-group">
                                                            Password
                                                            <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required autofocus>

                                                            @if ($errors->has('password'))
                                                                <span class="help-block">
                                                                 <strong>{{ $errors->first('password') }}</strong>
                                                                </span>
                                                            @endif

                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer ">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" type="button" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- ----------------------------------------------------------------- -->
                            
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