@extends('layout.admin_master')

@section('tab-title')
Announcement
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 606px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            <i class="fa fa-ticket"></i>
            Announcement </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('/admin')}}"><i class=""></i> Home</a>
            </li>
            <li>
                Announcement </li>
        </ol>
    </section>

    <section class="content">
        <div class="table-responsive-xs">

            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Title</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Notice For</th>
                        <th scope="col">Added By</th>
                        <th scope="col">Entry Time</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Demo Site Notice</td>
                        <td>2018-02-01</td>
                        <td>2021-02-01</td>
                        <td>Site</td>
                        <td>admin</td>
                        <td>Jul 13, 2018 15:41</td>
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