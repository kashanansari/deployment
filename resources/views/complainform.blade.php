<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Complaint Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <style>
    body {
      background-color: #333;
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
        #successMessage,
#errorMessage {
    display: none;
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 1000;
    width: 300px;
    padding: 10px;
    border-radius: 5px;
    font-size: 16px;
    /* Additional styles for success message */
    background-color: #4CAF50;
    color: white;
    /* Additional styles for error message */
    background-color: #f44336;
    color: white;
}

#successMessage {
    background-color: #4CAF50;
    color: white;
}

#errorMessage {
    background-color: #f44336;
    color: white;
}
  </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6"> <!-- This div takes up half the width on the left -->
                <div style="margin-top: 30px;">
                    <a href="{{ route('home3') }}" class="btn btn-primary ml-0 mb-3">Back to Home</a>
                </div>
            </div>
            {{-- <div class="col-md-6"> <!-- This div takes up half the width on the right -->
                <div class="text-right" style="margin-top: 10px;">
                    <a href="{{ route('complainlogs') }}" class="btn btn-primary float-right mb-3">Complain logs</a>
                </div>
            </div>
        </div>
    </div> --}}

    <button id="btnStart" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#formModal">Let's start creating a complaint!</button>
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Popper.js and Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Add the script to show the form modal directly when the page loads
    $(document).ready(function() {
        $('#formModal').modal('show');
    });

    // The rest of your JavaScript code...
</script>
<div id="message">
  Thank you for filling in the awesome form.
</div>


{{-- <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true"> --}}
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="formModalLabel" style="font-size: 22px; width: 200px; height: 50px; background-color: #007bff; color: #ffffff; text-align: center; padding: 10px; border-radius: 30px; box-shadow: 0 0 20px rgb(0, 0, 0);">Complaint Form</h3>
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
  const regNo = urlParams.get("serch_term");
  if (regNo) {
    document.getElementById("search").value = regNo;
  }

  // Check if the button should be visible or not
  if (isComplainLogsVisible === 'true') {
    btnComplainLogs.style.display = "block";
  }

  searchButton.addEventListener("click", function() {
    var searchTerm = document.getElementById("search").value;

    if (searchTerm.trim() !== "") {
      // Redirect to the route to fetch data
      window.location.href = '/reguserdata?serch_term=' + searchTerm;

      // Show the "Complain Logs" button
      btnComplainLogs.style.display = "block";

      // Store the state of the button in localStorage
      localStorage.setItem('complainLogsVisible', 'true');
    } else {
      alert("Please enter a valid registration number.");
    }
  });

  // Handle the "Complain Logs" button click event
  btnComplainLogs.addEventListener("click", function() {
    var searchTerm = document.getElementById("search").value;
    window.location.href = '/complainLogs/' + searchTerm;
  });
});

      </script>

<!-- ... (your existing HTML) ... -->

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

      <form method="post" id="complainForm">
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
            <label for="complaintId" class="col-sm-6 col-form-label">Complaint ID</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="complaintId" name="complain_id" value="{{ $lastComplaintId  }}"  readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="lastName" class="col-sm-6 col-form-label">
                Customer Name
            </label>
            <div class="col-sm-6">
                <input type="text" name="customer_name" class="form-control" id="email" value="{{ $user->customer_name ?? '' }}" required readonly style="cursor:not-allowed">
            </div>
        </div>

          <div class="form-group row">
            <label for="email" class="col-sm-6 col-form-label">
              Registration Number
            </label>
            <div class="col-sm-6">
              <input type="text" name="reg_no" class="form-control" id="email" value="{{ $user->registeration_no ?? '' }}" required readonly style="cursor:not-allowed">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-6 col-form-label">
             Client-id
            </label>
            <div class="col-sm-6">
              <input type="text" name="client_id" class="form-control" id="email" value="{{ $user->id ?? '' }}" required readonly style="cursor:not-allowed">
            </div>
          </div>
          <div class="form-group row">
            <label for="awesomeness" class="col-sm-6 col-form-label">
                Nature of Complaint
            </label>
            <div class="col-sm-6">
                <select class="form-control" name="nature_of_complain" id="natureSelect" onchange="showHideCustomFields() required">
                    <option disabled selected>Select Nature</option>
                    <option value="SMS issue">SMS issue</option>
                    <option value="Webtrack issue">Webtrack issue</option>
                    <option value="Wrong Location">Wrong Location</option>
                    <option value="N/R(no report)">N/R(no report)</option>
                    <option value="Your Opinion">Your Opinion</option>
                </select>
                <input type="text" name="custom_nature" id="customNatureInput" class="form-control" placeholder="Enter your own nature" style="display: none;">
                <input type="text" name="last_location" id="lastLocationInput" class="form-control" placeholder="Enter Last Location" style="display: none;">
                <input type="text" name="Date" id="dateInput" class="form-control" placeholder="Enter Date" style="display: none;" onblur="validateDate(this);">
                <input type="text" name="Time" id="timeInput" class="form-control" placeholder="Enter Time" style="display: none;" onblur="validateTime(this);">
            </div>
        <script>

        //     function validateDate(input) {
        //     // Regular expression for a valid date format (MM/DD/YYYY)
        //     var datePattern = /^\d{2}\/\d{2}\/\d{4}$/;
        //     if (!datePattern.test(input.value)) {
        //         alert("Please enter a valid date in MM/DD/YYYY format.");
        //         input.value = ""; // Clear the input field
        //     }
        // }
        // function validateTime(input) {
        //     // Regular expression for a valid time format (hh:mm am/pm)
        //     var timePattern = /^(1[0-2]|0?[1-9]):[0-5][0-9] (am|pm)$/i;
        //     if (!timePattern.test(input.value)) {
        //         alert("Please enter a valid time in hh:mm am/pm format.");
        //         input.value = ""; // Clear the input field
        //     }
        // }
            var natureSelect = document.getElementById("natureSelect");
            var customNatureInput = document.getElementById("customNatureInput");

            natureSelect.addEventListener("change", function() {
                if (natureSelect.value === "Your Opinion") {
                    customNatureInput.style.display = "block";
                } else {
                    customNatureInput.style.display = "none";
                }
            });
        </script>
         <script>
            function showHideCustomFields() {
                var selectElement = document.getElementById("natureSelect");
                var customNatureInput = document.getElementById("customNatureInput");
                var lastLocationInput = document.getElementById("lastLocationInput");
                var dateInput = document.getElementById("dateInput");
                var timeInput = document.getElementById("timeInput");

                if (selectElement.value === "N/R(no report)" || selectElement.value === "Wrong Location") {
                    customNatureInput.style.display = "none";
                    lastLocationInput.style.display = "block";
                    dateInput.style.display = "block";
                    timeInput.style.display = "block";
                } else {
                    customNatureInput.style.display = "none";
                    lastLocationInput.style.display = "none";
                    dateInput.style.display = "none";
                    timeInput.style.display = "none";
                }
            }
        </script>

          <div class="form-group row">
            <label for ="lastName" class="col-sm-6 col-form-label">
              Remarks
            </label>
            <div class="col-sm-6">
              <input type="text" name="remarks" class="form-control" id="lastName" placeholder="remarks here..." required style="width: 220px; height: 150px;">
            </div>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="confirmed" value="human" id="awesomeCheck" required>
            <label class="form-check-label" for="awesomeCheck">
              I confirm that I am a human.
            </label>
          </div>
          <div id="error-message" class="text-danger" style="display: none;">
            Please check this box before submitting.
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
          <button id="btnComplainLogs" class="btn btn-primary" style="display: none;">Complain Logs</button>

          {{-- <a href="{{ $user ? route('complainlogs', ['id' => $user->id ]) : '#' }}" class="btn btn-primary">Complaint Logs</a> --}}

        </div>
        {{-- <button id="btnComplainLogs" class="btn btn-primary" style="display: none;">Complain Logs</button> --}}

</div>
      </form>
    </div>
  </div>
</div>
<div id="successMessage" class="alert alert-success" style="display: none;"></div>
<div id="errorMessage" class="alert alert-danger" style="display: none;"></div>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                          <script>
                     $('#complainForm').submit(function(event) {
    event.preventDefault(); // Prevent default form submission

    // Get form data
    var formData = $(this).serialize();
    console.log(formData); // Check if formData is collecting correct values

    // AJAX POST request
    $.ajax({
        url: '{{ route("createcomplain") }}', // Replace with your Laravel route
        type: 'POST',
        data: formData,
        success: function(response) {
            // Check if the response indicates success
            if (response.success) {
                $('#complainForm')[0].reset();
                // Display success message
                $('#successMessage').text('Complaint submitted successfully').fadeIn().delay(3000).fadeOut();
            } else {
                // Display validation errors
                var errors = response.message;
                var errorText = '';
                for (var key in errors) {
                    errorText += errors[key][0] + '<br>';
                }
                $('#errorMessage').html(errorText).fadeIn().delay(5000).fadeOut();
            }
        },
        error: function(xhr, status, error) {
            // Handle errors
            console.error('XHR Status:', xhr.status);
            console.error('Error:', error);
            console.error('Response Text:', xhr.responseText);

            // Show error message on the screen
            $('#errorMessage').text('Error submitting. Please try again.').fadeIn().delay(3000).fadeOut();
        }
    });
});


                            </script>


<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="successModalLabel">Success</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Successfully created!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
    // ...

    // Function to handle form submission
    function onSubmitForm(e) {
    var natureSelect = document.getElementById("natureSelect");
    var customNatureInput = document.getElementById("customNatureInput");

    if (natureSelect.value === "Select Nature") {
        alert("Please select a Nature of Complaint.");
        e.preventDefault(); // Prevent form submission if there's an error
    } else if (natureSelect.value === "Your Opinion" && customNatureInput.value.trim() === "") {
        alert("Please enter your own nature of complaint.");
        e.preventDefault(); // Prevent form submission if there's an error
    } else {
        // Continue with form submission
    }
}

</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
