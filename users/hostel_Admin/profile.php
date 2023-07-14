<?php include '../../controllers/users.php' ?>
<?php include 'includes/title.php' ?>
<?php
    $title = $user['fname']." ".$user['lname']." | HostelSavvy";
    $description = $hostel['description'];
?>
<?php include 'includes/security.php'?>
<?php include('includes/header.php');?>
<?php include('../profile.php');?>
<?php include('includes/modals.php');?>
<?php include('includes/footer.php');?>