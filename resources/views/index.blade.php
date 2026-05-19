<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
  @include('layouts.head', [
    'meta_title' => 'Face by Surgeons 2026 (FACEICON) – International Facial Harmony Symposium',
    'meta_description' => 'Join FACEICON 2026, an international symposium on facial harmony, reconstruction, aesthetic medicine & laser innovation. 15–16 May 2026. Register now.'
])
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
        padding: 6px;
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

    @media (min-width: 1200px) {
        .container {
            width: 1200px;
        }
    }

    .event-schedules .tab-list li {
        width: 24.33%;
        float: left;
        padding-right: 16px;
    }

    .event-schedules .tab-list li span {
        text-transform: uppercase;
        color: #000;
        font-size: 14px;
    }

    .section-padding {
        padding: 70px 0;
    }
  /* Center the Navigation Menu */
    @media (min-width: 768px) {
        .events-header .navbar-collapse {
            text-align: center;
        }
        .events-header .navbar-nav {
            display: inline-block;
            float: none;
            vertical-align: top;
        }
        .events-header .navbar-nav > li {
            float: left;
        }
    }

    /* Move Hero Content Upwards */
    .hero-title {
        position: relative;
        top: -60px; /* Adjust this value (e.g., -80px) to move it higher or lower */
    }

    /* Spacing for the logo under social links */
    .hero-logo-container {
        margin-top: 25px;
        text-align: center;
    }
  .partner-card {
        background-color: #ffffff;
        width: 100%;
        max-width: 280px; 
        height: 160px; 
        margin: 0 auto;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(255, 255, 255, 0.1); 
        display: flex; 
        align-items: center;
        justify-content: center;
        padding: 15px; /* Reduced from 25px to give logos more room */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-decoration: none; 
    }

    .partner-card:hover {
        transform: translateY(-5px); 
        box-shadow: 0 8px 20px rgba(255, 255, 255, 0.2);
    }

    .partner-logo {
        max-width: 100%;
        max-height: 120px; /* Increased to allow slightly taller logos */
        width: auto;
        height: auto;
        object-fit: contain; 
    }

    /* Target specific logos that need a size boost inside their card */
    .scale-logo {
        transform: scale(2.2); /* Increased from 1.4 to 2.2 to zoom in much more */
        max-height: 140px; /* Gives it a little more room to stretch inside the card */
    }
  @media(max-width: 430px){
  .section-padding {
    padding: 95px 0 !important;
    }}

    /* =========================================================
   URGENCY BANNER BASE STYLES (Applies to Desktop & Tablet)
   Ensure this is NOT inside an @media query!
========================================================= */

/* Banner Base Styles */
.events-section-title .pricing-urgency-banner {
    display: inline-flex !important;
    align-items: center;
    justify-content: center;
    background-color: #ffffff !important;
    border-left: none;
    border-top: 5px solid #e74c3c !important; 
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08) !important;
    border-radius: 6px;
    padding: 16px 24px !important;
    margin: 0 auto 30px auto !important; /* Auto margins keep it centered */
    width: 92%; /* <--- THIS creates the gap on the left and right edges */
    max-width: 650px;
    text-align: left;
}

.events-section-title .banner-icon {
    color: #e74c3c !important;
    margin-right: 20px !important;
    display: flex;
    align-items: center;
}

/* Forces the SVG stroke to be red */
.events-section-title .banner-icon svg {
    stroke: #e74c3c !important; 
}

.events-section-title .banner-content {
    display: flex;
    flex-direction: column;
}

.events-section-title .banner-title {
    color: #4a5a75 !important;
    font-size: 16px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 4px;
    display: block;
}

.events-section-title .banner-text {
    color: #555555 !important;
    font-size: 15px;
    line-height: 1.5;
    display: block;
}

.events-section-title .highlight-fee {
    color: #e74c3c !important;
    font-weight: 600;
}
  /* Forces the title and banner to stack vertically on desktop */
.events-section-title {
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    width: 100%;
}

.events-section-title h2 {
    width: 100%;
    text-align: center;
    margin-bottom: 25px; 
}
    /* =========================================================
   URGENCY BANNER MOBILE STYLES
========================================================= */
@media (max-width: 768px) {
    .events-section-title .pricing-urgency-banner {
        flex-direction: column !important;
        text-align: center !important;
        padding: 20px 15px !important;
        border-left: none !important; 
        border-top: 5px solid #e74c3c !important; 
        width: 90% !important; /* Ensures gap on mobile edges */
        margin: 0 auto 35px auto !important; /* Forces center alignment */
    }
  .events-section-title {
        margin-left: 0 !important;
        margin-right: 0 !important;
        padding-left: 15px !important;
        padding-right: 15px !important;
        box-sizing: border-box !important;
    }
    
    .events-section-title .banner-icon {
        margin-right: 0 !important;
        margin-bottom: 12px !important;
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
                        
                        <a class="navbar-brand" href="#home">
                            <img src="https://conference.fissionmonster.com/final_logo.png" alt="FACEICON Logo" class="img img-responsive" style="max-width: 120px; margin-top: -10px;">
                        </a>
                    </div>
                    
                    <div id="navbar" class="navbar-collapse collapse navbar-right">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="current"><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#schedules">Schedules</a></li>
                            <li><a href="#ticket">Register</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div></div></nav>
        </header>
        <!-- end of header -->


        <!-- start of hero -->
        <section class="hero parallax events-hero" data-bg-image="/assets/images/events/hero-bg.jpg">
            <div class="hero-title">
                <span>May 15 - 16 .  Lahore 2026</span>
                <h1>Face By Surgeons</h1>
                
                <ul class="social-links">
                    <li><a href="https://www.facebook.com/PALDPAKISTAN"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/pakacademyoflaser/"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=923363365111"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
                
                <div class="hero-logo-container">
                    <a href="#">
                        <img src="https://conference.fissionmonster.com/final_logo.png" alt="FACEICON Logo" class="img img-responsive" style="width: 210px; height: 180px; margin: 0 auto;">
                    </a>
                </div>
                
            </div>
        </section>
        <!-- end of hero -->


        <!-- start events-about -->
        <section class="events-about section-padding" id="about">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-10 col-lg-offset-1">
                        <div class="row">
                            <div class="col col-md-5 left-col">
                                <div class="img-holder">
                                    <img src="/assets/images/events/about.jpg" alt class="img img-responsive">

                                    <div class="date">
                                        <span>15-16</span> May '2026
                                    </div>
                                </div>
                            </div>

                            <div class="col col-md-7 right-col">
                                <div class="title">
                                    <span>Face Congress presents</span>
                                    <h2>Face By Surgeons 2026</h2>
                                </div>
                                <div class="details" style="height: 86px;">
                                    <p>
                                        Join Pakistan’s leading facial and dental surgery conference, <strong>Face by Surgeons 2026</strong>, taking place in 
                                      <strong>Lahore</strong> on  <strong>15–16 May 2026</strong>.
									Be part of an exceptional gathering of professionals dedicated to advancing surgical excellence.
									Connect with experts and peers shaping the future of <strong>facial and dental surgery</strong>.
                                    </p>
                                    <p>
                                        Discover the latest innovations and technologies transforming <strong>modern surgical practice</strong> — all under one platform.
                                    </p>
                                    <div class="btns">
                                        <a href="{{ route('register.page') }}" class="btn events-theme-btn-red">Register
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end events-about -->


        <!-- start event-speakers -->
        <section class="event-speakers section-padding" id="speakers" style="display:none">
            <div class="container">
                <div class="row events-section-title">
                    <h2>Conference speakers</h2>
                </div> <!-- end section-title -->

                <div class="row">
                    {{-- <div class="col col-md-5 left-col">
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/assets/images/events/speakers/img-1.jpg" alt class="img img-responsive">
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Badar Khushnood</h3>
                                <span>Keynote speaker</span>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col col-md-12 right-col">
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/DR-HAMAD.png" style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        alt class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>DR. HAMAD N. AL-BAGEAH</h3>
                                <span>Differential Diagnosis in Orofacial Pain: A Patient
                                    Centered Approach</span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/Dr-tariq.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Tariq Ali Khan </h3>
                                <span>A Paradigm Shift in Implant Dentistry: From Osseointegration to Mucointegration
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/Dr-Kashif.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Kashif Hafeez </h3>
                                <span>Digital guided implant placement: A contemporary stand in for conventional free
                                    hand technique
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/Dr-irfan.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Irfan Maqbool </h3>
                                <span>Clinical Insights into Anatomical Variations of Second Molars: A Case-Based
                                    Discussion
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/DrKashifIkram.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Kashif Ikram </h3>
                                <span>Body–Mouth Connection: Correlation Between Periodontitis and Systemic Health
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/Dr.SamiyaRiaz.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Samiya Riaz </h3>
                                <span>The Smart side of Forensic dentistry
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/Dr.ShahidMehmood.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Shahid Mehmood </h3>
                                <span>An overview of endodontics for general practitioners
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/Dr.ArshadHassan.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Arshad Hassan </h3>
                                <span>Separated file removal: Myths and Misconceptions
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/Dr.RubabSherazi.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Rubab Sherazi </h3>
                                <span>Controversies in Endodontics
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/Dr.ArshadMalik.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Arshad Malik </h3>
                                <span>Latest methods of BDRs removal: A guideline for General Dental Practitioners
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/Dr.NoeenArshad.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Noeen Arshad </h3>
                                <span>Pediatric dentistry 30 years on! The journey continues
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/ProfGhulamRasool.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Ghulam Rasool </h3>
                                <span>Interceptive Orthodontics
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/Dr.RashidHabib.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr Rashid Habib </h3>
                                <span>Performance and Promise of Contemporary Dental
                                    Ceramics: Are We Meeting Patients’ Aesthetic and
                                    Functional Demands?
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/Dr.SalmanAshraf.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Salman Ashraf </h3>
                                <span>Contemporary Bonded Restorations
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/Dr.AmbrinaQurreshi.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Ambrina Qureshi </h3>
                                <span>Oral Health Care for Marginalized Communities
                                    Pathways to Sustainability
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/Dr.Waqas.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Waqas J. Malik </h3>
                                <span>The Future of Dentistry: Evidence-Based Laser Applications for Everyday Practice
                                </span>
                            </div>
                        </div>
                     
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/Dr.AffanSaggir.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Affan Saghir </h3>
                                <span>Align Brighten Contour (ABC) Smile Makeover –
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/DrQuratulainZafar.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Quratulain Zafar </h3>
                                <span>What comes first: teeth or face? An interdisciplinary approach
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/Dr.MohammadAzeem.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. M. Azeem </h3>
                                <span>Stability or surprise; the dual face of fixed retainers
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/Dr.MiraatAnser.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Miraat Anser </h3>
                                <span>Pulpotomy; Roadmap to Success
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/DrMohsinChaudhry.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Mohsin Chaudhry </h3>
                                <span>Pathways to UK; Changes in training and Curriculum
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/DrMunirAhmad.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Munir Ahmed </h3>
                                <span>How to Become a Licensed Dentist in Canada – The Fastest and Most Cost-Effective
                                    Path
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/Dr.BeenishQamar.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Beenish Qamar </h3>
                                <span>From Operating Room to Executive Office: The Evolving Role of the Clinician Leader
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/DrSaroojHannan.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Sarooj Hanan </h3>
                                <span>Running a Dental Practice; A Female CEO’s Perspective
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/DrRashidMehmood.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Rashid Mehmood </h3>
                                <span>General Dental Practitioners in Comprehensive Patient Care; Are you Ready
                                </span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/Dr.SyedMFaizan.png" alt
                                        style="height: 219px;margin: 0 auto; object-fit: contain;"
                                        class="img img-responsive">
                                </div>
                                {{-- <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="details" style="height: 86px;">
                                <h3>Dr. Syed Faizan </h3>
                                <span>Beyond technical excellence
                                </span>
                            </div>
                        </div>

                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end event-speakers -->


        <!-- start event-schedules -->
        <section class="event-schedules section-padding" id="schedules" style="display:none;">
            <div class="container">


                <div class="row section-title-s2">
                    <h2 style="text-align: justify;line-height: 1.5;">Scientific Programs</h2>
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <a class="form row" style="text-align: center;" target="_blank"
                            href="https://conference.fissionmonster.com/PDA2025ScientificProgram.pdf">
                            <div class="col col-sm-12 submit-col">
                                <span class="btn events-theme-btn-red">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                    Download Program
                                </span>
                            </div>
                        </a>

                        <div class="event-schedules-content" style="display:none;">
                            <ul class="tab-list">
                                <li class="active">
                                    <a href="#tab-pre" data-toggle="tab">
                                        <span>Pre-Conference Plenary </span>
                                        <h4>Dec 21</h4>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="#tab-1" data-toggle="tab">
                                        <span>Day 01</span>
                                        <h4>Dec 26</h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab-2" data-toggle="tab">
                                        <span>Day 02</span>
                                        <h4>Dec 27</h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab-3" data-toggle="tab">
                                        <span>Day 03</span>
                                        <h4>Dec 28</h4>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content" style="display:none;">

                                <!-- ========================================================= -->
                                <!-- ====================  DAY 1 — DEC 26  ==================== -->
                                <!-- ========================================================= -->

                                <div class="tab-pane fade in active" id="tab-pre">
                                    <div class="event">
                                        <div class="sidebar">
                                            <ul>
                                                <li>
                                                    <span class="icon"><i class="fa fa-clock-o"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>Time</li>
                                                            <li>11:00 - 13:00</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="icon"><i class="fa fa-map-marker"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>Location</li>
                                                            <li>Expo Center</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="event-details">
                                            <h3>Pre-Conference Plenary</h3>

                                            <ul class="talk-list">

                                                <li>
                                                    <strong>Complications of Fixed Prosthodontics</strong><br>
                                                    <span class="speaker">Dr. Mohsin Ali</span><br>
                                                    <span class="time">11:00 – 11:30</span>
                                                </li>



                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade in " id="tab-1">

                                    <!-- Opening Plenary -->
                                    <div class="event">
                                        <div class="sidebar">
                                            <ul>
                                                <li><span class="icon"><i class="fa fa-clock-o"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>Time</li>
                                                            <li>14:30 - 16:00</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><span class="icon"><i class="fa fa-map-marker"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>Location</li>
                                                            <li>Hall A</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="event-details">
                                            <h3>Conference Opening Plenary</h3>
                                            <ul class="talk-list">
                                                <li>
                                                    <strong>Opening Session</strong><br>
                                                    <span class="speaker">Dr. Mohsin Chaudhry</span>
                                                </li>
                                                <li>
                                                    <strong>Differential Diagnosis in Orofacial Pain: A Patient-Centered
                                                        Approach</strong><br>
                                                    <span class="speaker">Dr. Hamad Al Balgeah</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Opening Ceremony -->
                                    <div class="event">
                                        <div class="sidebar">
                                            <ul>
                                                <li><span class="icon"><i class="fa fa-clock-o"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>Time</li>
                                                            <li>16:00 - 17:00</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><span class="icon"><i class="fa fa-map-marker"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>Location</li>
                                                            <li>Hall A</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="event-details">
                                            <h3>Opening Ceremony</h3>
                                        </div>
                                    </div>

                                </div>

                                <!-- ========================================================= -->
                                <!-- ====================  DAY 2 — DEC 27  ==================== -->
                                <!-- ========================================================= -->

                                <div class="tab-pane fade" id="tab-2">

                                    <!-- Hall A — General Dentistry I -->
                                    <div class="event">
                                        <div class="sidebar">
                                            <ul>
                                                <li><span class="icon"><i class="fa fa-clock-o"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>Time</li>
                                                            <li>10:00 - 12:00</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><span class="icon"><i class="fa fa-map-marker"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>Location</li>
                                                            <li>Hall A</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="event-details">
                                            <h3>General Dentistry Session I</h3>
                                            <ul class="talk-list">
                                                <li><strong>An overview of endodontics for general
                                                        practitioners</strong><br><span class="speaker">Dr. Shahid
                                                        Mehmood</span></li>
                                                <li><strong>Managing endodontic emergencies</strong><br><span
                                                        class="speaker">Dr. Rubab Sherazi</span></li>
                                                <li><strong>Latest methods of BDRs removal</strong><br><span
                                                        class="speaker">Dr. Arshad Malik</span></li>
                                                <li><strong>Separated file removal — Myths &
                                                        Misconceptions</strong><br><span class="speaker">Dr. Arshad
                                                        Hassan</span></li>
                                                <li><strong>Anatomical Variations of Second Molars</strong><br><span
                                                        class="speaker">Dr. Irfan Maqbool</span></li>
                                                <li><strong>Digital Guided Implant Placement</strong><br><span
                                                        class="speaker">Dr. Kashif Hafeez</span></li>
                                                <li><strong>Body–Mouth Connection: Periodontitis & Systemic
                                                        Health</strong><br><span class="speaker">Dr. Kashif
                                                        Ikram</span></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Hall A — General Dentistry II -->
                                    <div class="event">
                                        <div class="sidebar">
                                            <ul>
                                                <li><span class="icon"><i class="fa fa-clock-o"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>Time</li>
                                                            <li>12:00 - 13:00</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><span class="icon"><i class="fa fa-map-marker"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>Location</li>
                                                            <li>Hall A</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="event-details">
                                            <h3>General Dentistry Session II</h3>
                                            <ul class="talk-list">
                                                <li><strong>Digital era in paediatric dentistry</strong><br><span
                                                        class="speaker">Dr. Miraat Anser</span></li>
                                                <li><strong>Pediatric dentistry — 30 years on</strong><br><span
                                                        class="speaker">Dr. Noeen Arshad</span></li>
                                                <li><strong>Contemporary Bonded Restorations</strong><br><span
                                                        class="speaker">Dr. Salman Ashraf</span></li>
                                                <li><strong>Dental Ceramics — Aesthetic & Functional
                                                        Demands</strong><br><span class="speaker">Dr. Rashid
                                                        Habib</span></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Lunch -->
                                    <div class="event">
                                        <div class="sidebar">
                                            <ul>
                                                <li><span class="icon"><i class="fa fa-clock-o"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>13:00 - 14:00</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><span class="icon"><i class="fa fa-map-marker"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>Expo Center</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="event-details">
                                            <h3>Lunch & Prayer Break</h3>
                                        </div>
                                    </div>

                                    <!-- Hall A — General Dentistry III -->
                                    <div class="event">
                                        <div class="sidebar">
                                            <ul>
                                                <li><span class="icon"><i class="fa fa-clock-o"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>14:00 - 17:00</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><span class="icon"><i class="fa fa-map-marker"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>Hall A</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="event-details">
                                            <h3>General Dentistry Session III</h3>
                                            <ul class="talk-list">
                                                <li><strong>Maxillofacial Surgery — Lessons from Each
                                                        Fall</strong><br><span class="speaker">Dr. Jawad Kundi</span>
                                                </li>
                                                <li><strong>Lecture</strong><br><span class="speaker">Ghulam
                                                        Rasool</span></li>
                                                <li><strong>Lecture</strong><br><span class="speaker">Irfan
                                                        Qureshi</span></li>
                                                <li><strong>Lecture</strong><br><span class="speaker">Tariq Ali
                                                        Khan</span></li>
                                                <li><strong>Retainers & Inadvertent Movements</strong><br><span
                                                        class="speaker">Dr. M. Azeem</span></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <!-- ========================================================= -->
                                <!-- ====================  DAY 3 — DEC 28  ==================== -->
                                <!-- ========================================================= -->

                                <div class="tab-pane fade" id="tab-3">

                                    <!-- Hall A — General Dentistry III -->
                                    <div class="event">
                                        <div class="sidebar">
                                            <ul>
                                                <li><span class="icon"><i class="fa fa-clock-o"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>10:00 - 12:00</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><span class="icon"><i class="fa fa-map-marker"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>Hall A</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="event-details">
                                            <h3>General Dentistry Session III</h3>
                                            <ul class="talk-list">
                                                <li><strong>Oral Health Care for Marginalized
                                                        Communities</strong><br><span class="speaker">Dr. Ambrina
                                                        Qureshi</span></li>
                                                <li><strong>The Smart Side of Forensic Dentistry</strong><br><span
                                                        class="speaker">Dr. Samiya Riaz</span></li>
                                                <li><strong>Laser Dentistry in Everyday Practice</strong><br><span
                                                        class="speaker">Dr. Waqas J. Malik</span></li>
                                                <li><strong>ABC Smile Makeover</strong><br><span class="speaker">Dr.
                                                        Affan Saghir</span></li>
                                                <li><strong>The Role of GDPs in Patient Care</strong><br><span
                                                        class="speaker">Dr. Rashid Mehmood</span></li>
                                                <li><strong>Running a Dental Practice</strong><br><span
                                                        class="speaker">Dr. Sarooj Hanan</span></li>
                                                <li><strong>Digital Marketing for Dental Professionals</strong><br><span
                                                        class="speaker">Badar Khushnood</span></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Hall B — Student Session I (Oral Presentations) -->
                                    <div class="event">
                                        <div class="sidebar">
                                            <ul>
                                                <li><span class="icon"><i class="fa fa-clock-o"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>10:00 - 11:00</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><span class="icon"><i class="fa fa-map-marker"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>Hall B</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="event-details">
                                            <h3>Student Session I – Oral Presentations</h3>
                                            <ul class="talk-list">
                                                <li><strong>Oral Presentation 1</strong><br><span
                                                        class="speaker">Student Speaker</span></li>
                                                <li><strong>Oral Presentation 2</strong><br><span
                                                        class="speaker">Student Speaker</span></li>
                                                <li><strong>Oral Presentation 3</strong><br><span
                                                        class="speaker">Student Speaker</span></li>
                                                <li><strong>Oral Presentation 4</strong><br><span
                                                        class="speaker">Student Speaker</span></li>
                                                <li><strong>Oral Presentation 5</strong><br><span
                                                        class="speaker">Student Speaker</span></li>
                                                <li><strong>Oral Presentation 6</strong><br><span
                                                        class="speaker">Student Speaker</span></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Hall B — Operative Dentistry & Endodontics -->
                                    <div class="event">
                                        <div class="sidebar">
                                            <ul>
                                                <li><span class="icon"><i class="fa fa-clock-o"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>11:00 - 13:00</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><span class="icon"><i class="fa fa-map-marker"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>Hall B</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="event-details">
                                            <h3>Specialty Session V – Operative Dentistry & Endodontics</h3>
                                            <ul class="talk-list">
                                                <li><strong>Microscope Visualization & CBCT in Maxillary Molar
                                                        Management</strong><br><span class="speaker">Dr. Usman S.
                                                        Fazli</span></li>
                                                <li><strong>Mobile Dental Photography, Composites &
                                                        Marketing</strong><br><span class="speaker">Dr. Jazib
                                                        Memon</span></li>
                                                <li><strong>Innovations in Operative Dentistry &
                                                        Endodontics</strong><br><span class="speaker">Dr. Fariha
                                                        Naz</span></li>
                                                <li><strong>Navigating Iatrogenic Errors</strong><br><span
                                                        class="speaker">Dr. Asfand Ali Khan</span></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Lunch -->
                                    <div class="event">
                                        <div class="sidebar">
                                            <ul>
                                                <li><span class="icon"><i class="fa fa-clock-o"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>13:00 - 14:00</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><span class="icon"><i class="fa fa-map-marker"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>Expo Center</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="event-details">
                                            <h3>Lunch & Prayer Break</h3>
                                        </div>
                                    </div>

                                    <!-- UG Quiz -->
                                    <div class="event">
                                        <div class="sidebar">
                                            <ul>
                                                <li><span class="icon"><i class="fa fa-clock-o"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>14:00 - 15:30</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><span class="icon"><i class="fa fa-map-marker"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>Hall A</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="event-details">
                                            <h3>UG Quiz Competition (Final Round)</h3>
                                        </div>
                                    </div>

                                    <!-- Closing Ceremony -->
                                    <div class="event">
                                        <div class="sidebar">
                                            <ul>
                                                <li><span class="icon"><i class="fa fa-clock-o"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>15:30 - 17:00</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><span class="icon"><i class="fa fa-map-marker"></i></span>
                                                    <div class="info">
                                                        <ul>
                                                            <li>Hall A</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="event-details">
                                            <h3>Award Distribution & Closing Ceremony</h3>
                                        </div>
                                    </div>

                                </div>

                            </div>



                            <!-- end tab-content -->
                        </div> <!-- end event-schedules-content -->
                    </div>
                </div>
            </div>
        </section>



        <!-- start pricing-->
        <section class="pricing event-pricing section-padding">
            <div class="container">
         <div class="row events-section-title text-center">
    <h2>Our Registration Pricing</h2>
    
    <div class="pricing-urgency-banner">
        <div class="banner-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
            </svg>
        </div>
        <div class="banner-content">
            <span class="banner-title">Early Bird Registration Deadline:<strong> 7th April 2026</strong> </span>
            <span class="banner-text">The Registration Charges will be <span class="highlight-fee">increased by 10% </span> after <strong>7th April 2026</strong>.</span>
        </div>
    </div>
</div>
                <section class="charity-gallery">

                    <div class="gallery-filters">
                        <ul>
                            <!--<li><a onclick="showAll('')" href="#" class="current">All</a></li>-->
                            <li><a onclick="showAll('Conference')" class="current" href="#">Conference</a></li>
                            <!--<li><a onclick="showAll('Workshop')" href="#">Workshop</a></li>-->

                        </ul>
                    </div>
                </section>

                <div class="row ">
                    @foreach ($types as $type)
                        
                        <div class="col col-md-4 col-sm-6 content Conference" style="margin-top:10px">
                            <div class="pricing-grid wow fadeInLeftSlow" data-wow-delay="0.3s">
                                <div class="pricing-header">
                                    <h3>{{ $type['name'] }}</h3>
                                    <span>{{ $type['price'] }}</span>
                                </div>
                                <div class="pricing-details">
                                    {{-- <ul>
                                    <li><i class="fa fa-check"></i> perspiciatis unde omnis iste</li>
                                    <li><i class="fa fa-check"></i> natus error sit volupta</li>
                                    <li><i class="fa fa-check"></i> accusantium dolorem laud</li>
                                    <li><i class="fa fa-close"></i> antium totam rem aper</li>
                                    <li><i class="fa fa-close"></i> aque ipsa quae</li>
                                </ul> --}}
                                </div>

                                <a href="{{ route('register.page') }}" class="btn theme-btn">Register Now</a>
                            </div>
                        </div>
                    @endforeach



                </div>
                <div class="row content" style="margin-top: 23px;" style="display:none;">

                    <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
                        <div class="pricing-grid">
                            <div class="pricing-header">
                                <h3>Advanced Periodontology</h3>
                                <!--<span>Coming Soon</span>-->
                            </div>
                            <div class="pricing-details">
                                <ul>
                                    <li><i class="fa fa-check"></i> Digital flow in implantology</li>
                                    <li><i class="fa fa-check"></i> AI in dentistry</li>
                                    <li><i class="fa fa-check"></i> Endo related</li>
                                    <li><i class="fa fa-check"></i> Veneers made simple</li>
                                    <li><i class="fa fa-check"></i> Open your practice</li>
                                    <li><i class="fa fa-check"></i> Venue: Karachi & Hyderabad</li>
                                    <li><i class="fa fa-check"></i> Contact: Prof. Navid Rashid Qureshi</li>
                                </ul>
                            </div>
                            <a href="#" class="btn theme-btn">Register Now</a>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
                        <div class="pricing-grid">
                            <div class="pricing-header">
                                <h3>Separated Instrument - My Greatest Fear!</h3>
                                <!--<span>Coming Soon</span>-->
                            </div>
                            <div class="pricing-details">
                                <ul>
                                    <li><i class="fa fa-check"></i> Presenter: Dr. Asfand Ali Khan</li>
                                    <li><i class="fa fa-check"></i> Venue: Islamabad</li>
                                    <li><i class="fa fa-check"></i> Contact: Dr. Asfand</li>
                                </ul>
                            </div>
                            <a href="#" class="btn theme-btn">Register Now</a>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
                        <div class="pricing-grid">
                            <div class="pricing-header">
                                <h3>Comprehensive Dental Implantology</h3>
                                <!--<span>Hands-on</span>-->
                            </div>
                            <div class="pricing-details">
                                <ul>
                                    <li><i class="fa fa-check"></i> Facilitators: Prof. Arshad Mahmood Malik, Prof.
                                        Khalid Siddiqi, Prof. Tayyaba Saleem, Dr. Umer Farooq</li>
                                    <li><i class="fa fa-check"></i> Venue: Islamabad</li>
                                    <li><i class="fa fa-check"></i> Contact: Khalid.Siddiqi@iideas.edu.pk, 0334-8172005
                                    </li>
                                </ul>
                            </div>
                            <a href="#" class="btn theme-btn">Register Now</a>
                        </div>
                    </div>




                </div>

                <div class="row content" style="margin-top: 23px;">
                    <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
                        <div class="pricing-grid">
                            <div class="pricing-header">
                                <h3>Instrument Retrieval Made Easy</h3>
                                <!--<span>Post Conference</span>-->
                            </div>
                            <div class="pricing-details">
                                <ul>
                                    <li><i class="fa fa-check"></i> Facilitator: Prof. Arshad Hassan</li>
                                    <li><i class="fa fa-check"></i> Venue: Karachi</li>
                                    <li><i class="fa fa-check"></i> Date: 6th January 2026 | 9 AM – 3 PM</li>
                                </ul>
                            </div>
                            <a href="#" class="btn theme-btn">Register Now</a>
                        </div>
                    </div>

                    <!-- 5 -->
                    <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
                        <div class="pricing-grid">
                            <div class="pricing-header">
                                <h3>Facial Aesthetics & Modern Cosmetic Dentistry</h3>
                                <!--<span>Coming Soon</span>-->
                            </div>
                            <div class="pricing-details">
                                <ul>
                                    <li><i class="fa fa-check"></i> Facilitator: Dr. Quratulain Zafar + IADSR</li>
                                    <li><i class="fa fa-check"></i> Venue: Islamabad & Lahore</li>
                                </ul>
                            </div>
                            <a href="#" class="btn theme-btn">Register Now</a>
                        </div>
                    </div>

                    <!-- 6 -->
                    <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
                        <div class="pricing-grid">
                            <div class="pricing-header">
                                <h3>Pout & Pearls Masterclass</h3>
                                <!--<span>Hands-on</span>-->
                            </div>
                            <div class="pricing-details">
                                <ul>
                                    <li><i class="fa fa-check"></i> Veneers, Lip Flip, Gummy Smile Botox</li>
                                    <li><i class="fa fa-check"></i> Facilitators: Saima Razzaq, Rubab Sherazi, Anam
                                        Fayyaz, Kaneeze Zainab</li>
                                    <li><i class="fa fa-check"></i> Venue: LMDC Lahore</li>
                                    <li><i class="fa fa-check"></i> Contact: 0333-4479820</li>
                                    <li><i class="fa fa-check"></i> Date: 24th December | 9 AM – 3 PM</li>
                                </ul>
                            </div>
                            <a href="#" class="btn theme-btn">Register Now</a>
                        </div>
                    </div>

                </div>

                <div class="row content" style="margin-top: 23px;">
                    <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
                        <div class="pricing-grid">
                            <div class="pricing-header">
                                <h3>Nitrous Oxide Sedation in Dentistry</h3>
                                <!--<span>5–6 Hours</span>-->
                            </div>
                            <div class="pricing-details">
                                <ul>
                                    <li><i class="fa fa-check"></i> Facilitators: Dr. Miraat Anser, Dr. Arham Chauhan
                                    </li>
                                    <li><i class="fa fa-check"></i> Venue: Lahore</li>
                                </ul>
                            </div>
                            <a href="#" class="btn theme-btn">Register Now</a>
                        </div>
                    </div>

                    <!-- 8 -->
                    <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
                        <div class="pricing-grid">
                            <div class="pricing-header">
                                <h3>Evidence-Based Laser Applications</h3>
                                <!--<span>Coming Soon</span>-->
                            </div>
                            <div class="pricing-details">
                                <ul>
                                    <li><i class="fa fa-check"></i> Facilitator: Dr. Waqas Javied Malik</li>
                                    <li><i class="fa fa-check"></i> Venue: Islamabad</li>
                                </ul>
                            </div>
                            <a href="#" class="btn theme-btn">Register Now</a>
                        </div>
                    </div>

                    <!-- 9 -->
                    <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
                        <div class="pricing-grid">
                            <div class="pricing-header">
                                <h3>Digital Marketing Strategy 101</h3>
                                <!--<span>2 Hours</span>-->
                            </div>
                            <div class="pricing-details">
                                <ul>
                                    <li><i class="fa fa-check"></i> Facilitator: Badar Khushnood</li>
                                    <li><i class="fa fa-check"></i> Venue: Lahore + IADSR</li>
                                    <li><i class="fa fa-check"></i> Date: 25th December</li>
                                </ul>
                            </div>
                            <a href="#" class="btn theme-btn">Register Now</a>
                        </div>
                    </div>


                </div>

                <div class="row content" style="margin-top: 23px;">
                    <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
                        <div class="pricing-grid">
                            <div class="pricing-header">
                                <h3>Mastering Crown Preparation</h3>
                                <!--<span>Full Day</span>-->
                            </div>
                            <div class="pricing-details">
                                <ul>
                                    <li><i class="fa fa-check"></i> Facilitator: Dr. Syed Rashid Habib</li>
                                    <li><i class="fa fa-check"></i> Venue: DHA Lahore</li>
                                    <li><i class="fa fa-check"></i> Date: 25th December | 9 AM – 5 PM</li>
                                </ul>
                            </div>
                            <a href="#" class="btn theme-btn">Register Now</a>
                        </div>
                    </div>

                    <!-- 11 -->
                    <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
                        <div class="pricing-grid">
                            <div class="pricing-header">
                                <h3>Troubleshooting in Endodontics</h3>
                                <!--<span>Post Conference</span>-->
                            </div>
                            <div class="pricing-details">
                                <ul>
                                    <li><i class="fa fa-check"></i> Facilitator: Dr. Irfan Maqbool</li>
                                    <li><i class="fa fa-check"></i> Venue: DHA Lahore</li>
                                    <li><i class="fa fa-check"></i> Date: 10–11 January | 9 AM – 5 PM</li>
                                </ul>
                            </div>
                            <a href="#" class="btn theme-btn">Register Now</a>
                        </div>
                    </div>

                </div>

                <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end pricing-->

       

      



        <!-- start event-booking -->
        <section class="event-booking section-padding" id="ticket">
            <div class="container">
                <div class="row events-section-title">
                    <h2>Reserve your Spot</h2>
                </div> <!-- end section-title -->

                <div class="row">
                    <div class="col col-xs-12">
                        <form class="form row" action="{{ route('register.page') }}" method="get">

                            <div class="col col-sm-12 submit-col">
                                <button type="submit" class="btn events-theme-btn-red">Register now</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end event-booking -->


        <!-- start charity-gallery -->
        <section class="charity-gallery events-gallery section-padding" id="gallery">
            <h2 class="hidden">Gallery</h2>
            <div class="row events-section-title">
                <h2>Conference gallery</h2>
            </div> <!-- end section-title -->

            <div class="row">
                <div class="col col-lg-12">
                    <div class="gallery-filters">
                        <ul>
                            <!--<li><a data-filter="*" href="#" class="current">All</a></li>-->
                            <!--<li><a data-filter=".2015" href="#">2015</a></li>-->
                            <!--<li><a data-filter=".2017" href="#">2017</a></li>-->
                            <!--<li><a data-filter=".2018" href="#">2018</a></li>-->
                            <!--<li><a data-filter=".2024" href="#">2024</a></li>-->
                        </ul>
                    </div>


                    <div class="gallery-container popup-gallery">
                        <div class="box branding">
                            <a href="/assets/images/events/gallery/1.png">
                                <div class="img-holder">
                                    <img src="/assets/images/events/gallery/1.png" alt
                                        class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box photography">
                            <a href="/assets/images/events/gallery/2.png">
                                <div class="img-holder">
                                    <img src="/assets/images/events/gallery/2.png" alt
                                        class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box photography">
                            <a href="/assets/images/events/gallery/3.png">
                                <div class="img-holder">
                                    <img src="/assets/images/events/gallery/3.png" alt
                                        class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box branding others web">
                            <a href="/assets/images/events/gallery/4.png">
                                <div class="img-holder">
                                    <img src="/assets/images/events/gallery/4.png" alt
                                        class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box branding web">
                            <a href="/assets/images/events/gallery/5.png">
                                <div class="img-holder">
                                    <img src="/assets/images/events/gallery/5.png" alt
                                        class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box branding web">
                            <a href="/assets/images/events/gallery/6.png">
                                <div class="img-holder">
                                    <img src="/assets/images/events/gallery/6.png" alt
                                        class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box web">
                            <a href="/assets/images/events/gallery/7.png">
                                <div class="img-holder">
                                    <img src="/assets/images/events/gallery/7.png" alt
                                        class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box branding web">
                            <a href="/assets/images/events/gallery/8.png">
                                <div class="img-holder">
                                    <img src="/assets/images/events/gallery/8.png" alt
                                        class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </section>
        <!-- end charity-gallery -->





        <!-- start event-sponsors -->
      
        <div class="mt-4" style="margin-top: 20px;">

        </div>
        <section class="event-spnosors section-padding" style="display:none;">
            <div class="container">
                <div class="row events-section-title">
                    <h2>Our Collaborator</h2>
                </div> <!-- end section-title -->

                <div class="row sponsors">
                    <div class="col col-xs-12">
                        
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/4.png" alt
                                    class="img img-responsive"></a>
                        </div>
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/5.png" alt
                                    class="img responsive"></a>
                        </div>
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/8.png" alt
                                    class="img img-responsive"></a>
                        </div>
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/1.png" alt
                                    class="img img-responsive"></a>
                        </div>
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/6.png" alt
                                    class="img img-responsive"></a>
                        </div>



                    </div>
                </div>
                <div class="row sponsors" style="margin-top: 20px;">
                    <div class="col col-xs-12">
                        {{-- <h3>Platinum Sponsors:</h3> --}}


                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/3.png" alt
                                    class="img img-responsive"></a>
                        </div>
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/7.png" alt
                                    class="img responsive"></a>
                        </div>

                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/9.png" alt
                                    class="img img-responsive"></a>
                        </div>

                    </div>

                </div> <!-- end row -->
                {{-- <div class="row sponsors gold-sponsors">
                    <div class="col col-xs-12">
                        <h3>Gold Sponsors:</h3>
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/img-6.png" alt
                                    class="img img-responsive"></a>
                        </div>
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/img-7.png" alt
                                    class="img img-responsive"></a>
                        </div>
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/img-8.png" alt
                                    class="img img-responsive"></a>
                        </div>
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/img-9.png" alt
                                    class="img img-responsive"></a>
                        </div>
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/img-10.png" alt
                                    class="img img-responsive"></a>
                        </div>
                    </div>
                </div> <!-- end row --> --}}
            </div> <!-- end container -->
        </section>
        <!-- end event-sponsors -->
        <div class="mt-4" style="margin-top: 20px;">

        </div>
        <section class="event-spnosors section-padding">
    <div class="container my-5">
        <div class="row events-section-title text-center mb-5">
            <div class="col-12">
                <h2 class="fw-bold" style="color: #fff;">Our Partners</h2>
            </div>
        </div>

        <div class="row sponsors text-center justify-content-center">
            
            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <a href="#" class="partner-card">
                    <img src="/Iadsr.png" alt="Academic Partner" class="img-fluid partner-logo">
                </a>
            </div>

           <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <a href="#" class="partner-card">
                    <img src="/paams.png" alt="Marketing Partner" class="img-fluid partner-logo scale-logo">
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <a href="#" class="partner-card">
                    <img src="/pald.png" alt="Media Partner" class="img-fluid partner-logo">
                </a>
            </div>
            
        </div>
    </div>
    </section>

        <!-- start event-location -->
        <section class="event-contact" id="contact">
            <h2 class="hidden">Contact info</h2>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.5375674660313!2d74.30551767469599!3d31.50939234768595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391903813b22b751%3A0xd29757f183b47318!2sSheikh%20Zayed%20Hospital%20Khayaban-e-Jamia%20Punjab%2C%20Block%20D%20Muslim%20Town%2C%20Lahore%2C%20Pakistan!5e0!3m2!1sen!2s!4v1772693735411!5m2!1sen!2s" 
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="container">
                <div class="row contact-address section-padding">
                    <h2 style="text-align: center; margin: 36px;">Contact Information</h2>

                    <div class="col col-md-4">
                        <ul class="contact-info">

                            <li><i class="fa fa-phone"></i> +92 336 3365111</li>
                          	<li><i class="fa fa-phone"></i> +92 3355699908</li>
                            <li><i class="fa fa-envelope"></i>marketing@iadsr.edu.pk</li>
                        </ul>
                    </div>
                    <div class="col col-md-8">
                        <div id="contact-success" class="alert alert-success" style="display:none;">
                            Thank you! Your message has been sent.
                        </div>
                        <form id="contactForm" class="form row">
                            <div class="col col-md-6">
                                <input type="text" name="first_name" class="form-control"
                                    placeholder="First name.." required>
                            </div>
                            <div class="col col-md-6">
                                <input type="text" name="last_name" class="form-control"
                                    placeholder="Last name.." required>
                            </div>
                            <div class="col col-md-6">
                                <input type="email" name="email" class="form-control"
                                    placeholder="Email address.." required>
                            </div>
                            <div class="col col-md-6">
                                <input type="text" name="phone" class="form-control" placeholder="Phone.."
                                    required>
                            </div>
                            <div class="col col-md-12">
                                <textarea name="message" class="form-control" placeholder="Write.." required></textarea>
                            </div>
                            <div class="col col-md-12 submit">
                                <button type="submit" class="btn events-theme-btn-red">Submit</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </section>

        <div class="mt-4" style="margin-top: 20px;">

        </div>






        <!-- start footer -->
        <!--<footer class="event-footer">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col col-xs-12">-->
        <!--                <div class="logo">-->
        <!--                    <img src="/assets/images/events/sponsors/fm_logo.png" style="width: 200px;" alt>-->
        <!--                </div>-->
        <!--                <div class="copyright">-->
        <!--                    <p>2025 &copy; Design and Develop By <a href="https://fissionmonster.com">Fission-->
        <!--                            Monster</a></p>-->
        <!--                </div>-->
        <!--                <div>-->
        <!--                    <ul class="social-links">-->
        <!--                        <li><a href="https://www.linkedin.com/company/fissionmonster/?originalSubdomain=pk"><i-->
        <!--                                    class="fa fa-linkedin"></i></a></li>-->
        <!--                        <li><a href="https://www.facebook.com/fissionmonster"><i-->
        <!--                                    class="fa fa-facebook"></i></a></li>-->
        <!--                        <li><a href="https://www.instagram.com/fissionmonster/"><i-->
        <!--                                    class="fa fa-instagram"></i></a></li>-->
        <!--                        {{-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
        <!--                        <li><a href="#"><i class="fa fa-behance"></i></a></li> --}}-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div> <!-- end container -->-->
        <!--</footer>-->

        <section class="event-newsletter section-padding">
            <h2 class="hidden">Newsletter</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 col-md-offset-2">
                        <p>Subscribe to get the latest update</p>

                        {{-- Show success or error messages --}}
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <form class="form" method="POST" action="{{ route('subscribe.store') }}">
                            @csrf
                            <div>
                                <input type="email" class="form-control" placeholder="Type your email" required
                                    name="email">
                            </div>
                            <div class="submit mt-2" style="margin-top: 20px;float: left;">
                                <button class="btn events-theme-btn-red" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer-style-two" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4 col-xs-6">
                        <div class="widget about-widget">
                            <div class="logo"><a href="#"><img
                                        src="/assets/images/events/sponsors/fm_logo.png" style="width: 200px;"
                                        alt="" class="img img-responsive"></a></div>

                            <p class="copyright">2026 &copy; Design and Develop By <a
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
    <!--<script src="/assets/js/jquery.min.js"></script>-->
    <script type="text/javascript" src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="/assets/js/jquery-plugin-collection.js"></script>

    <!-- Google map api -->
    {{-- <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC348vlw53nvT6C8LQ_dxkvsWDb9Kd2mEw"></script> --}}

    <!-- Custom script for this template -->
    <script src="/assets/js/script.js"></script>

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
        @if (Session::has('message'))
            Swal.fire({
                title: "Good job!",
                text: "Thank you for subscribing!",
                icon: "success"
            });
        @endif
        @if (Session::has('error'))
        @endif
    </script>

    <script>
        // document.getElementById("contactForm").addEventListener("submit", function(e) {
        //     e.preventDefault();

        //     fetch("{{ route('contact.submit') }}", {
        //         method: "POST",
        //         headers: {
        //             "X-CSRF-TOKEN": "{{ csrf_token() }}",
        //         },
        //         body: new FormData(this)
        //     })
        //     .then(res => res.ok ? res.text() : Promise.reject(res))
        //     .then(() => {
        //         document.getElementById("contact-success").style.display = "block";
        //         document.getElementById("contact-success").scrollIntoView({ behavior: "smooth", block: "center" });
        //         this.reset();
        //         setTimeout(() => document.getElementById("contact-success").style.display = "none", 5000);
        //     })
        //     .catch(() => alert("Something went wrong! Please try again."));
        // });
    </script>
</body>

</html>
