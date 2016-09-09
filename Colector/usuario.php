<?php
class usuario {  
   private $id ;  
   private $pnombre ;
   private $snombre ;  
   private $usuario ;  
   private $email ;
   private $clave ;        
   private $codigo ;  
   private $estado  ; 
   private $administrador  ; 
 
  
   function __construct() {  
    
   }
  
   public function getid() {  
     return $this->id;  
   }  
   public function setid($id) {  
     $this->id = $id;  
   }  
   public function getpnombre() {  
     return $this->pnombre;  
   }  
   public function setpnombre($pnombre) {  
     $this->pnombre = $pnombre;  
   }  

   public function getsnombre() {  
     return $this->snombre;  
   }  
   public function setsnombre($snombre) {  
     $this->snombre = $snombre;  
   }  

   public function setusuario($usuario) {  
     $this->usuario = $usuario;  
   }  
   public function getusuario() {  
     return $this->usuario;  
   }  
   public function setemail($email) {  
     $this->email = $email;  
   }  
   public function getemail() {  
     return $this->email;  
   }  
   public function setclave($clave) {  
     $this->clave = $clave;  
   }  
   public function getclave() {  
     return $this->clave;  
   }  
   public function setcodigo($codigo) {  
     $this->codigo = $codigo;  
   }  
   public function getcodigo() {  
     return $this->codigo;  
   }  
   
  public function setestado($estado) {  
     $this->estado = $estado;  
   }  
   public function getestado() {  
     return $this->estado;  
   } 
   
   
   public function setadministrador($administrador) {  
     $this->administrador = $administrador;  
   }  
   public function getadministrador() {  
     return $this->administrador;  
   } 
   
  

 }
 ?>
