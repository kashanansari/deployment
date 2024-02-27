<!DOCTYPE html>
<html>
<head>
    <title>Complaint Logs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Raleway:wght@300&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap');

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        h1 {
            background-color: #007bff;
            color: #fff;
            padding: 15px;
            text-align: center;
            margin: 0;
        }

        table {
            width: 200%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        thead {
            background-color: #007bff;
            color: #fffafa;
        }

        th {
            text-transform: uppercase;
            font-family: 'Playfair Display', serif;
            font-size: 24px; /* You can adjust the font size as needed */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* tr:hover {
            background-color: #e0e0e0;
        } */

        th, td {
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Complaint Logs for User : {{ $reg_no ? $reg_no : 'Empty' }}</h1>
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="small">Employee ID</th>
                    <th class="small">Nature of Complaint</th>
                    <th class="small">Remarks</th>
                    <th class="small">Reg-no</th>
                    <th class="small">Status</th>
                    <th class="small">Last Location</th>
                    <th class="small">Date</th>
                    <th class="small">Time</th>
                    <th class="small">complain Time / Date</th>
                    <th class="small">Representative</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($complainLogs as $complain)
                    <tr>
                        <td>{{ $complain->emp_login_id??'-' }}</td>
                        <td>{{ $complain->nature_of_complain }}</td>
                        <td>{{ $complain->remarks }}</td>
                        <td>{{ $complain->reg_no }}</td>
                        <td>{{ $complain->Status }}</td>
                        <td>{{ $complain->last_location ?? '-' }}</td>
                        <td>{{ $complain->Date ?? '-' }}</td>
                        <td>{{ $complain->Time ?? '-' }}</td>
                        <td>
                            {{ $complain->created_at->format('d-m-Y') ?? '-' }}
                            @if($complain->created_at)
                                {{ $complain->created_at->setTimeZone('Asia/karachi')->format('h:i A') }}
                            @endif
                        </td>                        <td>{{ $complain->emp_name ?? '-' }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
