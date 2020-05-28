<?php
    function cargarSolicitudEditar(){
    
        if(isset($_GET['id_solicitud'])){
            $consulta = new Consulta();
            $id_solicitud = $_GET['id_solicitud'];
            $result = $consulta->cargarSolicitud($id_solicitud);
            foreach($result as $farray){
                echo '
                
                <form action="../../controller/admin/modificarSolicitud.php" id="loginForm" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Id Solicitud</label>
                                <input type="number" name="id_solicitud" value="'.$farray['id_solicitud'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Solicitud</label>
                                <input type="date" name="solicitud" value="'.$farray['solicitud'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Descripcion</label>
                                <input type="text" name="descripcion" value="'.$farray['descripcion'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Cantidad de Kilos</label>
                                <input type="number" name="cantidad_kilos" value="'.$farray['cantidad_kilos'].'" class="form-control" required>
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