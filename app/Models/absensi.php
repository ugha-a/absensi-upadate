<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    protected $fillable = [
        'jam',
        'tanggal',
        'status',
        'keterangan',
        'guru_id',
        'siswa_id',
    ];

    public function guru()
    {
        return $this->belongsTo(guru::class, 'guru_id');
    }

    public function siswa()
    {
        return $this->belongsTo(siswa::class, 'siswa_id');
    }
}
