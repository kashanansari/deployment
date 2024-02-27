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
            padding: 1rem;
            text-align: center;
            background-clip: padding-box;
            border: 1px solid #dee2e6; /* Add border style */
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
        <h1 style="text-transform: uppercase; font-family: 'cursive'; font-size: 40px; color: #000000d3; text-shadow: 2px 2px 4px #798de6;">Employee Information:0{{$count }}</h1>
        <h2 class="styled-link" style="font-size: 24px; color: #007BFF; text-decoration: underline; font-weight: bold; margin-top: 20px;">
            Total Records: {{ $count }}
        </h2>

        <table class="table custom-table" id="myTable">
            <thead>
                <tr>
                    <th scope="col" class="single-line" style="min-width: 60px;">Employee ID</th>
                    <th scope="col" class="single-line">Employee Name</th>
                    <th scope="col" class="single-line" style="width: 350px;">Designation</th>
                    <th scope="col" class="single-line">Contact No</th>
                    <th scope="col" class="single-line">Cnic No</th>
                    <th scope="col" class="single-line">Role</th>
                    <th scope="col" class="single-line">Login Name/ID</th>
                    {{-- <th scope="col" class="single-line">Password</th> --}}
                    <th scope="col" class="single-line">Image</th>



                    <th scope="col" class="single-line" style="min-width: 80px;">Delete</th>
                </tr>
            </thead>


            <tbody>
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
    <a class="btn btn-danger" onclick="deleteRecord('{{ $record->emp_id }}')">Delete</a>
</td>




                </tr>
                @endforeach
            </tbody>

        </table>
        <div class="pagination">
            {{ $data->links() }}
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function deleteRecord(recordId) {
            if (confirm('Are you sure you want to delete this employee?')) {
                $.ajax({
                    url: '/delete_emp/' + recordId,
                    type: 'DELETE', // Change the method to DELETE
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            alert('Employee deleted successfully');
                            window.location.reload(); // Reload the page after successful deletion
                        } else {
                            alert('Failed to delete employee');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                        alert('An error occurred while deleting the employee');
                    }
                });
            }
        }
        </script>
    {{-- <script>
        function goBack() {
            window.history.back();
        }

        function deleteRecord(recordId) {
            // Your delete record logic here
            // You can use AJAX or other methods to handle deletion
            console.log('Deleting record with ID:', recordId);
        }
    </script> --}}

    <!-- Your existing scripts ... -->
</body>
</html>
