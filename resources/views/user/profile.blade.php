@extends('layout.user_master')

@section('tab-title')
Profile
@endsection

@section('body')

<body class="aps-ctrl-p site-theme site-theme-2 panel-profile">
    @include('partials.user.page_loader')
    <div class="container-fluid app-content">
        <div class="app-client-2-header">
            @include('partials.user.navbar')
            <div class="container ">
                <div class="row app-header-bottom">

                    <section class="content-header">
                        <h1>
                            <i class="fa fa-user-circle-o"></i>
                            Profile </h1>
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
                    <div class="col-md-3 col-sm-4">
                        <aside class="sidebar-left">
                            <div class="client-menu-sidebar">
                                <div class="sidebar-nav">
                                    <div class="navbar navbar-client-menu" role="navigation">
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                data-target=".sidebar-navbar-collapse">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <span class="visible-xs navbar-brand"><img src="{{$user->img_url}}"
                                                    alt="{{$user->username}}"> My Menu</span>
                                        </div>
                                        <div class="navbar-collapse collapse sidebar-navbar-collapse">
                                            <ul class=" client-my-menu list-group">
                                                <li class="list-group-item hidden-xs ">
                                                    <div class="text-center profile-container">
                                                        <div class="outer-w">
                                                            <div class="profile-img">
                                                                <img src="{{$user->img_url}}" alt="{{$user->username}}">
                                                            </div>
                                                        </div>
                                                        <div>{{$user->username}}</div>
                                                        <small>Join : {{$user->created_at}}</small>
                                                    </div>
                                                </li>
                                                <li><a class="" href="{{url('/client/panel/dashboard')}}"><i
                                                            class="fa fa-th"></i> Dashboard</a></li>
                                                <li><a class="" href="{{url('/ticket/active-tickets')}}"><i
                                                            class="fa fa-ticket"></i> Active Tickets</a></li>
                                                <li><a class="" href="{{url('/ticket/closed-tickets')}}"><i
                                                            class="fa fa-ticket"></i> Closed Tickets</a></li>
                                                <li><a class="active" href="{{url('/client/panel/profile')}}"><i
                                                            class="fa fa-user-circle-o"></i> Profile</a></li>
                                                <li><a class="popupformWR apopf" data-effect="mfp-move-from-top"
                                                        href="https://demo.appsbd.com/support-system/alluser/user/change-password.html"><i
                                                            class="fa fa-hashtag"></i> Change Password</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-md-9 col-sm-8">
                        <div class="row">

                            <section class="content-breadcrumb">
                                <ol class="breadcrumb m-b-10">
                                    <li>
                                        <a href="{{url('/client/panel/dashboard')}}"><i class="fa fa-user-o"></i> User
                                            Panel</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-user-circle-o"></i>
                                        Profile </li>
                                </ol>
                            </section>
                            <div class="panel panel-default">
                                <div class="panel-body p-0 ">
                                    <table class="table m-b-0">
                                        <tbody>
                                            <tr>
                                                <th style="width: 150px;">Name</th>
                                                <th style="width: 20px;">:</th>
                                                <td>{{$user->username}}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <th>:</th>
                                                <td>{{$user->email}}</td>
                                            </tr>
                                            <tr>
                                                <th>Join Date</th>
                                                <th>:</th>
                                                <td>{{$user->created_at}}</td>
                                            </tr>
                                            <tr>
                                                <th>Timezone</th>
                                                <th>:</th>
                                                <td>Asia/Dhaka <a data-effect="mfp-move-from-top"
                                                        data-onclose="TimezoneChanged"
                                                        class="popupformWR btn btn-xs btn-theme apopf added-ripples"
                                                        href="https://demo.appsbd.com/support-system/client/panel/change-timezone.html">Change</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <a href="{{url('/download')}}">Download
                                this account data</a><br>
                            <form action="{{url('/user', [$user->id])}}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete Account</button>
                            </form>
                            <script type="text/javascript">
                                function account_deleted(rdata) {
                                    if (rdata.status) {
                                        swal({
                                            title: rdata.msg,
                                            type: "success",
                                            cancelButtonText: appGlobalLang.closeText,
                                        }, function() {
                                            RedirectUrl("https://demo.appsbd.com/support-system/");
                                        });
                                    } else {
                                        swal(rdata.status ? "Success" : "Failed", rdata.msg, rdata.status ? "success" : "error");
                                    }
                                }
                            </script>
                            <script type="text/javascript">
                                function TimezoneChanged() {
                                    if (MyAjaxChange) {
                                        ReloadSiteUrl();
                                    }
                                }
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