<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Form</title>
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    * {
      padding: 0;
      margin: 0;
    }
    body {
      background: url(http://wrbbradio.org/wp-content/uploads/2016/10/grey-background-07.jpg) no-repeat center fixed;
      background-size: cover;
      margin: 0; /* Add margin to reset default body margin */

    }
    .container {
      background: #2d3e3f;
      width: 600px;
      height: 500px;
      padding-bottom: 20px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      margin: auto;
      padding: 70px 50px 20px 50px;
    }
    .fl {
      float: left;
      width: 110px;
      line-height: 35px;
    }
    .fontLabel {
      color: white;
    }
    .fr {
      float: right;
    }
    .clr {
      clear: both;
    }
    .box {
      width: 360px;
      height: 35px;
      margin-top: 10px;
      font-family: verdana;
      font-size: 12px;
    }
    .textBox {
      height: 35px;
      width: 190px;
      border: none;
      padding-left: 20px;
    }
    .new {
      float: left;
    }
    .iconBox {
      height: 35px;
      width: 40px;
      line-height: 38px;
      text-align: center;
      background: #ff6600;
    }
    .radio {
      color: white;
      background: #2d3e3f;
      line-height: 38px;
    }
    .terms {
      line-height: 35px;
      text-align: center;
      background: #2d3e3f;
      color: white;
    }
    .submit {
      float: right;
      border: none;
      color: white;
      width: 110px;
      height: 35px;
      background: #ff6600;
      text-transform: uppercase;
      cursor: pointer;
    }
    ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
    }
   /* Your existing CSS content */

.notification {
  position: fixed;
  top: 20px;
  right: 20px;
  background-color: #333;
  color: white;
  border-radius: 5px;
  padding: 16px;
  z-index: 9999;
  display: none;
  animation: slide-in 0.5s ease-in-out;
}

@keyframes slide-in {
  from {
    transform: translateY(-100%);
  }
  to {
    transform: translateY(0);
  }
}

.notification.show {
  display: block;
}

.notification p {
  margin: 0;
  font-size: 16px;
}

.notification .closebtn {
  color: white;
  float: right;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
}

.notification .closebtn:hover {
  color: #bbb;
}

  #alert-box {
    position: absolute;
    top: 60%;
    left: 45%;
    transform: translate(-50%, -50%);
    z-index: 999;
  }
  </style>
</head>
<body>
    <div class="header">
        <h1 style="text-align: center; color: #2d3e3f;">Device Inventory</h1>
      </div>
  <!-- Body of Form starts -->
  <div class="container">
    <form method="post"  id="my-form">
        @csrf
      <!--First name-->
      <div class="box">
        <label for="firstName" class="fl fontLabel"> Device Serial No: </label>
        <div class="new iconBox">
          <i class="fa fa-user" aria-hidden="true"></i>
        </div>
        <div class="fr">
          <input type="text" name="device_serialno" placeholder="Enetr device serial no" class="textBox" autofocus="on" required>
        </div>
        <div class="clr"></div>
      </div>
      <!--First name-->

      <!--Second name-->

      <!--Second name-->

      <!---Phone No.------>
      <div class="box">
        <label for="phone" class="fl fontLabel"> IMEI Number: </label>
        <div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
        <div class="fr">
          <input type="text" required name="imei_no" maxlength="10" placeholder="Enter Imei no." class="textBox">
        </div>
        <div class="clr"></div>
      </div>
      <!---Phone No.---->

      <!---Email ID---->
      <div class="box">
        <label for="email" class="fl fontLabel"> Vendor: </label>
        <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
        <div class="fr">
          <input type="text" required name="vendor" placeholder=" Enter Vendor name" class="textBox">
        </div>
        <div class="clr"></div>
      </div>
      <div class="box">
        <label for="email" class="fl fontLabel"> Device Sim : </label>
        <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
        <div class="fr">
          <input type="tel" required name="devciesim_no" placeholder=" Enetr sim no." class="textBox">
        </div>
        <div class="clr"></div>
      </div>
      <!--Email ID----->

      <!---Password------>

      <!--Terms and Conditions------>

      <!---Submit Button------>
      <div class="box" style="background: #2d3e3f">
        <input type="Submit" name="Submit" class="submit" value="SUBMIT">
      </div>
      <!---Submit Button----->
    </form>
  </div>
  <div class="notification" id="alert-box"></div>


  <!-- Your HTML content -->

<!-- Your HTML content -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function displayNotification(message, type) {
            var alertBox = $('#alert-box');
            alertBox.text(message);

            if (type === 'success') {
                alertBox.css('background-color', '#4CAF50');
            } else {
                alertBox.css('background-color', '#f44336');
            }

            alertBox.fadeIn().delay(3000).fadeOut();
        }

        $("#my-form").submit(function(event) {
    event.preventDefault();
    var formData = $(this).serialize();

    $.ajax({
        type: "POST",
        url: "{{ route('storeinventory') }}",
        data: formData,
        success: function(data) {
            if (data.response === "This device already exists") {
                displayNotification(data.response, 'error');
            } else if (data.response === "Inventory created successfully") {
                displayNotification(data.response, 'success');
                $('#my-form')[0].reset();
            }
        },
        error: function(xhr, status, error) {
            var errorMessage = xhr.responseJSON.response;
            displayNotification(errorMessage, 'error');
        }
    });
});

    });
</script>

</body>
</html>
