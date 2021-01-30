<!-- Modal Search -->
<div id="search-modal" class="modal modal-fx-fadeInScale">
    <div class="modal-background" style="background-color: #354739;"></div>
    <div class="modal-content">
        <div class="field">
            <label class="label has-text-white">SEARCH</label>
            <div class="control">
                <input type="text" class="input is-size-2 is-family-secondary" placeholder="Find Here...">
            </div>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>

<!-- Modal Cart -->
<div class="modal modal-fx-fadeInScale modal-pos-bottom">
    <div class="modal-background"></div>
    <div class="modal-content">

        <hr>
        <figure class="image is-128x128">
            <img src="<?= base_url('assets/images/products/product-1.png'); ?>">
        </figure>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>

<div id="cart-modal" class="modal modal-fx-fadeInScale">
    <div class="modal-background"></div>
    <div class="modal-content modal-card">
        <section class="modal-card-body">
            <p class="title is-4 is-family-secondary has-text-primary">Cart (1)</p>
            <hr>
            <div class="columns">
                <div class="column is-4">
                    <figure class="image is-128x128">
                        <img src="<?= base_url('assets/images/products/product-1.png'); ?>">
                    </figure>
                </div>
                <div class="column">
                    <p class="title is-5">Sukulen Echeveria</p>
                    <p class="subtitle mb-2">Rp. 45.000,-</p>
                    <small>(Concrete Pot, Mini, Cream)</small>
                    <div class="field is-grouped mt-2">
                        <div class="control">
                            <div class="cart-number">
                                <span class="cart-number-minus">-</span>
                                <input type="text" readonly class="cart-number-input" value="1" />
                                <span class="cart-number-plus">+</span>
                            </div>
                        </div>
                        <div class="control">
                            <a href="#" class="button is-white">Remove</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="columns mb-5">
                <div class="column is-4">
                    <p class="title is-4 is-family-secondary has-text-primary">Is This a Gift?</p>
                </div>
                <div class="column">
                    <div class="field">
                        <input class="is-checkradio" id="isGift" type="checkbox" name="isGift">
                        <label for="isGift">Yes, include my gift note below</label>
                    </div>
                </div>
            </div>
            <p class="title is-4 is-family-secondary has-text-primary">Need a little more?</p>
            <div class="columns is-multiline">
                <div class="column is-half">
                    <figure class="image is-square">
                        <img src="<?= base_url('assets/images/products/product-2.png'); ?>">
                    </figure>
                    <p class="title is-5 has-text-primary mt-3">Cactus Mammilaria</p>
                    <p class="subtitle is-6 has-text-primary">Rp. 45.000,-</p>
                    <button class="button is-primary is-outlined is-fullwidth">Add To Cart</button>
                </div>
                <div class="column is-half">
                    <figure class="image is-square">
                        <img src="<?= base_url('assets/images/products/product-2.png'); ?>">
                    </figure>
                    <p class="title is-5 has-text-primary mt-3">Cactus Mammilaria</p>
                    <p class="subtitle is-6 has-text-primary">Rp. 45.000,-</p>
                    <button class="button is-primary is-outlined is-fullwidth">Add To Cart</button>
                </div>
                <div class="column is-half">
                    <figure class="image is-square">
                        <img src="<?= base_url('assets/images/products/product-2.png'); ?>">
                    </figure>
                    <p class="title is-5 has-text-primary mt-3">Cactus Mammilaria</p>
                    <p class="subtitle is-6 has-text-primary">Rp. 45.000,-</p>
                    <button class="button is-primary is-outlined is-fullwidth">Add To Cart</button>
                </div>
                <div class="column is-half">
                    <figure class="image is-square">
                        <img src="<?= base_url('assets/images/products/product-2.png'); ?>">
                    </figure>
                    <p class="title is-5 has-text-primary mt-3">Cactus Mammilaria</p>
                    <p class="subtitle is-6 has-text-primary">Rp. 45.000,-</p>
                    <button class="button is-primary is-outlined is-fullwidth">Add To Cart</button>
                </div>
            </div>
            <hr>
            <p class="title is-5 has-text-primary mb-3">Subtotal : 45.000</p>
            <a href="<?= base_url('welcome/shipping_information'); ?>" class="button is-primary is-fullwidth has-text-weight-medium">Checkout</a>
            <p class="help">Shipping and taxes calculated at checkout.</p>
        </section>
    </div>
</div>