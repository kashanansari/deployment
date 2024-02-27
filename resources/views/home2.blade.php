<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Dashboard</title>
  <!-- Include necessary CSS and JavaScript libraries -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    /* Your existing styles here */
    body {
      background-color: #f0f0f0;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .vh-100 {
      height: 100vh;
    }

    .h-custom {
      height: 50vh;
    }

    .btn-primary-custom {
      background-color: #3498DB;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      display: block;
      margin: 20px auto;
      width: 80%;
      text-align: center;
    }

    .btn-primary-custom:hover,
    .btn-primary-custom:focus {
      background-color: #2980B9;
    }

    .btn-logout-custom {
      background-color: #d9534f;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      position: absolute;
      top: 20px;
      right: 20px;
    }

    .btn-logout-custom:hover,
    .btn-logout-custom:focus {
      background-color: #c9302c;
    }

    .dropbtn {
      background-color: #3498DB;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      display: block;
      width: 80%;
      margin: 20px auto;
      text-align: center;
    }

    .dropbtn:hover,
    .dropbtn:focus {
      background-color: #2980B9;
    }

    .dropdown {
      text-align: center;
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 200px;
      max-height: 300px;
      overflow-y: auto;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
      margin-top: 20px;
      right: 0;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }
    .welcome-heading {
      font-size: 2.5rem;
      color: #3498DB;
      margin-bottom: 10px;
    }

    .designation {
      font-size: 1.5rem;
      color: #555;
    }
  </style>

</head>

<body>
  <div style="position: relative;">
    <div class="col-md-6 text-center">
      <h1>Welcome to the Dashboard of Supervisor</h1>
      <p>User details submission and dashboard features go here.</p>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mt-4">
            <h1 class="welcome-heading">Welcome: {{ $empid['emp_name'] }}</h1>
            <p class="designation">Designation: {{ $empid['designation'] }}</p>
          </div>
        </div>
      </div>
    <section class="vh-100">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-3">
            <!-- Technical Registration button -->
            <a href="{{ route('technical') }}" class="btn btn-primary btn-primary-custom">
              <i class="fas fa-users"></i> Security Registration
            </a>
          </div>
          <div class="col-md-3">
            <!-- All User Details button -->
            <a href="{{ route('show') }}" class="btn btn-primary btn-primary-custom">
              <i class="fas fa-users"></i> All User Details
            </a>
          </div>
          <div class="col-md-3">
            <!-- All User Details button -->
            <a href="{{ route('viewprofile') }}" class="btn btn-primary btn-primary-custom">
              <i class="fas fa-users"></i> Edit profile
            </a>
          </div>
          <div class="col-md-3">
            <!-- All User Details button -->
            <a href="{{ route('getrenewals') }}" class="btn btn-primary btn-primary-custom">
              <i class="fas fa-users"></i> Renewals
            </a>
          </div>
          <div class="col-md-3 ">
            <!-- Centered Notifications button -->
            <div class="dropdown">
              <a href="{{ route('securityalert') }}" class="dropbtn">Notifications of Customer</a>
              <div id="myDropdown" class="dropdown-content">
                @if(isset($data))
                  @foreach ($data as $item)
                    <a>{{ $item->data['customer_name'] }}</a>
                    {{-- <a>{{ $item->data['father_name'] }}</a> --}}
                  @endforeach
                @else
                  <p>No notifications</p>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Logout button -->
    <button class="btn btn-logout-custom" id="logoutButton">Logout</button>

    <!-- Logout Confirmation Modal -->
    <div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Are you sure you want to logout?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a href="{{ route('logout') }}" class="btn btn-primary">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- JavaScript to show the logout confirmation modal -->
    <script>
      $(document).ready(function () {
        $('#logoutButton').click(function () {
          $('#logoutModal').modal('show');
        });
      });
    </script>
  </div>
</body>

</html>
