<?php

namespace Database\Seeders;

use App\Models\Gender;
use App\Models\IdentityDocumentType;
use App\Models\Person;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $super_usuario = Role::where('slug', 'super-usuario')->value('id');
        $identity_document_type = IdentityDocumentType::where('type', '0')->value('id');
        $gender = Gender::where('name', 'Masculino')->value('id');

        $persona = Person::firstOrCreate([
            'identity_document_type_id' => $identity_document_type,
            'document_number' => '00000000',
            'gender_id' => $gender,
            'first_name' => 'Admin',
            'paternal_surname' => 'Master',
            'maternal_surname' => 'Master'
        ]);

        $user = User::firstOrCreate([
            'person_id' => $persona->id,
            'name' => 'admin',
            'email' => 'admin@me.com',
            'password' => Hash::make('123456789')
        ]);

        $user->roles()->sync([$super_usuario]);
    }
}
