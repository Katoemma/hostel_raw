<?php
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/hostel_raw/';
    include($basePath . 'database/db.php');
    include($basePath . 'helpers/validateHostel.php');

    $table = "settings";

    if (isset($_POST['settings'])) {
        $errors = validateSettings($_POST);
        if (!empty($_FILES['image']['name'])) {
            $imageName = time()."_".$_FILES['image']['name'];
            $uploadFolder = $basePath.'users/hostel_Admin/uploads/'.$imageName;
            $imageupload = move_uploaded_file($_FILES['image']['tmp_name'], $uploadFolder);

            if ($imageupload) {
                $_POST['image'] = $imageName;
            }
            else {
                array_push($errors, "Image upload failed");
            }
        }
        if (count($errors)=== 0) {
            unset($_POST['settings']);

            $setting = create($table,$_POST);
            $_SESSION['message']="Hostel Set SuccessFully";
            header('location:settings.php');
            exit();
        } else {
            # code...
        }
        
    }