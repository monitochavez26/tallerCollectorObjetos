<?php
require_once 'demoColector.php';
require_once 'conexion.php';

// Logica
$alm = new conexion();
$model = new demoColector();

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>ejemplo moni class vista </title>       
	</head>
    <body style="padding:15px;">

        <div class="pure-g">
            <div class="pure-u-1-12">
                               

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th style="text-align:left;">id_empleado</th>
                            <th style="text-align:left;">nombre</th>

                            <th style="text-align:left;">apellido</th>
                            <th style="text-align:left;">direccion</th>

                            <th style="text-align:left;">telefono</th>
                            <th style="text-align:left;">sueldo</th>



                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->ListarDEMO() as $r): ?>
                        <tr>
                            <td><?php echo $r->getId_empleado(); ?></td>
                            <td><?php echo $r->getNombre(); ?></td>  

			<td><?php echo $r->getApellido(); ?></td>
                            <td><?php echo $r->getDireccion(); ?></td>  

				<td><?php echo $r->getTelefono(); ?></td>
                            <td><?php echo $r->getSueldo(); ?></td>  




                          
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>
