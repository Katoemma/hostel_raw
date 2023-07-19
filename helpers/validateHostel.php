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
    function validateUpdate($setting){
        $errors = array();
        if (empty($_POST['address'])) {
            array_push($errors, "Hostel Address is required!!");
        }
        if (empty($_POST['description'])) {
            array_push($errors, "Hostel Description is required!!");
        }

        return $errors;
    }
    function validateRule($rule){
        $errors = array();

        if (empty($_POST['rule'])) {
            array_push($errors, "Please input rule to submit");
        }

        return $errors;
    }
    function validateImage($image){
        $errors = array();

        if (empty($_POST['caption'])) {
            array_push($errors, "Please in put the image caption");
        }

        return $errors;
    }