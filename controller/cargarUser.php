<?php

function cargar(){
    $consulta = new Consulta();
    $result = $consulta->cargarUsers();

    if(!isset($result)){
        echo '<h2> No hay usuarios</h2>';
    }else{
        echo '
        <table class="table table-bordered table-hover tablita">
            <thead>
                <tr>
                    <th>Identificacion</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Cargo</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Desactivar</th>
                </tr>
            </thead>
            <tbody>
        
        ';
        foreach($result as $farray){
            echo '
            <tr>
                <td>'.$farray["identificacion"].'</td>
                <td>'.$farray["nombre"].'</td>
                <td>'.$farray["apellido"].'</td>
                <td>'.$farray["email"].'</td>
                <td>'.$farray["cargo"].'</td>
                <td>'.$farray["estado"].'</td>
                <td><a href="editar-usuario-admin.php?id_user='.$farray["identificacion"].'" class="fa fa-pencil">editar</a></td>
                <td><a href="../../controller/eliminarUsuario-admin.php?id_userE='.$farray["identificacion"].'" class="fa fa-trash">Eliminar</a></td>
                 
            </tr>
            ';
        }
        echo '</tbody> </table>';
    }
}


?>