<?php
    session_start();
    $name = isset($_SESSION["name"]) ? $_SESSION["name"] : 'Arnold';
    $email = isset($_SESSION["email"]) ? $_SESSION["email"] : 'Arnold.Sundman@betterliving.com';

    print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Hello <?php echo $name ?></h1>
</body>

</html>