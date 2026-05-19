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
                    <h4 class="card-title">Conference Type </h4>
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
                        <form class="form" method="POST" action="{{route('admin.conference.update')}}">
                            @csrf
                            <input type="hidden" name="id" value="{{$conference['id']}}">
                            <div class="form-body">

                                <div class="form-group">
                                    <label for="timesheetinput1"> Name</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="timesheetinput1" class="form-control" placeholder="Name" value="{{$conference['name']}}" name="name">
                                        <div class="form-control-position">
                                            <i class="ft-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="timesheetinput1"> Order No</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="timesheetinput1" class="form-control" placeholder="Name" value="{{$conference['order_no']}}" name="order_no">
                                        <div class="form-control-position">
                                            <i class="ft-user"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Register Type</label>
                                    <div class="input-group">
                                        <div class="d-inline-block custom-control custom-radio mr-1">
                                            <input type="radio" name="type" class="custom-control-input" value="Conference" @if($conference['type']=="Conference") checked @endif id="Conference">
                                            <label class="custom-control-label" for="Conference">Conference</label>
                                        </div>
                                        <div class="d-inline-block custom-control custom-radio">
                                            <input type="radio" name="type" class="custom-control-input" value="Workshop" @if($conference['type']=="Workshop") checked @endif id="Workshop">
                                            <label class="custom-control-label" for="Workshop">Workshop</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="timesheetinput3">Start Date</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="date" id="timesheetinput3" class="form-control" name="start_date" value="{{$conference['start_date']}}">
                                        <div class="form-control-position">
                                            <i class="ft-message-square"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="timesheetinput3">End Date</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="date" id="timesheetinput3" class="form-control" name="end_date" value="{{$conference['end_date']}}">
                                        <div class="form-control-position">
                                            <i class="ft-message-square"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Fees</label>
                                    <div class="input-group mt-0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rs</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Fees" aria-label="Amount (to the nearest dollar)" name="price" value="{{$conference['price']}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="form-actions right">

                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Update
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
