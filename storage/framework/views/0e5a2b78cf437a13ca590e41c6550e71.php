<?php $__env->startSection('title', 'Partnership — SKS Joint Venture'); ?>
<?php $__env->startSection('meta_desc', 'TST White House Ltd. Joint Venture with Sena Kalyan Sangstha (SKS) 2024 — revolutionizing Bangladesh commodity trading.'); ?>

<?php $__env->startSection('content'); ?>

<?php if (isset($component)) { $__componentOriginala9d931d4f11b4d2850df99e991db1dca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d931d4f11b4d2850df99e991db1dca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-hero','data' => ['title' => 'Strategic Partnership','subtitle' => 'TST White House × Sena Kalyan Sangstha — A landmark Joint Venture for Bangladesh\'s commodities future.','breadcrumb' => [['label'=>'Partnership','url'=>route('partnership')]]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('page-hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Strategic Partnership','subtitle' => 'TST White House × Sena Kalyan Sangstha — A landmark Joint Venture for Bangladesh\'s commodities future.','breadcrumb' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([['label'=>'Partnership','url'=>route('partnership')]])]); ?>
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
        <div class="jv-doc-large fade-up">
            <div class="jvdl-header">
                <div class="jvdl-seal">🤝</div>
                <div>
                    <h3>Certificate of Acknowledgement</h3>
                    <span class="jvdl-year">Joint Venture · 2024</span>
                </div>
            </div>
            <div class="jvdl-body">
                <p>This is to certify that <strong>Sena Kalyan Sangstha (SKS)</strong> is onboarding <strong>TST White House Limited</strong>, House: 12/A, Road-110, Gulshan-2, Dhaka-1212 as its Joint Venture (JV) partner in all kinds of commodities business across the country and to import commodities from abroad as SKS-TST (JV).</p>
                <p style="margin-top:16px">Sena Kalyan Sangstha and TST White House Limited will conduct the business through this Joint Venture agreement.</p>
            </div>
            <div class="jvdl-footer">
                <div class="jvdl-sig">
                    <div class="sig-line"></div>
                    <span>SKS Trading House</span>
                    <span class="sig-sub">Sena Kalyan Sangstha</span>
                </div>
                <div class="jvdl-sig">
                    <div class="sig-line"></div>
                    <span>TST White House Ltd.</span>
                    <span class="sig-sub">Authorized Signatory</span>
                </div>
            </div>
            <span class="jv-badge-pill">Officially Certified 2024</span>
        </div>
        <div class="fade-up" style="animation-delay:.15s">
            <div class="section-label">About the JV</div>
            <h2 class="section-title">Revolutionizing Bangladesh's Commodities Business</h2>
            <div class="three-dots"><span></span><span></span><span></span></div>
            <p>The SKS-TST Joint Venture (JV) unites <strong>Sena Kalyan Sangstha (SKS)</strong> and <strong>TST White House Limited</strong> to revolutionize Bangladesh's commodities business.</p>
            <p style="margin-top:16px">This partnership focuses on nationwide distribution and importing essential commodities, fostering economic growth and supply chain resilience. By combining SKS's institutional strength with TST's expertise, the JV aims to set new industry benchmarks, ensuring quality, efficiency, and global trade integration for a sustainable and prosperous future.</p>
            <div class="jv-partner-info">
                <div class="jpi-item">
                    <h5>SKS Address</h5>
                    <p><?php echo e($jvDetails['address']); ?></p>
                </div>
                <div class="jpi-item">
                    <h5>JV Focus</h5>
                    <p><?php echo e($jvDetails['focus']); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section section-gray">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">JV Advantages</div>
            <h2 class="section-title">Why This Partnership Works</h2>
        </div>
        <div class="benefits-full-grid fade-up">
            <?php $__currentLoopData = $benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bfg-card">
                <div class="bfg-icon"><?php echo e($b['icon']); ?></div>
                <h4><?php echo e($b['title']); ?></h4>
                <p><?php echo e($b['desc']); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Global Network</div>
            <h2 class="section-title">Our Import Partner Countries</h2>
            <p class="section-desc">TST White House sources commodities from a trusted network spanning 8 global regions.</p>
        </div>
        <div class="import-partners-grid fade-up">
            <?php $__currentLoopData = $importPartners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="ip-card">
                <h4><?php echo e($ip['region']); ?></h4>
                <div class="ip-countries">
                    <?php $__currentLoopData = $ip['countries']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="ip-country"><?php echo e($c); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <p class="ip-products"><?php echo e($ip['products']); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="section section-dark">
    <div class="container two-col">
        <div class="fade-up">
            <div class="section-label" style="color:var(--orange)">Financial Strength</div>
            <h2 class="section-title" style="color:white">Backed by NCC Bank</h2>
            <p style="color:rgba(255,255,255,.8); margin-bottom:20px">TST White House Ltd. maintains a well-conducted current account with National Credit and Commerce Bank PLC (NCC Bank) and has demonstrated significant financial capacity.</p>
            <ul class="fin-list">
                <li>Capable of completing/performing any kind of construction works and supply orders up to <strong>BDT 500 Crore</strong></li>
                <li>Credit facilities including LC &amp; Bank Guarantee available for large supply/work orders</li>
                <li>Certified financially sound and solvent by NCC Bank (April 2024)</li>
                <li>Letter of Comfort issued for credit line operations (August 2024)</li>
            </ul>
        </div>
        <div class="fin-card fade-up" style="animation-delay:.15s">
            <div class="fc-logo">🏦</div>
            <h4>NCC Bank PLC</h4>
            <p>National Credit and Commerce Bank</p>
            <div class="fc-stats">
                <div class="fc-stat"><span class="fcs-v">BDT 500 Cr</span><span class="fcs-l">Credit Capacity</span></div>
                <div class="fc-stat"><span class="fcs-v">LC &amp; BG</span><span class="fcs-l">Facilities Available</span></div>
            </div>
            <p class="fc-note">Baridhara Branch · Gulshan North Avenue · Dhaka-1212</p>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container cta-inner">
        <h2>Interested in a partnership with TST White House?</h2>
        <p>We welcome discussions about supply partnerships, joint ventures, and long-term commodity agreements.</p>
        <a href="<?php echo e(route('contact')); ?>" class="btn btn-white">Get in Touch</a>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tst\resources\views/pages/partnership.blade.php ENDPATH**/ ?>