<?php

function cargarSo(){
    $consulta = new Consulta();
    $result = $consulta->cargarSolicitudes();

    if(!isset($result)){
        echo '
        <div class="bienvenida">
         <h1> No hay Solicitudes registrados</h1>
         </div>';
    }else{
        echo '
        <table class="table table-bordered table-hover tablita">
            <thead>
                <tr>
                    <th>Id Solicitud</th>
                    <th>Solicitud</th>
                    <th>Descripcion</th>
                    <th>Cantidad de Kilos</th>
                    <th>Editar</th>
                    <th>Desactivar</th>
                </tr>
            </thead>
            <tbody>
        
        ';
        foreach($result as $farray){
            echo '
            <tr>
                <td>'.$farray["id_solicitud"].'</td>
                <td>'.$farray["solicitud"].'</td>
                <td>'.$farray["descripcion"].'</td>
                <td>'.$farray["cantidad_kilos"].'</td>
                <td><a href="editarSolicitud.php?id_solicitud='.$farray["id_solicitud"].'" class="fa fa-pencil">editar</a></td>
                <td><a href="../../controller/admin/eliminarSolicitud.php?id_solicitudE='.$farray["id_solicitud"].'" class="fa fa-trash">Eliminar</a></td>
                 
            </tr>
            ';
        }
        echo '</tbody> </table>';
    }
}



?>