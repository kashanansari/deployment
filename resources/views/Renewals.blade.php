<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Renewals Data</title>
    <!-- Include any necessary CSS for styling -->
    <!-- For example, you can use Bootstrap or your custom CSS -->
    <link rel="stylesheet" href="path/to/bootstrap.css">
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
    .search-container {
            text-align: right;
            margin-bottom: 10px;
        }

        .search-container input[type=text] {
            padding: 5px;
            margin-top: 8px;
            font-size: 17px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .removed-cross {
        position: absolute;
        top: 0;
        right: 0;
        color: red; /* Adjust the color for the cross as needed */
        background-color: white; /* Set the background color to match the background */
        padding: 2px 5px;
        transform: translate(50%, -50%);
    }
    </style>
</head>
<body>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

    <div class="header">
        <h1>  All Renewals  </h1>
        <a href="{{ route('getrenewals') }}" class="btn btn-primary">All Renewal Logs</a>
    </div>
    <div class="text-center">
        <form id="downloadForm" action="{{ route('download_renewals') }}" method="GET">
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Export to PDF</button>
            </div>
        </form>    </div>
    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search...">
    </div>
    <table id="renewalsTable">
        <thead>
            <tr>
                <th>Segment</th>
                <th>Registration No</th>
                <th>Customer Name</th>
                {{-- <th>DOI</th> --}}
                {{-- <th>Month</th> --}}
                <th>Contact No</th>
                <th>DOR</th>
                <th>Reg Time</th>
                <th>Sales Person</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($renewalDetails as $detail)
            <tr>
                <td>{{ $detail['segment'] }}</td>
                <td>{{ $detail['registeration_no'] }}</td>
                <td>{{ $detail['customer_name'] }}</td>
                {{-- <td>{{ $detail['date_of_installation'] }}</td> --}}
                {{-- <td>{{ $detail['month'] }}</td> --}}
                <td>{{ $detail['contact_no'] }}</td>
                <td>{{ $detail['date'] }}</td>
                <td>{{ $detail['time'] }}</td>
                <td>{{ $detail['sales_person'] }}</td>
                @php
                $statusColor = '';
                $statusText = $detail['renewal_status'];
                      if ($detail['renewal_status'] === 'paid') {
                    $statusColor = 'lightgreen';
                } else if ($detail['renewal_status'] === 'unpaid') {
                    $statusColor = 'rgba(255, 0, 0, 0.3)';
                } else if ($detail['renewal_status'] === 'bad debts') {
                    $statusColor = 'rgba(255, 255, 0, 0.3)';
                } else if ($detail['renewal_status'] === 'pending') {
                    $statusColor = 'rgba(169, 169, 169, 0.3);';
                }
                elseif ($detail['renewal_status'] === 'removed') {
                $statusColor = 'rgba(102, 153, 255, 0.3);'; // Soft blue shade
                $statusText = '<span style="color: red;">&#10060;</span> Removed';

                }
                @endphp


            <td style="background-color: {{ $statusColor }}">{{ $detail['renewal_status'] }}</td>
                <td>
                    <button onclick="viewAction('{{ $detail['registeration_no'] }}')">View</button>
                    <button onclick="addPaymentAction('{{ $detail['registeration_no'] }}')">Add Payment</button>
                    <button onclick="editInfoAction('{{ $detail['registeration_no'] }}')">Edit</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            // Function to handle search logic
            $('#searchInput').on('keyup', function() {
                var value = $(this).val().toLowerCase();
                $('#renewalsTable tbody tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <!-- Pagination -->
    {{-- <div class="pagination">
        {{ $users->links() }}
    </div>
    <!-- Include jQuery --> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function viewAction(regNo) {
            window.location.href = '/renewals_info/' + regNo;
        }

        function addPaymentAction(regNo) {
                // Action logic for Add Payment button
                window.location.href = '/add_renewal_payement/' + regNo; // Replace with the route for adding payment
            }

        function editInfoAction(regNo) {
            window.location.href = '/update_renewal/' + regNo;
        }
    </script>
<script>
    // Script for redirection via form submission
    document.getElementById('downloadForm').addEventListener('submit', function(event) {
        // Prevent default form submission behavior
        event.preventDefault();

        // Perform form submission
        this.submit();
    });
</script>
</body>
</html>
