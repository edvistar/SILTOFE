<?php

function cargarPr(){
    $consulta = new Consulta();
    $result = $consulta->cargarProductos();

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
                    <th>Id Producto</th>
                    <th>Nombre</th>
                    <th>Peso</th>
                    <th>Costo</th>
                    <th>Editar</th>
                    <th>Desactivar</th>
                </tr>
            </thead>
            <tbody>
        
        ';
        foreach($result as $farray){
            echo '
            <tr>
                <td>'.$farray["id_producto"].'</td>
                <td>'.$farray["nombre"].'</td>
                <td>'.$farray["peso"].'</td>
                <td>'.$farray["costo"].'</td>
                <td><a href="editarProducto.php?id_producto='.$farray["id_producto"].'" class="fa fa-pencil">editar</a></td>
                <td><a href="../../controller/admin/eliminarProducto.php?id_productoE='.$farray["id_producto"].'" class="fa fa-trash">Eliminar</a></td>
                 
            </tr>
            ';
        }
        echo '</tbody> </table>';
    }
}



?>