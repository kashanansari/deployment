<!DOCTYPE html>
<html>
<head>
    <title>Device Inventory Report</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Define additional CSS styles here */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border: 1px solid #dee2e6;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-size: 12px;
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f8f9fa;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2;
        }

        .paid {
            color: green;
        }

        .unpaid {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Device Inventory Report</h1>
    <table class="table table-bordered table-striped">
        <thead class="thead-light">
            <tr>
                <th>Segment</th>
                <th>Reg-no#</th>
                <th>Customer name</th>
                <th>Contact no</th>
                <th>DOI</th>
                <th>DOR</th>
                <th>Status</th>

            </tr>
        </thead>
        <tbody>
            @foreach($userDetails as $details)
            <tr>
                <td>{{ $details['segment'] }}</td>
                <td>{{ $details['reg_no'] }}</td>
                <td>{{ $details['customer_name'] }}</td>
                <td>{{ $details['contact_no'] }}</td>
                <td>{{ $details['date'] }}</td>
                <td>{{date('d-m-Y',strtoTime($details['renewal_date'])) }}</td>
                <td class="{{ $details['renewal_status'] === 'paid' ? 'paid' : 'unpaid' }}">{{ $details['renewal_status'] }}</td>

            @endforeach
        </tbody>
    </table>
</body>
</html>
