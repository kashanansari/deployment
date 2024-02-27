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
<style>
 .radio-button:checked[disabled] + .radio-label::before {
            background-color: #000; /* Dark black color */
            border: 2px solid #000; /* Border color (optional) */
        }
</style>


</head>

<body>
    <div class="container">
        <header class="registration-header">User Registration </header>


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

<form method="post" action="/storesecurity">
    @csrf
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
        <!-- The label is optional since the field is hidden -->
        <input type="hidden" name="client_code" value="{{ $data->id }}">
    </div>
</div>

                    <div class="fields">
                        <div class="input-field">
                            <label>Client ID</label>
                            <input type="text" name="client_id" id="clientID" value="{{$data->id }}" required readonly style="cursor: not-allowed;" >
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
                    <input type="text" name="customer_name" value="{{ $data->customer_name }}" required readonly style="cursor: not-allowed;">
                </div>
                        <div class="input-field">
                            <label>Father Name</label>
                            <input type="text" name="father_name" value= "{{$data->father_name }}" required readonly style="cursor: not-allowed;">
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
                            <input type="text" name="address" value= "{{$data->address }}" required class="large-input" readonly style="cursor: not-allowed;">
                        </div>
                        <div class="input-field">
                            <label>Telephone Residence </label>
                            <input type="text" name="telephone_residence"  value="{{$data->telephone_residence }} "required readonly style="cursor: not-allowed;">
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
                                    readonly style="cursor: not-allowed;"
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
                                        readonly style="cursor: not-allowed;"
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
                                         readonly style="cursor: not-allowed;"
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
                                        readonly style="cursor: not-allowed;"
                                    >
                                    {{-- <span id="mobileNumberError" style="color: red;"></span> --}}
                                    </div>
                                </div>
                            </div>


{{--
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
                                    <input type="tel" name="${inputName}"        value="{{$data->mobileno_2}}"  placeholder="XXXX-XXXXXXX"
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
                        </script> --}}

                          <div class="input-field">
                            <label>NTN</label>
                            <input type="text" name="ntn" placeholder="{{ $data->ntn }}" required readonly style="cursor: not-allowed;">
                        </div>
                        <div class="input-field">
                            <label>CNIC NO</label>
                            <input type="text" name="cnic" id="cnic" placeholder="{{ $data->cnic }}" required readonly style="cursor: not-allowed;">
                         </div>


                         <div class="input-field">
                            <label>Pirmary User Name</label>
                            <input type="text" name="primaryuser_name" value="{{ $data->primaryuser_name }}" required readonly style="cursor: not-allowed; color: rgb(0, 0, 0);">
                        </div>
                         <div class="input-field">
                            <label>Primary user contact-1
                            </label>
                            <div id="mobileNumbers">
                                <div class="mobile-number">
                                    <input
                                        type="tel"
                                        name="primaryuser_con1"
                                        placeholder="{{ $data->primaryuser_con1 }}"
                                        oninput="formatMobileNumber(this)"
                                        onblur="validateMobileNumber(this)"
                                        required
                                        readonly style="cursor: not-allowed";

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
                                        placeholder="{{ $data->primaryuser_con2 }}"
                                        oninput="formatMobileNumber(this)"
                                        onblur="validateMobileNumber(this)"
                                        readonly style="cursor: not-allowed";
                                    >
                                </div>
                            </div>
                        </div>                        <div class="input-field">
                            <label> Primary user CNIC NO</label>
                            <input type="text"name="primaryuser_cnic" id="primarycnic" placeholder="{{ $data->primaryuser_cnic }}" required readonly style="cursor: not-allowed;">
                         </div>
                         <div class="input-field">
                            <label>Secondary User Name</label>
                            <input type="text" name="seconadryuser_name"  placeholder="{{ $data->seconadryuser_name }}" required readonly style="cursor: not-allowed;">
                         </div>
                         <div class="input-field">
                            <label>Secondary User contact-1

                            </label>
                            <div id="mobileNumbers">
                                <div class="mobile-number">
                                    <input
                                        type="tel"
                                        name="secondaryuser_con1"
                                        placeholder="{{ $data->secondaryuser_con1 }}"
                                        oninput="formatMobileNumber(this)"
                                        onblur="validateMobileNumber(this)"
                                        required
                                        readonly style="cursor: not-allowed;"
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
                                        placeholder="{{ $data->secondaryuser_con2 }}"
                                        oninput="formatMobileNumber(this)"
                                        onblur="validateMobileNumber(this)"
                                        readonly style="cursor: not-allowed;"
                                        >
                                </div>
                            </div>
                        </div>
                         <div class="input-field">
                            <label>Relationship with Secondary User</label>
                            <input type="text" name="relationship"  placeholder="{{ $data->relationship}}" required readonly style="cursor: not-allowed;">
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
                        font-style: italic;">Vehicle Details</span>


                    <div class="fields">
                        <div class="input-field">
                            <label>Registration Number</label>
                            <input type="text" name="registeration_no" placeholder="{{ $data->registeration_no}}" readonly required  style="cursor: not-allowed;">
                        </div>

                        <div class="input-field">
                            <label>Chassis Number</label>
                            <input type="text" name="chasis_no" placeholder="{{ $data->chasis_no}}" readonly required readonly style="cursor: not-allowed;">
                        </div>

                        <div class="input-field">
                            <label>Engine Number</label>
                            <input type="text" name="engine_no" placeholder="{{ $data->engine_no}}" readonly required readonly style="cursor: not-allowed;">
                        </div>
                        <div class="input-field">
                            <label>Engine type</label>
                            <input  type="text" name="engine_type"  value="{{ $data->engine_type}}" readonly required readonly style="cursor: not-allowed;">

                            </select>
                        </div>


                        <div class="input-field">
                            <label>CC(Horse power)</label>
                            <input type="text" name="CC"   value="{{ $data->CC}}" required readonly style="cursor: not-allowed;">
                        </div>

                        <div class="input-field">
                            <label>Make </label>
                            <input type="text" name="make" value="{{ $data->make}}" required readonly style="cursor: not-allowed;">
                        </div>

                        <div class="input-field">
                            <label>Model</label>
                            <input type="text" name="model" value="{{ $data->model}}" required readonly style="cursor: not-allowed;">
                        </div>
                        <div class="input-field">
                            <label>Year</label>
                            <input type="text" name="year" id="expiryYear" value="{{ $data->year}}" required readonly style="cursor: not-allowed;">
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
                            <input type="text" value="{{ $data->transmission }}" readonly readonly style="cursor: not-allowed;">
                        </div>

                        <div class="input-field">
                            <label>Color</label>
                            <input type="text"name="color"  id="color" value="{{ $data->color }}" required readonly style="cursor: not-allowed;">
                        </div>

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
                            <input type="text" name="insurance_partner" value="{{ $data->color }}" required readonly style="cursor: not-allowed;" >
                        </div>
                        <div class="input-field">
                            <label class="radio-label">VAS:
                                <input type="radio" name="vas" value="Yes" id="vasYes" @if($data->vas === 'Yes') checked @endif disabled class="radio-button" readonly style="color: black;">
                                <label for="vasYes" class="radio-label">Yes</label>
                                <input type="radio" name="vas" value="No" id="vasNo" @if($data->vas === 'No') checked @endif disabled class="radio-button">
                                <label for="vasNo" class="radio-label">No</label>
                            </label>
                        </div>

                        <div>
                            <label> Vas-options </label>
                        <input type="text" name="vas_options" value="{{ implode(', ', $vas) }}" readonly style="width: 550px; height:40px" readonly style="cursor: not-allowed;">
                        </div>
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
                            <input type="text" name="segment" value="{{ $data->segment }}" required readonly readonly style="cursor: not-allowed;">

                        </div>
                        <div class="input-field">
                            <label>Demo Duration</label>
                            <input type="text" name="demo_duration" value="{{ $data->demo_duration }}" required readonly style="cursor: not-allowed;">
                        </div>

                        <div class="input-field">
                            <label>Tracker Charges</label>
                            <input type="text" name="tracker_charges" value="{{ $data->tracker_charges }}" required readonly style="cursor: not-allowed;">
                        </div>
                        <div class="input-field">
                            <label>Date of Installation</label>
                            <input type="date" name="date_of_installation" value="{{ $data->date_of_installation }}" required readonly style="cursor: not-allowed;">
                        </div>
                        <div class="input-field">
                            <label>Internal Commission</label>
                            <input type="text" name="int_comission" value="{{ $data->int_comission }}" readonly style="cursor: not-allowed;">
                        </div>

                        <div class="input-field">
                            <label>External Commission</label>
                            <input type="text" name="ext_comission" value="{{ $data->ext_comission }}" readonly style="cursor: not-allowed;" >
                        </div>

                        <div class="input-field">
                            <label>Discount ( if approved by CEO)
                            </label>
                            <input type="text" name="discount" value="{{ $data->discount }}" required readonly style="cursor: not-allowed;">
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
                            <input type="text" name="campaign_point" value="{{ $data->campaign_point }}" required readonly style="cursor: not-allowed;">
                        </div>

                        <div class="input-field">
                            <label>Dealership</label>
                            <input type="text" name="dealership" value="{{ $data->dealership }}" required readonly style="cursor: not-allowed;">
                        </div>

                        <div class="input-field">
                            <label>Dealer Name</label>
                            <input type="text" name="dealer_name" value="{{ $data->dealer_name }}" required readonly style="cursor: not-allowed;">
                        </div>

                        <div class="input-field">
                            <label>Sales Person </label>
                            <input type="text" name="sales_person" value="{{ $data->sales_person }}" required readonly style="cursor: not-allowed;">
                        </div>

                        <div class="input-field">
                            <label>Installation Location</label>
                            <input type="text" name="installation_loc" value="{{ $data->installation_loc }}" required readonly style="cursor: not-allowed;">
                        </div>

                        <div class="input-field">
                            <label>Contact person</label>
                            <div id="mobileNumbers">
                                <div class="mobile-number">
                                    <input
                                        type="tel"
                                        name="conatct_person"
                                        value="{{ $data->conatct_person }}"
                                               oninput="formatMobileNumber(this)"
                                        onblur="validateMobileNumber(this)"
                                        required
                                        readonly
                                        readonly style="cursor: not-allowed;"
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="input-field">
                            <label>Remarks</label>
                        <input type="text" name="remarks" value="{{ $data->remarks }}" style="width: 300px; height: 100px;" readonly style="cursor: not-allowed;">



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
                                font-style: italic;"> Technical Details</span>

@if ($data_1)
                            <div class="fields">
                                <div class="input-field">
                                    <label>Vendor</label>
                                    <input type="text" name="vendor_name" value="{{ $data_1->vendor_name }}" required  readonly>
                                </div>

                                <div class="input-field">
                                    <label>Device ID</label>
                                    <input type="text" name="device_id" value="{{ $data_1->device_id }}" required  readonly>
                                </div>

                                <div class="input-field">
                                    <label>IMEI Number </label>
                                    <input type="text" name="IMEI_no" value="{{ $data_1->IMEI_no }}" required >
                                </div>

                                <div class="input-field">
                                    <label> GSM Number </label>
                                    <input type="text" name="Gsm_no" value="{{ $data_1->Gsm_no }}" required >
                                </div>

                                <div class="input-field">
                                    <label> TAVL mang. ID</label>
                                    <input type="text" name="Tavl_mang_id" value="{{ $data_1->Tavl_mang_id }}" required >
                                </div>

                                <div class="input-field">
                                    <label> Designated Technician</label>
                                    <div id="mobileNumbers">
                                        <div class="mobile-number">
                                            <input
                                                type="text"
                                                name="technician_name"
                                                value="{{ $data_1->technician_name }}"
                                                {{-- placeholder="Enter technician name"
                                                       oninput="formatMobileNumber(this)"
                                                onblur="validateMobileNumber(this)" --}}
                                                required
                                                  {{-- readonly style="cursor: not-allowed;" --}}
                                            >
                                        </div>
                                    </div>

                                </div>
                                <div class="input-field">
                                    <label> Sim Activated</label>
                                    <input type="text" name="sim" value="{{ $data_1->sim }}" required  readonly>
                                </div>


                                <div class="input-field">
                                    <label> GPS check</label>
                                    <input type="text" name="Gps_check" value="{{ $data_1->Gps_check }}" required  readonly>
                                </div>
                                <div class="input-field">
                                    <label> Mobilizer</label>
                                    <input type="text" name="mobilizer" value="{{ $data_1->mobilizer }}" required  readonly>
                                </div>
                                <div class="input-field">
                                    <label> Operational Status
                                    </label>
                                    <input type="text" name="operational_status" value="{{ $data_1->operational_status }}" required  readonly>
                                </div>

                                <div class="input-field">
                                    <label> WebTrack Login ID

                                    </label>
                                    <input type="text" name="webtrack_id" value="{{ $data_1->webtrack_id }}" required  readonly>
                                </div>


                                <div class="input-field">
                                    <label> WebTrack Password


                                    </label>
                                    <input type="text" name="webtrack_pass" value="{{ $data_1->webtrack_pass }}" required  readonly style="width: 220px">
                                </div>





                                    <div class="input-field">
                                        <label> Ignition Alerts



                                        </label>
                                        <input type="text" name="ignition_alerts" value="{{ $data_1->ignition_alerts }}" required  readonly>
                                    </div>

                                        <!-- Input field for Contact# -->
                                        <
                                        <div class="input-field">
                                            <label>Geo Fence Alerts





                                            </label>
                                            <input type="text" name="geo_fence_alerts" value="{{ $data_1->geo_fence_alerts }}" required  readonly>
                                        </div>


    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            // Get the On radio button and the Contact# input field
            const statusYesRadio = document.getElementById('status_yes');
            const contactInput = document.getElementById('contact_input');

            // Add an event listener to the On radio button
            statusYesRadio.addEventListener('change', function() {
                // If the On radio button is selected, show the Contact# input field; otherwise, hide it
                contactInput.style.display = this.checked ? 'block' : 'none';
            });
        });
    </script>
                                      <div class="input-field">
                                        <label>Contact#1




                                        </label>
                                        <input type="text" name="contact_1" value="{{ $data_1->contact_1 }}" required  readonly>
                                    </div>

                                        <!-- Input field for Contact# -->
                                        <div class="input-field">
                                        <label for="contact_number">Contact#2</label>
                                        <input type="text" id="contact_number"   value="{{ $data_1->contact_2 }}" name="contact_2" readonly>
                                    </div>

                                    <div class="input-field">
                                        <label>Contact#3
                                        </label>
                                        <input type="text" name="contact_3" value="{{ $data_1->contact_3 }}" required  readonly>
                                    </div>

                                        <!-- Input field for Contact# -->
                                        <div class="input-field">
                                            <label>Additional Contact no




                                            </label>
                                            <input type="text" name="contact_1" value="{{ $data_1->additional_contact }}" required  readonly>
                                        </div>

                                        @else
                                        <div class="fields">
                                            <div class="input-field">
                                                <label>Vendor</label>
                                                <input type="text" name="vendor_name" value="" required  readonly>
                                            </div>

                                            <div class="input-field">
                                                <label>Device ID</label>
                                                <input type="text" name="device_id" value="" required  readonly>
                                            </div>

                                            <div class="input-field">
                                                <label>IMEI Number </label>
                                                <input type="text" name="IMEI_no" value="" required readonly>
                                            </div>

                                            <div class="input-field">
                                                <label> GSM Number </label>
                                                <input type="text" name="Gsm_no" value="" required readonly>
                                            </div>

                                            <div class="input-field">
                                                <label> TAVL mang. ID</label>
                                                <input type="text" name="Tavl_mang_id" value="" required readonly>
                                            </div>

                                            <div class="input-field">
                                                <label> Designated Technician</label>
                                                <div id="mobileNumbers">
                                                    <div class="mobile-number">
                                                        <input
                                                            type="text"
                                                            name="technician_name"
                                                            value=""
                                                            {{-- placeholder="Enter technician name"
                                                                   oninput="formatMobileNumber(this)"
                                                            onblur="validateMobileNumber(this)" --}}
                                                            required
                                                            readonly
                                                              {{-- readonly style="cursor: not-allowed;" --}}
                                                        >
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="input-field">
                                                <label> Sim Activated</label>
                                                <input type="text" name="sim" value="" required  readonly>
                                            </div>


                                            <div class="input-field">
                                                <label> GPS check</label>
                                                <input type="text" name="Gps_check" value="" required  readonly>
                                            </div>
                                            <div class="input-field">
                                                <label> Mobilizer</label>
                                                <input type="text" name="mobilizer" value="" required  readonly>
                                            </div>
                                            <div class="input-field">
                                                <label> Operational Status
                                                </label>
                                                <input type="text" name="operational_status" value="" required  readonly>
                                            </div>

                                            <div class="input-field">
                                                <label> WebTrack Login ID

                                                </label>
                                                <input type="text" name="webtrack_id" value="" required  readonly>
                                            </div>


                                            <div class="input-field">
                                                <label> WebTrack Password


                                                </label>
                                                <input type="text" name="webtrack_pass" value="" required  readonly style="width: 220px">
                                            </div>





                                                <div class="input-field">
                                                    <label> Ignition Alerts



                                                    </label>
                                                    <input type="text" name="ignition_alerts" value="" required  readonly>
                                                </div>

                                                    <!-- Input field for Contact# -->
                                                    <
                                                    <div class="input-field">
                                                        <label>Geo Fence Alerts





                                                        </label>
                                                        <input type="text" name="geo_fence_alerts" value="" required  readonly>
                                                    </div>


                <script>
                    window.addEventListener('DOMContentLoaded', (event) => {
                        // Get the On radio button and the Contact# input field
                        const statusYesRadio = document.getElementById('status_yes');
                        const contactInput = document.getElementById('contact_input');

                        // Add an event listener to the On radio button
                        statusYesRadio.addEventListener('change', function() {
                            // If the On radio button is selected, show the Contact# input field; otherwise, hide it
                            contactInput.style.display = this.checked ? 'block' : 'none';
                        });
                    });
                </script>
                                                  <div class="input-field">
                                                    <label>Contact#1




                                                    </label>
                                                    <input type="text" name="contact_1" value="" required  readonly>
                                                </div>

                                                    <!-- Input field for Contact# -->
                                                    <div class="input-field">
                                                    <label for="contact_number">Contact#2</label>
                                                    <input type="text" id="contact_number"   value="" name="contact_2" readonly>
                                                </div>

                                                <div class="input-field">
                                                    <label>Contact#3
                                                    </label>
                                                    <input type="text" name="contact_3" value="" required  readonly>
                                                </div>

                                                    <!-- Input field for Contact# -->
                                                    <div class="input-field">
                                                        <label>Additional Contact no




                                                        </label>
                                                        <input type="text" name="contact_1" value="" required  readonly>
                                                    </div>

                                                    @endif





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
                                        font-style: italic;"> Security Details</span>


                                    <div class="fields">
                                        <div class="input-field">
                                            <label>Customer Email </label>
                                            <input type="text" name="customer_email" placeholder="Enter custoemrs email" required  >
                                        </div>

                                        <div class="input-field">
                                            <label>Emergency Password 	</label>
                                            <input type="password" name="emergency_pass" placeholder="Enter emergency password"  required  >
                                        </div>

                                        <div class="input-field">
                                            <label>Emergency Person </label>
                                            <input type="text" name="emergency_person" placeholder="Enter emergency person"  required >
                                        </div>

                                        <div class="input-field">
                                            <label> Security Question </label>
                                            <input type="text" name="security_ques" placeholder="Enter security question"  required >
                                        </div>

                                        <div class="input-field">
                                            <label> Security Answer</label>
                                            <input type="text" name="security_ans" placeholder="Enter security answer"  required >
                                        </div>

                                        <div class="input-field">
                                            <label>  Password</label>
                                            <div id="mobileNumbers">
                                                <div class="mobile-number">
                                                    <input
                                                        type="text"
                                                        name="password"
                                                        placeholder="Enter password"
                                                        {{-- placeholder="Enter technician name"
                                                               oninput="formatMobileNumber(this)"
                                                        onblur="validateMobileNumber(this)" --}}
                                                        required
                                                          {{-- readonly style="cursor: not-allowed;" --}}
                                                    >
                                                </div>
                                            </div>

                                        </div>
                                        <div class="input-field">
                                            <label>Emergency Person Contact </label>
                                            <input type="text" name="emergency_person_contact" placeholder="Enter emergency contact "  required >
                                        </div>


                                                </div>

                                                </div>
                                            </div>
                                        </div>


                                {{-- <script>
                                    const statusYes = document.getElementById("status_yes");
                                    const conditionalFields = document.getElementById("conditionalFields");

                                    statusYes.addEventListener("change", function () {
                                        if (this.checked) {
                                            document.getElementById("webtrack_login_field").style.display = "block";
                                            document.getElementById("webtrack_password_field").style.display = "block";
                                            document.getElementById("alerts_field").style.display = "block";
                                        }
                                    });

                                    const statusNo = document.getElementById("status_no");
                                    statusNo.addEventListener("change", function () {
                                        if (this.checked) {
                                            document.getElementById("webtrack_login_field").style.display = "none";
                                            document.getElementById("webtrack_password_field").style.display = "none";
                                            document.getElementById("alerts_field").style.display = "none";
                                        }
                                    });
                                </script> --}}

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
