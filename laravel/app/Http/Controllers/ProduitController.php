<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit; 

class ProduitController extends Controller
{
    public function produit() {
		
		$produits = Produit::get();
		
		return view( 'vue-produits' )->with("produits",$produits) ;
	}
	
	public function description() {
		return "Page des descriptions de produit" ;
	}
	
	public function panier() {
		return "Page de panier lorsqu’on choisit un produit" ;
	}
}
