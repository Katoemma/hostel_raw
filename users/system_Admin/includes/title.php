<?php 
    $user = selectOne('users', ['id'=>$_SESSION['id']]);
?>
<?php
    if (!isset($_SESSION['id'])) {
        header('location:../../login.php');
        exit();
    }
    if($_SESSION['id'] != $user['id']){
        header('location:../../login.php');
        exit();
    }
?>