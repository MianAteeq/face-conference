@extends('admin.layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
@endsection

@section('header')
<div class="content-header-left col-md-6 col-12 mb-2">
    <h3 class="content-header-title">Candidate </h3>
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



            {{-- @foreach ($candidate_groups as $key=>$array )

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
            @endforeach --}}




        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Candidate </h4>
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
                                        <th>Full Name</th>

                                        <th> Phone Number</th>

                                        <th> Registration Type</th>
                                        <th> Payment Proof / Receipt No</th>
                                        <th> workshop Name</th>
                                        <th> Total</th>
                                        <th> Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($candidates as $key=>$customer)
                                    <tr class="rm-{{$customer['id']}}">
                                        <td>{{$loop->iteration}}</td>
                                        <td> {{$customer['prefix']}} {{$customer['name']}} {{$customer['father_name']}}  </td>

                                        <td>{{$customer['phone_number']}}</td>

                                         <td> WorkShop</td>
                                        <td>
                                            @if($customer['payment_method']=="Cash")
                                        <p><strong>Receipt No</strong>: {{$customer['receipt_no']}}</p>
                                            @else

                                            @if(count($customer['images'])>0)

                                            <a href="{{URL::to($customer['image']['image']??'')}}" target="_blank">View</a>

                                            @else

                                            @if($customer['payment_proof']!==null)
                                            <a href="{{URL::to($customer['payment_proof'])}}" target="_blank">View</a>

                                            @else

                                            NO IMAGE



                                            @endif


                                            @endif
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

                                            {{$customer['type']['name']??''}}

                                            @endif


                                        </td>
                                        <td>{{getTotalValue($customer['workshops'],$customer)}}</td>
                                        <td>
                                            <div class="text-center" style="display: flex;
                                            "><a href="{{route('admin.approve.candidates',$customer['id'])}}" class="btn btn-success">Approve</a>
                                                <a href="{{route('admin.reject.candidates',$customer['id'])}}" class="btn btn-danger">Rejected</a></div>
                                        </td>



                                    </tr>

                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sr #</th>
                                        <th> Name</th>

                                        <th> Phone Number</th>

                                        <th> Qualification</th>
                                        <th> Payment Proof</th>
                                        <th> workshop Name</th>
                                        <th> Total</th>
                                        <th> Action</th>

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


<script src="/admin-assets/app-assets/js/scripts/tables/datatables/datatable-basic.js"></script>
@endsection
