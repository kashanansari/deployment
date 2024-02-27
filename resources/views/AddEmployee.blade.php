<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        notification {
        display: none;
        position: fixed;
        top: 20px;
        right: 20px;
        width: 300px;
        padding: 10px;
        border-radius: 5px;
        z-index: 9999;
    }

    /* Styles for success and error notifications */
    .notification.success {
        background-color: #5cb85c;
        color: white;
    }

    .notification.error {
        background-color: #d9534f;
        color: white;
    }

    /* Close button for the notification */
    .notification .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .notification .closebtn:hover {
        color: black;
    }
    </style>
    <title>Add Employee</title>
</head>
<body>

<div class="container">
    <div class="form-container">
        <h2 class="text-center mb-4">Add Employee</h2>
        <form id="Addemp" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="employeeId">Employee ID:</label>
                <input type="text" class="form-control" id="employeeId" value="{{$Employeeid }}" name="employeeId" required readonly style="Not-allowed">
            </div>

            <div class="form-group">
                <label for="employeeName">Employee Name:</label>
                <input type="text" class="form-control" id="employeeName" name="emp_name" required>
            </div>

            <div class="form-group">
                <label for="employeeLoginId">Employee Login ID:</label>
                <input type="text" class="form-control" id="employeeLoginId" name="em_loginid" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="designation">Designation:</label>
                <input type="text" class="form-control" id="designation" name="designation" required>
            </div>

            <div class="form-group">
                <label for="contactNumber">Contact Number:</label>
                <input type="text" class="form-control" id="contactNumber" name="contact" required>
            </div>

            <div class="form-group">
                <label for="cnic">CNIC:</label>
                <input type="text" class="form-control" id="cnic" name="cnic" required>
            </div>
            <div class="form-group">
                <label for="role">Select Role:</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="CRO">CRO</option>
                    <option value="Technician">Technician</option>
                    <option value="Technical">Technical</option>
                    <option value="Sales Operator">Sales Operator</option>
                    <option value="Sales Person">Sales Person</option>
                    <option value="Super Visor">Super Visor</option>

                </select>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*" >
            </div>

            <button type="submit" class="btn btn-primary">Add Employee</button>
        </form>
    </div>
</div>
<!-- Add this HTML for a custom notification box -->
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

    $('#Addemp').submit(function(event) {
    event.preventDefault(); // Prevent default form submission
    var formData = new FormData(this);

    $.ajax({
        url: '{{ route("create_emp") }}',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
        console.log('Status updated successfully:', response);
        showNotification('Data submitted successfully', 'success');
        $('#employeeName').val('');
    $('#employeeLoginId').val('');
    $('#password').val('');
    $('#designation').val('');
    $('#contactNumber').val('');
    $('#cnic').val('');
    // Resetting the select field
    $('#role').val($('#role option:first').val());
    // Resetting the file input
    $('#image').val('');    },
    error: function(xhr, status, error) {
        console.error('Error:', error);
        showNotification(xhr.responseJSON.message, 'error'); // Display the error message
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
    var notification = $('#notification');
    var notificationMessage = $('#notificationMessage');

    notificationMessage.text(message);

    if (type === 'success') {
        notification.removeClass('error');
        notification.addClass('success');
    } else if (type === 'error') {
        notification.removeClass('success');
        notification.addClass('error');
    }

    notification.fadeIn().delay(5000).fadeOut();
}

// Function to close the notification box
function closeNotification() {
    $('#notification').fadeOut();
}

</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
