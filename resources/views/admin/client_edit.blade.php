@extends('layout.admin.ticket.ticket_master')

@section('tab-title')
Edit Client
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 294px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            <i class="fa fa-ticket"></i>
            Edit Client </h1>
        <ol class="breadcrumb">
            <li>
                Edit Client </li>
        </ol>
    </section>

    <section class="content">

    @foreach($data as $datas)

        <div class="row">
            <div class="col-md-12">
                <form action="/user/{{$datas->id}}"  method="post">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                    <div class="panel panel-default app-panel-box">
                        <div class="panel-heading">Edit</div>
                        <div class="panel-body">
                            <div class="form-horizontal form-horizontal-text-left">
                            <div class="form-group has-feedback">
                                    <label class="control-label label-required col-md-2" for="ticket_subject">Email</label>
                                    <div class="col-md-10">
                                    <input type="text" class="form-control" id="email" name="email" required="required" value="{{ $datas->email }}"></i>
                                        <small class="help-block" data-bv-validator="notEmpty"
                                            data-bv-for="ticket_subject" data-bv-result="NOT_VALIDATED"
                                            style="display: none;">Ticket subject is required</small><small
                                            class="help-block" data-bv-validator="stringLength"
                                            data-bv-for="ticket_subject" data-bv-result="NOT_VALIDATED"
                                            style="display: none;">This value is not valid</small></div>
                                </div><div class="form-group has-feedback">
                                    <label class="control-label label-required col-md-2" for="ticket_subject">Username</label>
                                    <div class="col-md-10">
                                    <input type="text" class="form-control" id="username" name="username" required="required" value="{{ $datas->username }}"></i>
                                        <small class="help-block" data-bv-validator="notEmpty"
                                            data-bv-for="ticket_subject" data-bv-result="NOT_VALIDATED"
                                            style="display: none;">Ticket subject is required</small><small
                                            class="help-block" data-bv-validator="stringLength"
                                            data-bv-for="ticket_subject" data-bv-result="NOT_VALIDATED"
                                            style="display: none;">This value is not valid</small></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="control-label label-required col-md-2" for="ticket_subject">Password</label>
                                    <div class="col-md-10">
                                    <input type="text" class="form-control" id="password" name="password" required="required" value="{{ $datas->password }}"></i>
                                        <small class="help-block" data-bv-validator="notEmpty"
                                            data-bv-for="ticket_subject" data-bv-result="NOT_VALIDATED"
                                            style="display: none;">Ticket subject is required</small><small
                                            class="help-block" data-bv-validator="stringLength"
                                            data-bv-for="ticket_subject" data-bv-result="NOT_VALIDATED"
                                            style="display: none;">This value is not valid</small></div>
                                </div>
                            </div>
                        </div>
                        
                    <div class="panel-footer text-center">
                        <button type="submit" class="btn btn-success btn-lg added-ripples">
                            Update</button>
                    </div>
                    
                    </div>
                </form>
            <form action = "/admin/client">
                    <div class="panel-footer text-center">
                        <button type="submit" class="btn btn-danger btn-lg added-ripples">
                            Cancle</button>
                </div>
            </form>

        </div>
        @endforeach
</div>
</section>
</div>
@endsection