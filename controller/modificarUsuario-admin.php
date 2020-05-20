<?php

require_once('../model/conexion.php');
require_once('../model/consulta.php');

$consulta = new Conexion();

$identificacion = $_POST['identificacion'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];




if(strlen($identificacion) > 0 && strlen($nombre) > 0 && strlen($apellido) > 0 && strlen($email) > 0 && strlen($cargo) > 0){

    $consulta = new Consulta();
    $result = $consulta->modificarUser($identificacion, $nombre, $apellido, $email, $cargo);
}else{
    echo  "<script>alert('Usuario registrado con exito')</script>";
    echo '<script>location.href="../views/admin/ver-usuarios-admin.php"</script>';
}





?>