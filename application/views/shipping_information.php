<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column">
                <form>
                    <div class="field is-grouped mb-1">
                        <p class="control is-expanded">
                            <label class="label is-medium is-family-secondary has-text-primary">Contact Information</label>
                        </p>
                        <p class="control">
                            <small>Already have an account? <a href="<?= base_url('welcome/login'); ?>" class="has-text-primary has-text-weight-bold">Log In</a></small>
                        </p>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input class="input" type="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="field mb-5">
                        <div class="control">
                            <label class="checkbox">
                                <input type="checkbox">
                                Keep me up to date on news and exclusive offers via newsletter.
                            </label>
                        </div>
                    </div>
                    <div class="field mb-1">
                        <label class="label is-medium is-family-secondary has-text-primary">Shipping Address</label>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-body">
                            <div class="field">
                                <p class="control is-expanded">
                                    <input class="input" type="text" placeholder="First Name">
                                </p>
                            </div>
                            <div class="field">
                                <p class="control is-expanded">
                                    <input class="input" type="text" placeholder="Last Name">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input class="input" type="text" placeholder="Address">
                        </div>
                    </div>
                    <div class="field">
                        <div class="select is-fullwidth">
                            <select>
                                <option>Provinsi</option>
                                <option>Jawa Timur</option>
                                <option>Jawa Tengah</option>
                                <option>Jawa Barat</option>
                            </select>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-body">
                            <div class="field">
                                <p class="control is-expanded">
                                <div class="select is-fullwidth">
                                    <select>
                                        <option>Kota</option>
                                        <option>Malang</option>
                                        <option>Ponorogo</option>
                                        <option>Tuban</option>
                                    </select>
                                </div>
                                </p>
                            </div>
                            <div class="field">
                                <p class="control is-expanded">
                                    <input class="input" type="text" placeholder="Districts">
                                </p>
                            </div>
                            <div class="field">
                                <p class="control is-expanded">
                                    <input class="input" type="text" placeholder="ZIP Code">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input class="input" type="tel" placeholder="Phone">
                        </div>
                    </div>
                    <div class="field mb-5">
                        <div class="control">
                            <label class="checkbox">
                                <input type="checkbox">
                                Save &amp; Create Account
                            </label>
                        </div>
                    </div>
                    <div class="field mb-5">
                        <p class="help">*I agree to receive recurring automated marketing text messages (e.g. cart reminders) at the phone number provided. Consent is not a condition to purchase. Msg & data rates may apply. Msg frequency varies. Reply HELP for help and STOP to cancel. View our <strong>Terms of Service</strong> and <strong>Privacy Policy</strong>.</p>
                    </div>
                    <div class="field is-grouped">
                        <p class="control is-expanded">
                            <a href="#">&lt; Return to cart</a>
                        </p>
                        <p class="control">
                            <button class="button is-medium is-primary">Continue to Payment</button>
                        </p>
                    </div>
                </form>
            </div>
            <div class="column is-offset-1">
                <div class="columns is-vcentered">
                    <div class="column is-4">
                        <figure class="image is-128x128 has-ribbon">
                            <div class="ribbon is-primary br-2">
                                <span>1</span>
                            </div>
                            <img src="<?= base_url('assets/images/products/product-1.png'); ?>">
                        </figure>
                    </div>
                    <div class="column">
                        <p class="title is-5 has-text-primary is-family-secondary mb-2">Sukulen Echeveria</p>
                        <p class="has-text-primary">Rp. 45.000,-</p>
                        <p>(Concrete Pot, Mini, Cream)</p>
                    </div>
                </div>
                <hr>
                <div class="field is-grouped">
                    <div class="control is-expanded">
                        <input type="text" class="input is-medium" placeholder="Discount Code">
                    </div>
                    <div class="control">
                        <button class="button is-light is-medium">Apply</button>
                    </div>
                </div>
                <hr>
                <div class="field is-grouped">
                    <div class="control is-expanded">
                        <p class="has-text-primary">Subtotal</p>
                    </div>
                    <div class="control">
                        <p class="has-text-weight-medium has-text-primary">45.000</p>
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control is-expanded">
                        <p class="has-text-primary">Shipping</p>
                    </div>
                    <div class="control">
                        <p class="has-text-primary">Calculated at next step </p>
                    </div>
                </div>
                <hr>
                <div class="field is-grouped">
                    <div class="control is-expanded">
                        <p class="has-text-primary has-text-weight-bold">Total</p>
                    </div>
                    <div class="control">
                        <p class="has-text-primary has-text-weight-bold">45.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>