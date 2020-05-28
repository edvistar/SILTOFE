<?php
    function cargarVehiculoEditar(){
    
        if(isset($_GET['placa'])){
            $consulta = new Consulta();
            $placa = $_GET['placa'];
            $result = $consulta->cargarVehiculo($placa);
            foreach($result as $farray){
                echo '
                <form action="../../controller/admin/modificarVehiculo.php" id="loginForm" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Placa</label>
                                <input type="text" name="placa" value="'.$farray['placa'].'" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Capacidad</label>
                                <input type="text" name="capacidad" value="'.$farray['capacidad'].'" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Seguro</label>
                                <input type="date" name="seguro" value="'.$farray['seguro'].'" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Tecnomecanica</label>
                                <input type="date" name="tecnomecanica" value="'.$farray['tecnomecanica'].'" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Tipo de Vehiculo</label>
                                <input type="text" name="tipo_vehiculo" value="'.$farray['tipo_vehiculo'].'" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Conductor</label>
                                <input type="text" name="conductor" value="'.$farray['conductor'].'" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Costo flete</label>
                                <input type="number" name="costo_flete" value="'.$farray['costo_flete'].'" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>GPS</label>
                                <input type="text" name="gps" value="'.$farray['gps'].'" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Estado</label>
                                <input type="text" name="estado" value="'.$farray['estado'].'" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Fecha de Registro</label>
                                <input type="date" name="fecha_registro" value="'.$farray['fecha_registro'].'" class="form-control" >
                            </div>
                            
                            
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success loginbtn">ACTUALIZAR</button>
                            <button class="btn btn-default">Cancel</button>
                        </div>
                    </form>
                ';      
                
            }
           
            
        }
    }
    


?>