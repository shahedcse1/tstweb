<?php $__env->startSection('title', 'Contact Us'); ?>
<?php $__env->startSection('meta_desc', 'Contact TST White House Ltd. — H-12/A, Road-110, Gulshan 2, Dhaka. Phone: +88 01894 70 99 95. Email: info@tstwhitehouseltd.com'); ?>

<?php $__env->startSection('content'); ?>

<?php if (isset($component)) { $__componentOriginala9d931d4f11b4d2850df99e991db1dca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d931d4f11b4d2850df99e991db1dca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-hero','data' => ['title' => 'Contact Us','subtitle' => 'Get in touch for pricing, supply agreements, and partnership inquiries.','breadcrumb' => [['label'=>'Contact','url'=>route('contact')]]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('page-hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Contact Us','subtitle' => 'Get in touch for pricing, supply agreements, and partnership inquiries.','breadcrumb' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([['label'=>'Contact','url'=>route('contact')]])]); ?>
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


<?php if(session('success')): ?>
<div class="container" style="padding-top:32px">
    <div class="alert alert-success">
        ✅ <?php echo e(session('success')); ?>

    </div>
</div>
<?php endif; ?>

<section class="section">
    <div class="container contact-layout">

        
        <div class="contact-info-panel fade-up">
            <div class="section-label">Get in Touch</div>
            <h2 class="section-title">We'd Love to Hear From You</h2>
            <p style="color:var(--text-muted);margin-bottom:40px">Whether you're looking to source commodities, discuss a partnership, or have questions about our products — our team is ready to help.</p>

            <div class="contact-info-list">
                <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="cil-item">
                    <div class="cil-icon"><?php echo e($item['icon']); ?></div>
                    <div>
                        <h5><?php echo e($item['label']); ?></h5>
                        <?php if(isset($item['link'])): ?>
                            <p><a href="<?php echo e($item['link']); ?>"><?php echo e($item['value']); ?></a></p>
                        <?php else: ?>
                            <p><?php echo e($item['value']); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="working-hours">
                <h5>Working Hours</h5>
                <p>Sunday – Thursday: 9:00 AM – 6:00 PM (BST)</p>
                <p>Friday – Saturday: Closed</p>
            </div>
        </div>

        
        <div class="contact-form-panel fade-up" style="animation-delay:.15s">
            <h3>Send Us a Message</h3>
            <form action="<?php echo e(route('contact.submit')); ?>" method="POST" novalidate>
                <?php echo csrf_field(); ?>
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Full Name <span class="req">*</span></label>
                        <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>"
                               placeholder="Your full name" required
                               class="<?php echo e($errors->has('name') ? 'input-error' : ''); ?>">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="field-error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address <span class="req">*</span></label>
                        <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>"
                               placeholder="you@company.com" required
                               class="<?php echo e($errors->has('email') ? 'input-error' : ''); ?>">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="field-error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="company">Company / Organization</label>
                    <input type="text" id="company" name="company" value="<?php echo e(old('company')); ?>"
                           placeholder="Your company name (optional)">
                </div>
                <div class="form-group">
                    <label for="subject">Subject <span class="req">*</span></label>
                    <input type="text" id="subject" name="subject" value="<?php echo e(old('subject')); ?>"
                           placeholder="e.g. Sugar supply inquiry, partnership discussion"
                           class="<?php echo e($errors->has('subject') ? 'input-error' : ''); ?>">
                    <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="field-error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="product">Product Interest</label>
                    <select id="product" name="product">
                        <option value="">Select a product (optional)</option>
                        <option value="sugar" <?php echo e(old('product')=='sugar'?'selected':''); ?>>Sugar</option>
                        <option value="oils" <?php echo e(old('product')=='oils'?'selected':''); ?>>Edible Oils</option>
                        <option value="lentils" <?php echo e(old('product')=='lentils'?'selected':''); ?>>Lentils</option>
                        <option value="salt" <?php echo e(old('product')=='salt'?'selected':''); ?>>Salt</option>
                        <option value="stone" <?php echo e(old('product')=='stone'?'selected':''); ?>>Stone (GABBRO)</option>
                        <option value="coal" <?php echo e(old('product')=='coal'?'selected':''); ?>>Coal</option>
                        <option value="bitumen" <?php echo e(old('product')=='bitumen'?'selected':''); ?>>Bitumen</option>
                        <option value="sand" <?php echo e(old('product')=='sand'?'selected':''); ?>>Sand</option>
                        <option value="other" <?php echo e(old('product')=='other'?'selected':''); ?>>Other / General Inquiry</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message <span class="req">*</span></label>
                    <textarea id="message" name="message" rows="5"
                              placeholder="Tell us about your requirements — volumes, delivery location, timelines, etc."
                              class="<?php echo e($errors->has('message') ? 'input-error' : ''); ?>"><?php echo e(old('message')); ?></textarea>
                    <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="field-error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <button type="submit" class="btn btn-submit">
                    Send Message →
                </button>
            </form>
        </div>
    </div>
</section>


<section class="section section-gray">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Our Location</div>
            <h2 class="section-title">Corporate Office — Gulshan 2, Dhaka</h2>
        </div>
        <div class="map-embed fade-up">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.6!2d90.4168!3d23.7897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDQ3JzIyLjkiTiA5MMKwMjUnMDMuMiJF!5e0!3m2!1sen!2sbd!4v1"
                width="100%" height="420" style="border:0; border-radius:16px;"
                allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div class="map-address-card">
                <div class="mac-icon">📍</div>
                <div>
                    <strong>TST White House Ltd.</strong>
                    <p>H-12/A, Road-110, Gulshan 2</p>
                    <p>Dhaka-1212, Bangladesh</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tst\resources\views/pages/contact.blade.php ENDPATH**/ ?>