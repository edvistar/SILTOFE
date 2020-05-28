<?php
    function cargarRutaEditar(){
    
        if(isset($_GET['id_ruta'])){
            $consulta = new Consulta();
            $id_ruta = $_GET['id_ruta'];
            $result = $consulta->cargarRuta($id_ruta);
            foreach($result as $farray){
                echo '
                <form action="../../controller/admin/modificarRuta.php" id="loginForm" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Id Ruta</label>
                                <input type="number" name="id_ruta" value="'.$farray['id_ruta'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Destino</label>
                                <input type="text" name="destino" value="'.$farray['destino'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Fecha de Ruta</label>
                                <input type="date" name="fecha_ruta" value="'.$farray['fecha_ruta'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Hora de Salida</label>
                                <input type="date" name="hora_salida" value="'.$farray['hora_salida'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Hora de Llegada</label>
                                <input type="date" name="hora_llegada" value="'.$farray['hora_llegada'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Descripcion</label>
                                <input type="text" name="descripcion" value="'.$farray['descripcion'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Tipo de Ruta</label>
                                <input type="text" name="tipo_ruta" value="'.$farray['tipo_ruta'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Precinto</label>
                                <input type="number" name="precinto" value="'.$farray['precinto'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Identificacion</label>
                                <input type="text" name="identificacion" value="'.$farray['identificacion'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Placa</label>
                                <input type="text" name="placa" value="'.$farray['placa'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Id Centro</label>
                                <input type="number" name="id_centro" value="'.$farray['id_centro'].'" class="form-control" required>
                            </div>
                            
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success loginbtn">Actualizar</button>
                            <button class="btn btn-default">Cancel</button>
                        </div>
                    </form>
                ';      
                
            }
           
            
        }
    }
    


?>