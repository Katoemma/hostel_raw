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
    
    //activating and deactivating the hostel by system admin
    if (isset($_GET['activate'])) {
        $id = $_GET['activate'];
        $update = update($table, $id , ['status'=> 1]);

        if ($update) {
            $_SESSION['message'] = "Hostel activated";
            header('location:hostels.php');
            exit();
        }
        else {
           echo 'cannot update!'.mysqli_error($conn);
        }
    }    

    // deactivating the hostel by system admin
    if (isset($_GET['deactivate'])) {
        $id = $_GET['deactivate'];
        $update = update($table, $id , ['status' => 0]);

        if ($update) {
            $_SESSION['message'] = "Hostel Deactivated";
            header('location:hostels.php');
            exit();
        }
        else {
           echo 'cannot update!'.mysqli_error($conn);
        }
    }    