<?php
require_once "../../model/conexion.php";
require_once "../../model/validarSesion.php";
require_once "../../model/consulta.php";
require_once "../../controller/admin/verPerfil.php";
require_once "../../model/seguridad.php";
?>
<div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="index.html"><img width="150px" height="100px" class="main-logo" src="../../img/logo/logo.png" alt="" /></a>
                    <strong><img src="../../img/logo/logosn.png" alt="" /></strong>
                </div>
                <!-- <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                            <li class="active">
                            
                              
                               
                                <a class="has-arrow" href="registrar-usuario-admin.php">
                                    <i class="fa fa-users"></i>
                                    <span class="mini-click-non">USUARIOS</span>
                                    </a>
                                <ul class="submenu-angle" aria-expanded="true">
                                    <li><a title="Dashboard v.1" href="registrar-usuario-admin.php"><i class="fa fa-edit" aria-hidden="true"></i> <span class="mini-sub-pro">REGISTRAR</span></a></li>
                                    <li><a title="Dashboard v.2" href="ver-usuarios-admin.php"><i class="fa fa-eye nav-icon" aria-hidden="true"></i> <span class="mini-sub-pro">VER</span></a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div> -->
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="index.php">
                                <i class="fa big-icon fa-home icon-wrap"></i>
                                <span class="mini-click-non">Administrador</span>
							</a>
                            <ul class="submenu-angle" aria-expanded="true">
                            <!-- //crud usuario -->
                                <li><a title="registro" href="registrarUsuario.php"><i class="fa fa-edit" aria-hidden="true"></i> <span class="mini-sub-pro">Registrar Usuario</span></a></li>
                                <li><a title="ver-usuarios" href="listaUsuarios.php"><i class="fa fa-eye nav-icon" aria-hidden="true"></i> <span class="mini-sub-pro">Lista Usuarios</span></a></li>
                                <!-- crud centro -->
                                <li><a title="registro" href="registrarCentros.php"><i class="fa fa-edit" aria-hidden="true"></i> <span class="mini-sub-pro">Registrar Centros</span></a></li>
                                <li><a title="ver-centros" href="listaCentros.php"><i class="fa fa-eye nav-icon" aria-hidden="true"></i> <span class="mini-sub-pro">Lista Centros</span></a></li>
                                <!-- crud vehiculo -->
                                <li><a title="registro" href="registrarVehiculos.php"><i class="fa fa-edit" aria-hidden="true"></i> <span class="mini-sub-pro">Registrar Vehiculo</span></a></li>
                                <li><a title="ver-usuarios" href="listaVehiculos.php"><i class="fa fa-eye nav-icon" aria-hidden="true"></i> <span class="mini-sub-pro">Lista Vehiculos</span></a></li>
                                <!-- crud producto -->
                                <li><a title="registro" href="registrarProducto.php"><i class="fa fa-edit" aria-hidden="true"></i> <span class="mini-sub-pro">Registrar Producto</span></a></li>
                                <li><a title="ver-usuarios" href="listaProductos.php"><i class="fa fa-eye nav-icon" aria-hidden="true"></i> <span class="mini-sub-pro">Lista Productos</span></a></li>
                                <!-- crud solicitud -->
                                <li><a title="registro" href="registrarSolicitud.php"><i class="fa fa-edit" aria-hidden="true"></i> <span class="mini-sub-pro">Registrar Solicitud</span></a></li>
                                <li><a title="ver-usuarios" href="listaSolicitud.php"><i class="fa fa-eye nav-icon" aria-hidden="true"></i> <span class="mini-sub-pro">Lista Solicitudes</span></a></li>
                                <!-- crud rutas -->
                                <li><a title="registro" href="registrarRutas.php"><i class="fa fa-edit" aria-hidden="true"></i> <span class="mini-sub-pro">Registrar Rutas</span></a></li>
                                <li><a title="ver-usuarios" href="listaRutas.php"><i class="fa fa-eye nav-icon" aria-hidden="true"></i> <span class="mini-sub-pro">Lista Rutas</span></a></li>
                            </ul>
                        <li><a title="Landing Page" href="" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Landing Page</span></a></li>
                    </ul>
                </nav>
            </div>
            </nav>
        </div>