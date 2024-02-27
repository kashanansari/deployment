<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.2/main.min.css">
    <title>All Employees info</title>
    <style>
        /* Your existing styles ... */

        /* Updated styles for the table */
        .custom-table {
            width: 100%;
            margin-bottom: 1rem;
            color: #fff;
            border-collapse: separate;
            border-spacing: 0 8px; /* Set the spacing between rows */
        }

        .custom-table th,
        .custom-table td {
            padding: 1rem;
            text-align: center;
            background-clip: padding-box;
            border: 1px solid #dee2e6; /* Add border style */
        }

        .custom-table thead tr {
            background-color: #343a40;
            border-bottom: 2px solid #dee2e6; /* Add bottom border for header row */
        }

        .custom-table tbody tr {
            border-bottom: 1px solid #dee2e6; /* Add bottom border for data rows */
        }

        .custom-table tbody tr:last-child {
            border-bottom: none; /* Remove bottom border for the last row to prevent double borders */
        }

        .custom-table tbody tr:nth-child(odd) {
            background-color: #495057;
        }

        .custom-table tbody tr:hover {
            background-color: #3b4148;
        }
        .single-line {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 15px; /* Adjust the font size as needed */
    color: #000; /* Set the text color to dark */
}

        .passport-image {
        max-width: 20px; /* Set the maximum width of each image */
        max-height: 20px; /* Set the maximum height of each image */
        width: auto; /* Maintain the aspect ratio */
        height: auto; /* Maintain the aspect ratio */
    }
    .btn-fancy {
      background-color: #000000;
      color: #7fcde0;
      border: none;
      border-radius: 10px;
      padding: 20px 30px;
      font-size: 14px;
      margin-right: 10px;
      margin-bottom: 20px; /* Space between buttons */
      text-transform: uppercase; /* Convert text to uppercase */
      display: inline-flex;
      align-items: center;
      width: 100%; /* Set button width */
      justify-content: flex-start; /* Align button contents to the left */
    }

    .btn-container {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      margin-bottom: 20px;
    }
    .active-indicator {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: green;
            margin-right: 5px;
            vertical-align: middle;
        }

    </style>
</head>
<body>
    <!-- Your existing HTML code ... -->

    <div class="container mt-3">
        <a href="#" class="btn btn-primary mb-3" onclick="goBack()">Back</a>
        <h1 style="text-transform: uppercase; font-family: 'cursive'; font-size: 40px; color: #000000d3; text-shadow: 2px 2px 4px #798de6;">Employee Information:0{{$employeeCount }}</h1>
        <h2 class="styled-link" style="font-size: 24px; color: #007BFF; text-decoration: underline; font-weight: bold; margin-top: 20px;">
            Total Records: {{ $employeeCount }}
        </h2>
        <div class="btn-container">
            <div>
              <a href="{{ route('attendance_report') }}" class="btn btn-fancy">
                <i class="fas fa-address-card"></i> Monthly Report
              </a>
            </div>

       <!-- ... existing HTML code ... -->

<table class="table custom-table" id="myTable">
    <thead>
        <tr>
           <!-- Add a column for the green light indicator -->
           <th scope="col" class="single-line" style="width: 50px;">Active</th>
           <th scope="col" class="single-line">Employee Name</th>
           <th scope="col" class="single-line">Designation</th>
           <th scope="col" class="single-line">Contact No</th>
           <th scope="col" class="single-line">Cnic No</th>
           <th scope="col" class="single-line"> Check-in Date</th>
           <th scope="col" class="single-line">Check-in Time</th>
           <th scope="col" class="single-line"> Check-out Date</th>
           <th scope="col" class="single-line">Check-out Time</th>
           <th scope="col" class="single-line">Day</th>
           <th scope="col" class="single-line">Hours</th>
       </tr>
        </tr>
    </thead>

    <tbody>
        @foreach ($attendanceData as $attendance)
            <tr>
                <!-- Display green light indicator in a separate column -->
                <td class="single-line" style="width: 50px;">
                    @if ($attendance['check_out'] === 'Active' || is_null($attendance['check_out']))
                        <span class="active-indicator"></span>
                    @endif
                </td>
                <td class="single-line">
                    {{ $employees->where('emp_id', $attendance['emp_id'])->first()->emp_name }}
                </td>
                <!-- Display other employee details -->
                <td class="single-line">{{ $employees->where('emp_id', $attendance['emp_id'])->first()->designation }}</td>
                <td class="single-line">{{ $employees->where('emp_id', $attendance['emp_id'])->first()->contact }}</td>
                <td class="single-line">{{ $employees->where('emp_id', $attendance['emp_id'])->first()->cnic }}</td>
                <td class="single-line">{{$attendance['checkin_date']}}</td>

                <td class="single-line">{{ \Carbon\Carbon::parse($attendance['check_in'])->setTimezone('Asia/Karachi')->format('h:i A') }}</td>
                <td class="single-line">{{$attendance['checkout_date']??'-'}}</td>

                <td class="single-line">{{ $attendance['check_out'] ? \Carbon\Carbon::parse($attendance['check_out'])->setTimezone('Asia/Karachi')->format('h:i A') : 'Logged in' }}</td>
                <!-- Calculate and display day -->
                <td class="single-line">{{ \Carbon\Carbon::parse($attendance['checkin_date'])->setTimezone('Asia/Karachi')->format('l')}}</td>
                <td class="single-line">
                    @if(empty($attendance['time_worked']))
                        -
                    @else
                        {{ $attendance['time_worked'] }}
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


<!-- ... existing scripts ... -->

    </div>

    <script>
        function goBack() {
            window.history.back();
        }

        function deleteRecord(recordId) {
            // Your delete record logic here
            // You can use AJAX or other methods to handle deletion
            console.log('Deleting record with ID:', recordId);
        }
    </script>

    <!-- Your existing scripts ... -->
</body>
</html>
