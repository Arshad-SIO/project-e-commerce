<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'produit_id', 'quantite'];

    // Relation avec la table Produits
    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }

    // Relation avec la table Users (ou Clients si tu as une table Clients)
    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
}
