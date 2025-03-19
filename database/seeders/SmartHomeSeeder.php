<?php

namespace Database\Seeders;

use App\Models\SmartHome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SmartHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SmartHome::create([
            'tools_name' => 'Lampu 1',
            'status' => 'active'
        ]);
        SmartHome::create([
            'tools_name' => 'Lampu 2',
            'status' => 'active'
        ]);
        SmartHome::create([
            'tools_name' => 'Kipas',
            'status' => 'active'
        ]);
        SmartHome::create([
            'tools_name' => 'Pagar Rumah',
            'status' => 'active'
        ]);
        SmartHome::create([
            'tools_name' => 'Kabel Listrik',
            'status' => 'active'
        ]);
        SmartHome::create([
            'tools_name' => 'Ultra Sonic',
            'data' => '50'
        ]);
    }
}
