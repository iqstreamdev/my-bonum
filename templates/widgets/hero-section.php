<?php
    $heading = get_sub_field('heading');
    $subheading = get_sub_field('subheading');
    $text = get_sub_field('text');
    $list = get_sub_field('list');
    $primary_button = get_sub_field('primary_button');
    $secondary_button = get_sub_field('secondary_button');
    $image = get_sub_field('image');
?>

<section class="hero-section">
    <div class="container">
        <div class="info">
            <?php if (!empty($heading)) : ?>
                <h1 class="h1">
                    <?php echo $heading; ?>
                </h1> 
            <?php endif; 
            if (!empty($text) || !empty($list)|| !empty($subheading)) : ?>
                <div class="info-wrapper">
                    <?php if (!empty($subheading)) : ?>
                        <h2 class="h4">
                            <?php echo $subheading; ?>
                        </h2>
                    <?php endif;
                    if (!empty($text)) : ?>
                        <p class="paragraph lg">
                            <?php echo $text; ?>
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
            <?php endif;
            if (!empty($primary_button) || !empty($secondary_button)) : ?>
                <div class="buttons">
                    <?php if (!empty($primary_button)) : ?>
                        <a href="<?php echo $primary_button['url']; ?>" class="btn" <?php echo $primary_button['target'] ? 'target="_blank"' : ''; ?>>
                            I have experience with the therapy
                        </a>
                    <?php endif;
                    if (!empty($secondary_button)) : ?>
                        <a href="<?php echo $secondary_button['url']; ?>" class="btn btn-secondary" <?php echo $secondary_button['target'] ? 'target="_blank"' : ''; ?>>
                            <?php echo $secondary_button['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
        <?php if (!empty($image)) : ?>
            <div class="image">
                <?php echo wp_get_attachment_image($image, 'full', false, ['class' => '']); ?>
            </div>
        <?php endif; ?>
    </div>
</section>