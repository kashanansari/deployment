<!DOCTYPE html>
<html>
<head>
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
        .reg-no {
        font-weight: bold;
        color: #FF5733; /* Change the color to your desired style */
        margin-left: 10px; /* Add some spacing to the left */
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
                    @forelse($data as $key => $customer)
                    <li class="customer-item">
                        <span class="customer-number">{{ $key + 1 }}.</span>
                        <a href="{{ route('redo',$customer['id']) }}">{{ $customer['customer_name'] }}</a>
                        <span class="reg-no">Reg no: {{ $customer['registeration_no'] }}</span>
                      </li>
                @empty
                    <li class="customer-item">No pending complaints found</li>
                @endforelse



                </ul>
            </div>
            {{-- <div class="col-md-6">
                <h2 class="styled-heading">Resolved Complaints</h2>
                <ul>
                    @forelse($data_1 as $key => $customer)
                        <li class="customer-item">
                            <span class="customer-number">{{ $key + 1 }}.</span>
                            <a href="{{ route('singlecomplain', ['complain_id' => $customer['complain_id']]) }}">{{ $customer['customer_name'] }}</a> STATUS: {{ $customer['Status'] }}
                        </li>
                    @empty
                        <li class="customer-item">No resolved complaints found</li>
                    @endforelse
                </ul>
            </div> --}}
        </div>
    </div>
</body>
</html>
