<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Application Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Application Received Successfully</h2>

<p><strong>Name:</strong> <?php echo $name; ?></p>
<p><strong>Email:</strong> <?php echo $email; ?></p>
<p><strong>Phone:</strong> <?php echo $phone; ?></p>

</body>
</html>
