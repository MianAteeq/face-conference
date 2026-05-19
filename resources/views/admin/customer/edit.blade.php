@extends('admin.layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
<link href="/style.css" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined">
<link rel="stylesheet" href="/fileUpload/fileUpload.css">
@endsection

@section('header')
<div class="content-header-left col-md-6 col-12 mb-2">
    <h3 class="content-header-title">Candidate </h3>
    <div class="row breadcrumbs-top">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">DashBoard</a>
                </li>

                <li class="breadcrumb-item active">Candidate Update
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
                        <div id="main-content">
                            <article id="post-75" class="post-75 page type-page status-publish has-post-thumbnail hentry">
                              <div class="entry-content">
                                <div class="et-l et-l--post">
                                  <div class="et_builder_inner_content et_pb_gutters3">

                                    <div role="main" class="form-all" style="margin-top: 0px;box-shadow: none;">
                                      <ul class="form-section page-section">
                                          <li id="cid_16" class="form-input-wide" data-type="control_head">
                                              <div class="form-header-group  header-large">

                                                  <div class="header-text httal htvam">
                                                      <h1 id="header_16" class="form-header" data-component="header">Conference Online Registration
                                                      </h1>
                                                      <div id="subHeader_16" class="form-subHeader">Please fill in the form below. We'll contact you
                                                          as soon as possible.</div>
                                                  </div>
                                              </div>
                                          </li>
                                          <form action="{{route('admin.all.candidate.update')}}" method="POST" enctype="multipart/form-data" style="width: 100%;">
                                              @csrf
                                              <input type="hidden" name="id" value="{{$candidate['id']}}">
                                              <li class="form-line jf-required" data-type="control_radio" id="id_25">
                                                <label class="form-label form-label-top form-label-auto" id="label_25" aria-hidden="false"> Registration Type<span class="form-required">*</span> </label>
                                                <div id="cid_25" class="form-input-wide jf-required" data-layout="full">
                                                  <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_25" data-component="radio">
                                                    <span class="form-radio-item"><span class="dragger-item"></span>
                                                    <input type="radio" aria-describedby="label_25" class="form-radio validate[required]" id="input_25_0" name="registration_type" @if ($candidate['registration_type']=="Conference") checked @endif  value="Conference" required="">
                                                    <label id="label_input_25_0" for="input_25_0">Conference</label></span><span class="form-radio-item"><span class="dragger-item"></span>
                                                    <input type="radio" aria-describedby="label_25" class="form-radio validate[required]" id="input_25_1" name="registration_type" @if ($candidate['registration_type']=="Workshop") checked @endif value="Workshop" required="">
                                                    <label id="label_input_25_1" for="input_25_1">Workshop</label></span></div>
                                                </div>
                                              </li>
                                            <li class="form-line card-1col" data-type="control_payment" id="id_21" data-payment="true"><label
                                                    class="form-label form-label-top" id="label_21" for="input_21" aria-hidden="false"> Registration Fees <span
                                                    class="form-required">*</span>
                                                </label>
                                                <div id="cid_21" class="form-input-wide" data-layout="full">
                                                    <div data-wrapper-react="true">
                                                        <div data-wrapper-react="true" class="product-container-wrapper">

                                                            <div data-wrapper-react="true" id="conference_fees" @if ($candidate['registration_type']=="Conference") @else style="display: none" @endif>
                                                                @foreach ($types as $key=>$type)

                                                                <span class="form-product-item hover-product-item  new_ui" categories="non-categorized"
                                                                pid="1001" aria-labelledby="label_21">
                                                                <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                                                                    <div class="p_col">
                                                                        <div class="p_checkbox"><input type="radio"
                                                                                class="form-checkbox  form-product-input" id="conference{{$type['id']}}"
                                                                                name="qualifications"
                                                                                data-inputname="qualifications"  @if ($candidate['registration_type']=="Conference") @if ($type['id']==$candidate['qualifications']) checked @endif @endif value="{{$type['id']}}" readonly=""
                                                                                aria-label="Select Product: Conference Regisration Fee (Personal)">
                                                                            <div class="checked"></div>
                                                                            <div class="select_border"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p_image">
                                                                        <div class="image_area "></div>
                                                                    </div>
                                                                    <div for="conference{{$type['id']}}" class="form-product-container"><span
                                                                            data-wrapper-react="true">
                                                                            <div class="title_description"><span class="form-product-name"
                                                                                    id="product-name-conference{{$type['id']}}">{{$type['name']}} Regisration Fee
                                                                                </span><span class="form-product-description"
                                                                                    id="product-name-description-conference{{$type['id']}}"></span></div><span
                                                                                class="form-product-details"><b><span
                                                                                        data-wrapper-react="true">Rs<span
                                                                                            id="input_21_1001_price">{{number_format($type['price'],2)}}</span></span></b></span>
                                                                        </span></div>
                                                                    <div class="focus_action_button_container"><a
                                                                            class="btn-inline-product-delete">&nbsp;</a><a
                                                                            class="btn-inline-product-settings">&nbsp;</a></div>
                                                                </div>
                                                            </span>
                                                            <div class="p_item_separator "></div>

                                                            @endforeach


                                                            </div>
                                                            <div data-wrapper-react="true" @if ($candidate['registration_type']=="Conference") style="display: none" @endif  id="shops_fees">
                                                                @foreach ($types_shops as $key_s=>$type_shop)
                                                                <span class="form-product-item hover-product-item  new_ui" categories="non-categorized"
                                                                pid="1001" aria-labelledby="label_21">
                                                                <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                                                                    <div class="p_col">
                                                                        @if(count($candidate['workshops'])==0)
                                                                        <div class="p_checkbox"><input type="checkbox"
                                                                                class="form-checkbox  form-product-input" id="workshop{{$type_shop['id']}}"
                                                                                name="qualification[]"
                                                                                data-inputname="qualifications"  @if ($candidate['registration_type']=="Workshop") @if ($type_shop['id']==$candidate['qualifications']) checked @endif @endif value="{{$type_shop['id']}}" readonly=""
                                                                                aria-label="Select Product:{{$type_shop['name']}}">
                                                                            <div class="checked"></div>
                                                                            <div class="select_border"></div>
                                                                        </div>
                                                                        @else
                                                                        <div class="p_checkbox"><input type="checkbox"
                                                                            class="form-checkbox  form-product-input" id="workshop{{$type_shop['id']}}"
                                                                            name="qualification[]"
                                                                            data-inputname="qualifications"  @if ($candidate['registration_type']=="Workshop") @foreach ($candidate['workshops'] as $workshop ) @if ($type_shop['id']==$workshop['workshop_id']) checked @endif @endforeach @endif value="{{$type_shop['id']}}" readonly=""
                                                                            aria-label="Select Product:{{$type_shop['name']}}">
                                                                        <div class="checked"></div>
                                                                        <div class="select_border"></div>
                                                                    </div>


                                                                        @endif
                                                                    </div>
                                                                    <div class="p_image">
                                                                        <div class="image_area "></div>
                                                                    </div>
                                                                    <div for="workshop{{$type_shop['id']}}" class="form-product-container"><span
                                                                            data-wrapper-react="true">
                                                                            <div class="title_description"><span class="form-product-name"
                                                                                    id="product-name-workshop{{$type_shop['id']}}">{{$type_shop['name']}} Regisration Fee
                                                                                </span><span class="form-product-description"
                                                                                    id="product-name-description-workshop"></span></div><span
                                                                                class="form-product-details"><b><span
                                                                                        data-wrapper-react="true">Rs<span
                                                                                            id="workshop_price">{{number_format($type_shop['price'],2)}}</span></span></b></span>
                                                                        </span></div>
                                                                    <div class="focus_action_button_container"><a
                                                                            class="btn-inline-product-delete">&nbsp;</a><a
                                                                            class="btn-inline-product-settings">&nbsp;</a></div>
                                                                </div>
                                                            </span>
                                                            <div class="p_item_separator "></div>

                                                            @endforeach


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="form-line jf-required" @if ($candidate['qualifications']!=1)   style="display: none" @endif data-type="control_email" id="face_no"><label
                                                class="form-label form-label-top form-label-auto" id="label_7" for="input_7" aria-hidden="false">
                                                FACE Membership No <span class="form-required">*</span> </label>
                                            <div id="cid_7" class="form-input-wide jf-required" data-layout="half"> <span
                                                    class="form-sub-label-container" style="vertical-align:top"><input type="text" id="face_no_input"
                                                        name="face_no" class="form-textbox validate" data-defaultvalue=""
                                                        autocomplete="section-input_7 email" style="width:310px" size="310"
                                                        placeh$candidateer="" data-component="text"
                                                        aria-labelledby="label_7 sublabel_input_7"  value="{{$candidate['face_no']}}"></span>
                                                        @if($errors->has('face_no'))
                                                        <div class="form-error-message" role="alert"><img
                                                            src="https://cdn.jotfor.ms/images/exclamation-octagon.png"> <span
                                                            class="error-navigation-message">{{$errors->first('face_no')}}.</span>
                                                        <div class="form-error-arrow">
                                                            <div class="form-error-arrow-inner"></div>
                                                        </div>
                                                    </div>

                                                        @endif
                                                    </div>
                                        </li>

                                          <li class="form-line jf-required " data-type="control_fullname" id="id_1"><label
                                            class="form-label form-label-top form-label-auto" id="label_1" for="first_1" aria-hidden="false">
                                            Full Name<span class="form-required">*</span> </label>
                                        <div id="cid_1" class="form-input-wide jf-required" data-layout="full">
                                            <div data-wrapper-react="true">
                                                <span class="form-sub-label-container"  @if($candidate['qualifications']!=4) style="display: none" @endif id="prefix_student" style="vertical-align:top;flex: 0 1 30%;" data-input-type="prefix">
                                                    <select data-component="prefix" style="width: 100%; min-width: 50%; max-width: 100%;"  name="prefix" id="prefix_27" class="dropdown-match-height form-dropdown is-active" aria-labelledby="label_27 sublabel_27_prefix" autocomplete="section-input_27 honorific-prefix">

                                                    <option  value="" >Select Option</option>

                                                    <option class="pre_student" style=""  @if($candidate['prefix']=="Student.") selected @endif   value="Student.">Student.</option>

                                                  </select>
                                                  <label class="form-sub-label" for="prefix_27" id="sublabel_27_prefix" style="min-height:13px">Prefix</label></span>
                                                <span class="form-sub-label-container" style="vertical-align:top"
                                                    data-input-type="first"><input type="text" id="first_1" name="name"
                                                        class="form-textbox validate[required] form-validation-error" data-defaultvalue=""
                                                        autocomplete="section-input_1 given-name" size="10" data-component="first"
                                                        aria-labelledby="label_1 sublabel_1_first" required="" value="{{$candidate['name']}}"><label
                                                        class="form-sub-label" for="first_1" id="sublabel_1_first" style="min-height:13px">
                                                        Name</label>
                                                    </span>
                                                        <span class="form-sub-label-container" style="vertical-align:top"
                                                    data-input-type="last"><input type="text" id="last_1" name="father_name"
                                                        class="form-textbox validate[required] form-validation-error" data-defaultvalue=""
                                                        autocomplete="section-input_1 family-name" size="15" data-component="last"
                                                        aria-labelledby="label_1 sublabel_1_last" required="" value="{{$candidate['father_name']}}"><label
                                                        class="form-sub-label" for="last_1" id="sublabel_1_last" style="min-height:13px">Father
                                                        Name</label></span></div>
                                    </li>
                                          <li class="form-line jf-required" data-type="control_email" id="id_7"><label
                                                  class="form-label form-label-top form-label-auto" id="label_7" for="input_7" aria-hidden="false">
                                                  E-mail<span class="form-required">*</span> </label>
                                              <div id="cid_7" class="form-input-wide jf-required" data-layout="half"> <span
                                                      class="form-sub-label-container" style="vertical-align:top"><input type="email" id="input_7"
                                                          name="email" class="form-textbox validate[required, Email]" data-defaultvalue=""
                                                          autocomplete="section-input_7 email" style="width:310px" size="310"
                                                          placeh$candidateer="ex: myname@example.com" data-component="email"
                                                          aria-labelledby="label_7 sublabel_input_7" required="" value="{{$candidate['email']}}"><label
                                                          class="form-sub-label" for="input_7" id="sublabel_input_7"
                                                          style="min-height:13px">example@example.com</label></span>
                                                          @if($errors->has('email'))
                                                          <div class="form-error-message" role="alert"><img
                                                              src="https://cdn.jotfor.ms/images/exclamation-octagon.png"> <span
                                                              class="error-navigation-message">{{$errors->first('email')}}.</span>
                                                          <div class="form-error-arrow">
                                                              <div class="form-error-arrow-inner"></div>
                                                          </div>
                                                      </div>

                                                          @endif
                                                      </div>
                                          </li>
                                          <li class="form-line jf-required" data-type="control_email" id="id_7"><label
                                                  class="form-label form-label-top form-label-auto" id="label_7" for="input_7" aria-hidden="false">
                                                  Institution <span class="form-required">*</span> </label>
                                              <div id="cid_7" class="form-input-wide jf-required" data-layout="half"> <span
                                                      class="form-sub-label-container" style="vertical-align:top"><input type="text" id="input_7"
                                                          name="institution" class="form-textbox validate[required, Email]" data-defaultvalue=""
                                                          autocomplete="section-input_7 email" style="width:310px" size="310"
                                                          placeh$candidateer="" data-component="text"
                                                          aria-labelledby="label_7 sublabel_input_7" required="" value="{{$candidate['institution']}}"></span>
                                                          @if($errors->has('institution'))
                                                          <div class="form-error-message" role="alert"><img
                                                              src="https://cdn.jotfor.ms/images/exclamation-octagon.png"> <span
                                                              class="error-navigation-message">{{$errors->first('institution')}}.</span>
                                                          <div class="form-error-arrow">
                                                              <div class="form-error-arrow-inner"></div>
                                                          </div>
                                                      </div>

                                                          @endif
                                                      </div>
                                          </li>
                                          <li class="form-line jf-required" data-type="control_email" id="id_7"><label
                                                  class="form-label form-label-top form-label-auto" id="label_7" for="input_7" aria-hidden="false">
                                                  PMDC Registration No  </label>
                                              <div id="cid_7" class="form-input-wide jf-required" data-layout="half"> <span
                                                      class="form-sub-label-container" style="vertical-align:top"><input type="text" id="input_7"
                                                          name="registration_no" class="form-textbox validate" data-defaultvalue=""
                                                          autocomplete="section-input_7 email" style="width:310px" size="310"
                                                          placeh$candidateer="" data-component="text"
                                                          aria-labelledby="label_7 sublabel_input_7"  value="{{$candidate['registration_no']}}"></span>
                                                          @if($errors->has('registration_no'))
                                                          <div class="form-error-message" role="alert"><img
                                                              src="https://cdn.jotfor.ms/images/exclamation-octagon.png"> <span
                                                              class="error-navigation-message">{{$errors->first('registration_no')}}.</span>
                                                          <div class="form-error-arrow">
                                                              <div class="form-error-arrow-inner"></div>
                                                          </div>
                                                      </div>

                                                          @endif
                                                      </div>
                                          </li>
                                          <li class="form-line jf-required" data-type="control_email" id=""><label
                                            class="form-label form-label-top form-label-auto" id="label_7" for="input_7" aria-hidden="false">
                                           MBBS / BDS / Other  </label>
                                        <div id="cid_7" class="form-input-wide jf-required" data-layout="half"> <span
                                                class="form-sub-label-container" style="vertical-align:top"><input type="text" id="input_7"
                                                    name="degree" class="form-textbox validate" data-defaultvalue=""
                                                    autocomplete="section-input_7 " style="width:310px" size="310"
                                                    placeholder="" data-component="text"
                                                    aria-labelledby="label_7 sublabel_input_7"  value="{{$candidate['degree']}}"></span>
                                                    @if($errors->has('degree'))
                                                    <div class="form-error-message" role="alert"><img
                                                        src="https://cdn.jotfor.ms/images/exclamation-octagon.png"> <span
                                                        class="error-navigation-message">{{$errors->first('degree')}}.</span>
                                                    <div class="form-error-arrow">
                                                        <div class="form-error-arrow-inner"></div>
                                                    </div>
                                                </div>

                                                    @endif
                                                </div>
                                    </li>

                                          <li class="form-line jf-required" data-type="control_phone" id="id_8"><label
                                                  class="form-label form-label-top form-label-auto" id="label_8" for="input_8_full"> Phone Number<span
                                                      class="form-required">*</span> </label>
                                              <div id="cid_8" class="form-input-wide jf-required" data-layout="half"> <span
                                                      class="form-sub-label-container" style="vertical-align:top"><input type="tel" id="input_8_full"
                                                          name="phone_number" data-type="mask-number"
                                                          class="mask-phone-number form-textbox validate[required, Fill Mask] form-validation-error"
                                                          data-defaultvalue="" autocomplete="section-input_8 tel-national" style="width:310px"
                                                          data-masked="true" placeh$candidateer="(0000) 0000000" data-component="phone"
                                                          aria-labelledby="label_8" required="" value="{{$candidate['phone_number']}}" inputmode="text"
                                                          maskvalue="(###) ###-####"></span>
                                                          @if($errors->has('phone_number'))
                                                          <div class="form-error-message" role="alert"><img
                                                              src="https://cdn.jotfor.ms/images/exclamation-octagon.png"> <span
                                                              class="error-navigation-message">{{$errors->first('phone_number')}}.</span>
                                                          <div class="form-error-arrow">
                                                              <div class="form-error-arrow-inner"></div>
                                                          </div>
                                                      </div>

                                                          @endif

                                              </div>
                                          </li>
                                          <li class="form-line jf-required" data-type="control_phone" id="id_8"><label
                                                  class="form-label form-label-top form-label-auto" id="label_8" for="input_8_full"> Cnic / Passport<span
                                                      class="form-required">*</span> </label>
                                              <div id="cid_8" class="form-input-wide jf-required" data-layout="half"> <span
                                                      class="form-sub-label-container" style="vertical-align:top"><input type="tel" id="input_8_full"
                                                          name="cnic_passport" data-type="mask-number"
                                                          class="mask-phone-number form-textbox validate[required, Fill Mask] form-validation-error"
                                                          data-defaultvalue="" autocomplete="section-input_8 tel-national" style="width:310px"
                                                          data-masked="true" placeh$candidateer="" data-component="phone"
                                                          aria-labelledby="label_8" required="" value="{{$candidate['cnic_passport']}}" inputmode="text"
                                                          maskvalue="(###) ###-####"></span>
                                                          @if($errors->has('cnic_passport'))
                                                          <div class="form-error-message" role="alert"><img
                                                              src="https://cdn.jotfor.ms/images/exclamation-octagon.png"> <span
                                                              class="error-navigation-message">{{$errors->first('cnic_passport')}}.</span>
                                                          <div class="form-error-arrow">
                                                              <div class="form-error-arrow-inner"></div>
                                                          </div>
                                                      </div>

                                                          @endif
                                                  {{-- <div class="form-error-message" role="alert"><img
                                                          src="https://cdn.jotfor.ms/images/exclamation-octagon.png"> <span
                                                          class="error-navigation-message">This field is required.</span>
                                                      <div class="form-error-arrow">
                                                          <div class="form-error-arrow-inner"></div>
                                                      </div>
                                                  </div> --}}
                                              </div>
                                          </li>

                                          <li class="form-line card-1col" data-type="control_payment" id="id_21" data-payment="true"><label
                                                  class="form-label form-label-top" id="label_21" for="input_21" aria-hidden="false"> Payment Method
                                              </label>
                                              <div id="cid_21" class="form-input-wide" data-layout="full">
                                                  <div data-wrapper-react="true">
                                                      <div data-wrapper-react="true" class="product-container-wrapper">

                                                          <div data-wrapper-react="true">


                                                              <span class="form-product-item hover-product-item  new_ui" categories="non-categorized"
                                                                  pid="1001" aria-labelledby="label_21">
                                                                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                                                                      <div class="p_col">
                                                                          <div class="p_checkbox"><input type="radio"
                                                                                  class="form-checkbox  form-product-input" id="input_21_1002"
                                                                                  name="payment_method" data-inputname="payment_method"
                                                                                  value="Bank Transfer" @if ($candidate['payment_method']=="Bank Transfer") checked @endif readonly=""
                                                                                  aria-label="Select Product: Bank Transfer">
                                                                              <div class="checked"></div>
                                                                              <div class="select_border"></div>
                                                                          </div>
                                                                      </div>
                                                                      <div class="p_image">
                                                                          <div class="image_area "></div>
                                                                      </div>
                                                                      <div for="input_21_1002" class="form-product-container"><span
                                                                              data-wrapper-react="true">
                                                                              <div class="title_description"><span class="form-product-name"
                                                                                      id="product-name-input_21_1002">Bank Transfer
                                                                                  </span><span class="form-product-description"
                                                                                      id="product-name-description-input_21_1002"></span></div>
                                                                          </span></div>
                                                                      <div class="focus_action_button_container"><a
                                                                              class="btn-inline-product-delete">&nbsp;</a><a
                                                                              class="btn-inline-product-settings">&nbsp;</a></div>
                                                                  </div>
                                                              </span>
                                                              <div class="p_item_separator "></div>
                                                              <span class="form-product-item hover-product-item  new_ui" categories="non-categorized"
                                                                  pid="1001" aria-labelledby="label_21">
                                                                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                                                                      <div class="p_col">
                                                                          <div class="p_checkbox"><input type="radio"
                                                                                  class="form-checkbox  form-product-input" id="input_21_1002"
                                                                                  name="payment_method" @if ($candidate['payment_method']=="Cash") checked @endif data-inputname="payment_method" value="Cash"
                                                                                  readonly="" aria-label="Select Product: Cash">
                                                                              <div class="checked"></div>
                                                                              <div class="select_border"></div>
                                                                          </div>
                                                                      </div>
                                                                      <div class="p_image">
                                                                          <div class="image_area "></div>
                                                                      </div>
                                                                      <div for="input_21_1002" class="form-product-container"><span
                                                                              data-wrapper-react="true">
                                                                              <div class="title_description"><span class="form-product-name"
                                                                                      id="product-name-input_21_1002">Cash
                                                                                  </span><span class="form-product-description"
                                                                                      id="product-name-description-input_21_1002"></span></div>
                                                                          </span></div>
                                                                      <div class="focus_action_button_container"><a
                                                                              class="btn-inline-product-delete">&nbsp;</a><a
                                                                              class="btn-inline-product-settings">&nbsp;</a></div>
                                                                  </div>
                                                              </span>

                                                              <div class="payment_footer new_ui " @if ($candidate['registration_type']!="Workshop") @else  style="display: none" @endif   id="conference_price">
                                                                  <div class="total_area">
                                                                      <div class="form-payment-total">
                                                                          <div id="total-text">Total</div>
                                                                          <div class="form-payment-price"><span data-wrapper-react="true">Rs<span
                                                                                      id="payment_total">@if ($candidate['registration_type']=="Conference") {{number_format($candidate['type']['price'],2)}} @else 0.00 @endif</span></span></div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="payment_footer new_ui "  @if ($candidate['registration_type']!="Conference") @else  style="display: none" @endif id="shop_price">
                                                                  <div class="total_area" style="min-width: 220px;">
                                                                    <div class="form-payment-total" id="sub_total"  @if(count($candidate['workshops'])>1)  @else  style="display: none;" @endif>
                                                                        <div id="total-text" style="width: 100%; text-align: left;">Total</div>
                                                                        <div class="form-payment-price"><span data-wrapper-react="true">Rs<span
                                                                                    id="sub_totals">{{ getTotalSValue($candidate['workshops'],$candidate)}}</span></span></div>
                                                                    </div>
                                                                    <div class="form-payment-total " id="discount_price" @if(count($candidate['workshops'])>1) style="margin-top: 10px;" @else  style="display: none;margin-top: 10px;" @endif>
                                                                        <div id="total-text" style="width: 100%; text-align: left;">Discount (15 %)</div>
                                                                        <div class="form-payment-price"><span data-wrapper-react="true">Rs<span
                                                                                    id="discount_totals">{{ getTotalDValue($candidate['workshops'],$candidate)}}</span></span></div>
                                                                    </div>
                                                                      <div class="form-payment-total" style="margin-top: 10px;">
                                                                          <div id="total-text" style="width: 100%;text-align: left;">Paid Total</div>
                                                                          <div class="form-payment-price"><span data-wrapper-react="true">Rs<span
                                                                                      id="payment_totals">{{ getTotalValue($candidate['workshops'],$candidate)}}</span></span></div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              {{-- <div class="payment_footer new_ui ">
                                                                  <div class="total_area">
                                                                      <div class="form-payment-total">
                                                                          <div id="total-text">Total</div>
                                                                          <div class="form-payment-price"><span data-wrapper-react="true">Rs<span
                                                                                      id="payment_total">{{number_format($types[0]['price'],2)}}</span></span></div>
                                                                      </div>
                                                                  </div>
                                                              </div> --}}
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                          <li class="form-line card-1col payment-receipt" @if ($candidate['payment_method']!="Bank Transfer") style="display: none" @endif  data-type="control_payment" id="id_21" data-payment="true">
                                              <div class="rest-form-group ff-item   ff-file ff-full-width  ff-item-noprd" id="ff-id-990882434">

                                                  <label
                                                  class="form-label form-label-top form-label-auto" id="label_23" for="input_23" aria-hidden="false">
                                                  Payment Receipt  <span
                                                  class="form-required">*</span></label>


                                                      <small id="Static990882434" class="ff-help form-text mdViewer">
                                                        <p><strong>Please review the registration fees for scientific sessions and workshops listed above before completing this form.</strong>
                                                          To finalize your registration, kindly follow the steps below after paying the applicable amount to the provided bank details:</p>
                                                          <p><strong>Bank Details:</strong></p><p><strong>Account Title:</strong> FACE CONGRESS</p>
                                                          <p><strong>IBN Number:</strong> PK26SONE0035220012596128</p>
                                                          <p><strong>Account Number:</strong> 20012596128</p>
                                                          <p><strong>Bank:</strong> SONERI BANK LTD</p>
                                                      </small>







                                              </div>
                                          </li>
                                          <li class="form-line payment-receipt"  @if ($candidate['payment_method']!="Bank Transfer") style="display: none" @endif data-type="control_fileupload" id="id_23">
                                              <div id="cid_23" class="form-input-wide" data-layout="full">
                                                  {{-- <div class="jfQuestion-fields" data-wrapper-react="true">
                                                      <div class="jfField isFilled">
                                                          <div class="jfUpload-wrapper">
                                                              <div class="jfUpload-container">
                                                                  <div class="jfUpload-button-container">
                                                                      <div class="jfUpload-button" aria-hidden="true" tabindex="0"
                                                                          style="display:none" data-version="v2">Browse Files<div
                                                                              class="jfUpload-heading forDesktop">Drag and drop files here</div>
                                                                          <div class="jfUpload-heading forMobile">Choose a file</div>
                                                                      </div>

                                                                  </div>
                                                              </div>
                                                              <div class="jfUpload-files-container">
                                                                  <div class="validate[multipleUpload]">
                                                                      <div class="qq-uploader">
                                                                          <div class="qq-upload-drop-area" style="display: none;"><span>Drop files
                                                                                  here to upload</span></div>
                                                                          <div class="qq-upload-button" aria-hidden="true"
                                                                              style="position: relative; overflow: hidden; direction: ltr;">Browse
                                                                              Files<div class="jfUpload-heading forDesktop">Drag and drop files here
                                                                              </div>
                                                                              <div class="jfUpload-heading forMobile">Choose a file</div>
                                                                              <img src="{{URL::to($candidate['payment_proof'])}}" id="img-visor" style="object-fit: contain;
                                                                              height: 30vh;" alt="" class="sr">
                                                                          </div>
                                                                          <div class="inputContainer" role="button" aria-label="Browse Files Drag and drop files here" tabindex="0">
                                                                              <input  class="fileupload-input" id="input_23_file"
                                                                                  type="file" name="file" aria-labelledby="label_23"
                                                                                  aria-hidden="true" tabindex="-1" >
                                                                              </div>
                                                                              <label class="form-sub-label"
                                                                              aria-hidden="true" for="input_23" id="sublabel_23"></label><span
                                                                              style="display:none"
                                                                              class="multipleFileUploadLabels cancelText">Cancel</span><span
                                                                              style="display:none" class="multipleFileUploadLabels ofText">of</span>
                                                                          <ul class="qq-upload-list" aria-label="Uploaded files"></ul>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div data-wrapper-react="true"></div>
                                                      </div><span style="display:none" class="cancelText">Cancel</span><span style="display:none"
                                                          class="ofText">of</span>
                                                  </div> --}}
                                                  <div id="fileUpload"></div>
                                              </div>
                                          </li>
                                          <li class="form-line jf-required receipt_no"  @if ($candidate['payment_method']=="Cash") @else style="display: none" @endif  data-type="control_phone" id="id_8"><label
                                              class="form-label form-label-top form-label-auto" id="label_8" for="input_8_full"> Receipt No<span
                                                  class="form-required">*</span> </label>
                                          <div id="cid_8" class="form-input-wide jf-required" data-layout="half"> <span
                                                  class="form-sub-label-container" style="vertical-align:top"><input type="tel" id="input_8_full_receipt"
                                                      name="receipt_no" data-type="mask-number"
                                                      class="mask-phone-number form-textbox validate[required, Fill Mask] form-validation-error"
                                                      data-defaultvalue="" autocomplete="section-input_8 tel-national" style="width:310px"
                                                      data-masked="true" placeh$candidateer="#0001" data-component="phone"
                                                      aria-labelledby="label_8"  value="{{$candidate['receipt_no']}}" inputmode="text"
                                                      maskvalue="(###) ###-####"></span>
                                                      @if($errors->has('receipt_no'))
                                                      <div class="form-error-message" role="alert"><img
                                                          src="https://cdn.jotfor.ms/images/exclamation-octagon.png"> <span
                                                          class="error-navigation-message">{{$errors->first('receipt_no')}}.</span>
                                                      <div class="form-error-arrow">
                                                          <div class="form-error-arrow-inner"></div>
                                                      </div>
                                                  </div>

                                                      @endif
                                              {{-- <div class="form-error-message" role="alert"><img
                                                      src="https://cdn.jotfor.ms/images/exclamation-octagon.png"> <span
                                                      class="error-navigation-message">This field is required.</span>
                                                  <div class="form-error-arrow">
                                                      <div class="form-error-arrow-inner"></div>
                                                  </div>
                                              </div> --}}
                                          </div>
                                      </li>

                                          <li class="form-line" data-type="control_button" id="id_17">
                                              <div id="cid_17" class="form-input-wide" data-layout="full">
                                                  <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
                                                      <button id="input_17" type="submit"
                                                          class="form-submit-button submit-button jf-form-buttons jsTest-submitField"
                                                          data-component="button" data-content="" aria-live="polite">Update</button></div>
                                              </div>
                                          </li>
                                      </form>
                                      </ul>
                                      <div class="row">
                                        <div class="col-md-12">
                                         <h3>Images</h3>
                                        </div>
                                        @if(count($candidate['images'])>0)
                                         @foreach ($candidate['images'] as $image)
                                         <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
                                             <a href="{{URL::to($image['image'])}}" itemprop="contentUrl" data-size="480x360">
                                                 <img class="img-thumbnail img-fluid" src="{{URL::to($image['image'])}}" itemprop="thumbnail" alt="Image description">
                                             </a>
                                         </figure>
                                         @endforeach
                                         @else
                                         <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
                                            <a href="{{URL::to($candidate['payment_proof'])}}" itemprop="contentUrl" data-size="480x360">
                                                <img class="img-thumbnail img-fluid" src="{{URL::to($candidate['payment_proof'])}}" itemprop="thumbnail" alt="Image description">
                                            </a>
                                        </figure>
                                         @endif


                                     </div>

                                  </div>
                                  </div>
                                </div>
                              </div>
                            </article>
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

       let types= @json($types);


       let filter=types.filter((item)=>item.id==this.value);

       console.log(filter);

       if(filter.length>0){
        $('#payment_total').text((filter[0].price.toFixed(2)));
       }

       if(this.value==1){

           $('#face_no').show();
           $('#face_no_input').attr("required",false);
        }else{
        $('#face_no').hide();
        $('#face_no_input').attr("required",false);

       }
       if(this.value==4){

$('#prefix_student').show();

 }
else{
 $('#prefix_student').hide();

 }


});

</script>
<script>
$('input[type=checkbox]').change(function() {

let types= @json($types_shops);
console.log(types)

var val = [];
 $(':checkbox:checked').each(function(i){
   val[i] = $(this).val();
 });

 if(val.length===1){
   val.forEach((record)=>{
     let filter=types.filter((item)=>item.id.toString()==record.toString());
     if(filter.length>0){
     $('#payment_totals').text((filter[0].price.toFixed(2)));
   }
   });
   $('#discount_price').hide();
   $('#sub_total').hide();
 }else if(val.length===0){
     $('#payment_totals').text((0.00));
     $('#discount_price').hide();
     $('#sub_total').hide();
 }else{
   let total=0;
   val.forEach((record)=>{
     console.log(record,"item")
     let filters=types.filter((item)=>item.id.toString()==record.toString());
     console.log(filters)
     if(filters.length>0){

       total+=filters[0].price;
   }


   });
   let discount=15;
   let discountprice=((discount*parseFloat(total)) / 100);
   let final_value=parseFloat(total)-((discount*parseFloat(total)) / 100);
   $('#payment_totals').text((final_value.toFixed(2)));
   $('#discount_totals').text((discountprice.toFixed(2)));
   $('#sub_totals').text((parseFloat(total).toFixed(2)));
   $('#discount_price').show();
   $('#sub_total').show();
 }



//



if(this.value==1){

    $('#face_no').show();
    $('#face_no_input').attr("required",true);
 }else{
 $('#face_no').hide();
 $('#face_no_input').attr("required",false);

}

if(this.value==4){

    $('#prefix_student').show();

     }
 else{
     $('#prefix_student').hide();

     }

});

</script>
<script>
    $('input[type=radio][name=registration_type]').change(function() {

        if(this.value==="Conference"){

$('#conference_fees').show();
$('#conference_price').show();
$('#shop_price').hide();
$('#shops_fees').hide();
$('#face_no').show();
$('#face_no_input').attr("required",true);

if($('input[name="qualifications"]:checked').val()==4){
            // alert(1);

            $('#prefix_student').show();

                }
                else{
                    $('#prefix_student').hide();

                }



}else{

$('#text-student').hide();




$('#conference_fees').hide();
$('#conference_price').hide();
$('#shop_price').show();
$('#shops_fees').show();
$('#face_no').hide();
$('#face_no_input').attr("required",false);
$('#face_no_input').attr("required",false);

if($('input[name="qualifications"]:checked').val()==4){
            // alert(1);

            $('#prefix_student').show();

                }
                else{
                    $('#prefix_student').hide();

                }
}

});

</script>
<script>
    $('input[type=radio][name=payment_method]').change(function() {

    if(this.value=="Cash"){

        $('.payment-receipt').hide();
        $('.receipt_no').show();
        $('#input_8_full_receipt').attr("required",true);
        $('#input_23_file').attr("required",false);



    }else{
        $('.payment-receipt').show();
        $('.receipt_no').hide();
        $('#input_8_full_receipt').attr("required",false);
        $('#input_23_file').attr("required",false);
    }




});

</script>

<script>
    $('#input_23_file').change(()=>{
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

<script src="/fileUpload/fileUpload.js"></script>

<script>
    $(document).ready(function () {
        $("#fileUpload").fileUpload();
        $('#fileUpload-1').attr("name","file[]")
    });
</script>
@endsection
