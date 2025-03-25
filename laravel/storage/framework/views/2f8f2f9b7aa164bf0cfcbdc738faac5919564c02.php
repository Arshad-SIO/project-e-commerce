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
			<?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><img src="<?php echo e(asset('storage/' . $produit->image)); ?>" class="card-img-top" alt="<?php echo e($produit->nom); ?>"></td>
					<td><?php echo e($produit -> nom); ?></td>
					<td><?php echo e($produit -> prix); ?> €</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	<!-- 
	<h1>Nos boissons</h1>
	<?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<img src="<?php echo e(asset('storage/' . $produit->image)); ?>" class="card-img-top" alt="<?php echo e($produit->nom); ?>">
		<h3><?php echo e($produit -> nom); ?></h3>
		<p><?php echo e($produit -> prix); ?> €</p>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	-->
</body>
<?php /**PATH /var/www/html/project-e-commerce/laravel/resources/views/vue-produits.blade.php ENDPATH**/ ?>