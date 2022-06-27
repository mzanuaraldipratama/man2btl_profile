<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attr = [
            'X', 'XI', 'XII'
        ];

        foreach ($attr as $key => $value) {
            Kelas::create([
                'name' => $value,
            ]);
        }
    }
}
