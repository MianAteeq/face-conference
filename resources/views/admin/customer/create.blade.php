@extends('admin.layouts.master')

@section('css')
<link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
@endsection

@section('header')
<div class="content-header-left col-md-6 col-12 mb-2">
    <h3 class="content-header-title">Add Conference Type</h3>
    <div class="row breadcrumbs-top">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Create Conference Type</li>
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
                    <h4 class="card-title">New Conference Type</h4>
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

                        <form class="form" method="POST" action="{{ route('admin.conference.store') }}">
                            @csrf
                            <div class="form-body">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="name" class="form-control" placeholder="Enter name" 
                                            name="name" value="{{ old('name') }}">
                                        <div class="form-control-position">
                                            <i class="ft-user"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="order_no">Order No</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="order_no" class="form-control" placeholder="Enter order no" 
                                            name="order_no" value="{{ old('order_no') }}">
                                        <div class="form-control-position">
                                            <i class="ft-layers"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Register Type</label>
                                    <div class="input-group">
                                        <div class="d-inline-block custom-control custom-radio mr-1">
                                            <input type="radio" name="type" class="custom-control-input" 
                                                value="Conference" id="Conference" {{ old('type') == 'Conference' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="Conference">Conference</label>
                                        </div>
                                        <div class="d-inline-block custom-control custom-radio">
                                            <input type="radio" name="type" class="custom-control-input" 
                                                value="Workshop" id="Workshop" {{ old('type') == 'Workshop' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="Workshop">Workshop</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="start_date">Start Date</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="date" id="start_date" class="form-control" 
                                            name="start_date" value="{{ old('start_date') }}">
                                        <div class="form-control-position">
                                            <i class="ft-calendar"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="end_date">End Date</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="date" id="end_date" class="form-control" 
                                            name="end_date" value="{{ old('end_date') }}">
                                        <div class="form-control-position">
                                            <i class="ft-calendar"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Fees</label>
                                    <div class="input-group mt-0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rs</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter fees" 
                                            name="price" value="{{ old('price') }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-actions right">
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Create
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
