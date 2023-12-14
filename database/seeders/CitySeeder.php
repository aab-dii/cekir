<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fileKota = file_get_contents(base_path('database/kota.json'));
        $fileKabupaten = file_get_contents(base_path('database/kabupaten.json'));
        $datakota = json_decode($fileKota, true);
        $dataKabupaten = json_decode($fileKabupaten, true);

        City::insert($datakota);
        City::insert($dataKabupaten);
    }
}
