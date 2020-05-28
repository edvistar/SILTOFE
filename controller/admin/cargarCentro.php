<?php

function cargarCa(){
    $consulta = new Consulta();
    $result = $consulta->cargarCentros();

    if(!isset($result)){
        echo '
        <div class="bienvenida">
         <h1> No hay Centros registrados</h1>
         </div>';
    }else{
        echo '
        <table class="table table-bordered table-hover tablita">
            <thead>
                <tr>
                    <th>Id centro</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>telefono</th>
                    <th>Whatsapp</th>
                    <th>Departamento</th>
                    <th>Ciudad</th>
                    <th>Encargado</th>
                    <th>Lugar</th>
                    <th>Editar</th>
                    <th>Desactivar</th>
                </tr>
            </thead>
            <tbody>
        
        ';
        foreach($result as $farray){
            echo '
            <tr>
                <td>'.$farray["id_centro"].'</td>
                <td>'.$farray["nombre"].'</td>
                <td>'.$farray["email"].'</td>
                <td>'.$farray["telefono"].'</td>
                <td>'.$farray["whatsapp"].'</td>
                <td>'.$farray["departamento"].'</td>
                <td>'.$farray["ciudad"].'</td>
                <td>'.$farray["encargado"].'</td>
                <td>'.$farray["lugar"].'</td>
                <td><a href="editarCentro.php?id_centro='.$farray["id_centro"].'" class="fa fa-pencil">editar</a></td>
                <td><a href="../../controller/admin/eliminarCentro.php?id_centroE='.$farray["id_centro"].'" class="fa fa-trash">Eliminar</a></td>
                 
            </tr>
            ';
        }
        echo '</tbody> </table>';
    }
}



?>