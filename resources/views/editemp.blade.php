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
        /* Style for the eye icon or image */
.toggle-password {
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
}

    </style>
    <title>Update Employee</title>
</head>
<body>

<div class="container">
    <div class="form-container">
        <h2 class="text-center mb-4">Update Employee</h2>

        <div class="employee-picture">
            <h4>Employee Picture:</h4>
            @if ($data->image)
                <img src="{{ asset('storage/app/public/image/' . $data->image) }}" alt="Employee Picture" class="img-fluid">
            @else
                No Image Available
            @endif
        </div>



<div class="modal fade" id="changePictureModal" tabindex="-1" role="dialog" aria-labelledby="changePictureModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changePictureModalLabel">Change Employee Picture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="imageForm" action="{{ route('change_pic') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="newPicture">Upload New Picture:</label>
                        <input type="file" class="form-control-file" id="newPicture" name="image" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Change Picture</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript to handle modal show event
    $('#changePictureModal').on('show.bs.modal', function () {
        $('#newPicture').val(''); // Clear the file input when the modal opens
    });

    // JavaScript to handle form submission
    $('#imageForm').submit(function (e) {
        e.preventDefault();
        // You can handle the image upload logic here
        // using AJAX or submit the form using the appropriate method
        // For example:
        // $(this).ajaxSubmit();
        // or
        // this.submit();
        // After the image is uploaded, you can close the modal if needed:
        // $('#changePictureModal').modal('hide');
    });
</script>
        <form action="{{ route('edit_emp') }}" method="post" enctype="multipart/form-data">
            @csrf
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#changePictureModal">
                Change Picture
            </button>

            <div class="form-group">
                <label for="employeeId">Employee ID:</label>
                <input type="text" class="form-control" id="employeeId" name="emp_id"  value="{{$data->emp_id}}"required readonly>
            </div>

            <div class="form-group">
                <label for="employeeName">Employee Name:</label>
                <input type="text" class="form-control" id="employeeName" name="emp_name" value="{{$data->emp_name}}" required>
            </div>

            <div class="form-group">
                <label for="employeeLoginId">Employee Login ID:</label>
                <input type="text" class="form-control" id="employeeLoginId" name="em_loginid"  value="{{$data->em_loginid}}" required>
            </div>

            <!-- ... (other HTML code) ... -->
            <div class="form-group">
                <label for="password">Password:</label>
                <div class="password-input position-relative">
                    <input type="password" class="form-control" id="password" name="password" value="{{$data->password}}" required>
                    <span class="toggle-password" onclick="togglePasswordVisibility()">
                        <!-- SVG icon for the open eye -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 7c-2.76 0-5 2.24-5 5s2.24 5 5 5c1.71 0 3.21-.87 4.1-2.19l1.49 1.49C16.01 17.31 14.11 18 12 18c-3.87 0-7-3.13-7-7s3.13-7 7-7c1.95 0 3.69.81 4.95 2.05l1.46-1.46C15.23 4.19 13.81 3 12 3zm0 2c1.48 0 2.8.76 3.56 1.91l-1.41 1.41C14.01 8.93 13.08 8 12 8c-1.1 0-2.09.45-2.82 1.18l-1.41-1.41C9.2 7.76 10.52 7 12 7zm0 2c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z"/>
                        </svg>
                    </span>
                </div>
            </div>
            <script>
                function togglePasswordVisibility() {
                    var passwordField = document.getElementById("password");
                    var toggleBtn = document.querySelector(".toggle-password");

                    if (passwordField.type === "password") {
                        passwordField.type = "text";
                        // Use an SVG icon for the open eye
                        toggleBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 7c-2.76 0-5 2.24-5 5s2.24 5 5 5c1.71 0 3.21-.87 4.1-2.19l1.49 1.49C16.01 17.31 14.11 18 12 18c-3.87 0-7-3.13-7-7s3.13-7 7-7c1.95 0 3.69.81 4.95 2.05l1.46-1.46C15.23 4.19 13.81 3 12 3zm0 2c1.48 0 2.8.76 3.56 1.91l-1.41 1.41C14.01 8.93 13.08 8 12 8c-1.1 0-2.09.45-2.82 1.18l-1.41-1.41C9.2 7.76 10.52 7 12 7zm0 2c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z"/></svg>`;
                    } else {
                        passwordField.type = "password";
                        // Use the default eye icon for the closed eye
                        toggleBtn.innerHTML = "👁️";
                    }
                }
            </script>

            <div class="form-group">
                <label for="designation">Designation:</label>
                <input type="text" class="form-control" id="designation" name="designation"   value="{{$data->designation}}" required readonly>
            </div>

            <div class="form-group">
                <label for="contactNumber">Contact Number:</label>
                <input type="text" class="form-control" id="contactNumber" name="contact"  value="{{$data->contact}}"  required>
            </div>

            <div class="form-group">
                <label for="cnic">CNIC:</label>
                <input type="text" class="form-control" id="cnic" name="cnic" value="{{$data->cnic}}"  required>
            </div>
            <div class="form-group">
                <label for="role">Select Role:</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="CRO" <?php echo ($data->role === 'CRO') ? 'selected' : ''; ?>>CRO</option>
                    <option value="Technician" <?php echo ($data->role === 'Technician') ? 'selected' : ''; ?>>Technician</option>
                    <option value="Sales Operator" <?php echo ($data->role === 'Sales Operator') ? 'selected' : ''; ?>>Sales Operator</option>
                    <option value="Sales Person" <?php echo ($data->role === 'Sales Person') ? 'selected' : ''; ?>>Sales Person</option>
                    <option value="Super Visor" <?php echo ($data->role === 'Super Visor') ? 'selected' : ''; ?>>Super Visor</option>
                </select>
            </div>



            <button type="submit" class="btn btn-primary">update Employee</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
