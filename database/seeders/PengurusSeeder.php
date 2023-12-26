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
                'nama' => 'Galang',
                'npm' => '2021020006',
                'macaddress' => '15.08.01.00',
                'jabatan' => 'Ketua',
                'jurusan' => 'Teknik Informatika',
                'gol' => 'INTI',
                'gambar' => 'image.jpg',
            ],
            [
                'nama' => 'Mudzakkir Maarif AM',
                'npm' => '2020020003',
                'macaddress' => '14.08.02.00',
                'jabatan' => 'Wakil Ketua',
                'jurusan' => 'Teknik Informatika',
                'gol' => 'INTI',
                'gambar' => 'image.jpg',
            ],
            [
                'nama' => 'Putri Aprilia Utami',
                'npm' => '2021020000',
                'macaddress' => '15.08.03.00',
                'jabatan' => 'Sekretaris',
                'jurusan' => 'Teknik Informatika',
                'gol' => 'INTI',
                'gambar' => 'image.jpg',
            ],
            [
                'nama' => 'Aisyah Sarah Salwa',
                'npm' => '2021020000',
                'macaddress' => '15.08.04.00',
                'jabatan' => 'Bendahara',
                'jurusan' => 'Teknik Informatika',
                'gol' => 'INTI',
                'gambar' => 'image.jpg',
            ],
            [
                'nama' => "M. Yusuf",
                'npm' => '2021020000',
                'macaddress' => '15.08.05.00',
                'jabatan' => 'Koordinator',
                'jurusan' => 'Teknik Informatika',
                'gol' => 'Information Officer',
                'gambar' => 'image.jpg',
            ],
            [
                'nama' => 'Irsyandi Syam',
                'npm' => '2021020000',
                'macaddress' => '15.08.06.00',
                'jabatan' => 'Koordinator',
                'jurusan' => 'Teknik Informatika',
                'gol' => 'Technical Officer',
                'gambar' => 'image.jpg',
            ],
            [
                'nama' => 'Muslimah Safitri',
                'npm' => '2021020000',
                'macaddress' => '15.08.07.00',
                'jabatan' => 'Koordinator',
                'jurusan' => 'Teknik Informatika',
                'gol' => 'Financial Officer',
                'gambar' => 'image.jpg',
            ],
        ]);
    }
}
