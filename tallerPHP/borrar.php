<?php
require_once 'demoColector.php';
require_once 'empleado.php';

$alm = new empleado();
$model = new demoColector();


?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>ejemplo moni eliminar</title>       
	</head>
    <body style="padding:15px;">

 
                 <?php  $model->DeleteDEMO();?>
               
 
    </body>
</html>
