<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penguruses')->insert([
            [
                'nama' => 'Darmawan Setiawan',
                'npm' => '2020020153',
                'macaddress' => '14.07.01.00',
                'jabatan' => 'Ketua',
                'jurusan' => 'Teknik Informatika',
                'gol' => 'INTI',
                'gambar' => 'image.jpg',
            ],
            [
                'nama' => 'A. Akbar',
                'npm' => '2020020111',
                'macaddress' => '14.07.02.00',
                'jabatan' => 'Wakil Ketua',
                'jurusan' => 'Teknik Informatika',
                'gol' => 'INTI',
                'gambar' => 'image.jpg',
            ],
            [
                'nama' => 'Elisabeth Patitingan',
                'npm' => '2019030001',
                'macaddress' => '13.07.03.00',
                'jabatan' => 'Sekretaris',
                'jurusan' => 'Teknik Informatika',
                'gol' => 'INTI',
                'gambar' => 'image.jpg',
            ],
            [
                'nama' => 'Juliani',
                'npm' => '2020020011',
                'macaddress' => '14.07.04.00',
                'jabatan' => 'Bendahara',
                'jurusan' => 'Teknik Informatika',
                'gol' => 'INTI',
                'gambar' => 'image.jpg',
            ],
            [
                'nama' => "Muhdzakkir Ma'arif AM",
                'npm' => '2020020030',
                'macaddress' => '14.08.05.00',
                'jabatan' => 'Koordinator',
                'jurusan' => 'Teknik Informatika',
                'gol' => 'Information Officer',
                'gambar' => 'image.jpg',
            ],
            [
                'nama' => 'Muh Shafar Ifratama',
                'npm' => '2020020092',
                'macaddress' => '14.07.06.00',
                'jabatan' => 'Koordinator',
                'jurusan' => 'Teknik Informatika',
                'gol' => 'Technical Officer',
                'gambar' => 'image.jpg',
            ],
            [
                'nama' => 'Ihsan Dwianto',
                'npm' => '2020040011',
                'macaddress' => '14.08.07.00',
                'jabatan' => 'Koordinator',
                'jurusan' => 'Sistem Informasi',
                'gol' => 'Financial Officer',
                'gambar' => 'image.jpg',
            ],
        ]);
    }
}
