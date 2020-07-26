@extends('layout.admin_master')

@section('tab-title')
Ticket Feedback List
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 606px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            <i class="fa fa-ticket"></i>
            Ticket Feedback List </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('/admin')}}"><i class=""></i> Home</a>
            </li>
            <li>
                Ticket Feedback List </li>
        </ol>
    </section>

    <section class="content">
        <div class="table-responsive-xs">

            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Title</th>
                        <th scope="col">Added By</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Thanks for patient</td>
                        <td>admin</td>
                        <td class="text-primary">Active</td>
                        <td>
                            <button class="btn btn-info">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Test Reply</td>
                        <td>admin</td>
                        <td class="text-primary">Active</td>
                        <td>
                            <button class="btn btn-info">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection