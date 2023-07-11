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

     //function to select all
     function selectAll($table, $conditions=[]){
      global $conn;
      $sql = "SELECT * FROM $table";

      if (empty($conditions)) {
         $stmt =$conn ->prepare($sql);
         $stmt -> execute();
         $listings = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
         return $listings;
      } else {
         $i = 0;

         foreach ($conditions as $key => $value) {
            if ($i === 0) {
               $sql = $sql. " WHERE $key=? ";
            } else{
               $sql = $sql . " AND $key=?";
            }
            $i++;
         }
         $stmt = executeQuery($sql, $conditions);
         $listings = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
         return $listings;
      }
      
     }

     //function to select one 
     function selectOne($table, $conditions){
      global $conn;

      $sql = "SELECT * FROM $table";

      $i = 0;

      foreach ($conditions as $key => $value) {
         if ($i === 0) {
            $sql = $sql. " WHERE $key=?";
         } else{
            $sql = $sql . " AND $key=?";
         }
         $i++;
      }
      $sql = $sql. " LIMIT 1";
      $stmt =executeQuery($sql, $conditions);
      $listings = $stmt->get_result()->fetch_assoc();
      return $listings;

     }

     //function to insert data in DB
      function create($table, $data){
         global $conn;

         $sql = "INSERT INTO $table SET ";

         $i = 0;
         foreach ($data as $key => $value) {
            if ($i === 0) {
               $sql = $sql . " $key=? ";
            } else {
               $sql = $sql. ", $key=?";
            }
            $i++;
         }

         $stmt = executeQuery($sql, $data);
         $id = $stmt->insert_id;
         return $id;

      }
     //function to update
     function update($table, $id ,  $data){
      global $conn;
     
      $sql = "UPDATE $table SET ";
  
      $i = 0;
      foreach ($data as $key => $value){
          if($i === 0){
              $sql = $sql . " $key=? ";
          }else {
              $sql = $sql . ", $key=?";
          }
          $i++;
      }
      $sql = $sql . " WHERE id=?";
      $data['id']= $id;
      $stmt = executeQuery($sql, $data);
      return $stmt->affected_rows;
   }
     //function to delete in db
     function delete($table, $id){
      global $conn;

      $sql = "DELETE FROM $table WHERE id=?";
      $stmt = executeQuery($sql ,['id'=> $id]);
      return $stmt->affected_rows;
     }
    