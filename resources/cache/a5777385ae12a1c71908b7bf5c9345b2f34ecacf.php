<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>
    <h1><?php echo e($title); ?></h1>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>