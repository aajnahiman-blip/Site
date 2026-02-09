<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Produit;




class ProduitController extends Controller

{
    public function index()
    {
        
    }
    public function produits()
{
    $produits = Produit::paginate(8);
    return view('produits', compact('produits'));
}


    public function getProductsByCategorie(Request $rq)
    {
        $cat=$rq->route('cat');
        $produits = Produit::where('categorie', $cat)->paginate(6);

        return view('Cat_produits',
                ['produits' => $produits,
                'categorie' => $cat
                   ]);
    }

}
