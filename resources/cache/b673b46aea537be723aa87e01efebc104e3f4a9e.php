<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Мой сайт - <?php echo $__env->yieldContent('title'); ?></title>

    
</head>
<body>

<?php echo $__env->make('navigation', ['title' => 'Меню'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<script type="text/javascript" src=".../"></script>
<?php echo $__env->yieldPushContent('scripts'); ?>

</body>
</html>