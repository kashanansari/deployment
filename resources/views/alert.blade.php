<!-- customers/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Customer Waiting List</title>
    <!-- Add Bootstrap CSS link if not already included -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Increase font size */
        .customer-item {
            font-size: 22px;
        }

        .customer-number {
            font-weight: bold;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Customer Waiting List</h1>
        <ul class="list-group">
            @forelse($data as $key => $customer)
                <li class="list-group-item customer-item">
                    <span class="customer-number">{{ $key + 1 }}.</span>
                    <a href="{{ route('further', $customer['id']) }}">{{ $customer['customer_name'] }}</a>:
                </li>
            @empty
                <li class="list-group-item">No customers found</li>
            @endforelse
        </ul>
    </div>
</body>
</html>
