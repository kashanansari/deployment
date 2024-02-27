<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .button-container {
            text-align: center;
        }

        .button-container button {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .back-button {
            background-color: #d9534f;
            color: #fff;
        }

        .action-button {
            background-color: #5bc0de;
            color: #fff;
        }

        .action-button:hover {
            background-color: #4fa8d1; /* Darken the color on hover */
        }

        .action-button.redo {
            background-color: #5bc0de;
        }

        .action-button.removal {
            background-color: #f0ad4e;
        }

        .action-button.installation {
            background-color: #5bc0de;
        }

        .action-button.device {
            background-color: #5bc0de;
        }

        .action-button.inventory {
            background-color: #5bc0de;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Request Form</h1>
        <div class="button-container">
            <button class="back-button" onclick="navigateTo('home1')">Back</button>
        </div>
        <div class="button-container">
            <button class="action-button installation" onclick="navigateTo('installation')">Installation</button>
            <button class="action-button device" onclick="navigateTo('technical')">Device Inventory</button>
            <button class="action-button redo" onclick="navigateTo('cc')">Redo</button>
            <button class="action-button removal" onclick="navigateTo('removal')">Removal</button>
            <button class="action-button removal" onclick="navigateTo('ownershipform')">Ownership Transfer</button>
            <button class="action-button removal" onclick="navigateTo('ownershipform')"> DataLogs</button>
            <button class="action-button removal" onclick="navigateTo('sms_box')"> SMS box</button>

        </div>
    </div>

    <script>
        function navigateTo(url) {
            window.location.href = url;
        }
    </script>
</body>
</html>
