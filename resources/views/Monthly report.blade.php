<!DOCTYPE html>
<html lang="en">
<head>
    !-- Include your CSS stylesheets or CDN links here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Monthly Attendance Report</title>
    <style>
        /* Apply CSS styles to the table */
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px; /* Adjust the margin as needed */
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        /* Blurred heading style */
        .blurred-heading {
            position: relative;
            text-align: center;
            font-size: 2em; /* Adjust the font size as needed */
            color: rgba(0, 0, 0, 0.5); /* Adjust the text color for a subtle effect */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8); /* Adjust the shadow for readability */
            filter: blur(1px); /* Adjust the blur intensity */
            margin-bottom: 20px; /* Space between headings */
        }

        /* Main heading style */
        h1 {
            text-align: center;
            font-size: 2.5em; /* Adjust the font size as needed */
            color: #333; /* Adjust the main heading color */
            margin-bottom: 20px; /* Space between headings */
        }

        .clock-widget {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }

        .clock {
            font-size: 3em;
            color: #333;
            margin-bottom: 10px;
            font-family: 'Arial', sans-serif;
        }

        .ampm {
            font-size: 1.5em;
            color: #666;
        }

        /* Style for active indicator */
        .active-indicator {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: green;
            margin-right: 5px;
            vertical-align: middle;
        }
        .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination li {
        list-style: none;
        margin: 0 5px;
    }

    .pagination a {
        display: inline-block;
        padding: 8px 12px;
        border: 1px solid #333;
        color: #333;
        text-decoration: none;
        border-radius: 5px;
    }

    .pagination a.active {
        background-color: #333;
        color: #fff;
    }

    .pagination a:hover {
        background-color: #ddd;
    }
    </style>
</head>
<body>
    <div class="clock-widget">
        <!-- Clock widget content -->
        <div class="clock" id="clock"></div>
        <div class="date" id="date"></div>
    </div>
    <h1>Monthly Attendance Report</h1>
    <h2 class="blurred-heading">Last 30 Days Attendance Report</h2>
    <table>
        <thead>
            <tr>
                <th  style="width: 50px;">Active</th>
                <th>Employee Name</th>
                <th>Checkin Time</th>
                <th>Checkout Time</th>
                <th>Time Worked</th>
                <th>Checkin Date</th>
                <th>Checkout Date</th>

                <th>Day</th>
            </tr>
        </thead>
        <tbody>
            @foreach($attendanceData as $attendance)
                <tr>
                    <td>
                        @if (!isset($attendance['check_out']) || $attendance['check_out'] === 'Active')
                            <span class="active-indicator"></span>
                        @endif
                    </td>
                    <td>{{ $attendance['Emp_name'] ?? '-' }}</td>
                    <td>{{ $attendance['check_in'] ?? '-' }}</td>
                    <td>{{ $attendance['check_out'] ?? 'Active' }}</td>
                    <td>{{ $attendance['checkin_date'] ?? '-' }}</td>
                    <td>{{ $attendance['checkout_date'] ?? '-' }}</td>
                    <td>{{ $attendance['time_worked'] ?? 'Logged in' }}</td>
                    <td>{{ \Carbon\Carbon::parse($attendance['checkin_date'])->setTimezone('Asia/Karachi')->format('l') ?? '-' }}</td>
                </tr>
            @endforeach


        </tbody>
        <tfoot>
            <tr>
                <td colspan="8">
                    <!-- Display pagination links -->
                    {{ $loginRecords->links() }}
                </td>
            </tr>
        </tfoot>
    </table>

    {{-- <script>
        // Clock function to update time every second
        function updateClock() {
            var now = new Date();
            var hours = ('0' + now.getHours()).slice(-2);
            var minutes = ('0' + now.getMinutes()).slice(-2);
            var seconds = ('0' + now.getSeconds()).slice(-2);
            var day = now.toLocaleString('en-us', { weekday: 'long' });
            var date = now.toLocaleDateString('en-US');

            // Display the current time and date in the clock widget
            document.getElementById('clock').textContent = hours + ':' + minutes + ':' + seconds;
            document.getElementById('date').textContent = day + ', ' + date;
        }

        // Update clock every second
        setInterval(updateClock, 1000);

        // Initial call to display clock when the page loads
        updateClock();
    </script> --}}

</body>
</html>
