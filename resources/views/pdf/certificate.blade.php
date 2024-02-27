<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking Device Installation Certificate</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 12px;
        }
        .container {
            width: 800px;
            margin: 0 auto;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            box-sizing: border-box;
            page-break-inside: avoid; /* Prevent container from breaking onto a new page */
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            max-width: 200px;
            height: auto;
        }
        .header h1 {
            margin: 0;
            font-size: 20px;
        }
        .info table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }
        .info table th, .info table td {
            border: 2px solid black;
            padding: 4px;
            text-align: left;
            font-size: 12px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-style: italic;
            color: #888;
            padding: 4px; /* Prevent footer from breaking onto a new page */
        }
    </style>
    
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://media.licdn.com/dms/image/C4E0BAQGvNqPfeE_DNg/company-logo_200_200/0/1631327621147?e=2147483647&v=beta&t=c1yfmxkYO6ycF9Mybn6wiEfUj8uGQCPLr8hU_PmKBxA" alt="Company Logo">
            <h1>Tracking Device Installation Certificate</h1>
        </div>
        
        <div class="body-text">
            <p>Dear Concern,</p>
            <p>This is to verify that MCC has successfully installed the tracking device in the vehicle bearing the following details:</p>
        </div>

        <div class="info">
            <table>
                <tr>
                    <th>Detail</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>Customer Name</td>
                    <td>{{ $value['customer_name'] }}</td>
                </tr>
                <tr>
                    <td>Registration Number</td>
                    <td>{{ $value['registration_number'] }}</td>
                </tr>
                <tr>
                    <td>Engine Number</td>
                    <td>{{ $value['engine_number'] }}</td>
                </tr>
                <tr>
                    <td>Chassis Number</td>
                    <td>{{ $value['chassis_number'] }}</td>
                </tr>
                <tr>
                    <td>Make</td>
                    <td>{{ $value['make'] }}</td>
                </tr>
                <tr>
                    <td>Model</td>
                    <td>{{ $value['model'] }}</td>
                </tr>
                <tr>
                    <td>Year</td>
                    <td>{{ $value['year'] }}</td>
                </tr>
                <tr>
                    <td>Installation Date</td>
                    <td>{{ $value['installation_date'] }}</td>
                </tr>
                <tr>
                    <td>Validity</td>
                    <td>{{ $value['validity'] }}</td>
                </tr>
                <tr>
                    <td>Segment</td>
                    <td>{{ $value['segment'] }}</td>
                </tr>
            </table>
        </div>

        <div class="footer">
            <p>130/A S.M.C.H.S Karachi, Pakistan&nbsp;&nbsp;&nbsp;0213-45535573 / 0348-1038712&nbsp;&nbsp;&nbsp;<a href="www.magmacc.com">www.magmacc.com</a>&nbsp;&nbsp;&nbsp;<a href="mailto:support@magmacc.com">support@magmacc.com</a></p>
        </div>
       
    </div>
</body>
</html>
