<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents; 
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['id' => 1, 'username' => 'admin', 'email' => 'guon7ft179@example.com', 'password' => bcrypt('password'), 'level' => 'admin'],
            ['id' => 2, 'username' => 'nuge', 'email' => 'nuge@gmail.com', 'password' => bcrypt('password'), 'level' => 'guru'],
            ['id' => 4, 'username' => 'rahma', 'email' => 'rahma@gmail.com', 'password' => bcrypt('password'), 'level' => 'siswa'],
            ['id' => 5, 'username' => 'ugha', 'email' => 'ugha@mail.com', 'password' => bcrypt('password'), 'level' => 'siswa'],
            ['id' => 12, 'username' => 'jayawati', 'email' => 'jayawati@gmail.com', 'password' => bcrypt('password'), 'level' => 'guru'],
            ['id' => 14, 'username' => 'ahmad', 'email' => 'agrahanugrah1@gmail.com', 'password' => bcrypt('password'), 'level' => 'siswa'],
        ]);

        // Jurusans
        DB::table('jurusans')->insert([
            ['id' => 1, 'nama_jurusan' => 'MIPA', 'kode_jurusan' => 'MIPA-XII'],
            ['id' => 2, 'nama_jurusan' => 'IPS', 'kode_jurusan' => 'IPS-XI'],
            ['id' => 3, 'nama_jurusan' => 'IPS', 'kode_jurusan' => 'IPS-X'],
        ]);

        // Mapels
        DB::table('mapels')->insert([
            ['id' => 1, 'nama_mapel' => 'IPA', 'jadwal_mapel' => '2025-06-17 09:04:22'],
            ['id' => 2, 'nama_mapel' => 'Fisika', 'jadwal_mapel' => '8.00 WITA - 10.00'],
            ['id' => 4, 'nama_mapel' => 'Sosiologi', 'jadwal_mapel' => 'Senin 8.00 WITA - 10.00'],
            ['id' => 9, 'nama_mapel' => 'Sosiologi', 'jadwal_mapel' => '2025-06-17 11:59:51'],
        ]);

        // Gurus
        DB::table('gurus')->insert([
            ['id' => 1, 'NIP' => '87654321', 'nama' => 'Nuge', 'no_telp' => '6285965813234', 'jk' => 'pria', 'mapel' => 'IPA', 'username' => 'nuge', 'password' => bcrypt('password'), 'mapel_id' => 1, 'user_id' => 2],
            ['id' => 4, 'NIP' => '2022020', 'nama' => 'Jayawati', 'no_telp' => '0852422496650', 'jk' => 'wanita', 'mapel' => 'Sosiologi', 'username' => 'jayawati', 'password' => bcrypt('password'), 'mapel_id' => 9, 'user_id' => 12],
        ]);

        // Lokals
        DB::table('lokals')->insert([
            ['id' => 1, 'nama' => 'XII MIPA', 'jurusan_id' => 1, 'guru_id' => 1],
            ['id' => 3, 'nama' => 'X IPS', 'jurusan_id' => 3, 'guru_id' => 4],
        ]);

        // Siswas
        DB::table('siswas')->insert([
            ['id' => 2, 'NISN' => '123456789', 'nama' => 'Nurul Rahmatul Islami', 'jk' => 'perempuan', 'no_telp' => '6281347466950', 'username' => 'rahma', 'password' => bcrypt('password'), 'lokal_id' => 1, 'user_id' => 4],
            ['id' => 3, 'NISN' => '33456777', 'nama' => 'Ugha', 'jk' => 'laki-laki', 'no_telp' => '6281215348965', 'username' => 'ugha', 'password' => bcrypt('password'), 'lokal_id' => 1, 'user_id' => 5],
            ['id' => 5, 'NISN' => '23567', 'nama' => 'Ahmad', 'jk' => 'laki-laki', 'no_telp' => '081212480597', 'username' => 'ahmad', 'password' => bcrypt('password'), 'lokal_id' => 3, 'user_id' => 14],
        ]);

        // Mengajars
        DB::table('mengajars')->insert([
            ['id' => 1, 'guru_id' => 1, 'mapel_id' => 1],
            ['id' => 2, 'guru_id' => 4, 'mapel_id' => 9],
        ]);

        // Absensis
        DB::table('absensis')->insert([
            ['id' => 6, 'jam' => '08:23:54', 'tanggal' => '2025-06-17', 'status' => 'hadir', 'keterangan' => null, 'guru_id' => 1, 'siswa_id' => 2],
            ['id' => 7, 'jam' => '08:27:09', 'tanggal' => '2025-06-17', 'status' => 'hadir', 'keterangan' => null, 'guru_id' => 1, 'siswa_id' => 2],
            ['id' => 8, 'jam' => '08:27:09', 'tanggal' => '2025-06-17', 'status' => 'sakit', 'keterangan' => null, 'guru_id' => 1, 'siswa_id' => 3],
            ['id' => 9, 'jam' => '09:04:22', 'tanggal' => '2025-06-17', 'status' => 'hadir', 'keterangan' => null, 'guru_id' => 1, 'siswa_id' => 2],
            ['id' => 10, 'jam' => '09:04:22', 'tanggal' => '2025-06-17', 'status' => 'alfa', 'keterangan' => null, 'guru_id' => 1, 'siswa_id' => 3],
            ['id' => 11, 'jam' => '11:59:51', 'tanggal' => '2025-06-17', 'status' => 'hadir', 'keterangan' => null, 'guru_id' => 4, 'siswa_id' => 5],
        ]);
        
        
    }
}
