<?php $__env->startSection('title', 'Sugar Trading'); ?>
<?php $__env->startSection('meta_desc', 'TST White House imports premium sugar — refined, brown, raw & organic — from Brazil, Thailand, India, Australia, South Africa & Guatemala.'); ?>

<?php $__env->startSection('content'); ?>

<?php if (isset($component)) { $__componentOriginala9d931d4f11b4d2850df99e991db1dca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d931d4f11b4d2850df99e991db1dca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-hero','data' => ['title' => 'Sugar Trading Expertise','subtitle' => 'Premium refined, raw, brown & organic sugar from world-class producers worldwide.','breadcrumb' => [['label'=>'Products','url'=>route('products')],['label'=>'Sugar','url'=>route('products.sugar')]]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('page-hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Sugar Trading Expertise','subtitle' => 'Premium refined, raw, brown & organic sugar from world-class producers worldwide.','breadcrumb' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([['label'=>'Products','url'=>route('products')],['label'=>'Sugar','url'=>route('products.sugar')]])]); ?>
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
            <div class="section-label">Sugar Overview</div>
            <h2 class="section-title">Sweet Selections: Our Range of Premium Sugars</h2>
            <div class="three-dots"><span></span><span></span><span></span></div>
            <p>TST White House has established itself as a reliable and proficient trader of sugar in Bangladesh. With a commitment to quality and customer satisfaction, we have developed strong relationships with both domestic and international suppliers, ensuring a consistent supply of premium sugar to meet the demands of our clients.</p>
            <p style="margin-top:16px">TST White House imports high-quality sugar from top producers worldwide, including Brazil, Thailand, India, Australia, South Africa, and Guatemala, ensuring a diverse supply of refined, organic, raw, and specialty sugars for the Bangladeshi market.</p>

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
            <div class="phb-stat"><span class="phb-num">60,000 MT</span><span class="phb-lbl">Total Sugar Traded</span></div>
            <div class="phb-stat"><span class="phb-num">6</span><span class="phb-lbl">Source Countries</span></div>
            <div class="phb-stat"><span class="phb-num">4</span><span class="phb-lbl">Sugar Varieties</span></div>
            <div class="phb-stat"><span class="phb-num">ICUMSA 45</span><span class="phb-lbl">Highest Grade Available</span></div>
        </div>
    </div>
</section>


<section class="section section-gray">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Product Range</div>
            <h2 class="section-title">Our Sugar Varieties</h2>
        </div>
        <div class="variety-grid fade-up">
            <?php $__currentLoopData = $varieties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="variety-card">
                <div class="vc-circle"><?php echo e($v['icon']); ?></div>
                <h4><?php echo e($v['name']); ?></h4>
                <span class="vc-grade"><?php echo e($v['grade']); ?></span>
                <p><?php echo e($v['desc']); ?></p>
                <div class="vc-origin"><span>Origin:</span> <?php echo e($v['origin']); ?></div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="section section-dark">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label" style="color:var(--orange)">Quality Assurance</div>
            <h2 class="section-title" style="color:white">Precision in Purity</h2>
            <p class="section-desc" style="color:rgba(255,255,255,.7)">Ensuring Quality through Vendor Audits and Monitoring</p>
        </div>
        <div class="qa-protocols-grid fade-up">
            <?php $__currentLoopData = $qa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="qa-proto-item">
                <div class="qap-check">✓</div>
                <span><?php echo e($item); ?></span>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="unmatched-box fade-up">
            <div class="ub-icon">🏆</div>
            <h3>Unmatched Quality</h3>
            <p>We ensure that every granule meets the highest standards of purity and taste. Our rigorous testing protocols and traceability systems guarantee that what reaches your facility matches our promises exactly.</p>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container cta-inner">
        <h2>Looking to source premium sugar?</h2>
        <p>Contact us for pricing, volume availability, and custom supply agreements.</p>
        <a href="<?php echo e(route('contact')); ?>" class="btn btn-white">Get a Quote</a>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tst\resources\views/pages/products/sugar.blade.php ENDPATH**/ ?>