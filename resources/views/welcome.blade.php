<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Conference Registration Form</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="/style.css" rel="stylesheet" />



</head>

<body>

    <div role="main" class="form-all">
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
            <form action="{{route('register')}}" method="POST" enctype="multipart/form-data" style="width: 100%;">
                @csrf
            <li class="form-line jf-required " data-type="control_fullname" id="id_1"><label
                    class="form-label form-label-top form-label-auto" id="label_1" for="first_1" aria-hidden="false">
                    Full Name<span class="form-required">*</span> </label>
                <div id="cid_1" class="form-input-wide jf-required" data-layout="full">
                    <div data-wrapper-react="true"><span class="form-sub-label-container" style="vertical-align:top"
                            data-input-type="first"><input type="text" id="first_1" name="name"
                                class="form-textbox validate[required] form-validation-error" data-defaultvalue=""
                                autocomplete="section-input_1 given-name" size="10" data-component="first"
                                aria-labelledby="label_1 sublabel_1_first" required="" value="{{old('name')}}"><label
                                class="form-sub-label" for="first_1" id="sublabel_1_first" style="min-height:13px">
                                Name</label></span><span class="form-sub-label-container" style="vertical-align:top"
                            data-input-type="last"><input type="text" id="last_1" name="father_name"
                                class="form-textbox validate[required] form-validation-error" data-defaultvalue=""
                                autocomplete="section-input_1 family-name" size="15" data-component="last"
                                aria-labelledby="label_1 sublabel_1_last" required="" value="{{old('father_name')}}"><label
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
                            placeholder="ex: myname@example.com" data-component="email"
                            aria-labelledby="label_7 sublabel_input_7" required="" value="{{old('email')}}"><label
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
                            placeholder="" data-component="text"
                            aria-labelledby="label_7 sublabel_input_7" required="" value="{{old('email')}}"></span>
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
                            placeholder="" data-component="text"
                            aria-labelledby="label_7 sublabel_input_7"  value="{{old('registration_no')}}"></span>
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
            <li class="form-line jf-required" data-type="control_email" id="id_7"><label
                    class="form-label form-label-top form-label-auto" id="label_7" for="input_7" aria-hidden="false">
                    FACE Membership No  </label>
                <div id="cid_7" class="form-input-wide jf-required" data-layout="half"> <span
                        class="form-sub-label-container" style="vertical-align:top"><input type="text" id="input_7"
                            name="face_no" class="form-textbox validate" data-defaultvalue=""
                            autocomplete="section-input_7 email" style="width:310px" size="310"
                            placeholder="" data-component="text"
                            aria-labelledby="label_7 sublabel_input_7"  value="{{old('face_no')}}"></span>
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
            <li class="form-line jf-required" data-type="control_phone" id="id_8"><label
                    class="form-label form-label-top form-label-auto" id="label_8" for="input_8_full"> Phone Number<span
                        class="form-required">*</span> </label>
                <div id="cid_8" class="form-input-wide jf-required" data-layout="half"> <span
                        class="form-sub-label-container" style="vertical-align:top"><input type="tel" id="input_8_full"
                            name="phone_number" data-type="mask-number"
                            class="mask-phone-number form-textbox validate[required, Fill Mask] form-validation-error"
                            data-defaultvalue="" autocomplete="section-input_8 tel-national" style="width:310px"
                            data-masked="true" placeholder="(0000) 0000000" data-component="phone"
                            aria-labelledby="label_8" required="" value="{{old('phone_number')}}" inputmode="text"
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
                            data-masked="true" placeholder="(0000) 0000000" data-component="phone"
                            aria-labelledby="label_8" required="" value="{{old('cnic_passport')}}" inputmode="text"
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
                    class="form-label form-label-top" id="label_21" for="input_21" aria-hidden="false"> Registration Type <span
                    class="form-required">*</span>
                </label>
                <div id="cid_21" class="form-input-wide" data-layout="full">
                    <div data-wrapper-react="true">
                        <div data-wrapper-react="true" class="product-container-wrapper">

                            <div data-wrapper-react="true">
                                @foreach ($types as $key=>$type)
                                <span class="form-product-item hover-product-item  new_ui" categories="non-categorized"
                                pid="1001" aria-labelledby="label_21">
                                <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                                    <div class="p_col">
                                        <div class="p_checkbox"><input type="radio"
                                                class="form-checkbox  form-product-input" id="input_21_1001"
                                                name="qualifications"
                                                data-inputname="qualifications" @if ($key==0) checked

                                                @endif value="{{$type['name']}}" readonly=""
                                                aria-label="Select Product: Conference Regisration Fee (Personal)">
                                            <div class="checked"></div>
                                            <div class="select_border"></div>
                                        </div>
                                    </div>
                                    <div class="p_image">
                                        <div class="image_area "></div>
                                    </div>
                                    <div for="input_21_1001" class="form-product-container"><span
                                            data-wrapper-react="true">
                                            <div class="title_description"><span class="form-product-name"
                                                    id="product-name-input_21_1001">{{$type['name']}} Regisration Fee
                                                </span><span class="form-product-description"
                                                    id="product-name-description-input_21_1001"></span></div><span
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

                                {{-- <span class="form-product-item hover-product-item  new_ui" categories="non-categorized"
                                    pid="1001" aria-labelledby="label_21">
                                    <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                                        <div class="p_col">
                                            <div class="p_checkbox"><input type="radio"
                                                    class="form-checkbox  form-product-input" id="input_21_1001"
                                                    name="qualifications"
                                                    data-inputname="qualifications" value="Under Graduate" readonly=""
                                                    aria-label="Select Product: Conference Regisration Fee (Personal)">
                                                <div class="checked"></div>
                                                <div class="select_border"></div>
                                            </div>
                                        </div>
                                        <div class="p_image">
                                            <div class="image_area "></div>
                                        </div>
                                        <div for="input_21_1001" class="form-product-container"><span
                                                data-wrapper-react="true">
                                                <div class="title_description"><span class="form-product-name"
                                                        id="product-name-input_21_1001">Under Graduate Regisration Fee
                                                    </span><span class="form-product-description"
                                                        id="product-name-description-input_21_1001"></span></div><span
                                                    class="form-product-details"><b><span
                                                            data-wrapper-react="true">Rs<span
                                                                id="input_21_1001_price">500.00</span></span></b></span>
                                            </span></div>
                                        <div class="focus_action_button_container"><a
                                                class="btn-inline-product-delete">&nbsp;</a><a
                                                class="btn-inline-product-settings">&nbsp;</a></div>
                                    </div>
                                </span> --}}

                                {{-- <div class="payment_footer new_ui ">
                                    <div class="total_area">
                                        <div class="form-payment-total">
                                            <div id="total-text">Total</div>
                                            <div class="form-payment-price"><span data-wrapper-react="true">Rs<span
                                                        id="payment_total">0.00</span></span></div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
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
                                                    value="Bank Transfer" checked readonly=""
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
                                                    name="payment_method" data-inputname="payment_method" value="Cash"
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

                                <div class="payment_footer new_ui ">
                                    <div class="total_area">
                                        <div class="form-payment-total">
                                            <div id="total-text">Total</div>
                                            <div class="form-payment-price"><span data-wrapper-react="true">Rs<span
                                                        id="payment_total">{{number_format($types[0]['price'],2)}}</span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="form-line card-1col payment-receipt" data-type="control_payment" id="id_21" data-payment="true">
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
            <li class="form-line payment-receipt" data-type="control_fileupload" id="id_23">
                <div id="cid_23" class="form-input-wide" data-layout="full">
                    <div class="jfQuestion-fields" data-wrapper-react="true">
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
                                                <img src="" id="img-visor" style="display: none;object-fit: contain;
                                                height: 100vh;" alt="" class="sr">
                                            </div>
                                            <div class="inputContainer" role="button" aria-label="Browse Files Drag and drop files here" tabindex="0">
                                                <input  class="fileupload-input" id="input_23_file"
                                                    type="file" name="file" aria-labelledby="label_23"
                                                    aria-hidden="true" tabindex="-1">
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
                    </div>
                </div>
            </li>
            <li class="form-line jf-required receipt_no" style="display: none" data-type="control_phone" id="id_8"><label
                class="form-label form-label-top form-label-auto" id="label_8" for="input_8_full"> Receipt No<span
                    class="form-required">*</span> </label>
            <div id="cid_8" class="form-input-wide jf-required" data-layout="half"> <span
                    class="form-sub-label-container" style="vertical-align:top"><input type="tel" id="input_8_full_receipt"
                        name="receipt_no" data-type="mask-number"
                        class="mask-phone-number form-textbox validate[required, Fill Mask] form-validation-error"
                        data-defaultvalue="" autocomplete="section-input_8 tel-national" style="width:310px"
                        data-masked="true" placeholder="#0001" data-component="phone"
                        aria-labelledby="label_8"  value="{{old('receipt_no')}}" inputmode="text"
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
                            data-component="button" data-content="" aria-live="polite">Register</button></div>
                </div>
            </li>
        </form>
        </ul>

    </div>

</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $('input[type=radio][name=qualifications]').change(function() {

       let types= @json($types);


       let filter=types.filter((item)=>item.name===this.value);

       if(filter.length>0){
        $('#payment_total').text((filter[0].price.toFixed(2)));
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
        $('#input_23_file').attr("required",true);
    }




});

</script>

<script>
    $('#input_23').change(()=>{
const file = $('#input_23').prop("files")[0];
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
        text: "Register Successfully Out Team Contact You Shortly",
        icon: "success"
        });

    @endif
    @if (Session::has('error'))

    @endif
</script>

</html>
