<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <p>Register</p>
                    <p class="title is-2 mt-5 is-family-secondary has-text-primary">Create your account</p>
                    <p>
                        Do you already have an account?
                        <a href="<?= base_url('welcome/login'); ?>" class="has-text-primary has-text-weight-bold">
                            Log In <i class="fas fa-arrow-right"></i>
                        </a>
                    </p>
                </div>
                <div class="column">
                    <div class="field">
                        <div class="control">
                            <input type="text" class="input is-medium" placeholder="First Name">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input type="text" class="input is-medium" placeholder="Last Name">
                        </div>
                    </div>
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
                        <button class="button is-primary is-fullwidth is-medium">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>