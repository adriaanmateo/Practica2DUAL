    
<?php $__env->startSection('header'); ?>
	
    <h1>Pagina de error</h1>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="text-center">
        <p>Error catastrofico<p>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>