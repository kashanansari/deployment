<!DOCTYPE html>
<html lang="en">
<head>
  <title>Password Reset</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f7f7f7;
      margin: 0;
      padding: 0;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    #forgotPasswordForm {
      width: 300px;
      background-color: #fff;
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 24px;
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 15px;
      font-weight: bold;
      color: #555;
    }

    input[type="text"] {
      width: calc(100% - 20px);
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }
    .custom-button {
      display: inline-block;
      padding: 12px 20px;
      margin-top: 20px;
      border: none;
      border-radius: 5px;
      background-color: #007bff;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      text-transform: uppercase;
      cursor: pointer;
      transition: background-color 0.3s ease;
      text-decoration: none; /* Remove underline for anchor tag */
      outline: none; /* Remove default focus outline */
    }

    .custom-button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
    <button class="custom-button" onclick="redirectToAnotherPage()">Back to login</button>

  <div class="container">
    <form id="forgotPasswordForm" method="post">
      @csrf
      <h1>Forgot Password</h1>
      <div class="inset">
        <p>
          <label for="login_id">Enter your Login ID/Email:</label>
          <input type="text" name="login_id" id="login_id" required>
        </p>
      </div>
      <p class="p-container">
        <input type="submit" name="submit" value="Submit">
      </p>
    </form>
  </div>

  <div id="successMessage" class="alert alert-success" style="display: none;"></div>
  <div id="errorMessage" class="alert alert-danger" style="display: none;"></div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
    $('#forgotPasswordForm').submit(function(event) {
      event.preventDefault(); // Prevent default form submission

      // Get form data
      var formData = $(this).serialize();

      // AJAX POST request
      $.ajax({
        url: '{{ route("forget") }}', // Replace with your Laravel route
        type: 'POST',
        data: formData,
        success: function(response) {
          $('#forgotPasswordForm')[0].reset();

          // Display success message from API response
          alert(response.response); // Replace with your preferred notification method
        },
        error: function(xhr, status, error) {
          // Handle errors
          console.error('XHR Status:', xhr.status);
          console.error('Error:', error);
          console.error('Response Text:', xhr.responseText);

          // Show error message on the screen
          alert('Error: ' + xhr.responseText); // Replace with your preferred notification method
        }
      });
    });
  </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  function redirectToAnotherPage() {
    // Redirect to another page
    window.location.href = '/login'; // Replace 'url_of_another_page' with the desired URL
  }

  // AJAX form submission code remains unchanged
  $('#forgotPasswordForm').submit(function(event) {
    event.preventDefault();
    // AJAX request code here...
  });
</script>
</body>
</html>
