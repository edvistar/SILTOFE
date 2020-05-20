<?php

class Consulta{
        public function insertUsers($identificacion, $nombre, $apellido, $email, $cargo, $pass, $estado, $rutaimg){
            
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "SELECT * FROM usuarios WHERE identificacion = :identificacion OR email = :email";
            $result = $conexion->prepare($sql);
            $result->bindParam(':identificacion', $identificacion);
            $result->bindParam(':email', $email);

            $result->execute();
            $farray=$result->fetch();

            if($farray){
                echo  "<script>alert('Usuario o correo ya registrado')</script>";
                echo '<script>location.href="../views/admin/registrar-usuario-admin.php"</script>';
            }else{
                $modelo = new Conexion();
                $conexion = $modelo->get_conexion();
        
                $sql = "INSERT INTO usuarios (identificacion, nombre, apellido, email, cargo, pass, estado, foto) VALUES (:identificacion, :nombre, :apellido, :email,:cargo, :pass, :estado,:foto)";

                $insertar = $conexion->prepare($sql);
                $insertar->bindParam(':identificacion', $identificacion);
                $insertar->bindParam(':nombre', $nombre);
                $insertar->bindParam(':apellido', $apellido);
                $insertar->bindParam(':email', $email);
                $insertar->bindParam(':cargo', $cargo);
                $insertar->bindParam(':pass', $pass);
                $insertar->bindParam(':estado', $estado);
                $insertar->bindParam(':foto', $rutaimg);
        
                if(!$insertar){
                    return "error al cargar recurso";
        
                }else{
                    $insertar->execute();
                    echo  "<script>alert('Usuario registrado con exito')</script>";
                    echo '<script>location.href="../views/admin/registrar-usuario-admin.php"</script>';
                }
            }  
        }
        
        
    
    public function cargarUsers(){

        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT * FROM usuarios";
        $insertar = $conexion->prepare($sql);
        $insertar->execute();

        while($result = $insertar->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }
    public function cargarUser($doc){
        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT * FROM usuarios WHERE identificacion = :identificacion ";
        $select = $conexion->prepare($sql);
        $select->bindParam(":identificacion", $doc);
        $select->execute();
        while($result = $select->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }
    public function modificarUser($identificacion, $nombre, $apellido, $email, $cargo){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "UPDATE usuarios SET identificacion = :identificacion, nombre = :nombre, apellido = :apellido, email = :email, cargo = :cargo WHERE identificacion = :identificacion";

        $up = $conexion->prepare($sql);

        $up->bindParam(':identificacion', $identificacion);
        $up->bindParam(':nombre', $nombre);
        $up->bindParam(':apellido', $apellido);
        $up->bindParam(':email', $email);
        $up->bindParam(':cargo', $cargo);
        $up->bindParam(':estado', $estado);

        if(!$up){
            return "error al cargar recurso";

        }else{
            $up->execute();
            echo  "<script>alert('Usuario ACTUALIZADO con exito')</script>";
            echo '<script>location.href="../views/admin/ver-usuarios-admin.php"</script>';
    }
  }
  public function eliminarUser($idEliminar){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "DELETE FROM usuarios WHERE identificacion = :identficacion";
        $delete = $conexion->prepare($sql);
        $delete->bindParam(':identficacion', $idEliminar);

        if(!$delete){
            echo  "<script>alert('ERROR AL ELIMINAR')</script>";
            echo '<script>location.href="../views/admin/ver-usuarios-admin.php"</script>';
        }else{
            $delete->execute();
            echo  "<script>alert('Usuario ELIMINADO con exito')</script>";
            echo '<script>location.href="../views/admin/ver-usuarios-admin.php"</script>';
        }
  }
  public function verPerfil($email){
    $result = null;
    $modelo = new Conexion();
    $conexion = $modelo->get_conexion();

    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $result=$conexion->prepare($sql);
    $result->bindParam(':email', $email);
    $result->execute();

    while($farray = $result->fetch()){
        $resultado[]=$farray;
    }
    return $resultado;
  }

}

?>