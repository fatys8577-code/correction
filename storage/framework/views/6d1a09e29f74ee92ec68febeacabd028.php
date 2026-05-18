

<?php $__env->startSection('content'); ?>
    <h1>Bienvenue sur notre Club</h1>
    <p>Découvrez nos activités et rejoignez-nous !</p>
    <a href="<?php echo e(route('club.activities')); ?>">Voir les activités</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\HP ELITE\correction\resources\views/club/home.blade.php ENDPATH**/ ?>