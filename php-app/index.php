<?php
// php-app/index.php

$name    = '';
$email   = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = $_POST['name']    ?? '';
    $email   = $_POST['email']   ?? '';
    $message = $_POST['message'] ?? '';
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Simple PHP Form (No DB)</title>
</head>
<body>
  <h1><font color='red'>Contact Form (No Database)</font></h1>

  <form method="post" action="">
    <label>
      Name:<br>
      <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
    </label>
    <br><br>

    <label>
      Email:<br>
      <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
    </label>
    <br><br>

    <label>
      Message:<br>
      <textarea name="message" rows="4" cols="40"><?php echo htmlspecialchars($message); ?></textarea>
    </label>
    <br><br>

    <button type="submit">Send</button>
  </form>

  <hr>

  <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <h2>You submitted:</h2>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    <p><strong>Message:</strong> <?php echo nl2br(htmlspecialchars($message)); ?></p>
  <?php else: ?>
    <p>Fill in the form and click "Send".</p>
  <?php endif; ?>

  <hr>
  <p>Or try the two-page example: <a href="form.html">Go to form.html</a></p>
</body>
</html>
