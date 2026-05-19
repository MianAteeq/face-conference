@extends('user-panel.master')

@section('content')

<style>

/* =========================================
PAGE HEADER
========================================= */

.page-header{
    margin-bottom:30px;
}

.page-title{
    font-size:34px;
    font-weight:700;
    color:#0f172a;
    margin-bottom:10px;
}

.page-subtitle{
    color:#64748b;
    font-size:15px;
}

/* =========================================
PROFILE GRID
========================================= */

.profile-grid{
    display:grid;
    grid-template-columns:340px 1fr;
    gap:24px;
}

/* =========================================
CARDS
========================================= */

.profile-card,
.profile-info-card{
    background:#fff;
    border-radius:24px;
    padding:30px;
    box-shadow:0 4px 25px rgba(0,0,0,0.05);
}

/* =========================================
PROFILE SIDEBAR
========================================= */

.profile-sidebar{
    text-align:center;
}

.profile-avatar{
    width:140px;
    height:140px;
    border-radius:50%;
    overflow:hidden;
    margin:auto;
    margin-bottom:22px;
    border:5px solid #f1f5f9;
}

.profile-avatar img{
    width:100%;
    height:100%;
    object-fit:cover;
}

.profile-name{
    font-size:28px;
    font-weight:700;
    color:#0f172a;
    margin-bottom:10px;
}

.profile-role{
    display:inline-block;
    padding:10px 18px;
    border-radius:50px;
    background:#dbeafe;
    color:#1d4ed8;
    font-size:13px;
    font-weight:600;
    margin-bottom:25px;
}

.profile-status{
    background:#f8fafc;
    padding:20px;
    border-radius:18px;
    margin-top:25px;
}

.profile-status h4{
    margin-bottom:12px;
    color:#0f172a;
}

.status-badge{
    display:inline-block;
    padding:10px 16px;
    border-radius:50px;
    font-size:13px;
    font-weight:600;
}

.status-approved{
    background:#dcfce7;
    color:#166534;
}

.status-pending{
    background:#fef3c7;
    color:#92400e;
}

/* =========================================
INFO CARD
========================================= */

.profile-info-card h2{
    font-size:30px;
    margin-bottom:30px;
    color:#0f172a;
}

/* =========================================
INFO GRID
========================================= */

.info-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:22px;
}

.info-box{
    background:#f8fafc;
    padding:22px;
    border-radius:18px;
}

.info-label{
    display:block;
    color:#64748b;
    font-size:13px;
    margin-bottom:10px;
}

.info-value{
    color:#0f172a;
    font-size:17px;
    font-weight:600;
    word-break:break-word;
}

/* =========================================
ABOUT
========================================= */

.about-section{
    margin-top:30px;
    background:#f8fafc;
    padding:25px;
    border-radius:20px;
}

.about-section h3{
    margin-bottom:16px;
    color:#0f172a;
}

.about-section p{
    line-height:1.9;
    color:#475569;
}

/* =========================================
BUTTONS
========================================= */

.profile-actions{
    margin-top:30px;
    display:flex;
    gap:16px;
    flex-wrap:wrap;
}

.edit-btn,
.password-btn{
    padding:14px 24px;
    border-radius:14px;
    text-decoration:none;
    font-weight:600;
    transition:.3s;
}

.edit-btn{
    background:#2563eb;
    color:#fff;
}

.password-btn{
    background:#0f172a;
    color:#fff;
}

.edit-btn:hover,
.password-btn:hover{
    transform:translateY(-2px);
}

/* =========================================
RESPONSIVE
========================================= */

@media(max-width:1100px){

    .profile-grid{
        grid-template-columns:1fr;
    }

}

@media(max-width:768px){

    .info-grid{
        grid-template-columns:1fr;
    }

    .profile-card,
    .profile-info-card{
        padding:22px;
    }

    .page-title{
        font-size:28px;
    }

    .profile-info-card h2{
        font-size:24px;
    }

}

</style>

{{-- =========================================
PAGE HEADER
========================================= --}}

<div class="page-header">

    <h1 class="page-title">
        My Profile
    </h1>

    <p class="page-subtitle">
        Manage your conference profile and registration information.
    </p>

</div>

{{-- =========================================
PROFILE GRID
========================================= --}}

<div class="profile-grid">

    {{-- =====================================
    LEFT SIDE
    ===================================== --}}

    <div class="profile-card profile-sidebar">

        {{-- PROFILE IMAGE --}}

        <div class="profile-avatar">

            <img 
                src="{{ asset($conference->profile_pic) }}"
                alt="Profile Picture"
            >

        </div>

        {{-- NAME --}}

        <h2 class="profile-name">
            {{ $conference->prefix }} {{ $conference->name }}
        </h2>

        {{-- CATEGORY --}}

        <div class="profile-role">
            {{ $conference->cat->name ?? 'Conference Participant' }}
        </div>

        {{-- STATUS --}}

        <div class="profile-status">

            <h4>
                Registration Status
            </h4>

            @if($conference->status == 'APPROVE')

                <div class="status-badge status-approved">
                    APPROVED
                </div>

            @else

                <div class="status-badge status-pending">
                    PENDING
                </div>

            @endif

        </div>

    </div>

    {{-- =====================================
    RIGHT SIDE
    ===================================== --}}

    <div class="profile-info-card">

        <h2>
            Profile Information
        </h2>

        {{-- INFO GRID --}}

        <div class="info-grid">

            <div class="info-box">

                <span class="info-label">
                    Full Name
                </span>

                <div class="info-value">
                    {{ $conference->prefix }} {{ $conference->name }}
                </div>

            </div>

            <div class="info-box">

                <span class="info-label">
                    Email Address
                </span>

                <div class="info-value">
                    {{ $conference->email }}
                </div>

            </div>

            <div class="info-box">

                <span class="info-label">
                    Phone Number
                </span>

                <div class="info-value">
                    {{ $conference->phone_number }}
                </div>

            </div>

            <div class="info-box">

                <span class="info-label">
                    Registration Number
                </span>

                <div class="info-value">
                    {{ $conference->registration_no }}
                </div>

            </div>

            <div class="info-box">

                <span class="info-label">
                    Institution
                </span>

                <div class="info-value">
                    {{ $conference->institution }}
                </div>

            </div>

            <div class="info-box">

                <span class="info-label">
                    Qualifications
                </span>

                <div class="info-value">
                    {{ $conference->qualifications }}
                </div>

            </div>

            <div class="info-box">

                <span class="info-label">
                    City
                </span>

                <div class="info-value">
                    {{ $conference->city }}
                </div>

            </div>

            <div class="info-box">

                <span class="info-label">
                    Age Group
                </span>

                <div class="info-value">
                    {{ $conference->age_group }}
                </div>

            </div>

        </div>

        {{-- ABOUT SECTION --}}

        @if($conference->describe_you)

            <div class="about-section">

                <h3>
                    About Participant
                </h3>

                <p>
                    {{ $conference->describe_you }}
                </p>

            </div>

        @endif

        {{-- BUTTONS --}}

        <div class="profile-actions" >

            <a href="{{ route('profile.edit') }}" class="edit-btn">
                Edit Profile
            </a>

            

        </div>

    </div>

</div>

@endsection