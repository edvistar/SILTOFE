<?php

function cargarVe(){
    $consulta = new Consulta();
    $result = $consulta->cargarVehiculos();

    if(!isset($result)){
        echo '
        <div class="bienvenida">
         <h1> No hay Rutas registrados</h1>
         </div>';
    }else{
        echo '
        <table class="table table-bordered table-hover tablita">
            <thead>
                <tr>
                    <th>Placa</th>
                    <th>Capacidad</th>
                    <th>Seguro</th>
                    <th>Tecnomecanica</th>
                    <th>Tipo de Vehiculo</th>
                    <th>Conductor</th>
                    <th>Costo de Flete</th>
                    <th>GPS</th>
                    <th>Estado</th>
                    <th>Fecha de Registro</th>
                    <th>Editar</th>
                    <th>Desactivar</th>
                </tr>
            </thead>
            <tbody>
        
        ';
        foreach($result as $farray){
            echo '
            <tr>
                <td>'.$farray["placa"].'</td>
                <td>'.$farray["capacidad"].'</td>
                <td>'.$farray["seguro"].'</td>
                <td>'.$farray["tecnomecanica"].'</td>
                <td>'.$farray["tipo_vehiculo"].'</td>
                <td>'.$farray["conductor"].'</td>
                <td>'.$farray["costo_flete"].'</td>
                <td>'.$farray["gps"].'</td>
                <td>'.$farray["estado"].'</td>
                <td>'.$farray["fecha_registro"].'</td>
                <td><a href="editarVehiculo.php?placa='.$farray["placa"].'" class="fa fa-pencil">editar</a></td>
                <td><a href="../../controller/admin/eliminarVehiculo.php?placaE='.$farray["placa"].'" class="fa fa-trash">Eliminar</a></td>
                 
            </tr>
            ';
        }
        echo '</tbody> </table>';
    }
}



?>