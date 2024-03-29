<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class TeleponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // insert data ke table pegawai
        DB::table('telepons')->insert([
        	'nomor_telepon'=>Str::random(10),
            'pengguna_id'=>Str::random(10),
        ]);
    }
}
