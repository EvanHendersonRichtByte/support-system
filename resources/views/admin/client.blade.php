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

            <table class="table table-bordered table-light ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID User</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Join Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=0; @endphp
                    @foreach($data as $d)
                    @php $no++; @endphp
                    <tr>
                <tbody>
                    <td>{{$no}}</td>
                    <td>{{$d->id}}</td>
                    <td>{{$d->username}}</td>
                    <td>{{$d->email}}</td>
                    <td>{{$d->password}}</td>
                    <td>{{$d->created_at}}</td>
                    <td>
                        <button class="popupformWR btn btn-success btn-lg apopf added-ripples" data-toggle="modal"
                            data-target="#loginModal{{$d->id}}" data-effect="mfp-move-from-top"> <span>Detail</span>
                        </button>
                       
                        <a href="/client/edit/{{$d->id}}" class="btn btn-warning btn-sm">Edit</a>
                    <td>
                        <div class="modal fade" id="loginModal{{$d->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <form action="{{url('check_login')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Client Detail
                                            </h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                        Email
                                                        <input id="password" type="email" class="form-control"
                                                            name="password" value="{{$d->email}}" required autofocus>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 ">
                                                    <div class="form-group">
                                                        Password
                                                        <input id="password" type="text" class="form-control"
                                                            name="password" value="{{$d->email}}" required autofocus>



                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 ">
                                                    <div class="form-group">
                                                        Username
                                                        <input id="password" type="text" class="form-control"
                                                            name="password" value="{{$d->username}}" required autofocus>



                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 ">
                                                    <div class="form-group">
                                                        Created At
                                                        <input id="password" type="text" class="form-control"
                                                            name="password" value="{{$d->created_at}}" required
                                                            autofocus>



                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer ">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                        
                <tbody>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

</div>

@endsection