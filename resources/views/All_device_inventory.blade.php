<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Device inventory details</title>
    <form id="filterForm">
        <label for="daysFilter">Select Days:</label>
        <select name="days" id="daysFilter" onchange="applyFilter()">
            <option value="10">Last 10 days</option>
            <option value="20">Last 20 days</option>
            <option value="30">Last 30 days</option>
            <option value="40">Last 40 days</option>
        </select>
        <button class="btn btn-primary"id="printButton">Print</button> <!-- The print button -->
        <form id="filterForm" action="{{ route('download_pdf') }}" method="post"> <!-- Change action to the download route -->
            @csrf
            <!-- Other form elements -->
            <!-- ... -->
            <div class="text-center">
                <button class="btn btn-primary btn-eye" onclick="submitPdfForm()">View PDF</button>
                <!-- Download PDF button -->
                <button class="btn btn-primary btn-download" onclick="submitPdfdownload()">Download PDF</button>
            </div>
        </form>
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
    .active-status {
        color: green;
        font-weight: bold;


    }

    .inactive-status {
        color: red;
        font-weight: bold;


    }
    .btn-eye::before {
            content: "\f06e"; /* Eye icon */
            font-family: FontAwesome;
            margin-right: 5px;
        }
        .btn-download::before {
            content: "\f019"; /* Download icon */
            font-family: FontAwesome;
            margin-right: 5px;
        }
        /* Customize the download icon to look like a download arrow */
        .btn-eye::before {
            content: "\f06e"; /* Eye icon */
            font-family: FontAwesome;
            margin-right: 5px;
        }
        .btn-download::before {
            content: "\f063"; /* Download arrow icon */
            font-family: FontAwesome;
            margin-right: 5px;
            transform: scaleX(0.7) rotate(45deg);
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
    <h1>INVENTORY</h1>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

    <div class="header">
        <div class="row">
            <div class="col-xs-6 text-left">
                <h1> Device Inventory details</h1>
            </div>
            <div class="col-xs-6 text-right">
                <a href="{{ route('active_devices') }}" class="btn btn-primary">Active devices</a>
                <a href="{{ route('inactive_devices') }}" class="btn btn-primary">Inactive devices</a>
            </div>
        </div>
        <a href="{{ route('technical') }}" class="btn btn-primary">Enter device details</a>
        <a href="{{ route('view_update_inventory') }}" class="btn btn-primary">update device details</a>
    </div>
    <!-- Display the data in a table -->
    <table>
        <thead>
            <tr>
                {{-- <th>Customer Name</th> --}}
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
            @foreach($data as $cs_name)
                <tr>
                    <td>{{ $cs_name['device_serialno'] }}</td>
                    <td>{{ $cs_name['imei_no'] }}</td>
                    <td>{{ $cs_name['vendor'] }}</td>
                    <td>{{ $cs_name['devciesim_no'] }}</td>
                    <td>{{ $cs_name['created_at']->format('d-m-Y') }}</td>
                    <td>{{ $cs_name['created_at']->setTimezone('Asia/karachi')->format('h:i A') }}</td>
                    <td class="{{ $cs_name['status'] == 'active' ? 'active-status' : 'inactive-status' }}">
                        {{ strtoupper($cs_name['status'] ?? '-') }}
                        @if($cs_name['status'] == 'active')
        <span>&#x2713;</span> <!-- Checkmark ✓ -->
    @else
        <span>&#x274C;</span> <!-- Crossmark ❌ -->
    @endif
                      </td>
                    <!-- Add other table cells based on your data -->
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Display pagination links -->
    <div class="pagination">
        {{ $data->links() }}
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Function to handle row selection
            $('table tbody tr').click(function() {
                $('table tbody tr').removeClass('selected');
                $(this).addClass('selected');
            });

            // Function to handle printing of table data
            $('#printButton').click(function() {
                window.print();
            });
        });

        // Function to submit the PDF form
        function submitPdfForm() {
            $('#pdfForm').submit();
        }
        function submitPdfdownload(){
            $('#Pdfdownload').submit();

        }
    </script>

    <!-- Hidden form for PDF generation -->
    <form id="pdfForm" action="{{ route('pdf') }}" method="post" target="__blank" style="display: none;">
        @csrf
    </form>
    <form id="Pdfdownload" action="{{ route('download_pdf') }}" method="post" target="__blank" style="display: none;">
        @csrf
    </form>

    <!-- Add your scripts or additional content -->
</body>
</html>
