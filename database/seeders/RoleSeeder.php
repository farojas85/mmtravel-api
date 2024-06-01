<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\AccessType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $acceso_total = AccessType::where('slug', 'acceso-total')->value('id');
        $acceso_parcial = AccessType::where('slug', 'acceso-parcial')->value('id');
        $acceso_denegado = AccessType::where('slug', 'acceso-denegado')->value('id');
        $acceso_invitado = AccessType::where('slug', 'invitado')->value('id');

        Role::firstOrCreate(['access_type_id' => $acceso_total, 'name' => 'Super Usuario', 'slug' => 'super-usuario', 'description' => 'Usuario con acceso total al sistema']);
        Role::firstOrCreate(['access_type_id' => $acceso_parcial, 'name' => 'Gerente', 'slug' => 'gerente', 'description' => 'Gerente general del negocio']);
        Role::firstOrCreate(['access_type_id' => $acceso_parcial, 'name' => 'Administrador', 'slug' => 'administrador', 'description' => 'Administrador del Sistema']);
        Role::firstOrCreate(['access_type_id' =>  $acceso_parcial, 'name' => 'Usuario', 'slug' => 'usuario', 'description' => 'Persona con acceso al algunos módulos del sistema']);
    }
}
