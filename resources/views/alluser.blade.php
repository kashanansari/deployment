<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.2/main.min.css">
    <title>All users info</title>
    <style>
        /* Custom CSS for table header size and text formatting */
        th {
            /* max-width: 150px; */
            font-size: 11px; /* Adjust the font size as needed */
            /* text-decoration: underline; Add underlines to the text */
        }
        td {

        font-size: 14px; /* Increase the font size for cell content as needed */
    }
        /* Custom CSS to decrease the size of the heading */
        h2 {
            font-size: 30px; /* Adjust the font size as needed */
        }
        form .buttons button, .backBtn {
            margin-right: 14px;
        }
        .container form button, .backBtn {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            max-width: 150px;
            width: 100%;
            border: 2px solid #ffffff;
            outline: 4px solid #ff5733; /* Use your desired outline color and style */
            color: #fff;
            border-radius: 5px;
            margin: 25px 0;
            background-color: #000208;
            transition: all 0.3s linear;
            cursor: pointer;
        }
        .backBtn:hover {
            background-color: #ec4242; /* Change to your desired light red color */
        }
        .styled-link {
    font-size: 18px;
    color: #ff0000; /* Change the color to your preferred link color */
    text-decoration: underline;
    cursor: pointer;
    font-weight: bold;
}

.styled-link:hover {
    color: #000000; /* Change the color for the hover effect */
}
.custom-table {
    /* Remove the width specification */
    border: 2px solid #333;
    border-collapse: collapse;
    background-color: #333;
}
.custom-table thead tr {
    background-color: #343a40;
    color: white;
}

.custom-table th,
.custom-table td {
    padding: 10px;
    border: 1px solid #333;
}

.custom-table th {
    font-weight: bold;



    width: 100%;
    /* border: 2px solid #333; */
    /* border-collapse: collapse; */


    border: 2px solid #333; /* Set the border color and thickness */
    border-collapse: collapse; /* To collapse the borders for a table effect */
}

.custom-table thead tr {
    background-color: #343a40; /* Set the background color for the table header */
    color: white; /* Set the text color for the table header */
}

.custom-table th, .custom-table td {
    padding: 10px; /* Add padding to table cells for spacing */
    border: 1px solid #333; /* Set the cell border color and thickness */
}

.custom-table th {
    font-weight: bold; /* Make the header cells bold */
}
.header-link {
    cursor: pointer; /* Set the cursor to a pointer on hover */
    text-decoration: underline; /* Underline the text on hover to make it look like a link */
    color: blue; /* Set the text color, you can change it to your desired link color */
}
.larger-header {
    font-size: 14px; /* Adjust the font size to your preferred size */
}

.bold-text {
    font-weight: bold;
}
.nowrap {
    white-space: nowrap;
}
body {
    font-family: Arial, sans-serif;
    text-align: center;
}


 #searchButton {
    padding: 5px 10px;
    width: 20%;
    background-color: #007BFF;
    color: white;
    border: none;
    cursor: pointer;
}

#searchResults {
    margin: 10px;
    font-weight: bold;
    color: red;
}
.highlight {
    background-color: yellow;
    font-weight: bold;
}
#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}
#myUL {
  /* Remove default list styling */
  list-style-type: none;
  padding: 0;
  margin: 5%;
}

#myUL li a {
  border: 1px solid #ddd; /* Add a border to all links */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Grey background color */
  padding: 1px; /* Add some padding */
  text-decoration: none; /* Remove default text underline */
  font-size: 18px; /* Increase the font-size */
  color: black; /* Add a black text color */
  display: block; /* Make it into a block element to fill the whole list */
}

#myUL li a:hover:not(.header) {
  background-color: #eee; /* Add a hover effect to all links, except for headers */
}


    /* Your existing styles go here */

    /* Add this rule to set the background color for the entire page */
    body {
        background-color: #ebebeb; /* Use your desired background color */
    }

    /* Rest of your styles */





        /* Custom CSS to style the number 04 */
        /* .h2 {
            font-size: 5px; /* Adjust the font size as needed */
        /* }
        .fancy-number {
            font-size: 20px; /* Adjust the font size as needed */
            /* color: #ff5733; /* Set a custom text color */
             /* font-style: italic; Apply italic style */ */
        /* } */ */ */ */
    </style>
    {{-- <script>
        // Show the delete confirmation modal when the delete button is clicked
        function confirmDelete(recordId) {
            $('#deleteModal').modal('show');

            // Set the record ID to a data attribute on the confirm delete button
            document.getElementById("confirmDeleteButton").setAttribute("data-record-id", recordId);
        }

        // When the "Delete" button in the modal is clicked, perform the delete action
        document.getElementById("confirmDeleteButton").addEventListener("click", function () {
            var recordId = this.getAttribute("data-record-id");
            // Perform the delete operation here, e.g., make an AJAX request to delete the record
            // Once the delete is successful, you can display a success message
            alert("Deleted successfully");

            // Close the delete confirmation modal
            $('#deleteModal').modal('hide');
        });
    </script> --}}

</head>
<body>
<div class="container">
    <div class="buttons">
        <div class="backBtn" onclick="goBack()">
            <i class="uil uil-navigator"></i>
            <span class="btnText">Back</span>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }

    </script>

{{-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."> --}}
{{-- <div id="content">
    <!-- Your table content goes here -->
</div>
<div id="searchResults"></div> --}}
{{-- </div> --}}


<h1 style="text-transform: uppercase; font-family: 'cursive'; font-size: 40px; color: #000000d3; text-shadow: 2px 2px 4px #798de6;">Vehicle Information</h1>
    <h2 class="styled-link">Total Records :{{ $count }}</h2>

    {{-- @foreach ($count as $value)
    <h2>{{ $value }}</h2>


    @endforeach
    <h2>{{ $count }}</h2> --}}
    {{-- <div id="calendar"></div> --}}
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for reg no..">

    <table class="table custom-table" id="myTable">
        <thead>
            <tr class="table-dark">
                <th scope="col" style="width: 10px;">Client Id</th>
                <th scope="col" style="width: 150px;">Customer Name</th>
                <th scope="col" style="width: 120px;">RegistrationNo</th>
                <th scope="col" style="width: 100px;">Chassis-NO</th>
                <th scope="col" style="width: 100px;">Engine #</th>
                <th scope="col" style="width: 80px;">Make</th>
                <th scope="col" style="width: 80px;">Model</th>
                <th scope="col" style="width: 100px;">CNIC-NO #</th>
                <th scope="col" style="width: 100px;">Contact-1</th>
                <th scope="col" style="width: 100px;">Contact-2</th>
                <th scope="col" style="width: 100px;">Primary User</th>
                <th scope="col" style="width: 100px;">Primary User Contact</th>

            </tr>
        </thead>

        <tbody>
            @foreach ($data as $record)
            <tr>
                <th scope="row" class="larger-header">{{$record->id}}</th>

                <td><a href="{{ route('personal', ['id' => $record->id]) }}" class="bold-text nowrap" style="font-weight: bold;">{{ $record->customer_name }}</a></td>
                <td class="bold-text">{{$record->registeration_no}}</td>
                <td class="bold-text">{{$record->chasis_no}}</td>
                <td class="bold-text nowrap">{{$record->cnic}}</td>
                <td class="bold-text">{{$record->make}}</td>
                <td class="bold-text">{{$record->model}}</td>
                <td class="bold-text nowrap">{{$record->cnic}}</td>

                <td class="bold-text nowrap">{{$record->cnic}}</td>
                <td class="bold-text nowrap">{{$record->cnic}}</td>
                <td class="bold-text">{{$record->primaryuser_name}}</td>
                <td class="bold-text nowrap">{{$record->cnic}}</td>





                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination">
        {{ $data->links() }}
    </div>
    <script>
       function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    table = document.getElementById('myTable');
    tr = table.getElementsByTagName('tr');

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName('td')[1]; // Column index 1 for Customer Name
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = '';
            } else {
                tr[i].style.display = 'none';
            }
        }
    }
}

        </script>


</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.2/main.min.js"></script>
<script>
    // document.addEventListener('DOMContentLoaded', function () {
    //     var calendarEl = document.getElementById('calendar');
    //     var calendar = new FullCalendar.Calendar(calendarEl, {
    //         initialView: 'dayGridMonth',
    //         events: [];
    //     });
    //     calendar.render();
    // });

    function deleteRecord(recordId) {
    if (confirm("Are you sure you want to delete this record?")) {
        $.ajax({
            url: '/delete-record',
            type: 'POST',
            data: { recordId: recordId },
            success: function (response) {
                if (response.success) {
                    alert("Record deleted successfully");
                    $('#recordRow_' + recordId).remove();
                } else {
                    alert("Deletion failed: " + response.message);
                }
            },
            error: function (xhr, status, error) {
                alert("An error occurred: " + error);
            }
        });
    }
}

</body>
</html>
