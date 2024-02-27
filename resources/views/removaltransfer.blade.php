<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Removal form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <style>
     body {
        background-color: #333;
    }
    .modal-content {
    /* width: 800%; Set your desired width here */
    min-height: 1000px; /* Set your desired minimum height here */
}
.form-group {
            margin-bottom: 0px; /* Decrease the margin between form groups */
        }

        .form-control {
            padding: 0.25rem 0.1rem; /* Decrease padding to make the input boxes smaller */
        }


        /* .form-group {
        margin-bottom: 10px; /* Reduce the margin between form groups */


    .form-group label {
        font-size: 14px; /* Reduce the label font size */
    }

    /* .form-control {
        padding: 5px; /* Reduce padding inside form fields */
        font-size: 12px; /* Reduce the font size of the input fields */


    .form-check-label {
        font-size: 12px; /* Reduce the font size of the checkbox label */
    }

    .modal-footer {
        justify-content: center; /* Center the form buttons */
    }

    #btnComplainLogs {
        margin-left: 10px; /* Add margin between buttons */
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
        h2 {
        font-size: 20px; /* Adjust the font size as needed */
        text-decoration: underline; /* Add an underline */
        font-style: italic; /* Apply italic style */
        font-weight: bold; /* Apply bold font weight */
        font-family: "Arial", sans-serif; /* Change font family to Arial or your desired font */
        color: #000000; /* Change text color (blue in this example) */
    }
    .notification {
    display: none;
    position: fixed;
    top: 20px;
    right: 20px;
    background-color: white;
    color: #333;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    z-index: 9999;
  }

  </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6"> <!-- This div takes up half the width on the left -->
                <div style="margin-top: 30px;">
                    <a href="{{ route('removal') }}" class="btn btn-primary ml-0 mb-3">Back </a>
                </div>
            </div>

        </div>
    </div>

            {{-- <div class="col-md-6"> <!-- This div takes up half the width on the right -->
                <div class="text-right" style="margin-top: 10px;">
                    <a href="{{ route('complainlogs') }}" class="btn btn-primary float-right mb-3">Complain logs</a>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <button id="btnStart" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#formModal">Let's start creating a removal!</button>
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">

<script>
    // Add the script to show the form modal directly when the page loads
    $(document).ready(function() {
        $('#formModal').modal('show');
    });

    // The rest of your JavaScript code...
</script>
<div id="message">
  Thank you for filling in the awesome form.
</div> --}}


{{-- <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true"> --}}
    <div class="modal-dialog modal-dialog-centered" role="document" style="width: 800% !important;">
        <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="formModalLabel" style="font-size: 22px; width: 200px; height: 50px; background-color: #007bff; color: #ffffff; text-align: center; padding: 10px; border-radius: 30px; box-shadow: 0 0 20px rgb(0, 0, 0);">Removal Transfer </h3>
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
  const regNo = urlParams.get("reg_no");
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
      window.location.href = '/dataa?reg_no=' + searchTerm;

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

      <form method="post" id="removalTransfer">
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


          <div class="row">
            <div class="col-md-6">

                <h2>Old info</h2>

                {{-- <form> --}}
                    <div class="form-group">
                        <input type="hidden" class="form-control"  name="client_id" value="{{ $user->id ?? '' }}" id="oldName">
                    </div>
                    <div class="form-group">
                        <label for="oldName">Customer Name:</label>
                        <input type="text" class="form-control"  value="{{ $user->customer_name ?? '' }}" id="oldName">
                    </div>

                    <div class="form-group">
                        <label for="oldName"> Reg-no#:</label>
                        <input type="text" class="form-control"  name="old_reg" value="{{ $user->registeration_no ?? '' }}" id="oldName">
                    </div>
                    <div class="form-group">
                        <label for="oldName"> Chasis-no#:</label>
                        <input type="text" class="form-control"  name="old_chasis"  value="{{ $user->chasis_no ?? '' }}" id="oldName">
                    </div>
                    <div class="form-group">
                        <label for="oldName">Engine-no#:</label>
                        <input type="text" class="form-control"  name="old_eng" value="{{ $user->engine_no ?? '' }}" id="oldName">
                    </div>
                    <div class="form-group">
                        <label for="oldName">make#:</label>
                        <input type="text" class="form-control"  name="old_make" value="{{ $user->make ?? '' }}" id="oldName">
                    </div>
                    <div class="form-group">
                        <label for="oldName">model#:</label>
                        <input type="text" class="form-control"  name="old_model" value="{{ $user->model ?? '' }}" id="oldName">
                    </div>
                    <div class="form-group">
                        <label for="oldName">CC:</label>
                        <input type="text" class="form-control"  name="old_cc" value="{{ $user->CC ?? '' }}" id="oldName">
                    </div>
                    <div class="form-group">
                        <label for="oldName">Year:</label>
                        <input type="text" class="form-control"  name="old_year" value="{{ $user->year ?? '' }}" id="oldName">
                    </div>
                    <div class="form-group">
                        <label for="oldName">Color#:</label>
                        <input type="text" class="form-control"  name="old_color" value="{{ $user->color ?? '' }}" id="oldName">
                    </div>
                    <div class="form-group">
                        <label for="oldName">Transmission#:</label>
                        <input type="text" class="form-control"  name="old_trans" value="{{ $user->transmission ?? '' }}" id="oldName">
                    </div>
                    <div class="form-group">
                        <label for="oldName">Mobilizer#:</label>
                        <input type="text" class="form-control"  name="old_mob" value="{{ $technical->mobilizer?? '' }}" id="oldName">
                    </div>
                    <div class="form-group">
                        <label for="oldName"> Old device#:</label>
                        <input type="text" class="form-control"  name="old_device"  value="{{ $device->device ?? '' }}" id="oldName">
                    </div>

                    <!-- Your old form fields -->
                {{-- </form> --}}
            </div>
            <div class="col-md-6">
                <h2>New info</h2>
                {{-- <form> --}}
                    <div class="form-group">
                        <label for="newName">Customer Name:</label>
                        <input type="text" class="form-control"  name="customer_name" value="{{ $user->customer_name ?? '' }}" id="newName">
                    </div>
                    <div class="form-group">
                        <label for="newName">Reg-no#:</label>
                        <input type="text" class="form-control" name="new_reg"    id="newName" required>
                    </div>

                    <div class="form-group">
                        <label for="newName">Chasis-no#:</label>
                        <input type="text" class="form-control"  name="new_chasis" id="newName" required>
                    </div>
                    <div class="form-group">
                        <label for="newName">Engine-no#:</label>
                        <input type="text" class="form-control"  name="new_eng" id="newName" required>
                    </div>
                    <div class="form-group">
                        <label for="newName">make#:</label>
                        <input type="text" class="form-control"  name="new_make" id="newName" required>
                    </div>
                    <div class="form-group">
                        <label for="newName">model#:</label>
                        <input type="text" class="form-control" name="new_model" id="newName" required>
                    </div>
                    <div class="form-group">
                        <label for="newName">CC#:</label>
                        <input type="text" class="form-control"  name="new_cc"id="newName" required>
                    </div>
                    <div class="form-group">
                        <label for="newName">Year#:</label>
                        <input type="text" class="form-control"  name="new_year" id="newName" required>
                    </div>
                    <div class="form-group">
                        <label for="newName">Color#:</label>
                        <input type="text" class="form-control"  name="new_color" id="newName" required>
                    </div>
                    <div class="form-group">
                        <label for="newName">Tranmission#:</label>
                        <input type="text" class="form-control"  name="new_trans" id="newName" required>
                    </div>
                    <div class="form-group">
                        <label for="newName">Mobilizer#:</label>
                        <div>
                            <label>
                                <input type="radio" name="new_mob" value="yes" required> Yes
                            </label>
                            <label>
                                <input type="radio" name="new_mob" value="no" required> No
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="deviceSerialNo">New device</label>
                                    <input type="text" name="new_device" id="deviceSerialNo" class="form-control" placeholder="Enter Device Serial No" required>
                                    <ul id="suggestion-list" class="list-group"></ul>
                                </div>
                                <script>
                                    // Get references to HTML elements
                                    const deviceSerialNoInput = document.getElementById('deviceSerialNo');
                                    const suggestionList = document.getElementById('suggestion-list');
                                    const addedSuggestions = [];

                                    // Listen for input changes
                                    deviceSerialNoInput.addEventListener('input', function() {
                                        const searchTerm = deviceSerialNoInput.value.trim();

                                        // Clear the suggestion list and the list of added suggestions
                                        suggestionList.innerHTML = '';
                                        addedSuggestions.length = 0;

                                        if (searchTerm.length === 0) {
                                            return;
                                        }

                                        // Send an AJAX request to fetch device serial numbers
                                        fetch(`/getdevices?searchTerm=${searchTerm}`)
                                            .then(response => response.json())
                                            .then(data => {
                                                data.forEach(device => {
                                                    if (!addedSuggestions.includes(device.device_serialno)) {
                                                        const li = document.createElement('li');
                                                        li.textContent = device.device_serialno;
                                                        li.className = 'list-group-item'; // Add Bootstrap class
                                                        suggestionList.appendChild(li);

                                                        addedSuggestions.push(device.device_serialno);

                                                        // Handle suggestion list item click
                                                        li.addEventListener('click', function() {
                                                            deviceSerialNoInput.value = device.device_serialno;
                                                            suggestionList.innerHTML = ''; // Clear the suggestion list
                                                        });
                                                    }
                                                });
                                            })
                                            .catch(error => {
                                                console.error('Error:', error);
                                            });
                                    });
                                </script>


                    <!-- Your new form fields -->
                {{-- </form> --}}
            </div>
        </div>

        <div class="form-group">
            <label for="newName">Remarks:</label>
            <input type="text" class="form-control"  name="remarks" id="newName">
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
<div id="notification" class="notification">
    <span id="notificationMessage"></span>
    <span class="closebtn" onclick="closeNotification()">&times;</span>
</div>

<div id="notification" class="notification">
    <span id="notificationMessage"></span>
    <span class="closebtn" onclick="closeNotification()">&times;</span>
</div>

<div id="successMessage" style="color: green;"></div>
<div id="errorMessage" style="color: red;"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    jQuery.noConflict();

jQuery(document).ready(function($) {


$('#removalTransfer').submit(function(event) {
    event.preventDefault(); // Prevent default form submission
    var formData = new FormData(this);

    $.ajax({
        url: '{{ route("creatertransfer") }}',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            console.log('Status updated successfully:', response);
            showNotification('Data submitted successfully', 'success');
            // Reset form fields if needed
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
            var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "An error occurred"; // Get the error message
            showNotification(errorMessage, 'error'); // Display the error message
        }
    });

});

});

    function showSuccess(message) {
    var successMessage = $('#successMessage');
    successMessage.text(message);
    successMessage.slideDown().delay(5000).slideUp();
}

function showError(message) {
    var errorMessage = $('#errorMessage');
    errorMessage.text(message);
    errorMessage.slideDown().delay(5000).slideUp();
}
// Function to show the notification box
function showNotification(message, type) {
    var notification = document.getElementById("notification");
    var notificationMessage = document.getElementById("notificationMessage");

    notificationMessage.innerText = message;

    if (type === 'success') {
      notification.style.backgroundColor = '#55acee'; // Facebook blue color
    } else if (type === 'error') {
      notification.style.backgroundColor = '#dd4b39'; // Facebook red color
    }

    notification.style.display = 'block';
    setTimeout(function() {
      notification.style.display = 'none';
    }, 5000); // Hide after 5 seconds
  }

  function closeNotification() {
    var notification = document.getElementById("notification");
    notification.style.display = 'none';
  }

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

var form = document.getElementById("formAwesome");
form.addEventListener("submit", onSubmitForm);

function onSubmitForm(e) {
  e.preventDefault();
  $('#formModal').modal('hide');
  $('#btnStart').hide();
  $('#message').show();

  // Simulate a delay (e.g., 2 seconds) to show the success modal
  setTimeout(function () {
    $('#successModal').modal('show');
  }, 2000); // 2 seconds
}
</script>
<script>
    // Get references to HTML elements
    const deviceSerialNoInput = document.getElementById('deviceSerialNo');
    const suggestionList = document.getElementById('suggestion-list');
    const addedSuggestions = [];

    // Listen for input changes
    deviceSerialNoInput.addEventListener('input', function() {
        const searchTerm = deviceSerialNoInput.value.trim();

        // Clear the suggestion list and the list of added suggestions
        suggestionList.innerHTML = '';
        addedSuggestions.length = 0;

        if (searchTerm.length === 0) {
            return;
        }

        // Send an AJAX request to fetch device serial numbers
        fetch(`/getdevices?searchTerm=${searchTerm}`)
            .then(response => response.json())
            .then(data => {
                data.forEach(device => {
                    if (!addedSuggestions.includes(device.device_serialno)) {
                        const li = document.createElement('li');
                        li.textContent = device.device_serialno;
                        li.className = 'list-group-item'; // Add Bootstrap class
                        suggestionList.appendChild(li);

                        addedSuggestions.push(device.device_serialno);

                        // Handle suggestion list item click
                        li.addEventListener('click', function() {
                            deviceSerialNoInput.value = device.device_serialno;
                            suggestionList.innerHTML = ''; // Clear the suggestion list
                        });
                    }
                });
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
