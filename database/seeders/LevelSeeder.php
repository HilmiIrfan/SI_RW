<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LevelModel;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan data level
        LevelModel::create(['name' => 'Admin']);
        LevelModel::create(['name' => 'RW']);
        LevelModel::create(['name' => 'RT']);
        LevelModel::create(['name' => 'Warga']);
    }
}
