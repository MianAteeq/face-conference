@extends('user-panel.master')

@section('content')

<style>

/* =========================================
PAGE
========================================= */



/* =========================================
CARD
========================================= */

.edit-card{
    background:#fff;
    border-radius:24px;
    padding:35px;
    box-shadow:0 4px 25px rgba(0,0,0,0.05);
}

/* =========================================
TITLE
========================================= */

.page-title{
    font-size:34px;
    font-weight:700;
    margin-bottom:10px;
    color:#0f172a;
}

.page-subtitle{
    color:#64748b;
    margin-bottom:30px;
}

/* =========================================
PROFILE IMAGE
========================================= */

.profile-upload{
    text-align:center;
    margin-bottom:35px;
}

.profile-preview{
    width:140px;
    height:140px;
    border-radius:50%;
    overflow:hidden;
    margin:auto;
    margin-bottom:16px;
    border:5px solid #f1f5f9;
}

.profile-preview img{
    width:100%;
    height:100%;
    object-fit:cover;
}

/* =========================================
GRID
========================================= */

.form-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:20px;
}

/* =========================================
FORM
========================================= */

.form-group{
    margin-bottom:22px;
}

.form-label{
    display:block;
    margin-bottom:10px;
    color:#0f172a;
    font-weight:600;
    font-size:14px;
}

.form-control{
    width:100%;
    height:56px;
    border-radius:14px;
    border:1px solid #cbd5e1;
    padding:0 18px;
    background:#f8fafc;
    outline:none;
    transition:.3s;
}

.form-control:focus{
    border-color:#2563eb;
    background:#fff;
}

textarea.form-control{
    height:150px;
    padding:18px;
    resize:none;
}

/* =========================================
READONLY
========================================= */

.readonly-field{
    background:#f1f5f9 !important;
    cursor:not-allowed;
    opacity:.8;
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
ALERT
========================================= */

.alert-success{
    background:#dcfce7;
    color:#166534;
    padding:16px 20px;
    border-radius:14px;
    margin-bottom:25px;
}

.alert-error{
    background:#fee2e2;
    color:#991b1b;
    padding:16px 20px;
    border-radius:14px;
    margin-bottom:25px;
}

/* =========================================
RESPONSIVE
========================================= */

@media(max-width:768px){

    .form-grid{
        grid-template-columns:1fr;
    }

    .edit-card{
        padding:22px;
    }

    .page-title{
        font-size:28px;
    }

}

</style>

<div class="edit-profile-page">

    <div class="edit-card">

        <h1 class="page-title">
            Edit Profile
        </h1>

        <p class="page-subtitle">
            Update your conference profile information.
        </p>

        {{-- SUCCESS --}}

        @if(session('success'))

            <div class="alert-success">
                {{ session('success') }}
            </div>

        @endif

        {{-- ERRORS --}}

        @if($errors->any())

            <div class="alert-error">

                @foreach($errors->all() as $error)

                    <div>{{ $error }}</div>

                @endforeach

            </div>

        @endif

        <form 
            action="{{ route('profile.update') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf

            <input 
                type="hidden"
                name="id"
                value="{{ $conference->id }}"
            >

            {{-- PROFILE IMAGE --}}

            <div class="profile-upload">

                <div class="profile-preview">

                    <img 
                        src="{{ asset($conference->profile_pic) }}"
                    >

                </div>

                <input 
                    type="file"
                    name="profile_pic"
                >

            </div>

            {{-- GRID --}}

            <div class="form-grid">

                {{-- PREFIX --}}

                <div class="form-group">

                    <label class="form-label">
                        Prefix
                    </label>

                    <input 
                        type="text"
                        class="form-control readonly-field"
                        value="{{ $conference->prefix }}"
                        readonly
                    >

                </div>

                {{-- NAME --}}

                <div class="form-group">

                    <label class="form-label">
                        Full Name
                    </label>

                    <input 
                        type="text"
                        class="form-control readonly-field"
                        value="{{ $conference->name }}"
                        readonly
                    >

                </div>

                {{-- FATHER NAME --}}

                <div class="form-group">

                    <label class="form-label">
                        Father Name
                    </label>

                    <input 
                        type="text"
                        class="form-control readonly-field"
                        value="{{ $conference->father_name }}"
                        readonly
                    >

                </div>

                {{-- PHONE --}}

                <div class="form-group">

                    <label class="form-label">
                        Phone Number
                    </label>

                    <input 
                        type="text"
                        name="phone_number"
                        class="form-control"
                        value="{{ $conference->phone_number }}"
                    >

                </div>

                {{-- INSTITUTION --}}

                <div class="form-group">

                    <label class="form-label">
                        Institution
                    </label>

                    <input 
                        type="text"
                        name="institution"
                        class="form-control"
                        value="{{ $conference->institution }}"
                    >

                </div>

                {{-- QUALIFICATIONS --}}

                <div class="form-group">

                    <label class="form-label">
                        Qualifications
                    </label>

                    <input 
                        type="text"
                        name="qualifications"
                        class="form-control"
                        value="{{ $conference->qualifications }}"
                    >

                </div>

                {{-- CITY --}}

                <div class="form-group">

                    <label class="form-label">
                        City
                    </label>

                    <input 
                        type="text"
                        name="city"
                        class="form-control"
                        value="{{ $conference->city }}"
                    >

                </div>

                {{-- ADDRESS --}}

                <div class="form-group">

                    <label class="form-label">
                        Address
                    </label>

                    <input 
                        type="text"
                        name="address"
                        class="form-control"
                        value="{{ $conference->address }}"
                    >

                </div>

            </div>

            {{-- ABOUT --}}

            <div class="form-group">

                <label class="form-label">
                    About Yourself
                </label>

                <textarea 
                    name="describe_you"
                    class="form-control"
                >{{ $conference->describe_you }}</textarea>

            </div>

            {{-- BUTTON --}}

            <button type="submit" class="submit-btn">
                Update Profile
            </button>

        </form>

    </div>

</div>

@endsection