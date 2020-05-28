<?php

require_once('../../model/conexion.php');
require_once('../../model/consulta.php');


if(isset($_GET['id_productoE'])){
    $idEliminar = $_GET['id_productoE'];
    $consulta = new Consulta();
    $result = $consulta->eliminarProductos($idEliminar);
}else{
    echo '<script>alert("error)</script>';
}



?>