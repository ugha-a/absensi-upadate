@extends('template-admin.layout')
@section('title', 'Tambah Data lokal')


@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data Kelas</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" method="POST" action="{{ route('lokal.update', $lokal->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                {{-- Angkatan --}}
                                <div class="col-12">
                                    <label for="angkatan">Angkatan</label>
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <select id="angkatan" class="form-control" name="nama" required>
                                                <option value="" disabled>Pilih Angkatan</option>
                                                @foreach (['X', 'XI', 'XII', 'XIII'] as $angkatan)
                                                    <option value="{{ $angkatan }}"
                                                        {{ old('nama', explode(' ', $lokal->nama)[0]) == $angkatan ? 'selected' : '' }}>
                                                        {{ $angkatan }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="form-control-icon">
                                                <i class="bi bi-list"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Jurusan --}}
                                <div class="col-12">
                                    <label for="jurusan_id">Jurusan</label>
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <select id="jurusan_id" class="form-control" name="jurusan_id" required>
                                                <option value="" disabled>Pilih jurusan</option>
                                                @foreach ($jurusan as $j)
                                                    <option value="{{ $j->id }}"
                                                        {{ old('jurusan_id', $lokal->jurusan_id) == $j->id ? 'selected' : '' }}>
                                                        {{ $j->kode_jurusan }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="form-control-icon">
                                                <i class="bi bi-list"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Guru --}}
                                <div class="col-12">
                                    <label for="guru_id">Guru</label>
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <select id="guru_id" class="form-control" name="guru_id" required>
                                                <option value="" disabled>Pilih Guru</option>
                                                @foreach ($guru as $g)
                                                    <option value="{{ $g->id }}"
                                                        {{ old('guru_id', $lokal->guru_id) == $g->id ? 'selected' : '' }}>
                                                        {{ $g->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="form-control-icon">
                                                <i class="bi bi-list"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Tombol --}}
                                <div class="col-12 d-flex justify-content-end">
                                    <a href="{{ route('lokal.index') }}" class="btn btn-primary me-1 mb-1">
                                        <i class="bi bi-arrow-left"></i> Kembali
                                    </a>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                        <i class="bi bi-arrow-clockwise"></i> Reset
                                    </button>
                                    <button type="submit" class="btn btn-success me-1 mb-1">
                                        <i class="fa fa-save"></i> Update
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
