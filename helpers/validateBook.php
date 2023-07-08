<?php
    function validateBook($book){
        $errors =array();
        if ($_POST['type']== "") {
            array_push($errors, 'You must select room type');
        }
        return $errors;
    }

?>