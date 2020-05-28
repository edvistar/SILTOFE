<?php

class Consulta{
    public function insertUsers($identificacion, $nombre, $apellido, $email, $telefono, $whatsapp, $cargo, $estado, $fecha_ingreso, $rutaimg,  $pass){
        
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
            echo '<script>location.href="../views/admin/registrarUsuario.php"</script>';
        }else{
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
    
            $sql = "INSERT INTO usuario (identificacion, nombre, apellido, email, telefono, whatsapp, cargo, estado, fecha_ingreso, foto, pass) VALUES (:identificacion, :nombre, :apellido, :email,:telefono, :whatsapp, :cargo, :estado, :fecha_ingreso, :foto, :pass)";

            $insertar = $conexion->prepare($sql);
            $insertar->bindParam(':identificacion', $identificacion);
            $insertar->bindParam(':nombre', $nombre);
            $insertar->bindParam(':apellido', $apellido);
            $insertar->bindParam(':email', $email);
            $insertar->bindParam(':telefono', $telefono);
            $insertar->bindParam(':whatsapp', $whatsapp);
            $insertar->bindParam(':cargo', $cargo);
            $insertar->bindParam(':estado', $estado);
            $insertar->bindParam(':fecha_ingreso', $fecha_ingreso);
            $insertar->bindParam(':foto', $rutaimg);
            $insertar->bindParam(':pass', $pass);
            
    
            if(!$insertar){
                return "error al cargar recurso";
    
            }else{
                $insertar->execute();
                echo  "<script>alert('Usuario registrado con exito')</script>";
                echo '<script>location.href="../../views/admin/listaUsuarios.php"</script>';
            }
        }  
    }

    public function insertCentros($id_centro, $nombre, $email, $telefono, $whatsapp, $departamento, $ciudad, $encargado, $lugar){
        
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "INSERT INTO centro (id_centro, nombre, email, telefono, whatsapp, departamento, ciudad, encargado, lugar) VALUES (:id_centro, :nombre, :email, :telefono,:whatsapp, :departamento, :ciudad,:encargado, :lugar)";

        $insertar = $conexion->prepare($sql);
        $insertar->bindParam(':id_centro', $id_centro);
        $insertar->bindParam(':nombre', $nombre);
        $insertar->bindParam(':email', $email);
        $insertar->bindParam(':telefono', $telefono);
        $insertar->bindParam(':whatsapp', $whatsapp);
        $insertar->bindParam(':departamento', $departamento);
        $insertar->bindParam(':ciudad', $ciudad);
        $insertar->bindParam(':encargado', $encargado);
        $insertar->bindParam(':lugar', $lugar);

        if(!$insertar){
            return "error al cargar recurso";

        }else{
            $insertar->execute();
            echo  "<script>alert('Centro registrado con exito')</script>";
            echo '<script>location.href="../../views/admin/listaCentros.php"</script>';
        }
    }  
    public function insertRutas($id_ruta, $destino, $fecha_ruta, $hora_salida, $hora_llegada, $descripcion, $tipo_ruta, $precinto, $identificacion, $placa, $id_centro){
        
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "INSERT INTO rutas (id_ruta, destino, fecha_ruta, hora_salida, hora_llegada, descripcion, tipo_ruta, precinto, identificacion, placa, id_centro) VALUES (:id_ruta, :destino, :fecha_ruta, :hora_salida,:hora_llegada, :descripcion, :tipo_ruta,:precinto, :identificacion, placa, id_centro)";

        $insertar = $conexion->prepare($sql);
        $insertar->bindParam(':id_ruta', $id_ruta);
        $insertar->bindParam(':destino', $destino);
        $insertar->bindParam(':fecha_ruta', $fecha_ruta);
        $insertar->bindParam(':hora_salida', $hora_salida);
        $insertar->bindParam(':hora_llegada', $hora_llegada);
        $insertar->bindParam(':descripcion', $descripcion);
        $insertar->bindParam(':tipo_ruta', $tipo_ruta);
        $insertar->bindParam(':precinto', $precinto);
        $insertar->bindParam(':identificacion', $identificacion);
        $insertar->bindParam(':placa', $placa);
        $insertar->bindParam(':id_centro', $id_centro);

        if(!$insertar){
            return "error al cargar recurso";

        }else{
            $insertar->execute();
            echo  "<script>alert('Ruta registrada con exito')</script>";
            //echo '<script>location.href="../../views/admin/listaRutas.php"</script>';
        }
    } 
    public function insertVehiculos($placa, $capacidad, $seguro, $tecnomecanica, $tipo_vehiculo, $conductor, $costo_flete, $gps, $estado, $fecha_registro){
        
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "INSERT INTO vehiculo (placa, capacidad, seguro, tecnomecanica, tipo_vehiculo, conductor, costo_flete, gps, estado, fecha_registro) VALUES (:placa, :capacidad, :seguro, :tecnomecanica, :tipo_vehiculo, :conductor, :costo_flete, :gps, :estado, :fecha_registro)";

        $insertar = $conexion->prepare($sql);
        $insertar->bindParam(':placa', $placa);
        $insertar->bindParam(':capacidad', $capacidad);
        $insertar->bindParam(':seguro', $seguro);
        $insertar->bindParam(':tecnomecanica', $tecnomecanica);
        $insertar->bindParam(':tipo_vehiculo', $tipo_vehiculo);
        $insertar->bindParam(':conductor', $conductor);
        $insertar->bindParam(':costo_flete', $costo_flete);
        $insertar->bindParam(':gps', $gps);
        $insertar->bindParam(':estado', $estado);
        $insertar->bindParam(':fecha_registro', $fecha_registro);
        

        if(!$insertar){
            return "error al cargar recurso";

        }else{
            $insertar->execute();
            echo  "<script>alert('Vehiculo registrado con exito')</script>";
            echo '<script>location.href="../../views/admin/listaVehiculos.php"</script>';
        }
    } 
    public function insertProductos($id_producto, $nombre, $peso, $costo){
        
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "INSERT INTO producto (id_producto, nombre, peso, costo) VALUES (:id_producto, :nombre, :peso, :costo)";

        $insertar = $conexion->prepare($sql);
        $insertar->bindParam(':id_producto', $id_producto);
        $insertar->bindParam(':nombre', $nombre);
        $insertar->bindParam(':peso', $peso);
        $insertar->bindParam(':costo', $costo);
        
        

        if(!$insertar){
            return "error al cargar recurso";

        }else{
            $insertar->execute();
            echo  "<script>alert('Producto registrado con exito')</script>";
            echo '<script>location.href="../../views/admin/listaProductos.php"</script>';
        }
    }  
    public function insertSolicitudes($id_solicitud, $solicitud, $descripcion, $cantidad_kilos){
        
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "INSERT INTO solicitud (id_solicitud, solicitud, descripcion, cantidad_kilos) VALUES (:id_solicitud, :solicitud, :descripcion, :cantidad_kilos)";

        $insertar = $conexion->prepare($sql);
        $insertar->bindParam(':id_solicitud', $id_solicitud);
        $insertar->bindParam(':solicitud', $solicitud);
        $insertar->bindParam(':descripcion', $descripcion);
        $insertar->bindParam(':cantidad_kilos', $cantidad_kilos);
        
        

        if(!$insertar){
            return "error al cargar recurso";

        }else{
            $insertar->execute();
            echo  "<script>alert('Solicitud registrada con exito')</script>";
            echo '<script>location.href="../../views/admin/listaSolicitud.php"</script>';
        }
    }  

        
    
    public function cargarUsuarios(){

        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT * FROM usuario";
        $insertar = $conexion->prepare($sql);
        $insertar->execute();

        while($result = $insertar->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }
    public function cargarCentros(){

        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT * FROM centro";
        $insertar = $conexion->prepare($sql);
        $insertar->execute();

        while($result = $insertar->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }
    public function cargarRutas(){

        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT * FROM rutas";
        $insertar = $conexion->prepare($sql);
        $insertar->execute();

        while($result = $insertar->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }
    

    public function cargarProductos(){

        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT * FROM producto";
        $insertar = $conexion->prepare($sql);
        $insertar->execute();

        while($result = $insertar->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }
    public function cargarSolicitudes(){

        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT * FROM solicitud";
        $insertar = $conexion->prepare($sql);
        $insertar->execute();

        while($result = $insertar->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }

    public function cargarVehiculos(){

        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT * FROM vehiculo";
        $insertar = $conexion->prepare($sql);
        $insertar->execute();

        while($result = $insertar->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }
    public function cargarUsuario($doc){
        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT * FROM usuario WHERE identificacion = :identificacion ";
        $select = $conexion->prepare($sql);
        $select->bindParam(":identificacion", $doc);
        $select->execute();
        while($result = $select->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }
    public function cargarCentro($doc){
        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT * FROM centro WHERE id_centro = :id_centro ";
        $select = $conexion->prepare($sql);
        $select->bindParam(":id_centro", $doc);
        $select->execute();
        while($result = $select->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }
    public function cargarVehiculo($doc){
        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT * FROM vehiculo WHERE placa = :placa ";
        $select = $conexion->prepare($sql);
        $select->bindParam(":placa", $doc);
        $select->execute();
        while($result = $select->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }
    public function cargarRuta($doc){
        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT * FROM rutas WHERE id_ruta = :id_ruta ";
        $select = $conexion->prepare($sql);
        $select->bindParam(":id_ruta", $doc);
        $select->execute();
        while($result = $select->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }
    public function cargarProducto($doc){
        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT * FROM producto WHERE id_producto = :id_producto ";
        $select = $conexion->prepare($sql);
        $select->bindParam(":id_producto", $doc);
        $select->execute();
        while($result = $select->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }
    public function cargarSolicitud($doc){
        $farray = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "SELECT * FROM solicitud WHERE id_solicitud = :id_solicitud ";
        $select = $conexion->prepare($sql);
        $select->bindParam(":id_solicitud", $doc);
        $select->execute();
        while($result = $select->fetch()){
            $farray[] = $result;
        }
        return $farray;
    }

   
    public function modificarUsuario($identificacion, $nombre, $apellido, $email,$telefono, $whatsapp, $cargo, $fecha_ingreso){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "UPDATE usuario SET identificacion = :identificacion, nombre = :nombre, apellido = :apellido, email = :email, telefono = :telefono, whatsapp = :whatsapp, cargo = :cargo, fecha_ingreso = :fecha_ingreso WHERE identificacion = :identificacion";

        $up = $conexion->prepare($sql);

        $up->bindParam(':identificacion', $identificacion);
        $up->bindParam(':nombre', $nombre);
        $up->bindParam(':apellido', $apellido);
        $up->bindParam(':email', $email);
        $up->bindParam(':telefono', $telefono);
        $up->bindParam(':whatsapp', $whatsapp);
        $up->bindParam(':cargo', $cargo);
        $up->bindParam(':fecha_ingreso', $fecha_ingreso);
        $up->bindParam(':estado', $estado);

        if(!$up){
            return "error al cargar recurso";

        }else{
            $up->execute();
            echo  "<script>alert('Usuario ACTUALIZADO con exito')</script>";
            echo '<script>location.href="../../views/admin/listaUsuarios.php"</script>';
         }
    }
    public function modificarCentro($id_centro, $nombre, $email, $telefono, $whatsapp, $departamento, $ciudad, $encargado, $lugar){
        
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "UPDATE centro SET id_centro = :id_centro, nombre = :nombre, email = :email, telefono = :telefono, whatsapp = :whatsapp, departamento = :departamento, ciudad = :ciudad, encargado = :encargado, lugar = :lugar WHERE id_centro = :id_centro ";

        $up = $conexion->prepare($sql);
        $up->bindParam(':id_centro', $id_centro);
        $up->bindParam(':nombre', $nombre);
        $up->bindParam(':email', $email);
        $up->bindParam(':telefono', $telefono);
        $up->bindParam(':whatsapp', $whatsapp);
        $up->bindParam(':departamento', $departamento);
        $up->bindParam(':ciudad', $ciudad);
        $up->bindParam(':encargado', $encargado);
        $up->bindParam(':lugar', $lugar);

        if(!$up){
            return "error al cargar recurso";

        }else{
            $up->execute();
            echo  "<script>alert('Centro Actualizado con exito')</script>";
            echo '<script>location.href="../../views/admin/listaCentros.php"</script>';
        }
    } 
    public function modificarVehiculo($placa, $capacidad, $seguro, $tecnomecanica, $tipo_vehiculo, $conductor, $costo_flete, $gps, $estado, $fecha_registro){
        
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "UPDATE vehiculo SET placa = :placa, capacidad = :capacidad, seguro = :seguro, tecnomecanica = :tecnomecanica, tipo_vehiculo = :tipo_vehiculo, conductor = :conductor, costo_flete = :costo_flete, gps = :gps, estado = :estado, fecha_registro = :fecha_registro WHERE placa = :placa ";

        $up = $conexion->prepare($sql);
        $up->bindParam(':placa', $placa);
        $up->bindParam(':capacidad', $capacidad);
        $up->bindParam(':seguro', $seguro);
        $up->bindParam(':tecnomecanica', $tecnomecanica);
        $up->bindParam(':tipo_vehiculo', $tipo_vehiculo);
        $up->bindParam(':conductor', $conductor);
        $up->bindParam(':costo_flete', $costo_flete);
        $up->bindParam(':gps', $gps);
        $up->bindParam(':estado', $estado);
        $up->bindParam(':fecha_registro', $fecha_registro);

        if(!$up){
            return "error al cargar recurso";

        }else{
            $up->execute();
            echo  "<script>alert('Vehiculo Actualizado con exito')</script>";
            echo '<script>location.href="../../views/admin/listaVehiculos.php"</script>';
        }
    } 
    public function modificarRuta($id_ruta, $destino, $fecha_ruta, $hora_salida, $hora_llegada, $descripcion, $tipo_ruta, $precinto, $identificacion, $placa, $id_centro){
        
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "UPDATE rutas SET id_ruta = :id_ruta, destino = :destino, fecha_ruta = :fecha_ruta, hora_salida = :hora_salida, hora_llegada = :hora_llegada, descripcion = :descripcion, tipo_ruta = :tipo_ruta, precinto = :precinto, identificacion = :identificacion, placa = :placa, id_centro = :id_centro WHERE id_ruta = :id_ruta ";

        $up = $conexion->prepare($sql);
        $up->bindParam(':id_ruta', $id_ruta);
        $up->bindParam(':destino', $destino);
        $up->bindParam(':fecha_ruta', $fecha_ruta);
        $up->bindParam(':hora_salida', $hora_salida);
        $up->bindParam(':hora_llegada', $hora_llegada);
        $up->bindParam(':descripcion', $descripcion);
        $up->bindParam(':tipo_ruta', $tipo_ruta);
        $up->bindParam(':precinto', $precinto);
        $up->bindParam(':identificacion', $identificacion);
        $up->bindParam(':placa', $placa);
        $up->bindParam(':id_centro', $id_centro);

        if(!$up){
            return "error al cargar recurso";

        }else{
            $up->execute();
            echo  "<script>alert('Ruta Actualizada con exito')</script>";
            echo '<script>location.href="../../views/admin/listaRutas.php"</script>';
        }
    } 
    public function modificarProducto($id_producto, $nombre, $peso, $costo){
        
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "UPDATE producto SET id_producto = :id_producto, nombre = :nombre, peso = :peso, costo = :costo WHERE id_producto = :id_producto ";

        $up = $conexion->prepare($sql);
        $up->bindParam(':id_producto', $id_producto);
        $up->bindParam(':nombre', $nombre);
        $up->bindParam(':peso', $peso);
        $up->bindParam(':costo', $costo);

        if(!$up){
            return "error al cargar recurso";

        }else{
            $up->execute();
            echo  "<script>alert('Producto Actualizada con exito')</script>";
            echo '<script>location.href="../../views/admin/listaProductos.php"</script>';
        }
    } 
    public function modificarSolicitud($id_solicitud, $solicitud, $descripcion, $cantidad_kilos){
        
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "UPDATE solicitud SET id_solicitud = :id_solicitud, solicitud = :solicitud, descripcion = :descripcion, cantidad_kilos = :cantidad_kilos WHERE id_solicitud = :id_solicitud ";

        $up = $conexion->prepare($sql);
        $up->bindParam(':id_solicitud', $id_solicitud);
        $up->bindParam(':solicitud', $solicitud);
        $up->bindParam(':descripcion', $descripcion);
        $up->bindParam(':cantidad_kilos', $cantidad_kilos);

        if(!$up){
            return "error al cargar recurso";

        }else{
            $up->execute();
            echo  "<script>alert('Solicitud Actualizada con exito')</script>";
            echo '<script>location.href="../../views/admin/listaSolicitud.php"</script>';
        }
    } 

  public function eliminarUsuario($idEliminar){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "DELETE FROM usuario WHERE identificacion = :identficacion";
        $delete = $conexion->prepare($sql);
        $delete->bindParam(':identficacion', $idEliminar);

        if(!$delete){
            echo  "<script>alert('ERROR AL ELIMINAR')</script>";
            echo '<script>location.href="../../views/admin/listaUsuarios.php"</script>';
        }else{
            $delete->execute();
            echo  "<script>alert('Usuario ELIMINADO con exito')</script>";
            echo '<script>location.href="../../views/admin/listaUsuarios.php"</script>';
        }
     }


  public function eliminarCentros($idEliminar){
    $modelo = new Conexion();
    $conexion = $modelo->get_conexion();
    $sql = "DELETE FROM centro WHERE id_centro = :id_centro";
    $delete = $conexion->prepare($sql);
    $delete->bindParam(':id_centro', $idEliminar);

    if(!$delete){
        echo  "<script>alert('ERROR AL ELIMINAR')</script>";
        echo '<script>location.href="../../views/admin/listaCentros.php"</script>';
    }else{
        $delete->execute();
        echo  "<script>alert('Centro ELIMINADO con exito')</script>";
        echo '<script>location.href="../../views/admin/listaCentros.php"</script>';
        }
    }

    public function eliminarRutas($idEliminar){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "DELETE FROM rutas WHERE id_ruta = :id_ruta";
        $delete = $conexion->prepare($sql);
        $delete->bindParam(':id_ruta', $idEliminar);
    
        if(!$delete){
            echo  "<script>alert('ERROR AL ELIMINAR')</script>";
            echo '<script>location.href="../../views/admin/listaRutas.php"</script>';
        }else{
            $delete->execute();
            echo  "<script>alert('Ruta ELIMINADA con exito')</script>";
            echo '<script>location.href="../../views/admin/listaRutas.php"</script>';
            }
        }
        public function eliminarProductos($idEliminar){
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "DELETE FROM producto WHERE id_producto = :id_producto";
            $delete = $conexion->prepare($sql);
            $delete->bindParam(':id_producto', $idEliminar);
        
            if(!$delete){
                echo  "<script>alert('ERROR AL ELIMINAR')</script>";
                echo '<script>location.href="../../views/admin/listaProductos.php"</script>';
            }else{
                $delete->execute();
                echo  "<script>alert('Producto ELIMINADO con exito')</script>";
                echo '<script>location.href="../../views/admin/listaProductos.php"</script>';
                }
        }

        public function eliminarSolicitudes($idEliminar){
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "DELETE FROM solicitud WHERE id_solicitud = :id_solicitud";
            $delete = $conexion->prepare($sql);
            $delete->bindParam(':id_solicitud', $idEliminar);
        
            if(!$delete){
                echo  "<script>alert('ERROR AL ELIMINAR')</script>";
                echo '<script>location.href="../../views/admin/listaSolicitud.php"</script>';
            }else{
                $delete->execute();
                echo  "<script>alert('Solicitud ELIMINADA con exito')</script>";
                echo '<script>location.href="../../views/admin/listaSolicitud.php"</script>';
                }
        }


    
  public function verPerfil($email){
    $result = null;
    $modelo = new Conexion();
    $conexion = $modelo->get_conexion();

    $sql = "SELECT * FROM usuario WHERE email = :email";
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