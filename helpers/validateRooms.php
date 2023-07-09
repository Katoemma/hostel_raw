<?php
    function validateRooms($room){
        $errors = array();

        if (empty($_POST['room'])) {
            array_push($errors, 'Room Number is Required!');
        }
        if (($_POST['type']) == "") {
            array_push($errors, 'Please Choose Room Type!');
        }
        $roomexists = selectOne('rooms', ['room' => $_POST['room'], 'hostel' => $_POST['hostel']]);
        if ($roomexists) {
            array_push($errors, 'Room Number already exists');
        }
        return $errors;
    }