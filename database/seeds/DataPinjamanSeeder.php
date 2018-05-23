<?php

use Illuminate\Database\Seeder;

class DataPinjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DataPinjaman::class, 2)->create();
    }
}
