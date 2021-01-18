<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a href="<?= base_url(); ?>">
            <img src="<?= base_url('assets/images/logo.png') ?>" class="ml-6">
        </a>


        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarTop">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarTop" class="navbar-menu">
        <div class="navbar-start is-justify-content-center is-flex-grow-1">
            <div class="navbar-item has-dropdown is-hoverable is-mega">
                <div class="navbar-link">
                    Shop
                </div>
                <div class="navbar-dropdown">
                    <div class="container is-fluid">
                        <div class="columns is-centered">
                            <div class="column">
                                <img src="https://bulma.io/images/placeholders/128x128.png" width="250">
                            </div>
                            <div class="column">
                                <h1 class="title is-6 is-mega-menu-title">Plants</h1>
                                <a class="navbar-item" href="<?= base_url('welcome/live_plant'); ?>">
                                    <div class="navbar-content">
                                        <p>Live Plants</p>
                                    </div>
                                </a>
                                <a class="navbar-item" href="#">
                                    <div class="navbar-content">
                                        <p>New Arrivals</p>
                                    </div>
                                </a>
                                <a class="navbar-item" href="#">
                                    <div class="navbar-content">
                                        <p>Best Sellers</p>
                                    </div>
                                </a>
                                <a class="navbar-item" href="#">
                                    <div class="navbar-content">
                                        <p>Pots & Accessories</p>
                                    </div>
                                </a>
                            </div>
                            <div class="column">
                                <h1 class="title is-6 is-mega-menu-title">Interior Product</h1>
                                <a class="navbar-item" href="#">
                                    <div class="navbar-content">
                                        <p>Live Plants</p>
                                    </div>
                                </a>
                                <a class="navbar-item" href="#">
                                    <div class="navbar-content">
                                        <p>New Arrivals</p>
                                    </div>
                                </a>
                                <a class="navbar-item" href="#">
                                    <div class="navbar-content">
                                        <p>Best Sellers</p>
                                    </div>
                                </a>
                            </div>
                            <div class="column">
                                <h1 class="title is-6 is-mega-menu-title">Plant Care &amp; Community</h1>
                                <a class="navbar-item" href="#">
                                    <div class="navbar-content">
                                        <p>Blog &amp; Resources</p>
                                    </div>
                                </a>
                            </div>
                            <div class="column">
                                <h1 class="title is-6 is-mega-menu-title">Shop All</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a class="navbar-item">
                Blog
            </a>

            <a class="navbar-item">
                About Us
            </a>
        </div>

        <div class="navbar-end mr-6">
            <a class="navbar-item">
                <span class="icon">
                    <i class="fas fa-search"></i>
                </span>
            </a>
            <a href="#" class="navbar-item">
                <span class="icon">
                    <i class="fas fa-user"></i>
                </span>
            </a>
            <a href="#" class="navbar-item">
                <span class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </span>
            </a>
        </div>
    </div>
</nav>