<footer class="footer pb-6 has-background-primary">
    <div class="container">
        <div class="columns is-mobile is-vcentered">
            <div class="column">
                <p class="has-text-white">
                    Copyright &copy;
                    <span id="copyright">
                        <script>
                            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()));
                        </script>
                    </span>
                    Rvang Hidup, Inc.
                </p>
            </div>
            <div class="column">
                <div class="is-pulled-right">
                    <div class="columns is-vcentered">
                        <div class="column py-0">
                            <figure class="image is-32x32">
                                <img src="https://cdn.countryflags.com/thumbs/indonesia/flag-button-round-250.png">
                            </figure>
                        </div>
                        <div class="column py-0"><span class="has-text-white">Indonesia</span></div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-3">
        <div class="columns is-mobile is-vcentered">
            <div class="column">
                <p>
                    <a href="#" class="has-text-white mr-1">Terms of Use</a>
                    <a href="#" class="has-text-white mr-1">Privacy Policy</a>
                    <a href="#" class="has-text-white mr-1">FAQ</a>
                    <a href="#" class="has-text-white">Feedback</a>
                </p>
            </div>
            <div class="column">
                <div class="is-pulled-right">
                    <p>
                        <a href="#" class="has-text-white mr-1">
                            <span class="icon">
                                <i class="fab fa-instagram"></i>
                            </span>
                        </a>
                        <a href="#" class="has-text-white mr-1">
                            <span class="icon">
                                <i class="fab fa-whatsapp"></i>
                            </span>
                        </a>
                        <a href="#" class="has-text-white mr-1">
                            <span class="icon">
                                <i class="fab fa-twitter"></i>
                            </span>
                        </a>
                        <a href="#" class="has-text-white">
                            <span class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    // Carousel Script
    $('#homepage-best-seller').slick({
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    $('#homepage-your-space').slick({
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    $('#live-plant-hero').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 600,
                settings: {
                    arrows: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false
                }
            }
        ]
    });

    $('#interior-product-hero').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 600,
                settings: {
                    arrows: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false
                }
            }
        ]
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {

        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Navbar
        if ($navbarBurgers.length > 0) {
            $navbarBurgers.forEach(el => {
                el.addEventListener('click', () => {
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');
                });
            });
        }

        // Dropdown
        const dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach((dropdown) => {
            dropdown.addEventListener('click', function(event) {
                event.stopPropagation();
                dropdown.classList.toggle('is-active');
                console.log(dropdown);
            });
        });


    });
</script>
</body>

</html>