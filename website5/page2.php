<?php
    
    setcookie('username', 'Blanca', time() + 86400);
    
    // Unset cookie
    //setcookie('username', 'Blanca', time() - 3600);

    if (count($_COOKIE) > 0) {
        echo 'There are ' .count($_COOKIE). ' cookies set<br>';
    } else {
        echo 'There are no cookies set.';
    }
    if (isset($_COOKIE['username'])) {
        echo 'User '. $_COOKIE['username'] . ' is set';
    } else {
        echo 'User is not set';
    }
?>