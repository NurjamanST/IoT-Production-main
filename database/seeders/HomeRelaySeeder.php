<?php

namespace Database\Seeders;

use App\Models\HomeRelay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeRelaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeRelay::create([
            'relay1' => 1,
            'relay2' => 0,
            'relay3' => 0,
            'relay4' => 1,
        ]);
    }
}
