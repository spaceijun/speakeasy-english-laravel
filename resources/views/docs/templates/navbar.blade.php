<div id="scrollbar">
    <div class="container-fluid">
        <div id="two-column-menu"></div>

        @php
        $current_url = Request::path();
        @endphp

        <ul class="navbar-nav" id="navbar-nav">
            <li class="nav-item">
                <a href="{{ url('docs') }}" class="nav-link {{ $current_url == 'docs' ? 'active' : '' }}">
                    <i data-feather="home"></i>Overview
                </a>
            </li>

            <li class="menu-title"><span data-key="t-menu">Endpoint</span></li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarCategory" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCategory">
                    <i class="ri-share-line"></i> <span data-key="t-multi-level">Category</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarCategory">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ url('docs/category') }}" class="nav-link {{ $current_url == 'docs/category' ? 'active' : '' }}">
                                </i>Data Category<span class="badge badge-pill bg-success" data-key="t-hot">GET</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarHafalan" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarHafalan">
                    <i class="ri-customer-service-fill"></i> <span data-key="t-multi-level">Hafalan</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarHafalan">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ url('docs/hafalan') }}" class="nav-link {{ $current_url == 'docs/hafalan' ? 'active' : '' }}">
                                </i>Data Hafalan<span class="badge badge-pill bg-success" data-key="t-hot">GET</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarGrammar" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarGrammar">
                    <i class="ri-calendar-todo-line"></i> <span data-key="t-multi-level">Grammar</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarGrammar">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ url('docs/grammar') }}" class="nav-link {{ $current_url == 'docs/grammar' ? 'active' : '' }}">
                                </i>Data Grammar<span class="badge badge-pill bg-success" data-key="t-hot">GET</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
    <!-- Sidebar -->
</div>