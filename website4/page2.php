<?php 
    session_start();

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Sessions</title>
</head>
<body>
    <h5>Thank you  <?php echo $name ?>, for subscribing with email <?php echo $email ?> </h5>
</body>
</html>