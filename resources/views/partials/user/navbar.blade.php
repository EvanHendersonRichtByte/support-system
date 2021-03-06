<div class="app-header row ">
    <div class="col-md-12">
        <div class="row s-m-container">
            <nav class="navbar navbar-default app-navbar app-navbar-2 animated">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row ">
                                <div class=" app-logo-container ">
                                    <a href="{{url('/')}}">
                                        <img class="app-logo-img " alt="Logo"
                                            src="{{asset('images/white-logo.png?t=1517588076')}}">
                                        <div class="app-title"> Support System </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row ">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand visible-xs" href="{{url('/')}}">Site Menu</a>
                                    <a class="popupformWR navbar-brand visible-xs pull-right apopf" id="app-login-2"
                                        href="{{url('/login')}}" data-effect="mfp-move-from-top"><i
                                            class="fa fa-sign-in"></i> Login</a>
                                </div>

                                <div class="collapse navbar-collapse p-0" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class=" active "><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
                                        </li>
                                        <li class=""><a href="{{url('/')}}"><i class="fa fa-graduation-cap"></i>
                                                Knowledge</a></li>
                                        @if ($logged_in > 0)
                                        <li> <a data-effect="mfp-move-from-top" class="popupformWR open-ticket apopf" href="{{url('/client/panel/dashboard')}}">
                                                <i class="fa fa-dashboard"></i> Dashboard
                                            </a>
                                        </li>
                                        <li> <a data-effect="mfp-move-from-top" class="popupformWR open-ticket apopf" href="{{url('/ticket/open')}}">
                                                <i class="fa fa-ticket"></i> Open Ticket
                                            </a>
                                        </li>
                                        <li><a class="popupformWR apopf" id="app-login" href="{{url('/logout')}}"
                                                data-effect="mfp-move-from-top"><i class="fa fa-sign-in"></i> Logout</a>
                                        </li>
                                        @else
                                        <li><a class="popupformWR apopf" id="app-login" href="{{url('/login')}}"
                                                data-effect="mfp-move-from-top"><i class="fa fa-sign-in"></i> Login</a>
                                        </li>
                                        <li><a class="popupformWR apopf" data-effect="mfp-move-from-top"
                                                href="{{url('/user')}}"><i class="fa fa-wpforms"></i> Register</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>