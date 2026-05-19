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

.certificate-page-grid{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:24px;
}

/* =========================================
CARDS
========================================= */

.certificate-card,
.certificate-info-card{
    background:#fff;
    border-radius:24px;
    padding:30px;
    box-shadow:0 4px 25px rgba(0,0,0,0.05);
}

/* =========================================
TOP
========================================= */

.certificate-top{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
}

.certificate-top h2{
    font-size:28px;
    margin-bottom:6px;
    color:#0f172a;
}

.certificate-top p{
    color:#64748b;
}

/* =========================================
BADGE
========================================= */

.certificate-badge{
    padding:10px 18px;
    border-radius:50px;
    font-size:13px;
    font-weight:600;
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
CERTIFICATE IMAGE
========================================= */

.certificate-preview-wrapper{
    position:relative;
    border-radius:24px;
    overflow:hidden;
}

.certificate-image{
    width:100%;
    display:block;
    border-radius:24px;
}

/* =========================================
OVERLAY
========================================= */

.certificate-overlay{
    position:absolute;
    inset:0;
    background:rgba(0,0,0,0.55);
    backdrop-filter:blur(5px);
    display:flex;
    align-items:center;
    justify-content:center;
    padding:30px;
}

.lock-box{
    max-width:420px;
    background:rgba(255,255,255,0.12);
    border:1px solid rgba(255,255,255,0.15);
    backdrop-filter:blur(10px);
    border-radius:24px;
    padding:35px;
    text-align:center;
    color:#fff;
}

.lock-icon{
    width:90px;
    height:90px;
    border-radius:50%;
    background:rgba(255,255,255,0.15);
    display:flex;
    align-items:center;
    justify-content:center;
    margin:auto;
    margin-bottom:20px;
    font-size:42px;
}

.lock-box h3{
    font-size:28px;
    margin-bottom:16px;
}

.lock-box p{
    line-height:1.9;
    opacity:.9;
}

/* =========================================
BUTTONS
========================================= */

.unlock-btn,
.download-btn,
.print-btn{
    display:inline-block;
    padding:14px 24px;
    border-radius:14px;
    text-decoration:none;
    font-weight:600;
    transition:.3s;
}

.unlock-btn{
    margin-top:24px;
    background:#2563eb;
    color:#fff;
}

.certificate-actions{
    display:flex;
    gap:16px;
    margin-top:24px;
}

.download-btn{
    background:#10b981;
    color:#fff;
}

.print-btn{
    background:#2563eb;
    color:#fff;
}

.unlock-btn:hover,
.download-btn:hover,
.print-btn:hover{
    transform:translateY(-2px);
}

/* =========================================
INFO CARD
========================================= */

.certificate-info-card h3{
    font-size:26px;
    margin-bottom:25px;
}

.info-list{
    display:flex;
    flex-direction:column;
    gap:18px;
    margin-bottom:35px;
}

.info-item{
    background:#f8fafc;
    padding:18px;
    border-radius:16px;
}

.info-item span{
    display:block;
    color:#64748b;
    margin-bottom:6px;
    font-size:13px;
}

.info-item strong{
    color:#0f172a;
}

/* =========================================
STEPS
========================================= */

.certificate-steps h4{
    margin-bottom:22px;
    color:#0f172a;
}

.step-item{
    display:flex;
    align-items:center;
    gap:14px;
    margin-bottom:20px;
    opacity:.5;
}

.step-item.completed{
    opacity:1;
}

.step-circle{
    width:42px;
    height:42px;
    border-radius:50%;
    background:#cbd5e1;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:700;
}

.step-item.completed .step-circle{
    background:#10b981;
    color:#fff;
}

/* =========================================
RESPONSIVE
========================================= */

@media(max-width:1100px){

    .certificate-page-grid{
        grid-template-columns:1fr;
    }

}

@media(max-width:768px){

    .certificate-card,
    .certificate-info-card{
        padding:20px;
    }

    .certificate-top{
        flex-direction:column;
        align-items:flex-start;
        gap:16px;
    }

    .certificate-actions{
        flex-direction:column;
    }

    .page-title{
        font-size:28px;
    }

}

.certificate-preview-wrapper{
    position:relative;
    border-radius:24px;
    overflow:hidden;
    background:#f8fafc;
    padding:20px;
}

/* =========================================
CERTIFICATE WRAPPER
========================================= */

.certificate-preview-wrapper{
    position:relative;
    border-radius:24px;
    overflow:hidden;
    background:#f1f5f9;
    padding:20px;
}

/* =========================================
PREVIEW BOX
========================================= */

.certificate-preview-scale{
    width:100%;
    height:560px;
    overflow:hidden;
    position:relative;
    border-radius:20px;
    background:#fff;
}

/* =========================================
IFRAME
========================================= */

.certificate-frame{
    width:1720px;
    height:1100px;

    border:none;

    position:absolute;
    top:0;
    left:50%;

    transform:translateX(-50%) scale(0.45);
    transform-origin:top center;

    background:#fff;
}
</style>

@php

    $isSponsored = false;

    if($conference && $conference->cat){

        $categoryName = strtolower($conference->cat->name);

        if(
            str_contains($categoryName, 'sponsor') ||
            str_contains($categoryName, 'sponsored')
        ){

            $isSponsored = true;

        }

    }

    $certificateUnlocked = false;

    if(!$isSponsored){

        $certificateUnlocked = true;

    }elseif($conference->receipt_status == 'APPROVE'){

        $certificateUnlocked = true;

    }

@endphp

{{-- =========================================
PAGE HEADER
========================================= --}}

<div class="page-header">

    <div>

        <h1 class="page-title">
            Conference Certificate
        </h1>

        <p class="page-subtitle">
            Download and verify your official conference participation certificate.
        </p>

    </div>

</div>

{{-- =========================================
CERTIFICATE WRAPPER
========================================= --}}

<div class="certificate-page-grid">

    {{-- =====================================
    LEFT SIDE
    ===================================== --}}

    <div class="certificate-card">

        <div class="certificate-top">

            <div>

                <h2>
                    Certificate Preview
                </h2>

                <p>
                    {{ $conference->name }}
                </p>

            </div>
            {{-- @dd($isSponsored) --}}

            @if($certificateUnlocked)

                <div class="certificate-badge badge-success">
                    AVAILABLE
                </div>

            @else

                <div class="certificate-badge badge-warning">
                    LOCKED
                </div>

            @endif

        </div>

        {{-- =====================================
        CERTIFICATE PREVIEW
        ===================================== --}}

      <div class="certificate-preview-wrapper">

    <div class="certificate-preview-scale">

        <iframe 
            src="{{ route('certificate.preview') }}"
            class="certificate-frame"
            scrolling="no"
        ></iframe>

    </div>



            {{-- LOCKED OVERLAY --}}

            @if(!$certificateUnlocked)

                <div class="certificate-overlay">

                    <div class="lock-box">

                        <div class="lock-icon">
                            🔒
                        </div>

                        <h3>
                            Certificate Locked
                        </h3>

                        <p>

                            @if(!$conference->payment_proof)

                              Pay 999 and  Upload your payment receipt to unlock your certificate.

                            @elseif($conference->receipt_status != 'APPROVE')

                                Your payment receipt is under admin review.

                            @endif

                        </p>

                        @if(!$conference->payment_proof)

                            <a 
                                href="{{ route('upload.receipt') }}"
                                class="unlock-btn"
                            >
                                Upload Receipt
                            </a>

                        @endif

                    </div>

                </div>

            @endif

       

        {{-- =====================================
        ACTIONS
        ===================================== --}}

        @if($certificateUnlocked)

            <div class="certificate-actions">

                <a href="{{ route('certificate.download') }}" class="download-btn">
                    Download Certificate
                </a>

                

            </div>

        @endif

    </div>
    </div>

    {{-- =====================================
    RIGHT SIDE
    ===================================== --}}

    <div class="certificate-info-card">

        <h3>
            Certificate Information
        </h3>

        <div class="info-list">

            <div class="info-item">

                <span>
                    Participant Name
                </span>

                <strong>
                    {{ $conference->name }}
                </strong>

            </div>

            <div class="info-item">

                <span>
                    Registration No
                </span>

                <strong>
                   {{ $conference->cn_register_no }}
                </strong>

            </div>

            <div class="info-item">

                <span>
                    Conference Category
                </span>

                <strong>
                    {{ $conference->cat->name ?? 'Conference' }}
                </strong>

            </div>

            <div class="info-item">

                <span>
                    Status
                </span>

                <strong>

                    @if($certificateUnlocked)

                        Certificate Ready

                    @else

                        Locked

                    @endif

                </strong>

            </div>

        </div>

        {{-- =====================================
        STEPS
        ===================================== --}}

       

    </div>

</div>

@endsection