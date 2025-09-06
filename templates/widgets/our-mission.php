<?php
    $heading = get_sub_field('heading');
    $blockquote = get_sub_field('blockquote');
    $description_text = get_sub_field('description_text');
?>

<section class="our-mission pt-48">
    <div class="container">
        <?php if (!empty($heading)) : ?>
            <h2 class="h1">
                <?php echo $heading; ?>
            </h2> 
        <?php endif; 
        if (!empty($blockquote) || !empty($description_text)) : ?>
            <div class="blockquote">
                <p class="h2">
                    <?php echo $blockquote; ?>
                </p>
                <span class="h4">
                    <?php echo $description_text; ?>
                </span>
            </div>
        <?php endif; ?>
    </div>
</section>