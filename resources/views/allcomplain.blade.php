<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Navigation Bars</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar-brand.centered {
            text-align: center;
            font-style: italic;
            text-decoration: underline;
            font-size: 40px; /* Adjust the size as needed */
            font-family: "Times New Roman", Times, serif; /* Change the font-family as desired */
            width: 100%;
        }
        .styled-heading {
            font-size: 30px; /* Adjust the size as needed */
            font-weight: bold; /* Make the text bold */
            font-family: "Times New Roman", Times, serif; /* Change the font-family as desired */
            color: #000000; /* Change the color as desired */
        }
        .customer-item {
            padding: 10px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            background-color: #fff;
            border-radius: 5px;
        }
        .customer-number {
            font-weight: bold;
            margin-right: 5px;
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
    .customer-item {
        padding: 10px;
        border: 1px solid #ccc;
        margin-bottom: 10px;
        background-color: #fff;
        border-radius: 5px;
        font-size: 18px; /* Adjust the font size as needed */
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <!-- Navbar content -->
    </nav>

    <nav class="navbar navbar-dark bg-primary">
        <!-- Navbar content -->
    </nav>

    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <!-- Navbar content -->
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand centered" href="#"> Complains Pending</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
   <div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2 class="styled-heading">Pending List</h2>
            <ul>
                @php
                    // Calculate the starting serial number for the current page
                    $startingSerial = ($data->currentPage() - 1) * $data->perPage() + 1;
                @endphp
                @forelse($data as $key => $customer)
                    <li class="customer-item">
                        <span class="customer-number">{{ $startingSerial + $key }}.</span>
                        <a href="{{ route('singlecomplain', ['complain_id' => $customer['complain_id']]) }}">{{ $customer['customer_name'] }}</a> STATUS: {{ $customer['Status'] }}
                    </li>
                @empty
                    <li class="customer-item">No pending complaints found</li>
                @endforelse
            </ul>
        </div>
        <div class="col-md-6">
            <h2 class="styled-heading">Resolved Complaints</h2>
            <ul>
                @php
                    // Calculate the starting serial number for the current page
                    $startingSerial = ($data_1->currentPage() - 1) * $data_1->perPage() + 1;
                @endphp
                @forelse($data_1 as $key => $customer)
                    <li class="customer-item">
                        <span class="customer-number">{{ $startingSerial + $key }}.</span>
                        <a href="{{ route('singlecomplain', ['complain_id' => $customer['complain_id']]) }}">{{ $customer['customer_name'] }}</a> STATUS: {{ $customer['Status'] }}
                    </li>
                @empty
                    <li class="customer-item">No resolved complaints found</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>

    <div class="pagination">
        {{ $data->links() }}
    </div>
</body>
</html>
