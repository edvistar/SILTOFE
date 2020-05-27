<?php

require_once('../../model/conexion.php');
require_once('../../model/consulta.php');



$identificacion = $_POST['identificacion'];
$nombre         = $_POST['nombre'];
$apellido       = $_POST['apellido'];
$email          = $_POST['email'];
$telefono       = $_POST['telefono'];
$whatsapp       = $_POST['whatsapp'];
$cargo          = $_POST['cargo'];
$estado         = 'activo';
$fecha_ingreso  = $_POST['fecha_ingreso'];
$pass           = $_POST['pass'];



if(strlen($identificacion) > 0 && strlen($nombre) > 0 && strlen($apellido) > 0 && strlen($email) > 0 && strlen($telefono) > 0 && strlen($whatsapp) > 0 && strlen($cargo) > 0   && strlen($estado) > 0 && strlen($fecha_ingreso) > 0 && strlen($pass) > 0){
    $passmd = md5($pass);
    define ('LIMITE',2000);
		define('ARREGLO', serialize(array('image/jpg' ,'image/png' ,'image/jpeg' )));//definir el arreglo con las extenciones permitidas//
        $FORMATO = unserialize(ARREGLO);
        if ($_FILES["foto"]["error"]>0) {//ese file depende del name del input del registrar//
			echo "<script>alert('Seleccione una imagen')</script>";
			echo "<script>location.href='../../views/registrarUsuario.php'</script>";
		}else{
            if (in_array($_FILES['foto']['type'], $FORMATO) && $_FILES['foto']['size'] <= LIMITE *2000){
                $rutaimg= "../../img/upload/".$_FILES['foto']['name'];

                if (!file_exists($rutaimg)){
                    $resultado = move_uploaded_file($_FILES["foto"]["tmp_name"], $rutaimg);
                    if ($resultado){
                        $passmd = md5($pass);
                        $consulta = new Consulta();
                        $result = $consulta->insertUsers($identificacion, $nombre, $apellido, $email, $telefono, $whatsapp, $cargo, $estado, $fecha_ingreso, $rutaimg,  $passmd);
                    }else{
                        echo "<script>alert('Error al cargar la foto')</script>";
                        echo "<script>location.href='../../views/registrarUsuario.php'</script>";
                    }
                }else{
                    echo "<script>alert('Ya existe una foto con ese nombre')</script>";
                    echo "<script>location.href='../../views/registrarUsuario.php'</script>"; 
                }
            }else{
                echo "<script>alert('Tamaño o tipo de imagen incorrecto')</script>";
				echo "<script>location.href='../../views/registrarUsuario.php'</script>";
            }		
        }

    }else{
        echo  "<script>alert('Complete los campos')</script>";
        echo '<script>location.href="../views/admin/registrarUsuario.php"</script>';
    }


?>