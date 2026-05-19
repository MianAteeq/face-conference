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

.receipt-grid{
    display:grid;
    grid-template-columns:1.3fr .7fr;
    gap:24px;
}

/* =========================================
CARDS
========================================= */

.receipt-card,
.receipt-info-card{
    background:#fff;
    border-radius:24px;
    padding:30px;
    box-shadow:0 4px 25px rgba(0,0,0,0.05);
}

/* =========================================
UPLOAD AREA
========================================= */

.upload-area{
    border:2px dashed #cbd5e1;
    border-radius:24px;
    padding:50px 30px;
    text-align:center;
    background:#f8fafc;
    transition:.3s;
}

.upload-area:hover{
    border-color:#2563eb;
    background:#eff6ff;
}

.upload-icon{
    width:100px;
    height:100px;
    border-radius:50%;
    background:#dbeafe;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:42px;
    margin:auto;
    margin-bottom:24px;
}

.upload-area h2{
    font-size:30px;
    margin-bottom:12px;
    color:#0f172a;
}

.upload-area p{
    color:#64748b;
    line-height:1.8;
    margin-bottom:25px;
}

/* =========================================
INPUT
========================================= */

.file-input{
    width:100%;
    padding:16px;
    border-radius:14px;
    border:1px solid #cbd5e1;
    background:#fff;
    margin-bottom:22px;
}

/* =========================================
BUTTON
========================================= */

.upload-btn{
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

.upload-btn:hover{
    transform:translateY(-2px);
}

/* =========================================
SUCCESS / ALERT
========================================= */

.alert-success{
    background:#dcfce7;
    color:#166534;
    padding:16px 20px;
    border-radius:14px;
    margin-bottom:25px;
    font-weight:600;
}

.alert-error{
    background:#fee2e2;
    color:#991b1b;
    padding:16px 20px;
    border-radius:14px;
    margin-bottom:25px;
    font-weight:600;
}

/* =========================================
RECEIPT PREVIEW
========================================= */

.receipt-preview{
    margin-top:35px;
}

.receipt-preview h3{
    margin-bottom:18px;
    color:#0f172a;
}

.receipt-preview-box{
    border-radius:20px;
    overflow:hidden;
    background:#f8fafc;
    padding:20px;
}

.receipt-preview-box img{
    width:100%;
    border-radius:14px;
    display:block;
}

/* =========================================
INFO CARD
========================================= */

.receipt-info-card h3{
    font-size:28px;
    margin-bottom:24px;
    color:#0f172a;
}

/* =========================================
INFO ITEMS
========================================= */

.info-item{
    background:#f8fafc;
    padding:20px;
    border-radius:18px;
    margin-bottom:18px;
}

.info-item span{
    display:block;
    color:#64748b;
    font-size:13px;
    margin-bottom:8px;
}

.info-item strong{
    color:#0f172a;
    font-size:16px;
}

/* =========================================
STATUS
========================================= */

.status-badge{
    display:inline-block;
    padding:10px 16px;
    border-radius:50px;
    font-size:13px;
    font-weight:600;
}

.status-pending{
    background:#fef3c7;
    color:#92400e;
}

.status-approved{
    background:#dcfce7;
    color:#166534;
}

.status-danger{
    background:#fee2e2;
    color:#991b1b;
}

/* =========================================
NOTES
========================================= */

.note-box{
    margin-top:25px;
    background:#eff6ff;
    border-radius:18px;
    padding:22px;
}

.note-box h4{
    margin-bottom:14px;
    color:#1e40af;
}

.note-box ul{
    padding-left:18px;
}

.note-box li{
    margin-bottom:10px;
    color:#475569;
    line-height:1.7;
}

/* =========================================
RESPONSIVE
========================================= */

@media(max-width:1100px){

    .receipt-grid{
        grid-template-columns:1fr;
    }

}

@media(max-width:768px){

    .receipt-card,
    .receipt-info-card{
        padding:22px;
    }

    .upload-area{
        padding:35px 20px;
    }

    .page-title{
        font-size:28px;
    }

    .upload-area h2{
        font-size:24px;
    }

}

/* =========================================
STATUS AREAS
========================================= */

.success-area{
    background:#ecfdf5;
    border:2px solid #bbf7d0;
}

.pending-area{
    background:#fffbeb;
    border:2px solid #fde68a;
}

/* =========================================
STATUS ICONS
========================================= */

.success-icon{
    background:#dcfce7;
}

.pending-icon{
    background:#fef3c7;
}

/* =========================================
BADGES
========================================= */

.payment-status-badge{
    display:inline-block;
    margin-top:18px;
    padding:10px 18px;
    border-radius:50px;
    font-size:13px;
    font-weight:700;
}

.approved-badge{
    background:#16a34a;
    color:#fff;
}

.pending-badge{
    background:#f59e0b;
    color:#fff;
}

/* =========================================
PREVIEW HEADER
========================================= */

.preview-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:18px;
}

.view-btn{
    background:#2563eb;
    color:#fff;
    padding:10px 16px;
    border-radius:12px;
    text-decoration:none;
    font-size:13px;
    font-weight:600;
}

/* =========================================
BANK DETAILS
========================================= */

.bank-details-box{
    width:100%;
    background:#fff;
    border-radius:20px;
    padding:24px;
    margin:25px 0;
    text-align:left;
    border:1px solid #dbeafe;
}

.bank-header{
    display:flex;
    align-items:center;
    gap:14px;
    margin-bottom:22px;
}

.bank-icon{
    width:52px;
    height:52px;
    border-radius:14px;
    background:#dbeafe;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:24px;
}

.bank-header h4{
    margin:0;
    color:#0f172a;
    font-size:20px;
}

.bank-detail-item{
    margin-bottom:18px;
}

.bank-detail-item span{
    display:block;
    font-size:13px;
    color:#64748b;
    margin-bottom:6px;
}

.bank-detail-item strong{
    color:#0f172a;
    font-size:16px;
    word-break:break-word;
}

.iban-box{
    background:#eff6ff;
    padding:18px;
    border-radius:14px;
}

/* =========================================
RESPONSIVE
========================================= */

@media(max-width:768px){

    .preview-header{
        flex-direction:column;
        align-items:flex-start;
        gap:14px;
    }

}

</style>

{{-- =========================================
PAGE HEADER
========================================= --}}

<div class="page-header">

    <h1 class="page-title">
        Upload Payment Receipt
    </h1>

    <p class="page-subtitle">
        Submit your payment proof for conference verification and certificate activation.
    </p>

</div>

{{-- =========================================
GRID
========================================= --}}

<div class="receipt-grid">

    {{-- =====================================
    LEFT SIDE
    ===================================== --}}

    <div class="receipt-card">

    {{-- SUCCESS MESSAGE --}}

    @if(session('success'))

        <div class="alert-success">
            {{ session('success') }}
        </div>

    @endif

    {{-- ERROR MESSAGE --}}

    @if($errors->any())

        <div class="alert-error">

            @foreach($errors->all() as $error)

                <div>{{ $error }}</div>

            @endforeach

        </div>

    @endif

    {{-- =====================================
    REJECTED STATUS
    ===================================== --}}

    @if($conference->receipt_status == 'REJECT')

        <div class="alert-error">

            Your uploaded receipt was rejected by admin.
            Please upload a valid payment proof again.

        </div>

    @endif

    {{-- =====================================
    APPROVED STATUS
    ===================================== --}}

    @if($conference->receipt_status == 'APPROVE')

        <div class="upload-area success-area">

            <div class="upload-icon success-icon">
                ✅
            </div>

            <h2>
                Payment Approved
            </h2>

            <p>
                Your payment has been verified successfully.
                Your conference certificate is now unlocked.
            </p>

            <div class="payment-status-badge approved-badge">
                VERIFIED
            </div>

        </div>

    {{-- =====================================
    PENDING STATUS
    ===================================== --}}

    @elseif(
        $conference->payment_proof &&
        $conference->receipt_status != 'REJECT'
    )

        <div class="upload-area pending-area">

            <div class="upload-icon pending-icon">
                ⏳
            </div>

            <h2>
                Receipt Under Review
            </h2>

            <p>
                Your payment receipt has been submitted successfully.
                Our admin team is reviewing your payment proof.
            </p>

            <div class="payment-status-badge pending-badge">
                UNDER REVIEW
            </div>

        </div>

    @endif

    {{-- =====================================
    RECEIPT PREVIEW
    ===================================== --}}

    @if($conference->payment_proof)

        <div class="receipt-preview">

            <div class="preview-header">

                <h3>
                    Uploaded Receipt
                </h3>

                <a 
                    href="{{ asset($conference->payment_proof) }}"
                    target="_blank"
                    class="view-btn"
                >
                    View Full
                </a>

            </div>

            <div class="receipt-preview-box">

                @php
                    $extension = pathinfo($conference->payment_proof, PATHINFO_EXTENSION);
                @endphp

                @if(in_array(strtolower($extension), ['jpg','jpeg','png','webp']))

                    <img 
                        src="{{ asset($conference->payment_proof) }}"
                        alt="Receipt"
                    >

                @else

                    <iframe 
                        src="{{ asset($conference->payment_proof) }}"
                        width="100%"
                        height="500"
                        style="border:none;"
                    ></iframe>

                @endif

            </div>

        </div>

    @endif

    {{-- =====================================
    UPLOAD FORM
    ===================================== --}}

    @if(
        !$conference->payment_proof ||
        $conference->receipt_status == 'REJECT'
    )

        <form 
            action="{{ route('upload.receipt.post') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf

            <div class="upload-area">

                <div class="upload-icon">
                    📤
                </div>

                <h2>

                    @if($conference->receipt_status == 'REJECT')

                        Reupload Payment Receipt

                    @else

                        Upload Payment Receipt

                    @endif

                </h2>

                <p>
                    Pay <strong>PKR 990</strong> and upload your payment screenshot,
                    bank receipt or transaction proof for verification.
                </p>

                {{-- BANK DETAILS --}}

                <div class="bank-details-box">

                    <div class="bank-header">

                        <div class="bank-icon">
                            🏦
                        </div>

                        <h4>
                            Bank Account Details
                        </h4>

                    </div>

                    <div class="bank-detail-item">

                        <span>Account Title</span>

                        <strong>
                            PAK ACADEMY OF LASER DENTISTRY
                        </strong>

                    </div>

                    <div class="bank-detail-item">

                        <span>Bank Name</span>

                        <strong>
                            BANK ALFALAH
                        </strong>

                    </div>

                    <div class="bank-detail-item iban-box">

                        <span>IBAN Number</span>

                        <strong>
                            PK08ALFH0148001007326523
                        </strong>

                    </div>

                </div>

                {{-- FILE INPUT --}}

                <input 
                    type="file"
                    name="payment_proof"
                    class="file-input"
                    required
                >

                {{-- BUTTON --}}

                <button type="submit" class="upload-btn">

                    @if($conference->receipt_status == 'REJECT')

                        Reupload Receipt

                    @else

                        Upload Receipt

                    @endif

                </button>

            </div>

        </form>

    @endif

</div>

    {{-- =====================================
    RIGHT SIDE
    ===================================== --}}

    <div class="receipt-info-card">

        <h3>
            Payment Information
        </h3>

        {{-- CATEGORY --}}

        <div class="info-item">

            <span>
                Conference Category
            </span>

            <strong>
                {{ $conference->cat->name ?? 'Conference' }}
            </strong>

        </div>

        {{-- REGISTRATION NO --}}

        <div class="info-item">

            <span>
                Registration Number
            </span>

            <strong>
                {{ $conference->cn_register_no }}
            </strong>

        </div>

        {{-- PAYMENT METHOD --}}

        <div class="info-item">

            <span>
                Payment Method
            </span>

            <strong>
                {{ ucfirst($conference->payment_method) }}
            </strong>

        </div>

        {{-- STATUS --}}

       <div class="info-item">

            <span>
                Verification Status
            </span>

            @if(!$conference->payment_proof)

                <div class="status-badge status-danger">
                    NOT UPLOADED
                </div>

            @elseif($conference->receipt_status == 'APPROVE')

                <div class="status-badge status-approved">
                    APPROVED
                </div>

            @elseif($conference->receipt_status == 'REJECT')

                <div class="status-badge status-danger">
                    REJECTED
                </div>

            @else

                <div class="status-badge status-pending">
                    UNDER REVIEW
                </div>

            @endif

        </div>

        {{-- NOTES --}}

        <div class="note-box">

            <h4>
                Important Instructions
            </h4>

            <ul>

                <li>
                    Upload clear payment screenshot or receipt.
                </li>

                <li>
                    Supported formats: JPG, PNG, PDF.
                </li>

                <li>
                    Maximum file size: 5MB.
                </li>

                <li>
                    Certificate will unlock after admin approval.
                </li>

            </ul>

        </div>

    </div>

</div>

@endsection