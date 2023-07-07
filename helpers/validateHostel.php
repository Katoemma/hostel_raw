<?php
    function validateHostel($hostel){
        $errors = array();
        if (empty($_POST['name'])) {
            array_push($errors, "Name is required!");
        }
        if ($_POST['admin'] == "") {
            array_push($errors, "Admin should be selected!");
        }
        return $errors;
    }