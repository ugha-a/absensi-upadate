<ul class="menu">
    <li class="sidebar-title">Menu</li>

    <!-- <li class="nav-item">
        <a class="nav-link {{ $menu == 'dashboard' ? '' : 'collapsed' }}" href="{{ route('dashboard-siswa') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li> -->
    <li class="nav-item">
        <a class="nav-link {{ $menu == 'dashboard' ? '' : 'collapsed' }}" href="{{ route('rekap.index') }}">
            <i class="bi bi-grid"></i>
            <span>Rekap</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Route::is('jadwal.index') ? 'active' : 'collapsed' }}" href="{{ route('jadwal.index') }}">
            <i class="bi bi-grid"></i>
            <span>Jadwal Siswa</span>
        </a>
    </li>
    <li class="sidebar-item">
        <form action="{{ route('logout') }}" method="post" class="m-0">
            @csrf
            <button type="submit" class="dropdown-item text-white"
                style="background-color: #007bff; border-radius: 5px;">Logout</button>
        </form>
    </li>
</ul>
