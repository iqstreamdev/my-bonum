<section class="features-section">
    <div class="container">
        <h2>
            Features
        </h2>
        <div class="main-slider-wrapper">
            <div class="features-slider swiper main-slider"
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
                        "576": {
                            "slidesPerView": 2,
                            "spaceBetween": 16
                        },
                        "992": {
                            "slidesPerView": 4,
                            "spaceBetween": 16
                        },
                        "1200": {
                            "slidesPerView": "5",
                            "spaceBetween": 16
                        }
                    }
                }'
            >
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/home/Physical-Therapy(PT).webp" alt="">
                        </div>
                       <div class="info">
                            <p class="title">
                                Physical Therapy (PT)
                            </p>
                            <p class="paragraph lg">
                                Improve strength, mobility, balance
                            </p>
                       </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/home/Occupational-Therapy(OT).webp" alt="">
                        </div>
                        <div class="info">
                            <p class="title">
                                Occupational Therapy (OT)
                            </p>
                            <p class="paragraph lg">
                                Build everyday skills, fine motor, self-care
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/home/Speech-Therapy(SLP).webp" alt="">
                        </div>
                        <div class="info">
                            <p class="title">
                                Speech Therapy (SLP)
                            </p>
                            <p class="paragraph lg">
                                Improve communication, speech, feeding
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/home/Autism-Therapy(ABA).webp" alt="">
                        </div>
                        <div class="info">
                            <p class="title">
                                Autism Therapy (ABA)
                            </p>
                            <p class="paragraph lg">
                                Manage behavior, autism support, social skills
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="<?= get_template_directory_uri(); ?>/images/home/Audiology.webp" alt="">
                        </div>
                        <div class="info">
                            <p class="title">
                                Audiology
                            </p>
                            <p class="paragraph lg">
                                Hearing tests, hearing aids, auditory processing
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-button="prev" class="swiper-button-prev"></div>
            <div data-button="next" class="swiper-button-next"></div>
        </div>
    </div>
</section>