<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<title>Conference Dashboard</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Poppins',sans-serif;
    background:#f5f7fb;
    color:#111827;
}

/* =========================
HEADER
========================= */

.top-header{
    background:#020617;
    color:#fff;
    padding:16px 60px;
    display:flex;
    align-items:center;
    justify-content:space-between;
}

.logo{
    font-size:28px;
    font-weight:700;
    color:#d4a017;
}

.nav-links{
    display:flex;
    gap:30px;
}

.nav-links a{
    color:#fff;
    text-decoration:none;
    font-size:14px;
}

.user-profile{
    display:flex;
    align-items:center;
    gap:12px;
}

.avatar{
    width:42px;
    height:42px;
    border-radius:50%;
    background:#2563eb;
}

/* =========================
MAIN WRAPPER
========================= */

.dashboard-wrapper{
    max-width:1400px;
    margin:auto;
    padding:30px 20px;
}

/* =========================
HERO SECTION
========================= */

.hero-banner{
    position:relative;
    height:320px;
    border-radius:24px;
    overflow:hidden;
    margin-bottom:30px;
    background:url('https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=2070&auto=format&fit=crop') center/cover;
}

.hero-overlay{
    position:absolute;
    inset:0;
    background:rgba(0,0,0,0.65);
}

.hero-content{
    position:relative;
    z-index:2;
    height:100%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:50px;
    color:#fff;
}

.hero-left h1{
    font-size:48px;
    margin-bottom:10px;
}

.hero-left span{
    color:#fbbf24;
}

.hero-left p{
    max-width:500px;
    line-height:1.8;
    opacity:.9;
}

.hero-right{
    display:flex;
    flex-direction:column;
    gap:16px;
}

.glass-card{
    background:rgba(255,255,255,0.12);
    border:1px solid rgba(255,255,255,0.2);
    backdrop-filter:blur(10px);
    padding:16px 22px;
    border-radius:16px;
    min-width:260px;
}

/* =========================
BODY GRID
========================= */

.dashboard-grid{
    display:grid;
    grid-template-columns:280px 1fr;
    gap:24px;
}

/* =========================
SIDEBAR
========================= */

.sidebar{
    background:#fff;
    border-radius:24px;
    padding:24px;
    box-shadow:0 4px 20px rgba(0,0,0,0.05);
    height:fit-content;
}

.sidebar ul{
    list-style:none;
}

.sidebar li{
    margin-bottom:14px;
}

.sidebar a{
    display:block;
    text-decoration:none;
    color:#111827;
    padding:14px 18px;
    border-radius:14px;
    transition:.3s;
    font-weight:500;
}

.sidebar a:hover,
.sidebar .active{
    background:#2563eb;
    color:#fff;
}

/* =========================
CONTENT AREA
========================= */

.content-area{
    display:flex;
    flex-direction:column;
    gap:24px;
}

/* =========================
STATUS CARDS
========================= */

.status-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
}

.status-card{
    background:#fff;
    padding:24px;
    border-radius:20px;
    box-shadow:0 4px 20px rgba(0,0,0,0.05);
}

.status-card h3{
    margin-bottom:16px;
}

.status{
    font-size:32px;
    font-weight:700;
    margin-bottom:10px;
}

.red{
    color:#ef4444;
}

.orange{
    color:#f59e0b;
}

.green{
    color:#10b981;
}

.card-btn{
    display:inline-block;
    margin-top:18px;
    padding:12px 20px;
    border-radius:12px;
    text-decoration:none;
    color:#fff;
    background:#2563eb;
    font-size:14px;
}

/* =========================
UPLOAD + CERTIFICATE
========================= */

.upload-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:24px;
}

.box-card{
    background:#fff;
    border-radius:20px;
    padding:24px;
    box-shadow:0 4px 20px rgba(0,0,0,0.05);
}

.upload-box{
    border:2px dashed #cbd5e1;
    border-radius:20px;
    padding:60px 20px;
    text-align:center;
    margin-top:20px;
}

.upload-box button{
    margin-top:20px;
    padding:12px 24px;
    border:none;
    border-radius:12px;
    background:#2563eb;
    color:#fff;
    cursor:pointer;
}

/* =========================
CERTIFICATE
========================= */

.certificate-preview{
    position:relative;
    overflow:hidden;
    border-radius:20px;
    margin-top:20px;
}

.certificate-preview img{
    width:100%;
    display:block;
    filter:blur(3px);
}

.lock-overlay{
    position:absolute;
    inset:0;
    background:rgba(0,0,0,0.45);
    display:flex;
    align-items:center;
    justify-content:center;
    flex-direction:column;
    color:#fff;
    text-align:center;
    padding:20px;
}

.lock-overlay h2{
    margin-bottom:12px;
}

/* =========================
PROGRESS
========================= */

.progress-card{
    background:#fff;
    border-radius:20px;
    padding:24px;
    box-shadow:0 4px 20px rgba(0,0,0,0.05);
}

.progress-steps{
    display:flex;
    justify-content:space-between;
    margin-top:30px;
}

.step{
    text-align:center;
    flex:1;
    position:relative;
}

.circle{
    width:50px;
    height:50px;
    border-radius:50%;
    margin:auto;
    margin-bottom:12px;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#fff;
    font-weight:700;
}

.completed{
    background:#10b981;
}

.pending{
    background:#f59e0b;
}

.locked{
    background:#94a3b8;
}

/* =========================
FOOTER
========================= */

.footer{
    margin-top:50px;
    background:#020617;
    color:#fff;
    padding:40px;
    text-align:center;
}

/* =========================
RESPONSIVE
========================= */

@media(max-width:1100px){

    .status-grid{
        grid-template-columns:1fr;
    }

    .upload-grid{
        grid-template-columns:1fr;
    }

}

@media(max-width:900px){

    .dashboard-grid{
        grid-template-columns:1fr;
    }

    .hero-content{
        flex-direction:column;
        align-items:flex-start;
        justify-content:center;
        gap:30px;
    }

    .hero-banner{
        height:auto;
        padding:40px 0;
    }

}

@media(max-width:768px){

    .top-header{
        padding:16px 20px;
        flex-direction:column;
        gap:20px;
    }

    .nav-links{
        flex-wrap:wrap;
        justify-content:center;
    }

    .hero-left h1{
        font-size:34px;
    }

    .progress-steps{
        flex-direction:column;
        gap:30px;
    }

}

/* =========================
UPDATED HEADER CSS
========================= */

.top-header{
    background:#020617;
    color:#fff;
    padding:18px 60px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    border-bottom:1px solid rgba(255,255,255,0.08);
}

.logo-wrapper{
    display:flex;
    align-items:center;
}

.site-logo{
    width:170px;
    object-fit:contain;
}

.user-profile{
    display:flex;
    align-items:center;
    gap:16px;
}

.notification{
    width:42px;
    height:42px;
    border-radius:50%;
    background:rgba(255,255,255,0.08);
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:18px;
    cursor:pointer;
}

.avatar{
    width:48px;
    height:48px;
    border-radius:50%;
    background:#2563eb;
    border:2px solid #fff;
}

.user-info{
    display:flex;
    flex-direction:column;
}

.user-info strong{
    font-size:15px;
    font-weight:600;
}

.user-info span{
    font-size:12px;
    opacity:.7;
}

/* MOBILE */

@media(max-width:768px){

    .top-header{
        padding:16px 20px;
    }

    .site-logo{
        width:130px;
    }

    .user-info span{
        display:none;
    }

}

/* =========================
HEADER RIGHT
========================= */

.header-right{
    display:flex;
    align-items:center;
    gap:18px;
}

/* =========================
LOGOUT BUTTON
========================= */

.logout-btn{
    background:#ef4444;
    color:#fff;
    text-decoration:none;
    padding:12px 20px;
    border-radius:12px;
    font-size:14px;
    font-weight:600;
    transition:.3s;
    border:1px solid transparent;
}

.logout-btn:hover{
    background:transparent;
    border:1px solid #ef4444;
    color:#ef4444;
}

/* MOBILE */

@media(max-width:768px){

    .header-right{
        gap:10px;
    }

    .logout-btn{
        padding:10px 14px;
        font-size:12px;
    }

}

</style>
</head>

<body>

<!-- HEADER -->

<!-- REPLACE YOUR HEADER WITH THIS -->

<!-- UPDATED HEADER -->

<header class="top-header">

    <div class="logo-wrapper">

        <img 
            src="https://conference.fissionmonster.com/final_logo.png" 
            alt="FACE Congress Logo"
            class="site-logo"
        >

    </div>

    <div class="header-right">

        <div class="notification">
            🔔
        </div>

        <div class="user-profile">

            <div class="avatar"></div>

            <div class="user-info">
                <strong>{{ $user->name }}</strong>
                <span>REG-ID: FC-2026-1024</span>
            </div>

        </div>

        <a href="{{ route('user.logout') }}" class="logout-btn">
            Logout
        </a>

    </div>

</header>

<!-- MAIN -->

<div class="dashboard-wrapper">

    <!-- HERO -->

    <section class="hero-banner">

        <div class="hero-overlay"></div>

        <div class="hero-content">

            <div class="hero-left">

                <h1>
                    Welcome Back, <br>
                    <span>{{ $user->name }} 👋</span>
                </h1>

                <p>
                    Manage your registration, payment and download your conference certificate from your personal dashboard.
                </p>

            </div>

            <div class="hero-right">

                <div class="glass-card">
                    📅 May 15 - 16, 2026
                </div>

                <div class="glass-card">
                    📍 Lahore, Pakistan
                </div>

                <div class="glass-card">
                    🎤 Face By Surgeons 2026
                </div>

            </div>

        </div>

    </section>

    <!-- GRID -->

    <div class="dashboard-grid">

        <!-- SIDEBAR -->

        <aside class="sidebar">

    <ul>

        <li>
            <a href="{{ route('user.dashboard') }}" 
               class="{{ request()->routeIs('user.dashboard') ? 'active' : '' }}">
                Dashboard
            </a>
        </li>

        <li>
            <a href="{{ route('my.registration') }}"
               class="{{ request()->routeIs('my.registration') ? 'active' : '' }}">
                My Registration
            </a>
        </li>

        <li>
            <a href="{{ route('payment.status') }}"
               class="{{ request()->routeIs('payment.status') ? 'active' : '' }}">
                Payment Status
            </a>
        </li>

        <li>
            <a href="{{ route('upload.receipt') }}"
               class="{{ request()->routeIs('upload.receipt') ? 'active' : '' }}">
                Upload Receipt
            </a>
        </li>

        <li>
            <a href="{{ route('certificate') }}"
               class="{{ request()->routeIs('certificate') ? 'active' : '' }}">
                Certificate
            </a>
        </li>

        <li>
            <a href="{{ route('profile') }}"
               class="{{ request()->routeIs('profile') ? 'active' : '' }}">
                Profile
            </a>
        </li>

        <li>
            <a href="{{ route('support') }}"
               class="{{ request()->routeIs('support') ? 'active' : '' }}">
                Support
            </a>
        </li>

       

    </ul>

</aside>

        <!-- CONTENT -->

        <main class="content-area">

          @yield('content')

        </main>

    </div>

</div>

<!-- FOOTER -->

<footer class="footer">

    <h3>
        FACE Congress Pakistan 2026
    </h3>

    <p style="margin-top:10px;">
        © 2026 Design & Developed By Fission Monster
    </p>

</footer>

</body>
</html>