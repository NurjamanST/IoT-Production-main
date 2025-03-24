<?php

namespace Database\Seeders;

use App\Models\FarmRelay;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FarmRelaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        FarmRelay::create([
            'status' => 'active',
        ]);
    }
}
