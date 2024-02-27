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
        .notification {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            padding: 10px 20px;
            border-radius: 5px;
            width: 300px;
            text-align: center;
            z-index: 1000;
        }

        .success {
            background-color: #5cb85c;
            color: white;
        }

        .error {
            background-color: #d9534f;
            color: white;
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
            overflow-y: auto; Enable vertical scrolling if needed */
       /* } */

        /* .container form {
            height: 490px; /* Set a fixed height for the form */
            overflow-y: auto; /* Enable vertical scrolling */
        /*} */

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
    .stylish-number {
    border: none;
    background: none;
    font-size: 24px; /* Adjust the font size as needed */
    color: #3498db; /* Adjust the color as needed */
    font-weight: bold; /* Make the text bold */
    text-align: center;
    text-transform: uppercase; /* Makes the text uppercase */
    letter-spacing: 3px; /* Adjust letter spacing as needed */
    padding: 5px; /* Adjust padding as needed */
    border-bottom: 2px solid #3498db; /* Add an underline, adjust color as needed */
    outline: none; /* Remove the default input field outline */
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
{{-- <style>
    .title {
    color: red;
    font-size: 24px; /* Adjust the font size as needed */
    font-weight: bold; /* You can adjust the font weight */
    /* Add any other custom styles you want */
}

    </style> --}}


</head>

<body>
    <div class="container">
        <header class="registration-header" style="text-transform: uppercase; font-family: 'cursive'; font-size: 36px; color: #db4c4c; text-shadow: 2px 2px 4px #999;">User Registration</header>


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

<form id="remarksForm" class="remarks-form" >
    @csrf
            <div class="form first">
                <div class="details personal">
                    <span class="title" style="text-transform: uppercase; font-family: 'cursive'; font-size: 30px; color: #c73636; text-shadow: 2px 2px 4px #999; display: flex; justify-content: center; align-items: center; width: 1200px; height: 50px; border: 4px solid rgba(0, 0, 0, 0.726); text-decoration: underline; font-weight: bold; font-style: italic;">User Details</span>






                    <div class="fields">
                        <div class="input-field">
                            <label>Client ID</label>
                            <input type="text" name="id" id="clientID" value="{{ $lastComplaintId }}" class="stylish-number" readonly style="cursor: not-allowed; background-color: #FCEBB6; border: 1px solid #E6B89C;">
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
                            <input type="text" name="customer_name" placeholder="Enter customer's name" required>
                        </div>

                        <div class="input-field">
                            <label>Father Name</label>
                            <input type="text" name="father_name"  placeholder="Enter your fathers name" required>
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
                            <input type="text" name="address" placeholder="Enter your Address" required>
                        </div>
                        <div class="input-field">
                            <label>Telephone Residence </label>
                            <input type="text" name="telephone_residence"  placeholder="Enter your telelphone residence" required>
                        </div>
                        <div class="input-field">
                            <label>Mobile Numbers</label>
                            <div id="mobileNumbers">
                                <div class="mobile-number">
                                    <input
                                    type="tel"
                                    name="mobileno_1"
                                    placeholder="XXXX-XXXXXXX"
                                    oninput="formatMobileNumber(this)"
                                    onblur="validateMobileNumber(this)"
                                    required
                                >
                                <span id="mobileNumberError" style="color: red;"></span>
                                </div>
                            </div>

                            <form novalidate>
                                <button id="addMobile" class="small-button">Add</button>
                                <button id="removeMobile" class="small-button">Less</button>
                            </form>
                        </div>

                        <script>
                            const addMobileButton = document.getElementById("addMobile");
                            const removeMobileButton = document.getElementById("removeMobile");
                            const mobileNumbers = document.getElementById("mobileNumbers");
                            let mobileCount = 1;

                            addMobileButton.addEventListener("click", () => {
                                if (mobileCount < 4) {
                                    mobileCount++;

                                    const newMobileField = document.createElement("div");
                                    newMobileField.className = "mobile-number";

                                    const inputName = `mobileno_${mobileCount}`;
                                    newMobileField.innerHTML = `
                                    <input type="tel" name="${inputName}"  placeholder="Enter mobile number ${mobileCount}"  placeholder="XXXX-XXXXXXX"
                                        oninput="formatMobileNumber(this)"
                                        onblur="validateMobileNumber(this)" >
                                    `;

                                    mobileNumbers.appendChild(newMobileField);
                                }
                            });

                            // Add event listener to remove mobile field (if needed).
                            removeMobileButton.addEventListener("click", () => {
                                if (mobileCount > 1) {
                                    mobileNumbers.removeChild(mobileNumbers.lastChild);
                                    mobileCount--;
                                }
                            });

                            function validateMobileNumber(input) {
                                // You can add custom validation here if needed.
                                // For now, it's using the pattern attribute to enforce the format.
                                if (!input.checkValidity()) {
                                    document.getElementById("mobileNumberError").textContent = "Please enter a valid mobile number (XXXX-XXXXXXX).";
                                } else {
                                    document.getElementById("mobileNumberError").textContent = "";
                                }
                            }
                        </script>

                          <div class="input-field">
                            <label>NTN</label>
                            <input type="text" name="ntn" placeholder="Enter your ntn" required>
                        </div>
                        <div class="input-field">
                            <label>CNIC NO</label>
                            <input type="text" name="cnic" id="cnic" placeholder="XXXXX-XXXXXX-X" required>
                         </div>


                         <div class="input-field">
                            <label>Pirmary User Name</label>
                            <input type="text" name="primaryuser_name"  placeholder="enter primary user name" required>
                         </div>
                         <div class="input-field">
                            <label>Primary user contact-1
                            </label>
                            <div id="mobileNumbers">
                                <div class="mobile-number">
                                    <input
                                        type="tel"
                                        name="primaryuser_con1"
                                        placeholder="XXXX-XXXXXXX"
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
                                        placeholder="XXXX-XXXXXXX"
                                        oninput="formatMobileNumber(this)"
                                        onblur="validateMobileNumber(this)"
                                    >
                                </div>
                            </div>
                        </div>                        <div class="input-field">
                            <label> Primary user CNIC NO</label>
                            <input type="text"name="primaryuser_cnic" id="primarycnic" placeholder="XXXXX-XXXXXX-X" required>
                         </div>
                         <div class="input-field">
                            <label>Secondary User Name</label>
                            <input type="text" name="seconadryuser_name"  placeholder="enter secondary user name" required>
                         </div>
                         <div class="input-field">
                            <label>Secondary User contact-1

                            </label>
                            <div id="mobileNumbers">
                                <div class="mobile-number">
                                    <input
                                        type="tel"
                                        name="secondaryuser_con1"
                                        placeholder="XXXX-XXXXXXX"
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
                                        placeholder="XXXX-XXXXXXX"
                                        oninput="formatMobileNumber(this)"
                                        onblur="validateMobileNumber(this)"
                                    >
                                </div>
                            </div>
                        </div>
                         <div class="input-field">
                            <label>Relationship with Secondary User</label>
                            <input type="text" name="relationship"  placeholder="enter secondary user name" required>
                         </div>
                         {{-- <div class="input-field">
                            <label>Registration Number</label>
                            <input type="text"  placeholder="enter secondary user name" required>
                         </div> --}}

                    </div>
                </div>

                <div class="details ID">
                    <span class="title" style="text-transform: uppercase; font-family: 'cursive'; font-size: 30px; color: #d42c2c; text-shadow: 2px 2px 4px #999; display: flex; justify-content: center; align-items: center; width: 1200px; height: 50px; border: 4px solid rgba(0, 0, 0, 0.726); text-decoration: underline; font-weight: bold; font-style: italic;">Vehicle Details</span>




                    <div class="fields">
                        <div class="input-field">
                            <label>Registration Number</label>
                            <input type="text" name="registeration_no" placeholder="Enter ID type" required>
                        </div>

                        <div class="input-field">
                            <label>Chassis Number</label>
                            <input type="text" name="chasis_no" placeholder="Enter chasis number" required>
                        </div>

                        <div class="input-field">
                            <label>Engine Number</label>
                            <input type="text" name="engine_no" placeholder="Enter engine no" required>
                        </div>
                        <div class="input-field">
                            <label>Engine type</label>
                            <select  type="text" name="engine_type"  required>
                                <option disabled selected>Select engline type</option>
                                <option>Petrol</option>
                                <option>Diesel</option>
                                <option>Hybrid</option>

                            </select>
                        </div>


                        <div class="input-field">
                            <label>CC(Horse power)</label>
                            <input type="text" name="CC"   placeholder="Enter issued state" required>
                        </div>

                        <div class="input-field">
                            <label>Make </label>
                            <input type="text" name="make" placeholder="Enter your issued date" required>
                        </div>

                        <div class="input-field">
                            <label>Model</label>
                            <input type="text" name="model" placeholder="Enter expiry date" required>
                        </div>
                        <div class="input-field">
                            <label>Year</label>
                            <input type="text" name="year" id="expiryYear" placeholder="Enter expiry date" required>
                        </div>

                        <script>
                            const expiryYearInput = document.getElementById("expiryYear");

                            expiryYearInput.addEventListener("input", (e) => {
                                const inputValue = e.target.value;

                                // Remove any non-numeric characters from the input
                                const numericValue = inputValue.replace(/[^0-9]/g, "");

                                // Update the input field value
                                expiryYearInput.value = numericValue;
                            });
                        </script>

                        {{-- <div class="input-field">
                            <label>Model</label>
                            <input type="text" placeholder="Enter expiry date" required>
                        </div> --}}
                        <div class="input-field">
                            <label>Transmission</label>
                            <select name="transmission"  required>
                                <option disabled selected>Choose transmission </option>
                                <option>Auto</option>
                                <option>Manual</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Color</label>
                            <input type="text"name="color"  id="color" placeholder="Enter color" required>
                        </div>

                </div>
                </div>

                <div class="details ID">
                    <span class="title" style="text-transform: uppercase; font-family: 'cursive'; font-size: 30px; color: #c73636; text-shadow: 2px 2px 4px #999; display: flex; justify-content: center; align-items: center; width: 1200px; height: 50px; border: 4px solid rgba(0, 0, 0, 0.726); text-decoration: underline; font-weight: bold; font-style: italic;">Product Details</span>




                    <div class="fields">
                        <div class="input-field">
                            <label>Insurance Partner </label>
                            <input type="text" name="insurance_partner" placeholder="Enter insurance partner " required>
                        </div>
                        <div class="input-field">
                            <label class="radio-label">VAS:</label>
                            <input type="radio" name="vas" value="Yes" id="vasYes" class="radio-button">
                            <label for="vasYes" class="radio-label">Yes</label>
                            <input type="radio" name="vas" value="No" id="vasNo" class="radio-button">
                            <label for="vasNo" class="radio-label">No</label>
                        </div>
                         <div class="checkboxes" style="display: none;">
                            {{-- <legend>choose</legend> --}}
                            <label class="checkbox-label">Choose options:</label>
                            <div class="checkbox-group">
                            <input type="checkbox" name="vas_options[]" value="Location on Call" id="locationOnCall" class="checkbox">
                            <label for="locationOnCall" class="checkbox-label">Location on Call</label>
                            </div>
                            <div class="checkbox-group">
                            <input type ="checkbox" name="vas_options[]" value="Ignition On" id="ignitionOn" class="checkbox">
                            <label for="ignitionOn" class="checkbox-label">Ignition On</label>
                            </div>
                            <div class="checkbox-group">

                            <input type ="checkbox" name="vas_options[]" value="Ignition Off" id="ignitionOff" class="checkbox">
                            <label for="ignitionOff" class="checkbox-label">Ignition Off</label>
                            </div>
                            <div class="checkbox-group">

                            <input type ="checkbox" name="vas_options[]" value="Webtrack " id="Webtrack" class="checkbox">
                            <label for="Webtrack" class="checkbox-label"> Webtrack</label>
                            </div>
                            <div class="checkbox-group">

                            <input type ="checkbox" name="vas_options[]" value="Geofence Alerts " id="Geofence Alerts" class="checkbox">
                            <label for="Geofence Alerts" class="checkbox-label"> Geofence Alerts</label>
                            </div>
                            <div class="checkbox-group">

                            <input type ="checkbox" name="vas_options[]" value="Mobile App " id=" Mobile App" class="checkbox">
                            <label for=" Mobile App" class="checkbox-label"> Mobile App</label>
                            </div>


                            <input type ="checkbox" name="vas_options[]" value="Over Speed " id=" Over Speed " class="checkbox">
                            <label for=" Over Speed " class="checkbox-label"> Over Speed </label>

                            <!-- Add more checkboxes as needed -->
                        </div>
                    </div>
                        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
                        <script>
                            // Get references to the radio buttons and the checkboxes container
                            const vasYes = document.getElementById("vasYes");
                            const vasNo = document.getElementById("vasNo");
                            const checkboxesContainer = document.querySelector(".checkboxes");

                            // Add an event listener to the "Yes" radio button
                            vasYes.addEventListener("change", function () {
                                // If "Yes" is selected, show the checkboxes
                                if (vasYes.checked) {
                                    checkboxesContainer.style.display = "block";
                                } else {
                                    checkboxesContainer.style.display = "none";
                                }
                            });

                            // Add an event listener to the "No" radio button (optional)
                            vasNo.addEventListener("change", function () {
                                // You can add logic here if needed
                            });
                        </script>



                        <script>
                            const vasRadioYes = document.getElementById('vasYes');
                            const vasRadioNo = document.getElementById('vasNo');
                            const checkboxContainer = document.querySelector('.checkboxes');

                            vasRadioYes.addEventListener('change', function () {
                                if (vasRadioYes.checked) {
                                    checkboxContainer.style.display = 'block';
                                }
                            });

                            vasRadioNo.addEventListener('change', function () {
                                if (vasRadioNo.checked) {
                                    checkboxContainer.style.display = 'none';
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
                    <span class="title" style="text-transform: uppercase; font-family: 'cursive'; font-size: 30px; color: #c73636; text-shadow: 2px 2px 4px #999; display: flex; justify-content: center; align-items: center; width: 1200px; height: 50px; border: 4px solid rgba(0, 0, 0, 0.726); text-decoration: underline; font-weight: bold; font-style: italic;">Payment Details</span>



                    </span>

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
                            <select name="segment"  required>
                                <option disabled selected>Choose any one </option>
                                <option>Cash</option>
                                <option>Cash-Rental</option>
                                <option>Demo</option>
                           </select>
                        </div>
                        <div class="input-field">
                            <label>Demo Duration</label>
                            <input type="text" name="demo_duration" placeholder="Enter demo" required>
                        </div>

                        <div class="input-field">
                            <label>Tracker Charges</label>
                            <input type="text" name="tracker_charges" placeholder="Enter charges" required>
                        </div>

                        <div class="input-field">
                            <label>Renewal Charges</label>
                            <input type="text" name="renewal_charges" placeholder="Enter  renewal charges" required>
                        </div>
                        <div class="input-field">
                            <label>Date of Installation</label>
                            <input type="date" name="date_of_installation" placeholder="select date of installation" required>
                        </div>
                        <div class="input-field">
                            <label>Internal Commission</label>
                            <input type="text" name="int_comission" placeholder="Enter commision" required>
                        </div>

                        <div class="input-field">
                            <label>External Commission</label>
                            <input type="text" name="ext_comission" placeholder="Enter extrernal commsion" required>
                        </div>

                        <div class="input-field">
                            <label>Discount ( if approved by CEO)
                            </label>
                            <input type="text" name="discount" placeholder="Enter discount" required>
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title" style="text-transform: uppercase; font-family: 'cursive'; font-size: 30px; color: #c73636; text-shadow: 2px 2px 4px #999; display: flex; justify-content: center; align-items: center; width: 1200px; height: 50px; border: 4px solid rgba(0, 0, 0, 0.726); text-decoration: underline; font-weight: bold; font-style: italic;">other Details</span>



                    <div class="fields">
                        <div class="input-field">
                            <label>Campaign Point Allocation</label>
                            <input type="text" name="campaign_point" placeholder="Enter point allocation" required>
                        </div>

                        <div class="input-field">
                            <label>Dealership</label>
                            <input type="text" name="dealership" placeholder="Enter mother name" required>
                        </div>

                        <div class="input-field">
                            <label>Dealer Name</label>
                            <input type="text" name="dealer_name" placeholder="Enter dealer name" required>
                        </div>

                        <div class="input-field">
                            <label>Sales Person </label>
                            <input type="text" name="sales_person" placeholder="Enter sales person name" required>
                        </div>

                        <div class="input-field">
                            <label>Installation Location</label>
                            <input type="text" name="installation_loc" placeholder="location only" required>
                        </div>

                        <div class="input-field">
                            <label>Contact person</label>
                            <div id="mobileNumbers">
                                <div class="mobile-number">
                                    <input
                                        type="tel"
                                        name="conatct_person"
                                        placeholder="XXXX-XXXXXXX"
                                        oninput="formatMobileNumber(this)"
                                        onblur="validateMobileNumber(this)"
                                        required
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="input-field">
                            <label>Remarks</label>
                            <input type="text" name="remarks" placeholder="Remarks please" required style="width: 300px; height: 100px;"> <!-- Adjust the width and height as needed -->
                        </div>

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


<div id="successMessage" style="color: green;"></div>
<div id="errorMessage" style="color: red;"></div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $('#remarksForm').submit(function(event) {
        event.preventDefault(); // Prevent default form submission
        var formData = $(this).serialize();

        $.ajax({
            url: '{{ route("storedata") }}',
            type: 'POST',
            data: formData,
            success: function(response) {
                console.log('Status updated successfully:', response);
                $('#successMessage').text('Data submitted successfully');
                $('#remarksForm')[0].reset();

            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                $('#errorMessage').text(xhr.responseJSON.message); // Display the error message
            }
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
</script>



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
