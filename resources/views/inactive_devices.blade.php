<!DOCTYPE html>
<html>
<head>
    <!-- Include your CSS stylesheets or CDN links here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Inactive Devices</title>
    <a href="{{ route('view_all_device_inventory') }}" class="btn btn-primary">Back</a> <!-- Back button -->
    <button  class="btn btn-primary" id="printButton">Print</button>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: flex-start;
        }

        .device-box {
            background-color: #fff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border-radius: 6px;
            padding: 20px;
            margin: 15px;
            width: calc(30% - 30px);
            min-width: 250px;
        }

        .device-box p {
            margin: 8px 0;
            color: #333;
        }

        .device-box p:first-child {
            font-weight: bold;
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
     /* New styles for logo heading */
     .logo-heading {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo-heading h1 {
            font-family: 'Arial', sans-serif;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: bold;
            background-color: #f8f8f8;
            padding: 20px 0;
            border-bottom: 2px solid #ccc;
            border-top: 2px solid #ccc;
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="logo-heading">
    <h1>Inactive Devices</h1>
    </div>
    <div class="container">
        @foreach($inactiveDevices as $device)
            <div class="device-box">
                <p>Device Serial No: {{ $device->device_serialno }}</p>
                <p>IMEI No: {{ $device->imei_no }}</p>
                <p>Vendor: {{ $device->vendor }}</p>
                <p>SIM No: {{ $device->devciesim_no }}</p>
                <p>Created At: {{ $device->created_at }}</p>
                <p>Status: {{ $device->status }}</p>
            </div>
        @endforeach
    </div>
    <div class="pagination">
        {{ $inactiveDevices->links() }}
    </div>
    <script>
        // Function to handle printing of the entire page
        document.getElementById('printButton').addEventListener('click', function() {
            window.print();
        });
    </script>
</body>
</html>
