<?php
    $heading = get_sub_field('heading');
    $logos = get_sub_field('logos');
    $enable_slider_autoplay = get_sub_field('enable_slider_autoplay');
    $autoplay_delay = get_sub_field('autoplay_delay');
?>

<section class="partners pb-48">
    <div class="container">
        <?php if (!empty($heading)) : ?>
            <h2 class="h1">
                Our trusted Partners
            </h2>
        <?php endif; 
        if (!empty($logos)) : ?>
            <div class="main-slider-wrapper">
                <div class="logos swiper main-slider" <?php echo $enable_slider_autoplay ? 'data-swiper-autoplay="' . $autoplay_delay . '"' : ''; ?>
                    data-slider='{
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
                        <?php foreach ($logos as $logo) : ?>
                            <div class="swiper-slide">
                                <?php echo wp_get_attachment_image($logo["image"], 'full', false, ['class' => '']); ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div data-button="prev" class="swiper-button-prev"></div>
                <div data-button="next" class="swiper-button-next"></div>
            </div>
        <?php endif; ?>
    </div>
</section>