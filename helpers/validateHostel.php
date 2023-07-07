<?php
    function validateHostel($hostel){
        $errors = array();
        if (empty($_POST['name'])) {
            array_push($errors, "Name is required!");
        }
        if ($_POST['admin'] == "") {
            array_push($errors, "Admin should be selected!");
        }
        $hostelexists = selectOne('hostels',['name' =>$_POST['name']]);
        if ($hostelexists) {
            array_push($errors, "Hostel Name Exists!");
        }
        return $errors;
    }