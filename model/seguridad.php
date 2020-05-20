<?php

session_start();

if(!isset($_SESSION['autenticado'])){
    echo  "<script>alert('Debes iniciar sesion')</script>";
    //echo '<script>location.href="../login.php"</script>';
}
if($_SESSION['cargo']!="supervisor"){
    echo  "<script>alert('No tienes permisos')</script>";
    echo '<script>location.href="../login.php"</script>';
}


?>