<?php
    $heading = get_sub_field('heading');
    $cards = get_sub_field('cards');
    $enable_slider_autoplay = get_sub_field('enable_slider_autoplay');
    $autoplay_delay = get_sub_field('autoplay_delay');
?>


<section class="heading-with-cards-three-col pt-48">
    <div class="container">
        <?php if (!empty($heading)) : ?>
            <h2 class="h1">
                <?php echo $heading; ?>
            </h2> 
        <?php endif; ?>
        <div class="main-slider-wrapper">
            <div class="cards-slider swiper main-slider" <?php echo $enable_slider_autoplay ? 'data-swiper-autoplay="' . $autoplay_delay . '"' : ''; ?>
                data-slider='{
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
                            "slidesPerView": 2,
                            "spaceBetween": 16
                        },
                        "1200": {
                            "slidesPerView": "3",
                            "spaceBetween": 16
                        }
                    }
                }'
            >
                <div class="swiper-wrapper">
                    <?php 
                        foreach ($cards as $i => $card) : 
                            $image = $card['card_image'];
                            $title = $card['card_heading'];
                            $description = $card['card_description'];
                        ?>
                        <div class="swiper-slide">
                            <?php if (!empty($image)) : ?>
                                <div class="card-image">
                                    <?php echo wp_get_attachment_image($image, 'full', false, ['class' => '']); ?>
                                </div>
                            <?php endif;
                            if (!empty($title) || !empty($description)) : ?>
                                <?php if (!empty($title)) : ?>
                                    <p class="h3">
                                        <?php echo $title; ?>
                                    </p>
                                <?php endif;
                                if (!empty($description)) : ?>
                                    <p class="paragraph lg">
                                        <?php echo $description; ?>
                                    </p>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>