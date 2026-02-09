<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;
use Faker\Factory as Faker;

class ProduitSeeder extends Seeder
{
    

public function run()
{
    $produits = [
        [
            'titre' => 'Collier Elegant',
            'prix' => 120.50,
            'categorie' => 'Bijoux',
            'description' => 'Collier en or avec pendentif.',
            'image' => 'collier.jpg',
        ],
        [
            'titre' => 'Montre Classique',
            'prix' => 250,
            'categorie' => 'Montres',
            'description' => 'Montre en acier inoxydable.',
            'image' => 'montre.jpg',
        ],
        [
            'titre' => 'Bracelet Chic',
            'prix' => 80,
            'categorie' => 'Bijoux',
            'description' => 'Bracelet en argent massif.',
            'image' => 'bracelet.jpg',
        ],
        [
            'titre' => 'Sac à main',
            'prix' => 150,
            'categorie' => 'Accessoires',
            'description' => 'Sac en cuir de haute qualité.',
            'image' => 'sac.jpg',
        ],
        [
            'titre' => 'Boucles d’oreilles',
            'prix' => 60,
            'categorie' => 'Bijoux',
            'description' => 'Boucles d’oreilles en perles.',
            'image' => 'boucles.jpg',
        ],
        [
            'titre' => 'Ceinture Classique',
            'prix' => 40,
            'categorie' => 'Accessoires',
            'description' => 'Ceinture en cuir noir.',
            'image' => 'ceinture.jpg',
        ],
    ];

    foreach ($produits as $prod) {
        \App\Models\Produit::create($prod);
    }
}
}