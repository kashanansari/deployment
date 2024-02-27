<!DOCTYPE html>
<html>
<head>
    <title>Employee Attendance Records</title>
    <style>
        /* Styling for the table */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<h2>Employee Attendance Records</h2>

<table>
    <thead>
        <tr>
            <th>Employee ID</th>
            <th>Check-in Time</th>
            <th>Check-out Time</th>
            <th>Date</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $record)
        <tr>
            <td>{{ $record['Emp-id'] }}</td>
            <td>{{ $record['checkintime'] }}</td>
            <td>{{ $record['checkouttime'] ?: 'N/A' }}</td>
            <td>{{ $record['Date'] ?: 'N/A' }}</td>
            <td>{{ $record['Status'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
