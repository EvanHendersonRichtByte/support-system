@extends('layout.admin.user_settings.user_settings_master')

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
                <a href="https://demo.appsbd.com/support-system/admin/dashboard.html"><i class=""></i> Home</a>
            </li>
            <li>
                User List </li>
        </ol>
    </section>

    <section class="content">
        <table class="table table-light">
            <thead>
                <tr>
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
                    <td>1</td>
                    <td>admin</td>
                    <td>admin</td>
                    <td>support-admin@appsbd.com</td>
                    <td>Super Admin</td>
                    <td>Active</td>
                    <td><button class="btn btn-primary">Edit</button></td>
                </tr>
            </tbody>
        </table>
    </section>
</div>
@endsection