<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function connexion() {
		return  view('vue-connexion') ;
	}           

	
	public function deconnexion() {
		return "Page de deconnexion" ;
	}
	
	public function panier() {
		return "Page de panier " ;
	}
}
