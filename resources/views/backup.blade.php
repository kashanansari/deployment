<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Backup</title>
</head>
<body>
    <button id="backupButton">Backup Database</button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#backupButton').click(function() {
                $.ajax({
                    url: '/api/backup',
                    type: 'POST',
                    success: function(response) {
                        alert(response.message);
                    },
                    error: function(xhr, status, error) {
                        alert('An error occurred while creating backup');
                    }
                });
            });
        });
    </script>
</body>
</html>
