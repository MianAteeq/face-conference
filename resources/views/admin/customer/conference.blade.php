@extends('admin.layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
@endsection

@section('header')
<div class="content-header-left col-md-6 col-12 mb-2">
    <h3 class="content-header-title">Conference Type </h3>
    <div class="row breadcrumbs-top">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">DashBoard</a>
                </li>

                <li class="breadcrumb-item active">Conference Type List
                </li>
            </ol>
        </div>
    </div>
</div>

@endsection

@section('content')
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Conference Type 
                    <a href="{{route('admin.conference.type.create')}}" class="btn btn-primary">Create New</a>
                    </h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Sr #</th>
                                        <th> Name</th>
                                        <th>Type</th>
                                        <th> Start Date</th>
                                        <th>End Date</th>

                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($conferences as $key=>$conference)
                                    <tr class="rm-{{$conference['id']}}">
                                        <td>{{$loop->iteration}}</td>
                                        <td> {{$conference['name']}} </td>
                                        <td>{{$conference['type']}} </td>
                                        <td>{{$conference['start_date']}}</td>
                                        <td>{{$conference['end_date']}}</td>

                                        <td><a href="{{route('admin.conference.edit',$conference['id'])}}" class="btn btn-primary">Edit</a></td>



                                    </tr>

                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sr #</th>
                                        <th> Name</th>
                                        <th>Type</th>
                                        <th> Start Date</th>
                                        <th>End Date</th>

                                        <th>Action</th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
