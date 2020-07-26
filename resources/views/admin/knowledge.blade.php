@extends('layout.admin_master')

@section('tab-title')
Knowledge List
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 606px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            <i class="fa fa-ticket"></i>
            Knowledge List </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('/admin')}}"><i class=""></i> Home</a>
            </li>
            <li>
                Knowledge List </li>
        </ol>
    </section>

    <section class="content">
        <div class="table-responsive-xs">

            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Sticky/Pinned</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>How Do You Find Good PHP Programmers?</td>
                        <td>PHP Basic</td>
                        <td class="text-danger">No</td>
                        <td class="text-success"><i class="fa fa-check-circle-o"></i> Published</td>
                        <td><button class="btn btn-info">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Where To Start To Be A PHP?</td>
                        <td>PHP Basic</td>
                        <td class="text-danger">No</td>
                        <td class="text-success"><i class="fa fa-check-circle-o"></i> Published</td>
                        <td><button class="btn btn-info">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Php Forms Creator</td>
                        <td>PHP Basic</td>
                        <td class="text-danger">No</td>
                        <td class="text-success"><i class="fa fa-check-circle-o"></i> Published</td>
                        <td><button class="btn btn-info">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Php Service</td>
                        <td>PHP Basic</td>
                        <td class="text-danger">No</td>
                        <td class="text-success"><i class="fa fa-check-circle-o"></i> Published</td>
                        <td><button class="btn btn-info">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection