<?php
class pais {  
   private $id ;  
   private $nombre ;
   private $prefijo ;  
 
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

   public function getprefijo() {  
     return $this->prefijo;  
   }  
   public function setprefijo($prefijo) {  
     $this->prefijo = $prefijo;  
   }  
  
 }
 ?>
