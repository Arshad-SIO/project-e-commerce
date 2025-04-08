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

    <?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><img src="<?php echo e(asset('storage/' . $produit->image)); ?>" width="100"></td>
            <td><?php echo e($produit->nom); ?></td>
            <td><?php echo e($produit->prix); ?> €</td>
            <td>
                <form method="POST" action="<?php echo e(route('panier.ajouter')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="produit_id" value="<?php echo e($produit->id); ?>">
                    <input type="hidden" name="image" value="<?php echo e($produit->image); ?>">
                    <input type="hidden" name="nom" value="<?php echo e($produit->nom); ?>">
                    <input type="hidden" name="prix" value="<?php echo e($produit->prix); ?>">
                    <button type="submit">Ajouter au panier</button>
                </form>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<a href="/panier">Voir le panier</a>

</body>
</html>
<?php /**PATH /var/www/html/project-e-commerce/laravel/resources/views/vue-produits.blade.php ENDPATH**/ ?>