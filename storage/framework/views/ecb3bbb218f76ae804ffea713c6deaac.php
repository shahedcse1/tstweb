<?php $__env->startSection('title', 'About Us'); ?>
<?php $__env->startSection('meta_desc', 'Learn about TST White House Ltd. — founded in 2023 in Dhaka, Bangladesh. Our story, mission, vision, values and milestones.'); ?>

<?php $__env->startSection('content'); ?>

<?php if (isset($component)) { $__componentOriginala9d931d4f11b4d2850df99e991db1dca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d931d4f11b4d2850df99e991db1dca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-hero','data' => ['title' => 'About TST White House','subtitle' => 'Bangladesh\'s trusted essential commodities and construction materials trading company.','breadcrumb' => [['label' => 'About Us', 'url' => route('about')]]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('page-hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'About TST White House','subtitle' => 'Bangladesh\'s trusted essential commodities and construction materials trading company.','breadcrumb' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([['label' => 'About Us', 'url' => route('about')]])]); ?>
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
            <div class="section-label">Who We Are</div>
            <h2 class="section-title">A Leading Trading Company in Bangladesh</h2>
            <div class="three-dots"><span></span><span></span><span></span></div>
            <p>TST White House Ltd., established in 2023, is a leading trading and real estate company headquartered in Dhaka, Bangladesh. Renowned for its commitment to quality and reliability, the company has rapidly become a significant player in the industry.</p>
            <p style="margin-top:16px">TST White House has substantial experience in commodity trading, having successfully managed the trade of 50,000 metric tons of lentils, 32,900,000 liters of soybean oil, 60,000 metric tons of sugar, and 20,000 metric tons of salt.</p>
            <p style="margin-top:16px">As direct importers of high-grade Dubai black stone (GABBRO), TST White House Ltd. has the capacity to supply up to 150,000 metric tons of stone per month. Their extensive portfolio also includes essential construction materials such as Bitumen imported from Dubai, Indian Pakur Stone, Local Sand, and Coal.</p>
        </div>
        <div class="about-stats-vert fade-up" style="animation-delay:.15s">
            <?php $__currentLoopData = $commodityStats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="asv-item">
                <span class="asv-icon"><?php echo e($s['icon']); ?></span>
                <span class="asv-val"><?php echo e($s['value']); ?></span>
                <span class="asv-lbl"><?php echo e($s['label']); ?></span>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="section section-gray">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Vision &amp; Mission</div>
            <h2 class="section-title">Our Direction &amp; Purpose</h2>
        </div>
        <div class="vm-grid fade-up">
            <div class="vm-card vm-card--vision">
                <div class="vm-icon">🎯</div>
                <h3>Vision</h3>
                <p>To lead the trading industry by delivering top-quality stone, coal, sand, and bitumen. We aim to set the standard for excellence, fostering growth through reliable supply and strong client partnerships, contributing to the infrastructure development of Bangladesh and beyond, with a focus on sustainability and innovation.</p>
            </div>
            <div class="vm-card vm-card--mission">
                <div class="vm-icon">🚀</div>
                <h3>Mission</h3>
                <p>Our mission is to supply premium construction materials — stone, coal, sand, and bitumen — ensuring consistent quality and reliability. We are dedicated to meeting the evolving needs of our clients with exceptional service and timely delivery. By embracing innovation and sustainable practices, we aim to build long-lasting partnerships and support the infrastructure development of Bangladesh and the broader region.</p>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Core Values</div>
            <h2 class="section-title">What Drives Us</h2>
        </div>
        <div class="values-grid fade-up">
            <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="value-card">
                <div class="vc-icon"><?php echo e($v['icon']); ?></div>
                <h4><?php echo e($v['title']); ?></h4>
                <p><?php echo e($v['desc']); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="section section-gray">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Our Journey</div>
            <h2 class="section-title">Key Milestones</h2>
        </div>
        <div class="timeline fade-up">
            <?php $__currentLoopData = $milestones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="timeline-item <?php echo e($i % 2 == 0 ? 'tl-left' : 'tl-right'); ?>">
                <div class="tl-year"><?php echo e($m['year']); ?></div>
                <div class="tl-dot"></div>
                <div class="tl-content">
                    <h4><?php echo e($m['title']); ?></h4>
                    <p><?php echo e($m['desc']); ?></p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Our Team</div>
            <h2 class="section-title">The People Behind TST</h2>
            <p class="section-desc">Our expert team of commodity traders, logistics specialists, and quality assurance professionals work together to deliver excellence.</p>
        </div>
        <div class="team-grid fade-up">
            <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="team-card">
                <div class="tc-icon"><?php echo e($t['icon']); ?></div>
                <h4><?php echo e($t['name']); ?></h4>
                <span class="tc-role"><?php echo e($t['role']); ?></span>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="section section-dark">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label" style="color:var(--orange)">Legal &amp; Financial</div>
            <h2 class="section-title" style="color:white">Company Incorporation &amp; Financials</h2>
        </div>
        <div class="cert-grid fade-up">
            <div class="cert-card">
                <div class="cert-icon">📜</div>
                <h4>Certificate of Incorporation</h4>
                <p>Incorporated under the Companies Act (Act XVIII of 1994)</p>
                <span class="cert-no">No. C-192161/2023 · 15 November 2023</span>
                <span class="cert-body">Registrar of Joint Stock Companies &amp; Firms, Bangladesh</span>
            </div>
            <div class="cert-card">
                <div class="cert-icon">🏦</div>
                <h4>NCC Bank — Financial Standing</h4>
                <p>Certified financially sound and solvent. Capable of handling large-scale work orders up to BDT 500 Crore.</p>
                <span class="cert-no">NCCB/BARI/CR/2024/543 · April 18, 2024</span>
                <span class="cert-body">National Credit and Commerce Bank PLC</span>
            </div>
            <div class="cert-card">
                <div class="cert-icon">💳</div>
                <h4>NCC Bank — Letter of Comfort</h4>
                <p>Credit facilities (LC &amp; Bank Guarantee) for supply/work orders up to BDT 500 Crore.</p>
                <span class="cert-no">NCCB/BARI/CR/2024/1076 · August 28, 2024</span>
                <span class="cert-body">National Credit and Commerce Bank PLC</span>
            </div>
            <div class="cert-card">
                <div class="cert-icon">🪪</div>
                <h4>Trade License</h4>
                <p>Registered trade license from Dhaka North City Corporation.</p>
                <span class="cert-no">TRAD/DNCC/029301/2023</span>
                <span class="cert-body">Dhaka North City Corporation (DNCC)</span>
            </div>
        </div>
    </div>
</section>


<section class="cta-banner">
    <div class="container cta-inner">
        <h2>Ready to work with us?</h2>
        <p>Explore our product range or get in touch for a custom supply agreement.</p>
        <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap">
            <a href="<?php echo e(route('products')); ?>" class="btn btn-white">Our Products</a>
            <a href="<?php echo e(route('contact')); ?>" class="btn btn-orange">Contact Us</a>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tst\resources\views/pages/about.blade.php ENDPATH**/ ?>