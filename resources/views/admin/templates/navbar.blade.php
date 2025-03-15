<div id="scrollbar">
    <div class="container-fluid">
        <div id="two-column-menu"></div>

        @php
        $current_url = Request::path();
        @endphp

        <ul class="navbar-nav" id="navbar-nav">
            <li class="nav-item">
                <a href="{{ url('docs') }}" class="nav-link {{ $current_url == 'docs' ? 'active' : '' }}">
                    <i data-feather="home"></i>Dashboard
                </a>
            </li>

            <li class="menu-title"><span data-key="t-menu">Category</span></li>
            <li class="nav-item">
                <a href="{{ url('admin/categories') }}" class="nav-link {{ $current_url == 'admin/categories' ? 'active' : '' }}">
                    <i data-feather="users"></i>Category
                </a>
            </li>
            <li class="menu-title"><span data-key="t-menu">Hafalan</span></li>
            <li class="nav-item">
                <a href="{{ url('admin/hafalans') }}" class="nav-link {{ $current_url == 'admin/hafalans' ? 'active' : '' }}">
                    <i data-feather="users"></i>Hafalan
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/detail-hafalans') }}" class="nav-link {{ $current_url == 'admin/detail-hafalans' ? 'active' : '' }}">
                    <i data-feather="users"></i>Materi
                </a>
            </li>

            <li class="menu-title"><span data-key="t-menu">Grammar</span></li>

            <li class="nav-item">
                <a href="{{ url('admin/grammars') }}" class="nav-link {{ $current_url == 'admin/grammars' ? 'active' : '' }}">
                    <i data-feather="users"></i>Grammar
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/detail-grammars') }}" class="nav-link {{ $current_url == 'admin/detail-grammars' ? 'active' : '' }}">
                    <i data-feather="users"></i>Materi
                </a>
            </li>


            <li class="menu-title"><span data-key="t-menu">Menu Settings</span></li>
            <li class="nav-item">
                <a href="{{ url('admin/kontak') }}" class="nav-link {{ $current_url == 'admin/kontak' ? 'active' : '' }}">
                    <i data-feather="settings"></i>Kontak Masuk
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/settingweb') }}" class="nav-link {{ $current_url == 'admin/settingweb' ? 'active' : '' }}">
                    <i data-feather="settings"></i>Setting Website
                </a>
            </li>
        </ul>
    </div>
    <!-- Sidebar -->
</div>