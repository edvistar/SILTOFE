<?php
    function cargarProductoEditar(){
    
        if(isset($_GET['id_producto'])){
            $consulta = new Consulta();
            $id_producto = $_GET['id_producto'];
            $result = $consulta->cargarProducto($id_producto);
            foreach($result as $farray){
                echo '
                
                <form action="../../controller/admin/modificarProducto.php" id="loginForm" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-lg-12">
                        <label>Id Producto</label>
                        <input type="number" name="id_producto" value="'.$farray['id_producto'].'" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Nombre</label>
                        <input type="text" name="nombre" value="'.$farray['nombre'].'" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Peso</label>
                        <input type="number" name="peso" value="'.$farray['peso'].'" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Costo</label>
                        <input type="number" name="costo" value="'.$farray['costo'].'" class="form-control" required>
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