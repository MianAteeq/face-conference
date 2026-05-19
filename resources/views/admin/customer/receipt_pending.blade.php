@extends('admin.layouts.master')

@section('css')

<link rel="stylesheet" type="text/css"
    href="/admin-assets/app-assets/vendors/css/tables/datatable/datatables.min.css">

<style>

    .buttons-print,
    .buttons-copy,
    .buttons-pdf{
        display:none;
    }

    .receipt-status{
        margin-top:10px;
    }

    .action-buttons{
        display:flex;
        gap:8px;
    }

</style>

@endsection

@section('header')

<div class="content-header-left col-md-6 col-12 mb-2">

    <h3 class="content-header-title">
        Candidate List
    </h3>

    <div class="row breadcrumbs-top">

        <div class="breadcrumb-wrapper col-12">

            <ol class="breadcrumb">

                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        Dashboard
                    </a>
                </li>

                <li class="breadcrumb-item active">
                    Candidate List
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

                    <h4 class="card-title">
                        Candidate List
                    </h4>

                </div>

                <div class="card-content collapse show">

                    <div class="card-body card-dashboard">

                        <div class="table-responsive">

                            <table class="table table-striped table-bordered file-export">

                                <thead>

                                    <tr>

                                        <th>Sr #</th>
                                        <th>Full Name</th>
                                        <th>Institute</th>
                                        <th>Phone Number</th>
                                        <th>Category</th>
                                        <th>Accompanying Person</th>
                                        <th>Payment Proof / Receipt No</th>
                                        <th>Receipt Status</th>
                                        <th>Action</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach($candidates as $customer)

                                        <tr class="rm-{{ $customer->id }}">

                                            {{-- SR --}}

                                            <td>
                                                {{ $loop->iteration }}
                                            </td>

                                            {{-- NAME --}}

                                            <td>
                                                {{ $customer->prefix }}
                                                {{ $customer->name }}
                                                {{ $customer->father_name }}
                                            </td>

                                            {{-- INSTITUTE --}}

                                            <td>
                                                {{ $customer->institution ?? 'N/A' }}
                                            </td>

                                            {{-- PHONE --}}

                                            <td>
                                                {{ $customer->phone_number }}
                                            </td>

                                            {{-- CATEGORY --}}

                                            <td>
                                                {{ $customer->cat->name ?? 'N/A' }}
                                            </td>

                                            {{-- ACCOMPANYING --}}

                                            <td>

                                                @if(
                                                    !empty($customer->accompanying) &&
                                                    json_decode($customer->accompanying)
                                                )

                                                    @foreach(json_decode($customer->accompanying) as $person)

                                                        <p>
                                                            {{ $person }}
                                                        </p>

                                                    @endforeach

                                                @else

                                                    <span>
                                                        N/A
                                                    </span>

                                                @endif

                                            </td>

                                            {{-- PAYMENT PROOF --}}

                                            <td>

                                                {{-- CASH PAYMENT --}}

                                                @if($customer->payment_method == 'Cash')

                                                    <p>

                                                        <strong>
                                                            Receipt No:
                                                        </strong>

                                                        {{ $customer->receipt_no ?? 'N/A' }}

                                                    </p>

                                                {{-- ONLINE / BANK PAYMENT --}}

                                                @else

                                                    @if(!empty($customer->payment_proof))

                                                        <a
                                                            href="{{ URL::to($customer->payment_proof) }}"
                                                            target="_blank"
                                                            class="btn btn-sm btn-primary"
                                                        >
                                                            View Receipt
                                                        </a>

                                                    @else

                                                        <span class="badge badge-danger">
                                                            No Receipt Uploaded
                                                        </span>

                                                    @endif

                                                @endif

                                            </td>

                                            {{-- RECEIPT STATUS --}}

                                            <td>

                                                @if($customer->receipt_status == 'APPROVE')

                                                    <span class="badge badge-success">
                                                        APPROVED
                                                    </span>

                                                @elseif($customer->receipt_status == 'REJECT')

                                                    <span class="badge badge-danger">
                                                        REJECTED
                                                    </span>

                                                @else

                                                    <span class="badge badge-warning">
                                                        PENDING
                                                    </span>

                                                @endif

                                            </td>

                                            {{-- ACTIONS --}}

                                            <td>
                                                @if ($customer->receipt_status == 'PENDING')
                                                    
                                               

                                                <div class="action-buttons">

                                                    {{-- APPROVE --}}

                                                    <a
                                                        href="{{ route('admin.receipt.approve', $customer->id) }}"
                                                        class="btn btn-success btn-sm"
                                                        onclick="return confirm('Approve this receipt?')"
                                                    >
                                                        Approve
                                                    </a>

                                                    {{-- REJECT --}}

                                                    <a
                                                        href="{{ route('admin.receipt.reject', $customer->id) }}"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Reject this receipt?')"
                                                    >
                                                        Reject
                                                    </a>

                                                </div>
                                                 @endif

                                            </td>

                                        </tr>

                                    @endforeach

                                </tbody>

                                <tfoot>

                                    <tr>

                                        <th>Sr #</th>
                                        <th>Full Name</th>
                                        <th>Institute</th>
                                        <th>Phone Number</th>
                                        <th>Category</th>
                                        <th>Accompanying Person</th>
                                        <th>Payment Proof / Receipt No</th>
                                        <th>Receipt Status</th>
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