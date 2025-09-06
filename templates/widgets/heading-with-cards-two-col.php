<?php
    $heading = get_sub_field('heading');
    $subheading = get_sub_field('subheading');
    $cards = get_sub_field('cards');
    $select_cards_background = get_sub_field('select_cards_background');
    $enable_slider_autoplay = get_sub_field('enable_slider_autoplay');
    $autoplay_delay = get_sub_field('autoplay_delay');
?>

<section class="heading-with-cards-two-col<?= ($select_cards_background === 'blue') ? ' light-blue' : '' ?>">
    <div class="container">
        <div class="heading">
            <?php if (!empty($heading)) : ?>
                <h2 class="h1">
                    <?php echo $heading; ?>
                </h2>
            <?php endif;
            if (!empty($subheading)) : ?>
                <p class="lg">
                    <?php echo $subheading; ?>
                </p>
            <?php endif; ?>
        </div>
        <? if (!empty($cards)) : ?>
            <div class="main-slider-wrapper">
                <div class="swiper main-slider" <?php echo $enable_slider_autoplay ? 'data-swiper-autoplay="' . $autoplay_delay . '"' : ''; ?>
                    data-slider='{
                        "breakpoints": {
                            "0": {
                                "slidesPerView": 1,
                                "enabled": true,
                                "spaceBetween": 16
                            },
                            "768": {
                                "slidesPerView": 2,
                                "enabled": true,
                                "spaceBetween": 24
                            },
                            "992": {
                                "slidesPerView": "auto",
                                "enabled": false,
                                "spaceBetween": 0
                            }
                        }
                    }'
                >
                    <div class="swiper-wrapper">
                        <?php foreach ($cards as $card) : 
                            $image = $card['card_image'];
                            $heading = $card['card_heading'];
                        ?>
                            <div class="swiper-slide">
                                <?php if (!empty($image)) : ?>
                                    <div class="card-image">
                                        <?php echo wp_get_attachment_image($image, 'full', false, ['class' => '']); ?>
                                    </div>
                                <?php endif;
                                if (!empty($heading) || !empty($text_description)) : ?>
                                    <div class="info">
                                        <?php if (!empty($heading)) : ?>
                                            <h3 class="h3"><?php echo $heading; ?></h3>
                                        <?php endif; ?>
                                    </div>
                                <?php endif;?>
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