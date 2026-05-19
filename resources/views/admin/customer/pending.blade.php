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
                            <table class="table table-striped table-bordered file-export">
                                <thead>
                                    <tr>
                                        <th>Sr #</th>
                                        <th>Full Name</th>
                                        <th>Institue</th>
                                        <th> Phone Number</th>
                                        <th> Category</th>
                                        <th> Accompanying Person</th>
                                        <th> Payment Proof / Receipt No</th>
                                        <th> Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($candidates as $key=>$customer)
                                    <tr class="rm-{{$customer['id']}}">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$customer['prefix']}} {{$customer['name']}} {{$customer['father_name']}}  </td>
                                         <td>{{$customer->institution}}</td>

                                        <td>{{$customer['phone_number']}}</td>
                                        <td>{{$customer['cat']['name']??'N/A'}}</td>
                                        <td>
    @if(!empty($customer['accompanying']) && json_decode($customer['accompanying']))
        @foreach(json_decode($customer['accompanying']) as $data)
            <p>{{ $data }}</p>
        @endforeach
    @else
        <p>N/A</p>
    @endif
</td>
                                        <td>
                                            @if($customer['payment_method']=="Cash")
                                        <p><strong>Receipt No</strong>: {{$customer['receipt_no']}}</p>
                                            @else

                                            @if(count($customer['images'])>0)

                                            <a href="{{URL::to($customer['image']['image']??'')}}" target="_blank">View</a>

                                            @else

                                            @if($customer['payment_proof']!=="")
                                            <a href="{{URL::to($customer['payment_proof'])}}" target="_blank">View</a>

                                            @else

                                            NO IMAGE



                                            @endif


                                            @endif
                                        @endif
                                        </td>
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
                                        <th>Full Name</th>
                                        <th>Institue</th>
                                        <th> Phone Number</th>
                                        <th> Category</th>
                                        <th> Accompanying Person</th>
                                        <th> Payment Proof / Receipt No</th>
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
<script src="/admin-assets/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
<script src="/admin-assets/app-assets/vendors/js/tables/buttons.flash.min.js"></script>
<script src="/admin-assets/app-assets/vendors/js/tables/jszip.min.js"></script>
<script src="/admin-assets/app-assets/vendors/js/tables/pdfmake.min.js"></script>
<script src="/admin-assets/app-assets/vendors/js/tables/vfs_fonts.js"></script>
<script src="/admin-assets/app-assets/vendors/js/tables/buttons.html5.min.js"></script>
<script src="/admin-assets/app-assets/vendors/js/tables/buttons.print.min.js"></script>


<script src="/admin-assets/app-assets/js/scripts/tables/datatables/datatable-advanced.js"></script>
@endsection
