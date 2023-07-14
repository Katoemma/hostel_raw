<?php 
    $user = selectOne('users', ['id'=>$_SESSION['id']]);
    $hostel = selectOne('hostels',['admin' =>$user['id']]);
?>
<?php
    if (!isset($_SESSION['id'])) {
        header('location:../../index.php');
    }
?>