<?php

require_once("colector.php");
class demoColector
{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function ListarDEMO()
	{
		try
		{
		    $result= $this->modelo->Listar("empleado");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
 
 public function InsertDEMO()
 
{
 try
		{
		    $result= $this->modelo->operacion("insert into empleado (id_empleado, nombre, apellido, direccion, telefono, sueldo) values (1, monica, chavez, sur, 2345677, 300);");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }


 
 public function UpdateDEMO()
 {
 try
		{
		    $result= $this->modelo->operacion("update empleado set  where id_empleado = 1");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function DeleteDEMO()
 {
 try
		{
		     $result= $this->modelo->operacion("delete from empleado where id_empleado = 2");
                       echo "se elimino registro 2";
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}
 ?>
