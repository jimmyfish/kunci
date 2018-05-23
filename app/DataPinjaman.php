<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPinjaman extends Model
{
    protected $table = 'data_pinjaman';

    protected $fillable = [
        'id_pengguna', 'id_kunci',
    ];

    public function pengguna()
    {
        return $this->hasOne('App\Pengguna');
    }

    public function kunci()
    {
        return $this->hasOne(Kunci::class);
    }
}
