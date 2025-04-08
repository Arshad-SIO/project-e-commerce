<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Nos boissons</h1>

<table border="1">
    <tr>
        <th>Image</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Action</th>
    </tr>

    @foreach ($produits as $produit)
        <tr>
            <td><img src="{{ asset('storage/' . $produit->image) }}" width="100"></td>
            <td>{{ $produit->nom }}</td>
            <td>{{ $produit->prix }} €</td>
            <td>
                <form method="POST" action="{{ route('panier.ajouter') }}">
                    @csrf
                    <input type="hidden" name="produit_id" value="{{ $produit->id }}">
                    <input type="hidden" name="image" value="{{ $produit->image }}">
                    <input type="hidden" name="nom" value="{{ $produit->nom }}">
                    <input type="hidden" name="prix" value="{{ $produit->prix }}">
                    <button type="submit">Ajouter au panier</button>
                </form>
            </td>
        </tr>
    @endforeach

</table>

<a href="/panier">Voir le panier</a>

</body>
</html>
