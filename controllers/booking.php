<?php
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/hostel_raw/';
    include($basePath . 'database/db.php');
    include($basePath . 'helpers/validateBook.php');

    $table = 'booking';

    //student booking room
    if (isset($_POST['bookBtn'])) {
        $errors = validateBook($_POST);
        if (count($errors) === 0) {
            unset($_POST['bookBtn']);

            $book = create($table,$_POST);
            $_SESSION['message']= "Successfully Booking to be reviewed";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }

    //approving the booking by hostel admin
    if (isset($_POST['approve'])) {
        $errors = validateApprove($_POST);
        
        if (count($errors)===0) {
            $id = $_POST['id'];
            unset($_POST['id'],$_POST['approve']);

            $book = update($table,$id,$_POST);
            $booked = selectOne('booking',['id'=> $id]);
            unset($booked['id'], $booked['type'],$booked['status']);
            $record = create('records',$booked);
            $_SESSION['message']= "Booking ".$booked['token']." Approved";
            header('location:bookings.php');
            exit();
        }   
    }
    