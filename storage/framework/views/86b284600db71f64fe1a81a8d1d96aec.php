<nav class="navbar" id="navbar">
    <div class="container navbar-inner">
        <a href="<?php echo e(route('home')); ?>" class="nav-logo">
            <div class="nav-logo-icon">
               <img src="https://tstwhitehouseltd.com/wp-content/uploads/2026/03/tst-logo-v2.png">
            </div>
            
        </a>

        <ul class="nav-links" id="navLinks">
            <li><a href="<?php echo e(route('home')); ?>" class="<?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">Home</a></li>
            <li><a href="<?php echo e(route('about')); ?>" class="<?php echo e(request()->routeIs('about') ? 'active' : ''); ?>">About</a></li>
            <li class="has-dropdown">
                <a href="<?php echo e(route('products')); ?>" class="<?php echo e(request()->routeIs('products*') ? 'active' : ''); ?>">
                    Products <span class="arrow">▾</span>
                </a>
                <ul class="dropdown">
                    <li><a href="<?php echo e(route('products.sugar')); ?>">🍬 Sugar</a></li>
                    <li><a href="<?php echo e(route('products.oils')); ?>">🫙 Edible Oils</a></li>
                    <li><a href="<?php echo e(route('products.lentils')); ?>">🌿 Lentils</a></li>
                    <li><a href="<?php echo e(route('products.salt')); ?>">🧂 Salt</a></li>
                    <li><a href="<?php echo e(route('products.construction')); ?>">🪨 Construction Materials</a></li>
                </ul>
            </li>
            <li><a href="<?php echo e(route('quality')); ?>" class="<?php echo e(request()->routeIs('quality') ? 'active' : ''); ?>">Quality</a></li>
            <li><a href="<?php echo e(route('partnership')); ?>" class="<?php echo e(request()->routeIs('partnership') ? 'active' : ''); ?>">Partnership</a></li>
            <li><a href="<?php echo e(route('contact')); ?>" class="<?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>">Contact</a></li>
        </ul>

        <a href="<?php echo e(route('contact')); ?>" class="btn-nav-cta">Get in Touch</a>

        <button class="hamburger" id="hamburger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\tst\resources\views/components/navbar.blade.php ENDPATH**/ ?>