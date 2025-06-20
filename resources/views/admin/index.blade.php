@extends('template-admin.layout')

@section('title', 'Dashboard Admin')

@section('header-content')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <section class="section dashboard d-flex justify-content-center">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">

                {{-- Siswa --}}
                <div class="col">
                    <div class="card info-card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">Siswa</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon bg-primary">
                                    <i class="bi bi-person-badge"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $jumlahSiswa }}</h6>
                                    <span class="text-muted small pt-2 ps-1">Total siswa yang terdaftar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Guru --}}
                <div class="col">
                    <div class="card info-card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">Guru</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon bg-success">
                                    <i class="bi bi-person-lines-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $jumlahGuru }}</h6>
                                    <span class="text-muted small pt-2 ps-1">Total Guru yang terdaftar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Kelas --}}
                <div class="col">
                    <div class="card info-card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">Kelas</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon bg-warning">
                                    <i class="bi bi-door-open"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $jumlahLokal }}</h6>
                                    <span class="text-muted small pt-2 ps-1">Total Kelas yang tersedia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Jurusan --}}
                <div class="col">
                    <div class="card info-card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">Jurusan</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon bg-danger">
                                    <i class="bi bi-diagram-3"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $jumlahJurusan }}</h6>
                                    <span class="text-muted small pt-2 ps-1">Total jurusan yang tersedia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Guru Mengajar --}}
                <div class="col">
                    <div class="card info-card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">Guru Mengajar</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon bg-info">
                                    <i class="bi bi-briefcase-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $jumlahMengajar }}</h6>
                                    <span class="text-muted small pt-2 ps-1">Total Guru Yang Mengajar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Absen Siswa --}}
                <div class="col">
                    <div class="card info-card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">Absen Siswa</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon bg-purple">
                                    <i class="bi bi-clipboard-check"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $jumlahAbsen }}</h6>
                                    <span class="text-muted small pt-2 ps-1">Total Absen yang terabsen</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
