<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.2/main.min.css">
    <title>Sales info</title>
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
        <h1 style="text-transform: uppercase; font-family: 'cursive'; font-size: 40px; color: #000000d3; text-shadow: 2px 2px 4px #798de6;">Sales Information:</h1>
        <h2 class="styled-link" style="font-size: 24px; color: #007BFF; text-decoration: underline; font-weight: bold; margin-top: 20px;">
            {{-- Total Records: {{ $count }} --}}
        </h2>

        <table class="table custom-table" id="myTable">
            <thead>
                <tr>
                    <th scope="col" class="single-line" style="min-width: 20px;">Client ID</th>
                    <th scope="col" class="single-line">Customer Name</th>
                    <th scope="col" class="single-line" >Customer Type</th>
                    <th scope="col" class="single-line">Deal Type</th>
                    <th scope="col" class="single-line">Contact</th>
                    <th scope="col" class="single-line">Address</th>
                    <th scope="col" class="single-line">Installation time</th>
                    <th scope="col" class="single-line">Password</th>
                    <th scope="col" class="single-line">Unit Charges</th>



                    <th scope="col" class="single-line" style="min-width: 80px;">Refrence</th>
                    <th scope="col" class="single-line" style="min-width: 80px;">Quantity</th>
                    <th scope="col" class="single-line" style="min-width: 80px;">DOI   /   DOC	</th>
                    <th scope="col" class="single-line" style="min-width: 80px;">Remarks	</th>
                    <th scope="col" class="single-line" style="min-width: 80px;">Status</th>
                    <th scope="col" class="single-line" style="min-width: 80px;">Action</th>


                </tr>
            </thead>


            {{-- <tbody>
                @foreach ($data as $record)
                <tr>

                    <td class="single-line">{{$record->emp_id }}</td>
                    <td><a href="{{ route('single_emp', ['emp_id' => $record->emp_id]) }}" class="bold-text nowrap" style="font-weight: bold; font-size: 14px;">{{ $record->emp_name }}</a></td>
                    <td class="single-line">{{$record->designation}}</td>
                    <td class="single-line">{{$record->contact}}</td>
                    <td class="single-line">{{$record->cnic}}</td>
                    <td class="single-line">{{$record->role}}</td>
                    <td class="single-line">{{$record->em_loginid}}</td>
                    <!-- ... Other table columns ... -->

<td class="single-line">
    @if ($record->image)
        <div class="passport-images">
            <div class="passport-image-container">
                <img src="{{ asset('storage/image/' . $record->image) }}" alt="Employee Image" class="passport-image">
            </div>
        </div>
    @else
        No Image
    @endif
</td>


                    <td class="single-line" style="min-width: 80px;">
                        <a href="delete_emp/{{$record->id}}" class="btn btn-danger" onclick="deleteRecord({{ $record->id }})">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody> --}}
        </table>
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
