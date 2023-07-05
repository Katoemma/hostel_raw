<?php
    session_start();

    include('connection.php');

    //debugging function
    function dd($value){
       echo '</prev>', print_r($value, true), '</prev>';
       die();
    }

    //prepared statements utilty function
    function executeQuery($sql, $data){
        global $conn;
        $stmt = $conn -> prepare($sql);
        $values = array_values($data);
        $types = str_repeat('s', count($values));
        $stmt ->bind_param($types, ...$values);
        $stmt -> execute();
        return $stmt;
     }
    