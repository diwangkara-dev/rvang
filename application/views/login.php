<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <p>Account</p>
                    <p class="title is-2 mt-5 is-family-secondary has-text-primary">Log in to your account</p>
                    <p>
                        Don't have an account?
                        <a href="<?= base_url('welcome/sign_up'); ?>" class="has-text-primary has-text-weight-bold">
                            Create one <i class="fas fa-arrow-right"></i>
                        </a>
                    </p>
                </div>
                <div class="column">
                    <div class="field">
                        <div class="control">
                            <input type="email" class="input is-medium" placeholder="Email">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input type="password" class="input is-medium" placeholder="Password">
                        </div>
                    </div>
                    <div class="field">
                        <a href="<?= base_url('welcome/forgot_password'); ?>" class="has-text-primary has-text-weight-bold">Forgot your password?</a>
                    </div>
                    <div class="field">
                        <button class="button is-primary is-fullwidth is-medium">Sign In</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>