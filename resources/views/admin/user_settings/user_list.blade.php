@extends('layout.admin_master')

@section('tab-title')
User List
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 606px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            User List </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('/client/panel/dashboard')}}"><i class=""></i> Home</a>
            </li>
            <li>
                User List </li>
        </ol>
    </section>

    <section class="content">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">User</th>
                    <th scope="col">Title</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>admin</td>
                    <td>admin</td>
                    <td>support-admin@appsbd.com</td>
                    <td>Super Admin</td>
                    <td class="text-success"><i class="fa fa-check-circle-o"></i> Active</td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>agent</td>
                    <td>Agent</td>
                    <td>agent@appsbd.com</td>
                    <td>Agent</td>
                    <td class="text-success"><i class="fa fa-check-circle-o"></i> Active</td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
</div>
@endsection