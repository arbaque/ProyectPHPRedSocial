<?php
class perfil {  
  
   private $fechanacimiento ;
   private $genero;
   private $pais_id;
   private $image ;
   private $image_header ;
   private $titulo;
   private $bio;
   private $likes;
   private $dislikes;
   private $direccion;
   private $telefono;
   private $nivel_id;
   private $usuario_id ;
   private $nivel_id ;
 
  
   function __construct() {  
    
   }
  
   public function getfechanacimiento() {  
     return $this->fechanacimiento;  
   }  
   public function setfechanacimiento($fechanacimiento) {  
     $this->fechanacimiento = $fechanacimiento;  
   }  
   public function getgenero() {  
     return $this->genero;  
   }  
   public function setgenero($genero) {  
     $this->genero = $genero;  
   }  

   public function getpais_id() {  
     return $this->pais_id;  
   }  
   public function setpais_id($pais_id) {  
     $this->pais_id = $pais_id;  
   }  

   public function setimage(image) {  
     $this->image = $image;  
   }  
   public function getimage() {  
     return $this->image;  
   }  
   public function setimage_header($image_header) {  
     $this->image_header = $image_header;  
   }  
   public function getimage_header() {  
     return $this->image_header;  
   }  
   public function settitulo($titulo) {  
     $this->titulo = $titulo;  
   }  
   public function gettitulo() {  
     return $this->titulo;  
   }  
   public function setbio($bio) {  
     $this->bio = $bio;  
   }  
   public function getbio() {  
     return $this->bio;  
   }  
   
  public function setlikes($likes) {  
     $this->likes = $likes;  
   }  
   public function getlikes() {  
     return $this->likes;  
   } 
   
   
   public function setdislikes($dislikes) {  
     $this->dislikes = $dislikes;  
   }  
   public function getdislikes() {  
     return $this->dislikes;  
   } 
   
      public function setdireccion($direccion) {  
     $this->direccion = $direccion;  
   }  
   public function getdireccion() {  
     return $this->direccion;  
   } 
   
      public function settelefono($telefono) {  
     $this->telefono = $telefono;  
   }  
   public function gettelefono() {  
     return $this->telefono;  
   } 
  
   public function setnivel_id($nivel_id) {  
     $this->nivel_id = $nivel_id;  
   }  
   public function getnivel_id() {  
     return $this->nivel_id;  
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
