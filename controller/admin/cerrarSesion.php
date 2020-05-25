<?php

require_once "../../model/conexion.php";
require_once "../../model/validarSesion.php";

$consulta = new validarSesion();
$result = $consulta->cerrarSesion();
?>