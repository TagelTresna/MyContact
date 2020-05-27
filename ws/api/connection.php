<?php

    define('HOST', 'localhost'); // change with your host

    define('USER', 'db_username'); // change with your database user

    define('PASS', 'db_password'); // change with your user password

    define('DB', 'db_phone'); // database name

    $con = mysqli_connect(HOST, USER, PASS, DB) or die ('Gagal untuk terhubung');

?>