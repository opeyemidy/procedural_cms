<?php

//phpinfo();


            // for registration page

$password = 'secret';

echo password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));


        // under add user in admin

echo password_hash($password, PASSWORD_BCRYPT, array('cost' => 10));


?>