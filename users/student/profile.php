<?php include '../../controllers/users.php' ?>
<?php include 'includes/title.php' ?>
<?php
    $title = $user['fname']." ".$user['lname']." | hostels savvy";
    $decription = "Discover Students hostel that fits your needs around Gulu City";
?>
<?php include('includes/header.php');?>
<?php include('../profile.php');?>
<?php include('includes/modals.php');?>
<?php include('includes/footer.php');?>