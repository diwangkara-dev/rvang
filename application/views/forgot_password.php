<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <p>Account</p>
                    <p class="title is-2 mt-5 is-family-secondary has-text-primary">Reset your password</p>
                    <p>
                        Don't have an account?
                        <a href="<?= base_url('welcome/sign_up'); ?>" class="has-text-primary has-text-weight-bold">
                            Create one <i class="fas fa-arrow-right"></i>
                        </a>
                    </p>
                </div>
                <div class="column">
                    <div class="field">
                        <label for="" class="label has-text-primary">Reset your password</label>
                        <div class="control">
                            <input type="email" class="input is-medium" placeholder="Enter Your Email">
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-primary is-medium">Submit</button>
                        </div>
                        <div class="control">
                            <a href="<?= base_url('welcome/login'); ?>" class="button is-white is-medium has-text-primary">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>