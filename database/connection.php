<?php
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','rawhostel');

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME)
    or die('database coonection  failed'.mysqli_errno($conn));

    if ($conn) {
     echo 'database connected successfully';
    }