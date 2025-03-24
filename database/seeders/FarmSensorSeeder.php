<?php

namespace Database\Seeders;

use App\Models\FarmSensor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FarmSensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        FarmSensor::create([
            'soil_moisture' => '80',
        ]);
    }
}
