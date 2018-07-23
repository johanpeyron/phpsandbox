<?php
    $user = ["name" => "Simon", "email" => "simonpeyron@hotmail.com", "age" => 24];

    $user = serialize($user);

    setcookie("user", $user, time() + (86400 * 24));

    $user = unserialize($user);

    print_r($user);
?>