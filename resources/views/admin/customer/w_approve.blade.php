@extends('admin.layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/vendors/css/tables/datatable/datatables.min.css">

<style>
    .buttons-print{
        display: none;
    }
    .buttons-copy{
        display: none;
    }
    .buttons-pdf{
        display: none;
    }
</style>
@endsection

@section('header')
<div class="content-header-left col-md-6 col-12 mb-2">
    <h3 class="content-header-title">Workshop Candidate </h3>
    <div class="row breadcrumbs-top">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">DashBoard</a>
                </li>

                <li class="breadcrumb-item active">Candidate List
                </li>
            </ol>
        </div>
    </div>
</div>

@endsection

@section('content')
<section id="configuration">
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="success">{{number_format($total,2)}}</h3>
                                <h6>Total Amount</h6>
                            </div>
                            <div>
                                <i class="icon-pie-chart success font-large-2 float-right"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        @foreach ($candidate_groups as $key=>$array )

        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="success">{{count($candidate_groups[$key])}}</h3>
                                <h6>{{$key}}</h6>
                            </div>
                            <div>
                                <i class="icon-user-follow success font-large-2 float-right"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Workshop Candidate </h4>
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
                            <table class="table table-striped table-bordered file-export">
                                <thead>
                                    <tr>
                                        <th>Sr #</th>
                                        <th>Registration #</th>
                                        <th>Invoice #</th>
                                        <th> Name</th>
                                        <th>Father Name</th>
                                        <th> Phone Number</th>

                                        <th> Registration Type</th>
                                        <th> Payment Method</th>
                                         <th> workshop Name</th>
                                        <th> Status</th>
                                        <th> Total</th>
                                        @if(auth()->user()->role=="admin")
                                        <th> Action</th>
                                        @endif


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($candidates as $key=>$customer)
                                    <tr class="rm-{{$customer['id']}}">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$customer->cn_register_no}}</td>
                                        <td>{{sprintf("%04d",$customer->id)}}</td>
                                        <td>{{$customer['prefix']}} {{$customer['name']}} </td>
                                        <td>{{$customer['father_name']}} </td>
                                        <td>{{$customer['phone_number']}}</td>

                                         <td>{{$customer['registration_type']}}</td>
                                        <td>
                                            @if($customer['payment_method']=="Cash")
                                        <p>{{$customer['payment_method']}} <br>
                                            <strong>Receipt No</strong>: {{$customer['receipt_no']}}</p>
                                            @else

                                           {{$customer['payment_method']}}
                                        @endif
                                        </td>
                                        <td>
                                            @if(count($customer['workshops'])>0)
                                            <ul>

                                                @foreach ($customer['workshops'] as $workshop)
                                                    <li>{{$workshop['work']['name']}}</li>
                                                @endforeach
                                                </ul>
                                            @else

                                            {{$customer['type']['name']}}

                                            @endif


                                        </td>
                                        <td>{{$customer['status']}}</td>
                                        <td>{{getTotalValue($customer['workshops'],$customer)}}</td>
                                        @if(auth()->user()->role=="admin")
                                        <td>
                                            <a href="{{route('admin.all.candidate.view',$customer['id'])}}" class="primary" style="margin-left: 20px;"><i class="la la-eye"></i></a>
                                            <a href="{{route('admin.move.to.pending',$customer['id'])}}" style="font-size: 11px; padding-right: 0px; padding-left: 0px;" class="btn btn-sm btn-info" > Move To Pending</a>
                                        </td>
                                        @endif



                                    </tr>

                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sr #</th>
                                        <th>Registration #</th>
                                        <th>Invoice #</th>
                                        <th> Name</th>
                                        <th>Father Name</th>
                                        <th> Phone Number</th>

                                        <th> Registration Type</th>
                                        <th> Payment Method</th>
                                         <th> workshop Name</th>
                                        <th> Status</th>
                                        <th> Total</th>
                                        @if(auth()->user()->role=="admin")
                                        <th> Action</th>
                                        @endif

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
@section('script')
<script src="/admin-assets/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="/admin-assets/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
<script src="/admin-assets/app-assets/vendors/js/tables/buttons.flash.min.js"></script>
<script src="/admin-assets/app-assets/vendors/js/tables/jszip.min.js"></script>
<script src="/admin-assets/app-assets/vendors/js/tables/pdfmake.min.js"></script>
<script src="/admin-assets/app-assets/vendors/js/tables/vfs_fonts.js"></script>
<script src="/admin-assets/app-assets/vendors/js/tables/buttons.html5.min.js"></script>
<script src="/admin-assets/app-assets/vendors/js/tables/buttons.print.min.js"></script>


<script src="/admin-assets/app-assets/js/scripts/tables/datatables/datatable-advanced.js"></script>
@endsection
