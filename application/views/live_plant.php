<section class="section pb-0 px-0 mb-0">
    <div class="slick-carousel" id="live-plant-hero">
        <img src="<?= base_url('assets/images/live-plant/bg-hero-live-plant.png'); ?>" alt="Placeholder image">

        <img src="<?= base_url('assets/images/live-plant/bg-hero-live-plant.png'); ?>" alt="Placeholder image">

        <img src="<?= base_url('assets/images/live-plant/bg-hero-live-plant.png'); ?>" alt="Placeholder image">

        <img src="<?= base_url('assets/images/live-plant/bg-hero-live-plant.png'); ?>" alt="Placeholder image">
    </div>
</section>
<section class="section has-background-grey-lighter">
    <div class="container">
        <div class="columns">
            <div class="column is-1">
                <p class="pt-1">
                    Filter By
                </p>
            </div>
            <div class="column is-2">
                <div class="dropdown">
                    <div class="dropdown-trigger">
                        <a class="is-size-5 has-text-primary" aria-haspopup="true" aria-controls="dropdown-menu">
                            <span>
                                <strong class="has-text-primary">Features</strong>
                            </span>
                            <span class="icon">
                                <i class="fas fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </a>
                    </div>
                    <div class="dropdown-menu" id="dropdown-feature" role="menu">
                        <div class="dropdown-content">
                            <strong class="dropdown-item">Style</strong>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterBlooming" type="checkbox" name="filterBlooming">
                                    <label for="filterBlooming">Blooming</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterPatterned" type="checkbox" name="filterPatterned">
                                    <label for="filterPatterned">Patterned</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterTrending" type="checkbox" name="filterTrending">
                                    <label for="filterTrending">Trending</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterCascading" type="checkbox" name="filterCascading">
                                    <label for="filterCascading">Cascading</label>
                                </div>
                            </div>
                            <hr class="dropdown-divider">
                            <strong class="dropdown-item">Light</strong>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterLowLight" type="checkbox" name="filterLowLight">
                                    <label for="filterLowLight">Low Light</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterBrightLight" type="checkbox" name="filterBrightLight">
                                    <label for="filterBrightLight">Bright Light</label>
                                </div>
                            </div>
                            <hr class="dropdown-divider">
                            <strong class="dropdown-item">Maintenance</strong>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterLow" type="checkbox" name="filterLow">
                                    <label for="filterLow">Low</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterMedium" type="checkbox" name="filterMedium">
                                    <label for="filterMedium">Medium</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterHigh" type="checkbox" name="filterHigh">
                                    <label for="filterHigh">High</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-2">
                <div class="dropdown">
                    <div class="dropdown-trigger">
                        <a class="is-size-5 has-text-primary" aria-haspopup="true" aria-controls="dropdown-menu">
                            <span>
                                <strong class="has-text-primary">Variety</strong>
                            </span>
                            <span class="icon">
                                <i class="fas fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </a>
                    </div>
                    <div class="dropdown-menu" id="dropdown-variety" role="menu">
                        <div class="dropdown-content">
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterAirPlant" type="checkbox" name="filterAirPlant">
                                    <label for="filterAirPlant">Air Plant</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterCalathea" type="checkbox" name="filterCalathea">
                                    <label for="filterCalathea">Calathea</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterFern" type="checkbox" name="filterFern">
                                    <label for="filterFern">Fern</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterFiddleLeaf" type="checkbox" name="filterFiddleLeaf">
                                    <label for="filterFiddleLeaf">Fiddle Leaf</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterMarimo" type="checkbox" name="filterMarimo">
                                    <label for="filterMarimo">Marimo</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterMonstera" type="checkbox" name="filterMonstera">
                                    <label for="filterMonstera">Monstera</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterMoneyTree" type="checkbox" name="filterMoneyTree">
                                    <label for="filterMoneyTree">Money Tree</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterParlorPalm" type="checkbox" name="filterParlorPalm">
                                    <label for="filterParlorPalm">Parlor Palm</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterPeperomia" type="checkbox" name="filterPeperomia">
                                    <label for="filterPeperomia">Peperomia</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterPhilodendron" type="checkbox" name="filterPhilodendron">
                                    <label for="filterPhilodendron">Philodendron</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterPhilea" type="checkbox" name="filterPhilea">
                                    <label for="filterPhilea">Philea</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterSucculent" type="checkbox" name="filterSucculent">
                                    <label for="filterSucculent">Succulent</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-2">
                <div class="dropdown">
                    <div class="dropdown-trigger">
                        <a class="is-size-5 has-text-primary" aria-haspopup="true" aria-controls="dropdown-menu">
                            <span>
                                <strong class="has-text-primary">Size</strong>
                            </span>
                            <span class="icon">
                                <i class="fas fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </a>
                    </div>
                    <div class="dropdown-menu" id="dropdown-variety" role="menu">
                        <div class="dropdown-content">
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterMini" type="checkbox" name="filterMini">
                                    <label for="filterMini">Mini 2.5”</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterXSmall" type="checkbox" name="filterXSmall">
                                    <label for="filterXSmall">X-Small 4”</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterSmall" type="checkbox" name="filterSmall">
                                    <label for="filterSmall">Small 5”</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterMedium" type="checkbox" name="filterMedium">
                                    <label for="filterMedium">Medium 7”</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="field">
                                    <input class="is-checkradio" id="filterLarge" type="checkbox" name="filterLarge">
                                    <label for="filterLarge">Large 12”</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <p class="pt-1 is-pulled-right">
                    <a href="#" class="has-text-primary">Clear All Filters</a>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column is-4">
                <figure class="image is-square">
                    <img class="br-3" src="<?= base_url('assets/images/products/product-1.png'); ?>">
                </figure>
                <p class="title is-4 mt-3 mb-2 has-text-primary">
                    Sukulen Echeveria
                </p>
                <p class="has-text-primary">
                    Rp. 45.000,-
                </p>
            </div>
            <div class="column is-4">
                <figure class="image is-square has-ribbon">
                    <div class="ribbon is-primary is-medium br-2">
                        <span class="icon-text">
                            <span class="icon">
                                <i class="fas fa-star"></i>
                            </span>
                            <span>Best Product</span>
                        </span>
                    </div>
                    <img class="br-3" src="<?= base_url('assets/images/products/product-2.png'); ?>">
                </figure>
                <p class="title is-4 mt-3 mb-2 has-text-primary">
                    Pilea Peperomioidas
                </p>
                <p class="has-text-primary">
                    Rp. 45.000,-
                </p>
            </div>
            <div class="column is-4">
                <figure class="image is-square">
                    <img class="br-3" src="<?= base_url('assets/images/products/product-3.png'); ?>">
                </figure>
                <p class="title is-4 mt-3 mb-2 has-text-primary">
                    Haworthia Fasciata
                </p>
                <p class="has-text-primary">
                    Rp. 45.000,-
                </p>
            </div>
            <div class="column is-4">
                <figure class="image is-square has-ribbon">
                    <div class="ribbon is-primary is-medium br-2">
                        <span class="icon-text">
                            <span class="icon">
                                <i class="fas fa-star"></i>
                            </span>
                            <span>Best Product</span>
                        </span>
                    </div>
                    <img class="br-3" src="<?= base_url('assets/images/products/product-4.png'); ?>">
                </figure>
                <p class="title is-4 mt-3 mb-2 has-text-primary">
                    Cactus Mammilaria
                </p>
                <p class="has-text-primary">
                    Rp. 45.000,-
                </p>
            </div>
            <div class="column is-4">
                <figure class="image is-square">
                    <img class="br-3" src="<?= base_url('assets/images/products/product-5.png'); ?>">
                </figure>
                <p class="title is-4 mt-3 mb-2 has-text-primary">
                    Pilea Peperomioidas
                </p>
                <p class="has-text-primary">
                    Rp. 45.000,-
                </p>
            </div>
            <div class="column is-4">
                <figure class="image is-square">
                    <img class="br-3" src="<?= base_url('assets/images/products/product-6.png'); ?>">
                </figure>
                <p class="title is-4 mt-3 mb-2 has-text-primary">
                    Haworthia Varigata
                </p>
                <p class="has-text-primary">
                    Rp. 130.000,-
                </p>
            </div>
            <div class="column is-4">
                <figure class="image is-square">
                    <img class="br-3" src="<?= base_url('assets/images/products/product-7.png'); ?>">
                </figure>
                <p class="title is-4 mt-3 mb-2 has-text-primary">
                    Sukulen Echeveria
                </p>
                <p class="has-text-primary">
                    Rp. 45.000,-
                </p>
            </div>
            <div class="column is-4">
                <figure class="image is-square has-ribbon">
                    <div class="ribbon is-primary is-medium br-2">
                        <span class="icon-text">
                            <span class="icon">
                                <i class="fas fa-star"></i>
                            </span>
                            <span>Best Product</span>
                        </span>
                    </div>
                    <img class="br-3" src="<?= base_url('assets/images/products/product-8.png'); ?>">
                </figure>
                <p class="title is-4 mt-3 mb-2 has-text-primary">
                    Pilea Peperomioidas
                </p>
                <p class="has-text-primary">
                    Rp. 45.000,-
                </p>
            </div>
            <div class="column is-4">
                <figure class="image is-square">
                    <img class="br-3" src="<?= base_url('assets/images/products/product-9.png'); ?>">
                </figure>
                <p class="title is-4 mt-3 mb-2 has-text-primary">
                    Haworthia Fasciata
                </p>
                <p class="has-text-primary">
                    Rp. 45.000,-
                </p>
            </div>
        </div>
        <div class="columns is-vcentered my-6">
            <div class="column">
                <p class="title is-2 mb-3 has-text-primary is-family-secondary">Pilea Peperomioidas</p>
                <p class="has-text-primary mb-4">
                    Having a superficial resemblance to pennyworts and growing 30 cm (12 in) tall and wide, it is an erect, evergreen perennial, with round, dark green, peltate leaves up to 10 cm (4 in) in diameter on a long petiole. The stem axis is greenish to dark brown, usually simple, often upright straight, slightly lignified at the base.
                </p>
                <a href="#" class="button is-primary has-text-weight-medium is-medium">
                    More Info
                </a>
            </div>
            <div class="column">
                <figure class="image is-square">
                    <img class="br-3" src="<?= base_url('assets/images/live-plant/image-1.png'); ?>">
                </figure>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-4">
                <figure class="image is-square">
                    <img class="br-3" src="<?= base_url('assets/images/products/product-1.png'); ?>">
                </figure>
                <p class="title is-4 mt-3 mb-2 has-text-primary">
                    Sukulen Echeveria
                </p>
                <p class="has-text-primary">
                    Rp. 45.000,-
                </p>
            </div>
            <div class="column is-4">
                <figure class="image is-square has-ribbon">
                    <div class="ribbon is-primary is-medium br-2">
                        <span class="icon-text">
                            <span class="icon">
                                <i class="fas fa-star"></i>
                            </span>
                            <span>Best Product</span>
                        </span>
                    </div>
                    <img class="br-3" src="<?= base_url('assets/images/products/product-2.png'); ?>">
                </figure>
                <p class="title is-4 mt-3 mb-2 has-text-primary">
                    Pilea Peperomioidas
                </p>
                <p class="has-text-primary">
                    Rp. 45.000,-
                </p>
            </div>
            <div class="column is-4">
                <figure class="image is-square">
                    <img class="br-3" src="<?= base_url('assets/images/products/product-3.png'); ?>">
                </figure>
                <p class="title is-4 mt-3 mb-2 has-text-primary">
                    Haworthia Fasciata
                </p>
                <p class="has-text-primary">
                    Rp. 45.000,-
                </p>
            </div>
            <div class="column is-4">
                <figure class="image is-square has-ribbon">
                    <div class="ribbon is-primary is-medium br-2">
                        <span class="icon-text">
                            <span class="icon">
                                <i class="fas fa-star"></i>
                            </span>
                            <span>Best Product</span>
                        </span>
                    </div>
                    <img class="br-3" src="<?= base_url('assets/images/products/product-4.png'); ?>">
                </figure>
                <p class="title is-4 mt-3 mb-2 has-text-primary">
                    Cactus Mammilaria
                </p>
                <p class="has-text-primary">
                    Rp. 45.000,-
                </p>
            </div>
            <div class="column is-4">
                <figure class="image is-square">
                    <img class="br-3" src="<?= base_url('assets/images/products/product-5.png'); ?>">
                </figure>
                <p class="title is-4 mt-3 mb-2 has-text-primary">
                    Pilea Peperomioidas
                </p>
                <p class="has-text-primary">
                    Rp. 45.000,-
                </p>
            </div>
            <div class="column is-4">
                <figure class="image is-square">
                    <img class="br-3" src="<?= base_url('assets/images/products/product-6.png'); ?>">
                </figure>
                <p class="title is-4 mt-3 mb-2 has-text-primary">
                    Haworthia Varigata
                </p>
                <p class="has-text-primary">
                    Rp. 130.000,-
                </p>
            </div>
            <div class="column is-4">
                <figure class="image is-square">
                    <img class="br-3" src="<?= base_url('assets/images/products/product-7.png'); ?>">
                </figure>
                <p class="title is-4 mt-3 mb-2 has-text-primary">
                    Sukulen Echeveria
                </p>
                <p class="has-text-primary">
                    Rp. 45.000,-
                </p>
            </div>
            <div class="column is-4">
                <figure class="image is-square has-ribbon">
                    <div class="ribbon is-primary is-medium br-2">
                        <span class="icon-text">
                            <span class="icon">
                                <i class="fas fa-star"></i>
                            </span>
                            <span>Best Product</span>
                        </span>
                    </div>
                    <img class="br-3" src="<?= base_url('assets/images/products/product-8.png'); ?>">
                </figure>
                <p class="title is-4 mt-3 mb-2 has-text-primary">
                    Pilea Peperomioidas
                </p>
                <p class="has-text-primary">
                    Rp. 45.000,-
                </p>
            </div>
            <div class="column is-4">
                <figure class="image is-square">
                    <img class="br-3" src="<?= base_url('assets/images/products/product-9.png'); ?>">
                </figure>
                <p class="title is-4 mt-3 mb-2 has-text-primary">
                    Haworthia Fasciata
                </p>
                <p class="has-text-primary">
                    Rp. 45.000,-
                </p>
            </div>
        </div>
    </div>
</section>