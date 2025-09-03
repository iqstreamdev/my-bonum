<?php
    $heading = get_sub_field('heading');
    $columns = get_sub_field('columns');
?>

<section class="section-call-to-action">
    <div class="container">
        <?php if (!empty($heading)) : ?>
            <h2>
                <?php echo $heading; ?>
            </h2>
        <?php endif;?>
        <div class="columns">
            <?php foreach ($columns as $column) : 
                $icon = $column['icon'];
                $heading = $column['heading'];
                $text_description = $column['text_description'];
                $link = $column['link'];
            ?>
                <div class="column">
                    <?php if (!empty($icon)) : ?>
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home/RocketOutlined.svg" alt="">
                        </div>
                    <?php endif;?>
                    <div class="info">
                        <?php if (!empty($heading)) : ?>
                            <p class="title">
                                <?php echo $heading; ?>
                            </p>
                        <?php endif;
                        if (!empty($text_description)) : ?>
                            <p class="paragraph lg">
                                <?php echo $text_description; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <?php if (!empty($link)) : ?>
                        <a href="<?php echo $link['url']; ?>" class="btn" <?php echo $link['target'] ? 'target="_blank"' : ''; ?>>
                            <?php echo $link['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>