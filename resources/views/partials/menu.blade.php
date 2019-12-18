<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user-lock nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('sandelio_valdyma_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-warehouse nav-icon">

                        </i>
                        {{ trans('cruds.sandelioValdyma.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('new_product_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.new-products.index") }}" class="nav-link {{ request()->is('admin/new-products') || request()->is('admin/new-products/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-plus nav-icon">

                                    </i>
                                    {{ trans('cruds.newProduct.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('add_stock_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.add-stocks.index") }}" class="nav-link {{ request()->is('admin/add-stocks') || request()->is('admin/add-stocks/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-cart-plus nav-icon">

                                    </i>
                                    {{ trans('cruds.addStock.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('pardavimai_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-luggage-cart nav-icon">

                        </i>
                        {{ trans('cruds.pardavimai.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('sale_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.sales.index") }}" class="nav-link {{ request()->is('admin/sales') || request()->is('admin/sales/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-shopping-cart nav-icon">

                                    </i>
                                    {{ trans('cruds.sale.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('saskaitos_fakturo_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-file-invoice-dollar nav-icon">

                        </i>
                        {{ trans('cruds.saskaitosFakturo.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('inv_status_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.inv-statuses.index") }}" class="nav-link {{ request()->is('admin/inv-statuses') || request()->is('admin/inv-statuses/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-align-center nav-icon">

                                    </i>
                                    {{ trans('cruds.invStatus.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('komerciniai_pasiulymai_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-address-card nav-icon">

                        </i>
                        {{ trans('cruds.komerciniaiPasiulymai.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('offer_status_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.offer-statuses.index") }}" class="nav-link {{ request()->is('admin/offer-statuses') || request()->is('admin/offer-statuses/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-bars nav-icon">

                                    </i>
                                    {{ trans('cruds.offerStatus.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('clients_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-ambulance nav-icon">

                        </i>
                        {{ trans('cruds.clientsManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('supplier_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.suppliers.index") }}" class="nav-link {{ request()->is('admin/suppliers') || request()->is('admin/suppliers/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user-tie nav-icon">

                                    </i>
                                    {{ trans('cruds.supplier.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('workers_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-user-cog nav-icon">

                        </i>
                        {{ trans('cruds.workersManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('worker_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.workers.index") }}" class="nav-link {{ request()->is('admin/workers') || request()->is('admin/workers/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user-check nav-icon">

                                    </i>
                                    {{ trans('cruds.worker.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('config_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.config.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('city_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.cities.index") }}" class="nav-link {{ request()->is('admin/cities') || request()->is('admin/cities/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-globe-africa nav-icon">

                                    </i>
                                    {{ trans('cruds.city.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('system_setting_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.system-settings.index") }}" class="nav-link {{ request()->is('admin/system-settings') || request()->is('admin/system-settings/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-wrench nav-icon">

                                    </i>
                                    {{ trans('cruds.systemSetting.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>