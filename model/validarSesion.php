<?php

class validarSesion{
    public function iniciarSesion($email, $pass){
        $model = new Conexion();
        $conexion = $model->get_conexion();

        $sql = "SELECT * FROM usuario WHERE email = :email";
        $select = $conexion->prepare($sql);
        $select->bindParam(":email", $email);

        $select->execute();
        if($farray=$select->fetch()){
            if($pass == $farray['pass']){
                session_start();
                $_SESSION['email']          =$farray['email'];
                $_SESSION['identificacion'] =$farray['identificacion'];
                $_SESSION['pass']           =$farray['pass'];
                $_SESSION['cargo']          =$farray['cargo'];
                $_SESSION['estado']         =$farray['estado'];

                $_SESSION['autenticado']='si';

                if($farray['estado']=="activo"){

                    if($farray['cargo']=="coordinador"){
                        echo  "<script>alert('Bienvenido Coordinador')</script>";
                        echo '<script>location.href="../views/admin/registrar-usuario-admin.php"</script>';

                    }if($farray['cargo']=="supervisor"){
                        echo  "<script>alert('Bienvenido Supervisor')</script>";
                        echo '<script>location.href="../../views/admin/indexSupervisor.php"</script>';

                    }if($farray['cargo']=="bodeguero"){
                        echo  "<script>alert('Bienvenido Bodeguero')</script>";
                        echo '<script>location.href="../views/admin/registrar-usuario-admin.php"</script>';
                    }
                }else{
                    echo  "<script>alert('Usuario Inactivo')</script>";
                    echo '<script>location.href="../login.php"</script>'; 
                }

            }else{
                echo  "<script>alert('Contraseña incorrecta')</script>";
                echo '<script>location.href="../login.php"</script>'; 
            }
        }else{
            echo  "<script>alert('Usuario incorrecto')</script>";
            echo '<script>location.href="../login.php"</script>';
        }

    }
    public function cerrarSesion(){
        $modelo = new conexion();

    session_start();
    session_destroy();

    echo  "<script>alert('Sesion finalizada')</script>";
    echo '<script>location.href="../../login.php"</script>';

    }
    

    
}

?>