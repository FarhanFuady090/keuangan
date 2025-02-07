<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UnitPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('unitpendidikan')->insert([
            'nama_unit' => 'TK',
            'kategori' =>  'FORMAL',
            'status_unit' => 'AKTIF',
        ]);

        DB::table('unitpendidikan')->insert([
            'nama_unit' => 'SD',
            'kategori' =>  'FORMAL',
            'status_unit' => 'AKTIF',
        ]);


        DB::table('unitpendidikan')->insert([
            'nama_unit' => 'SMP',
            'kategori' =>  'FORMAL',
            'status_unit' => 'AKTIF',
        ]);


        DB::table('unitpendidikan')->insert([
            'nama_unit' => 'SMA',
            'kategori' =>  'FORMAL',
            'status_unit' => 'AKTIF',
        ]);


        DB::table('unitpendidikan')->insert([
            'nama_unit' => 'MADIN',
            'kategori' =>  'NON FORMAL',
            'status_unit' => 'AKTIF',
        ]);


        DB::table('unitpendidikan')->insert([
            'nama_unit' => 'TPQ',
            'kategori' =>  'NON FORMAL',
            'status_unit' => 'AKTIF',
        ]);


        DB::table('unitpendidikan')->insert([
            'nama_unit' => 'PONDOK',
            'kategori' =>  'EXTRA',
            'status_unit' => 'AKTIF',
        ]);
    }
}
