<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';

    protected $fillable = [
        'nama',
    ];
    
    public $timestamps = false;

    public function dataPinjaman()
    {
        return $this->hasMany('App\DataPinjaman');
    }
}
