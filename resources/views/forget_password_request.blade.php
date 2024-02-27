<!DOCTYPE html>
<html>
<head>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Employee List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: flex-start;
        }
        .employee-box {
            background-color: #fff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border-radius: 6px;
            padding: 20px;
            margin: 15px;
            width: calc(30% - 30px);
            min-width: 250px;
        }
        .employee-box p {
            margin: 8px 0;
            color: #333;
        }
        .employee-box p:first-child {
            font-weight: bold;
            font-size:20px;
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .pagination li {
            list-style: none;
            margin: 0 5px;
        }
        .pagination a {
            display: inline-block;
            padding: 8px 12px;
            border: 1px solid #333;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
        }
        .pagination a.active {
            background-color: #333;
            color: #fff;
        }
        .pagination a:hover {
            background-color: #ddd;
        }
        .logo-heading {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo-heading h1 {
            font-family: 'Arial', sans-serif;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: bold;
            background-color: #f8f8f8;
            padding: 20px 0;
            border-bottom: 2px solid #ccc;
            border-top: 2px solid #ccc;
            margin-top: 0;
        }
        .action-btn {
            display: block;
            margin-top: 10px;
            width: 100%;
        }
        .employee-box p:nth-child(3) {
    margin: 8px 0;
    color: #fff;
    padding: 10px 15px;
    border-radius: 5px;
    font-weight: bold;
    background: linear-gradient(to right, #ff758c, #ff7eb3); /* Gradient colors */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);

}



    </style>
</head>
<body>
    <div class="logo-heading">
        <h1>Forget password Employee List</h1>
    </div>
    <form class="form-horizontal" id="forgetPassword">
        @csrf
        <div class="container">
            @foreach($employees as $employee)
                <div class="employee-box" id="employee_{{ $employee->emp_id }}">
                    <button type="button" class="close" aria-label="Close" data-emp-id="{{ $employee->emp_id }}">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p>Employee Name: {{ $employee->emp_name }}</p>
                    <p>Employee password: {{ $employee->password }}</p>
                    <button class="btn btn-primary clear-btn" data-emp-id="{{ $employee->emp_id }}">Clear</button>
                </div>
            @endforeach
        </div>
    </form>

    <div id="successMessage" style="color: green;"></div>
    <div id="errorMessage" style="color: red;"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
      $(document).ready(function() {
    $('.clear-btn').click(function() {
        var empId = $(this).data('emp-id');

        $.ajax({
            url: '{{ route("action_forget") }}',
            type: 'POST',
            data: { emp_id: empId, _token: '{{ csrf_token() }}' }, // Sending the employee ID
            success: function(response) {
                // Handle success response
                console.log('Remarks submitted successfully:', response);
                $('#employee_' + empId).remove(); // Remove the employee box upon successful response
                $('#successMessage').text('Successfully recovered...');
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.error('XHR Status:', xhr.status);
                console.error('Error:', error);
                console.error('Response Text:', xhr.responseText);
                $('#errorMessage').text('Error submitting remarks. Please try again.');
            }
        });
    });
});

    </script>


</body>
</html>
