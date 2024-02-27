<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Complaint Logs</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Include any additional CSS or libraries here -->

</head>
<body>
    <div class="container">
        <h1>Complaint Logs</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Complaint ID</th>
                    <th>Customer Name</th>
                    <th>Registration Number</th>
                    <th>Nature of Complaint</th>
                    <th>Remarks</th>
                    <th>Status</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($complain_logs as $complain)
                <tr>
                    <td>{{ $complain->complain_id }}</td>
                    <td>{{ $complain->customer_name }}</td>
                    <td>{{ $complain->reg_no }}</td>
                    <td>{{ $complain->nature_of_complain }}</td>
                    <td>{{ $complain->remarks }}</td>
                    <td>{{ $complain->Status }}</td>
                    <td>{{ $complain->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JS and any additional JavaScript libraries here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Include any other JavaScript libraries or scripts here -->

</body>
</html>
