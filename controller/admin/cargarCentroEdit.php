<?php
    function cargarCentroEditar(){
    
        if(isset($_GET['id_centro'])){
            $consulta = new Consulta();
            $id_centro = $_GET['id_centro'];
            $result = $consulta->cargarCentro($id_centro);
            foreach($result as $farray){
                echo '
                <form action="../../controller/admin/modificarCentro.php" id="loginForm" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Id Centro</label>
                                <input type="number" name="id_centro" value="'.$farray['id_centro'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Nombre</label>
                                <input type="text" name="nombre" value="'.$farray['nombre'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Email</label>
                                <input type="email" name="email" value="'.$farray['email'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Telefono</label>
                                <input type="number" name="telefono" value="'.$farray['telefono'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Whatsapp</label>
                                <input type="number" name="whatsapp" value="'.$farray['whatsapp'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Departamento</label>
                                <input type="text" name="departamento" value="'.$farray['departamento'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ciudad</label>
                                <input type="text" name="ciudad" value="'.$farray['ciudad'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Encargado</label>
                                <input type="text" name="encargado" value="'.$farray['encargado'].'" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Lugar</label>
                                <input type="text" name="lugar" value="'.$farray['lugar'].'" class="form-control" required>
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