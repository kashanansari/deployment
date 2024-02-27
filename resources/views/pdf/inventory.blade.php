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
            border: 1px solid #ccc; /* Adding borders */
            border-collapse: collapse;
            margin-bottom: 20px;
            font-size: 12px; /* Adjusting font size */
        }

        th, td {
            border: 1px solid #ccc; /* Adding borders */
            padding: 8px;
            text-align: center; /* Aligning content in the center */
        }

        th {
            background-color: #f8f9fa;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2;
        }

        .active {
            color: green;
        }

        .inactive {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Device Inventory Report</h1>
    <table class="table table-bordered table-striped">
        <thead class="thead-light">
            <tr>
                <th>Device Serial-No</th>
                <th>IMEI-No</th>
                <th>Vendor</th>
                <th>Sim no</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($devices as $device)
                <tr>
                    <td>{{ $device['device_serialno'] }}</td>
                    <td>{{ $device['imei_no'] }}</td>
                    <td>{{ $device['vendor'] }}</td>
                    <td>{{ $device['devciesim_no'] }}</td>
                    <td>{{ $device['created_at']->format('d-m-Y') }}</td>
                    <td>{{ $device['created_at']->setTimezone('Asia/Karachi')->format('h:i A') }}</td>
                    <td class="{{ $device['status'] == 'active' ? 'active' : 'inactive' }}">
                        {{ ucfirst($device['status']) }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
