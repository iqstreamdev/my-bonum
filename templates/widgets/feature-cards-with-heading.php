<?php
    $heading = get_sub_field('heading');
    $subheading = get_sub_field('subheading');
    $cards = get_sub_field('cards');
    $enable_slider_on_desktop = get_sub_field('enable_slider_on_desktop');
    $enable_slider_autoplay = get_sub_field('enable_slider_autoplay');
    $autoplay_delay = get_sub_field('autoplay_delay');
?>


<section class="feature-cards-with-heading">
    <div class="container">
        <?php if (!empty($heading) || !empty($subheading)) : ?>
        <div class="headings">
            <?php if (!empty($heading)) : ?>
                <h2 class="h1">
                    <?php echo $heading; ?>
                </h2>
            <?php endif;
            if (!empty($subheading)) : ?>
                <p class="subheading paragraph lg">
                    <?php echo $subheading; ?>
                </p>
                <?php endif; ?>
            </div>
        <?php endif;
        if (!empty($cards)) : ?>
            <div class="main-slider-wrapper">
                <div class="swiper main-slider <?php echo $enable_slider_on_desktop ? "enabled-on-desktop" : "" ; ?>" <?php echo $enable_slider_autoplay ? 'data-swiper-autoplay="' . $autoplay_delay . '"' : ''; ?>
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
                                "slidesPerView": <?php echo $enable_slider_on_desktop ? 3 : '"auto"'; ?>,
                                "enabled": <?php echo $enable_slider_on_desktop ? "true" : "false"; ?>,
                                "spaceBetween": <?php echo $enable_slider_on_desktop ? 16 : 0; ?>
                            }
                        }
                    }'
                >
                    <div class="swiper-wrapper">
                        <?php foreach ($cards as $card) : 
                            $icon = $card['icon'];
                            $heading = $card['heading'];
                            $text_description = $card['text_description'];
                        ?>
                            <div class="swiper-slide">
                                <?php if (!empty($icon)) : ?>
                                    <div class="icon">
                                        <?php echo wp_get_attachment_image($icon, 'full', false, ['class' => '']); ?>
                                    </div>
                                <?php endif;
                                if (!empty($heading) || !empty($text_description)) : ?>
                                    <div class="info">
                                        <?php if (!empty($heading)) : ?>
                                            <h3 class="h3"><?php echo $heading; ?></h3>
                                        <?php endif;
                                        if (!empty($text_description)) : ?>
                                            <p class="paragraph lg"><?php echo $text_description; ?></p>
                                        <?php endif;?>
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
