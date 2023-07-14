<?php 
    $user = selectOne('users', ['id'=>$_SESSION['id']]);
?>
<?php
    if (!isset($_SESSION['id'])) {
        header('location:../../index.php');
    }
?>