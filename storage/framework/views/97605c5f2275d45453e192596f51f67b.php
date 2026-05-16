<?php $__env->startSection('title', 'Edible Oils Trading'); ?>
<?php $__env->startSection('meta_desc', 'TST White House imports premium edible oils — palm, soybean, sunflower, olive & canola — from Malaysia, Argentina, Ukraine, Italy & Indonesia.'); ?>

<?php $__env->startSection('content'); ?>

<?php if (isset($component)) { $__componentOriginala9d931d4f11b4d2850df99e991db1dca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d931d4f11b4d2850df99e991db1dca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-hero','data' => ['title' => 'Golden Drops: Our Expertise in Edible Oils','subtitle' => 'Harvested Fresh, Delivered Pure — premium edible oils for Bangladesh\'s kitchens and industry.','breadcrumb' => [['label'=>'Products','url'=>route('products')],['label'=>'Edible Oils','url'=>route('products.oils')]]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('page-hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Golden Drops: Our Expertise in Edible Oils','subtitle' => 'Harvested Fresh, Delivered Pure — premium edible oils for Bangladesh\'s kitchens and industry.','breadcrumb' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([['label'=>'Products','url'=>route('products')],['label'=>'Edible Oils','url'=>route('products.oils')]])]); ?>
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
    <div class="container two-col">
        <div class="fade-up">
            <div class="section-label">Edible Oils Overview</div>
            <h2 class="section-title">From PO1 to CA5: The Best in Edible Oils</h2>
            <div class="three-dots"><span></span><span></span><span></span></div>
            <p>TST White House Ltd. ensures the highest quality edible oils, sourced directly from leading global farms and delivered fresh to kitchens across Bangladesh, preserving natural goodness in every drop.</p>
            <p style="margin-top:16px">Our diverse range includes palm oil, soybean oil, sunflower oil, olive oil, and canola oil, catering to various culinary needs in Bangladesh with a commitment to quality and excellence.</p>
            <div class="source-countries">
                <h5>Import Partners</h5>
                <div class="countries-list">
                    <?php $__currentLoopData = $sources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="country-badge">🌍 <?php echo e($country); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <div class="product-highlight-box fade-up" style="animation-delay:.15s">
            <div class="phb-stat"><span class="phb-num">32.9M L</span><span class="phb-lbl">Litres Traded</span></div>
            <div class="phb-stat"><span class="phb-num">5</span><span class="phb-lbl">Oil Varieties</span></div>
            <div class="phb-stat"><span class="phb-num">5</span><span class="phb-lbl">Source Countries</span></div>
            <div class="phb-stat"><span class="phb-num">100%</span><span class="phb-lbl">Quality Certified</span></div>
        </div>
    </div>
</section>

<section class="section section-gray">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Product Range</div>
            <h2 class="section-title">Our Edible Oil Varieties</h2>
        </div>
        <div class="variety-grid variety-grid--5 fade-up">
            <?php $__currentLoopData = $varieties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="variety-card">
                <div class="vc-circle"><?php echo e($v['icon']); ?></div>
                <h4><?php echo e($v['name']); ?></h4>
                <span class="vc-grade">Code: <?php echo e($v['code']); ?></span>
                <p><?php echo e($v['desc']); ?></p>
                <div class="vc-origin"><span>Origin:</span> <?php echo e($v['origin']); ?></div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Our Promise</div>
            <h2 class="section-title">Quality You Can Trust</h2>
        </div>
        <div class="promise-grid fade-up">
            <div class="promise-item"><div class="pi-icon">🌿</div><h5>Natural Sourcing</h5><p>Oils sourced directly from leading global farms, preserving natural goodness.</p></div>
            <div class="promise-item"><div class="pi-icon">🧪</div><h5>Lab Tested</h5><p>Every batch undergoes rigorous quality testing before shipment.</p></div>
            <div class="promise-item"><div class="pi-icon">🚢</div><h5>Fresh Delivery</h5><p>Cold-chain compliant logistics to maintain oil quality during transport.</p></div>
            <div class="promise-item"><div class="pi-icon">📋</div><h5>Certified Quality</h5><p>Full documentation including certificates of analysis provided.</p></div>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container cta-inner">
        <h2>Looking to source premium edible oils?</h2>
        <p>Contact us for pricing, volume availability, and supply agreements.</p>
        <a href="<?php echo e(route('contact')); ?>" class="btn btn-white">Get a Quote</a>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tst\resources\views/pages/products/oils.blade.php ENDPATH**/ ?>