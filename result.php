<?php
session_start();
$name = $_SESSION['name'];
$phoneNo = $_SESSION['phoneNo'];
$email = $_SESSION['email'];
$service = $_SESSION['service'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <h1>CUSTOMER DETAILS</h1>
    <h3>NAME :  <?php echo $name; ?> </h3>
    <h3>PHONE NO :  <?php echo $phoneNo; ?> 
    <h3>EMAIL :  <?php echo $email; ?>
    <h3>SERVICES :  <?php echo $service; ?>
</body>
</html>

<?php
