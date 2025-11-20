<?php
// php-app/process.php

$name  = $_POST['name']  ?? '';
$color = $_POST['color'] ?? '';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Form Result</title>
</head>
<body>
  <h1>Form Result</h1>

  <p><strong>Name:</strong>
    <?php echo htmlspecialchars($name); ?>
  </p>

  <p><strong>Favorite color:</strong>
    <?php echo htmlspecialchars($color); ?>
  </p>

  <p><a href="form.html">Go back</a></p>
  <p><a href="index.php">Back to index.php</a></p>
</body>
</html>
