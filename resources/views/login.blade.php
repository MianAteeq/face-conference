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

<style>



/* =========================
BACKGROUND
========================= */

.login-background{
    position:fixed;
    inset:0;
    background:
    linear-gradient(rgba(2,6,23,.82), rgba(2,6,23,.92)),
    url('https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=2070&auto=format&fit=crop');
    background-size:cover;
    background-position:center;
}

/* =========================
LOGIN WRAPPER
========================= */

.login-wrapper{
    position:relative;
    z-index:2;
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:20px;
}

/* =========================
LOGIN CARD
========================= */

.login-card{
    width:100%;
    max-width:460px;
    background:rgba(255,255,255,0.08);
    border:1px solid rgba(255,255,255,0.12);
    backdrop-filter:blur(18px);
    border-radius:28px;
    padding:45px;
    box-shadow:0 10px 40px rgba(0,0,0,0.4);
}

/* =========================
LOGO
========================= */

.logo-area{
    text-align:center;
    margin-bottom:35px;
}

.logo-area img{
    width:180px;
    margin-bottom:20px;
}

.logo-area h1{
    color:black;
    font-size:30px;
    margin-bottom:10px;
}

.logo-area p{
    color:rgba(255,255,255,0.7);
    line-height:1.7;
    font-size:14px;
}

/* =========================
FORM
========================= */

.form-group{
    margin-bottom:22px;
}

.form-group label{
    display:block;
    color:black;
    margin-bottom:10px;
    font-size:14px;
    font-weight:500;
}

.form-control{
    width:100%;
    height:58px;
    border:none;
    outline:none;
    border-radius:14px;
    padding:0 18px;
    background:black;
    color:white;
    font-size:15px;
    border:1px solid rgba(255,255,255,0.08);
}

.form-control::placeholder{
    color:rgba(255,255,255,0.45);
}

/* =========================
OPTIONS
========================= */

.form-options{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:28px;
}

.remember{
    display:flex;
    align-items:center;
    gap:10px;
    color:black;
    font-size:14px;
}

.forgot-link{
    color:#fbbf24;
    text-decoration:none;
    font-size:14px;
}

/* =========================
BUTTON
========================= */

.login-btn{
    width:100%;
    height:58px;
    border:none;
    border-radius:14px;
    background:linear-gradient(135deg,#2563eb,#1d4ed8);
    color:white;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    transition:.3s;
}

.login-btn:hover{
    transform:translateY(-2px);
    box-shadow:0 10px 20px rgba(37,99,235,.35);
}

/* =========================
BOTTOM
========================= */

.bottom-text{
    margin-top:28px;
    text-align:center;
    color:rgba(255,255,255,0.7);
    font-size:14px;
}

.bottom-text a{
    color:#fbbf24;
    text-decoration:none;
    font-weight:600;
}

/* =========================
FOOTER
========================= */

.footer-note{
    margin-top:35px;
    text-align:center;
    color:rgba(255,255,255,0.4);
    font-size:12px;
}

/* =========================
RESPONSIVE
========================= */

@media(max-width:600px){

    .login-card{
        padding:35px 24px;
    }

    .logo-area img{
        width:150px;
    }

    .logo-area h1{
        font-size:24px;
    }

    .form-options{
        flex-direction:column;
        gap:14px;
        align-items:flex-start;
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


       



        <!-- start pricing-->
        <section class="pricing event-pricing section-padding">
        
                <section class="charity-gallery">
                    <div class="login-wrapper">

    <div class="login-card">

        <!-- LOGO -->

        <div class="logo-area">

           

            <h1>Welcome Back 👋</h1>

            <p>
                Access your conference dashboard, payment status and certificate portal.
            </p>

        </div>

        <!-- FORM -->

        <form method="POST" action="{{ route('user.login.submit') }}">

            @csrf

            <div class="form-group">

                <label>Email Address</label>

                <input 
                    type="email"
                    class="form-control"
                    name="email"
                    value="{{old('email')}}"
                    placeholder="Enter your email"
                >

            </div>

            <div class="form-group">

                <label>Password</label>

                <input 
                    type="password"
                    class="form-control"
                    name="password"
                    placeholder="Enter your password"
                >

            </div>

            <!-- OPTIONS -->

            <div class="form-options">

                <div class="remember">

                    <input type="checkbox">

                    <span>Remember Me</span>

                </div>

              

            </div>

            <!-- BUTTON -->

            <button class="login-btn">
                Login to Dashboard
            </button>

        </form>

        <!-- BOTTOM -->

      

                   
                </section>

              

                <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end pricing-->

       

      




      





    

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
