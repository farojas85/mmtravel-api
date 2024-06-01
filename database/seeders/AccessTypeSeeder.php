<?php

namespace Database\Seeders;

use App\Models\AccessType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AccessType::firstOrCreate(['name' => 'Acceso Total','slug' => 'acceso-total','description' => 'Acceso Total Al Sistema']);
        AccessType::firstOrCreate(['name' => 'Acceso Parcial','slug' => 'acceso-parcial','description' => 'Acceso Parcial Al Sistema']);
        AccessType::firstOrCreate(['name' => 'Acceso Denegado','slug' => 'acceso-denegado','description' => 'Acceso Denegado Al Sistema']);
        AccessType::firstOrCreate(['name' => 'Invitado','slug' => 'invitado','description' => 'Acceso a funciones públicas limitadas']);
    }
}
