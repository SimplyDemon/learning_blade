<?php $__env->startPush('scripts'); ?>
    <script src="/example_one.js"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title', 'Контакты'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Контакты</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="/example_two.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>