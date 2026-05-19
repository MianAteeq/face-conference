@extends('admin.layouts.master')

@section('css')

<style>

/* =========================================
PAGE
========================================= */

.ticket-page{
    padding:20px;
}

/* =========================================
CARD
========================================= */

.ticket-card{
    background:#fff;
    border-radius:20px;
    box-shadow:0 4px 25px rgba(0,0,0,0.05);
    overflow:hidden;
}

/* =========================================
HEADER
========================================= */

.ticket-header{
    padding:30px;
    border-bottom:1px solid #eee;
}

.ticket-header h2{
    margin:0 0 10px;
    color:#0f172a;
    font-size:30px;
}

.ticket-header p{
    color:#64748b;
    margin:0;
}

/* =========================================
BODY
========================================= */

.ticket-body{
    padding:30px;
}

/* =========================================
GRID
========================================= */

.ticket-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:20px;
    margin-bottom:30px;
}

/* =========================================
INFO BOX
========================================= */

.info-box{
    background:#f8fafc;
    padding:20px;
    border-radius:16px;
}

.info-box span{
    display:block;
    color:#64748b;
    font-size:13px;
    margin-bottom:8px;
}

.info-box strong{
    color:#0f172a;
    font-size:16px;
}

/* =========================================
STATUS
========================================= */

.ticket-status{
    display:inline-block;
    padding:10px 16px;
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
MESSAGE
========================================= */

.message-box{
    background:#f8fafc;
    border-radius:18px;
    padding:25px;
    margin-bottom:30px;
}

.message-box h4{
    margin-bottom:16px;
    color:#0f172a;
}

.message-box p{
    line-height:1.9;
    color:#475569;
    white-space:pre-line;
}

/* =========================================
BUTTONS
========================================= */

.action-buttons{
    display:flex;
    flex-wrap:wrap;
    gap:12px;
}

.action-btn{
    padding:14px 20px;
    border-radius:12px;
    text-decoration:none;
    font-size:14px;
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

.back-btn{
    background:#0f172a;
    color:#fff;
}

.action-btn:hover{
    transform:translateY(-2px);
}

/* =========================================
RESPONSIVE
========================================= */

@media(max-width:768px){

    .ticket-grid{
        grid-template-columns:1fr;
    }

    .ticket-body,
    .ticket-header{
        padding:20px;
    }

}

</style>

@endsection

@section('content')

<div class="ticket-page">

    <div class="ticket-card">

        {{-- HEADER --}}

        <div class="ticket-header">

            <h2>
                Support Ticket #{{ $ticket->id }}
            </h2>

            <p>
                Support request details and management
            </p>

        </div>

        {{-- BODY --}}

        <div class="ticket-body">

            {{-- GRID --}}

            <div class="ticket-grid">

                {{-- NAME --}}

                <div class="info-box">

                    <span>
                        User Name
                    </span>

                    <strong>
                        {{ $ticket->name }}
                    </strong>

                </div>

                {{-- EMAIL --}}

                <div class="info-box">

                    <span>
                        Email Address
                    </span>

                    <strong>
                        {{ $ticket->email }}
                    </strong>

                </div>

                {{-- REGISTRATION --}}

                <div class="info-box">

                    <span>
                        Registration Number
                    </span>

                    <strong>
                        {{ $ticket->registration_no ?? 'N/A' }}
                    </strong>

                </div>

                {{-- DATE --}}

                <div class="info-box">

                    <span>
                        Submitted Date
                    </span>

                    <strong>
                        {{ $ticket->created_at->format('d M Y - h:i A') }}
                    </strong>

                </div>

                {{-- SUBJECT --}}

                <div class="info-box">

                    <span>
                        Subject
                    </span>

                    <strong>
                        {{ $ticket->subject }}
                    </strong>

                </div>

                {{-- STATUS --}}

                <div class="info-box">

                    <span>
                        Ticket Status
                    </span>

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

                </div>

            </div>

            {{-- MESSAGE --}}

            <div class="message-box">

                <h4>
                    User Message
                </h4>

                <p>
                    {{ $ticket->message }}
                </p>

            </div>

            {{-- ACTIONS --}}

            <div class="action-buttons">

                {{-- PENDING --}}

                <a 
                    href="{{ route('admin.support.pending',$ticket->id) }}"
                    class="action-btn pending-btn"
                >
                    Mark Pending
                </a>

                {{-- CLOSE --}}

                <a 
                    href="{{ route('admin.support.close',$ticket->id) }}"
                    class="action-btn close-btn"
                    onclick="return confirm('Close this ticket?')"
                >
                    Close Ticket
                </a>

                {{-- BACK --}}

                <a 
                    href="{{ route('admin.support.tickets') }}"
                    class="action-btn back-btn"
                >
                    Back to Tickets
                </a>

            </div>

        </div>

    </div>

</div>

@endsection