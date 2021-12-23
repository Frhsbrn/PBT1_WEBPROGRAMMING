<?php
$name = $_POST['name'];
$phoneNo = $_POST['phoneNo'];
$email = $_POST['email'];
$service = $_POST['service'];

if ($name == '') {
?>
    <script>
        alert('PLEASE FILL IN NAME');
        window.location = 'index.php';
    </script>

<?php
} elseif ($phoneNo == '') {
?>
    <script>
        alert('PLEASE FILL IN PHONE NO');
        window.location = 'index.php';
    </script>

<?php
} elseif ($email == '') {
?>
    <script>
        alert('PLEASE FILL IN EMAIL');
        window.location = 'index.php';
    </script>

<?php

} elseif ($service == '') {
?>
    <script>
        alert('PLEASE CHOOSE SERVICE');
        window.location = 'index.php';
    </script>

<?php
} else {
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['phoneNo'] = $phoneNo;
    $_SESSION['email'] = $email;
    $_SESSION['service'] = $service;

    header('location: result.php');
}
