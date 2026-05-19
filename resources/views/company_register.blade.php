<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
<!-- International Telephone Input -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"></script>-->



<style>
    .containers {
        max-width: 900px;
        margin: 50px auto;
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    /* header {
        background: #004aad;
        color: #fff;
        text-align: center;
        padding: 25px;
        font-size: 22px;
        font-weight: 600;
    } */

    /* Stepper */
    .stepper {
        display: flex;
        justify-content: space-between;
        position: relative;
        background: #f9fbff;
        padding: 20px 60px;
    }

    .stepper::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 80px;
        right: 80px;
        height: 4px;
        background: #d6d9e6;
        transform: translateY(-50%);
        z-index: 0;
    }

    .step {
        position: relative;
        z-index: 1;
        text-align: center;
        width: 33%;
    }

    .step .step-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: #d6d9e6;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        font-size: 20px;
        transition: all 0.4s ease;
    }

    .step.active .step-icon {
        background: #004aad;
        transform: scale(1.1);
        box-shadow: 0 4px 10px rgba(0, 74, 173, 0.3);
    }

    .step.completed .step-icon {
        background: #28a745;
    }

    .step-label {
        margin-top: 8px;
        font-size: 14px;
        font-weight: 500;
        color: #333;
    }

    /* Form styling */
    form {
        padding: 35px 45px;
    }

    h3 {
        color: #004aad;
        font-size: 20px;
        border-left: 5px solid #004aad;
        padding-left: 10px;
        margin-bottom: 25px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: 500;
        margin-bottom: 6px;
    }

    input.form-control,
    select.form-control {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 14px;
    }

    input:focus,
    select:focus {
        outline: none;
        border-color: #004aad;
    }

    .step-content {
        display: none;
        animation: fadeIn 0.4s ease;
    }

    .step-content.active {
        display: block;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .btn {
        background: #004aad;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 10px 25px;
        font-size: 15px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .btn:hover {
        background: #003580;
    }

    .buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 25px;
    }

    .hidden {
        display: none;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
        font-size: 14px;
    }

    th,
    td {
        padding: 10px 8px;
        border-bottom: 1px solid #e0e6f1;
    }

    tr:hover {
        background: #f6f8ff;
    }

    .total-box {
        margin-top: 25px;
        padding: 15px;
        background: #f0f4ff;
        border-radius: 10px;
        border: 1px solid #ccd7ff;
        font-size: 15px;
    }

    .summary-list {
        margin-top: 10px;
        line-height: 1.6;
    }

    .error {
        color: red;
        font-size: 13px;
        margin-top: 3px;
    }

    select.form-control {
        width: 100%;
        padding: 8px;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 14px;
    }

    .btn.focus,
    .btn:focus,
    .btn:hover {
        color: white;
        text-decoration: none;
    }
</style>

<style>
    .events-section-title h2 {
        font-size: 2rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #222;
    }

    .sponsors h3 {
        font-size: 1.2rem;
        margin-bottom: 15px;
        color: #333;
    }

    .partner-box {
        width: 70%;
        margin: 0 auto;
        transition: transform 0.3s ease;
    }

    .partner-box:hover {
        transform: scale(1.05);
    }

    .partner-logo {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .white-bg {
        background: #fff;
        padding: 12px;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .partner-box {
            width: 80%;
        }
    }

    @media (max-width: 768px) {
        .events-section-title h2 {
            font-size: 1.6rem;
        }

        .sponsors h3 {
            font-size: 1.1rem;
        }

        .partner-box {
            width: 85%;
        }

        .navbar-brand>img {
            width: 230px !important;
        }
    }
</style>
<style>
    .iti {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    @media (min-width: 1200px) {
        .container {
            width: 1200px;
        }
    }
</style>

<style>
    .registration-notice {
        max-width: 700px;
        margin: 50px auto;
        padding: 20px 25px;
        border-radius: 8px;
        background: #fff3cd;
        border: 1px solid #ffeeba;
        color: #856404;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        font-size: 18px;
        font-weight: 600;
    }

    .registration-notice span {
        color: #c82333;
        font-weight: 700;
    }
</style>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper" id="home">

        <!-- start preloader -->
        <div class="preloader">
            <div>
                <img src="/assets/logo.gif" alt>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <header class="events-header">
            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img
                                src="https://conference.fissionmonster.com/final_logo.png" alt
                                class="img img-responsive" style="width: 200px;"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="current"><a href="{{ route('home.page') }}#home">Home</a></li>
                            <li><a href="{{ route('home.page') }}#about">About</a></li>
                            <!--<li><a href="{{ route('home.page') }}#speakers">Speakers</a></li>-->
                            <li><a href="{{ route('home.page') }}#schedules">Schedules</a></li>
                            <li><a href="{{ route('home.page') }}#ticket">Register</a></li>
                            <li><a href="{{ route('quiz.page') }}">Student Competitions</a></li>
                            <li><a href="{{ route('home.page') }}#gallery">Gallery</a></li>
                            <li><a href="{{ route('home.page') }}#contact">Contact</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->


        <!-- start of hero -->
        <section class="hero parallax events-hero" data-bg-image="/assets/images/events/hero-bg.jpg">
            <div class="hero-title">
                <span>Dec 26 - 28 . Expo Center, Lahore 2025</span>
                <h1>PDA International Conference</h1>
                <ul class="social-links">
                    <li><a href="https://www.facebook.com/profile.php?id=61581195661341&sk=reels_tab"><i
                                class="fa fa-facebook"></i></a></li>
                    <li><a
                            href="https://www.linkedin.com/posts/pda-conference-06b76b388_pdaconference25-dentalconference-pakistandentalassociation-activity-7379932139036860416-JDoi?utm_source=share&utm_medium=member_android&rcm=ACoAADXc-X4BSCHfeBanwTZ_yNBcgem7Qtnhxh4">
                            <i class="fa fa-linkedin"></i></a></li>
                    <li><a
                            href="https://www.instagram.com/pdaconference?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D"><i
                                class="fa fa-instagram"></i></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=923334214214"><i class="fa fa-whatsapp"></i></a>
                    </li>

                </ul>
                <img src="https://conference.fissionmonster.com/logo_white.png" alt=""
                    class="img img-responsive" style="text-align: center;margin: 0 auto;width: 50%;">
            </div>
        </section>
        <!-- end of hero -->


        {{-- <div class="registration-notice">
            REGISTRATIONS ARE NOW CLOSED.<br>
            YOU CAN REGISTER ON SPOT @ <span>PKR 10,000</span> AT THE REGISTRATION DESK.
        </div> --}}
        <!-- start events-about -->
        <section class="events-about section-padding" id="about">
            <div class="hosting-section-title-s2">
                <span class="subtitle">Registration Closes Soon – Secure Your Seat Now! </span>
                <h2>Register Now</h2>



            </div>

            <div class="containers">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="stepper">
                    <div class="step active" id="stepIndicator1">
                        <div class="step-icon"><i class="fa fa-user"></i></div>
                        <div class="step-label">Personal Info</div>
                    </div>
                    <div class="step" id="stepIndicator2">
                        <div class="step-icon"><i class="fa fa-graduation-cap"></i></div>
                        <div class="step-label">Qualification</div>
                    </div>
                    <div class="step" id="stepIndicator3">
                        <div class="step-icon"><i class="fa fa-credit-card"></i></div>
                        <div class="step-label">Payment</div>
                    </div>
                </div>

                <form id="registrationForm" method="POST" action="{{ route('register') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <!-- Step 1 -->
                    <div class="step-content active" id="step1">
                        <h3>Personal Information</h3>
                        <div class="form-group">
                            <label for="name">First Name</label>
                            <div style="display: flex; gap: 10px;">
                                <select name="prefix" id="prefix" class="form-control" style="max-width:120px;"
                                    required>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Dr.">Dr.</option>
                                    <option value="Ms.">Ms.</option>

                                    <option value="Student">Student</option>

                                </select>

                                <input type="text" name="first_name" id="name" class="form-control"
                                    placeholder="Enter Your First Name" required>
                            </div>
                        </div>
                        <div class="form-group"><label>Last Name</label>
                            <input type="text" class="form-control" name="last_name"
                                value="{{ old('last_name') }}" placeholder="Enter Your Last Name" required>
                        </div>
                        <div class="form-group"><label>Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ old('email') }}" placeholder="Enter Your Email" required>
                            <p id="emailStatus"></p>
                        </div>
                        <div id="extra_fields"></div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="tel" id="phone" value="{{ old('phone_number') }}"
                                placeholder="Enter Your Contact Number" class="form-control" required>
                            <input type="hidden" id="phone_full" name="phone_number"
                                value="{{ old('phone_number') }}" placeholder="Enter Your Contact Number"
                                class="form-control">

                            <small id="phone-error" style="color:red;display:none;">Please enter a valid phone
                                number.</small>
                        </div>
                        <div class="form-group"><label>Profile Picture</label>
                            <input type="file" name="picture" accept="image/*" class="form-control">
                        </div>
                        <div class="form-group"><label>Gender</label>
                            <select class="form-control" name="gender">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form-group"><label>Age
                                Group</label>
                            <select class="form-control" name="age_group">
                                <option>18-25</option>
                                <option>26-35</option>
                                <option>36-45</option>
                                <option>46+</option>
                            </select>
                        </div>

                        <div class="form-group"><label>Address</label>
                            <input type="text" name="address" value="{{ old('address') }}"
                                placeholder="Enter Your Address" class="form-control">
                        </div>
                        <div class="form-group"><label>City</label>
                            <input type="text" name="city" value="{{ old('city') }}"
                                placeholder="Enter Your City" class="form-control">
                        </div>
                        <div class="form-group"><label>State</label>
                            <input type="text" name="state" value="{{ old('state') }}"
                                placeholder="Enter Your State" class="form-control">
                        </div>

                        <div class="buttons">
                            <div></div>
                            <button type="button" class="btn" onclick="validateStep1()">Next</button>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="step-content" id="step2">
                        <h3>Qualification Details</h3>
                        <div class="form-group"><label>Qualification</label>
                            <input type="text" name="qualification" required
                                placeholder="Enter Your Qualification" value="{{ old('qualification') }}"
                                class="form-control">
                        </div>
                        <div class="form-group"><label>Describe Yourself</label><input type="text"
                                class="form-control" name="description" value="{{ old('description') }}" required
                                placeholder="Briefly describe yourself">
                        </div>
                        <div class="form-group">
                            <label>Institute</label>
                            <select name="institute_name" class="form-control" required>
                                <option value="">Select Clinic / Institute</option>

                                <option
                                    {{ old('institute_name') == 'Dental Section, Bolan Medical College' ? 'selected' : '' }}>
                                    Dental Section, Bolan Medical College</option>
                                <option {{ old('institute_name') == 'Bacha Khan Dental College' ? 'selected' : '' }}>
                                    Bacha Khan Dental College</option>
                                <option
                                    {{ old('institute_name') == 'Dental College, Ayub Medical College' ? 'selected' : '' }}>
                                    Dental College, Ayub Medical College</option>
                                <option {{ old('institute_name') == 'Khyber College of Dentistry' ? 'selected' : '' }}>
                                    Khyber College of Dentistry</option>
                                <option
                                    {{ old('institute_name') == 'KMU Institute of Dental Sciences / KIDS' ? 'selected' : '' }}>
                                    KMU Institute of Dental Sciences / KIDS</option>
                                <option {{ old('institute_name') == 'Saidu Dental College' ? 'selected' : '' }}>Saidu
                                    Dental College</option>
                                <option
                                    {{ old('institute_name') == 'de’Montmorency College of Dentistry' ? 'selected' : '' }}>
                                    de’Montmorency College of Dentistry</option>
                                <option
                                    {{ old('institute_name') == 'Dental Section, Army Medical College' ? 'selected' : '' }}>
                                    Dental Section, Army Medical College</option>
                                <option
                                    {{ old('institute_name') == 'Dental Section, Punjab Medical College' ? 'selected' : '' }}>
                                    Dental Section, Punjab Medical College</option>
                                <option
                                    {{ old('institute_name') == 'Institute of Dentistry, Nishtar Medical College' ? 'selected' : '' }}>
                                    Institute of Dentistry, Nishtar Medical College</option>
                                <option
                                    {{ old('institute_name') == 'School of Dentistry, Shaheed Zulfiqar Ali Bhutto Medical University' ? 'selected' : '' }}>
                                    School of Dentistry, Shaheed Zulfiqar Ali Bhutto Medical University</option>
                                <option {{ old('institute_name') == 'Bibi Aseefa Dental College' ? 'selected' : '' }}>
                                    Bibi Aseefa Dental College</option>
                                <option
                                    {{ old('institute_name') == 'Dental Department, Karachi Medical & Dental College' ? 'selected' : '' }}>
                                    Dental Department, Karachi Medical & Dental College</option>
                                <option
                                    {{ old('institute_name') == 'Dr. Ishratul Ebad Institute of Oral Health Sciences' ? 'selected' : '' }}>
                                    Dr. Ishratul Ebad Institute of Oral Health Sciences</option>
                                <option
                                    {{ old('institute_name') == 'Faculty of Dentistry, Liaquat University of Medical & Health Sciences' ? 'selected' : '' }}>
                                    Faculty of Dentistry, Liaquat University of Medical & Health Sciences</option>
                                <option
                                    {{ old('institute_name') == 'Sindh Institute of Oral Health Sciences / JSMU' ? 'selected' : '' }}>
                                    Sindh Institute of Oral Health Sciences / JSMU</option>
                                <option {{ old('institute_name') == 'Dow Dental College' ? 'selected' : '' }}>Dow
                                    Dental College</option>
                                <option
                                    {{ old('institute_name') == 'Dental College, Islamabad Medical & Dental College' ? 'selected' : '' }}>
                                    Dental College, Islamabad Medical & Dental College</option>
                                <option
                                    {{ old('institute_name') == 'Dental College, Rawal Institute of Health Sciences' ? 'selected' : '' }}>
                                    Dental College, Rawal Institute of Health Sciences</option>
                                <option
                                    {{ old('institute_name') == 'Foundation University College of Dentistry' ? 'selected' : '' }}>
                                    Foundation University College of Dentistry</option>
                                <option {{ old('institute_name') == 'HBS Dental College' ? 'selected' : '' }}>HBS
                                    Dental College</option>
                                <option
                                    {{ old('institute_name') == 'Islamic International Dental College' ? 'selected' : '' }}>
                                    Islamic International Dental College</option>
                                <option {{ old('institute_name') == 'Shifa College of Dentistry' ? 'selected' : '' }}>
                                    Shifa College of Dentistry</option>
                                <option
                                    {{ old('institute_name') == 'Dental Section, Women Medical College, Abbottabad' ? 'selected' : '' }}>
                                    Dental Section, Women Medical College, Abbottabad</option>
                                <option
                                    {{ old('institute_name') == 'Dental Section, Abbottabad International Medical College' ? 'selected' : '' }}>
                                    Dental Section, Abbottabad International Medical College</option>
                                <option
                                    {{ old('institute_name') == 'Dental Section, Frontier Medical College, Abbottabad' ? 'selected' : '' }}>
                                    Dental Section, Frontier Medical College, Abbottabad</option>
                                <option
                                    {{ old('institute_name') == 'Rehman College of Dentistry, Peshawar' ? 'selected' : '' }}>
                                    Rehman College of Dentistry, Peshawar</option>
                                <option {{ old('institute_name') == 'Peshawar Dental College' ? 'selected' : '' }}>
                                    Peshawar Dental College</option>
                                <option
                                    {{ old('institute_name') == 'Sardar Begum Dental College, Peshawar' ? 'selected' : '' }}>
                                    Sardar Begum Dental College, Peshawar</option>
                                <option
                                    {{ old('institute_name') == 'Avicenna Dental College, Lahore' ? 'selected' : '' }}>
                                    Avicenna Dental College, Lahore</option>
                                <option
                                    {{ old('institute_name') == 'Naheed Dental College, Lahore' ? 'selected' : '' }}>
                                    Naheed Dental College, Lahore</option>
                                <option
                                    {{ old('institute_name') == 'CMH Institute of Medical Sciences / CIMS Dental College, Multan' ? 'selected' : '' }}>
                                    CMH Institute of Medical Sciences / CIMS Dental College, Multan</option>
                                <option
                                    {{ old('institute_name') == 'Bakhtawar Amin Medical & Dental College (Dental Section), Multan' ? 'selected' : '' }}>
                                    Bakhtawar Amin Medical & Dental College (Dental Section), Multan</option>
                                <option
                                    {{ old('institute_name') == 'College of Dentistry, Sharif Medical & Dental College, Lahore' ? 'selected' : '' }}>
                                    College of Dentistry, Sharif Medical & Dental College, Lahore</option>
                                <option
                                    {{ old('institute_name') == 'Dental College, University Medical & Dental College, Faisalabad' ? 'selected' : '' }}>
                                    Dental College, University Medical & Dental College, Faisalabad</option>
                                <option
                                    {{ old('institute_name') == 'Dental College, FMH College of Medicine & Dentistry, Lahore' ? 'selected' : '' }}>
                                    Dental College, FMH College of Medicine & Dentistry, Lahore</option>
                                <option
                                    {{ old('institute_name') == 'Dental College, Akhtar Saeed Medical & Dental College, Lahore' ? 'selected' : '' }}>
                                    Dental College, Akhtar Saeed Medical & Dental College, Lahore</option>
                                <option
                                    {{ old('institute_name') == 'Dental Section, Multan Medical & Dental College' ? 'selected' : '' }}>
                                    Dental Section, Multan Medical & Dental College</option>
                                <option
                                    {{ old('institute_name') == 'Dental College, University College of Medicine & Dentistry, Lahore' ? 'selected' : '' }}>
                                    Dental College, University College of Medicine & Dentistry, Lahore</option>
                                <option
                                    {{ old('institute_name') == 'Dental College, HITEC Institute of Medical Sciences, Taxila Cantt' ? 'selected' : '' }}>
                                    Dental College, HITEC Institute of Medical Sciences, Taxila Cantt</option>
                                <option
                                    {{ old('institute_name') == 'Faryal Dental College, Sheikhupura' ? 'selected' : '' }}>
                                    Faryal Dental College, Sheikhupura</option>
                                <option
                                    {{ old('institute_name') == 'Institute of Dentistry, CMH Lahore Medical College' ? 'selected' : '' }}>
                                    Institute of Dentistry, CMH Lahore Medical College</option>
                                <option
                                    {{ old('institute_name') == 'Islam Dental College, Sialkot' ? 'selected' : '' }}>
                                    Islam Dental College, Sialkot</option>
                                <option
                                    {{ old('institute_name') == 'Margalla College of Dentistry, Rawalpindi' ? 'selected' : '' }}>
                                    Margalla College of Dentistry, Rawalpindi</option>
                                <option
                                    {{ old('institute_name') == 'Rashid Latif Dental College, Lahore' ? 'selected' : '' }}>
                                    Rashid Latif Dental College, Lahore</option>
                                <option
                                    {{ old('institute_name') == 'Shahida Islam Dental College, Lodhran' ? 'selected' : '' }}>
                                    Shahida Islam Dental College, Lodhran</option>
                                <option
                                    {{ old('institute_name') == 'Watim Dental College, Rawalpindi' ? 'selected' : '' }}>
                                    Watim Dental College, Rawalpindi</option>
                                <option
                                    {{ old('institute_name') == 'Lahore Medical & Dental College (Dental Section)' ? 'selected' : '' }}>
                                    Lahore Medical & Dental College (Dental Section)</option>
                                <option
                                    {{ old('institute_name') == 'Dental Section, Jinnah Medical & Dental College, Karachi' ? 'selected' : '' }}>
                                    Dental Section, Jinnah Medical & Dental College, Karachi</option>
                                <option
                                    {{ old('institute_name') == 'Isra Dental College, Hyderabad' ? 'selected' : '' }}>
                                    Isra Dental College, Hyderabad</option>
                                <option
                                    {{ old('institute_name') == 'Altamash Institute of Dental Medicine, Karachi' ? 'selected' : '' }}>
                                    Altamash Institute of Dental Medicine, Karachi</option>
                                <option
                                    {{ old('institute_name') == 'Baqai Dental College, Karachi' ? 'selected' : '' }}>
                                    Baqai Dental College, Karachi</option>
                                <option
                                    {{ old('institute_name') == 'Bhittai Dental & Medical College, Mirpurkhas' ? 'selected' : '' }}>
                                    Bhittai Dental & Medical College, Mirpurkhas</option>
                                <option
                                    {{ old('institute_name') == 'Dental College, Sir Syed College of Medical Sciences for Girls, Karachi' ? 'selected' : '' }}>
                                    Dental College, Sir Syed College of Medical Sciences for Girls, Karachi</option>
                                <option
                                    {{ old('institute_name') == 'Dental College, Bahria University Medical & Dental College, Karachi' ? 'selected' : '' }}>
                                    Dental College, Bahria University Medical & Dental College, Karachi</option>
                                <option
                                    {{ old('institute_name') == 'Dental Section, Liaquat College of Medicine & Dentistry, Karachi' ? 'selected' : '' }}>
                                    Dental Section, Liaquat College of Medicine & Dentistry, Karachi</option>
                                <option
                                    {{ old('institute_name') == 'Dental Section, Hamdard College of Medicine & Dentistry, Karachi' ? 'selected' : '' }}>
                                    Dental Section, Hamdard College of Medicine & Dentistry, Karachi</option>
                                <option
                                    {{ old('institute_name') == 'Fatima Jinnah Dental College, Karachi' ? 'selected' : '' }}>
                                    Fatima Jinnah Dental College, Karachi</option>
                                <option {{ old('institute_name') == 'Dental College, Mirpurkhas' ? 'selected' : '' }}>
                                    Dental College, Mirpurkhas</option>
                                <option
                                    {{ old('institute_name') == 'Ziauddin Dental College, Karachi' ? 'selected' : '' }}>
                                    Ziauddin Dental College, Karachi</option>

                                <option {{ old('institute_name') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Registration Type <span style="color:red">*</span></label>
                            <select id="participantType" name="category" required class="form-control"
                                onchange="updateSummary()">
                                <option value="">Select</option>
                                @foreach ($types as $cat)
                                    <option value="{{ $cat['id'] }}" data-label="{{ $cat['name'] }}"
                                        data-price="{{ $cat['price'] }}">
                                        {{ $cat['name'] }} – Rs {{ number_format($cat['price'], 0) }}
                                    </option>
                                @endforeach

                            </select>
                            <div id="typeError" class="error hidden">Please select a registration type.</div>
                        </div>

                        <!--<div class="form-group">-->
                        <!--    <label>Workshop Selection</label>-->
                        <!--    <table>-->
                        <!--        <tr>-->
                        <!--            <th>Select</th>-->
                        <!--            <th>Workshop Name</th>-->
                        <!--            <th>Price</th>-->
                        <!--        </tr>-->
                        <!--        @foreach ($types_shops as $shop)
-->
                        <!--            <tr>-->
                        <!--                <td>-->
                        <!--                    <input type="checkbox" name="workshop_id[]" value="{{ $shop['price'] }}"-->
                        <!--                        class="workshop" data-label="{{ $shop['name'] }}"-->
                        <!--                        data-id="{{ $shop['id'] }}" data-price="{{ $shop['price'] }}">-->
                        <!--                </td>-->
                        <!--                <td>{{ $shop['name'] }}</td>-->
                        <!--                <td>Rs {{ number_format($shop['price'], 0) }}</td>-->
                        <!--            </tr>-->
                        <!--
@endforeach-->


                        <!--    </table>-->
                        <!--</div>-->

                        <div class="form-group">
                            <label>Accompanying Person (Rs. 5,000 each)</label>
                            <select id="accompanyCount" name="accompanying_count" class="form-control"
                                onchange="updateAccompanyFields()">
                                <option value="0">None</option>
                                <option value="1">1 Person</option>
                                <option value="2">2 Persons</option>
                            </select>
                        </div>

                        <div id="accompanyFields"></div>
                        <div class="form-group">
                            <label>Promo Code</label>
                            <input type="text" id="promoCode" name="promoCode" class="form-control"
                                placeholder="Enter Promo Code" onkeyup="updateSummary()">
                            <small id="promoMessage" style="color: green; display: none;"></small>
                        </div>


                        <div class="total-box">
                            <div><strong>Total:</strong> <span id="totalPrice">Rs. 0</span></div>
                            <div class="summary-list" id="summaryList"></div>
                        </div>

                        <div class="buttons">
                            <button type="button" class="btn" onclick="prevStep(1)">Previous</button>
                            <button type="button" class="btn" onclick="validateStep2()">Next</button>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="step-content" id="step3">
                        <h3>Payment Method</h3>
                        <div class="form-group">
                            <label>Payment Method</label>
                            <select id="paymentMethod" name="payment_method" class="form-control"
                                onchange="toggleBankDetails()">
                                <option value="">Select</option>
                                <option value="bank">Bank Transfer</option>
                                {{-- <option value="online">Online</option> --}}
                            </select>
                        </div>
                        <div id="bankDetails" class="hidden">
                            <p><strong>Bank Details</strong><br>
                                Title: Pakistan Dental Association<br>
                                Bank: Bank Alfalah<br>
                                Account No: 02071010305335<br>
                                IBAN: PK09ALFH0207001010305335<br>
                                Branch Code: 0207<br>
                            </p>
                            <div class="form-group"><label>Upload Proof</label><input type="file"
                                    class="form-control" accept="image/*" name="file"></div>
                        </div>
                        <div class="total-box">
                            <div><strong>Total:</strong> <span id="totalPrice2">Rs. 0</span></div>
                            <div class="summary-list" id="summaryList2"></div>
                        </div>
                        <div class="buttons">
                            <button type="button" class="btn" onclick="prevStep(2)">Previous</button>
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>





        </section>
        <!-- end events-about -->





        <!-- start event-newsletter -->
        <section class="event-newsletter section-padding">
            <h2 class="hidden">News letter</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 col-md-offset-2">
                        <p>Subscribe to get the latest updates</p>
                        <form class="form">
                            <div>
                                <input type="text" class="form-control" placeholder="Type your email" required>
                            </div>
                            <div class="submit">
                                <button class="btn events-theme-btn-red">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end event-newsletter -->


        <!-- start footer -->
        <footer class="footer-style-two" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4 col-xs-6">
                        <div class="widget about-widget">
                            <div class="logo"><a href="#"><img
                                        src="/assets/images/events/sponsors/fm_logo.png" style="width: 200px;"
                                        alt="" class="img img-responsive"></a></div>

                            <p class="copyright">2025 &copy; Design and Develop By <a
                                    href="https://fissionmonster.com">Fission
                                    Monster</p>
                            <ul class="social-links">
                                <li><a href="https://www.linkedin.com/company/fissionmonster/?originalSubdomain=pk"><i
                                            class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.facebook.com/fissionmonster"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/fissionmonster/"><i
                                            class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col col-md-4 col-xs-6">
                        <div class="widget contact-widget">
                            <h3>Contact</h3>

                            <ul>
                                <li><span>Email: </span>hello@fissionmonster.com</li>
                                <!--<li><span>Phone: </span>+92 3314547089</li>-->
                            </ul>
                        </div>
                    </div>

                    <div class="col col-md-4 col-xs-6">
                        <div class="widget site-map">
                            <h3>Site map</h3>
                            <ul>
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">Conference</a></li>
                                <li><a href="{{ route('register.page') }}">Register Now</a></li>
                                <li><a href="https://iadsr.edu.pk/conference/">Our Portfolio</a></li>

                            </ul>
                        </div>
                    </div>


                </div> <!-- end row -->
            </div> <!-- end container -->
        </footer>
        <!-- end footer -->
    </div>
    <!-- end of page-wrapper -->


    <!-- All JavaScript files
    ================================================== -->
    <script type="text/javascript" src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="/assets/js/jquery-plugin-collection.js"></script>

    <!-- Google map api -->
    {{-- <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC348vlw53nvT6C8LQ_dxkvsWDb9Kd2mEw"></script> --}}

    <!-- Custom script for this template -->
    <script src="/assets/js/script.js"></script>

    <script>
        document.getElementById('prefix').addEventListener('change', function() {
            // Check if PMDC field already exists
            const existingPMDC = document.getElementById('pmdc_field');

            // Remove if user selects something other than Dr.
            if (existingPMDC) {
                existingPMDC.remove();
            }

            // Add PMDC field only when "Dr." is selected
            if (this.value === 'Dr.') {
                const pmdcDiv = document.createElement('div');
                pmdcDiv.classList.add('form-group');
                pmdcDiv.id = 'pmdc_field';
                pmdcDiv.innerHTML = `
      <label>PMDC NO</label>
      <input type="text" name="registration_no" value="{{ old('registration_no') }}" placeholder="Enter Your PMDC NO"
             class="form-control">
    `;

                // Insert after email field
                const emailField = document.querySelector('input[name="email"]').closest('.form-group');
                emailField.insertAdjacentElement('afterend', pmdcDiv);
            }
        });
    </script>


    <script>
        function showAll(className) {


            if (className == "Conference") {
                $('.Conference').show();
                $('.Workshop').hide();
            } else if (className == "Workshop") {
                $('.Conference').hide();
                $('.Workshop').show();
            } else {
                $('.Conference').show();
                $('.Workshop').show();
            }
        }

        $(function() {
            $("#navbar > ul > li > a:not(.dropdown-toggle)").on("click", function(e) {
                const hash = this.hash;

                // Debug


                // If link has a hash (#section)
                if (hash && hash.length > 1) {
                    e.preventDefault(); // stop default behaviour
                    window.location.href = "https://conference.fissionmonster.com/" + hash;
                } else {
                    window.location.href = "https://conference.fissionmonster.com/quiz/competitions";
                }
                // If no hash → do nothing (open normally)
            });
        });
    </script>
    <script>
        let currentStep = 1;
        const stepIcons = document.querySelectorAll(".stepper .step");

        function updateStepper() {
            for (let i = 1; i <= 3; i++) {
                const step = document.getElementById(`stepIndicator${i}`);
                step.classList.remove("active", "completed");
                if (i < currentStep) step.classList.add("completed");
                if (i === currentStep) step.classList.add("active");
            }
        }

        function nextStep(step) {
            // document.getElementById(`step${currentStep}`).classList.remove("active");
            // document.getElementById(`step${step}`).classList.add("active");
            // currentStep = step;
            // updateStepper();
            // focusFirstField(step);
            document.getElementById(`step${currentStep}`).classList.remove("active");
            document.getElementById(`step${step}`).classList.add("active");
            stepIcons[currentStep - 1].classList.remove("active");
            stepIcons[step - 1].classList.add("active");
            currentStep = step;

            // Focus on first input in next step
            const firstInput = document.querySelector(`#step${step} input, #step${step} select`);
            if (firstInput) firstInput.focus();
        }

        function focusFirstField(step) {
            const stepElement = document.getElementById(`step${step}`);
            const firstField = stepElement.querySelector("input, select, textarea");
            if (firstField) {
                firstField.focus();
            }
        }

        function prevStep(step) {
            // document.getElementById(`step${currentStep}`).classList.remove("active");
            // document.getElementById(`step${step}`).classList.add("active");
            // currentStep = step;
            // updateStepper();
            // focusFirstField(step);

            document.getElementById(`step${currentStep}`).classList.remove("active");
            document.getElementById(`step${step}`).classList.add("active");
            stepIcons[currentStep - 1].classList.remove("active");
            stepIcons[step - 1].classList.add("active");
            currentStep = step;
        }

        function validateStep1() {
            const step1 = document.getElementById("step1");
            const requiredFields = step1.querySelectorAll("input, select");
            let valid = true;
            const emailField = document.getElementById("email");
            const email = emailField.value.trim();

            // Clear previous errors
            step1.querySelectorAll(".error").forEach(e => e.remove());
            requiredFields.forEach(f => f.style.borderColor = "#ccc");

            // intlTelInput instance
            const phoneInput = document.querySelector("#phone");
            const iti = window.intlTelInputGlobals.getInstance(phoneInput);

            // Validate all required fields
            requiredFields.forEach(field => {
                if (field.type === "file" && !field.files.length) {
                    valid = false;
                    showError(field, "Please upload a file.");
                    return;
                }

                if (!field.value.trim()) {
                    valid = false;
                    showError(field, "This field is required.");
                    return;
                }

                if (field.type === "email" && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field.value)) {
                    valid = false;
                    showError(field, "Please enter a valid email address.");
                    return;
                }

                if (field.id === "phone") {
                    if (!iti || !iti.isValidNumber()) {
                        valid = false;
                        showError(field, "Please enter a valid phone number.");
                        return;
                    } else {
                        const nationalNumber = iti
                            .getNumber(intlTelInputUtils.numberFormat.NATIONAL)
                            .replace(/\D/g, "");
                        const finalNumber = nationalNumber.startsWith("0") ?
                            nationalNumber.substring(1) :
                            nationalNumber;
                        field.value = finalNumber;
                        document.querySelector("#phone_full").value =
                            iti.getNumber(intlTelInputUtils.numberFormat.E164);
                    }
                }
            });

            // ✅ Stop immediately if required fields failed
            if (!valid) {
                const firstError = step1.querySelector(".error");
                if (firstError) firstError.previousElementSibling?.focus();
                return;
            }
            //  

            // ✅ Email existence check (async)
            if (email && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                $('#email').css('border-color', '#ccc');

                // Optional: clear previous timer
                if (window.emailCheckTimer) clearTimeout(window.emailCheckTimer);

                window.emailCheckTimer = setTimeout(() => {
                    nextStep(2);
                }, 300);
            } else {
                // No email or invalid email — stop
                showError(emailField, "Please enter a valid email address.");
            }
        }

        // Helper function to display errors
        function showError(field, message) {
            const error = document.createElement("small");
            error.className = "error text-danger";
            error.textContent = message;
            field.style.borderColor = "red";
            field.parentNode.appendChild(error);
        }


        // function validateStep2() {
        //     const participantType = document.getElementById("participantType");
        //     const typeError = document.getElementById("typeError");
        //     const count = parseInt(document.getElementById("accompanyCount").value);
        //     let valid = true;

        //     const step1 = document.getElementById("step2");
        //     const requiredFields = step1.querySelectorAll("input, select");
        //     console.log(requiredFields);


        //     step1.querySelectorAll(".error").forEach(e => e.remove());
        //     requiredFields.forEach(f => f.style.borderColor = "#ccc");

        //     requiredFields.forEach(field => {
        //         if (field.type === "file" && !field.files.length) {
        //             valid = false;
        //             showError(field, "Please upload a file.");
        //         } else if (!field.value.trim()) {
        //             valid = false;
        //             showError(field, "This field is required.");
        //         } else if (field.type === "email" && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field.value)) {
        //             valid = false;
        //             showError(field, "Please enter a valid email address.");
        //         } else if (field.previousElementSibling?.textContent.includes("Contact Number") && !/^\d{10,15}$/
        //             .test(field.value)) {
        //             valid = false;
        //             showError(field, "Enter a valid contact number (10–15 digits).");
        //         }
        //     });


        //     if (count > 0) {
        //         document.querySelectorAll(".accompany-name").forEach((input) => {
        //             if (!input.value.trim()) {
        //                 valid = false;
        //                 input.style.borderColor = "red";
        //             } else {
        //                 input.style.borderColor = "#ccc";
        //             }
        //         });
        //     }

        //     if (valid) nextStep(3);
        //     else step1.querySelector(".error")?.previousElementSibling?.focus();
        // }

        document.addEventListener("DOMContentLoaded", () => {
            const participantType = document.getElementById("participantType");
            const typeError = document.getElementById("typeError");
            const workshops = document.querySelectorAll(".workshop");

            // Toggle Registration Type on workshop change
            workshops.forEach(workshop => {
                workshop.addEventListener("change", () => {
                    const anyChecked = Array.from(workshops).some(w => w.checked);

                    if (anyChecked) {
                        // Disable dropdown when any workshop selected
                        participantType.value = "";
                        participantType.disabled = true;
                        participantType.removeAttribute("required");
                        participantType.style.backgroundColor = "#f5f5f5";
                        participantType.style.borderColor = "#ccc";

                        // ❗Hide only the registration type error, keep others intact
                        if (!typeError.classList.contains("hidden")) {
                            typeError.classList.add("hidden");
                        }
                    } else {
                        // Enable dropdown again when all workshops are unchecked
                        participantType.disabled = false;
                        participantType.setAttribute("required", "required");
                        participantType.style.backgroundColor = "";
                        participantType.style.borderColor = "#ccc";

                        // Show error again if still empty
                        if (!participantType.value.trim()) {
                            typeError.classList.remove("hidden");
                            participantType.style.borderColor = "red";
                        }
                    }
                });
            });
        });


        // ✅ Step 2 Validation Function
        function validateStep2() {
            const step2 = document.getElementById("step2");
            const participantType = document.getElementById("participantType");
            const typeError = document.getElementById("typeError");
            const workshops = document.querySelectorAll(".workshop:checked");
            const count = parseInt(document.getElementById("accompanyCount")?.value || 0);

            let valid = true;

            // 🔹 Reset only Registration Type visuals (don't remove all errors)
            participantType.style.borderColor = "#ccc";
            typeError.classList.add("hidden");

            // 🔹 Registration Type validation
            if (!workshops.length && !participantType.value.trim()) {
                valid = false;
                typeError.classList.remove("hidden");
                participantType.style.borderColor = "red";
            }

            // 🔹 Validate other required fields (keep previous errors)
            const requiredFields = step2.querySelectorAll("input[required], select[required]");
            requiredFields.forEach(field => {
                // 🧠 Skip cases we don’t want to validate
                if (field.id === "participantType") return; // handled above
                if (field.disabled || field.offsetParent === null) return; // skip hidden or disabled

                let fieldValid = true;
                const existingError = field.nextElementSibling?.classList.contains("error");
                const value = (field.value || "").trim();

                // 🧩 Handle file fields separately
                if (field.type === "file") {
                    if (!field.files.length) {
                        fieldValid = false;
                        if (!existingError) showError(field, "Please upload a file.");
                    }
                }
                // 🧩 Required text or select field
                else if (!value.length) {
                    fieldValid = false;
                    if (!existingError) showError(field, "This field is required.");
                }
                // 🧩 Email validation
                else if (field.type === "email" && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                    fieldValid = false;
                    if (!existingError) showError(field, "Please enter a valid email address.");
                }
                // 🧩 Phone number validation (if label or id indicates)
                else if (
                    (field.id.toLowerCase().includes("phone") ||
                        field.previousElementSibling?.textContent.includes("Contact Number")) &&
                    !/^\d{10,15}$/.test(value)
                ) {
                    fieldValid = false;
                    if (!existingError) showError(field, "Enter a valid contact number (10–15 digits).");
                }

                // ✅ Apply visual feedback
                if (!fieldValid) {
                    valid = false;
                    field.style.borderColor = "red";
                } else {
                    field.style.borderColor = "#ccc";
                    if (existingError) field.nextElementSibling.remove(); // remove old error if fixed
                }
            });


            // 🔹 Validate accompanying names
            if (count > 0) {
                document.querySelectorAll(".accompany-name").forEach((input) => {
                    if (!input.value.trim()) {
                        valid = false;
                        input.style.borderColor = "red";
                        const existingError = input.nextElementSibling?.classList.contains("error");
                        if (!existingError) showError(input, "Please enter name for accompanying person.");
                    } else {
                        input.style.borderColor = "#ccc";
                    }
                });
            }

            if (valid) nextStep(3);
            else step2.querySelector(".error")?.previousElementSibling?.focus();
        }



        document.getElementById("registrationForm").addEventListener("submit", function(e) {
            e.preventDefault();

            const paymentMethod = document.getElementById("paymentMethod");
            const bankDetails = document.getElementById("bankDetails");
            let valid = true;

            paymentMethod.style.borderColor = "#ccc";
            bankDetails.querySelectorAll(".error").forEach(e => e.remove());

            if (!paymentMethod.value) {
                valid = false;
                showError(paymentMethod, "Please select a payment method.");
            }

            if (paymentMethod.value === "bank") {
                const proof = bankDetails.querySelector("input[type='file']");
                if (!proof.files.length) {
                    valid = false;
                    showError(proof, "Please upload payment proof.");
                }
            }

            if (valid) {

                this.submit();
                // nextStep(1);
            }
        });

        //       function updateSummary() {
        //     let total = 0;
        //     let summaryHTML = "";

        //     const participantSelect = document.getElementById("participantType");
        //     const selectedOption = participantSelect.options[participantSelect.selectedIndex];
        //     const regPrice = parseInt(selectedOption?.dataset?.price || 0);
        //     const regLabel = selectedOption?.dataset?.label || "";

        //     // Check if any workshop selected
        //     const workshopsChecked = document.querySelectorAll(".workshop:checked");
        //     const hasWorkshop = workshopsChecked.length > 0;

        //     // ✅ Include registration type only if no workshop selected
        //     if (!hasWorkshop && regPrice) {
        //         total += regPrice;
        //         summaryHTML += `<div>Registration Type: <strong>${regLabel}</strong> – Rs. ${regPrice.toLocaleString()}</div>`;
        //     }

        //     // Workshops
        //     workshopsChecked.forEach(ws => {
        //         const wsLabel = ws.dataset.label || "Workshop";
        //         const wsPrice = parseInt(ws.dataset.price || 0);
        //         total += wsPrice;
        //         summaryHTML += `<div>– ${wsLabel} (Rs. ${wsPrice.toLocaleString()})</div>`;
        //     });

        //     // Accompanying persons
        //     const count = parseInt(document.getElementById("accompanyCount")?.value || 0);
        //     if (count > 0) {
        //         const accompanyTotal = count * 5000;
        //         summaryHTML += `<div>Accompanying Persons: ${count} × 5,000 = Rs. ${accompanyTotal.toLocaleString()}</div>`;
        //         total += accompanyTotal;
        //     }

        //     // Update UI
        //     document.getElementById("totalPrice").textContent = `Rs. ${total.toLocaleString()}`;
        //     document.getElementById("totalPrice2").textContent = `Rs. ${total.toLocaleString()}`;
        //     document.getElementById("summaryList").innerHTML = summaryHTML;
        //     document.getElementById("summaryList2").innerHTML = summaryHTML;
        // }

        function updateSummary() {
            let total = 0;
            let summaryHTML = "";

            // Registration fee
            let category = document.getElementById("participantType");
            if (category && category.value) {
                let label = category.options[category.selectedIndex].dataset.label;
                let price = parseInt(category.options[category.selectedIndex].dataset.price);
                total += price;
                summaryHTML += `<div>${label}: Rs ${price}</div>`;
            }

            // Workshops (if enabled)
            document.querySelectorAll(".workshop:checked").forEach(function(el) {
                let price = parseInt(el.dataset.price);
                let label = el.dataset.label;
                total += price;
                summaryHTML += `<div>${label}: Rs ${price}</div>`;
            });

            // Accompanying persons
            let accompanyCount = parseInt(document.getElementById("accompanyCount").value);
            if (accompanyCount > 0) {
                let price = accompanyCount * 5000;
                total += price;
                summaryHTML += `<div>Accompanying Persons: Rs ${price}</div>`;
            }

            // ==== APPLY PROMO CODE DISCOUNT ====
            let promo = document.getElementById("promoCode").value.trim().toUpperCase();
            let discount = 0;

            if (promo === "PADSxPDA10" || promo === "PADSxPDA10".toUpperCase()) {
                discount = total * 0.10; // 10% discount
                total = total - discount;

                document.getElementById("promoMessage").style.display = "block";
                document.getElementById("promoMessage").style.color = "green";
                document.getElementById("promoMessage").innerHTML =
                    `✔ Promo Applied! You saved Rs ${Math.round(discount)}`;

                summaryHTML += `<div style="color:green;">Promo Discount: -Rs ${Math.round(discount)}</div>`;
            } else {
                document.getElementById("promoMessage").style.display = "none";
            }

            // Update totals on both step 2 & step 3
            document.getElementById("summaryList").innerHTML = summaryHTML;
            document.getElementById("summaryList2").innerHTML = summaryHTML;

            document.getElementById("totalPrice").innerHTML = "Rs. " + total;
            document.getElementById("totalPrice2").innerHTML = "Rs. " + total;
        }





        document.querySelectorAll(".workshop").forEach(i => i.addEventListener("change", updateSummary));

        function updateAccompanyFields() {
            const count = document.getElementById("accompanyCount").value;
            const container = document.getElementById("accompanyFields");
            container.innerHTML = "";
            for (let i = 1; i <= count; i++) {
                container.innerHTML += `
          <div class="form-group">
            <label>Accompanying Person ${i} Name <span style="color:red">*</span></label>
            <input type="text" class="form-control accompany-name" name="accompanying_person_${i}" placeholder="Enter name" required />
          </div>`;
            }
            updateSummary();
        }

        function toggleBankDetails() {
            const method = document.getElementById("paymentMethod").value;
            document.getElementById("bankDetails").classList.toggle("hidden", method !== "bank");
        }

        // function validateStep2() {
        //     const participantType = document.getElementById("participantType");
        //     const typeError = document.getElementById("typeError");
        //     let valid = true;
        //     if (!participantType.value) {
        //         typeError.classList.remove("hidden");
        //         valid = false;
        //     } else typeError.classList.add("hidden");
        //     if (valid) nextStep(3);
        // }

        function showError(field, msg) {
            field.style.borderColor = "red";
            const error = document.createElement("div");
            error.classList.add("error");
            error.textContent = msg;
            field.insertAdjacentElement("afterend", error);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (Session::has('success'))
            Swal.fire({
                title: "Good job!",
                text: "Register Successfully Our Team Contact You Shortly",
                icon: "success"
            });
        @endif
        @if (Session::has('error'))
        @endif
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"></script>

    <!-- ✅ Your custom script -->
    //
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const input = document.querySelector("#phone");
            const error = document.querySelector("#phone-error");

            // Double-check the function is loaded before using
            if (typeof window.intlTelInput === "undefined") {
                console.error("intlTelInput not loaded. Check your CDN links.");
                return;
            }

            const iti = window.intlTelInput(input, {
                preferredCountries: ["pk", "ae", "us", "gb", "ca"],
                separateDialCode: true,
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js",
                geoIpLookup: function(callback) {
                    fetch("https://ipapi.co/json")
                        .then(res => res.json())
                        .then(data => callback(data.country_code))
                        .catch(() => callback("pk"));
                }
            });


        });
        // 
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let typingTimer;
        const typingDelay = 800; // delay in ms (0.8s) after user stops typing

        // Debounced email checker

        //   function checkEmailExists(email) {
        //     return new Promise((resolve, reject) => {
        //       $.ajax({
        //         url: `https://pda.atksrv.net:3000/api/verification/check-email?email=${encodeURIComponent(email)}`,
        //         type: 'GET',
        //         dataType: 'json',
        //         success: function (result) {
        //           if (result.success && result.exists === 1) {
        //             resolve(true); // Email exists
        //           } else {
        //             resolve(false); // Email available
        //           }
        //         },
        //         error: function (xhr, status, error) {
        //           console.error('Error checking email:', error);
        //           reject(error);
        //         }
        //       });
        //     });
        //   }
    </script>


</body>

</html>
