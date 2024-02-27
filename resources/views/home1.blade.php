<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Include necessary CSS and JavaScript libraries -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Your Dashboard</title>
  <style>
    /* Your existing styles here */
    body {
      background-color: #f0f0f0;
      font-family: Arial, sans-serif;
    }

    .vh-100 {
      height: 100vh;
    }

    .h-custom {
      height: 100%;
    }

    .btn-primary-custom {
      background-color: #3498DB;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .btn-primary-custom:hover, .btn-primary-custom:focus {
      background-color: #2980B9;
    }

    .btn-logout-custom {
      background-color: #d9534f;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      margin: 10px; /* Add margin for spacing */
    }

    .btn-logout-custom:hover, .btn-logout-custom:focus {
      background-color: #c9302c;
    }

    .dropbtn {
      background-color: #3498DB;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .dropbtn:hover, .dropbtn:focus {
      background-color: #2980B9;
    }

    .dropdown {
      text-align: center; /* Center the button horizontally */
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
      margin-top: 20px; /* Adjust as needed */
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
  <div class="container-fluid h-custom">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Welcome to the Dashboard of Technical Services</h1>
        <p>User details submission and dashboard features go here.</p>
      </div>
    </div>
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
      <div class="row d-flex justify-content-between align-items-center h-100">
        <div class="col-md-4 text-center">
          <!-- Technical Registration button -->
          <a href="{{ route('reqform') }}" class="btn btn-primary btn-primary-custom">
            <i class="fas fa-user-plus" style="margin-right: 10px;"></i> Request form
          </a>
        </div>

        <div class="col-md-4 text-center">
          <!-- Centered Notifications button -->
          <div class="dropdown">
            <a href="{{ route('alert') }}" class="dropbtn">
              <i class="fas fa-bell" style="margin-right: 10px;"></i> Notifications of Customer
            </a>
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

        <div class="col-md-4 text-center">
          <!-- Complain Notifications button -->
          <a href="{{ route('cc') }}" class="btn btn-primary btn-primary-custom">
            <i class="fas fa-comment" style="margin-right: 10px;"></i> Redo Notifications
          </a>
        </div>

        <div class="col-md-4 text-center">
          <!-- Renewals button -->
          <a href="{{ route('getrenewals') }}" class="btn btn-primary btn-primary-custom">
            <i class="fas fa-users" style="margin-right: 10px;"></i> Renewals
          </a>

        </div>
        <div class="col-md-4 text-center">
            <!-- Renewals button -->
            <a href="{{ route('viewprofile') }}" class="btn btn-primary btn-primary-custom">
              <i class="fas fa-users" style="margin-right: 10px;"></i> Edit Profile
            </a>

          </div>
          <div class="col-md-4 text-center">
            <!-- Renewals button -->
            <a href="{{ route('renwals_removal') }}" class="btn btn-primary btn-primary-custom">
              <i class="fas fa-users" style="margin-right: 10px;"></i> Renwwals Removal
            </a>

          </div>
      </div>
    </div>
  </section>

  <div class="container-fluid h-custom">
    <div class="row">
      <div class="col-md-12 text-end">
        <!-- Logout button -->
        <button class="btn btn-logout-custom" id="logoutButton">Logout</button>
      </div>
    </div>
  </div>

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
</body>
</html>
