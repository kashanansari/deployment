<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <title>Home Page of Ali</title>
  <style>
    /* Your custom styles for button styling here */
    .btn-fancy {
      background-color: #000000;
      color: #7fcde0;
      border: none;
      border-radius: 10px;
      padding: 20px 30px;
      font-size: 24px;
      margin-right: 10px;
      margin-bottom: 20px; /* Space between buttons */
      text-transform: uppercase; /* Convert text to uppercase */
      display: inline-flex;
      align-items: center;
      width: 150%; /* Set button width */
      justify-content: flex-start; /* Align button contents to the left */
    }

    .btn-container {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      margin-bottom: 20px;
    }

    .btn-fancy i {
      margin-right: 20px;
      font-size: 40px;
    }

    .col-md-9 {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }
    .btn-logout {
      background-color: #4e51f3;
      color: #000000;
      border: none;
      border-radius: 10px;
      padding: 20px 30px;
      font-size: 14px;
      text-transform: uppercase;
      text-decoration: none;
      margin-bottom: 20px;
      display: inline-block;
      position: absolute;
      top: 20px;
      right: 20px;
    }

    /* Styling on hover for the logout button */
    .btn-logout:hover {
      background-color: #000000;
      color: #897fe0;
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
  {{-- </style> --}}
</head>
<body>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5 text-center">
          <!-- Add your content for the home page here -->
          <h1>Welcome to the Dashboard of Master Admin</h1>
          <p>User details submission and dashboard features go here.</p>
          <div class="container">
            <div class="row">
                <div class="employee-details mt-4">
                    <h1 class="welcome-heading">Welcome: {{ $empid['emp_name'] }}</h1>
                    <p class="designation">Designation: {{ $empid['designation'] }}</p>
                </div>
            </div>
          </div>
          <!-- Each button in a single row -->
          <div class="btn-container">
            <div>
              <a href="{{ route('emp_attends') }}" class="btn btn-fancy">
                <i class="fas fa-address-card"></i> Emp Attendance
              </a>
            </div>
            <div>
              <a href="{{ route('view_employees') }}" class="btn btn-fancy">
                <i class="fas fa-address-book"></i> Total Employees
              </a>
            </div>
            <div>
              <a href="{{ route('show') }}" class="btn btn-fancy">
                <i class="fas fa-user-friends"></i> View All User
              </a>
            </div>
            <div>
              <a href="{{ route('completedetails') }}" class="btn btn-fancy">
                <i class="fas fa-car"></i> Vehicle status
              </a>
            </div>
            <div>
              <a href="{{ route('sales_lead') }}" class="btn btn-fancy">
                <i class="fas fa-chart-line"></i> Sales Lead
              </a>
            </div>
            <div>
              <a href="{{ route('allcomplain') }}" class="btn btn-fancy">
                <i class="fas fa-comment"></i> All Complain
              </a>
            </div>
            <div>
              <a href="{{ route('user') }}" class="btn btn-fancy">
                <i class="fas fa-user-plus"></i> User Registration
              </a>
            </div>
            <div>
                <!-- All User Details button -->
                <a href="{{ route('getrenewals') }}" class="btn btn-fancy">
                  <i class="fas fa-users"></i>All Renewals
                </a>
              </div>
              <div>
                <!-- All User Details button -->
                <a href="{{ route('viewprofile') }}" class="btn btn-fancy">
                  <i class="fas fa-users"></i> Edit profile
                </a>
              </div>
              <div>
                <!-- All User Details button -->
                <a href="{{ route('alldatalogs') }}" class="btn btn-fancy">
                  <i class="fas fa-users"></i> Alldata logs
                </a>
                <a href="{{ route('allcomplainlogs') }}" class="btn btn-fancy">
                    <i class="fas fa-users"></i> AllComplain logs
                  </a>
                  <a href="{{ route('view_all_device_inventory') }}" class="btn btn-fancy">
                    <i class="fas fa-users"></i> Device inventory
                  </a>
                  <a href="{{ route('view_forget') }}" class="btn btn-fancy">
                    <i class="fas fa-users"></i> Employees Request
                  </a>
                  <a href="{{ route('record') }}" class="btn btn-fancy">
                    <i class="fas fa-users"></i> Attendance machine
                  </a>
                  <div>
                    <a href="{{ route('dollar_rate') }}" class="btn btn-fancy">
                        <i class="fas fa-dollar-sign"></i> View Dollar Rate
                    </a>
                </div>


              </div>
            <!-- ... rest of your HTML ... -->
    <!-- Logout button -->
    <div>
        <a href="{{ route('logout') }}" class="btn-logout">
          Logout
        </a>
      </div>
          </div>

        </div>


      </div>
    </div>
  </section>
</body>
</html>
