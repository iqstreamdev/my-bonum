<section class="partners">
    <div class="container">
        <h2>
            Our trusted Partners
        </h2>
        <div class="main-slider-wrapper">
            <div class="logos swiper main-slider"
                data-slider='{
                    "slidesPerView": 1,
                    "navigation": {
                        "nextEl": ".swiper-button-next",
                        "prevEl": ".swiper-button-prev"
                    },
                    "breakpoints": {
                        "0": {
                            "slidesPerView": 1,
                            "enabled": true,
                            "spaceBetween": 16
                        },
                        "768": {
                            "slidesPerView": "auto",
                            "enabled": false
                        }
                    }
                }'
            >
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?= get_template_directory_uri(); ?>/images/home/Faccm-logo.webp" alt="Partner Logo">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= get_template_directory_uri(); ?>/images/home/FCSA-logo.webp" alt="Partner Logo">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= get_template_directory_uri(); ?>/images/home/Tutorax-logo.webp" alt="Partner Logo">
                    </div>
                </div>
            </div>
            <div data-button="prev" class="swiper-button-prev"></div>
            <div data-button="next" class="swiper-button-next"></div>
        </div>
    </div>
</section>