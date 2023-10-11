<?php

namespace Database\Seeders;

use App\Models\Cabang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'IDN Jonggol'
            ],
            [
                'nama' => 'IDN Sentul'
            ],
            [
                'nama' => 'IDN Pamijahan'
            ]
        ];

        foreach ($data as $cabang) {
            Cabang::create($cabang);
        }
    }
}
