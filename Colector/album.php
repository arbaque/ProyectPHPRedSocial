<?php
class album {  
   private $id ;  
   private $titulo  ;
   private $contenido  ;  
   private $usuario_id_id ;  
   private $nivel_id ;
     
   function __construct() {  
    
   }
  
   public function getid() {  
     return $this->id;  
   }  
   public function setid($id) {  
     $this->id = $id;  
   }  
   public function gettitulo() {  
     return $this->titulo;  
   }  
   public function settitulo($titulo) {  
     $this->titulo = $titulo;  
   }  

   public function getcontenido() {  
     return $this->contenido;  
   }  
   public function setcontenido($contenido) {  
     $this->contenido = $contenido;  
   }  

   public function setusuario_id($usuario_id) {  
     $this->usuario_id = $usuario_id;  
   }  
   public function getusuario_id() {  
     return $this->usuario_id;  
   }  
   public function setnivel_id($nivel_id) {  
     $this->nivel_id = $nivel_id;  
   }  
   public function getnivel_id() {  
     return $this->nivel_id;  
   }  
  

 }
 ?>
