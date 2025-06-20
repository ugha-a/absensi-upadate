@extends('template-admin.layout')
@section('title', 'Edit Data User')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Data User</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" method="POST" action="{{ route('user.update', $user->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <label for="email">Email</label>
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="email" id="email" class="form-control" name="email"
                                                value="{{ old('email', $user->email) }}" placeholder="Masukkan Email"
                                                required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="username">Username</label>
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" id="username" class="form-control" name="username"
                                                value="{{ old('username', $user->username) }}"
                                                placeholder="Masukkan Username" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="password">Password (kosongkan jika tidak ingin mengubah)</label>
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="password" id="password" class="form-control" name="password"
                                                placeholder="Masukkan password baru (opsional)">
                                            <div class="form-control-icon">
                                                <i class="bi bi-lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="level">Level</label>
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <select id="level" class="form-control" name="level" required>
                                                <option value="" disabled selected>Pilih Level</option>
                                                <option value="admin"
                                                    {{ old('level', $user->level) == 'admin' ? 'selected' : '' }}>Admin
                                                </option>
                                                <option value="guru"
                                                    {{ old('level', $user->level) == 'guru' ? 'selected' : '' }}>Guru
                                                </option>
                                                <option value="siswa"
                                                    {{ old('level', $user->level) == 'siswa' ? 'selected' : '' }}>Siswa
                                                </option>
                                            </select>
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-badge"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <a href="{{ route('user.index') }}" class="btn btn-primary me-1 mb-1">
                                        <i class="bi bi-arrow-left"></i> Kembali
                                    </a>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                        <i class="bi bi-arrow-clockwise"></i> Reset
                                    </button>
                                    <button type="submit" class="btn btn-success me-1 mb-1">
                                        <i class="fa fa-save"></i> Perbarui
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
