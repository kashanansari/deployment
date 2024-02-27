<!-- resources/views/timeDifferences.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Time Differences Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
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
    <h1>Time Differences Report</h1>
    <table>
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>Employee Login ID</th>
                <th>Login Time</th>
                <th>Logout Time</th>
                <th>Difference</th>
            </tr>
        </thead>
        <tbody>
            @foreach($timeDifferences as $difference)
            <tr>
                <td>{{ $difference['employee_id'] }}</td>
                <td>{{ $difference['emp_loginID'] }}</td>
                <td>{{ $difference['login_time'] }}</td>
                <td>{{ $difference['logout_time'] }}</td>
                <td>{{ $difference['difference_formatted'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
