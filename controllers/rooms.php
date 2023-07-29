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

    //adding records on termination of room contract
    if (isset($_POST['terminateBtn'])) {
        global $conn;

        $id = $_POST['id'];
        unset($_POST['terminateBtn'], $_POST['id']);
    
        $book = selectOne('booking', ['id' => $id]);
        $token = $book['token'];
    
        
        $date = date("Y-m-d H:i:s");
        $sql = "UPDATE records SET created = ? WHERE token = ?";
        
        $stmt = $conn->prepare($sql);
        $stmt ->bind_param("ss",$date, $token) ;
        $stmt->execute();
    
        $old = delete("booking", $id);
        $_SESSION['message'] = "Room contract terminated successfully";
        header('location:rooms.php');
        exit();
    }
    
