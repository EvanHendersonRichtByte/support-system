@extends('layout.admin.user_settings.user_settings_master')

@section('tab-title')
Role List
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 606px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            Role List </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('/client/panel/dashboard')}}"><i class=""></i> Home</a>
            </li>
            <li>
                Role List </li>
        </ol>
    </section>

    <section class="content">
        <table class="table table-striped table-light text-center">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Title</th>
                    <th scope="col">Has Super Power</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody >
                <tr>
                    <th scope="row">1</th>
                    <td>SuperAdmin</td>
                    <td><i class="text-success fa fa-2x fa-check-circle-o"></i></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Supervisor</td>
                    <td><i class="text-danger fa fa-2x fa-times-circle-o"></i></td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Agent</td>
                    <td><i class="text-danger fa fa-2x fa-times-circle-o"></i></td>
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