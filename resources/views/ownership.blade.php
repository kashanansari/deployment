<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DataLog form</title>
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
    #successMessage, #errorMessage {
    display: none;
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 1000;
    width: 300px;
    padding: 10px;
    border-radius: 5px;
    font-size: 16px;
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
                    <a href="{{ route('viewowner') }}" class="btn btn-primary ml-0 mb-3">Back </a>
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
        <h3 class="modal-title" id="formModalLabel" style="font-size: 22px; background-color: #007bff; color: #ffffff; text-align: center; padding: 10px; border-radius: 30px; box-shadow: 0 0 20px rgb(0, 0, 0); display: inline-block;">Enter Data Log</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <!-- ... (your existing HTML) ... -->


    <div class="search-container">
        <input type="text" class="search-input" id="search" placeholder="Enter reg no...">
        <button class="search-button" onclick="performSearch()">Search</button>
      </div>
      @if(isset($error))
      <div class="alert alert-danger" role="alert">
          {{ $error }}
      </div>
  @endif


      <script>

        // Add this code after your existing JavaScript code
        $(document).ready(function () {
        // Get references to elements
        const searchInput = document.getElementById("search");

        // Add event listener for keydown event
        searchInput.addEventListener("keydown", function (event) {
            if (event.keyCode === 13) { // Check if Enter key is pressed
                performSearch(); // Call the performSearch function when Enter is pressed
            }
        });

        // Rest of your existing code...
    });
        $(document).ready(function () {
            var searchButton = document.querySelector(".search-button");
            const btnDataLogs = document.getElementById("btnDataLogs");
            var searchInput = document.getElementById("search");

            var urlParams = new URLSearchParams(window.location.search);
            var searched = urlParams.get("searched");

            // Check if the button should be visible or not
            if (searched === 'true' && localStorage.getItem('dataLogsVisible') === 'true') {
                btnDataLogs.style.display = "block";
                // Set the value of the search input from the URL parameter
                searchInput.value = urlParams.get("search_term");
            }

            searchButton.addEventListener("click", function () {
                var searchTerm = searchInput.value;

                if (searchTerm.trim() !== "") {
                    // Redirect to the route to fetch data
                    window.location.href = '/viewowner?search_term=' + searchTerm + '&searched=true';
                } else {
                    alert("Please enter a valid registration number.");
                }
            });

            btnDataLogs.addEventListener("click", function () {
                var searchTerm = searchInput.value;
                window.location.href = '/datalogs/' + searchTerm;
            });
        });
    </script>

<!-- ... (your existing HTML) ... -->


      <form method="post" id="datalogForm">
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

          <h2 class="text-center">Data Entry Form</h2>

          <div class="row">
            <div class="col-md-6">



                    <div class="form-group">
                        <input type="hidden" class="form-control"  name="client_id" value="{{ $user->id?? '' }}" id="oldName">
                    </div>
                    <div class="form-group">
                        <label for="natureSelect">Nature of Alert</label>
                        <select class="form-control" name="nature" id="natureSelect" onchange="enableEdit(this)" required>
                            <option value="" selected disabled>Select an option</option>
                            <option value="National Highway">National Highway</option>
                            <option value="Battery Alerts">Battery Alerts</option>
                            <option value="No Go Area">No Go Area</option>
                        </select>
                        <input type="text" name="editable_nature" class="form-control" id="editableNature" style="display: none;" placeholder="Enter/Edit your option">
                    </div>

                    <script>
                        function enableEdit(select) {
                            var selectedOption = select.value;

                            // If the selected option is not the placeholder
                            if (selectedOption !== '') {
                                // Hide the select and display the input field
                                document.getElementById('natureSelect').style.display = 'none';
                                document.getElementById('editableNature').style.display = 'block';
                                document.getElementById('editableNature').value = selectedOption;
                            } else {
                                // If the placeholder is selected, hide the input and display the select
                                document.getElementById('natureSelect').style.display = 'block';
                                document.getElementById('editableNature').style.display = 'none';
                                document.getElementById('editableNature').value = '';
                            }
                        }
                    </script>



                    <div class="form-group">
                        <label for="oldName">Customer Name:</label>
                        <input type="text" class="form-control" name="customer_name" value="{{ $user->customer_name ?? '' }}" id="oldName" readonly >
                    </div>

                    <div class="form-group">
                        <label for="oldName"> Registeration-no#:</label>
                        <input type="text" class="form-control"  name="reg_no" value="{{ $user->registeration_no ?? '' }}" id="oldName" readonly>
                    </div>
                    {{-- <div class="form-group">
                        <label for="oldName">Representative</label>
                        <select class="form-control" name="representative" id="oldName" required>
                            <option value="Muhammad Noushad" style="font-size: 12px;">Muhammad Noushad</option>
                            <option value="Niaz Uddin" style="font-size: 12px;">Niaz Uddin</option>
                            <option value="Nazis hAli" style="font-size: 12px;">Nazish Ali</option>
                            <option value="Shazil Javed" style="font-size: 12px;">Shazil Javed</option>
                        </select>
                    </div> --}}





                    <!-- Your old form fields -->
            </div>
            <div class="col-md-6">
                {{-- <h2>New info</h2> --}}
                <div class="form-group">
                    <label for="oldName"> Contact-No#:</label>
                    <input type="text" class="form-control"  name="contact_no"   id="oldName" required>
                </div>
                    <div class="form-group">
                        <label for="newName">Contact Person</label>
                        <input type="text" class="form-control"  name="contact_person" id="newName" required>
                    </div>
                    <div class="form-group">
                        <label for="newName">Remarks</label>
                        <input type="textarea" class="form-control" name="remarks" placeholder=" remarks only..." id="newName" required>
                    </div>





                    <!-- Your new form fields -->
            </div>
        </div>



<!-- Add a custom class to your modal dialog -->



                            </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
                                    <button id="btnDataLogs" class="btn btn-primary" style="display: none;">Data Logs</button>

                                    {{-- <a href="{{ $user ? route('complainlogs', ['id' => $user->id ]) : '#' }}" class="btn btn-primary">Complaint Logs</a> --}}

                                  </div>

                                </div>
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
                       $('#datalogForm').submit(function(event) {
    event.preventDefault(); // Prevent default form submission

    // Get form data
    var formData = $(this).serialize();
    console.log(formData); // Check if formData is collecting correct values

    // AJAX POST request
    $.ajax({
        url: '{{ route("create_datalogs") }}', // Replace with your Laravel route
        type: 'POST',
        data: formData,
        success: function(response) {
            $('#datalogForm')[0].reset();

            // Display success message
            $('#successMessage').text('Datalogs created successfully').fadeIn().delay(3000).fadeOut();
        },
        error: function(xhr, status, error) {
            // Handle errors
            console.error('XHR Status:', xhr.status);
            console.error('Error:', error);
            console.error('Response Text:', xhr.responseText);

            // Show error message on the screen
            $('#errorMessage').text('Error submitting. Please try again.').fadeIn().delay(3000).fadeOut();        }
    });
});

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
