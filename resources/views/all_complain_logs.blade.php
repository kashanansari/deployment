<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Comaplain Logs</title>
    <form id="filterForm">
        <label for="monthFilter">Select Month:</label>
        <select name="month" id="monthFilter" onchange="applyFilter()">
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>
        <button id="printButton">Print</button> <!-- The print button -->
        <button id="printPdf">Generate PDF</button> <!-- New PDF button -->
    </form>
    <style>
         table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Header styles */
        .header {
            background-color: #d1caca;
            color: rgb(5, 4, 4);
            text-align: center;
            padding: 20px;
        }
        tr.selected {
        background-color: #f7dc6f; /* Change this color to the desired darker shade */
    }
        </style>
</head>
<script>
    // Function to handle row selection
    $('table tbody tr').click(function() {
        $('table tbody tr').removeClass('selected');
        $(this).addClass('selected');
    });
</script>
<body>
    <h1>Complain Logs </h1>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

    <div class="header">
        <h1> Complain Logs Entry</h1>
        <a href="{{ route('complainform') }}" class="btn btn-primary">Enter Complain Logs</a>
    </div>
    <!-- Display the data in a table -->
    <table>
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Registration Number</th>
                <th>Complain nature</th>
                <th>Conatct-no</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
                <th>Remarks</th>
                <th>Representative</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $cs_name)
                <tr>
                    <td>{{ $cs_name['customer_name'] }}</td>
                    <td>{{ $cs_name['reg_no'] }}</td>
                    <td>{{ $cs_name['nature_of_complain'] }}</td>
                    <td>{{ $cs_name['mobileno_1'] }}</td>
                    <td>{{ $cs_name['created_at']->format('d-m-Y') }}</td>
                    <td>{{ $cs_name['created_at']->setTimezone('Asia/karachi')->format('h:i A') }}</td>
                    <td>{{ $cs_name['Status'] }}</td>
                    <td>{{ $cs_name['remarks'] }}</td>
                    <td>{{ $cs_name['emp_name'] }}</td>

                    <!-- Add other table cells based on your data -->
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Display pagination links -->
    <div class="pagination">
        {{ $data->links() }}
    </div>
    <script>
        // Function to handle printing of table data
        $('#printButton').click(function() {
            window.print();
        });

    </script>
    <script>

        // Function to apply filter based on selected days
        function applyFilter() {
    const selectedMonth = document.getElementById('monthFilter').value;
    const tableRows = document.querySelectorAll('table tbody tr');

    // Loop through table rows to hide/show based on selected month
    tableRows.forEach(row => {
        const dateCell = row.getElementsByTagName('td')[6]; // Assuming Date is the 7th cell
        const dateText = dateCell.textContent;

        // Split the date string into day, month, and year parts
        const [day, monthStr, year] = dateText.split('-');

        // Convert month name to its corresponding number
        const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        const monthIndex = monthNames.indexOf(monthStr) + 1;

        // Compare the month and hide/show rows accordingly
        if (monthIndex === parseInt(selectedMonth)) {
            row.style.display = 'table-row'; // Show rows for the selected month
        } else {
            row.style.display = 'none'; // Hide rows for other months
        }
    });
}

    </script>
    <!-- Add your scripts or additional content -->
</body>
</html>
