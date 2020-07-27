<aside class="main-sidebar">

    <section class="sidebar" style="height: auto;">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <div id="sidebar-menu-container" class="ps-container ps-theme-default ps-active-y" data-ps-id="e0aadb50-09ad-84fb-1b99-7e528be83bfa" style="height: 579.906px;">

            <ul class="sidebar-menu">
                <li class="header">ADMIN MENU</li>
                <li class=" treeview">
                    <a href="https://demo.appsbd.com/support-system/" class="">
                        <i class="fa fa fa-bar-chart-o"></i> <span>Admin Report</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" "><a class="" href="{{url('/admin/admin-report')}}"><i class="fa fa fa-th"></i> Admin Dashboard</a></li>
                    </ul>
                </li>
                <li class=" treeview">
                    <a href="https://demo.appsbd.com/support-system/" class="">
                        <i class="fa ap ap-admin-settings"></i> <span>Admin Setting</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" "><a class="" href="{{url('/admin')}}"><i class="fa fa fa-gears"></i> App Settings</a></li>
                        <li class=" "><a class="" href="{{url('/admin')}}"><i class="fa ap ap-users-check"></i> Ticket Assign Rule</a></li>
                        <li class=" "><a class="" href="{{url('/admin')}}"><i class="fa fa fa-envelope"></i> Email Templates</a></li>
                        <li class=" "><a class="" href="{{url('/admin')}}"><i class="fa fa fa-wpforms"></i> Custom Fields</a></li>
                        <li class=" "><a class="" href="{{url('/admin')}}"><i class="fa fa fa-bars"></i> Site Menu</a></li>
                        <li class=" "><a class="" href="{{url('/admin')}}"><i class="fa fa fa-ellipsis-h"></i> Topbar Icon</a></li>
                        <li class=" "><a class="" href="{{url('/admin')}}"><i class="fa ap ap-ip"></i> IP List</a></li>
                        <li class=" "><a class="" href="{{url('/admin')}}"><i class="fa ap ap-locked-user2"></i> Locked User</a></li>
                        <li class=" "><a class="" href="{{url('/admin')}}"><i class="fa fa fa-file-o"></i> Pages</a></li>
                        <li class=" "><a class="" href="{{url('/admin')}}"><i class="fa fa fa-puzzle-piece"></i> Add-Ons</a></li>
                    </ul>
                </li>
                <li class=" treeview">
                    <a href="https://demo.appsbd.com/support-system/" class="">
                        <i class="fa fa fa-user"></i> <span>User Settings</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" "><a class="" href="{{url('/admin/app-permission/user-list')}}"><i class="fa fa fa-list"></i> User List</a></li>
                        <li class=" "><a class="" href="{{url('/admin/app-permission/role-list')}}"><i class="fa fa-circle-o"></i> Role List</a></li>
                        <li class=" "><a class="" href="{{url('/admin/app-permission/role-access')}}"><i class="fa fa-circle-o"></i> Role Access</a></li>
                    </ul>
                </li>
                <li class=" treeview">
                    <a href="https://demo.appsbd.com/support-system/" class="">
                        <i class="fa fa fa-info-circle"></i> <span>App Information</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" "><a class="" href="https://demo.appsbd.com/support-system/admin/system-update.html"><i class="fa fa fa-arrow-circle-o-up"></i> App Update</a></li>
                    </ul>
                </li>
                <li class="header">STAFF MENU</li>
                <li class="active selected open  treeview">
                    <a href="{{url('/admin')}}" class="">
                        <i class="fa ap ap-dashboard"></i> <span>My Dashboard</span>
                    </a>
                </li>
                <li class=" treeview">
                    <a href="https://demo.appsbd.com/support-system/" class="">
                        <i class="fa fa fa-ticket"></i> <span>Ticket</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" "><a class="" href="{{url('/admin/ticket/open')}}"><i class="fa fa-pencil-square-o"></i> Create Ticket</a></li>
                        <li class=" "><a class="" href="{{url('/admin/ticket')}}"><i class="fa fa-circle-o"></i> All Active Tickets</a></li>
                        <li class=" "><a class="" href="{{url('/admin/ticket/my-ticket')}}"><i class="fa fa-circle-o"></i> My Active Tickets</a></li>
                        <li class=" "><a class="" href="{{url('/admin/ticket/my-paid-ticket')}}"><i class="fa fa-circle-o"></i> My Active Paid Tickets</a></li>
                        <li class=" "><a class="" href="{{url('/admin/ticket/my-closed-ticket')}}"><i class="fa fa-circle-o"></i> My Closed Tickets</a></li>

                        <li class=" "><a class="" href="{{url('/admin/ticket/my-assigned-ticket')}}"><i class="fa fa-circle-o"></i> My Assigned Tickets</a></li>
                        <li class=" "><a class="" href="{{url('/admin/ticket/unassigned-ticket')}}"><i class="fa fa-circle-o"></i> All Unassigned Tickets</a></li>
                        <li class=" "><a class="" href="{{url('/admin/ticket/all-paid-ticket')}}"><i class="fa fa-circle-o"></i> All Paid Tickets</a></li>
                        <li class=" "><a class="" href="{{url('/admin/ticket/closed-ticket')}}"><i class="fa fa-circle-o"></i> All Closed Tickets</a></li>
                    </ul>
                </li>
                <li class=" treeview">
                    <a href="{{url('/admin/ticket-feedback')}}" class="">
                        <i class="fa fa fa-ticket"></i> <span>Ticket Feedback</span>
                    </a>
                </li>
                <li class=" treeview">
                    <a href="{{url('/admin/notice')}}" class="">
                        <i class="fa fa fa-bullhorn"></i> <span>Announcements</span>
                    </a>
                </li>
                <li class=" treeview">
                    <a href="{{url('/admin/knowledge')}}" class="">
                        <i class="fa fa fa-graduation-cap"></i> <span>Knowledge</span>
                    </a>
                </li>
                <li class=" treeview">
                    <a href="{{url('/admin/category')}}" class="">
                        <i class="fa fa fa-table"></i> <span>Category</span>
                    </a>
                </li>
                <li class=" treeview">
                    <a href="{{url('/admin/canned-msg')}}" class="">
                        <i class="fa fa fa-stack-exchange"></i> <span>Canned Msg</span>
                    </a>
                </li>
                <li class=" treeview">
                    <a href="{{url('/admin/client')}}" class="">
                        <i class="fa ap ap-client"></i> <span>Client</span>
                    </a>
                </li>
            </ul>
            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
                <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps-scrollbar-y-rail" style="top: 0px; height: 580px; right: 3px;">
                <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 418px;"></div>
            </div>
        </div>
    </section>

</aside>