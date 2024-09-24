<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">LARAVEL11</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('home') ? 'active fw-semibold' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active fw-semibold' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active fw-semibold' : '' }}" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('blog') ? 'active fw-semibold' : '' }}" href="/blog">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>