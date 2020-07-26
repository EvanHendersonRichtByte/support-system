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
                        <th scope="col">Ticket Title</th>
                        <th scope="col">Ticket Status</th>
                        <th scope="col">Assigned</th>
                        <th scope="col">Opened</th>
                        <th scope="col">Last Replied</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection