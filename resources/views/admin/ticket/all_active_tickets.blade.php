@extends('layout.admin_master')

@section('tab-title')
All Active Tickets
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 606px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            <i class="fa fa-ticket"></i>
            All Active Tickets </h1>
        <ol class="breadcrumb">
            <li>
                <a href="https://demo.appsbd.com/support-system/"><i class=""></i> Home</a>
            </li>
            <li>
                All Active Tickets </li>
        </ol>
    </section>

    <section class="content">
        <div class="table-responsive-xs">

            <table class="table table-bordered table-light ">
                <thead>
                    <tr>
                        <th scope="col"><i class="apg-settings fa fa-cog"></i></th>
                        <th scope="col">Title</th>
                        <th scope="col">Open Time</th>
                        <th scope="col">Assigned</th>
                        <th scope="col">Last Reply</th>
                        <th scope="col">L.Reply time</th>
                        <th scope="col">test</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <div class="hidden-xs"> <span class="grid-t-title"><span class="text- label label-default">
                                        Low</span> <a class="ticket-title" target="_blank"
                                        href="https://demo.appsbd.com/support-system/admin/ticket/details/6.html">Guest
                                        Ticket
                                        Test</a></span><br><span class="grid-span"><span
                                        class="gsp-title ">Category</span><span class="gsp-val "><a
                                            data-effect="mfp-move-from-top" class="popupformWR apopf"
                                            href="https://demo.appsbd.com/support-system/admin/ticket/change-category/6.html"><span
                                                class="tooltip2 cat-tool text-info text-bold tooltipstered added-tooltip2"><i
                                                    class="fa fa-exclamation-circle"></i> PHP
                                                Basic</span></a></span></span><span class="grid-span"><span
                                        class="gsp-title ">Current Status</span><span class="gsp-val "><span
                                            class="text-danger text-bold"><i class="fa fa-user"></i> Action
                                            Required</span></span></span><span class="grid-span"><span
                                        class="gsp-title ">Replied</span><span
                                        class="gsp-val label label-default text-bold">1</span></span></div>
                        </td>
                        <td>2 years ago</td>
                        <td>Admin</td>
                        <td>Admin</td>
                        <td>5 months ago</td>
                        <td></td>
                        <td><button class="btn btn-success">Details</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <div class="hidden-xs"> <span class="grid-t-title"><span class="text- label label-warning">
                                        High</span> <a class="ticket-title" target="_blank"
                                        href="https://demo.appsbd.com/support-system/admin/ticket/details/4.html">What
                                        is Lorem
                                        Ipsum?</a></span><br><span class="grid-span"><span
                                        class="gsp-title ">Category</span><span class="gsp-val "><a
                                            data-effect="mfp-move-from-top" class="popupformWR apopf"
                                            href="https://demo.appsbd.com/support-system/admin/ticket/change-category/4.html"><span
                                                class="tooltip2 cat-tool text-info text-bold tooltipstered added-tooltip2"><i
                                                    class="fa fa-exclamation-circle"></i> PHP
                                                Basic</span></a></span></span><span class="grid-span"><span
                                        class="gsp-title ">Current Status</span><span class="gsp-val "><span
                                            class="text-info text-bold"><i class="fa fa-dot-circle-o"></i>
                                            New</span></span></span><span class="grid-span"><span
                                        class="gsp-title ">Replied</span><span
                                        class="gsp-val label label-default text-bold">0</span></span></div>
                        </td>
                        <td>2 years ago</td>
                        <td>Admin</td>
                        <td>Admin</td>
                        <td>2 years ago</td>
                        <td></td>
                        <td><button class="btn btn-success">Details</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>
                            <div class="hidden-xs"> <span class="grid-t-title"><span class="text- label label-info">
                                        Medium</span> <a class="ticket-title" target="_blank"
                                        href="https://demo.appsbd.com/support-system/admin/ticket/details/1.html">This
                                        is test
                                        ticket</a></span><br><span class="grid-span"><span
                                        class="gsp-title ">Category</span><span class="gsp-val "><a
                                            data-effect="mfp-move-from-top" class="popupformWR apopf"
                                            href="https://demo.appsbd.com/support-system/admin/ticket/change-category/1.html"><span
                                                class="tooltip2 cat-tool text-info text-bold tooltipstered added-tooltip2"><i
                                                    class="fa fa-exclamation-circle"></i> PHP
                                                Setup</span></a></span></span><span class="grid-span"><span
                                        class="gsp-title ">Current Status</span><span class="gsp-val "><span
                                            class="text-info text-bold"><i class="fa fa-dot-circle-o"></i>
                                            New</span></span></span><span class="grid-span"><span
                                        class="gsp-title ">Replied</span><span
                                        class="gsp-val label label-default text-bold">0</span></span></div>
                        </td>
                        <td>2 years ago</td>
                        <td>Admin</td>
                        <td>Admin</td>
                        <td>2 years ago</td>
                        <td></td>
                        <td><button class="btn btn-success">Details</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection