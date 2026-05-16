<nav class="navbar" id="navbar">
    <div class="container navbar-inner">
        <a href="{{ route('home') }}" class="nav-logo">
            <div class="nav-logo-icon">
               <img src="https://tstwhitehouseltd.com/wp-content/uploads/2026/03/tst-logo-v2.png">
            </div>
            
        </a>

        <ul class="nav-links" id="navLinks">
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
            <li class="has-dropdown">
                <a href="{{ route('products') }}" class="{{ request()->routeIs('products*') ? 'active' : '' }}">
                    Products <span class="arrow">▾</span>
                </a>
                <ul class="dropdown">
                    <li><a href="{{ route('products.sugar') }}">🍬 Sugar</a></li>
                    <li><a href="{{ route('products.oils') }}">🫙 Edible Oils</a></li>
                    <li><a href="{{ route('products.lentils') }}">🌿 Lentils</a></li>
                    <li><a href="{{ route('products.salt') }}">🧂 Salt</a></li>
                    <li><a href="{{ route('products.construction') }}">🪨 Construction Materials</a></li>
                </ul>
            </li>
            <li><a href="{{ route('quality') }}" class="{{ request()->routeIs('quality') ? 'active' : '' }}">Quality</a></li>
            <li><a href="{{ route('partnership') }}" class="{{ request()->routeIs('partnership') ? 'active' : '' }}">Partnership</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>

        <a href="{{ route('contact') }}" class="btn-nav-cta">Get in Touch</a>

        <button class="hamburger" id="hamburger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>
