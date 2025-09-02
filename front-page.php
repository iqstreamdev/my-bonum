<?php
/*
Template Name: Home page
*/
?>

<?php get_header(); ?>
    <?php get_template_part('templates/widgets/hero-section'); ?>
    <?php get_template_part('templates/widgets/partners'); ?>
    <!-- <div class="test">
        <div class="container">
            <div class="swiper main-slider" data-slider='{
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "navigation": {
                        "nextEl": ".swiper-button-next",
                        "prevEl": ".swiper-button-prev"
                    },
                    "breakpoints": {
                        "0": {
                            "slidesPerView": 1,
                            "enabled": true
                        },
                        "768": {
                            "slidesPerView": 2,
                            "enabled": false
                        }
                    }
                }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                </div>

                .buttons
                    a.button
                        span.button-text
                        span.button-icon

    section.testimonials
        .container
            .testimonials-content
                h2.title
                .testimonials-list
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div> -->
<?php get_footer(); ?>
