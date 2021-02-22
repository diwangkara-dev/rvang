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
        <div class="navbar-end mr-6">
            <a href="<?= site_url('dashboard/role'); ?>" class="navbar-item">
                Role
            </a>
            <a href="<?= site_url('dashboard/productCategory'); ?>" class="navbar-item">
                Kategori Produk
            </a>
            <a href="<?= site_url('dashboard/product'); ?>" class="navbar-item">
                Produk
            </a>
            <a href="<?= site_url('dashboard/payment'); ?>" class="navbar-item">
                Pembayaran
            </a>
            <a href="<?= base_url('/auth/logout'); ?>" class="navbar-item">
                Keluar
            </a>
        </div>
    </div>
</nav>