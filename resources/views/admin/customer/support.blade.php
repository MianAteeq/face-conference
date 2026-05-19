@extends('admin.layouts.master')

@section('css')

<style>

/* =========================================
PAGE
========================================= */

.support-page{
    padding:20px;
}

/* =========================================
CARD
========================================= */

.support-card{
    background:#fff;
    border-radius:20px;
    box-shadow:0 4px 25px rgba(0,0,0,0.05);
    overflow:hidden;
}

/* =========================================
HEADER
========================================= */

.support-header{
    padding:25px 30px;
    border-bottom:1px solid #eee;
}

.support-header h2{
    margin:0;
    font-size:28px;
    color:#0f172a;
}

/* =========================================
TABLE
========================================= */

.support-table{
    width:100%;
    border-collapse:collapse;
}

.support-table thead{
    background:#f8fafc;
}

.support-table th{
    padding:18px;
    text-align:left;
    font-size:14px;
    color:#475569;
    border-bottom:1px solid #e2e8f0;
}

.support-table td{
    padding:18px;
    border-bottom:1px solid #f1f5f9;
    vertical-align:top;
}

/* =========================================
USER BOX
========================================= */

.user-box{
    display:flex;
    align-items:center;
    gap:12px;
}

.user-avatar{
    width:50px;
    height:50px;
    border-radius:50%;
    background:#2563eb;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:700;
    font-size:18px;
}

.user-info h4{
    margin:0 0 4px;
    font-size:15px;
    color:#0f172a;
}

.user-info span{
    color:#64748b;
    font-size:13px;
}

/* =========================================
STATUS
========================================= */

.ticket-status{
    display:inline-block;
    padding:8px 14px;
    border-radius:50px;
    font-size:12px;
    font-weight:700;
}

.status-open{
    background:#dbeafe;
    color:#1d4ed8;
}

.status-pending{
    background:#fef3c7;
    color:#92400e;
}

.status-replied{
    background:#dcfce7;
    color:#166534;
}

.status-closed{
    background:#fee2e2;
    color:#991b1b;
}

/* =========================================
SUBJECT
========================================= */

.ticket-subject{
    font-weight:600;
    color:#0f172a;
    margin-bottom:6px;
}

.ticket-message{
    color:#64748b;
    line-height:1.7;
    font-size:14px;
}

/* =========================================
BUTTONS
========================================= */

.action-buttons{
    display:flex;
    flex-wrap:wrap;
    gap:8px;
}

.action-btn{
    padding:10px 14px;
    border-radius:10px;
    text-decoration:none;
    font-size:13px;
    font-weight:600;
    transition:.3s;
}

.reply-btn{
    background:#2563eb;
    color:#fff;
}

.pending-btn{
    background:#f59e0b;
    color:#fff;
}

.close-btn{
    background:#ef4444;
    color:#fff;
}

.action-btn:hover{
    transform:translateY(-2px);
}

/* =========================================
DATE
========================================= */

.ticket-date{
    color:#64748b;
    font-size:13px;
}

/* =========================================
EMPTY
========================================= */

.empty-box{
    padding:60px 20px;
    text-align:center;
}

.empty-box h3{
    margin-bottom:10px;
    color:#0f172a;
}

.empty-box p{
    color:#64748b;
}

/* =========================================
RESPONSIVE
========================================= */

@media(max-width:992px){

    .support-table{
        display:block;
        overflow-x:auto;
        white-space:nowrap;
    }

}

</style>

@endsection

@section('content')

<div class="support-page">

    <div class="support-card">

        {{-- HEADER --}}

        <div class="support-header">

            <h2>
                Support Tickets
            </h2>

        </div>

        {{-- TABLE --}}

        @if($tickets->count() > 0)

            <table class="support-table">

                <thead>

                    <tr>

                        <th>User</th>
                        <th>Registration</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($tickets as $ticket)

                        <tr>

                            {{-- USER --}}

                            <td>

                                <div class="user-box">

                                    <div class="user-avatar">

                                        {{ strtoupper(substr($ticket->name,0,1)) }}

                                    </div>

                                    <div class="user-info">

                                        <h4>
                                            {{ $ticket->name }}
                                        </h4>

                                        <span>
                                            {{ $ticket->email }}
                                        </span>

                                    </div>

                                </div>

                            </td>

                            {{-- REGISTRATION --}}

                            <td>

                                <strong>
                                    {{ $ticket->registration_no ?? 'N/A' }}
                                </strong>

                            </td>

                            {{-- SUBJECT --}}

                            <td style="min-width:300px;">

                                <div class="ticket-subject">
                                    {{ $ticket->subject }}
                                </div>

                                <div class="ticket-message">
                                    {{ Str::limit($ticket->message,120) }}
                                </div>

                            </td>

                            {{-- STATUS --}}

                            <td>

                                @if($ticket->status == 'OPEN')

                                    <div class="ticket-status status-open">
                                        OPEN
                                    </div>

                                @elseif($ticket->status == 'PENDING')

                                    <div class="ticket-status status-pending">
                                        PENDING
                                    </div>

                                @elseif($ticket->status == 'REPLIED')

                                    <div class="ticket-status status-replied">
                                        REPLIED
                                    </div>

                                @else

                                    <div class="ticket-status status-closed">
                                        CLOSED
                                    </div>

                                @endif

                            </td>

                            {{-- DATE --}}

                            <td>

                                <div class="ticket-date">

                                    {{ $ticket->created_at->format('d M Y') }}

                                    <br>

                                    {{ $ticket->created_at->format('h:i A') }}

                                </div>

                            </td>

                            {{-- ACTIONS --}}

                            <td>

                                <div class="action-buttons">

                                    {{-- VIEW / REPLY --}}

                                    <a 
                                        href="{{ route('admin.support.show',$ticket->id) }}"
                                        class="action-btn reply-btn"
                                    >
                                        View
                                    </a>

                                    {{-- PENDING --}}

                                    <a 
                                        href="{{ route('admin.support.pending',$ticket->id) }}"
                                        class="action-btn pending-btn"
                                    >
                                        Pending
                                    </a>

                                    {{-- CLOSE --}}

                                    <a 
                                        href="{{ route('admin.support.close',$ticket->id) }}"
                                        class="action-btn close-btn"
                                        onclick="return confirm('Close this ticket?')"
                                    >
                                        Close
                                    </a>

                                </div>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        @else

            {{-- EMPTY --}}

            <div class="empty-box">

                <h3>
                    No Support Tickets Found
                </h3>

                <p>
                    There are currently no support requests available.
                </p>

            </div>

        @endif

    </div>

</div>

@endsection