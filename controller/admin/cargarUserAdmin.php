<?php
    function cargar(){
    
        if(isset($_GET['id_user'])){
            $consulta = new Consulta();
            $id_user = $_GET['id_user'];
            $result = $consulta->cargarUser($id_user);
            foreach($result as $farray){
                echo '
                <form action="../../controller/modificarCentro-admin.php" id="loginForm" method="POST">
                <div class="row">
                    <div class="form-group col-lg-12">
                        <label>Identificacion</label>
                        <input type="number" readonly name="identificacion" value="'.$farray['identificacion'].'" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Nombre</label>
                        <input type="text" name="nombre" value="'.$farray['nombre'].'" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Apellido</label>
                        <input type="text" name="apellido" value="'.$farray['apellido'].'" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Email</label>
                        <input type="email" name="email" value="'.$farray['email'].'" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Cargo</label>
                        
                    <select class="form-control select2" name="cargo" required>
                        <option value="'.$farray['cargo'].'">'.$farray['cargo'].'</option>
                        <option value="Coordinadora">Coordinadora</option>
                        <option value="supervisor">supervisor</option>
                        <option value="Bodeguero">Bodeguero</option>
                    </select>
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