<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::insert([
            ["nom" => "Développement Web"],
            ["nom" => "Programmation Backend"],
            ["nom" => "Bonnes Pratiques"]
        ]);
    }
}
