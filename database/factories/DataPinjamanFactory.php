<?php

use Faker\Generator as Faker;

$factory->define(App\DataPinjaman::class, function (Faker $faker) {
    return [
        'id_pengguna' => rand(1, 2),
        'id_kunci' => rand(1, 2),
        'tanggal_pinjam' => new \DateTime(),
        'tanggal_kembali' => new \DateTime(),
    ];
});
