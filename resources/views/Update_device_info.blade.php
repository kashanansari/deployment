<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Device Update form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<style>
   body {
            background-color: #f0f0f0; /* Light gray background */
            color: #333; /* Darker text */
        }

        .modal-content {
            background-color: #fff; /* White modal background */
            color: #333; /* Darker text */
        }

        .modal-title {
            background-color: #007bff; /* Blue header */
            color: #fff; /* White text */
            border-radius: 10px; /* Rounded corners */
        }

        .form-control {
            background-color: #f8f9fa; /* Lighter input fields */
            color: #333; /* Darker text */
        }

        .btn-primary {
            background-color: #007bff; /* Blue buttons */
            border-color: #007bff; /* Matching border */
        }
    #btnStart {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    }

    #message {
    width: 200px;
    height: 100px;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    color: #fff;
    margin: auto;
    text-align: center;
    display: none;
    }

    .large-modal-title {
    font-size: 24px;
    }

    #formModalLabel {
    font-size: 34px;
    width: 200%;
    height: 30%;
    }
            /* Style for the search bar and button */
        /* Style for the search container */
        .search-container {
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center;
        }

        /* Style for the search input */
        .search-input {
            padding: 10px; /* Increase padding */
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 250px; /* Increase width */
        }

        /* Style for the search button */
        .search-button {
            padding: 10px 15px; /* Increase padding */
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

</style>
</head>
<body>
    <div class="container">



{{-- <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true"> --}}
    <div class="modal-dialog modal-dialog-centered" role="document" style="width: 800% !important;">
        <div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title" id="formModalLabel" style="font-size: 22px; width: 400px; height: 50px; background-color: #007bff; color: #ffffff; text-align: center; padding: 10px; border-radius: 30px; box-shadow: 0 0 20px rgb(0, 0, 0);">Device Update Form</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <!-- ... (your existing HTML) ... -->


    <div class="search-container">
        <input type="text" class="search-input" id="search" placeholder="Enter reg no...">
        <button class="search-button" onclick="performSearch()">Search</button>
    </div>

    <script>
    // Add this code after your existing JavaScript code
$(document).ready(function() {
// Retrieve the state of the "Complain Logs" button from localStorage
var isComplainLogsVisible = localStorage.getItem('complainLogsVisible');

var searchButton = document.querySelector(".search-button");
var btnComplainLogs = document.getElementById("btnComplainLogs");
const urlParams = new URLSearchParams(window.location.search);
const regNo = urlParams.get("device_serial");
if (regNo) {
    document.getElementById("search").value = regNo;
}

// Check if the button should be visible or not
if (isComplainLogsVisible === 'false') {
    btnComplainLogs.style.display = "block";
}

searchButton.addEventListener("click", function() {
    var searchTerm = document.getElementById("search").value;

    if (searchTerm.trim() !== "") {
    // Redirect to the route to fetch data
    window.location.href = '/update_device_info?device_serial=' + searchTerm;

    // Show the "Complain Logs" button
    btnComplainLogs.style.display = "block";

    // Store the state of the button in localStorage
    localStorage.setItem('complainLogsVisible', 'true');
    } else {
    alert("Please enter a valid Login id.");
    }
});


});

    </script>

<!-- ... (your existing HTML) ... -->

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<form method="post" id="editEmpform" >
    @csrf
        <div class="modal-body">
        {{-- <div class="form-group row">
            <label for="complaintId" class="col-sm-6 col-form-label">Complaint ID</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="complaintId" name="complain_id" value="{{ $lastComplaintId }}"  readonly>
            </div>
        </div> --}}

        {{-- <div class="form-group row">
            <label for="clientId" class="col-sm-6 col-form-label">Client-ID</label>
            <div class="col-sm-6">
            <select class="form-control" id="clientId" name="client_id" required>
                <option value="" disabled selected>Select Client-ID</option>
                @foreach($data as $clientId)
                <option value="{{ $clientId }}">{{$clientId}}</option>
                @endforeach
            </select>
            </div>
        </div> --}}
        {{-- <th scope="row" class="larger-header">{{$user->registeration_no}}</th> --}}


        <div class="form-group row">
            <label for="lastName" class="col-sm-6 col-form-label">
                Device serial no
            </label>
            <div class="col-sm-6">
                <input type="text" name="device_serialno" class="form-control" id="email" value="{{ $device->device_serialno ?? '' }}" readonly style="Not-allowed" >
            </div>
        </div>

        <div class="form-group row">
            <label for="lastName" class="col-sm-6 col-form-label">
                ImEi no
            </label>
            <div class="col-sm-6">
                <input type="text" name="imei_no" class="form-control" id="email" value="{{ $device->imei_no ?? '' }}" required >
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-6 col-form-label">
            VEndor name
            </label>
            <div class="col-sm-6">
            <input type="text" name="vendor" class="form-control" id="email" value="{{ $device->vendor ?? '' }}" required >
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-6 col-form-label">
           Sim no
            </label>
            <div class="col-sm-6">
            <input type="text" name="devciesim_no" class="form-control" id="email" value="{{ $device->devciesim_no ?? '' }}" required >
            </div>
        </div>
            <div class="form-group row">
                <label for="email" class="col-sm-6 col-form-label">
                    Status
                </label>
                <div class="col-sm-6">
                <input type="text" name="status" class="form-control" id="email" value="{{ $device->status ?? '' }}" readonly >
                </div>
            </div>







        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
        {{-- <button id="btnComplainLogs" class="btn btn-primary" style="display: none;">Removal Logs</button> --}}

        {{-- <a href="{{ $user ? route('complainlogs', ['id' => $user->id ]) : '#' }}" class="btn btn-primary">Complaint Logs</a> --}}

        </div>
        {{-- <button id="btnComplainLogs" class="btn btn-primary" style="display: none;">Complain Logs</button> --}}

</div>
    </form>
    </div>

</div>
</div>
<div id="submissionMessage" style="display: none; text-align: center; padding: 10px; background-color: #28a745; color: white;">
    Submission Successful!
</div>

<div id="errorMessage" style="display: none; text-align: center; padding: 10px; background-color: #dc3545; color: white;">
    Submission Error. Please try again.
</div>
<!-- Your HTML code remains unchanged -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#editEmpform').submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        // Get form data
        var formData = $(this).serialize();
        console.log(formData); // Check if formData is collecting correct values

        // AJAX POST request
        $.ajax({
            url: '{{ route("update_device") }}', // Replace with your Laravel route
            type: 'POST',
            data: formData,
            success: function(response) {
                // Handle success response
                console.log('device updated successfully:', response);
                $('#submissionMessage').show().delay(3000).fadeOut(); // Show success message for 3 seconds
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.error('Error:', error);
                console.error('Response Text:', xhr.responseText);
                $('#errorMessage').show().delay(3000).fadeOut(); // Show error message for 3 seconds
            }
        });
    });
});
</script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
