<!DOCTYPE html>
<html>

<head>
    <title>E-Receipt</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            color: #333;
            font-size: 14px;
            margin: 0;
            padding: 0;
        }

        .header {
            text-align: center;
            margin-bottom: 15px;
        }

        .header img {
            width: 90px;
            margin-bottom: 5px;
        }

        .header h2 {
            margin: 5px 0;
            font-size: 20px;
            color: green;
        }

        .header p {
            margin: 0;
            font-size: 13px;
            color: #666;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table tr.heading td {
            font-weight: bold;
            padding: 6px 8px;
            border: 1px solid #ddd;
        }

        table tr.item td {
            padding: 6px 8px;
            border: 1px solid #eee;
        }

        table tr.total td {
            padding: 8px;
            border-top: 2px solid #c28215;
            font-weight: bold;
            background: #fafafa;
        }

        .paid-stamp {
            text-align: center;
            margin-top: 20px;
        }

        .paid-stamp img {
            width: 70px;
            opacity: 0.9;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: 50px;
            background: green;
            color: #fff;
            text-align: center;
            font-size: 12px;
            line-height: 18px;
            padding-top: 6px;
        }
    </style>
</head>

<body>

    <div class="invoice-box">
        <!-- Header -->
        <div class="header">
            <img src="https://conference.fissionmonster.com/congress_logo.png" alt="Logo">
            <h2>E-Receipt</h2>
            <p>Face Congress Pakistan</p>
        </div>

        <!-- Invoice Details -->
        <table>
            <tr class="heading">
                <td>Invoice #</td>
                <td style="text-align:right">INV-{{ sprintf('%04d', $data['id']) }}</td>
            </tr>
            <tr class="item">
                <td>Date & Time</td>
                <td style="text-align:right">{{ Carbon\Carbon::parse($data['created_at'])->format('d M Y h:i A') }}</td>
            </tr>
            <tr class="item">
                <td>Name</td>
                <td style="text-align:right">{{ $data['name'] }}</td>
            </tr>
            @if ($data['registration_type'] == 'Conference')
                <tr class="item">
                    <td>Conference</td>
                    <td style="text-align:right">{{ $data['type']['name'] }}</td>
                </tr>
            @else
                <tr class="item">
                    <td>Workshop(s)</td>
                    <td style="text-align:right">
                        @if (count($data['workshops']) == 0)
                            {{ $data['cat']['name'] }}
                        @else
                            @foreach ($data['workshops'] as $workshop)
                                {{ $workshop['work']['name'] }}<br>
                            @endforeach
                        @endif
                    </td>
                </tr>
            @endif
            <tr class="item">
                <td>Reg #</td>
                @if (count($data['workshops']) == 0)
                    <td style="text-align:right">{{ $data['cn_register_no'] }}</td>
                @else
                    <td style="text-align:right">{{ $data['w_register_no'] }}</td>
                @endif
            </tr>
            <tr class="total">
                <td>Amount Paid</td>
                @if ($data['registration_type'] == 'Conference')
                    <td style="text-align:right">{{ number_format($total, 2) }}</td>
                @else
                    <td style="text-align:right">{{ number_format($total, 2) }}</td>
                @endif
            </tr>
        </table>

        <!-- Paid Stamp -->
        <div class="paid-stamp">
            <img src="https://cdn.pixabay.com/photo/2020/04/10/13/23/paid-5025785_1280.png" alt="Paid">
        </div>
    </div>

    <!-- Footer -->
    <footer>
        Face Congress &copy; {{ date('Y') }} <br>
        Designed & Developed by Fission Monster
    </footer>

</body>

</html>
