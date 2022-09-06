<?php

namespace Database\Seeders;

use App\Models\expedisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class expedisiseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $allData = expedisi::all();

        // $allData->delete();

        $expedisi = [
            [
            'nama' => "Lintas",
            ],
            [
            'nama' => "Tunas Muda",
            ],
            [
            'nama' => "Dhamiri",
            ],
            [
            'nama' => "Bina Wahana",
            ],
            [
            'nama' => "MPX",
            ],
        ];

        foreach($expedisi as $e){
            expedisi::create($e);
        }
    }
}
