<?php
    $heading = get_sub_field('heading');
    $founders_intro = get_sub_field('founders_intro');
    $founders = get_sub_field('founders');
    $stats_heading = get_sub_field('stats_heading');
    $stats_cards = get_sub_field('stats_cards');
    $enable_slider_autoplay = get_sub_field('enable_slider_autoplay');
    $autoplay_delay = get_sub_field('autoplay_delay');
    $mission_heading = get_sub_field('mission_heading');
    $mission_description = get_sub_field('mission_description');
?>

<section class="our-story">
    <div class="container">
        <?php if (!empty($heading)) : ?>
            <h2 class="h1">
                <?php echo $heading; ?>
            </h2> 
        <?php endif;
        if (!empty($founders_intro)) : ?>
            <p class="story-info h2">
                <?php echo $founders_intro; ?>
            </p>
        <?php endif; ?>
        <?php foreach ($founders as $i => $founder) :
            $founder_photo = $founder['founder_photo'];
            $founder_name  = $founder['founder_name'];
            $founder_post  = $founder['founder_post'];
            $founder_info  = $founder['founder_info'];
            $blockquote    = $founder['blockquote'];

            $reverse = ($i % 2 === 1);
        ?>
            <div class="image-with-info">
                <?php if ($reverse):  ?>
                    <div class="info-wrapper">
                        <div class="info">
                            <?php if (!empty($founder_name)) : ?>
                                <p class="h2"><?php echo $founder_name; ?></p>
                            <?php endif; ?>
                            <?php if (!empty($founder_post)) : ?>
                                <p class="h5"><?php echo $founder_post; ?></p>
                            <?php endif; ?>
                            <?php if (!empty($founder_info)) : ?>
                                <p class="lg"><?php echo $founder_info; ?></p>
                            <?php endif; ?>
                            <?php if (!empty($blockquote)) : ?>
                                <div class="blockquote h5"><?php echo $blockquote; ?></div>
                            <?php endif; ?>
                        </div>

                        <?php if (!empty($founder_photo)) : ?>
                            <div class="image">
                                <?php echo wp_get_attachment_image($founder_photo, 'full', false, ['class' => '']); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if (!empty($blockquote)) : ?>
                        <div class="blockquote mobile h5"><?php echo $blockquote; ?></div>
                    <?php endif; ?>
                <?php else: ?>
                    <div class="info-wrapper">
                        <?php if (!empty($founder_photo)) : ?>
                            <div class="image">
                                <?php echo wp_get_attachment_image($founder_photo, 'full', false, ['class' => '']); ?>
                            </div>
                        <?php endif; ?>

                        <div class="info">
                            <?php if (!empty($founder_name)) : ?>
                                <p class="h2"><?php echo $founder_name; ?></p>
                            <?php endif; ?>
                            <?php if (!empty($founder_post)) : ?>
                                <p class="h5"><?php echo $founder_post; ?></p>
                            <?php endif; ?>
                            <?php if (!empty($founder_info)) : ?>
                                <p class="lg"><?php echo $founder_info; ?></p>
                            <?php endif; ?>
                            <?php if (!empty($blockquote)) : ?>
                                <div class="blockquote h5"><?php echo $blockquote; ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if (!empty($blockquote)) : ?>
                        <div class="blockquote mobile h5"><?php echo $blockquote; ?></div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        <?php if (!empty($stats_cards)) : ?>
            <div class="title-with-cards">
                <?php if (!empty($stats_heading)) : ?>
                    <h2>
                        <?php echo $stats_heading; ?>
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
                                foreach ($stats_cards as $i => $card) : 
                                    $image = $card['stats_image'];
                                    $title = $card['stats_title'];
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
        <?php endif; ?>
        <?php if (!empty($mission_heading) || !empty($mission_description)) : ?>
            <div class="text-with-blockquote">
                <?php if (!empty($mission_heading)) : ?>
                    <p class="h4">
                        <?php echo $mission_heading; ?>
                    </p>
                <?php endif; ?>
                <?php if (!empty($mission_heading)) : ?>
                    <p class="h2">
                        <?php echo $mission_description; ?>
                    </p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>