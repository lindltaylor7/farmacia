<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
  <span class="align-middle">Farmacia</span>
</a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Páginas
            </li>

            <li class="sidebar-item {{request()->routeIs('inicio.*')? 'active' : ''}}">
                <a class="sidebar-link" href="{{route('inicio.index')}}">
      <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Inicio</span>
    </a>
            </li>

            <li class="sidebar-item {{request()->routeIs('principal.*')? 'active' : ''}}">
                <a class="sidebar-link" href="{{route('principal.index')}}">
      <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Principal</span>
    </a>
            </li>

            <li class="sidebar-item {{request()->routeIs('admin.*')? 'active' : ''}}">
                <a class="sidebar-link" href="{{route('admin.index')}}">
      <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Medicamentos</span>
    </a>
            </li>

            <li class="sidebar-item {{request()->routeIs('ventas.*')? 'active' : ''}}">
                <a class="sidebar-link" href="{{route('ventas.index')}}">
      <i class="align-middle" data-feather="user"></i> <span class="align-middle">Ventas</span>
    </a>
            </li>

            <li class="sidebar-item {{request()->routeIs('reportes.*')? 'active' : ''}}">
                <a class="sidebar-link" href="{{route('reportes.index')}}">
      <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Reportes</span>
    </a>
            </li>

            <li class="sidebar-item ">
                <a class="sidebar-link" href="pages-invoice.html">
      <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Invoice</span>
    </a>
            </li>

            <li class="sidebar-item {{request()->routeIs('stock.*')? 'active' : ''}}">
                <a class="sidebar-link" href="{{route('stock.index')}}">
      <i class="align-middle" data-feather="book"></i> <span class="align-middle">Stocks</span>
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

            <li class="sidebar-header">
                Tools & Components
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
      <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">UI Elements</span>
    </a>
                <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">Alerts</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Buttons</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-cards.html">Cards</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-general.html">General</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-grid.html">Grid</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-typography.html">Typography</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="icons-feather.html">
      <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
    </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="forms-basic-inputs.html">
      <i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Forms</span>
    </a>
            </li>

            <li class="sidebar-header">
                Plugins & Addons
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="charts-chartjs.html">
      <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
    </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="maps-google.html">
      <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
    </a>
            </li>
        </ul>

        <div class="sidebar-cta">
            <div class="sidebar-cta-content">
                <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
                <div class="mb-3 text-sm">
                    Are you looking for more components? Check out our premium version.
                </div>
                <div class="d-grid">
                    <a href="https://adminkit.io/pricing" target="_blank" class="btn btn-primary">Upgrade to Pro</a>
                </div>
            </div>
        </div>
    </div>
</nav>
