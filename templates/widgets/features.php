<?php
    $heading = get_sub_field('heading');
    $show_therapies = get_sub_field('show_therapies');
    $therapies = get_sub_field('therapies');
?>

<section class="features-section">
    <div class="container">
        <?php if (!empty($heading)) : ?>
            <h2>
                Features
            </h2>
        <?php endif; ?>
        <div class="main-slider-wrapper">
            <div class="features-slider swiper main-slider"
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
                    <?php if (!empty($therapies) && $show_therapies) : ?>
                        <?php foreach ($therapies as $i => $therapy) : 
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
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div data-button="prev" class="swiper-button-prev features-slider-prev"></div>
            <div data-button="next" class="swiper-button-next features-slider-next"></div>
        </div>
    </div>
</section>