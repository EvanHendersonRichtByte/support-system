@extends('layout.admin_master')

@section('tab-title')
All Active Tickets
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 606px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            <i class="fa fa-ticket"></i>
            All Active Tickets </h1>
        <ol class="breadcrumb">
            <li>
                <a href="https://demo.appsbd.com/support-system/"><i class=""></i> Home</a>
            </li>
            <li>
                All Active Tickets </li>
        </ol>
    </section>

    <section class="content">

        <div class="table-responsive-xs">

            <table class="table table-bordered table-light ">
                <thead>
                    <tr>
                        <th scope="col"><i class="apg-settings fa fa-cog"></i></th>
                        <th scope="col">Title</th>
                        <th scope="col">Open Time</th>
                        <th scope="col">Assigned</th>
                        <th scope="col">Last Reply</th>
                        <th scope="col">L.Reply time</th>
                        {{-- <th scope="col">test</th> --}}
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
                    <td>
                        <p>ID Ticket : {{$d->id}}</p>
                        <p>Subject : {{$d->ticket_subject}}</p>
                        <p>Category : {{$d->ticket_category}}</p>
                        <p>Priority : {{$d->priority}}</p>
                    </td>
                    <td>{{$d->created_at}}</td>
                    <td>Admin</td>
                    <td>Admin</td>
                    <td>{{$d->updated_at}}</td>
                    {{-- <td></td> --}}
                    <td>
                        <a href="/ticket/show/{{$d->id}}" class="btn btn-success btn-sm">Detail</a>
                        <form class="form-inline" action="/ticket/delete/{{$d->id}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                <tbody>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection