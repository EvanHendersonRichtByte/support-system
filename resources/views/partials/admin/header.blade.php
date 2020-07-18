<header class="main-header">
    <a href="{{url('/admin')}}" class="logo">
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