<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::insert([
            [
                "titre" => "Découverte de Laravel",
                "contenu" => "Un guide pour débutants sur les fonctionnalités de base de Laravel.",
                "date_publication" => "2024-10-01",
                'auteur_id' => 1,
                'categorie_id' => 3

            ],
            [
                "titre" => "Les bonnes pratiques en développement web",
                "contenu" => "Des astuces et conseils pour écrire du code propre et maintenable.",
                "date_publication" => "2024-10-15",
                'auteur_id' => 2,
                'categorie_id' => 1

            ],
            [
                "titre" => "Introduction à l'ORM Eloquent",
                "contenu" => "Apprenez à manipuler la base de données en utilisant Eloquent dans Laravel.",
                "date_publication" => "2024-11-01",
                'auteur_id' => 3,
                'categorie_id' => 2

            ],
        ]);
    }
}
