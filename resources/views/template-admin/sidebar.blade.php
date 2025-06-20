<style>
    .nav-link.active {
        background-color: rgba(0, 123, 255, 0.1); /* biru muda transparan */
        border-radius: 0.375rem; /* sudut membulat */
    }

    .nav-link.active i,
    .nav-link.active span {
        color: #007bff !important; /* biru untuk icon dan teks */
    }

    .nav-link:hover i,
    .nav-link:hover span {
        color: #007bff;
    }

    .nav-link, .nav-link i, .nav-link span {
        transition: all 0.2s ease-in-out;
    }
</style>
<ul class="menu list-unstyled">
    <li class="sidebar-title">Menu</li>

    <li class="nav-item">
        <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Route::is('siswa.index') ? 'active' : '' }}" href="{{ route('siswa.index') }}">
            <i class="bi bi-person"></i>
            <span>Siswa</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Route::is('guru.index') ? 'active' : '' }}" href="{{ route('guru.index') }}">
            <i class="bi bi-person-badge"></i>
            <span>Guru</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Route::is('jurusan.index') ? 'active' : '' }}" href="{{ route('jurusan.index') }}">
            <i class="bi bi-book"></i>
            <span>Jurusan</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Route::is('lokal.index') ? 'active' : '' }}" href="{{ route('lokal.index') }}">
            <i class="bi bi-building"></i>
            <span>Kelas</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Route::is('user.index') ? 'active' : '' }}" href="{{ route('user.index') }}">
            <i class="bi bi-people"></i>
            <span>User</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Route::is('mapel.index') ? 'active' : '' }}" href="{{ route('mapel.index') }}">
            <i class="bi bi-journal-bookmark"></i>
            <span>Mapel</span>
        </a>
    </li>

    <li class="nav-item">
        <form action="{{ route('logout') }}" method="post" class="m-0">
            @csrf
            <button type="submit" class="dropdown-item text-white"
                style="background-color: #007bff; border-radius: 5px;">Logout</button>
        </form>
    </li>
</ul>
