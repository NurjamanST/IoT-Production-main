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
            'tools_name' => 'Lampu1',
            'status' => 'active'
        ]);

        SmartHome::create([
            'tools_name' => 'Ultra Sonic',
            'data' => '50'
        ]);
    }
}
