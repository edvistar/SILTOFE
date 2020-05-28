<?php

function cargarRu(){
    $consulta = new Consulta();
    $result = $consulta->cargarRutas();

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
                    <th>Id Ruta</th>
                    <th>Destino</th>
                    <th>Fecha de Ruta</th>
                    <th>Hora de salida</th>
                    <th>Hora de llegada</th>
                    <th>Descripcion</th>
                    <th>Tipo Ruta</th>
                    <th>Precinto</th>
                    <th>Identificacion</th>
                    <th>Placa</th>
                    <th>Id Centro</th>
                    <th>Editar</th>
                    <th>Desactivar</th>
                </tr>
            </thead>
            <tbody>
        
        ';
        foreach($result as $farray){
            echo '
            <tr>
                <td>'.$farray["id_ruta"].'</td>
                <td>'.$farray["destino"].'</td>
                <td>'.$farray["fecha_ruta"].'</td>
                <td>'.$farray["hora_salida"].'</td>
                <td>'.$farray["hora_llegada"].'</td>
                <td>'.$farray["descripcion"].'</td>
                <td>'.$farray["tipo_ruta"].'</td>
                <td>'.$farray["precinto"].'</td>
                <td>'.$farray["identificacion"].'</td>
                <td>'.$farray["placa"].'</td>
                <td>'.$farray["id_centro"].'</td>
                <td><a href="editarRuta.php?id_ruta='.$farray["id_ruta"].'" class="fa fa-pencil">editar</a></td>
                <td><a href="../../controller/admin/eliminarRuta.php?id_rutaE='.$farray["id_ruta"].'" class="fa fa-trash">Eliminar</a></td>
                 
            </tr>
            ';
        }
        echo '</tbody> </table>';
    }
}



?>