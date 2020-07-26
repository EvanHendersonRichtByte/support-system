@extends('layout.admin_master')

@section('tab-title')
Ticket Payment List
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 294px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            Ticket Payment List </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('/client/panel/dashboard')}}"><i class=""></i> Home</a>
            </li>
            <li>
                Ticket Payment List </li>
        </ol>
    </section>
    <section class="content">
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th></th>
                    <th>Payment Description</th>
                    <th>Amount</th>
                    <th>Created By</th>
                    <th>Method</th>
                    <th>Create Date</th>
                    <th>Process Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

    </section>
</div>
@endsection