<?php
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/hostel_raw/';
    include($basePath . 'database/db.php');
    include($basePath . 'helpers/validateHostel.php');

    $table = 'hostels';
    $hostels = selectAll('hostels');

    //registering Hostel
    if (isset($_POST['addHostel'])) {
        $errors = validateHostel($_POST);

        if (count($errors) === 0) {
            unset($_POST['addHostel']);

            $hostel = create($table, $_POST);
            $_SESSION['message'] ='Hostel added successfully';
            header('location:hostels.php');
            exit();
        }
    }
    