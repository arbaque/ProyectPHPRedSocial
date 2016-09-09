<?php
class imagen {  
   private $id ;  
   private $ruta  ;
   private $titulo  ;  
   private $contenido  ;  
   private $usuario_id ;
   private $nivel_id ;        
   private $album_id ;  
 
  
   function __construct() {  
    
   }
  
   public function getid() {  
     return $this->id;  
   }  
   public function setid($id) {  
     $this->id = $id;  
   }  
   public function getruta() {  
     return $this->ruta;  
   }  
   public function setruta($ruta) {  
     $this->ruta = $ruta;  
   }  

   public function gettitulo() {  
     return $this->titulo;  
   }  
   public function settitulo($titulo) {  
     $this->titulo = $titulo;  
   }  

   public function setcontenido($contenido) {  
     $this->contenido = $contenido;  
   }  
   public function getcontenido() {  
     return $this->contenido;  
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
   public function setalbum_id($album_id) {  
     $this->album_id = $album_id;  
   }  
   public function getalbum_id() {  
     return $this->album_id;  
   }  
    
 }
 ?>
