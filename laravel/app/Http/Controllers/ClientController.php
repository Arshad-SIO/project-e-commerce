<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client; 

class ClientController extends Controller
{
    public function connexion() {
		return  view('vue-connexion') ;
	}
	
	public function connecter(Request $req ) {
		
		$nom = $req -> input('login') ; 
		$mdp = $req -> input('mdp') ; 
		
		$client = Client::select('nom') 
			-> where('nom' , $nom ) 
			-> where('mdp' , $mdp ) 
			-> first() ; 
			
		if($client) {
			session() -> put('client' , $client) ; 
			return view( 'vue-reussite' ) ; 
			
		}
		else {
			return view( 'vue-connexion' ) -> with( 'connexion_nok' , True ); 
		}
		
	}           

	
	public function deconnexion() {
		return "Page de deconnexion" ;
	}
	
	public function panier() {
		return "Page de panier " ;
	}
}
