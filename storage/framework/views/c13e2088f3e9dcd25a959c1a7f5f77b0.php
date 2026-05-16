<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <div class="footer-logo">
                    <span class="logo-tst">TST</span> WHITE HOUSE
                </div>
                <p class="footer-tagline">Essential Commodities Trading &amp; Industrial Construction Materials</p>
                <p class="footer-copy">© <?php echo e(date('Y')); ?> TST White House Ltd. All rights reserved.</p>
                <div class="footer-reg">
                    <span>Inc. No: C-192161/2023</span>
                    <span>TIN: 716874504619</span>
                </div>
            </div>

            <div class="footer-col">
                <h4>Products</h4>
                <ul>
                    <li><a href="<?php echo e(route('products.sugar')); ?>">Sugar</a></li>
                    <li><a href="<?php echo e(route('products.oils')); ?>">Edible Oils</a></li>
                    <li><a href="<?php echo e(route('products.lentils')); ?>">Lentils</a></li>
                    <li><a href="<?php echo e(route('products.salt')); ?>">Salt</a></li>
                    <li><a href="<?php echo e(route('products.construction')); ?>">Construction Materials</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Company</h4>
                <ul>
                    <li><a href="<?php echo e(route('about')); ?>">About Us</a></li>
                    <li><a href="<?php echo e(route('quality')); ?>">Quality Assurance</a></li>
                    <li><a href="<?php echo e(route('partnership')); ?>">SKS Partnership</a></li>
                    <li><a href="<?php echo e(route('contact')); ?>">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Contact</h4>
                <ul class="footer-contact">
                    <li>
                        <span class="fc-icon">📍</span>
                        H-12/A, Road-110, Gulshan 2, Dhaka-1212
                    </li>
                    <li>
                        <span class="fc-icon">📞</span>
                        <a href="tel:+8801894709995">+88 01894 70 99 95</a>
                    </li>
                    <li>
                        <span class="fc-icon">✉️</span>
                        <a href="mailto:info@tstwhitehouseltd.com">info@tstwhitehouseltd.com</a>
                    </li>
                    <li>
                        <span class="fc-icon">🌐</span>
                        <a href="https://www.tstwhitehouseltd.com" target="_blank">tstwhitehouseltd.com</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>TST White House Ltd. — Powered by excellence, integrity &amp; sustainable trade.</p>
            <div class="footer-bottom-links">
                <a href="<?php echo e(route('home')); ?>">Home</a>
                <a href="<?php echo e(route('about')); ?>">About</a>
                <a href="<?php echo e(route('products')); ?>">Products</a>
                <a href="<?php echo e(route('contact')); ?>">Contact</a>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\xampp\htdocs\tst\resources\views/components/footer.blade.php ENDPATH**/ ?>