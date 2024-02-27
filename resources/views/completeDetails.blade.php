<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.2/main.min.css">
    <title>All Employees info</title>
    <style>
        /* Your existing styles ... */

        /* Updated styles for the table */
        .custom-table {
            width: 100%;
            margin-bottom: 1rem;
            color: #fff;
            border-collapse: separate;
            border-spacing: 0 8px; /* Set the spacing between rows */
        }

        .custom-table th,
    .custom-table td {
        padding: 1rem 0.75rem; /* Adjust the padding values as needed */
        text-align: center;
        background-clip: padding-box;
        border: 1px solid #dee2e6;
    }

        .custom-table thead tr {
            background-color: #343a40;
            border-bottom: 2px solid #dee2e6; /* Add bottom border for header row */
        }

        .custom-table tbody tr {
            border-bottom: 1px solid #dee2e6; /* Add bottom border for data rows */
        }

        .custom-table tbody tr:last-child {
            border-bottom: none; /* Remove bottom border for the last row to prevent double borders */
        }

        .custom-table tbody tr:nth-child(odd) {
            background-color: #495057;
        }

        .custom-table tbody tr:hover {
            background-color: #3b4148;
        }

        .single-line {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 14px; /* Adjust the font size as needed */
        }
        .passport-image {
        max-width: 20px; /* Set the maximum width of each image */
        max-height: 20px; /* Set the maximum height of each image */
        width: auto; /* Maintain the aspect ratio */
        height: auto; /* Maintain the aspect ratio */
    }

    </style>
</head>
<body>
    <!-- Your existing HTML code ... -->

    <div class="container mt-3">
        <a href="#" class="btn btn-primary mb-3" onclick="goBack()">Back</a>
        <h1 style="text-transform: uppercase; font-family: 'cursive'; font-size: 40px; color: #000000d3; text-shadow: 2px 2px 4px #798de6;"> All Vehicle Information</h1>
        <h2 class="styled-link" style="font-size: 24px; color: #007BFF; text-decoration: underline; font-weight: bold; margin-top: 20px;">
            Total Records: {{ $count }}
        </h2>
        {{-- <div style="overflow-x: auto;"> --}}

        <table class="table custom-table" id="myTable">
            <thead>
                <tr>
                    <th scope="col" class="single-line" style="min-width: 50px;">Customer Type</th>
                    <th scope="col" class="single-line" style="min-width: 50px;">Customer Name</th>
                    <th scope="col" class="single-line" style="width: 250px;">Registration #</th>
                    <th scope="col" class="single-line" style="min-width: 50px;">Chassis #</th>
                    <th scope="col" class="single-line" style="min-width: 50px;">Engine #</th>
                    <th scope="col" class="single-line" style="min-width: 50px;">Make</th>
                    <th scope="col" class="single-line" style="min-width: 50px;">Model</th>
                    <th scope="col" class="single-line" style="min-width: 50px;">CNIC #</th>
                    {{-- FORM STATUS VALUES --}}
                    <th scope="col" class="single-line" style="min-width: 70px;">Operational Status</th>
                    <th scope="col" class="single-line" style="min-width: 70px;">Technical Status</th>
                    <th scope="col" class="single-line" style="min-width: 70px;">Security Status</th>
                    <th scope="col" class="single-line" style="min-width: 70px;">Sales Person</th>
                    <th scope="col" class="single-line" style="min-width: 70px;">STATUS</th>
                </tr>
            </thead>


            <tbody>
                @foreach ($data as $index => $record)



                <tr>
                    <td class="single-line">Retail</td>
                    {{-- <td class="single-line">{{$record->customer_name }}</td> --}}
                    <td>
                        <a href="{{ route('personal', ['id' => $record->id]) }}" class="bold-text nowrap" style="font-weight: bold; display: block; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; font-size: 14px;">
                            {{ $record->customer_name }}
                        </a>
                    </td>
                                        <td class="single-line">{{$record->registeration_no}}</td>
                    <td class="single-line">{{$record->chasis_no}}</td>
                    <td class="single-line">{{$record->engine_no}}</td>
                    <td class="single-line">{{$record->make}}</td>
                    <td class="single-line">{{$record->model}}</td>
                    <td class="single-line">{{$record->cnic}}</td>
                    <td class="single-line">
                        <?php
                        // Assuming $record->form_status contains the status fetched from the database
                        if ($record->form_status === "approved") {
                            echo "completed";
                        } else {
                            echo "Incompleted"; // Display the status as it is if it's not "declined"
                        }
                        ?>


                                        <td class="single-line">
                        <?php
                        // Assuming $record->form_status contains the status fetched from the database
                        if ($record->form_status == "declined" ) {
                            echo "Incompleted";
                        } else {
                            echo "completed"; // Display the status as it is if it's not "declined"
                        }
                        ?>
                    </td>
                    <td class="single-line">
                        <?php
                        // Assuming $record->form_status contains the status fetched from the database
                        if ($record->form_status === "approved") {
                            echo "completed";
                        } else {
                            echo "Incompleted"; // Display the status as it is if it's not "declined"
                        }
                        ?>
                    </td>
                         <td class="single-line">
                            {{$record->sales_person}}
                        </td>
                        <td class="single-line">
                            {{ isset($status[$index]) ? $status[$index]->tracker_status : 'N/A' }}
                        </td>

                    <!-- ... Other table columns ... -->




                </tr>
                @endforeach

            </tbody>
        </table>
        <div class="pagination">
            {{ $data->links() }}
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }

        function deleteRecord(recordId) {
            // Your delete record logic here
            // You can use AJAX or other methods to handle deletion
            console.log('Deleting record with ID:', recordId);
        }
    </script>

    <!-- Your existing scripts ... -->
</body>
</html>
