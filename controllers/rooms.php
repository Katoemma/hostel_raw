<?php
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/hostel_raw/';
    include($basePath . 'database/db.php');
    include($basePath . 'helpers/validateRooms.php');

    $table = 'rooms';
    $rooms = selectAll($table);

    

    //adding room
    if (isset($_POST['addRoom'])) {
        $errors = validateRooms($_POST);

        if (count($errors) === 0) {
            unset($_POST['addRoom']);

            $room = create($table, $_POST);
            $_SESSION['message'] = 'Room SuccessFully Added';
            header('location:rooms.php');
            exit();
        }

    }
