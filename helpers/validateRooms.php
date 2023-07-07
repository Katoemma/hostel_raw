<?php
    function validateRooms($room){
        $errors = array();

        if (empty($_POST['number'])) {
            array_push($errors, 'Room Number is Required!');
        }
        if (($_POST['number']) == "") {
            array_push($errors, 'Please Choose Room Type!');
        }
        $roomexists = selectOne('rooms', ['number' => $_POST['number'], 'hostel' => $_POST['hostel']]);
        if ($roomexists) {
            array_push($errors, 'Room Number already exists');
        }
        return $errors;
    }