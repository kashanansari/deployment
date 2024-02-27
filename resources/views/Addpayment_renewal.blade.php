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
        .status-alert {
    background-color: rgba(255, 255, 0, 0.3);
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
            $statusText = $data['renewal_status'];
            if ($statusText === 'paid') {
                $statusColor = 'background-color: lightgreen;';
            } elseif ($statusText === 'unpaid') {
                $statusColor = 'background-color: rgba(255, 0, 0, 0.3);';
            } elseif ($statusText === 'bad debts') {
                $statusColor = 'background-color: rgba(255, 255, 0, 0.3);';
            } elseif ($statusText === 'pending') {
                $statusColor = 'background-color: rgba(169, 169, 169, 0.3);';
            } elseif ($statusText === 'removed') {
                $statusColor = 'background-color: rgba(102, 153, 255, 0.3);'; // Soft blue shade
                $statusText = '<span style="color: red;">&#10060;</span> Removed'; // ✕ symbol
            }
        @endphp
        <td style="{{ $statusColor }}">{!! $statusText !!}</td>
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


<div class="col-md-12">

    <form class="form-horizontal" id="remarksForm">
        @csrf
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>Add Payment</strong></h3>
            <ul class="panel-controls">
                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
        </div>
        <div class="panel-body">

        </div>
        <div class="panel-body">

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Status</label>
                        <div class="col-md-6 col-xs-12">
                            <!-- Include an ID attribute for the select element -->
                            <select class="form-control select" name="status" id="statusSelect" >
                                <option value="unpaid">Unpaid</option>
                                <option value="paid">Paid</option>
                                <option value="removed">Removed</option>
                                <option value="bad debts">Bad Debts</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Renewal Amount</label>
                        <div class="col-md-6 col-xs-12">
                        <input type="text" style="color: black;"  value="{{ $data['renewal_charges'] }}" class="form-control" readonly>

                        </div>
                    </div>
                </div>


        <div class="col-md-6">
                <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Submitted Amount</label>
                        <div class="col-md-6 col-xs-12">
                        <input type="text" style="color: black;" name="recieved_renewal" class="form-control" required>

                        </div>
                    </div>
                    <div class="form-group" id="remarksField" style="display: none;">
                        <label class="col-md-3 col-xs-12 control-label">Remarks</label>
                        <div class="col-md-6 col-xs-12">
                            <textarea class="form-control" type="text" cols="" rows="3" name="remarks" ></textarea>
                        </div>
                    </div>
                    <!-- ... Other form fields ... -->
                </div>

                <script>
                    $(document).ready(function() {
                        $('#statusSelect').change(function() {
                            var selectedValue = $(this).val();
                            if (selectedValue === 'bad debts') {
                                $('#remarksField').show(); // Show remarks field if 'bad debts' is selected
                            } else {
                                $('#remarksField').hide(); // Hide remarks field for other options
                            }
                        });
                    });
                </script>

<input type="hidden" id="renewalId" name="renewal_id" value="{{ $data['renewal_id'] }}">

            <input type="submit" name="submit11" value="Submit" class="btn btn-primary pull-right" />
        </div>
        </div>

                </div>
            </div>
        </div>
    </div>
    </form>

    <div id="successMessage" style="color: green;"></div>
    <div id="errorMessage" style="color: red;"></div>
  <!-- Your HTML code remains unchanged -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
    $(document).ready(function() {
        var status = '{{ $data['renewal_status'] }}'; // Get the status value
        if (status === 'removed') {
            $('.panel.panel-default').hide(); // Hide the entire payment section
        } else {
            $('.panel.panel-default').show(); // Show the payment section for other statuses
        }

        $('#statusSelect').change(function() {
            var selectedValue = $(this).val();
            if (selectedValue === 'bad debts') {
                $('#remarksField').show(); // Show remarks field if 'bad debts' is selected
            } else {
                $('#remarksField').hide(); // Hide remarks field for other options
            }
        });

        $('#remarksForm').submit(function(event) {
            event.preventDefault(); // Prevent default form submission

            // Get form data
            var formData = $(this).serialize();
            console.log(formData); // Check if formData is collecting correct values

            // AJAX POST request
            $.ajax({
                url: '{{ route("add_payment") }}', // Replace with your Laravel route
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Handle success response
                    console.log('Remarks submitted successfully:', response);
                    $('#remarksField textarea').val(''); // Empty the textarea
                    $('#successMessage').text('Remarks submitted successfully'); // Add this in your HTML
                },
                error: function(xhr, status, error) {
                    // Handle errors
                    console.error('XHR Status:', xhr.status);
                    console.error('Error:', error);
                    console.error('Response Text:', xhr.responseText);
                    // Show error message on the screen
                    $('#errorMessage').text('Error submitting remarks. Please try again.'); // Add this in your HTML
                }
            });
        });
    });
    </script>



</div>
</div>
<!-- Rest of your HTML code remains unchanged -->


</div>
<!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTENT -->
</div>

                </div>

</div>
</div>
</div>
</body>
</html>
