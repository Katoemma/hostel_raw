<?php
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/hostel_raw/';
    include($basePath . 'database/db.php');
    include($basePath . 'helpers/validateHostel.php');

    $table = 'hostels';
    $hostels = selectAll('hostels');

    //registering Hostel
    if (isset($_POST['addHostel'])) {
        $errors = validateHostel($_POST);

        if (count($errors) === 0) {
            unset($_POST['addHostel']);

            $hostel = create($table, $_POST);
            $_SESSION['message'] ='Hostel added successfully';
            header('location:hostels.php');
            exit();
        }
    }

    
    //activating the hostel by system admin
    if (isset($_GET['activate'])) {
        $id = $_GET['activate'];
        $update = update($table, $id , ['status'=> 1]);

        if ($update) {
            $_SESSION['message'] = "Hostel activated";
            header('location:hostels.php');
            exit();
        }
        else {
           echo 'cannot update!'.mysqli_error($conn);
        }
    }    

    // deactivating the hostel by system admin
    if (isset($_GET['deactivate'])) {
        $id = $_GET['deactivate'];
        $update = update($table, $id , ['status' => 0]);

        if ($update) {
            $_SESSION['message'] = "Hostel Deactivated";
            header('location:hostels.php');
            exit();
        }
        else {
           echo 'cannot update!'.mysqli_error($conn);
        }
    }    



    //for testing
// Assuming you have established a database connection

if (isset($_POST['updateBtn'])) {
    // Retrieve form data
    $id = $_POST['id'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $google = $_POST['google'];
    $single = $_POST['single_room'];
    $double = $_POST['double_room'];
    $wifi = isset($_POST['wifi']) ? 1 : 0;
    $self_contained = isset($_POST['self_contained']) ? 1 : 0;
    $reading = isset($_POST['reading']) ? 1 : 0;
    $camera = isset($_POST['camera']) ? 1 : 0;

    $errors = validateUpdate($_POST);
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
        if (count($errors)===0) {
             // Prepare and execute the UPDATE query
            $google = htmlentities($_POST['google']);
            $stmt = $conn->prepare("UPDATE hostels SET address = ?, description = ?, image =?, google = ?,single_room =?, double_room =?, wifi = ?, self_contained = ?, reading = ?, camera = ? WHERE id = ?");
            $stmt->bind_param("sssssiiiiii", $address, $description, $_POST['image'], $google,$single,$double, $wifi, $self_contained, $reading, $camera, $id);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                // Update successful
                $_SESSION['message'] = "Hostel updated successfully";
                header('Location: settings.php');
                exit();
            } else {
                // Update failed
                $_SESSION['message'] = "Failed to update hostel";
                header('Location: settings.php');
                exit();
            }
        }
   
}

//add rules and regulations
if (isset($_POST['addRule'])) {
    $errors = validateRule($_POST);

    if (count($errors)=== 0) {
        unset($_POST['addRule']);

        $rule = create('rules', $_POST);
        $_SESSION['message']= "Rule added successfully";
        header('location:settings.php');
        exit();
    }
}

//adding gallery image
if (isset($_POST['uploadImg'])) {
    
    $errors = validateImage($_POST);

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
    }else{
        array_push($errors, "Image is required");
    }

    if (count($errors)=== 0) {
        unset($_POST['uploadImg']);

        $image = create('gallery', $_POST);
        $_SESSION['message'] = "Gallery image successfully added!";
        header('location:settings.php');
        exit();
    } 

}
//the search functionnalityon hostels
if (isset($_GET['search'])) {
    global $conn;
    $search = $_GET['search'];

    $sql = 'SELECT * FROM hostels WHERE name LIKE "%' . $search . '%"';
    // Execute the query
    $result = mysqli_query($conn, $sql);

     // Check if there are any results
     $searched = array(); // Initialize an empty array to store results
     $noResults = "";

     if (mysqli_num_rows($result) > 0) {
         // Loop through the results and add each row to the $searched array
         while ($row = mysqli_fetch_assoc($result)) {
             $searched[] = $row;
         }
     } else {
         $noResults= 1;
     }
}


