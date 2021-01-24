$(document).ready(function() {
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

        // Cart Number
        $('.cart-number-minus').click(function() {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('.cart-number-plus').click(function() {
            var $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });
    });
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

        // Modal 
        const modals = document.querySelectorAll('.modal-trigger');
        modals.forEach((modal) => {
            modal.addEventListener('click', function(event) {
                event.preventDefault;
                let el = document.querySelector(modal.getAttribute('data-target'));
                el.classList.toggle('is-active');
            });
        });

    });