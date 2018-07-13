<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="nav-icon icon-speedometer"></i> Dashboard
                </a>
            </li>
            <li class="nav-title">Menu</li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#" >
                    <i class="nav-icon icon-globe"></i> <font  size="2"> User Master </font> 
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">
                        <i class="nav-icon icon-people "></i> <font  size="2"> User </font> 
                    </a>
                    </li>
@role('Super-Admin')
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon icon-settings"></i> <font  size="2"> Access User </font>
                        </a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('role.index') }}">
                                <i class="nav-icon fa fa-key "></i> <font  size="2"> Role </font> 
                            </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('permision.index') }}">
                                <i class="nav-icon fa fa-key"></i> <font  size="2"> Permision </font>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('akses.indexf', ["user-role"]) }}">
                                <i class="nav-icon fa fa-key"></i> <font  size="2"> User Role </font>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('akses.indexf', ["user-permission"]) }}">
                                <i class="nav-icon fa fa-key"></i> <font  size="2"> User Permission </font>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('akses.indexf', ["role-permission"]) }}">
                                <i class="nav-icon fa fa-key"></i> <font  size="2"> Role Permission </font>
                                </a>
                            </li>
                        </ul>
                    </li>

@endrole
                </ul>
            </li>

        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>

{{-- menu --}}