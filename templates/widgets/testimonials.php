<?php
    $heading = get_sub_field('heading');
    $testimonials = get_sub_field('testimonials');
    $enable_slider_on_desktop = get_sub_field('enable_slider_on_desktop');
    $enable_slider_autoplay = get_sub_field('enable_slider_autoplay');
    $autoplay_delay = get_sub_field('autoplay_delay');
?>

<section class="testimonials">
    <div class="container">
        <?php if (!empty($heading)) : ?>
            <h2 class="h1">
                <?php echo $heading; ?>
            </h2>
        <?php endif; ?>
        <div class="main-slider-wrapper">
            <div class="features-slider swiper main-slider <?php echo $enable_slider_on_desktop ? "enabled-on-desktop" : "" ; ?>" <?php echo $enable_slider_autoplay ? 'data-swiper-autoplay="' . $autoplay_delay . '"' : ''; ?>
                data-slider='{
                    "breakpoints": {
                        "0": {
                            "slidesPerView": 1,
                            "enabled": true,
                            "spaceBetween": 16
                        },
                         "992": {
                            "slidesPerView": <?php echo $enable_slider_on_desktop ? 2 : '"auto"'; ?>,
                            "enabled": <?php echo $enable_slider_on_desktop ? "true" : "false"; ?>,
                            "spaceBetween": <?php echo $enable_slider_on_desktop ? 32 : 0; ?>
                        }
                    }
                }'
            >
                <div class="swiper-wrapper">
                    <?php if (!empty($testimonials)) : 
                        foreach ($testimonials as $i => $testimonial) : 
                            setup_postdata($testimonial);
                            $post_id = $testimonial['testimonial'];
                            $title   = get_the_title($post_id);
                            $excerpt = get_the_excerpt($post_id);
                            $photo   = get_post_thumbnail_id($post_id);
                            $age   = get_field('age', $post_id);
                        ?>
                            <div class="swiper-slide">
                                <div class="heading">
                                    <?php echo wp_get_attachment_image($photo, 'full', false, ['class' => 'photo']); ?>
                                    <div class="text">
                                        <p class="h3">
                                            <?php echo $title; ?>
                                        </p>
                                        <?php if (!empty($age)) : ?>
                                            <p class="paragraph lg">
                                                <?php echo $age; ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <p class="h4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/quote-icon.svg" alt="quote">
                                    <?php echo $excerpt; ?>
                                </p>
                            </div>
                        <?php endforeach;
                    endif; ?>
                </div>
            </div>
            <div data-button="prev" class="swiper-button-prev features-slider-prev"></div>
            <div data-button="next" class="swiper-button-next features-slider-next"></div>
        </div>
        <?php if (!empty($cards_excerpt) && $enable_cards_excerpt) : 
            $label = $cards_excerpt['label'];
            $heading = $cards_excerpt['heading'];
            $text_description = $cards_excerpt['text_description'];
            $list = $cards_excerpt['list'];
        ?>
            <div class="cards-excerpt">
                <?php if (!empty($label)) : ?>
                <p class="label paragraph lg">
                    <?php echo $label; ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-up.svg" alt="arrow up">
                </p>
                <?php endif;?>
                <div class="excerpt-wrapper">
                    <?php if (!empty($heading)) : ?>
                        <h4 class="h4" class="heading">
                            <?php echo $heading; ?>
                        </h4>
                    <?php endif;
                    if (!empty($text_description)) : ?>
                        <p class="paragraph lg">
                            <?php echo $text_description; ?>
                        </p>
                    <?php endif;
                    if (!empty($list)) : ?>
                        <ul>
                            <?php foreach ($list as $item) : ?>
                                <li class="paragraph lg">
                                    <?php echo $item['list_item']; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>