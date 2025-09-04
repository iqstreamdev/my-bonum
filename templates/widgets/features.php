<?php
    $heading = get_sub_field('heading');
    $select_content_type = get_sub_field('select_content_type');
    $therapies = get_sub_field('therapies');
    $cards = get_sub_field('cards');
    $enable_cards_excerpt = get_sub_field('enable_cards_excerpt');
    $cards_excerpt = get_sub_field('cards_excerpt');
    $enable_slider_autoplay = get_sub_field('enable_slider_autoplay');
    $autoplay_delay = get_sub_field('autoplay_delay');
?>

<section class="features-section pt-48">
    <div class="container">
        <?php if (!empty($heading)) : ?>
            <h2 class="h1">
                <?php echo $heading; ?>
            </h2>
        <?php endif; ?>
        <div class="main-slider-wrapper">
            <div class="features-slider swiper main-slider" <?php echo $enable_slider_autoplay ? 'data-swiper-autoplay="' . $autoplay_delay . '"' : ''; ?>
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
                    <?php if (!empty($therapies) && $select_content_type == "therapies_posts") : 
                        foreach ($therapies as $i => $therapy) : 
                            setup_postdata($therapy);
                            $post_id = $therapy['therapy'];
                            $title   = get_the_title($post_id);
                            $excerpt = get_the_excerpt($post_id);
                            $image   = get_post_thumbnail_id($post_id);
                        ?>
                            <div class="swiper-slide">
                                <div class="image">
                                    <?php echo wp_get_attachment_image($image, 'full', false, ['class' => '']); ?>
                                </div>
                                <div class="info">
                                    <p class="title">
                                        <?php echo $title; ?>
                                    </p>
                                    <p class="paragraph lg">
                                        <?php echo $excerpt; ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach;
                        elseif (!empty($cards) && $select_content_type == "default_cards") :
                        foreach ($cards as $i => $card) : 
                            $title = $card['heading'];
                            $text_description = $card['text_description'];
                            $image = $card['image'];
                        ?>
                            <div class="swiper-slide">
                                <?php if (!empty($image)) : ?>
                                    <div class="image">
                                        <?php echo wp_get_attachment_image($image, 'full', false, ['class' => '']); ?>
                                    </div>
                                <?php endif;
                                if (!empty($title) || !empty($text_description)) : ?>
                                    <div class="info">
                                        <?php if (!empty($title)) : ?>
                                            <p class="title">
                                                <?php echo $title; ?>
                                            </p>
                                        <?php endif;
                                        if (!empty($text_description)) : ?>
                                            <p class="paragraph lg">
                                                <?php echo $text_description; ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
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