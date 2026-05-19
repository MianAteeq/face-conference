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
GRID
========================================= */

.registration-grid{
    display:grid;
    grid-template-columns:1.6fr .8fr;
    gap:24px;
}

/* =========================================
CARDS
========================================= */

.registration-card,
.registration-side-card{
    background:#fff;
    border-radius:24px;
    padding:30px;
    box-shadow:0 4px 25px rgba(0,0,0,0.05);
}

/* =========================================
PROFILE HEADER
========================================= */

.registration-profile{
    display:flex;
    align-items:center;
    gap:24px;
    padding-bottom:30px;
    border-bottom:1px solid #e2e8f0;
    margin-bottom:30px;
}

.profile-image{
    width:120px;
    height:120px;
    border-radius:50%;
    overflow:hidden;
    border:4px solid #f1f5f9;
    flex-shrink:0;
}

.profile-image img{
    width:100%;
    height:100%;
    object-fit:cover;
}

.profile-details h2{
    font-size:32px;
    color:#0f172a;
    margin-bottom:10px;
}

.profile-category{
    display:inline-block;
    background:#dbeafe;
    color:#1d4ed8;
    padding:10px 18px;
    border-radius:50px;
    font-size:13px;
    font-weight:600;
    margin-bottom:14px;
}

.registration-id{
    color:#64748b;
    font-size:15px;
}

/* =========================================
INFO GRID
========================================= */

.info-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:20px;
}

/* =========================================
INFO BOX
========================================= */

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
    font-size:16px;
    font-weight:600;
    line-height:1.7;
}

/* =========================================
ABOUT
========================================= */

.about-section{
    margin-top:30px;
    background:#f8fafc;
    border-radius:20px;
    padding:25px;
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
STATUS CARD
========================================= */

.status-card-box{
    text-align:center;
}

.status-icon{
    width:90px;
    height:90px;
    border-radius:50%;
    margin:auto;
    margin-bottom:24px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:40px;
}

.status-approved{
    background:#dcfce7;
    color:#166534;
}

.status-pending{
    background:#fef3c7;
    color:#92400e;
}

.status-card-box h3{
    font-size:28px;
    margin-bottom:14px;
    color:#0f172a;
}

.status-card-box p{
    color:#64748b;
    line-height:1.8;
    margin-bottom:25px;
}

/* =========================================
BADGE
========================================= */

.status-badge{
    display:inline-block;
    padding:12px 18px;
    border-radius:50px;
    font-size:13px;
    font-weight:700;
}

.badge-success{
    background:#dcfce7;
    color:#166534;
}

.badge-warning{
    background:#fef3c7;
    color:#92400e;
}

/* =========================================
TIMELINE
========================================= */

.timeline-section{
    margin-top:35px;
}

.timeline-section h4{
    margin-bottom:24px;
    color:#0f172a;
}

.timeline-item{
    display:flex;
    gap:14px;
    margin-bottom:22px;
}

.timeline-dot{
    width:18px;
    height:18px;
    border-radius:50%;
    background:#2563eb;
    margin-top:4px;
    flex-shrink:0;
}

.timeline-content strong{
    display:block;
    color:#0f172a;
    margin-bottom:6px;
}

.timeline-content span{
    color:#64748b;
    font-size:14px;
}

/* =========================================
BUTTONS
========================================= */

.action-buttons{
    margin-top:30px;
    display:flex;
    gap:16px;
    flex-wrap:wrap;
}

.primary-btn,
.secondary-btn{
    padding:14px 24px;
    border-radius:14px;
    text-decoration:none;
    font-weight:600;
    transition:.3s;
}

.primary-btn{
    background:#2563eb;
    color:#fff;
}

.secondary-btn{
    background:#0f172a;
    color:#fff;
}

.primary-btn:hover,
.secondary-btn:hover{
    transform:translateY(-2px);
}

/* =========================================
RESPONSIVE
========================================= */

@media(max-width:1100px){

    .registration-grid{
        grid-template-columns:1fr;
    }

}

@media(max-width:768px){

    .registration-profile{
        flex-direction:column;
        text-align:center;
    }

    .info-grid{
        grid-template-columns:1fr;
    }

    .registration-card,
    .registration-side-card{
        padding:22px;
    }

    .profile-details h2{
        font-size:26px;
    }

    .page-title{
        font-size:28px;
    }

}

</style>

{{-- =========================================
PAGE HEADER
========================================= --}}

<div class="page-header">

    <h1 class="page-title">
        My Registration
    </h1>

    <p class="page-subtitle">
        View your conference registration details and participation information.
    </p>

</div>

{{-- =========================================
GRID
========================================= --}}

<div class="registration-grid">

    {{-- =====================================
    LEFT SIDE
    ===================================== --}}

    <div class="registration-card">

        {{-- PROFILE HEADER --}}

        <div class="registration-profile">

            <div class="profile-image">

                <img 
                    src="{{ asset($conference->profile_pic) }}"
                    alt="Profile Picture"
                >

            </div>

            <div class="profile-details">

                <h2>
                    {{ $conference->prefix }} {{ $conference->name }}
                </h2>

                <div class="profile-category">
                    {{ $conference->cat->name ?? 'Conference Participant' }}
                </div>

                <div class="registration-id">
                    Registration No: {{ $conference->cn_register_no }}
                </div>

            </div>

        </div>

        {{-- INFO GRID --}}

        <div class="info-grid">

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
                    Gender
                </span>

                <div class="info-value">
                    {{ $conference->gender }}
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
                    Payment Method
                </span>

                <div class="info-value">
                    {{ ucfirst($conference->payment_method) }}
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

    </div>

    {{-- =====================================
    RIGHT SIDE
    ===================================== --}}

    <div class="registration-side-card">

        {{-- STATUS --}}

        <div class="status-card-box">

            @if($conference->status == 'APPROVE')

                <div class="status-icon status-approved">
                    ✓
                </div>

                <h3>
                    Registration Approved
                </h3>

                <p>
                    Your conference registration has been approved successfully.
                </p>

                <div class="status-badge badge-success">
                    APPROVED
                </div>

            @else

                <div class="status-icon status-pending">
                    ⏳
                </div>

                <h3>
                    Verification Pending
                </h3>

                <p>
                    Your registration is currently under review.
                </p>

                <div class="status-badge badge-warning">
                    PENDING
                </div>

            @endif

        </div>

        {{-- TIMELINE --}}

        <div class="timeline-section">

            <h4>
                Registration Timeline
            </h4>

            <div class="timeline-item">

                <div class="timeline-dot"></div>

                <div class="timeline-content">

                    <strong>
                        Registration Submitted
                    </strong>

                    <span>
                        {{ \Carbon\Carbon::parse($conference->created_at)->format('d M Y - h:i A') }}
                    </span>

                </div>

            </div>

            <div class="timeline-item">

                <div class="timeline-dot"></div>

                <div class="timeline-content">

                    <strong>
                        Registration Reviewed
                    </strong>

                    <span>
                        Conference administration review completed.
                    </span>

                </div>

            </div>

            <div class="timeline-item">

                <div class="timeline-dot"></div>

                <div class="timeline-content">

                    <strong>
                        Conference Access Granted
                    </strong>

                    <span>
                        Participant dashboard activated successfully.
                    </span>

                </div>

            </div>

        </div>

        {{-- BUTTONS --}}

        <div class="action-buttons">

            <a href="{{ route('certificate') }}" class="primary-btn">
                View Certificate
            </a>

            <a href="{{ route('profile') }}" class="secondary-btn">
                My Profile
            </a>

        </div>

    </div>

</div>

@endsection