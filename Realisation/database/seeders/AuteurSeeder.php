<?php

namespace Database\Seeders;

use App\Models\Auteur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Auteur::insert([
            [
                "nom" => "Dupont",
                "prenom" => "Marie",
                "nationalite" => "Française",
                "Date_Naissance" => "1985-07-15",

            ],
            [
                "nom" => "Smith",
                "prenom" => "John",
                "nationalite" => "Américain",
                "Date_Naissance" => "1990-03-22",

            ],
            [
                "nom" => "Khan",
                "prenom" => "Aisha",
                "nationalite" => "Pakistanaise",
                "Date_Naissance" => "1988-11-05",

            ],
        ]);
    }
}
