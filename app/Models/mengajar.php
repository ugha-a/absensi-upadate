<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mengajar extends Model
{
    protected $fillable = [
        'lokal_id',
        'guru_id',
        'mapel_id',
    ];

    public function guru()
    {
        return $this->belongsTo(guru::class, 'guru_id');
    }

    public function mapel()
    {
        return $this->belongsTo(mapel::class, 'mapel_id');
    }
}
