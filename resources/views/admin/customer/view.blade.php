@extends('admin.layouts.master')
@section('css')
    <link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link href="/style.css" rel="stylesheet" />
@endsection

@section('header')
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Candidate </h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">DashBoard</a>
                    </li>

                    <li class="breadcrumb-item active">Candidate View
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
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>Full Name</td>
                                        <td>{{ $candidate['prefix'] }} {{ $candidate['name'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>E-mail:</td>
                                        <td class="users-view-latest-activity">{{ $candidate['email'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Age Group:</td>
                                        <td class="users-view-latest-activity">{{ $candidate['age_group'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Gender:</td>
                                        <td class="users-view-latest-activity">{{ $candidate['gender'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Conatct Number:</td>
                                        <td class="users-view-latest-activity">{{ $candidate['phone_number'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>WhatsApp Number:</td>
                                        <td class="users-view-latest-activity">{{ $candidate['whatsapp_number'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Address:</td>
                                        <td class="users-view-latest-activity">{{ $candidate['address'] }}
                                            {{ $candidate['city'] }} {{ $candidate['country'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Institution :</td>
                                        <td class="users-view-verified">{{ $candidate['institution'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Qualification :</td>
                                        <td class="users-view-verified">{{ $candidate['qualifications'] }}</td>
                                    </tr>

                                    <tr>
                                        <td>Payment Method:</td>
                                        <td class="users-view-role">{{ $candidate['payment_method'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Reference:</td>
                                        <td class="users-view-role">{{ $candidate['describe_you'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Profile Pic:</td>
                                        <td class="users-view-role">
                                            <img src="{{ asset($candidate['profile_pic']) }}" style="width:100px" />
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Register Workshop:</td>
                                        @if (count($candidate['workshops']) > 0)
                                            <td class="users-view-role">
                                                <ul>

                                                    @foreach ($candidate['workshops'] as $workshop)
                                                        <li>{{ $workshop['work']['name'] }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                        @else
                                            <td class="users-view-role">{{ $candidate['cat']['name'] }}</td>
                                        @endif

                                    </tr>
                                    <tr>
                                        <td>Accompanying Person:</td>

                                        <td class="users-view-role">
                                            @if (!empty($candidate['accompanying']) && json_decode($candidate['accompanying']))
                                                @foreach (json_decode($candidate['accompanying']) as $data)
                                                    <p>{{ $data }}</p>
                                                @endforeach
                                            @else
                                                <p>N/A</p>
                                            @endif
                                        </td>





                                    </tr>
                                    {{-- <tr>
                                    <td>FACE Membership No :</td>
                                    <td class="users-view-role">{{$candidate['fac_no']}}</td>
                                </tr>
                                <tr>
                                    <td>Receipt No :</td>
                                    <td class="users-view-role">{{$candidate['receipt_no']}}</td>
                                </tr> --}}
                                </tbody>
                            </table>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Images</h3>
                                </div>
                                @if (count($candidate['images']) > 0)
                                    @foreach ($candidate['images'] as $image)
                                        <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope=""
                                            itemtype="http://schema.org/ImageObject">
                                            <a href="{{ URL::to($image['image']) }}" itemprop="contentUrl"
                                                data-size="480x360">
                                                <img class="img-thumbnail img-fluid" src="{{ URL::to($image['image']) }}"
                                                    itemprop="thumbnail" alt="Image description">
                                            </a>
                                        </figure>
                                    @endforeach
                                @else
                                    <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope=""
                                        itemtype="http://schema.org/ImageObject">
                                        <a href="{{ URL::to($candidate['payment_proof']) }}" itemprop="contentUrl"
                                            data-size="480x360">
                                            <img class="img-thumbnail img-fluid"
                                                src="{{ URL::to($candidate['payment_proof']) }}" itemprop="thumbnail"
                                                alt="Image description">
                                        </a>
                                    </figure>
                                @endif


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


@section('script')
    <script>
        $('input[type=radio][name=qualifications]').change(function() {

            let types = @json($types);


            let filter = types.filter((item) => item.id == this.value);

            console.log(filter);

            if (filter.length > 0) {
                $('#payment_total').text((filter[0].price.toFixed(2)));
            }

            if (this.value == 1) {

                $('#face_no').show();
                $('#face_no_input').attr("required", true);
            } else {
                $('#face_no').hide();
                $('#face_no_input').attr("required", false);

            }


        });
    </script>
    <script>
        $('input[type=radio][name=qualification]').change(function() {
            // alert(this.value);

            let types = @json($types_shops);


            let filter = types.filter((item) => item.id == this.value);

            console.log(filter);

            if (filter.length > 0) {
                $('#payment_totals').text((filter[0].price.toFixed(2)));
            }

            if (this.value == 1) {

                $('#face_no').show();
                $('#face_no_input').attr("required", true);
            } else {
                $('#face_no').hide();
                $('#face_no_input').attr("required", false);

            }


        });
    </script>
    <script>
        $('input[type=radio][name=registration_type]').change(function() {

            if (this.value === "Conference") {

                $('#conference_fees').show();
                $('#conference_price').show();
                $('#shop_price').hide();
                $('#shops_fees').hide();
                $('#face_no').show();
                $('#face_no_input').attr("required", true);

            } else {
                $('#conference_fees').hide();
                $('#conference_price').hide();
                $('#shop_price').show();
                $('#shops_fees').show();
                $('#face_no').hide();
                $('#face_no_input').attr("required", false);
            }

        });
    </script>
    <script>
        $('input[type=radio][name=payment_method]').change(function() {

            if (this.value == "Cash") {

                $('.payment-receipt').hide();
                $('.receipt_no').show();
                $('#input_8_full_receipt').attr("required", true);
                $('#input_23_file').attr("required", false);



            } else {
                $('.payment-receipt').show();
                $('.receipt_no').hide();
                $('#input_8_full_receipt').attr("required", false);
                $('#input_23_file').attr("required", false);
            }




        });
    </script>

    <script>
        $('#input_23_file').change(() => {
            const file = $('#input_23_file').prop("files")[0];
            const imagen = URL.createObjectURL(file);
            console.log(URL.createObjectURL(file));
            $('#img-visor').attr('src', imagen);
            // $('.qq-upload-button').hide();
            $('#img-visor').show();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (Session::has('success'))
            Swal.fire({
                title: "Good job!",
                text: "Update Successfully ",
                icon: "success"
            });
        @endif
        @if (Session::has('error'))
        @endif
    </script>
@endsection
