<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $program = [
            [
                'cabang_id' => 1,
                'nama_program' => 'Programming'
            ],
            [
                'cabang_id' => 1,
                'nama_program' => 'Desainer'
            ],
            [
                'cabang_id' => 1,
                'nama_program' => 'Networking Engineer'
            ],
            [
                'cabang_id' => 2,
                'nama_program' => 'Programming'
            ],
            [
                'cabang_id' => 2,
                'nama_program' => 'Desainer'
            ],
            [
                'cabang_id' => 2,
                'nama_program' => 'Networking Engineer'
            ],
            [
                'cabang_id' => 3,
                'nama_program' => 'Programming'
            ],
            [
                'cabang_id' => 3,
                'nama_program' => 'Networking Engineer'
            ],
        ];

        foreach ($program as $key => $value) {
            Program::create($value);
        }
    }
}
