<!DOCTYPE html>
<html>

<head>
    <title>Data Logs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Raleway:wght@300&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap');

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
        }

        h1 {
            background-color: #343a40;
            color: #fff;
            padding: 15px;
            text-align: center;
            margin: 0;
            font-size: 24px;
            text-transform: uppercase; /* Convert text to uppercase */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            font-size: 14px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        thead {
            background-color: #343a40;
            color: #fffafa;
        }

        th {
            text-transform: uppercase;
            font-family: 'Playfair Display', serif;
        }

        tr:nth-child(even) {
            background-color: #e9ecef;
        }

        th,
        td {
            border-bottom: 1px solid #dee2e6;
        }

    td.remarks {
        /* Adjust the width as needed */
        width: 200px; /* You can change this value */
        max-width: 200px; /* Ensure the maximum width */
        overflow: hidden;
        text-overflow: ellipsis;
    }
    </style>
</head>

<body>
    <h1>Data Logs: {{ $reg_no ? $reg_no : 'Empty' }}</h1>
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="small">Serial ID</th>
                    <th class="small">Customer Name</th>
                    <th class="small">Reg-no</th>
                    <th class="small">Contact-No #</th>
                    <th class="small">Contact person</th>
                    <th class="small">Remarks</th>
                    <th class="small">Representative</th>
                    <th class="small">Nature Of Alert</th>
                    <th class="small">Date</th>
                    <th class="small">Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datalogs as $complain)
                    <?php
                    // Convert created_at time to Karachi time zone
                    $karachiTime = \Carbon\Carbon::parse($complain->created_at)->timezone('Asia/Karachi');
                    ?>
                    <tr>
                        <td>{{ $complain->id }}</td>
                        <td>{{ $complain->customer_name }}</td>
                        <td>{{ $complain->reg_no }}</td>
                        <td>{{ $complain->contact_no }}</td>
                        <td>{{ $complain->contact_person }}</td>
                        <td class="remarks">{{ $complain->remarks ?? '-' }}</td>
                        <td>{{ $complain->representative }}</td>
                        <td>{{ $complain->nature ?? '-' }}</td>
                        <td>{{ $karachiTime->format('d-m-Y') }}</td>
                        <td>{{ $karachiTime->format('h:i:s A') }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</body>

</html>
