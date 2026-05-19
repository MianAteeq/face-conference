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

.support-grid{
    display:grid;
    grid-template-columns:1.3fr .7fr;
    gap:24px;
}

/* =========================================
CARDS
========================================= */

.support-card,
.contact-card{
    background:#fff;
    border-radius:24px;
    padding:30px;
    box-shadow:0 4px 25px rgba(0,0,0,0.05);
}

/* =========================================
SUPPORT HEADER
========================================= */

.support-header{
    margin-bottom:35px;
}

.support-header h2{
    font-size:32px;
    color:#0f172a;
    margin-bottom:14px;
}

.support-header p{
    color:#64748b;
    line-height:1.9;
}

/* =========================================
FORM
========================================= */

.support-form-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:20px;
    margin-bottom:20px;
}

.form-group{
    margin-bottom:20px;
}

.form-label{
    display:block;
    margin-bottom:10px;
    color:#0f172a;
    font-size:14px;
    font-weight:600;
}

.form-control{
    width:100%;
    height:56px;
    border-radius:14px;
    border:1px solid #cbd5e1;
    padding:0 18px;
    font-size:15px;
    outline:none;
    transition:.3s;
    background:#f8fafc;
}

.form-control:focus{
    border-color:#2563eb;
    background:#fff;
}

textarea.form-control{
    height:160px;
    padding:18px;
    resize:none;
}

/* =========================================
BUTTON
========================================= */

.submit-btn{
    border:none;
    background:#2563eb;
    color:#fff;
    padding:16px 28px;
    border-radius:14px;
    font-size:15px;
    font-weight:600;
    cursor:pointer;
    transition:.3s;
}

.submit-btn:hover{
    transform:translateY(-2px);
}

/* =========================================
CONTACT CARD
========================================= */

.contact-card h3{
    font-size:28px;
    margin-bottom:28px;
    color:#0f172a;
}

/* =========================================
CONTACT ITEMS
========================================= */

.contact-item{
    display:flex;
    gap:18px;
    margin-bottom:24px;
    background:#f8fafc;
    padding:22px;
    border-radius:18px;
}

.contact-icon{
    width:56px;
    height:56px;
    border-radius:16px;
    background:#dbeafe;
    color:#2563eb;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:24px;
    flex-shrink:0;
}

.contact-content h4{
    margin-bottom:8px;
    color:#0f172a;
}

.contact-content p,
.contact-content a{
    color:#64748b;
    line-height:1.8;
    text-decoration:none;
}

/* =========================================
HELP BOX
========================================= */

.help-box{
    margin-top:30px;
    background:#eff6ff;
    border-radius:20px;
    padding:25px;
}

.help-box h4{
    margin-bottom:14px;
    color:#1d4ed8;
}

.help-box ul{
    padding-left:18px;
}

.help-box li{
    margin-bottom:10px;
    color:#475569;
    line-height:1.8;
}

/* =========================================
SUCCESS MESSAGE
========================================= */

.alert-success{
    background:#dcfce7;
    color:#166534;
    padding:16px 20px;
    border-radius:14px;
    margin-bottom:24px;
    font-weight:600;
}

/* =========================================
RESPONSIVE
========================================= */

@media(max-width:1100px){

    .support-grid{
        grid-template-columns:1fr;
    }

}

@media(max-width:768px){

    .support-form-grid{
        grid-template-columns:1fr;
    }

    .support-card,
    .contact-card{
        padding:22px;
    }

    .page-title{
        font-size:28px;
    }

    .support-header h2{
        font-size:26px;
    }

}

</style>

{{-- =========================================
PAGE HEADER
========================================= --}}

<div class="page-header">

    <h1 class="page-title">
        Support Center
    </h1>

    <p class="page-subtitle">
        Need help with your registration, payment or certificate? Contact our support team.
    </p>

</div>

{{-- =========================================
GRID
========================================= --}}

<div class="support-grid">

    {{-- =====================================
    LEFT SIDE
    ===================================== --}}

    <div class="support-card">

        {{-- HEADER --}}

        <div class="support-header">

            <h2>
                Contact Support
            </h2>

            <p>
                Our conference support team is available to help you regarding registration issues, payment verification, certificate downloads and technical support.
            </p>

        </div>

        {{-- SUCCESS MESSAGE --}}

        @if(session('success'))

            <div class="alert-success">
                {{ session('success') }}
            </div>

        @endif

        {{-- FORM --}}

       <form 
    action="{{ route('support.submit') }}" 
    method="POST"
>

            @csrf

            {{-- GRID --}}

            <div class="support-form-grid">

                <div class="form-group">

                    <label class="form-label">
                        Full Name
                    </label>

                    <input 
                        type="text"
                        class="form-control"
                        value="{{ $conference->name ?? auth()->user()->name }}"
                        readonly
                    >

                </div>

                <div class="form-group">

                    <label class="form-label">
                        Email Address
                    </label>

                    <input 
                        type="email"
                        class="form-control"
                        value="{{ $conference->email ?? auth()->user()->email }}"
                        readonly
                    >

                </div>

            </div>

            {{-- SUBJECT --}}

            <div class="form-group">

                <label class="form-label">
                    Subject
                </label>

                <input 
                    type="text"
                    name="subject"
                    class="form-control"
                    placeholder="Enter support subject"
                    required
                >

            </div>

            {{-- MESSAGE --}}

            <div class="form-group">

                <label class="form-label">
                    Message
                </label>

                <textarea 
                    name="message"
                    class="form-control"
                    placeholder="Describe your issue or question..."
                    required
                ></textarea>

            </div>

            {{-- BUTTON --}}

            <button type="submit" class="submit-btn">
                Submit Support Request
            </button>

        </form>

    </div>

    {{-- =====================================
    RIGHT SIDE
    ===================================== --}}

    <div class="contact-card">

        <h3>
            Conference Support
        </h3>

        {{-- EMAIL --}}

        <div class="contact-item">

            <div class="contact-icon">
                ✉️
            </div>

            <div class="contact-content">

                <h4>
                    Email Address
                </h4>

                <a href="mailto:marketing@shar.edu.pk">
                    marketing@shar.edu.pk
                </a>

            </div>

        </div>

        {{-- PHONE --}}

        <div class="contact-item">

            <div class="contact-icon">
                📞
            </div>

            <div class="contact-content">

                <h4>
                    Phone Support
                </h4>

                <a href="tel:+923363655111">
                    +92 336 3655111
                </a>

            </div>

        </div>

        {{-- LOCATION --}}

        <div class="contact-item">

            <div class="contact-icon">
                📍
            </div>

            <div class="contact-content">

                <h4>
                    Conference Venue
                </h4>

                <p>
                    Lahore, Pakistan
                </p>

            </div>

        </div>

        {{-- HOURS --}}

        <div class="contact-item">

            <div class="contact-icon">
                ⏰
            </div>

            <div class="contact-content">

                <h4>
                    Support Hours
                </h4>

                <p>
                    Monday - Saturday
                    <br>
                    09:00 AM - 06:00 PM
                </p>

            </div>

        </div>

        {{-- HELP BOX --}}

        <div class="help-box">

            <h4>
                Common Support Topics
            </h4>

            <ul>

                <li>
                    Payment receipt verification delay
                </li>

                <li>
                    Certificate download issue
                </li>

                <li>
                    Registration correction request
                </li>

                <li>
                    Conference access support
                </li>

                <li>
                    Technical dashboard issues
                </li>

            </ul>

        </div>

    </div>

</div>

@endsection