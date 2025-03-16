<div id="scrollbar">
    <div class="container-fluid">
        <div id="two-column-menu"></div>

        @php
        $current_url = Request::path();
        @endphp

        <ul class="navbar-nav" id="navbar-nav">
            <li class="nav-item">
                <a href="{{ url('admin/dashboard') }}" class="nav-link {{ $current_url == 'admin/dashboard' ? 'active' : '' }}">
                    <i data-feather="home"></i>Dashboard
                </a>
            </li>

            <li class="menu-title"><span data-key="t-menu">Category</span></li>
            <li class="nav-item">
                <a href="{{ url('admin/categories') }}" class="nav-link {{ $current_url == 'admin/categories' ? 'active' : '' }}">
                    <i data-feather="users"></i>Category<span class="badge badge-pill bg-success" data-key="t-hot">Done</span>
                </a>
            </li>
            <li class="menu-title"><span data-key="t-menu">Hafalan</span></li>
            <li class="nav-item">
                <a href="{{ url('admin/hafalans') }}" class="nav-link {{ $current_url == 'admin/hafalans' ? 'active' : '' }}">
                    <i data-feather="users"></i>Hafalan<span class="badge badge-pill bg-success" data-key="t-hot">Done</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/detail-hafalans') }}" class="nav-link {{ $current_url == 'admin/detail-hafalans' ? 'active' : '' }}">
                    <i data-feather="users"></i>Category Materi<span class="badge badge-pill bg-success" data-key="t-hot">Done</span>
                </a>
            </li>

            <li class="menu-title"><span data-key="t-menu">Grammar</span></li>

            <li class="nav-item">
                <a href="{{ url('admin/grammars') }}" class="nav-link {{ $current_url == 'admin/grammars' ? 'active' : '' }}">
                    <i data-feather="users"></i>Grammar<span class="badge badge-pill bg-success" data-key="t-hot">Done</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/detail-grammars') }}" class="nav-link {{ $current_url == 'admin/detail-grammars' ? 'active' : '' }}">
                    <i data-feather="users"></i>Category Materi<span class="badge badge-pill bg-success" data-key="t-hot">Done</span>
                </a>
            </li>

            <li class="menu-title"><span data-key="t-menu">Tenses</span></li>

            <li class="nav-item">
                <a href="{{ url('admin/tenses') }}" class="nav-link {{ $current_url == 'admin/tenses' ? 'active' : '' }}">
                    <i data-feather="users"></i>Tenses<span class="badge badge-pill bg-success" data-key="t-hot">Done</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/detail-tenses') }}" class="nav-link {{ $current_url == 'admin/detail-tenses' ? 'active' : '' }}">
                    <i data-feather="users"></i>Category Materi<span class="badge badge-pill bg-success" data-key="t-hot">Done</span>
                </a>
            </li>

            <li class="menu-title"><span data-key="t-menu">Kosakata</span></li>

            <li class="nav-item">
                <a href="{{ url('admin/kosakata') }}" class="nav-link {{ $current_url == 'admin/kosakata' ? 'active' : '' }}">
                    <i data-feather="users"></i>Kosakata<span class="badge badge-pill bg-danger" data-key="t-hot">Pending</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/detail-kosakata') }}" class="nav-link {{ $current_url == 'admin/detail-kosakata' ? 'active' : '' }}">
                    <i data-feather="users"></i>Category Materi<span class="badge badge-pill bg-danger" data-key="t-hot">Pending</span>
                </a>
            </li>

            <li class="menu-title"><span data-key="t-menu">Ujian</span></li>

            <li class="nav-item">
                <a href="{{ url('admin/ujian') }}" class="nav-link {{ $current_url == 'admin/ujian' ? 'active' : '' }}">
                    <i data-feather="users"></i>Ujian<span class="badge badge-pill bg-danger" data-key="t-hot">Pending</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/detail-ujian') }}" class="nav-link {{ $current_url == 'admin/detail-ujian' ? 'active' : '' }}">
                    <i data-feather="users"></i>Category Materi<span class="badge badge-pill bg-danger" data-key="t-hot">Pending</span>
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