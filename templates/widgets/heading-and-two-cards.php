<?php
    $heading = get_sub_field('heading');
    $cards = get_sub_field('cards');
?>
<section class="heading-and-two-cards">
    <div class="container">
        <?php if (!empty($heading)) : ?>
            <h2 class="h1">
                <?php echo $heading; ?>
            </h2>
        <?php endif;
        if (!empty($cards)) : ?>
            <div class="cards-wrapper">
                <?php foreach ($cards as $card) : 
                    $image = $card['image'];
                    $heading = $card['heading'];
                    $text_description = $card['text_description'];
                    $list = $card['list'];
                    $link = $card['link'];
                ?>
                    <div class="card">
                        <?php if (!empty($image)) : ?>
                            <div class="image">
                                <?php echo wp_get_attachment_image($image, 'full', false, ['class' => '']); ?>
                            </div>
                        <?php endif;?>
                        <div class="info">
                            <?php if (!empty($heading)) : ?>
                                <p class="h2">
                                    <?php echo $heading; ?>
                                </p>
                            <?php endif;
                            if (!empty($text_description)) : ?>
                                <p class="paragraph lg">
                                    <?php echo $text_description; ?>
                                </p>
                            <?php endif;
                            if (!empty($list)) : ?>
                                <ul class="with-icon check-icon">
                                    <?php foreach ($list as $item) : ?>
                                        <li class="paragraph lg">
                                            <?php echo $item['list_item']; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif;
                            if (!empty($link)) : ?>
                                <a href="<?php echo $link['url']; ?>" class="btn" <?php echo $link['target'] ? 'target="_blank"' : ''; ?>>
                                    <?php echo $link['title']; ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>