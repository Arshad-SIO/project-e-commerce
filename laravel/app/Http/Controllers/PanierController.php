<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Panier;
use App\Models\Produit;

class PanierController extends Controller
{
    public function ajouterPanier(Request $request)
    {
        // Récupérer les informations du produit depuis la requête
        $produit = [
            'id' => $request->input('produit_id'),
            'image' => $request->input('image'),
            'nom' => $request->input('nom'),
            'prix' => $request->input('prix')
        ];

        // Vérifier si le panier existe déjà dans la session
        $panier = session()->get('panier', []);

        // Ajouter le produit au panier
        $panier[] = $produit;

        // Enregistrer le panier dans la session
        session()->put('panier', $panier);

        // Rediriger vers la vue du panier
        return redirect('/panier');
    }

   public function panier()
{
    return view('vue-panier'); // Change ici pour correspondre au nom de ta vue
}

}
