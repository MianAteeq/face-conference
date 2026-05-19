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
                            <table class="table table-striped table-bordered zero-configuration dataTable">
                                <thead>
                                    <tr>
                                        <th>Sr #</th>
                                        <th> First Name</th>
                                        <th>Last Name</th>
                                        <th> Phone Number</th>
                                        <th> Category</th>
                                        <th> Discount</th>
                                        <th> Payment Proof / Receipt No</th>
                                        <th> Status</th>
                                        <th> Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($candidates as $key=>$customer)
                                    <tr class="rm-{{$customer['id']}}">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$customer['name']}} </td>
                                        <td>{{$customer['father_name']}} </td>
                                        <td>{{$customer['phone_number']}}</td>
                                        <td>
                                            {{$customer['cat']['name']??'N/A'}} -  Rs{{$customer['cat']['price']??0}}
                                            @if($customer['accompanying_count']>0)
                                            <p>Accompanying Persons X {{$customer['accompanying_count']}} = Rs {{$customer['accompanying_count'] * 5000}}</p>
                                            <p>Total <strong>{{$customer['cat']['price']+$customer['accompanying_count'] * 5000??0}}</strong></p>
                                            
                                            @endif
                                        
                                        </td>
                                         <td>{{$customer['discount']}}</td>
                                        <td>
                                            @if($customer['payment_method']=="Cash")
                                        <p><strong>Receipt No</strong>: {{$customer['receipt_no']}}</p>
                                            @else

                                            @if($customer['payment_proof']==null)
                                            <a href="{{URL::to($customer['image']['image']??'')}}" target="_blank">View</a>
                                            @else

                                            <a href="{{URL::to($customer['payment_proof'])}}" target="_blank">View</a>
                                            @endif
                                        @endif
                                        </td>
                                        <td>{{$customer['status']}}</td>


                                        <td>
                                            @if (auth()->user()->role=="admin")
                                            {{-- <a href="{{route('admin.all.candidate.edit',$customer['id'])}}" class="primary"><i class="la la-edit"></i></a> --}}
                                            <a onclick="deleteAlert(`{{route('admin.all.candidate.delete',$customer['id'])}}`,`{{$customer['id']}}`)" class="danger"><i class="la la-trash"></i></a>

                                            <a href="{{route('admin.all.candidate.view',$customer['id'])}}" class="primary"><i class="la la-eye"></i></a>
                                            @else
                                            <a href="{{route('admin.all.candidate.view',$customer['id'])}}" class="primary"><i class="la la-eye"></i></a>

                                            @endif

                                        </td>



                                    </tr>

                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sr #</th>
                                        <th> Name</th>
                                        <th>Father Name</th>
                                        <th> Phone Number</th>
                                        <th> Categroy</th>
                                         <th> Discount</th>
                                        <th> Payment Proof</th>
                                        <th> Status</th>
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
<script>
    function deleteAlert(route,slug){

        Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
        }).then((result) => {

        if (result.isConfirmed) {
            $.ajax({
                url: route,
                type: 'get',
                success: function(result) {
                   if(result.success){
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                        });

                        $('.rm-'+slug).remove();
                   }
                }
            });
        }
        });
    }
</script>
@endsection


