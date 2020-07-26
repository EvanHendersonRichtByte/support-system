@extends('layout.admin_master')

@section('tab-title')
Sent Message By Me
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 606px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            <i class="fa fa-ticket"></i>
            Sent Message By Me </h1>
        <ol class="breadcrumb">
            <li>
                <a href="https://demo.appsbd.com/support-system/"><i class=""></i> Home</a>
            </li>
            <li>
                Sent Message By Me </li>
        </ol>
    </section>

    <section class="content">
        <div class="table-responsive-xs">

            <table class="table table-striped table-light">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">To</th>
                        <th scope="col">Last Replied</th>
                        <th scope="col">Time</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection