<?php

require_once('../../model/conexion.php');
require_once('../../model/validarSesion.php');

$email = $_POST['email'];
$pass = md5($_POST['pass']);

$consulta = new validarSesion();
$result = $consulta->iniciarSesion($email, $pass);

?>