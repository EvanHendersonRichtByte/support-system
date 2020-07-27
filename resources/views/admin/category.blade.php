@extends('layout.admin_master')

@section('tab-title')
Category List
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 606px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            <i class="fa fa-ticket"></i>
            Category List </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('/admin')}}"><i class=""></i> Home</a>
            </li>
            <li>
                Category List </li>
        </ol>
    </section>

    <section class="content">
        <div class="table-responsive-xs">

            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Title</th>
                        <th scope="col">Parent Category</th>
                        <th scope="col">Show On</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PHP Basic</td>
                        <td>-</td>
                        <td class="text-success"><i class="fa fa-star"></i> Both</td>
                        <td class="text-primary">Active</td>
                        <td><button class="btn btn-info">Edit</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Android Basic</td>
                        <td>-</td>
                        <td class="text-success"><i class="fa fa-star"></i> Both</td>
                        <td class="text-primary">Active</td>
                        <td><button class="btn btn-info">Edit</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>PHP Setup</td>
                        <td>-</td>
                        <td class="text-success"><i class="fa fa-star"></i> Both</td>
                        <td class="text-primary">Active</td>
                        <td><button class="btn btn-info">Edit</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection