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
    font-size:32px;
    font-weight:700;
    color:#0f172a;
    margin-bottom:8px;
}

.page-subtitle{
    color:#64748b;
    font-size:15px;
}

/* =========================================
PAYMENT WRAPPER
========================================= */

.payment-wrapper{
    display:flex;
    justify-content:center;
}

/* =========================================
PAYMENT CARD
========================================= */

.payment-card{
    width:100%;
    background:#fff;
    border-radius:24px;
    padding:40px;
    box-shadow:0 4px 25px rgba(0,0,0,0.05);
}

/* =========================================
ICON
========================================= */

.payment-icon{
    width:90px;
    height:90px;
    border-radius:50%;
    background:#f8fafc;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:40px;
    margin-bottom:24px;
}

/* =========================================
TITLE
========================================= */

.payment-card h2{
    font-size:30px;
    margin-bottom:18px;
    color:#0f172a;
}

/* =========================================
BADGES
========================================= */

.payment-badge{
    display:inline-block;
    padding:10px 18px;
    border-radius:50px;
    font-size:13px;
    font-weight:600;
    margin-bottom:24px;
}

.badge-success{
    background:#dcfce7;
    color:#166534;
}

.badge-danger{
    background:#fee2e2;
    color:#991b1b;
}

.badge-warning{
    background:#fef3c7;
    color:#92400e;
}

/* =========================================
DESCRIPTION
========================================= */

.payment-description{
    font-size:15px;
    line-height:1.9;
    color:#475569;
    margin-bottom:35px;
}

/* =========================================
INFO GRID
========================================= */

.payment-info-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
    margin-bottom:35px;
}

.info-box{
    background:#f8fafc;
    border-radius:18px;
    padding:24px;
}

.info-label{
    display:block;
    color:#64748b;
    font-size:13px;
    margin-bottom:10px;
}

.info-box h4{
    color:#0f172a;
    font-size:18px;
}

/* =========================================
RECEIPT
========================================= */

.receipt-preview{
    background:#f8fafc;
    padding:24px;
    border-radius:20px;
    margin-bottom:30px;
}

.receipt-preview h3{
    margin-bottom:16px;
    color:#0f172a;
}

.view-receipt-btn{
    display:inline-block;
    padding:12px 20px;
    border-radius:12px;
    background:#2563eb;
    color:#fff;
    text-decoration:none;
    font-size:14px;
    font-weight:600;
}

/* =========================================
BUTTONS
========================================= */

.payment-actions{
    display:flex;
    gap:16px;
    flex-wrap:wrap;
}

.primary-btn,
.success-btn{
    padding:14px 26px;
    border-radius:14px;
    text-decoration:none;
    font-size:15px;
    font-weight:600;
    transition:.3s;
}

.primary-btn{
    background:#2563eb;
    color:#fff;
}

.success-btn{
    background:#10b981;
    color:#fff;
}

.primary-btn:hover,
.success-btn:hover{
    transform:translateY(-2px);
}

/* =========================================
RESPONSIVE
========================================= */

@media(max-width:992px){

    .payment-info-grid{
        grid-template-columns:1fr;
    }

}

@media(max-width:768px){

    .payment-card{
        padding:25px;
    }

    .page-title{
        font-size:26px;
    }

    .payment-card h2{
        font-size:24px;
    }

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

@endphp

<div class="page-header">

    <div>

        <h1 class="page-title">
            Payment Status
        </h1>

        <p class="page-subtitle">
            View your payment verification and conference registration status.
        </p>

    </div>

</div>

{{-- =========================================
PAYMENT STATUS CARD
========================================= --}}

<div class="payment-wrapper">

    <div class="payment-card">

        {{-- ICON --}}

        <div class="payment-icon">

            @if($isSponsored)

                @if(!$conference->payment_proof)

                    💳

                @elseif($conference->status != 'APPROVE')

                    ⏳

                @else

                    ✅

                @endif

            @else

                ✅

            @endif

        </div>

        {{-- TITLE --}}

        <h2>

            @if(!$isSponsored)

                Registration Approved

            @else

                @if(!$conference->payment_proof)

                    Payment Pending

                @elseif($conference->status != 'APPROVE')

                    Verification Pending

                @else

                    Payment Approved

                @endif

            @endif

        </h2>

        {{-- STATUS BADGE --}}

        <div class="payment-badge

            @if(!$isSponsored)

                badge-success

            @else

                @if(!$conference->payment_proof)

                    badge-danger

                @elseif($conference->status != 'APPROVE')

                    badge-warning

                @else

                    badge-success

                @endif

            @endif

        ">

            @if(!$isSponsored)

                APPROVED

            @else

                @if(!$conference->payment_proof)

                    UNPAID

                @elseif($conference->status != 'APPROVE')

                    UNDER REVIEW

                @else

                    APPROVED

                @endif

            @endif

        </div>

        {{-- DESCRIPTION --}}

        <p class="payment-description">

            @if(!$isSponsored)

                Your registration has been approved successfully. 
                Your certificate is available for download.

            @else

                @if(!$conference->payment_proof)

                    Your category requires payment verification before certificate access.

                @elseif($conference->status != 'APPROVE')

                    Your payment receipt has been submitted successfully and is currently under admin review.

                @else

                    Your payment has been verified successfully. Your certificate is now unlocked.

                @endif

            @endif

        </p>

        {{-- CATEGORY --}}

        <div class="payment-info-grid">

            <div class="info-box">

                <span class="info-label">
                    Category
                </span>

                <h4>
                    {{ $conference->cat->name ?? 'Conference' }}
                </h4>

            </div>

            <div class="info-box">

                <span class="info-label">
                    Registration No
                </span>

                <h4>
                    {{ $conference->cn_register_no }}
                </h4>

            </div>

            <div class="info-box">

                <span class="info-label">
                    Payment Method
                </span>

                <h4>
                    {{ ucfirst($conference->payment_method) }}
                </h4>

            </div>

        </div>

        {{-- RECEIPT IMAGE --}}

        @if($conference->payment_proof)

            <div class="receipt-preview">

                <h3>
                    Uploaded Receipt
                </h3>

                <a 
                    href="{{ asset($conference->payment_proof) }}"
                    target="_blank"
                    class="view-receipt-btn"
                >
                    View Uploaded Receipt
                </a>

            </div>

        @endif

        {{-- ACTION BUTTONS --}}

        <div class="payment-actions">

            {{-- UPLOAD RECEIPT --}}

            @if($isSponsored && !$conference->payment_proof)

                <a 
                    href="{{ route('upload.receipt') }}"
                    class="primary-btn"
                >
                    Upload Receipt
                </a>

            @endif

            {{-- CERTIFICATE --}}

            @if(!$isSponsored || $conference->status == 'APPROVE')

                <a 
                    href="{{ route('certificate') }}"
                    class="success-btn"
                >
                    View Certificate
                </a>

            @endif

        </div>

    </div>

</div>

@endsection