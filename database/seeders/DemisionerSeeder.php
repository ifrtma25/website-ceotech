<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemisionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('demisioners')->insert([
            [
                'nama' => 'Abdul Rahman',
                'npm' => '2019020000',
                'angkatan' => 'VI',
                'jurusan' => 'Teknik Informatika',
                'periode' => '2021-2022',
                'gambar' => 'abra.jpg',
            ],
            [
                'nama' => 'Ricky Mahendra',
                'npm' => '2019020000',
                'angkatan' => 'VI',
                'jurusan' => 'Teknik Informatika',
                'periode' => '2021-2022',
                'gambar' => 'ricky.jpg',
            ],
        ]);
    }
}
