<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Add your meta tags, CSS links, and other head content here -->
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    section {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      text-align: center;
      background-color: #fff;
      border-radius: 8px;
      padding: 40px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #4CAF50;
      margin-bottom: 20px;
    }

    .exchange-rate {
      font-size: 48px;
      color: #4CAF50;
      margin-bottom: 30px;
    }

    .update-time,
    .note {
      color: #333; /* Dark black color */
      font-size: 18px;
      margin-bottom: 5px;
    }

    .note {
      font-size: 14px;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <section>
    <div class="container">
      <h1>Today's Exchange Rate</h1>
      <p class="exchange-rate">$<?php echo $exchangeRate??'error'; ?></p>
      <p class="update-time">Last updated date: <?php echo date('d-m-Y'); ?></p>
      <p class="update-time">Last updated time: <?php echo date('h:i A'); ?></p>
      <p class="note">Please note: Exchange rates are subject to change.</p>
    </div>
  </section>
</body>
</html>
