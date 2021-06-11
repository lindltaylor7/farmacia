<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('inicio.index') }}">
            <span class="align-middle">Botica Excelentemente</span>
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

            <li class="sidebar-item {{ request()->routeIs('medicamentos.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('medicamentos.index') }}">
                    <i class="align-middle" data-feather="box"></i> <span class="align-middle">Medicamentos</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('stock.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('stock.index') }}">
                    <i class="align-middle" data-feather="bar-chart"></i> <span class="align-middle">Stocks</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('ventas.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('ventas.index') }}">
                    <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Ventas</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('reportes.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('reportes.index') }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Reportes</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('principal.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('principal.index') }}">
                    <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Principal</span>
                </a>
            </li>

        </ul>

    </div>
</nav>
