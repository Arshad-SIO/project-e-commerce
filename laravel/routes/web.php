<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\PanierController;

Route::get('/', [AccueilController::class, 'accueil']);

Route::get('/clients/connexion', [ClientController::class, 'connexion']);

Route::post('/clients/connecter', [ClientController::class, 'connecter']);

Route::get('/clients/deconnexion', [ClientController::class, 'deconnexion']);



Route::get('/produits', [ProduitController::class, 'produit'])->name('produits');

Route::get('/produits/{id}', [ProduitController::class, 'description'])->name('produits.description');



Route::get('/panier', [PanierController::class, 'panier'])->name('panier');

Route::post('/panier/ajouter', [PanierController::class, 'ajouterPanier'])->name('panier.ajouter');

Route::put('/panier/modifier/{id}', [PanierController::class, 'modifier'])->name('panier.modifier');

Route::delete('/panier/supprimer/{id}', [PanierController::class, 'supprimer'])->name('panier.supprimer');

Route::get('/panier/paiement', [PanierController::class, 'paiement'])->name('panier.paiement');


Route::get('/panier/vider', function () {
    session()->forget('panier');
    return redirect('/panier');
})->name('panier.vider');
