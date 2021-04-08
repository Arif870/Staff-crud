<?php

namespace App\Controller;

use App\Support\Database;

/**
 * Staff class
 */

 class Staff extends Database{
     
    public function staffdatasent($name, $email, $cell, $photoname){
        
        $sql ="INSERT INTO our_staff (name, email, cell, photo) VALUES ('$name','$email','$cell','$photoname') ";
        
        $this -> createStaff($sql);
    }

    /**
     * All staff show
     */

     public function allStaffShow(){
         return $this -> all('our_staff');
     }
     /**
      * delete staff data
      */

      public function deleteStaffData($deleteId){
         return $this ->delete('our_staff', $deleteId);
      }

      /**
       * view staff 
       */

       public function viewStaffData($view_id){
           return $this -> view('our_staff', $view_id);
       }
    
}


?>