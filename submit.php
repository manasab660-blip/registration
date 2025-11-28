<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$code = $_POST['country_code'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$course = $_POST['course'];

echo "<!DOCTYPE html>
<html>
<head>
<title>Success</title>
<style>
body {
    font-family: Arial;
    background: #f2f2f2;
}
.box {
    background: white;
    width: 400px;
    padding: 20px;
    margin: 50px auto;
    border-radius: 10px;
}
h2 {
    color: green;
}
</style>
</head>
<body>

<div class='box'>
<h2>Application Submitted Successfully ✅</h2>

<p><b>Name:</b> $fullname</p>
<p><b>Email:</b> $email</p>
<p><b>Phone:</b> $code $phone</p>
<p><b>Gender:</b> $gender</p>
<p><b>DOB:</b> $dob</p>
<p><b>Address:</b> $address</p>
<p><b>Course:</b> $course</p>

</div>
</body>
</html>";

}
?>
