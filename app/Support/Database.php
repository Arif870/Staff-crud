<?php

namespace App\Support;

use mysqli;

/**
 * Database class
 */

abstract class Database{
     
    /**
     * private property
     */

     private $host = "localhost";
     private $user = "root";
     private $pass = "root";
     private $db   = "staff";
     private $connection;

    private function connection(){


        return $this -> connection = new mysqli($this -> host,$this -> user,$this -> pass,$this -> db);
    }

    /**
     * Database all helper classs
     * create staff
     */
    
    protected function createStaff($sql){
        
       return $this -> connection() -> query($sql);
    }
 /**
  * All staff data show
  */
    protected function all($table, $order="DESC"){
        
        return $this -> connection() -> query("SELECT * FROM $table ORDER BY id $order");
    }

    /**
     * Staff data delete
     */

     protected function delete($table, $id){
        return $this -> connection() -> query("DELETE FROM $table WHERE id = $id ");
     }

      /**
     * Staff data view
     */

    protected function view($table, $id){
        return $this -> connection() -> query("SELECT * FROM $table WHERE id = $id ");
     }
     
 }


?>