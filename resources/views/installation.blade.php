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
            max-height: 290px;
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


</head>

<body>
    <div class="container">
        <header class="registration-header" style="text-transform: uppercase; font-family: 'cursive'; font-size: 36px; color: #db4c4c; text-shadow: 2px 2px 4px #999;">Device Installation </header>


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

        <form action="storeinventory" method="post">
            @csrf
            <div class="form first">
                <div class="details personal">
                    <span class="title" style="text-transform: uppercase; font-family: 'cursive'; font-size: 30px; color: #c73636; text-shadow: 2px 2px 4px #999; display: flex; justify-content: center; align-items: center; width: 1200px; height: 50px; border: 4px solid rgba(0, 0, 0, 0.726); text-decoration: underline; font-weight: bold; font-style: italic;">Device Details</span>






                    <div class="fields">
                        <div class="input-field">
                            <label>Customer Name </label>
                            <input type="text" name="device_serialno" id="clientID" placeholder="Enter CLient ID" required>
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



                        <div class="input-field">
                            <label>Sales Person</label>
                            <input type="text" name="imei_no" placeholder="Enter customer's name" required>
                        </div>


                        <div class="input-field">
                            <label>Registration Number *</label>
                            <input type="text" name="vendor" placeholder="Enter your Address" required>
                        </div>

                        <div class="input-field">
                            <label>Technecian </label>
                            <input type="text" name="vendor" placeholder="Enter your Address" required>
                        </div>

                        <div class="input-field">
                            <label>Engine Number</label>
                            <input type="text" name="vendor" placeholder="Enter your Address" required>
                        </div>

                        <div class="input-field">
                            <label>Chassis Number</label>
                            <input type="text" name="vendor" placeholder="Enter your Address" required>
                        </div>

                        <div class="input-field">
                            <label>Install Location</label>
                            <input type="text" name="vendor" placeholder="Enter your Address" required>
                        </div>
                        <div class="input-field">
                            <label>Installation Date</label>
                            <input type="date" name="vendor" placeholder="Enter your Address" required>
                        </div>
                        <div class="input-field">
                            <label>Remarks</label>
                            <input type="text" name="vendor" placeholder="Enter your Address" required>
                        </div>
                        <div class="input-field">
                            <label>Contact Number</label>
                            <div id="mobileNumbers">
                                <div class="mobile-number">
                                    <input
                                    type="tel"
                                    name="devciesim_no"
                                    placeholder="XXXX-XXXXXXX"
                                    oninput="formatMobileNumber(this)"
                                    onblur="validateMobileNumber(this)"
                                    required
                                >
                                {{-- <span id="mobileNumberError" style="color: red;"></span> --}}
                                </div>
                            </div>


                    </div>
                </div>

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
