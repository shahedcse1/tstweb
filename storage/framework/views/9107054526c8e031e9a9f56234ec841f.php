<?php $__env->startSection('title', 'Our Products'); ?>
<?php $__env->startSection('meta_desc', 'TST White House Ltd. trades essential commodities including sugar, edible oils, lentils, salt, and industrial construction materials.'); ?>

<?php $__env->startSection('content'); ?>

<?php if (isset($component)) { $__componentOriginala9d931d4f11b4d2850df99e991db1dca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d931d4f11b4d2850df99e991db1dca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-hero','data' => ['title' => 'Our Products','subtitle' => 'From essential food commodities to industrial construction materials — complete supply solutions.','breadcrumb' => [['label' => 'Products', 'url' => route('products')]]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('page-hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Our Products','subtitle' => 'From essential food commodities to industrial construction materials — complete supply solutions.','breadcrumb' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([['label' => 'Products', 'url' => route('products')]])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala9d931d4f11b4d2850df99e991db1dca)): ?>
<?php $attributes = $__attributesOriginala9d931d4f11b4d2850df99e991db1dca; ?>
<?php unset($__attributesOriginala9d931d4f11b4d2850df99e991db1dca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9d931d4f11b4d2850df99e991db1dca)): ?>
<?php $component = $__componentOriginala9d931d4f11b4d2850df99e991db1dca; ?>
<?php unset($__componentOriginala9d931d4f11b4d2850df99e991db1dca); ?>
<?php endif; ?>

<section class="section">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">What We Trade</div>
            <h2 class="section-title">Complete Product Portfolio</h2>
            <p class="section-desc">TST White House Ltd. specializes in the supply of essential raw materials catering to diverse needs worldwide.</p>
        </div>
        <div class="products-full-grid fade-up">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="pfg-card pfg-card--<?php echo e($cat['color']); ?>">
                <div class="pfg-top">
                    <div class="pfg-icon"><?php echo e($cat['icon']); ?></div>
                    <div class="pfg-volume-badge"><?php echo e($cat['volume']); ?></div>
                </div>
                <h3><?php echo e($cat['name']); ?></h3>
                <p><?php echo e($cat['desc']); ?></p>
                <div class="pfg-tags">
                    <?php $__currentLoopData = $cat['tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="ptag"><?php echo e($tag); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <a href="<?php echo e($cat['link']); ?>" class="pfg-link">Explore Product →</a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="section section-gray">
    <div class="container two-col">
        <div class="fade-up">
            <div class="section-label">Our Strength</div>
            <h2 class="section-title">Global Commodity Excellence</h2>
            <p>TST White House Global Commodities is a leading trading company specializing in the supply of essential raw materials. We are committed to delivering high-quality commodities that cater to the diverse needs of our clients worldwide.</p>
            <p style="margin-top:16px">With a strong focus on excellence, integrity, and customer satisfaction, we ensure that every transaction contributes to sustainable development and growth. Our emphasis on strategic sourcing, efficient logistics, and sustainable trading practices guarantees that each deal we handle not only meets but exceeds industry standards and client expectations.</p>
        </div>
        <div class="product-strengths fade-up" style="animation-delay:.15s">
            <div class="ps-item"><span class="ps-icon">🌍</span><div><h5>15+ Source Countries</h5><p>Global supplier network across Asia, Europe, Americas &amp; Middle East.</p></div></div>
            <div class="ps-item"><span class="ps-icon">⚖️</span><div><h5>Large-Scale Capacity</h5><p>Handle transactions from small lots to 150,000 MT monthly volumes.</p></div></div>
            <div class="ps-item"><span class="ps-icon">🔬</span><div><h5>Quality Certified</h5><p>Every shipment tested and certified before delivery.</p></div></div>
            <div class="ps-item"><span class="ps-icon">🤝</span><div><h5>SKS Joint Venture</h5><p>Backed by Sena Kalyan Sangstha for nationwide distribution.</p></div></div>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container cta-inner">
        <h2>Need a custom supply agreement?</h2>
        <p>We offer flexible volumes, custom delivery schedules, and competitive pricing for all commodities.</p>
        <a href="<?php echo e(route('contact')); ?>" class="btn btn-white">Request a Quote</a>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tst\resources\views/pages/products/index.blade.php ENDPATH**/ ?>