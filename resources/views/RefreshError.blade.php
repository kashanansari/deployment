<!-- resources/views/RefreshError.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .error-container {
            width: 400px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }

        .error-title {
            font-size: 24px;
            margin-bottom: 20px;
            color: #ff0000;
        }

        .error-message {
            font-size: 18px;
        }

        .close-btn {
            background-color: #ff0000;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 8px 16px;
            cursor: pointer;
        }

        .close-btn:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>

<div class="error-container">
    <div class="error-title">Error</div>
    <div class="error-message">{{ $message }}</div>
    <button type="button" class="close-btn" onclick="window.history.back();">Close</button>
</div>

</body>
</html>
