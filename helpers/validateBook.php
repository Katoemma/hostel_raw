<?php
    function validateBook($book){
        $errors =array();
        if ($_POST['type']== "") {
            array_push($errors, 'You must select room type');
        }
        return $errors;
    }
    function validateApprove($book){
        $errors =array();
        if ($_POST['room']== "") {
            array_push($errors, 'You must select room Number');
        }
        return $errors;
    }
    
?>