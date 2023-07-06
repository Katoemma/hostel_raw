<?php

    function validateRegister($user){
        $errors = array();
        if (empty($user['fname'])) {
            array_push($errors, 'First name is Required!');
        }
        if (empty($user['lname'])) {
            array_push($errors, 'Last name is Required!');
        }
        if (empty($user['email'])) {
            array_push($errors, 'Email is Required!');
        }
        if (empty($user['password'])) {
            array_push($errors, 'Password is Required!');
        }
        if (!($user['password'] === $user['repeatPassword'])) {
            array_push($errors, 'Passwords do not match!');
        }
        if (empty($user['campus'])) {
            array_push($errors, 'Campus is Required');
        }
        if (empty($user['gender'])) {
            array_push($errors, 'Gender is Required');
        }
        if (empty($user['DOB'])) {
            array_push($errors, 'Date of Birth is Required');
        }

        $userexists = selectOne('users', ['email'=>$_POST['email']]);
        if ($userexists) {
            array_push($errors, 'Email exists');
        }

    return $errors;
    }
    function validateLogin($user){
        $errors= array();
        if (empty($_POST['email'])) {
            array_push($errors, 'Email is required');
        }
        if (empty($_POST['password'])) {
            array_push($errors, 'Password is required');
        }
        return $errors;
    }