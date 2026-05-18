<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Club</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    
</head>
<body>
    <?php echo $__env->make('partials.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</body>
</html><?php /**PATH C:\Users\HP ELITE\correction\resources\views/layouts/app.blade.php ENDPATH**/ ?>