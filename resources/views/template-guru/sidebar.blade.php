<style>
    .sidebar-link.active {
        background-color: rgba(0, 123, 255, 0.1);
        border-radius: 0.375rem;
    }

    .sidebar-link.active i,
    .sidebar-link.active span {
        color: #007bff !important;
    }

    .sidebar-link:hover i,
    .sidebar-link:hover span {
        color: #007bff;
    }

    .sidebar-link, .sidebar-link i, .sidebar-link span {
        transition: all 0.2s ease-in-out;
    }
</style>

<ul class="menu">
    <li class="sidebar-title">Menu</li>

    <li class="sidebar-item">
        <a href="{{ route('dashboard-guru') }}"
           class="sidebar-link {{ $menu == 'dashboard-guru' ? 'active' : '' }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a href="{{ route('absen.index') }}"
           class="sidebar-link {{ $menu == 'absen' ? 'active' : '' }}">
            <i class="bi bi-calendar-check"></i>
            <span>Absensi</span>
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
