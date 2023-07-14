<?php include '../../controllers/users.php' ?>
<?php include 'includes/title.php' ?>
<?php
    $title = $user['fname']." ".$user['lname']." | hostels Savvy";
?>
<?php include('includes/header.php');?>
<?php include('../profile.php');?>
<?php include('includes/modals.php');?>
<?php include('includes/footer.php');?>