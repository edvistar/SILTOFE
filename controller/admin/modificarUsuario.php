<?php

require_once('../../model/conexion.php');
require_once('../../model/consulta.php');

$consulta = new Conexion();

$identificacion = $_POST['identificacion'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$whatsapp = $_POST['whatsapp'];
$cargo = $_POST['cargo'];
$fecha_ingreso = $_POST['fecha_ingreso'];





if(strlen($identificacion) > 0 && strlen($nombre) > 0 && strlen($apellido) > 0 && strlen($email) > 0 && strlen($telefono) > 0 && strlen($whatsapp) > 0 && strlen($cargo) > 0 && strlen($fecha_ingreso) > 0){

    $consulta = new Consulta();
    $result = $consulta->modificarUsuario($identificacion, $nombre, $apellido, $email,$telefono, $whatsapp, $cargo, $fecha_ingreso);
}else{
    echo  "<script>alert('Usuario registrado con exito')</script>";
    echo '<script>location.href="../views/admin/ver-usuarios-admin.php"</script>';
}





?>