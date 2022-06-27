<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attr = ['Kegiatan', 'Prestasi', 'Fasilitas'];

        foreach ($attr as $key => $value) {
            Category::create([
                'name' => $value,
            ]);
        }
    }
}
