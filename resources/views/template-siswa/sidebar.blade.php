<!-- Tambahkan ini di bagian <style> atau file CSS -->
<style>
    .nav-link.active {
        background-color: rgba(0, 123, 255, 0.1); /* biru muda transparan */
        border-radius: 0.375rem; /* border radius untuk nav item */
    }

    .nav-link.active i,
    .nav-link.active span {
        color: #007bff !important; /* warna biru Bootstrap */
    }

    .nav-link:hover i,
    .nav-link:hover span {
        color: #007bff;
    }
</style>

<ul class="menu list-unstyled">
    <li class="sidebar-title">Menu</li>

    <li class="nav-item">
        <a class="nav-link {{ Route::is('rekap.index') ? 'active' : 'collapsed' }}" href="{{ route('rekap.index') }}">
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
