<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <title>Home Page of Customer Services</title>
  <style>
    /* Your existing styles here (you can maintain the same theme as the login page) */
    /* Center buttons vertically and horizontally */
    .col-md-2 {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        height: 100px;
    }

    .btn-custom {
        background-color: #157cc0; /* Change to your desired button color */
        border-color: #e3e4e3; /* Change border color if needed */
        color: #fff; /* Text color */
        width: 100%; /* Button width */
        margin-bottom: 15px; /* Adjust spacing */
    }
    .welcome-heading {
        text-align: center;
        margin-top: 50px;
        margin-bottom: 30px;
    }

    .welcome-heading h1 {
        font-family: 'Arial', sans-serif;
        font-size: 48px;
        color: #333;
        margin-bottom: 10px;
    }

    .welcome-heading .designation {
        font-family: 'Arial', sans-serif;
        font-size: 24px;
        color: #777;
    }

    .dashboard-heading h2 {
        font-family: 'Arial', sans-serif;
        font-size: 32px;
        color: #444;
        margin-bottom: 20px;
    }

    .dashboard-heading p {
        font-family: 'Arial', sans-serif;
        font-size: 18px;
        color: #666;
        line-height: 1.6;
    }
  </style>
</head>
<body>

<div class="container-fluid h-custom">
  <div class="row align-items-center h-100">
    <div class="col-md-2">
      <!-- User Details button -->
      <a href="{{ route('user') }}" class="btn btn-custom mb-3">
        <i class="fas fa-users"></i> User Details
      </a>
      <!-- User Complain button -->
      <a href="{{ route('complainform') }}" class="btn btn-custom">
        <i class="fas fa-users"></i> User Complain
      </a>
      <!-- Edit profile button -->
      <a href="{{ route('ownershipform') }}" class="btn btn-custom">
        <i class="fas fa-users"></i> Add Data logs
      </a>
      <a href="{{ route('viewprofile') }}" class="btn btn-custom">
        <i class="fas fa-users"></i> Edit Profile
      </a>
    </div>
    <div class="col-md-7">
        <!-- Welcome message -->
        <div class="welcome-heading">
          <h1>Welcome:{{ $empid['emp_name'] }}</h1>
          <span class="designation">Designation: {{ $empid['designation'] }}</span>
          {{-- <span id="empId" class="designation">Designation: {{ $data['emp_id'] }}</span> --}}

          <!-- JavaScript to hide the element -->
          <script>
            document.getElementById("empId").style.display = "none";
          </script>

        </div>
        <!-- Dashboard information -->
        <div class="dashboard-heading">
          <h2>Welcome to the Dashboard of {{$empid['role']}}</h2>
          <p>User details submission and dashboard features go here.</p>
        </div>
    <div class="col-md-3 text-center">
      <!-- Logout button -->
      <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</button>
    </div>
  </div>
</div>

<!-- Logout Confirmation Modal -->
<div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href="{{ route('logout') }}" class="btn btn-primary">Logout</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
