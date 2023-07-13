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
    function validateAdmin($user){
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
        if (empty($user['gender'])) {
            array_push($errors, 'Gender is Required');
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
    function validateEmail($user){
        $errors= array();
        if (empty($_POST['email'])) {
            array_push($errors, 'Email is required');
        }
        $emailnotExist = selectOne('users',['email'=>$_POST['email']]);
        if($emailnotExist == null){
            array_push($errors, "Email not found in the system");
        };
        return $errors;
       
    }
    function validatePass($user){
        $errors= array();
        if (empty($_POST['password'])) {
            array_push($errors, 'New password required');
        }
        if (strlen($_POST['password']) < 6) {
            array_push($errors, 'Password length must be more than 5 characters');
        }
        
        if($_POST['password'] != $_POST['confirm_password']){
            array_push($errors, "Passwords do not match!");
        };
        return $errors;
       
    }
    function validateAdminUpdate($user){
        $errors= array();

        if(empty($_POST['email'])){
            array_push($errors, "email is required");
        }
        if (empty($_POST['password'])) {
            array_push($errors, "Please enter your Password");
        }

        $usersPass = selectOne('users',['id'=> $_POST['id']]);

        $pass = $usersPass['password'];

        if (!(password_verify($_POST['password'],$pass))) {
            array_push($errors, "Incorrect Password");
        }

        return $errors;
       
    }
    
