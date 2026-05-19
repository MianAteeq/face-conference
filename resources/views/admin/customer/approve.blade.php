@extends('admin.layouts.master')
@section('css')
    <link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <style>
        .buttons-print {
            display: none;
        }

        .buttons-copy {
            display: none;
        }

        .buttons-pdf {
            display: none;
        }
    </style>
@endsection

@section('header')
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Conference Candidate </h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">DashBoard</a>
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

            {{-- @foreach ($candidate_groups as $key => $array) --}}

            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="success">{{ number_format($total, 2) }}</h3>
                                    <h6>Total Amount</h6>
                                </div>
                                <div>
                                    <i class="icon-pie-chart success font-large-2 float-right"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="success">{{ number_format($total_discount, 2) }}</h3>
                                    <h6>Total Discount</h6>
                                </div>
                                <div>
                                    <i class="icon-pie-chart success font-large-2 float-right"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div id="chartContainer" style="height: 370px; width: 100%;"></div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}

        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Conference Candidate </h4>
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
                                            <th>Institue</th>
                                            <th> Name</th>
                                            <th>Father Name</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th> Category</th>
                                            <th> Discount</th>
                                            <th> Accompanying Person</th>
                                           <th> Address</th>
                                            <th> Payment Method</th>

                                            <th>Payment Status</th>
                                            <th> Status</th>
                                            @if (auth()->user()->role == 'admin')
                                                <th> Action</th>
                                            @endif


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($candidates as $key => $customer)
                                            <tr class="rm-{{ $customer['id'] }}">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $customer->cn_register_no }}</td>
                                                <td>{{ $customer->institution }}</td>
                                                <td>{{ $customer['name'] }} </td>
                                                <td>{{ $customer['father_name'] }} </td>
                                                <td>{{ $customer['phone_number'] }}</td>
                                                <td>{{ $customer['email'] }}</td>
                                                <td>

                                                    Rs{{ $customer['cat']['price'] ?? 0 }}
                                                    @if ($customer['accompanying_count'] > 0)
                                                        <p>Accompanying Persons X {{ $customer['accompanying_count'] }} =
                                                            Rs {{ $customer['accompanying_count'] * 5000 }}</p>
                                                        <p>Total
                                                            <strong>{{ $customer['cat']['price'] + $customer['accompanying_count'] * 5000 ?? 0 }}</strong>
                                                        </p>
                                                    @endif

                                                </td>
                                                <td>{{ $customer['discount'] }}</td>
                                                <td>
                                                    @if (!empty($customer['accompanying']) && json_decode($customer['accompanying']))
                                                        @foreach (json_decode($customer['accompanying']) as $data)
                                                            <p>{{ $data }}</p>
                                                        @endforeach
                                                    @else
                                                        <p>N/A</p>
                                                    @endif
                                                </td>
                                              <td>{{ $customer['address'] }}, {{ $customer['city'] }}, {{ $customer['state'] }} </td>
                                                <td>
                                                    @if ($customer['payment_method'] == 'Cash')
                                                        <p>{{ $customer['payment_method'] }} <br>
                                                            <strong>Receipt No</strong>: {{ $customer['receipt_no'] }}
                                                        </p>
                                                    @else
                                                        {{ $customer['payment_method'] }}
                                                    @endif
                                                </td>

                                                <td>
                                                    @if ($customer['is_paymnet'] == 1)
                                                        Payment Approved
                                                    @else
                                                        <a href="{{ route('admin.approve.candidates.payment', $customer['id']) }}"
                                                            class="btn btn-success">Approve</a>
                                                    @endif
                                                </td>
                                                <td>{{ $customer['status'] }}</td>
                                                @if (auth()->user()->role == 'admin')
                                                    <td>
                                                        <a href="{{ route('admin.send.download', $customer['id']) }}"
                                                            class="primary" style="margin-left: 20px;"><i
                                                                class="la la-download"></i></a>
                                                        <a href="{{ route('admin.all.candidate.view', $customer['id']) }}"
                                                            class="primary" style="margin-left: 20px;"><i
                                                                class="la la-eye"></i></a>
                                                        <a href="{{ route('admin.move.to.pending', $customer['id']) }}"
                                                            style="font-size: 11px; padding-right: 0px; padding-left: 0px;"
                                                            class="btn btn-sm btn-info"> Move To Pending</a>
                                                    </td>
                                                @endif



                                            </tr>
                                        @endforeach


                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sr #</th>
                                            <th>Registration #</th>
                                            <th>Institue</th>
                                            <th> Name</th>
                                            <th>Father Name</th>
                                            <th> Phone Number</th>
                                            <th>Email</th>
                                            <th> Category</th>
                                            <th> Discount</th>
                                            <th> Accompanying Person</th>
                                           <th> Address</th>
                                            <th> Payment Method</th>

                                            <th>Payment Status</th>
                                            <th> Status</th>
                                            @if (auth()->user()->role == 'admin')
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



    {{-- <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script> --}}
    <script type="text/javascript" src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>

    <script>
        window.onload = function() {

            var options = {
                title: {
                    text: "Conference Student Institue Wise"
                },
                legend: {
                    enabled: false // hiding bottom legend
                },
                data: [{
                    type: "pie",
                    startAngle: 45,
                    showInLegend: false,
                    indexLabel: "{label} ({y})", // SHOW COUNT
                    dataPoints: @json($chartData)
                }]
            };

            $("#chartContainer").CanvasJSChart(options);

        }
    </script>
    <script src="/admin-assets/app-assets/js/scripts/tables/datatables/datatable-advanced.js"></script>
@endsection
