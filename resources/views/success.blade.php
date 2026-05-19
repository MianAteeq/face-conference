<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
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
    .navbar-brand>img{
        width:230px!important;
    }
}
@media (min-width: 1200px) {
    .container {
        width: 1200px;
    }
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
                        <a class="navbar-brand" href="#"><img src="https://conference.fissionmonster.com/final_logo.png" alt
                                class="img img-responsive" style="width: 200px;"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="current"><a href="{{ route('home.page') }}#home">Home</a></li>
                            <li><a href="{{ route('home.page') }}#about">About</a></li>
                            <li><a href="{{ route('home.page') }}#speakers">Speakers</a></li>
                            <li><a href="{{ route('home.page') }}#schedules">Schedules</a></li>
                            <li><a href="{{ route('home.page') }}#ticket">Register</a></li>
                            <li><a href="{{ route('quiz.page') }}">Quiz Competition</a></li>
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
                   <img src="https://conference.fissionmonster.com/logo_white.png" alt="" class="img img-responsive" style="text-align: center;margin: 0 auto;width: 50%;">
            </div>
        </section>
        <!-- end of hero -->


        <!-- start events-about -->
       <section class="events-about section-padding" id="registration-success" style="padding-top:20px;">

    @if(session('success') && session('user'))
        @php
            $user = session('user');
        @endphp

        <div class="registration-success" 
             style="max-width:850px;margin:50px auto;padding:40px;background:#ffffff;
                    border-radius:14px;box-shadow:0 8px 25px rgba(0,0,0,0.08);">

            <!-- Header -->
            <div style="text-align:center;margin-bottom:30px;">
                <div style="width:70px;height:70px;margin:0 auto 15px;
                            background:#004aad;color:white;border-radius:50%;
                            display:flex;align-items:center;justify-content:center;
                            font-size:32px;">
                    <i class="fa fa-check"></i>
                </div>
                <h2 style="color:#004aad;font-weight:700;margin-bottom:5px;">
                    {{ session('success') }}
                </h2>
                <p style="color:#555;font-size:15px;">
                    Thank you for registering for the PDA International Conference 2025
                </p>
            </div>

            <!-- Registration Summary -->
            <div class="registration-summary" style="background:#f7f9ff;padding:25px;border-radius:10px;">
                <h3 style="color:#004aad;font-size:18px;margin-bottom:20px;
                           border-left:5px solid #004aad;padding-left:10px;">
                    Registration Details
                </h3>

                <table style="width:100%;border-collapse:collapse;font-size:15px;color:#333;">
                    <!--<tr>-->
                    <!--    <td style="padding:10px 8px;"><strong>Registration No:</strong></td>-->
                    <!--    <td style="padding:10px 8px;">{{ $user['registration_no'] ?? 'Pending' }}</td>-->
                    <!--</tr>-->
                    <tr>
                        <td style="padding:10px 8px;"><strong>Name:</strong></td>
                        <td style="padding:10px 8px;">{{ $user['name'] ?? '-' }} </td>
                    </tr>
                    <tr>
                        <td style="padding:10px 8px;"><strong>Email:</strong></td>
                        <td style="padding:10px 8px;">{{ $user['email'] ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td style="padding:10px 8px;"><strong>Phone:</strong></td>
                        <td style="padding:10px 8px;">{{ $user['phone'] ?? '-' }}</td>
                    </tr>

                    {{-- Registered Workshop or Category --}}
                    <tr>
                        <td style="padding:10px 8px;"><strong>Registered For:</strong></td>
                        <td style="padding:10px 8px;">
                            @if(!empty($user['workshops']) && count($user['workshops']) > 0)
                                <ul style="padding-left:15px;margin:0;">
                                    @foreach($user['workshops'] as $workshop)
                                        <li>{{ $workshop['work']['name'] ?? '' }}</li>
                                    @endforeach
                                </ul>
                            @elseif(!empty($user['cat']['name']))
                                {{ $user['cat']['name'] }}
                            @else
                                N/A
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:10px 8px;"><strong>Payment Method:</strong></td>
                        <td style="padding:10px 8px;">{{ $user['payment_method'] ?? 'Bank Transfer' }}</td>
                    </tr>
                </table>

                {{-- Payment Screenshot --}}
                @if(!empty($user['images']) && count($user['images']) > 0)
                    <div style="margin-top:25px;">
                        <strong style="display:block;margin-bottom:10px;">Payment Screenshot:</strong>
                        @foreach($user['images'] as $image)
                            <img src="{{ URL::to($image['image']) }}" 
                                 alt="Payment Screenshot" 
                                 style="width:100%;max-width:400px;border-radius:10px;
                                        border:1px solid #ccc;margin-bottom:10px;">
                        @endforeach
                    </div>
                @endif
            </div>

            <!-- Note -->
            <div style="background:#fff3cd;color:#856404;padding:15px;margin-top:20px;
                        border-radius:10px;font-size:14px;">
                <strong>Note:</strong> Your registration is currently under verification.
                You will receive a confirmation email once it is approved by the conference team.
            </div>

            <!-- Button -->
            <div style="text-align:center;margin-top:35px;">
                <a href="{{ route('home.page') }}" 
                   style="background:#004aad;color:#fff;padding:12px 30px;
                          border-radius:8px;text-decoration:none;font-weight:500;
                          transition:background 0.3s ease;">
                    <i class="fa fa-home" style="margin-right:8px;"></i> Back to Home
                </a>
            </div>
        </div>
    @endif

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
                            <div class="logo"><a href="#"><img src="/assets/images/events/sponsors/fm_logo.png" style="width: 200px;" alt="" class="img img-responsive"></a></div>
                            
                            <p class="copyright">2025 &copy; Design and Develop By <a href="https://fissionmonster.com">Fission
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
                                <li><span>Phone: </span>+92 3314547089</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col col-md-4 col-xs-6">
                        <div class="widget site-map">
                            <h3>Site map</h3>
                            <ul>
                                <li><a  href="#home">Home</a></li>
                                <li><a  href="#about">Conference</a></li>
                                <li><a  href="{{ route('register.page') }}">Register Now</a></li>
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
        <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="/assets/js/jquery-plugin-collection.js"></script>

    <!-- Google map api -->
    {{-- <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC348vlw53nvT6C8LQ_dxkvsWDb9Kd2mEw"></script> --}}

    <!-- Custom script for this template -->
    <script src="/assets/js/script.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const successDiv = document.getElementById("registration-success");
    if (successDiv) {
        successDiv.scrollIntoView({ behavior: "smooth", block: "center" });
        successDiv.focus();
    }
});

 $(function() {
            $("#navbar > ul > li > a:not(.dropdown-toggle)").on("click", function() {

                console.log('clicked', this.hostname, this.hash);
                window.location.href = "https://conference.fissionmonster.com/" + this.hash;
            });
        });
</script>

 
</body>

</html>
