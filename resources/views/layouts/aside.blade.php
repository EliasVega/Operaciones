<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('product') }}" class="brand-link elevation-4">
        <span class="logo-mini"><strong class="titulo-show">E</strong></span>
        <span class="brand-text font-weight-light"><strong>mdisoft</strong> </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                @if (!Session::has('company'))
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Empresa
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('company') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Empresas</p>
                            </a>
                        </li>
                        @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                        <li class="nav-item">
                            <a href="{{ url('user') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('category') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categorias</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('operation') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Operacion Procesos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('remission') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ordenes Produccion</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('partial') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Entregas Parciales</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('operating') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Produccion Operadores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('operatingPartial') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Entregas  detalle</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('payment') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pagos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('advance') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Avances</p>
                            </a>
                        </li>
                        @endif

                    </ul>
                </li>
                @if (Auth::user()->role_id == 1)
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Administracion
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('department') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Departamentos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('municipality') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Municipios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('role') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('document') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>T/Documentos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @endif
                @if (!Session::has('company') && !Session::has('remission'))
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Entidades
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                        <li class="nav-item">
                            <a href="{{ url('category') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categorias</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('user') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif
                @if (!Session::has('company') && !Session::has('remission'))
                @if (Auth::user()->role_id == 3)
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Supervision
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('category') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categorias</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('remission') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Orden Produccion</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('partial') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Entregas Parciales</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if (Auth::user()->role_id == 4)
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Operadores
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('payment') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pagos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('remission') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ordenes Produccion</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('partial') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Entregas</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
