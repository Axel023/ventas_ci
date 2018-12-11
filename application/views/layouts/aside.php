
        <aside class="main-sidebar">
            <section class="sidebar">      
                <!-- Barra lateral de navegacion -->
                <ul class="sidebar-menu" data-widget="tree">
                    <!--<li class="header"><b>Menu de navegacion</b></li>-->
                   
                    <li>
                        <a href="../widgets.html">
                            <i class="fa fa-home"></i> <span>Inicio</span>
                        </a>
                    </li>

                    <!--Ingreso ABM Categoria, Clientes, Productos-->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-cogs"></i> <span>Cargas</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>

                        <!--Redireccion controladores-->
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url();?>mantenimiento/categorias"><i class="fa fa-circle-o"></i> Categorias</a></li>
                            <li><a href="<?php echo base_url();?>mantenimiento/clientes"><i class="fa fa-circle-o"></i> Clientes</a></li>
                            <li><a href="<?php echo base_url(); ?>mantenimiento/productos"><i class="fa fa-circle-o"></i> Productos</a></li>
                        </ul>
                        <!--FIN Redireccion controladores-->
                    
                    </li>
                    <!--FIN Ingreso ABM Categorias, Clientes, Productos-->

                    <!-- Ingreso ABM Ventas --><!--Problema con carga de tipo comprobante BDD..#Estatico funcional-->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-share-alt"></i> <span>Movimientos</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url();?>movimientos/ventas"><i class="fa fa-circle-o"></i> Ventas </a></li>
                        </ul>
                    </li>
                    <!--FIN Ingreso ABM Ventas-->

                    <!--Reportes sin comenzar-->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-print"></i> <span>Reportes</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Categorias</a></li>
                            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Clientes</a></li>
                            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Productos</a></li>
                            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Ventas</a></li>
                        </ul>
                    </li>

                    <!--FIN Reportes sin comenzar-->

                    <!--Parte Administrar Usuarios y Documentos #Solo superadmin-->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user-circle-o"></i> <span>Administrador</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Tipo Documentos</a></li>
                            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                        </ul>
                    </li>
                </ul>
                <!--FIN Administrar Usuarios y Documentos-->
            </section>
            <!--FIN Barra Lateral Navegacion-->
        </aside>