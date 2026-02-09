<?php

use Illuminate\Support\Facades\Route;
use App\Models\Produit;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\RproductController;


Route::get('/', function () {
    return view('index');
});

Route::get('/produits', [ProduitController::class, 'produits']);

// Route::get('/produit/{id}', function ($id) {
//     $produit = Produit::findOrFail($id);
//     return view('details', compact('produit'));
// });


Route::get('/produits/create', [RproductController::class, 'create'])->name('produits.create');
Route::post('/produits', [RproductController::class, 'store']);

Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/produits/{cat}', [ProduitController::class,'getProductsByCategorie']) ;



