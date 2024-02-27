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
            <th>Status :</th>
            @php
                $statusColor = '';
                if ($data['renewal_status'] === 'paid') {
                    $statusColor = 'background-color: lightgreen;';
                } elseif ($data['renewal_status'] === 'unpaid') {
                    $statusColor = 'background-color: rgba(255, 0, 0, 0.3);';
                }elseif ($data['renewal_status'] === 'pending') {
                $statusColor = 'background-color: rgba(169, 169, 169, 0.3);';
                }
            @endphp
            <td style="{{ $statusColor }}">{{ $data['renewal_status'] }}</td>
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
            <th>Chassis # :</th>
            <td>{{ $data['chasis-no'] }}</td>

        </tr>

        <!-- Add other headers in a similar manner -->
    </thead>
    <tbody>
        <!-- Your table content here -->
    </tbody>
</table>

                <!-- Remarks Form -->
                <div class="row">
                    <div class="col-md-12">
                        <button class="pull-right btn-success" id="addRemarksBtn">Add Remarks</button>
                        <form class="form-horizontal remarks-form" id="remarksForm">
                            @csrf
                            <label>Add your Remarks </label>
                            <textarea type="text" class="form-control" id="remarksInput" name="remarks" placeholder="Enter remarks only" required></textarea>
                            <input type="submit" class="btn-danger" name="submita" value="Submit" />
                        <input type="hidden" id="renewalId" name="renewal_id" value="{{ $data['renewal_id'] }}">
                        </form>
                    </div>
                </div>
                <div id="successMessage" style="color: green;"></div>
                <div id="errorMessage" style="color: red;"></div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                <script>
      $(document).ready(function() {
    $('#remarksForm').submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        // Get form data
        var formData = $(this).serialize();
        console.log(formData); // Check if formData is collecting correct values

        // AJAX POST request
        $.ajax({
            url: '/renewals_remarks', // Replace with your Laravel route
            type: 'POST',
            data: formData,
            success: function(response) {
                // Handle success response
                console.log('Remarks submitted successfully:', response);
                $('#remarksInput').val(''); // Empty the value
                $('#successMessage').text('Remarks submitted successfully'); // Add this in your HTML
            },
            error: function(xhr, status, error) {
                // Handle errors
                var errorMessage = 'Error submitting remarks. Please try again.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message;
                }
                console.error('Error:', errorMessage);
                // Show error message on the screen
                $('#errorMessage').text('Error: ' + errorMessage); // Add this in your HTML
            }
        });
    });
});



                </script>

                        <!-- Remarks Table -->
                        <table class="remarks-table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Remarks</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Representative</th>
                                    <th>Amount</th>

                                </tr>
                            </thead>
                            <tbody id="remarksTableBody"> <!-- Add an ID to the table body -->
                                <!-- Data will be populated here -->
                            </tbody>
                        </table>
                       <!-- ... (Your existing HTML) ... -->

<!-- Add this script within your existing <script> tag or a new <script> tag -->
    <script>
        // ... (Your existing script code)
        $(document).ready(function () {
        $('.remarks-form').hide();

        var renewalId = $('#renewalId').val(); // Fetch renewal ID from the hidden input field
        fetchRenewalInfo(renewalId);
    });
        function fetchRenewalInfo(renewalId) {
            $.ajax({
                url: '/get_renewals_remarks', // Your Laravel route to fetch renewal information
                type: 'GET',
                data: { renewal_id: renewalId },
                success: function(response) {
                    // Clear the table body
                    $('#remarksTableBody').empty();

                    // Populate table rows with fetched data
                    $.each(response, function(index, item) {
                        var row = "<tr>" +
                            "<td>" + (index + 1) + "</td>" + // S.No
                            "<td>" + item.Remarks + "</td>" +
                            "<td>" + item.Date + "</td>" + // Assuming the date field name is 'Date'
                            "<td>" + item.Time + "</td>" + // Assuming the time field name is 'Time'
                            "<td>" + item.Representative + "</td>" +
                            "<td>" + (item.amount !== null ? "<span style='color: green; font-weight: bold;'>Paid " + item.amount + "</span>" : "-") + "</td>"

                            "</tr>";
                        $('#remarksTableBody').append(row);
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }

        $(document).ready(function () {
            $('.remarks-form').hide();
            $('button').click(function () {
                $('.remarks-form').slideDown('slow');
                var renewalId = $('#renewalId').val(); // Fetch renewal ID from the hidden input field
    fetchRenewalInfo(renewalId);
            });
        });
    </script>
</body>
</html>
