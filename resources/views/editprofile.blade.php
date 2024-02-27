<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    .container {
      width: 50%;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-group {
      margin-bottom: 15px;
    }
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    input[type="submit"] {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    .success-message {
      color: green;
      background-color: #d4edda;
      border: 1px solid #c3e6cb;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
    }

    /* Styles for error message */
    .error-message {
      color: red;
      background-color: #f8d7da;
      border: 1px solid #f5c6cb;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
    }
  </style>

</head>
<body>
  <div class="container">
    <h2>Edit Profile</h2>
    <form id="editprofileform" method="post">
        @csrf
        @if(isset($data))
        <div class="form-container">
            <div class="form-group">
                <img src="{{ Storage::url($data->image) }}" alt="Employee Picture" style="width: 100px; height: 100px; border-radius: 50%;">
            </div>
            <h3>Old Credentials</h3>
            <!-- Displaying the image -->


            <div class="form-group">
                <label for="old-username">Emp name</label>
                <input type="text" id="old-username" name="old-username" value="{{ $data->emp_name }}" readonly>
            </div>
            <div class="form-group">
                <label for="old-email">Login-Id</label>
                <input type="email" id="old-email" name="old_login_id" value="{{ $data->em_loginid }}" readonly>
            </div>
            <div class="form-group">
                <label for="old-password">Old Password</label>
                <input type="text" id="old-password" name="old_password"  value="{{ $data->password }}"readonly>
            </div>
        </div>
    @endif
      <div class="form-container">
        <h3>New Credentials</h3>
        <div class="form-group">
          <label for="new-username">Emp name</label>
          <input type="text" id="new-username" name="emp_name" placeholder="Enter your new username"required>
        </div>
        {{-- <div class="form-group">
          <label for="new-email">Login-Id </label>
          <input type="text" id="new-email" name="new_login_id" placeholder="Enter your new email"required>
        </div> --}}
        <div class="form-group">
            <label for="new-password">New Password</label>
            <input type="password" id="new-password" name="new_password" placeholder="Enter your new password" required>
          </div>
          <div class="form-group">
            <label for="confirm-new-password">Confirm new password</label>
            <input type="password" id="confirm-new-password" name="new_password_confirmation" placeholder="Confirm your new password" required>
            <span id="passwordMatchError" class="error-message" style="display: none;">Passwords do not match</span>
          </div>
      </div>
      <div style="clear:both;"></div>
      <div class="form-group">
        <input type="submit" value="Save Changes">
      </div>
      <div id="successMessage" class="success-message" style="display: none;"></div>
      <div id="errorMessage" class="error-message" style="display: none;"></div>
    </form>
  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- ... (your HTML code) ... -->

<script>
    $('#editprofileform').submit(function(event) {
      event.preventDefault();
      var newPassword = $('#new-password').val();
      var confirmPassword = $('#confirm-new-password').val();

      if (newPassword !== confirmPassword) {
        $('#passwordMatchError').slideDown().delay(5000).slideUp();
        return;
      }

      // If passwords match, proceed with form submission via AJAX
      var formData = $(this).serialize();

      $.ajax({
        url: '{{ route("editprofile") }}',
        type: 'POST',
        data: formData,
        success: function(response) {
          console.log('Status updated successfully:', response);
          showSuccess(response.message);
          $('#editprofileform')[0].reset();
        },
        error: function(xhr, status, error) {
          console.error('Error:', error);
          var errorMessage = xhr.responseJSON.message;

          if (typeof errorMessage === 'object' && errorMessage !== null && errorMessage.hasOwnProperty('new_password')) {
            // Check if the error is due to password mismatch
            showError('Passwords do not match');
          } else {
            showError(errorMessage); // Display other errors normally
          }
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

</html>
