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
	<table>
		<tbody>
			@foreach ($produits as $produit)
				<tr>
					<td><img src="{{ asset('storage/' . $produit->image) }}" class="card-img-top" alt="{{$produit->nom}}"></td>
					<td>{{ $produit -> nom }}</td>
					<td>{{ $produit -> prix }} €</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<!-- 
	<h1>Nos boissons</h1>
	@foreach ($produits as $produit)
		<img src="{{ asset('storage/' . $produit->image) }}" class="card-img-top" alt="{{$produit->nom}}">
		<h3>{{ $produit -> nom }}</h3>
		<p>{{ $produit -> prix }} €</p>
	@endforeach
	-->
</body>
