<?php
class rol {  
   private $id ;  
   private $nombre  ;

     
   function __construct() {  
    
   }
  
   public function getid() {  
     return $this->id;  
   }  
   public function setid($id) {  
     $this->id = $id;  
   }  
   public function getnombre() {  
     return $this->nombre;  
   }  
   public function setnombre($nombre) {  
     $this->nombre = $nombre;  
   }  

    

 }
 ?>
