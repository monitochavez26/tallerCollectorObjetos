<?php
class empleado {  
   private $id_empleado;  
   private $nombre;
	private $apellido;  
   private $direccion;
	private $telefono;  
   private $sueldo;
  
  
   function __construct() {  
    

   }  
   /*
      function __construct() {  
    print "En el constructor BaseClass\n";
   } */ 
   
   
   function __clone() {  
     $this->id_empleado = ++$this->id_empleado;   
   }  
   public function getId_empleado() {  
     return $this->id_empleado;  
   }  
   public function setId_empleado($id_empleado) {  
     $this->id_empleado = $id_empleado;  
   }  
   public function getNombre() {  
     return $this->nombre;  
   }  
   public function setNombre($nombre) {  
     $this->nombre = $nombre;  
   }  




	public function getApellido() {  
     return $this->apellido;  
   }  
   public function setApellido($apellido) {  
     $this->apellido = $apellido;  
   }  



public function getDireccion() {  
     return $this->direccion;  
   }  
   public function setDireccion($direccion) {  
     $this->direccion = $direccion;  
   }  





public function getTelefono() {  
     return $this->telefono;  
   }  
   public function setTelefono	($telefono) {  
     $this->telefono = $telefono;  
   }  




public function getSueldo() {  
     return $this->sueldo;  
   }  
   public function setSueldo($sueldo) {  
     $this->sueldo = $sueldo;  
   }  



 }
 ?>
