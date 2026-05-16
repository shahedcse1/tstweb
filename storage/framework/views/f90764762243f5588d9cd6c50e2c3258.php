<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title', 'TST White House Ltd.'); ?> | Essential Commodities Trading</title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_desc', 'TST White House Ltd. — Leading trading company in Bangladesh specializing in essential commodities and industrial construction materials.'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800;900&family=Nunito+Sans:wght@400;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body class="page-<?php echo e(Request::route() ? Request::route()->getName() : 'home'); ?>">

    <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\tst\resources\views/layouts/app.blade.php ENDPATH**/ ?>