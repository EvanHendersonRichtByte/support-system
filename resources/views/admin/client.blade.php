@extends('layout.admin_master')

@section('tab-title')
Client List
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 606px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            <i class="fa fa-ticket"></i>
            Client List </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('/admin')}}"><i class=""></i> Home</a>
            </li>
            <li>
                Client List </li>
        </ol>
    </section>

    <section class="content">
        <div class="table-responsive-xs">

            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">First Time</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Verified</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Country</th>
                        <th scope="col">Join Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="text-primary">User</td>
                        <td>Sharaf</td>
                        <td>user@support.com</td>
                        <td class="text-primary">No</td>
                        <td>male</td>
                        <td>AE</td>
                        <td>Feb 02, 2018</td>
                        <td><i class="fa fa-check-circle-o"></i> Active</td>
                        <td><button class="btn btn-xs" type="button"><i class="fa fa-chevron-circle-down"></i><span
                                    class="hidden-sm">&nbsp; Menu</span>
                                <div class="ripple-container"></div>
                            </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection