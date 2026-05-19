@extends('admin.layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
    cursor: default;
    padding-left: 16px;
    padding-right: 5px;
}
</style>
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
                        <form class="form" method="POST" action="{{route('admin.send.email.submit')}}">
                            @csrf

                            <div class="form-body">

                                <div class="form-group">
                                    <label for="timesheetinput1"> Send Email</label>
                                    <div class="position-relative ">
                                       <select  class="form-control js-example-basic-multiple" name="emails[]" multiple="multiple" required id="">
                                        <option value="Assistant@iadsr.edu.pk">Select Email</option>
                                        @foreach ($candidates as $candidate)
                                        <option value="{{$candidate['email']}}">{{$candidate['email']}}</option>

                                        @endforeach
                                       </select>

                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-12">
                                        <label>Email Subject</label>
                                        <input class="multisteps-form__input form-control" type="text" value="Join Us at Face Congress 2024: An Exclusive Conference Experience!                                        " name="subject" required
                                            placeholder="Mail Subject" onfocus="focused(this)" onfocusout="defocused(this)" required>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-12">
                                        <label>Email Body</label>
                                        <textarea class="multisteps-form__input form-control" type="text" id="summernote" name="body" required
                                            placeholder="Mail Subject" onfocus="focused(this)" onfocusout="defocused(this)"><p>Dear Esteemed Participants,</p><p>Greetings!</p><p>We are thrilled to extend our warmest invitation to you for the upcoming Face Congress 2024, an unparalleled gathering of industry leaders, innovators, and experts in the field. Scheduled to take place at the prestigious Jinnah Convention Center in Islamabad, this event promises to be an enriching and enlightening experience for all attendees.</p><p>Mark your calendars for the main conference event on *April 28th, 2024*, where you'll have the opportunity to engage in thought-provoking discussions, gain valuable insights, and network with peers from around the globe.&nbsp;</p><p>We sincerely hope you'll join us for this exceptional opportunity to learn, connect, and collaborate with some of the brightest minds in the field. Your presence will undoubtedly contribute to the success and vibrancy of Face Congress 2024.</p><p><span style="font-size: 1rem;">Looking forward to seeing you at Jinnah Convention Center for what promises to be an unforgettable event.</span></p><p><span style="font-size: 1rem;">For More Information Please Contact this Number =&gt; <b>03363365111</b></span></p><p><span style="font-size: 1rem;"><br></span><br></p></textarea>
                                    </div>
                                </div>










                            </div>

                            <div class="form-actions right">

                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Send Email
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
