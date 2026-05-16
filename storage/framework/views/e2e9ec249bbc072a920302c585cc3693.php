<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['title', 'subtitle' => '', 'breadcrumb' => []]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['title', 'subtitle' => '', 'breadcrumb' => []]); ?>
<?php foreach (array_filter((['title', 'subtitle' => '', 'breadcrumb' => []]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<section class="page-hero">
    <div class="page-hero-overlay"></div>
    <div class="container page-hero-inner">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="<?php echo e(route('home')); ?>">Home</a>
            <?php $__currentLoopData = $breadcrumb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span class="bc-sep">›</span>
                <?php if($loop->last): ?>
                    <span class="bc-current"><?php echo e($crumb['label']); ?></span>
                <?php else: ?>
                    <a href="<?php echo e($crumb['url']); ?>"><?php echo e($crumb['label']); ?></a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </nav>
        <h1 class="page-hero-title"><?php echo e($title); ?></h1>
        <?php if($subtitle): ?>
            <p class="page-hero-subtitle"><?php echo e($subtitle); ?></p>
        <?php endif; ?>
    </div>
    <div class="page-hero-pattern"></div>
</section>
<?php /**PATH C:\xampp\htdocs\tst\resources\views/components/page-hero.blade.php ENDPATH**/ ?>