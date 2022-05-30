<?php
    $str = 'My Password';
    $user = 'username';
    echo sprintf("The md5 hashed password of %s is: %s\n", $str, md5($str.$user));
    echo '<br>';
    echo sprintf("The shal hashed password of %s is: %s\n", $str, sha1($str.$user));
    echo '<br>';
    echo sprintf("The gost hashed password of %s is: %s\n", $str, hash('gost', $str.$user));
    echo '<br>';

?>