<?php

namespace Database\Seeders;

use App\Models\IdentityDocumentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IdentityDocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        IdentityDocumentType::firstOrCreate(['type' => '0','short_name' => 'S.N.', 'long_name' => 'Sin Documento' ]);
        IdentityDocumentType::firstOrCreate(['type' => '1','short_name' => 'D.N.I/L.E', 'long_name' => 'Documento Nacional de Identidad' ]);
        IdentityDocumentType::firstOrCreate(['type' => '4','short_name' => 'CARNET EXT.', 'long_name' => 'Carnet de Extranjería' ]);
        IdentityDocumentType::firstOrCreate(['type' => '6','short_name' => 'R.U.C', 'long_name' => 'Régimen Único del Contribuyente' ]);
        IdentityDocumentType::firstOrCreate(['type' => '7','short_name' => 'PASAPORTE', 'long_name' => 'PASAPORTE' ]);
        IdentityDocumentType::firstOrCreate(['type' => 'A','short_name' => 'CEDULA', 'long_name' => 'Cédula Diplomática de identidad' ]);
        IdentityDocumentType::firstOrCreate(['type' => 'B','short_name' => 'D.I.P.R/No.D', 'long_name' => 'Documento Identidad del País de Residencia' ]);
        IdentityDocumentType::firstOrCreate(['type' => 'C','short_name' => 'D.T.P.N', 'long_name' => 'Tax Documento Tributario de Personas Naturales' ]);
        IdentityDocumentType::firstOrCreate(['type' => 'D','short_name' => 'D.T.P.J', 'long_name' => 'Tax Documento Tributario de Personas Jurídicas' ]);
        IdentityDocumentType::firstOrCreate(['type' => 'E','short_name' => 'T.A.M', 'long_name' => 'Tarjeta Andina de Migraciones' ]);
    }
}
