<!DOCTYPE html>
<html>
<head>
    <title>Renewals Data</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add CSRF token meta tag -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /* Style for the notification */
        .alert-notification {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2>Renewals Data</h2>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Renewal Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <form id="acceptForm"> <!-- Form outside of the loop -->
                    @csrf
                    @foreach($data as $item)
                    <tr id="row_{{ $item['id'] }}">
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['customer_name'] }}</td>
                        <td>{{ $item['renewal_status'] }}</td>
                        <td>
                            <button class="btn btn-success accept-btn" data-id="{{ $item['id'] }}">Accept</button>
                        </td>
                    </tr>
                    @endforeach
                </form>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Function to display a notification
        function showNotification(message, type) {
            var alertClass = 'alert-' + type;
            var alertDiv = $('<div class="alert ' + alertClass + ' alert-notification alert-dismissible fade show" role="alert">' +
                '<strong>' + message + '</strong>' +
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                '<span aria-hidden="true">&times;</span>' +
                '</button>' +
                '</div>');
            $('.container').append(alertDiv);
            setTimeout(function() {
                $('.alert-notification').alert('close');
            }, 10000); // Close the notification after 3 seconds
        }

        $(document).ready(function() {
            // Listen for click events on the 'Accept' buttons
            $('.accept-btn').click(function() {
                var renewalId = $(this).data('id'); // Get the renewal ID from the button data-id attribute

                // Make an AJAX POST request to update the status
                $.ajax({
                    url: '/renewal_status', // Replace with your update URL
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: { id: renewalId }, // Pass the renewal ID to update
                    success: function(response) {
                        console.log('Status updated successfully:', response);
                        showNotification('Status submitted successfully', 'success');

                        // Update the UI with the new status
                        $('#row_' + renewalId + ' td:nth-child(3)').text('removed');
                    },
                    error: function(xhr, status, error) {
                        showNotification('Error again submitting ');
                        console.error(error);
                    }
                });
            });
        });
    </script>
</body>
</html>
