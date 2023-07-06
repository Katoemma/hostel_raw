<?php
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/hostel_raw/';
    include($basePath . 'database/db.php');
    include($basePath . 'helpers/validateUser.php');

    $table = 'users';
    $users = selectAll($table);

    $fname = "";
    $lname = "";
    $email = "";
    $password = "";
    $repeatPassword = "";
    $campus ="";
    $phone = "";
    $DOB = "";

    //user log function
    function userlog($user){
        // Log user in
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['SA'];
        $_SESSION['student'] = $user['SS'];
        $_SESSION['Hostel'] = $user['HA'];
        $_SESSION['message'] = 'You are logged in';
        $_SESSION['type'] = 'success';
     
        if($_SESSION['admin']){
          header('location: users/system_Admin/index.php');
        }else if ($_SESSION['student']) {
            header('Location: users/student/index.php');
        } else {
            header('Location: users/hostel_Admin/index.php');
        }
        exit();
     }

    //register students only
    if (isset($_POST['submitBtn'])) {
        $errors = validateRegister($_POST);

        if (count($errors) === 0) {
            unset($_POST['repeatPassword'],$_POST['submitBtn'],$_POST['registerAdmin']);
            $_POST['password']= password_hash($_POST['password'],PASSWORD_DEFAULT );

            $user = create($table,$_POST);

            header('location:users/student/index.php');
            exit();
            
        }else{

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $repeatPassword = $_POST['repeatPassword'];
            $phone = $_POST['phone'];
            $campus = $_POST['campus'];
            $DOB = $_POST['DOB'];
        }
    }
    //logging in user
    if (isset($_POST['loginBtn'])) {
        $errors = validateLogin($_POST);

        if (count($errors) === 0) {
            $user = selectOne($table, ['email'=> $_POST['email']]);
            if ($user && password_verify($_POST['password'], $user['password'])){
                userlog($user);// call the user log function
        
              } else {
                array_push($errors, 'Wrong credentials');
              }
        }
    }
