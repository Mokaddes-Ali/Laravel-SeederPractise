<?php

namespace Database\Seeders;

use App\Models\ClientModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClientModel::create([
            'name' => 'User',
        ]);
    }
}
