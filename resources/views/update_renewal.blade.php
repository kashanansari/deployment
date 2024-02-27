<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>MagmaCC</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="../favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="../css/theme-default.css"/>
    <!-- EOF CSS INCLUDE -->

    <style>
        /* Additional CSS styles */
        .panel-heading {
            background-color: #bf1f1f;
            color: black;
        }
        .panel-title {
            font-size: 24px;
        }
        .panel-body {
            padding: 20px;
        }
        .remarks-form {
            width: 50%;
            margin-left: 20px;
            border-radius: 20px;
        }
        .remarks-form textarea {
            margin-left: 130px;
            margin-top: -30px;
        }
        .remarks-form input {
            margin-left: 820px;
            margin-top: -80px;
        }
        .remarks-table {
            border: 8px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        .remarks-table th, .remarks-table td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        .remarks-table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><strong><u>Renewal Information</u></strong></h3>
            </div>
            <div class="panel-body">
                <!-- Renewal Information Table -->
               <!-- Renewal Information Table -->
<!-- Renewal Information Table -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Renewal-id :</th>
            <td style="color: gray;">{{ $data['renewal_id'] }}</td>
        </tr>


        <tr>
            <th>CLient-id :</th>
            <td>{{$data ['client_id'] }}</td>
        </tr>

        <tr>
            <th>Segment :</th>
            <td>{{ $data['segment'] }}</td>
        </tr>
        <tr>
            <th>Customer Name :</th>
            <td>{{ $data['customer_name'] }}</td>


        </tr>
        <tr>
            <th>Contact :</th>
            <td>{{ $data['contact']}}</td>

        </tr>



        <tr>
            <th>Tracker Charges: </th>
            <td>{{ $data['tracker-charges'] }}</td>

        </tr>
        <tr>
            <th>Registration # :</th>
            <td>{{ $data['Reg-no'] }}</td>

        </tr>
        <tr>
            <th>Sales Person:  </th>
            <td>{{ $data['sales-person'] }}</td>

        </tr>
        <tr>
            <th>Date of Renewal :</th>
            <td>{{ $data['renewal-date'] }}</td>

        </tr>
        <tr>
            <th>Month:</th>
            <td>{{ $data['month'] }}</td>

        </tr>
        <tr>
            <th> City : </th>
            <td>{{ $data['city'] }}</td>

        </tr>
        <tr>
            <th>  Date of Installation :</th>
            <td>{{ $data['date-of-installation'] }}</td>

        </tr>
        <th>  Date of Registeration :</th>
        <td>{{ $data['date-of-registeration'] }}</td>

    </tr>
        <tr>
            <th>Renewal Amount# :</th>
            <td>{{ $data['renewal_charges'] }}</td>

        </tr>
        <tr>
            <th>Engine # :  </th>
            <td>{{ $data['engine'] }}</td>

        </tr>
        <tr>
            <th>Model :</th>
            <td>{{ $data['model'] }}</td>


        </tr>
        <tr>
            <th>Reference # :</th>
            <td>{{ $data['reference']  }}</td>

        </tr>
        <tr>
            <th>Representative # :</th>
            <td>{{ $data['reference']  }}</td>

        </tr>
        <tr>
            <th>Chassis # :</th>
            <td>{{ $data['chasis-no'] }}</td>

        </tr>

        <!-- Add other headers in a similar manner -->
    </thead>
    <tbody>
        <!-- Your table content here -->
    </tbody>
</table>


<form id="remarksForm" class="remarks-form" action="{{ route('update_status_renewal') }}" method="POST">
    @csrf
    <input type="hidden" id="renewalId" name="renewal_id" value="{{ $data['renewal_id'] }}">
    <div class="form-group">
        <label for="statusCell">Status:</label>
        <select id="statusCell" name="status" class="form-control">
            <option value="paid" @if($data['renewal_status'] == 'paid') selected @endif>Paid</option>
            <option value="unpaid" @if($data['renewal_status'] == 'unpaid') selected @endif>Unpaid</option>
            <!-- Add more options if needed -->
        </select>
    </div>

    <div id="successMessage" style="color: green;"></div>
    <div id="errorMessage" style="color: red;"></div>
    <input type="submit" id="submitButton" class="btn btn-primary" value="Submit">
</form>
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$('#remarksForm').submit(function(event) {
event.preventDefault(); // Prevent default form submission
var formData = $(this).serialize();

$.ajax({
url: '{{ route("update_status_renewal") }}',
type: 'POST',
data: formData,
success: function(response) {
    console.log('Status updated successfully:', response);
    $('#successMessage').text('Status updated successfully');
},
error: function(xhr, status, error) {
    console.error('Error:', error);
    $('#errorMessage').text('Error updating status. Please try again.');
}
});
});
</script>
</body>
</html>
