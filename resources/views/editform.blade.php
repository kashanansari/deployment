<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Responsive Registration Form</title>

    <!-- Google Font Import - Poppins -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
    </style>
    <style>
        /* CSS code for the "small-button" class */
        .small-button {
            padding: 1px 5px; /* Adjust the padding to control button size */
    font-size: 12px; /* Adjust the font size to make the button smaller */
    margin-right: 1px; /* Add margin to create space between the buttons */
}
    </style>

     <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f3f3f3;
        }

        .container {
            min-height: 500vh; /* Adjust the height as needed */
        }

        .container form {
            height: 100%; /* Set the form to 100% height */
        }

        .container {
            position: relative;
            max-width: 1320px;
            width: 150%;
            border-radius: 6px;
            padding: 30px;
            margin: 0 15px;
            background-color: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .container header {
            position: relative;
            font-size: 20px;
            font-weight: 600;
            color: #333;
        }

        .container header::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px;
            height: 3px;
            width: 27px;
            border-radius: 8px;
            background-color: #052364;
        }

        .container form {
            position: relative;
            margin-top: 16px;
            min-height: 490px;
            background-color: #fff;
            overflow: hidden;
        }

        /* Add this CSS to increase the form height */
        /* .container form {
            min-height: 1100px; /* Increase the form height as needed */
            /* height: auto; /* Allow the form to grow beyond the fixed height if content exceeds it */
          /*  overflow-y: auto; /* Enable vertical scrolling if needed */
        /*}

        .container form {
            height: 390px; /* Set a fixed height for the form */
            /* overflow-y: auto; /* Enable vertical scrolling */

        }

        .container form .form {
            position: absolute;
            background-color: #fff;
            transition: 0.3s ease;
        }

        .container form .form.second {
            opacity: 0;
            pointer-events: none;
            transform: translateX(100%);
        }

        form.secActive .form.second {
            opacity: 1;
            pointer-events: auto;
            transform: translateX(0);
        }

        form.secActive .form.first {
            opacity: 0;
            pointer-events: none;
            transform: translateX(-100%);
        }

        .container form .title {
            display: block;
            margin-bottom: 8px;
            font-size: 22px;
            font-weight: 500;
            margin: 6px 0;
            color: #333;
        }

        .container form .fields {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .container .scrollable {
            max-height: 690px;
            overflow-y: auto;
        }

        form .fields .input-field {
            display: flex;
            width: calc(100% / 3 - 15px);
            flex-direction: column;
            margin: 4px 0;
        }

        .input-field label {
            font-size: 12px;
            font-weight: 500;
            color: #2e2e2e;
        }

        .input-field input, select {
            outline: none;
            font-size: 14px;
            font-weight: 400;
            color: #333;
            border-radius: 5px;
            border: 1px solid #aaa;
            padding: 0 15px;
            height: 42px;
            margin: 8px 0;
        }

        .input-field input:focus,
        .input-field select:focus {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
        }

        .input-field select,
        .input-field input[type="date"] {
            color: #707070;
        }

        .input-field input[type="date"]:valid {
            color: #333;
        }

        .container form button,
        .backBtn {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            max-width: 150px;
            width: 100%;
            border: 2px solid #ffffff;
            outline: 4px solid #ff5733; /* Use your desired outline color and style */
            color: #fff;
            border-radius: 5px;
            margin: 25px 0;
            background-color: #000208;
            transition: all 0.3s linear;
            cursor: pointer;        }
            .backBtn:hover {
    background-color: #f14040; /* Change to your desired light red color */
}
        .container form .btnText {
            font-size: 14px;
            font-weight: 400;
        }

        form button:hover {
            background-color: #e61d1d;
        }

        form button i,
        form .backBtn i {
            margin: 0 6px;
        }

        form .backBtn i {
            transform: rotate(180deg);
        }

        form .buttons {
            display: flex;
            align-items: center;
        }

        form .buttons button,
        .backBtn {
            margin-right: 14px;
        }

        @media (max-width: 750px) {
            .container form {
                overflow-y: scroll;
            }

            .container form::-webkit-scrollbar {
                display: none;
            }

            form .fields .input-field {
                width: calc(100% / 2 - 15px);
            }
        }

        @media (max-width: 550px) {
            form .fields .input-field {
                width: 100%;
            }
        }
    </style>
    <style>
        #mobileNumberError {
            color: red;
            font-size: 12px; /* Adjust the font size to your preference */
        }
    </style>

    <style>
        /* Add your CSS styles here */
        .input-field label {
            font-size: 15px; /* Adjust the font size as needed */
        }
    </style>
   <style>
    /* Add your CSS styles here */
    .input-field label {
        font-size: 15px; /* Adjust the font size as needed */
    }

    .input-field label:hover {
         text-decoration: underline;
        cursor: pointer;
    }

    /* .input-field input[type="radio"] {
        display: none;
    } */
</style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
    /* Add your CSS styles here */
    .input-field .reset-button {
        font-size: 12px; /* Adjust the font size as needed */
        padding: 10px 15px; /* Adjust the padding to control button size */
        margin-right: 15px; /* Add margin to create space between the buttons */
        width: 50px; /* Adjust the button's width */
        height: 30px; /* Adjust the button's height */
    }
</style>
<style>
    /* Add your CSS styles here */
    .input-field .small-button {
        font-size: 12px; /* Adjust the font size as needed */
        padding: 10px 15px; /* Adjust the padding to control button size */
        margin-right: 15px; /* Add margin to create space between the buttons */
        width: 50px; /* Adjust the button's width */
        height: 30px; /* Adjust the button's height */
    }
</style>
<style>
    /* Add your CSS styles here */
    .small-button {
        padding: 5px 10px; /* Adjust the padding to control button size */
        font-size: 12px; /* Adjust the font size */
    }
    #addMobile, #removeMobile {
        margin: 0 4px; /* Reduce the margin to decrease space between the buttons */
    }
</style>


<style>
    .input-field {
        display: flex;
        align-items: center;
    }

    .radio-label {
        display: flex;
        align-items: center;
        margin-right: 5px;
    }

    .radio-button {
        width: 20px;
        height: 20px;
        margin-right: 2px;
    }

    .checkbox-label {
        font-size: 16px;
    }

    .checkbox {
        width: 15px;
        height: 15px;
    }
</style>

<style>
/* Add this CSS to align the "Submit" button to the right */
/* Add this CSS to position the "Submit" button at the bottom-left corner */
/* Add this CSS to position the "Submit" button below the Remarks field */
/* Add this CSS to position the "Submit" button at the bottom of the page */
/* Add this CSS to center the "Submit" button */
/* Add this CSS to center the "Submit" button at the bottom of the page */
/* Add this CSS to center the "Submit" button */
/* Add this CSS to position the "Submit" button at the bottom of the page */
/* Updated CSS for the smaller footer */
.submit-container {
    position: fixed;
    bottom: 5px;
    left: 0;
    width: 100%; /* Full width */
    height: 75px; /* Adjust the height as needed */
    text-align: center;
    padding: 0px; /* Adjust the padding as needed */
    background-color: #fff; /* Optional: Add a background color to make the button stand out */
}


</style>
<style>
    /* Add this style to move the "Color" input field to the left */
    .input-field label[for="expiryYear"] {
        margin-top: 5px; /* You can adjust this value as needed */
    }

    .input-field label[for="color"] {
        scroll-margin-left: 10px; /* Adjust this value to move the "Color" input field to the left */
    }
</style>
<script>
    function formatMobileNumber(input) {
        // Remove any non-numeric characters
        var numericInput = input.value.replace(/\D/g, '');

        // Format the input as XXXX-XXXXXXX
        if (numericInput.length > 4) {
            numericInput = numericInput.substring(0, 4) + '-' + numericInput.substring(4);
        }

        // Update the input field with the formatted value
        input.value = numericInput;
    }

    function validateMobileNumber(input) {
        // Ensure that the input only contains numbers
        var numericInput = input.value.replace(/\D/g, '');

        if (numericInput.length > 11) {
            alert("Mobile number should have at most 11 digits.");
            input.value = ''; // Clear the input if it exceeds 11 digits
        }
    }
</script>
<script>
    function restrictInput(event) {
        var input = event.key;
        if (!/^[0-9]$/.test(input)) {
            event.preventDefault();
            alert("Please enter only numbers between 0 and 9.");
        }
    }
</script>
<script>
    function validateMobileNumber(input) {
        // Remove any non-digit characters except hyphen
        let formattedNumber = input.value.replace(/[^0-9-]/g, '');

        // Ensure that the hyphen (-) is placed correctly
        if (/^\d{4}-\d{6}$/.test(formattedNumber)) {
            input.value = formattedNumber;
            document.getElementById('mobileNumberError').textContent = ''; // Clear error message
        } else {
            document.getElementById('mobileNumberError').textContent = 'Invalid format, should be XXXX-XXXXXXX';
        }
    }
</script>
<style>
  .header-container .registration-header {
    font-size: 24px;
    text-decoration: underline;
}

</style>

<style>
.large-input {
    width: 200px;
    height: 200px;
}

</style>
</head>

<body>
    <div class="container">
        <header class="registration-header">Ownership Transfer Form </header>


        <div class="buttons">
            <div class="backBtn" onclick="goBack()">
                <i class="uil uil-navigator"></i>
                <span class="btnText">Back</span>
            </div>
        </div>

        <script>
            function goBack() {
                // You can use window.history to navigate back in the browser's history
                window.history.back();
            }
        </script>

<form action="{{ route('updateall', ['id' => $id]) }}" method="POST">
    @csrf
    @method('PUT')
            <div class="form first">
                <div class="details personal">
                    <div class="details family">
                        <span class="title" style="color: red; display: flex;
                        justify-content: center;
                        align-items: center;
                        width: 1200px; /* Adjust the width as needed */
                        height: 50px; /* Adjust the height as needed */
                        border: 4px solid rgba(0, 0, 0, 0.726);
                        color: red;
                        text-decoration: underline  ;
                        font-weight: bold;
                        font-style: italic;">User Details</span>


                    <div class="fields">
                        <div class="input-field">
                            <label>Client ID</label>
                            <input type="text" name="client_id" id="clientID" value="{{$data->id }}" required  readonly style="cursor: not-allowed;" >
                        </div>
                                                               <script>
                            function validateInput(inputField) {
                                var userInput = inputField.value;
                                if (/[^0-9]/.test(userInput)) {
                                    alert("Please enter only numbers between 0 and 9.");
                                    inputField.value = "";
                                }
                            }
                        </script>



               {{-- <script>
const express = require('express');
const app = express();
const bodyParser = require('body-parser');

// Middleware to parse form data
app.use(bodyParser.urlencoded({ extended: true }));

// Simulated database
const database = [];

app.post('/submitForm', (req, res) => {
  // Check if the database is empty
  if (database.length === 0) {
    // If there are no records, set the client ID to 1
    database.push({ client_id: 1 });
  } else {
    // If there are records, find the highest client ID and increment it
    const maxClientID = Math.max(...database.map(entry => entry.client_id));
    const newClientID = maxClientID + 1;
    database.push({ client_id: newClientID });
  }

  // Handle the form submission and save the client ID in your database

  // You can access the client ID from the database for this submission
  const clientID = database[database.length - 1].client_id;

  // Return a response to the client if needed
  res.send(`Form submitted successfully. Client ID: ${clientID}`);
});

app.listen(3000, () => {
  console.log('Server is running on port 3000');
});


                </script> --}}
                <div class="input-field">
                    <label>Customer's Name</label>
                    <input type="text" name="customer_name" value="{{ $data->customer_name }}" required>
                </div>
                        <div class="input-field">
                            <label>Father Name</label>
                            <input type="text" name="father_name" value= "{{$data->father_name }}" required >
                        </div>


                        {{-- <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" placeholder="Enter mobile number" required>
                        </div> --}}

                        {{-- <div class="input-field">
                            <label>Martial Status</label>
                            <select name="marital_status"  required>
                                <option disabled selected>Select martial Status</option>
                                <option>married</option>
                                <option>unmarried</option>
                            </select>
                        </div> --}}

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="address" value= "{{$data->address }}" required class="large-input">
                        </div>
                        <div class="input-field">
                            <label>Telephone Residence </label>
                            <input type="text" name="telephone_residence"  value="{{$data->telephone_residence }} "required>
                        </div>
                        <div class="input-field">
                            <label>Mobile Numbers-1</label>
                            <div id="mobileNumbers">
                                <div class="mobile-number">
                                    <input
                                    type="tel"
                                    name="mobileno_1"
                                    value="{{$data->mobileno_1 }}"
                                    oninput="formatMobileNumber(this)"
                                    onblur="validateMobileNumber(this)"
                                    required
                                >
                                {{-- <span id="mobileNumberError" style="color: red;"></span> --}}
                                </div>
                            </div>
                        </div>
                            <div class="input-field">
                                <label>Mobile Numbers-2</label>
                                <div id="mobileNumbers">
                                    <div class="mobile-number">
                                        <input
                                        type="tel"
                                        name="mobileno_2"
                                        value="{{$data->mobileno_2 }}"
                                        oninput="formatMobileNumber(this)"
                                        onblur="validateMobileNumber(this)"
                                        required
                                    >
                                    {{-- <span id="mobileNumberError" style="color: red;"></span> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="input-field">
                                <label>Mobile Numbers-3</label>
                                <div id="mobileNumbers">
                                    <div class="mobile-number">
                                        <input
                                        type="tel"
                                        name="mobileno_3"
                                        value="{{$data->mobileno_3 }}"
                                        oninput="formatMobileNumber(this)"
                                        onblur="validateMobileNumber(this)"
                                        required
                                    >
                                    {{-- <span id="mobileNumberError" style="color: red;"></span> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="input-field">
                                <label>Mobile Numbers-4</label>
                                <div id="mobileNumbers">
                                    <div class="mobile-number">
                                        <input
                                        type="tel"
                                        name="mobileno_4"
                                        value="{{$data->mobileno_4 }}"
                                        oninput="formatMobileNumber(this)"
                                        onblur="validateMobileNumber(this)"
                                        required
                                    >
                                    {{-- <span id="mobileNumberError" style="color: red;"></span> --}}
                                    </div>
                                </div>
                            </div>



                          <div class="input-field">
                            <label>NTN</label>
                            <input type="text" name="ntn" placeholder="Enter your ntn"  value="{{$data->ntn }}"required >
                        </div>
                        <div class="input-field">
                            <label>CNIC NO</label>
                            <input type="text" name="cnic" id="cnic" value="{{$data->cnic }}" required >
                         </div>


                         <div class="input-field">
                            <label>Pirmary User Name</label>
                            <input type="text" name="primaryuser_name"  value="{{$data->primaryuser_name }}"required>
                         </div>
                         <div class="input-field">
                            <label>Primary user contact-1
                            </label>
                            <div id="mobileNumbers">
                                <div class="mobile-number">
                                    <input
                                        type="tel"
                                        name="primaryuser_con1"
                                        value="{{$data->primaryuser_name }}
                                        oninput="formatMobileNumber(this)"
                                        onblur="validateMobileNumber(this)"
                                        required
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="input-field">
                            <label>Primary user contact-2
                            </label>
                            <div id="mobileNumbers">
                                <div class="mobile-number">
                                    <input
                                        type="tel"
                                        name="primaryuser_con2"
                                        value="{{$data->primaryuser_con2 }}"
                                        oninput="formatMobileNumber(this)"
                                        onblur="validateMobileNumber(this)"
                                    >
                                </div>
                            </div>
                        </div>                        <div class="input-field">
                            <label> Primary user CNIC NO</label>
                            <input type="text"name="primaryuser_cnic" id="primarycnic"  value="{{$data->primaryuser_cnic }}" required>
                         </div>
                         <div class="input-field">
                            <label>Secondary User Name</label>
                            <input type="text" name="seconadryuser_name"   value="{{$data->seconadryuser_name }}" required>
                         </div>
                         <div class="input-field">
                            <label>Secondary User contact-1

                            </label>
                            <div id="mobileNumbers">
                                <div class="mobile-number">
                                    <input
                                        type="tel"
                                        name="secondaryuser_con1"
                                        value="{{$data->secondaryuser_con1 }}"
                                        oninput="formatMobileNumber(this)"
                                        onblur="validateMobileNumber(this)"
                                        required
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="input-field">
                            <label>Secondary User contact-2

                            </label>
                            <div id="mobileNumbers">
                                <div class="mobile-number">
                                    <input
                                        type="tel"
                                        name="secondaryuser_con2"
                                        value="{{$data->secondaryuser_con2 }}"
                                        oninput="formatMobileNumber(this)"
                                        onblur="validateMobileNumber(this)"
                                    >
                                </div>
                            </div>
                        </div>
                         <div class="input-field">
                            <label>Relationship with Secondary User</label>
                            <input type="text" name="relationship"   value="{{$data->relationship }}" required >
                         </div>
                         {{-- <div class="input-field">
                            <label>Registration Number</label>
                            <input type="text"  placeholder="enter secondary user name" required>
                         </div> --}}

                    </div>
                </div>


                <div class="details ID">
                    <div class="details family">
                        <span class="title" style="color: red; display: flex;
                        justify-content: center;
                        align-items: center;
                        width: 1200px; /* Adjust the width as needed */
                        height: 50px; /* Adjust the height as needed */
                        border: 4px solid rgba(0, 0, 0, 0.726);
                        color: red;
                        text-decoration: underline  ;
                        font-weight: bold;
                        font-style: italic;">Product Details</span>


                    <div class="fields">
                        <div class="input-field">
                            <label>Insurance Partner </label>
                            <input type="text" name="insurance_partner"value="{{$data->insurance_partner }}" required>
                        </div>
                        <div class="input-field">
                            <label class="radio-label">VAS:
                                <input type="radio" name="vas" value="Yes" id="vasYes" required class="radio-button"
                                    @if ($data->vas === 'Yes') checked @endif>
                                <label for="vasYes" class="radio-label">Yes</label>
                                <input type="radio" name="vas" value="No" id="vasNo" class="radio-button"
                                    @if ($data->vas === 'No') checked @endif>
                                <label for="vasNo" class="radio-label">No</label>
                            </label>
                        </div>

                        <div class="checkboxes" style="display: @if ($data->vas === 'Yes') block; @else none; @endif">
                            <label class="checkbox-label">Choose options:</label>
                            <div class="checkbox-group">
                                <input type="checkbox" name="vas_options[]" value="Location on Call" id="locationOnCall" class="checkbox"
                                       @if (in_array('Location on Call', explode(',', $data->vas_options))) checked @endif>
                                <label for="locationOnCall" class="checkbox-label">Location on Call</label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" name="vas_options[]" value="Ignition On" id="ignitionOn" class="checkbox"
                                       @if (in_array('Ignition On', explode(',', $data->vas_options))) checked @endif>
                                <label for="ignitionOn" class="checkbox-label">Ignition On</label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" name="vas_options[]" value="Ignition Off" id="ignitionOff" class ="checkbox"
                                       @if (in_array('Ignition Off', explode(',', $data->vas_options))) checked @endif>
                                <label for="ignitionOff" class="checkbox-label">Ignition Off</label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" name="vas_options[]" value="Webtrack" id="Webtrack" class="checkbox"
                                       @if (in_array('Webtrack', explode(',', $data->vas_options))) checked @endif>
                                <label for="Webtrack" class="checkbox-label">Webtrack</label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" name="vas_options[]" value="Geofence Alerts" id="GeofenceAlerts" class="checkbox"
                                       @if (in_array('Geofence Alerts', explode(',', $data->vas_options))) checked @endif>
                                <label for="GeofenceAlerts" class="checkbox-label">Geofence Alerts</label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" name="vas_options[]" value="Mobile App" id="MobileApp" class="checkbox"
                                       @if (in_array('Mobile App', explode(',', $data->vas_options))) checked @endif>
                                <label for="MobileApp" class="checkbox-label">Mobile App</label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" name="vas_options[]" value="Over Speed" id="OverSpeed" class="checkbox"
                                       @if (in_array('Over Speed', explode(',', $data->vas_options))) checked @endif>
                                <label for="OverSpeed" class="checkbox-label">Over Speed</label>
                            </div>
                            <!-- Add more checkboxes as needed -->
                        </div>

                        <script>
                            const vasRadioYes = document.getElementById('vasYes');
                            const vasRadioNo = document.getElementById('vasNo');
                            const checkboxContainer = document.querySelector('.checkboxes');
                            const vasOptionsCheckboxes = document.querySelectorAll('input[name="vas_options[]"]');

                            vasRadioYes.addEventListener('change', function () {
                                if (vasRadioYes.checked) {
                                    checkboxContainer.style.display = 'block';
                                }
                            });

                            vasRadioNo.addEventListener('change', function () {
                                if (vasRadioNo.checked) {
                                    checkboxContainer.style.display = 'none';
                                    // Uncheck all vas_options checkboxes
                                    vasOptionsCheckboxes.forEach(function (checkbox) {
                                        checkbox.checked = false;
                                    });
                                }
                            });
                        </script>


{{--
                <button class="nextBtn">
                    <span class="btnText">Next</span>
                    <i class="uil uil-navigator"></i>
                </button>
            </div> -- --}}



            {{-- <div class="form second"> --}}
                <div class="details address">
                    <div class="details family">
                        <span class="title" style="color: red; display: flex;
                        justify-content: center;
                        align-items: center;
                        width: 1200px; /* Adjust the width as needed */
                        height: 50px; /* Adjust the height as needed */
                        border: 4px solid rgba(0, 0, 0, 0.726);
                        color: red;
                        text-decoration: underline  ;
                        font-weight: bold;
                        font-style: italic;">Payment Details</span>



             {{-- <div class="buttons">
                <div class="backBtn" onclick="goBack()">
                    <i class="uil uil-navigator"></i>
                    <span class="btnText">Back</span>
                </div>
            </div>

            <script>
                function goBack() {
                    // You can use window.history to navigate back in the browser's history
                    window.history.back();
                }
            </script> --}}


                    <div class="fields">
                        <div class="input-field">
                            <label>Segment</label>
                            <select name="segment" required>
                                <option disabled selected>Choose any one</option>
                                <option value="Cash" @if ($data->segment === 'Cash') selected @endif>Cash</option>
                                <option value="Cash-Rental" @if ($data->segment === 'Cash-Rental') selected @endif>Cash-Rental</option>
                                <option value="Demo" @if ($data->segment === 'Demo') selected @endif>Demo</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Demo Duration</label>
                            <input type="text" name="demo_duration" value="{{$data->demo_duration }}" required>
                        </div>

                        <div class="input-field">
                            <label>Tracker Charges</label>
                            <input type="text" name="tracker_charges" value="{{$data->tracker_charges }}" required>
                        </div>
                        <div class="input-field">
                            <label>Date of Installation</label>
                            <input type="date" name="date_of_installation" value="{{$data->date_of_installation }}" required >
                        </div>
                        <div class="input-field">
                            <label>Internal Commission</label>
                            <input type="text" name="int_comission" value="{{$data->int_comission }}" >
                        </div>

                        <div class="input-field">
                            <label>External Commission</label>
                            <input type="text" name="ext_comission" value="{{$data->ext_comission }}" >
                        </div>

                        <div class="input-field">
                            <label>Discount ( if approved by CEO)
                            </label>
                            <input type="text" name="discount" value="{{$data->discount }}" required >
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <div class="details family">
                        <span class="title" style="color: red; display: flex;
                        justify-content: center;
                        align-items: center;
                        width: 1200px; /* Adjust the width as needed */
                        height: 50px; /* Adjust the height as needed */
                        border: 4px solid rgba(0, 0, 0, 0.726);
                        color: red;
                        text-decoration: underline  ;
                        font-weight: bold;
                        font-style: italic;">Other Details</span>


                    <div class="fields">
                        <div class="input-field">
                            <label>Campaign Point Allocation</label>
                            <input type="text" name="campaign_point" value="{{$data->campaign_point }}" required>
                        </div>

                        <div class="input-field">
                            <label>Dealership</label>
                            <input type="text" name="dealership"value="{{$data->dealership }}" required>
                        </div>

                        <div class="input-field">
                            <label>Dealer Name</label>
                            <input type="text" name="dealer_name" value="{{$data->dealer_name }}" required>
                        </div>

                        <div class="input-field">
                            <label>Sales Person </label>
                            <input type="text" name="sales_person" value="{{$data->sales_person }}" required>
                        </div>

                        <div class="input-field">
                            <label>Installation Location</label>
                            <input type="text" name="installation_loc" value="{{$data->installation_loc }}" required>
                        </div>

                        <div class="input-field">
                            <label>Contact person</label>
                            <div id="mobileNumbers">
                                <div class="mobile-number">
                                    <input
                                        type="tel"
                                        name="conatct_person"
                                        value="{{$data->conatct_person }}"
                                        oninput="formatMobileNumber(this)"
                                        onblur="validateMobileNumber(this)"
                                        required
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="input-field">
                            <label>Remarks</label>
                            <input type="text" name="remarks" value="{{$data->remarks }}" required style="width: 300px; height: 100px;" > <!-- Adjust the width and height as needed -->
                        </div>

{{-- OTHER DETAILS --}}
@if(!empty($data_1))

<div class="details family">
    <div class="details family">
        <span class="title" style="color: red; display: flex;
        justify-content: center;
        align-items: center;
        width: 1200px; /* Adjust the width as needed */
        height: 50px; /* Adjust the height as needed */
        border: 4px solid rgba(0, 0, 0, 0.726);
        color: red;
        text-decoration: underline  ;
        font-weight: bold;
        font-style: italic;"> Technical Details</span>


    <div class="fields">
        <div class="input-field">
            <label>  Vendor</label>
            <input type="text" name="vendor_name" value="{{ $data_1->vendor_name ?? ''}}" required >
        </div>


            <div class="input-field">
                <label for="deviceSerialNo">Device ID</label>
                <input type="text" name="device_id" id="deviceSerialNo" class="form-control" value="{{ $data_1->device_id ?? ''}}" required>
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



        <div class="input-field">
            <label>IMEI Number</label>
            <input type="text" name="IMEI_no"  value="{{$data_1->IMEI_no ?? ''}}" required >
        </div>

        <div class="input-field">
            <label>GSM Number </label>
            <input type="text" name="Gsm_no"  value="{{$data_1->Gsm_no ?? ''}}" required >
        </div>

        <div class="input-field">
            <label>TAVL mang. ID</label>
            <input type="text" name="Tavl_mang_id"  value="{{$data_1->Tavl_mang_id ?? ''}}" required >
        </div>

        <div class="input-field">
            <label>Designated Technician</label>
            <div id="mobileNumbers">
                <div class="mobile-number">
                    <input
                        type="tel"
                        name="technician_name"
                        value="{{$data_1->technician_name ?? ''}}"
                        oninput="formatMobileNumber(this)"
                        onblur="validateMobileNumber(this)"
                        required
                    >
                </div>
            </div>
        </div>
        <div class="input-field">
            <label>Sim Activated</label>
            <input type="text" name="sim"  value="{{$data_1->sim ?? ''}}" required > <!-- Adjust the width and height as needed -->
        </div>
        <div class="input-field">
            <label> GPS check</label>
            <input type="text" name="Gps_check" value="{{$data_1->Gps_check ?? ''}}" required > <!-- Adjust the width and height as needed -->
        </div>
        <div class="input-field">
            <label>Mobilizer</label>
            <input type="text" name="mobilizer"  value="{{$data_1->mobilizer ?? ''}}" required > <!-- Adjust the width and height as needed -->
        </div>
        <div class="input-field">
            <label>Operational Status</label>
            <input type="text" name="operational_status"  value="{{$data_1->operational_status ?? ''}}" required > <!-- Adjust the width and height as needed -->
        </div>
        <div class="input-field">
            <label>WebTrack Login ID</label>
            <input type="text" name="webtrack_id"  value="{{$data_1->webtrack_id ?? ''}}" required  > <!-- Adjust the width and height as needed -->
        </div>
        <div class="input-field">
            <label>WebTrack Password</label>
            <input type="text" name="webtrack_pass"  value="{{$data_1->webtrack_pass ?? '' }}" required > <!-- Adjust the width and height as needed -->
        </div>
        <div class="input-field">
            <label> Ignition Alerts</label>
            <input type="text" name="ignition_alerts"  value="{{$data_1->ignition_alerts ?? ''}}" required > <!-- Adjust the width and height as needed -->
        </div>
        <div class="input-field">
            <label>Over speed Alerts</label>
            <input type="text" name="overspeed_alerts"  value="{{$data_1->overspeed_alerts?? '' }}" required > <!-- Adjust the width and height as needed -->
        </div>
        <div class="input-field">
            <label>Geo fence Alerts</label>
            <input type="text" name="geo_fence_alerts"  value="{{$data_1->geo_fence_alerts ?? '' }}" required > <!-- Adjust the width and height as needed -->
        </div>
        <div class="input-field">
            <label>Contact#1</label>
            <input type="text" name="contact_1"  value="{{$data_1->contact_1 ?? ''}}" required > <!-- Adjust the width and height as needed -->
        </div>
        <div class="input-field">
            <label>Contact#2</label>
            <input type="text" name="contact_2"  value="{{$data_1->contact_2 ?? ''}}" required > <!-- Adjust the width and height as needed -->
        </div>
        <div class="input-field">
            <label>Contact#3</label>
            <input type="text" name="contact_3"  value="{{$data_1->contact_3?? ''}}"required > <!-- Adjust the width and height as needed -->
        </div>
        <div class="input-field">
            <label>Additional No</label>
            <input type="text" name="additional_contact"  value="{{$data_1->additional_contact?? ''}}"required > <!-- Adjust the width and height as needed -->
        </div>
        @endif


{{-- SECURITY DETAILS --}}
@if(!empty($data_2))
<div class="details family">
    <div class="details family">
        <span class="title" style="color: red; display: flex;
        justify-content: center;
        align-items: center;
        width: 1200px; /* Adjust the width as needed */
        height: 50px; /* Adjust the height as needed */
        border: 4px solid rgba(0, 0, 0, 0.726);
        color: red;
        text-decoration: underline  ;
        font-weight: bold;
        font-style: italic;">Security Details</span>


    <div class="fields">
        <div class="input-field">
            <label>Customer Email</label>
            <input type="text" name="customer_email"  value="{{$data_2->customer_email?? ''}}" required >
        </div>

        <div class="input-field">
            <label>Emergency Password </label>
            <input type="text" name="emergency_pass" value="{{$data_2->emergency_pass  ?? ''}}" required >
        </div>

        <div class="input-field">
            <label>Emergency Person</label>
            <input type="text" name="emergency_person" value="{{$data_2->emergency_person ?? ''}}" required >
        </div>

        <div class="input-field">
            <label>Security Question </label>
            <input type="text" name="security_ques"  value="{{$data_2->security_ques?? ''}}" required >
        </div>

        <div class="input-field">
            <label>Security Answer</label>
            <input type="text" name="security_ans"  value="{{$data_2->security_ans?? ''}}" required >
        </div>

        <div class="input-field">
            <label>Password</label>
            <div id="mobileNumbers">
                <div class="mobile-number">
                    <input
                        type="tel"
                        name="password"
                        value="{{$data_2->password?? ''}}"
                        oninput="formatMobileNumber(this)"
                        onblur="validateMobileNumber(this)"
                        required

                    >
                </div>
            </div>
        </div>
        <div class="input-field">
            <label>Emergency Person Contact</label>
            <input type="text" name="emergency_person_contact"  value="{{$data_2->emergency_person_contact?? ''}}"required > <!-- Adjust the width and height as needed -->
        </div>
        @endif



                    {{-- <a href="#user-details" class="back-button">User Details</a>
                    <a href="#vehicle-details" class="back-button">Vehicle Details</a> --}}
<!-- Wrap the "Submit" button in a container -->
<div
class="submit-container">
    <button class="submit">
        <span class="btnText">Submit</span>
        <i class="uil uil-navigator"></i>
    </button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const clientIDField = document.getElementById('clientID');
        const submitButton = document.getElementById('submitButton');
        let currentClientID = 1;

        // Function to handle form submission
        function submitForm() {
            // You can add your form submission logic here
            // Simulate a successful submission
            setTimeout(function () {
                Swal.fire({
                    icon: 'success',
                    title: 'Form Submitted Successfully',
                    showConfirmButton: false,
                    timer: 1500
                });

                // Increment the client ID for the next submission
                currentClientID++;
                clientIDField.value = currentClientID;
            }, 2000);
        }

        // Add a click event listener to the submit button
        submitButton.addEventListener('click', function (e) {
            e.preventDefault(); // Prevent the form from actually submitting
            submitForm();
        });
    });
</script>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>


<script>
    const form = document.querySelector("form");
    const nextBtn = form.querySelector(".nextBtn");
    const backButton = form.querySelector(".backBtn");
    const formSections = form.querySelectorAll(".form");
    const cnicInput = document.getElementById("cnic");
    const cnicprimary = document.getElementById("primarycnic");
    const mobileNumberInput = document.querySelector("#mobileNumbers input");
    // const mobileNumberIn = document.querySelector("#mobileNumbers input");
//     mobileNumberIn.addEventListener("input", function (e) {
//    // Remove non-numeric characters
//    const value = this.value.replace(/\D/g, "");

//    // Format the mobile number as per the required pattern
//    if (value.length <= 4) {
//       this.value = `${value}`;
//    } else {
//       this.value = `${value.slice(0, 4)}-${value.slice(4, 11)}`;
//    }
// });
mobileNumberInput.addEventListener("input", function (e) {
   // Remove non-numeric characters
   const value = this.value.replace(/\D/g, "");

   // Format the mobile number as per the required pattern
   if (value.length <= 4) {
      this.value = `${value}`;
   } else {
      this.value = `${value.slice(0, 4)}-${value.slice(4, 11)}`;
   }
});  cnicInput.addEventListener("input", function (e) {
            // Remove non-numeric characters
            const value = this.value.replace(/\D/g, "");

            // Format the CNIC as per the required pattern
            if (value.length <= 5) {
               this.value = value;
            } else if (value.length <= 11) {
               this.value = `${value.slice(0, 5)}-${value.slice(5, 11)}`;
            } else {
               this.value = `${value.slice(0, 5)}-${value.slice(5, 11)}-${value.slice(11, 12)}`;
            }
         });
         cnicprimary.addEventListener("input", function (e) {
            // Remove non-numeric characters
            const value = this.value.replace(/\D/g, "");

            // Format the CNIC as per the required pattern
            if (value.length <= 5) {
               this.value = value;
            } else if (value.length <= 11) {
               this.value = `${value.slice(0, 5)}-${value.slice(5, 11)}`;
            } else {
               this.value = `${value.slice(0, 5)}-${value.slice(5, 11)}-${value.slice(11, 12)}`;
            }
         });


    nextBtn.addEventListener("click", () => {
        const allInput = formSections[0].querySelectorAll("input");
        allInput.forEach(input => {
            if (input.value !== "") {
                form.classList.add('secActive');
            } else {
                form.classList.remove('secActive');
            }
        });
    });

    backButton.addEventListener("click", () => {
        formSections[1].classList.remove('secActive');
        formSections[0].classList.add('secActive');
    });

</script>





</html>
