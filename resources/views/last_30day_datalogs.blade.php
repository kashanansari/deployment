<!DOCTYPE html>
<html>
<head>
    <title>Last 30 Days Datalogs</title>
    <style>
        /* Basic table styling */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style></head>
<body>
    <div id="datalogs-table">
        <!-- Table to display the datalogs -->
        <table id="datalogs">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Registration Number</th>
                    <th>Contact Person	</th>
                    <th>Contact No	</th>
                    <th>Alert	</th>
                    <th>Remarks</th>
                    <th>Date</th>
                    <th>Time</th>


                    <!-- Add other table headers for each field -->
                </tr>
            </thead>
            <tbody>
                <!-- Table body will be populated by AJAX call -->
            </tbody>
        </table>
    </div>

    <!-- Include jQuery or any other library for AJAX -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/last30days', // Endpoint to fetch datalogs
                type: 'GET',
                success: function(response) {
                    if (response.success) {
                        displayDatalogs(response.data);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });

            function displayDatalogs(data) {
                var tableBody = $('#datalogs tbody');
                tableBody.empty(); // Clear existing table data

                // Loop through the data and create rows in the table
                data.forEach(function(entry) {
                    var row = '<tr>' +
                        '<td>' + entry['customer_name'] + '</td>' +
                        '<td>' + entry['reg-no'] + '</td>' +
                        '<td>' + entry['Contact-person'] + '</td>' +
                        '<td>' + entry['contact-no'] + '</td>' +
                        '<td>' + entry['Nature-of-alert'] + '</td>' +
                        '<td>' + entry['Remarks'] + '</td>' +
                        '<td>' + entry['date'] + '</td>' +
                        '<td>' + entry['time'] + '</td>' +

                        // Add other table cells for each field
                        '</tr>';

                    tableBody.append(row);
                });
            }
        });
    </script>
</body>
</html>
