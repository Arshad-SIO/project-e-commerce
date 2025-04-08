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

<?php if(session('panier') && count(session('panier')) > 0): ?>
    <table border="1">
        <tr>
            <th>Image</th>
            <th>Nom</th>
            <th>Prix</th>
        </tr>
        <?php $__currentLoopData = session('panier'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><img src="<?php echo e(asset('storage/' . $produit['image'])); ?>" width="100"></td>
                <td><?php echo e($produit['nom']); ?></td>
                <td><?php echo e($produit['prix']); ?> €</td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php else: ?>
    <p>Votre panier est vide.</p>
<?php endif; ?>

<a href="/produits">Retour aux produits</a>


<a href="<?php echo e(route('panier.vider')); ?>">Vider le panier</a>


</body>
</html>
<?php /**PATH /var/www/html/project-e-commerce/laravel/resources/views/vue-panier.blade.php ENDPATH**/ ?>