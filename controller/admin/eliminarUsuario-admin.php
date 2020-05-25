<?php

require_once('../../model/conexion.php');
require_once('../../model/consulta.php');


if(isset($_GET['id_userE'])){
    $idEliminar = $_GET['id_userE'];
    $consulta = new Consulta();
    $result = $consulta->eliminarUser($idEliminar);
}else{
    echo '<script>alert("error)</script>';
}



?>