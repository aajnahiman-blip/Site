<?php

namespace App\Http\Controllers;
use App\Http\Requests\AddProductRequest;
use App\Models\Produit;


class RproductController extends Controller
{

public function create()
    {
        return view('create'); 
    }

public function store(AddProductRequest $request)
{
 // 1. Validation des champs
 // (elle est déjà effectuée automatiquement, mais on peutforcer le check)
 $request->validated();
 // 2. Récupérer les valeurs des champs
 $titre = $request->input('titre');
  $prix = $request->input('prix');
 $categorie = $request->input('categorie');
 $description = $request->input('description');
 // 3. Gérer l’upload de l’image
 // getClientOriginalName() => récupère le nom original du
//fichier

 if ($request->hasFile('image')) {
    $imageName = time().'_'.$request->file('image')->getClientOriginalName();

    
}
 // 4. Créer et sauvegarder un nouvel Produit en base de données

 $produit = new Produit();
 $produit->titre = $titre;
 $produit->prix = $prix;
 $produit->categorie = $categorie;
 $produit->description = $description;
 $produit->image = $imageName;
 $produit->save();
 // 5. Déplacer l’image dans le dossier public\images
 $request->file('image')->move(public_path('image'), $imageName);
 // 6. Redirection avec un message flash de succès
 return back()->with('success', 'Vous avez ajouté un produit avec
succès !');
} 

}
