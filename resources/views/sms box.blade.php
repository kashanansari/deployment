<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS Box</title>
    <style>
        /* Your custom styles here */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .heading {
            text-align: center;
            margin-bottom: 20px;
        }
        .heading h1 {
            color: #4caf50;
            font-size: 32px;
            margin: 0;
        }
        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .search-input {
            padding: 10px;
            width: calc(70% - 20px);
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            margin-right: 10px;
        }
        .search-button {
            padding: 12px 24px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .search-button:hover {
            background-color: #43a047;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #333;
        }
        .form-group input[type="text"],
        .form-group textarea,
        .form-group select {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        .form-group textarea {
            height: 120px;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #43a047;
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
    <div class="heading">
        <h1>SMS BOX</h1>
    </div>
    <div class="search-container">
        <input type="text" class="search-input" id="search" placeholder="Enter reg no...">
        <button class="search-button" onclick="performSearch()">Search</button>
    </div>
    @if(session('error'))
    <div class="form-group">
        <p style="color: red;">{{ session('error') }}</p>
    </div>
@endif
@if(session('success'))
<div class="form-group">
    <p style="color: green;">{{ session('success') }}</p>
</div>
@endif
    <div class="container">
        <form class="sms-form"  id="smsForm" >
            @csrf
            <div class="form-group">
                <label for="custname">Client ID</label>
                <input type="text" id="custname" name="client_id" value="{{ $user->id ?? '-' }}" placeholder="Customer Name" readonly>
            </div>
            <div class="form-group">
                <label for="custname">Customer Name</label>
                <input type="text" id="custname" name="customer_name" value="{{ $user->customer_name ?? '-' }}" placeholder="Customer Name" readonly>
            </div>
            <div class="form-group">
                <label for="regnum">Registration Number</label>
                <input type="text" id="regnum" name="reg_no"value="{{ $user->registeration_no ?? '' }}" placeholder="Registration Number" readonly>
            </div>
            <div class="form-group">
                <label for="contact_number">Contact Number</label>
                <input type="text" id="contact_number" name="contact"value="{{ $user->mobileno_1 ?? '' }}" placeholder="Contact Number" readonly>
            </div>
            <div class="form-group">
                <label for="msg_type">Message Type</label>
                <select id="msg_type" name="sms_type" required>
                    <option value="">-- Select Type --</option>
                    @foreach ($sms_type as $types)
                        @php
                            $individualTypes = explode(', ', $types);
                        @endphp
                        @foreach ($individualTypes as $type)
                            <option value="{{ $type }}">{{ $type }}</option>
                        @endforeach
                    @endforeach
                </select>
            </div>

                        <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Type your message here"></textarea>
            </div>


            <div class="form-group">
                <input type="submit" name="submit_sms" value="Submit" class="btn">
            </div>
        </form>
    </div>
    <div id="successMessage" class="alert alert-success" style="display: none;"></div>
    <div id="errorMessage" class="alert alert-danger" style="display: none;"></div>
    <div id="submissionResponse" class="alert" style="display: none;"></div>

                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                              <script>
                         $('#smsForm').submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        // Get form data
        var formData = $(this).serialize();
        console.log(formData); // Check if formData is collecting correct values

        // AJAX POST request
        $.ajax({
            url: '{{ route("sms_service") }}', // Replace with your Laravel route
            type: 'POST',
            data: formData,
            success: function(response) {
                // Check if the response indicates success
                if (response.success) {
                    $('#smsForm')[0].reset();
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

    <script>
        // Your JavaScript code with the search logic
        function performSearch() {
            var searchTerm = document.getElementById("search").value;
            if (searchTerm.trim() !== "") {
                // Redirect or perform your search action here
                window.location.href = '/sms_box?serch_term=' + searchTerm;
            } else {
                alert("Please enter a valid registration number.");
            }
        }
    </script>
</body>
</html>
