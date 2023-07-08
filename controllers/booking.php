<?php
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/hostel_raw/';
    include($basePath . 'database/db.php');
    include($basePath . 'helpers/validateBook.php');

    $table = 'booking';

    if (isset($_POST['bookBtn'])) {
        $errors = validateBook($_POST);
        if (count($errors) === 0) {
            unset($_POST['bookBtn']);

            $book = create($table,$_POST);
            $_SESSION['message']= "Successfully Booking to be reviewed";
        }
    }