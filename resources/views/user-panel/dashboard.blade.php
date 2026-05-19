@extends('user-panel.master')

@section('content')

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

{{-- =========================================
STATUS CARDS
========================================= --}}

<section class="status-grid">

    {{-- =====================================
    SPONSORED USERS
    ===================================== --}}

    @if($isSponsored)

        {{-- PAYMENT STATUS --}}

        <div class="status-card">

            <h3>Payment Status</h3>

            {{-- NO RECEIPT --}}

            @if(!$conference->payment_proof)

                <div class="status red">
                    Unpaid
                </div>

                <p>
                    Your payment receipt has not been uploaded yet.
                </p>

            {{-- REJECTED --}}

            @elseif($conference->receipt_status == 'REJECT')

                <div class="status red">
                    Rejected
                </div>

                <p>
                    Your payment receipt was rejected.
                    Please upload a valid receipt again.
                </p>

            {{-- PENDING --}}

            @elseif($conference->receipt_status != 'APPROVE')

                <div class="status orange">
                    Pending
                </div>

                <p>
                    Your receipt is under verification.
                </p>

            {{-- APPROVED --}}

            @else

                <div class="status green">
                    Approved
                </div>

                <p>
                    Your payment has been verified successfully.
                </p>

            @endif

        </div>

        {{-- RECEIPT STATUS --}}

        <div class="status-card">

            <h3>Receipt Status</h3>

            {{-- NO RECEIPT --}}

            @if(!$conference->payment_proof)

                <div class="status red">
                    Not Uploaded
                </div>

                <p>
                    Pay 990 and upload your payment receipt for approval.
                </p>

                <a 
                    href="{{ route('upload.receipt') }}"
                    class="card-btn"
                >
                    Upload Receipt
                </a>

            {{-- REJECTED --}}

            @elseif($conference->receipt_status == 'REJECT')

                <div class="status red">
                    Reupload Required
                </div>

                <p>
                    Your uploaded receipt was rejected by admin.
                </p>

                <a 
                    href="{{ route('upload.receipt') }}"
                    class="card-btn"
                >
                    Reupload Receipt
                </a>

            {{-- UPLOADED --}}

            @else

                <div class="status green">
                    Uploaded
                </div>

                <p>
                    Your receipt has been submitted successfully.
                </p>

            @endif

        </div>

        {{-- CERTIFICATE STATUS --}}

        <div class="status-card">

            <h3>Certificate Status</h3>

            @if($conference->receipt_status == 'APPROVE')

                <div class="status green">
                    Available
                </div>

                <p>
                    Your certificate is ready for download.
                </p>

                <a 
                    href="{{ route('certificate') }}"
                    class="card-btn"
                >
                    View Certificate
                </a>

            @else

                <div class="status orange">
                    Locked
                </div>

                <p>
                    Certificate available after payment approval.
                </p>

            @endif

        </div>

    {{-- =====================================
    NORMAL USERS
    ===================================== --}}

    @else

        <div class="status-card">

            <h3>Registration Status</h3>

            <div class="status green">
                Approved
            </div>

            <p>
                Your conference registration is approved.
            </p>

        </div>

        <div class="status-card">

            <h3>Conference Category</h3>

            <div class="status green">
                {{ $conference->cat->name ?? 'Conference' }}
            </div>

            <p>
                Registered conference participant.
            </p>

        </div>

        <div class="status-card">

            <h3>Certificate Status</h3>

            <div class="status green">
                Ready
            </div>

            <p>
                Your certificate is available for download.
            </p>

            <a 
                href="{{ route('certificate') }}"
                class="card-btn"
            >
                View Certificate
            </a>

        </div>

    @endif

</section>

{{-- =========================================
UPLOAD + CERTIFICATE
========================================= --}}

<section class="upload-grid">

    {{-- =====================================
    RECEIPT UPLOAD
    ===================================== --}}

   

    {{-- =====================================
    CERTIFICATE
    ===================================== --}}

   <div class="box-card">

        <h2>Certificate Preview</h2>

        <div class="certificate-preview">

            <img 
                src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=2070&auto=format&fit=crop"
            >

            {{-- SPONSORED LOCK --}}

            @if($isSponsored && $conference->receipt_status != 'APPROVE')

                <div class="lock-overlay">

                    <h2>
                        🔒 Certificate Locked
                    </h2>

                    <p>
                        Your certificate will unlock after payment verification.
                    </p>

                </div>

            @else

                <div class="lock-overlay">

                    <h2>
                        ✅ Certificate Ready
                    </h2>

                    <p>
                        Your certificate is available for download.
                    </p>

                    <br>

                    <a href="#" class="card-btn">
                        Download Certificate
                    </a>

                </div>

            @endif

        </div>

    </div>

</section>

{{-- =========================================
REGISTRATION PROGRESS
========================================= --}}

<section class="progress-card">

    <h2>Registration Progress</h2>

    <div class="progress-steps">

        {{-- REGISTERED --}}

        <div class="step">

            <div class="circle completed">
                ✓
            </div>

            <h4>Registered</h4>

        </div>

        {{-- =====================================
        SPONSORED FLOW
        ===================================== --}}

        @if($isSponsored)

            {{-- RECEIPT --}}

            <div class="step">

                <div class="circle {{ $conference->payment_proof ? 'completed' : 'pending' }}">

                    {{ $conference->payment_proof ? '✓' : '!' }}

                </div>

                <h4>Receipt Uploaded</h4>

            </div>

            {{-- REVIEW --}}

            <div class="step">

                <div class="circle {{ $conference->receipt_status == 'APPROVE' ? 'completed' : 'locked' }}">

                    {{ $conference->receipt_status == 'APPROVE' ? '✓' : '⏳' }}

                </div>

                <h4>Under Review</h4>

            </div>

            {{-- CERTIFICATE --}}

            <div class="step">

                <div class="circle {{ $conference->receipt_status == 'APPROVE' ? 'completed' : 'locked' }}">

                    {{ $conference->receipt_status == 'APPROVE' ? '✓' : '🔒' }}

                </div>

                <h4>Certificate</h4>

            </div>

        {{-- =====================================
        NORMAL USERS
        ===================================== --}}

        @else

            <div class="step">

                <div class="circle completed">
                    ✓
                </div>

                <h4>Approved</h4>

            </div>

            <div class="step">

                <div class="circle completed">
                    ✓
                </div>

                <h4>Certificate Ready</h4>

            </div>

        @endif

    </div>

</section>

@endsection