<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Home Page of CRO</title>
    <style>
        /* Your custom styles for button styling here */
        .btn-fancy {
            background-color: #000000;
            color: #7fcde0;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 25px;
            margin-right: 10px;
            text-transform: uppercase; /* Convert text to uppercase */
            display: flex;
            align-items: center;
            margin-bottom: 10px; /* Adding margin between buttons */
        }

        .btn-container {
            margin-bottom: 60px;
        }

        /* Adjusted size for the icons */
        .btn-fancy i {
            margin-right: 12px; /* Increased margin to create space between icon and text */
            font-size: 80px; /* Adjusted font size for larger icons */
        }

        /* Facebook-like header */
        .header {
            text-align: center;
            margin-bottom: 30px;
            font-family: 'Arial', sans-serif;
            color:  #80a1e9;
            font-size: 48px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            padding: 20px 0;
            background-color: #f7f7f7;
        }
    </style>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5 text-center">
                    <!-- Title/Header -->
                    <h1 class="header">Employee Information</h1>

                    <!-- Description -->
                    <p>Employee details submission and dashboard features go here.</p>

                    <!-- First row of buttons -->
                    <div class="btn-container">
                        <a href="{{ route('allemp') }}" class="btn btn-fancy">
                            <i class="fas fa-users"></i> All Employee
                        </a>
                        <a href="{{ route('add_employees') }}" class="btn btn-fancy">
                            <i class="fas fa-user-plus"></i> Add new employee
                        </a>
                        <a href="{{ route('update_emp') }}" class="btn btn-fancy">
                            <i class="fas fa-user-edit"></i> Update employee
                        </a>
                    </div> <!-- Close btn-container div -->
                </div> <!-- Close col-md-9 col-lg-6 col-xl-5 text-center -->
            </div> <!-- Close row d-flex justify-content-center align-items-center h-100 -->
        </div> <!-- Close container-fluid h-custom -->
    </section>
</body>

</html>
