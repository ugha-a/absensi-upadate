@extends('template-admin.layout')
@section('title', 'Data siswa')
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .action-btns {
            display: flex;
            justify-content: center;
            gap: 8px;
        }

        .action-btns .btn {
            margin: 0;
        }

        .btn-custom-width {
            width: auto;
        }
    </style>
@endsection
@section('content')
    <div class="d-flex mb-2">
        <a href="{{ route('siswa.create') }}" class="btn btn-success btn-custom-width"><i class="fas fa-plus"></i> Tambah Data
            siswa</a>

    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5 class="m-0 font-weight-bold text-gray text-primary">
                        Manajemen Data siswa
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Nisn</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($siswa as $dg)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $dg->NISN }}</td>
                                        <td>{{ $dg->nama }}</td>
                                        <td>{{ $dg->lokal->jurusan->nama_jurusan }}</td>
                                        <td>
                                            <div class="action-btns">
                                                {{-- <a href="{{ route('siswa.show', $dg->id) }}" class="btn btn-outline-primary btn-sm"><i class="fas fa-eye" title="Lihat"></i></a> --}}
                                                <a href="{{ route('siswa.edit', $dg->id) }}"
                                                    class="btn btn-outline-warning btn-sm"><i class="fas fa-pencil-alt"
                                                        title="Edit"></i></a>
                                                <form action="{{ route('siswa.destroy', $dg->id) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                        <i class="fas fa-trash" title="Hapus"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "language": {
                    "search": "Cari:",
                    "lengthMenu": "Tampilkan _MENU_ data",
                    "zeroRecords": "Data tidak ditemukan",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    "infoEmpty": "Tidak ada data tersedia",
                    "infoFiltered": "(disaring dari _MAX_ total data)",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Berikutnya",
                        "previous": "Sebelumnya"
                    },
                }
            });
        });
    </script>
@endsection
