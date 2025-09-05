
<?php
    $heading = get_sub_field('heading');
    $cards = get_sub_field('cards');
?>

<section class="heading-and-info-cards">
    <div class="container">
        <?php if (!empty($heading)) : ?>
            <h2 class="h1">
                <?php echo $heading; ?>
            </h2>
        <?php endif;
        if (!empty($cards)) : ?>
            <div class="cards-wrapper">
                <?php foreach ($cards as $card) : 
                    $icon = $card['icon'];
                    $heading = $card['heading'];
                    $text_description = $card['text_description'];
                ?>
                    <div class="card">
                        <div class="heading">
                            <?php if (!empty($icon)) : ?>
                                <div class="icon">
                                    <?php echo wp_get_attachment_image($icon, 'full', false, ['class' => '']); ?>
                                </div>
                            <?php endif;
                            if (!empty($heading)) : ?>
                                <p class="h4">
                                    <?php echo $heading; ?>
                                </p>
                            <?php endif;?>
                        </div>
                        <?php if (!empty($text_description)) : ?>
                            <p class="paragraph lg description">
                                <?php echo $text_description; ?>
                            </p>
                        <?php endif;?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>