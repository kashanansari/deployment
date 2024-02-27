<!doctype html>
<html lang="en">
<head>
  <title>MagmaCC</title>
  <meta charset="utf-8">
  <style>
    /* CSS styles here */
    @import "compass/css3";

* { box-sizing: border-box; }

body {
  font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;
  color:white;
  font-size:12px;
  background:#333 url(/images/classy_fabric.png);
}

form {
  background:#111;
  width:600px; /* Increased width */
  margin:30px auto;
  border-radius:0.4em;
  border:1px solid #191919;
  overflow:hidden;
  position:relative;
  box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
  height: 550px; /* Increased height */
}

form:after {
  content:"";
  display:block;
  position:absolute;
  height:3px;
  width:100px;
  left:20%;
  background:linear-gradient(left, #111, #444, #b6b6b8, #444, #111);
  top:0;
}

form:before {
  content:"";
  display:block;
  position:absolute;
  width:8px;
  height:8px;
  border-radius:50%;
  left:34%;
  top:-7px;
  box-shadow: 0 0 6px 4px #fff;
}
    .inset {
      padding:20px;
      border-top:1px solid #a5a5ad;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #aca5a5;
      text-align: center;
    }

    h1 {
      font-size: 2em;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #ffffff;
      text-transform: uppercase;
      letter-spacing: 2px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      margin-top: 100px;
      margin-left: 20px; /* Adjust the margin-left value as needed */
    }


    form h1:after {
      content:"";
      display:block;
      width:450px;
      height:120px;
      position:absolute;
      top:0;
      left:50px;
      pointer-events:none;
      transform:rotate(70deg);
      background:linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
    }

    label {
      color:#666;
      display:block;
      padding-bottom:9px;
    }

    input[type=text],
    input[type=password] {
      width:100%;
      padding:8px 5px;
      background:linear-gradient(#1f2124, #27292c);
      border:1px solid #222;
      box-shadow: 0 1px 0 rgba(255,255,255,0.1);
      border-radius:0.3em;
      margin-bottom:20px;
    }

    label[for=remember]{
      color:white;
      display:inline-block;
      padding-bottom:0;
      padding-top:5px;
    }

    input[type=checkbox] {
      display:inline-block;
      vertical-align:top;
    }

    .p-container {
      padding:0 20px 20px 20px;
    }

    .p-container:after {
      clear:both;
      display:table;
      content:"";
    }

    .p-container span {
      display:block;
      float:left;
      color:#0d93ff;
      padding-top:8px;
    }

    input[type=submit] {
      padding:5px 20px;
      border:1px solid rgba(0,0,0,0.4);
      text-shadow:0 -1px 0 rgba(0,0,0,0.4);
      box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), inset 0 10px 10px rgba(255,255,255,0.1);
      border-radius:0.3em;
      background:#0184ff;
      color:white;
      float:right;
      font-weight:bold;
      cursor:pointer;
      font-size:18px;
    }

    input[type=submit]:hover {
      box-shadow: inset 0 1px 0 rgb(247, 239, 239), inset 0 -10px 10px rgba(255,255,255,0.1);
    }

   /* Existing CSS */

/* ... other styles ... */

input[type=text]:hover,
input[type=password]:hover,
label:hover ~ input[type=text],
label:hover ~ input[type=password],
input[type=password]:focus { /* Added focus state for password */
  background: #edf2f8; /* Adjust background color as needed */
}

label[for=email],
label[for=password] {
  color: rgb(228, 225, 225); /* Set the text color to white */
}
.notification {
      display: none;
      color: white;
      background-color: #e74c3c;
      padding: 10px 15px;
      border-radius: 5px;
      margin-bottom: 10px;
    }

.p-container span a {
  color: #3498db;
}
  </style>

</head>
<body>
    <form id="loginForm" action="{{ route('empLogin') }}" class="form-horizontal" method="post">
        @csrf
        <h1>Magma Consulting Pvt Ltd.</h1>
        <div class="notification error-message"></div>

        <div class="inset">
          <p>
            <label for="email">LOGIN EMAIl / ID</label>
            <input type="text" name="em_loginid" id="email" required>
          </p>
          <p>
            <label for="password">PASSWORD</label>
            <input type="password" name="password" id="password" required>
          </p>
          <p>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me for 14 days</label>
          </p>
        </div>
        <p class="p-container">
            <span><a href="{{ route('forget_pass') }}">Forgot password?</a></span>
            <input type="submit" name="go" id="go" value="Log in">
          </p>
      </form>
        </body>
    </html>
