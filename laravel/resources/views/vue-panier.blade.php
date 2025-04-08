<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Panier</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Votre Panier</h1>

@if(session('panier') && count(session('panier')) > 0)
    <table border="1">
        <tr>
            <th>Image</th>
            <th>Nom</th>
            <th>Prix</th>
        </tr>
        @foreach(session('panier') as $produit)
            <tr>
                <td><img src="{{ asset('storage/' . $produit['image']) }}" width="100"></td>
                <td>{{ $produit['nom'] }}</td>
                <td>{{ $produit['prix'] }} €</td>
            </tr>
        @endforeach
    </table>
@else
    <p>Votre panier est vide.</p>
@endif

<a href="/produits">Retour aux produits</a>


<a href="{{ route('panier.vider') }}">Vider le panier</a>


</body>
</html>
