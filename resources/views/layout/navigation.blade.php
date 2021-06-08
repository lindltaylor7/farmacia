<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Farmacia Excelentemente</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Páginas
            </li>

            <li class="sidebar-item {{ request()->routeIs('inicio.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('inicio.index') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Inicio</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('principal.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('principal.index') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Principal</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('admin.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.index') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Medicamentos</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('stock.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('stock.index') }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Stocks</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('ventas.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('ventas.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Ventas</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('reportes.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('reportes.index') }}">
                    <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Reportes</span>
                </a>
            </li>

            <li class="sidebar-item ">
                <a class="sidebar-link" href="pages-invoice.html">
                    <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Invoice</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Auth</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-sign-in.html">Sign In</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-sign-up.html">Sign Up</a></li>
                </ul>
            </li>



        </ul>

    </div>
</nav>
