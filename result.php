<?php
session_start();
$name = $_POST['name'];
$phoneNo = $_POST['phoneNo'];
$email = $_POST['email'];
$deco = $_POST['deco'];
$beauty = $_POST['beauty'];
$photo = $_POST['photo'];
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
    <h3>DECORATION :  <?php echo $deco; ?>
    <h3>BEAUTICIAN :  <?php echo $beauty; ?>
    <h3>PHOTOGRAPHY :  <?php echo $photo; ?>

</body>
</html>

<?php
