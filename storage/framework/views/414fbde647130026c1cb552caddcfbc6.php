<?php $__env->startSection('title', 'Quality Assurance'); ?>
<?php $__env->startSection('meta_desc', 'TST White House quality assurance protocols — ICUMSA analysis, polarization testing, microbial testing & full traceability systems.'); ?>

<?php $__env->startSection('content'); ?>

<?php if (isset($component)) { $__componentOriginala9d931d4f11b4d2850df99e991db1dca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d931d4f11b4d2850df99e991db1dca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-hero','data' => ['title' => 'Precision in Purity','subtitle' => 'Our Quality Assurance Protocols — ensuring excellence through vendor audits and continuous monitoring.','breadcrumb' => [['label'=>'Quality','url'=>route('quality')]]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('page-hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Precision in Purity','subtitle' => 'Our Quality Assurance Protocols — ensuring excellence through vendor audits and continuous monitoring.','breadcrumb' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([['label'=>'Quality','url'=>route('quality')]])]); ?>
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


<section class="section section-gray">
    <div class="container">
        <div class="standards-grid fade-up">
            <?php $__currentLoopData = $standards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="std-card">
                <div class="std-val"><?php echo e($s['metric']); ?></div>
                <div class="std-lbl"><?php echo e($s['label']); ?></div>
                <div class="std-sub"><?php echo e($s['sub']); ?></div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">QA Protocols</div>
            <h2 class="section-title">Our Quality Assurance Process</h2>
            <p class="section-desc">Every commodity we trade passes through our comprehensive quality assurance framework before reaching our clients.</p>
        </div>
        <div class="protocols-grid fade-up">
            <?php $__currentLoopData = $protocols; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="proto-card">
                <div class="proto-icon"><?php echo e($p['icon']); ?></div>
                <h4><?php echo e($p['title']); ?></h4>
                <p><?php echo e($p['desc']); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="section section-dark">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label" style="color:var(--orange)">Certifications</div>
            <h2 class="section-title" style="color:white">Legal &amp; Financial Certifications</h2>
            <p class="section-desc" style="color:rgba(255,255,255,.7)">TST White House holds all required legal registrations and financial certifications to operate as a trusted commodity trader in Bangladesh.</p>
        </div>
        <div class="cert-full-grid fade-up">
            <?php $__currentLoopData = $certifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="cert-full-card">
                <h4><?php echo e($c['name']); ?></h4>
                <p><?php echo e($c['body']); ?></p>
                <span class="cert-ref"><?php echo e($c['no']); ?></span>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="section">
    <div class="container two-col">
        <div class="fade-up">
            <div class="section-label">Our Commitment</div>
            <h2 class="section-title">Unmatched Quality — Every Shipment</h2>
            <p>At TST White House, quality is not an afterthought — it is the foundation of every transaction. Our rigorous standards ensure that every granule of sugar, every litre of oil, every metric ton of stone, and every batch of salt meets the highest industry standards.</p>
            <p style="margin-top:16px">We leverage strategic sourcing, rigorous quality control, and advanced logistics to ensure timely delivery and consistent quality across all our commodities. Our supply chain is built on a foundation of efficiency, transparency, and sustainability.</p>
        </div>
        <div class="qa-pillars fade-up" style="animation-delay:.15s">
            <div class="qap-item"><span class="qap-num">01</span><div><h5>Source Verification</h5><p>Every supplier audited and certified before partnership begins.</p></div></div>
            <div class="qap-item"><span class="qap-num">02</span><div><h5>Pre-Shipment Inspection</h5><p>Independent quality checks before goods leave the source country.</p></div></div>
            <div class="qap-item"><span class="qap-num">03</span><div><h5>Port-of-Entry Testing</h5><p>Additional checks upon arrival in Bangladesh.</p></div></div>
            <div class="qap-item"><span class="qap-num">04</span><div><h5>Delivery Certification</h5><p>Final quality certificate issued with every delivery.</p></div></div>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container cta-inner">
        <h2>Quality you can depend on</h2>
        <p>Partner with TST White House for commodity supply that meets the highest standards.</p>
        <a href="<?php echo e(route('contact')); ?>" class="btn btn-white">Contact Us</a>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tst\resources\views/pages/quality.blade.php ENDPATH**/ ?>