<?php

function perfil(){

    $email = $_SESSION['email'];
    $consulta = new Consulta();
    $result = $consulta->verPerfil($email);

    foreach($result as $farray){
        echo '
        <div class="perfil">
        <div class="imagen">
            <img src="'.$farray['foto'].'" class="fotoperfil" alt="foto">
        </div>
        <div class="info">
            <a href="">'.$farray['nombre'].'</a>
        </div>
        <div class="cargo">
            <a href="">'.$farray['cargo'].'</a>
        </div>
        </div>
                       
        ';   
     }
}

?>