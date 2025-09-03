</main>
<?php
    $copyright = get_field('copyright', 'options');
    $footer_socials = get_field('footer_socials', 'options');
    $logo = get_field('footer_logo', 'options');
    $footer_description = get_field('footer_description', 'options');

    $script = "%year%";
    $pos = strripos($copyright, $script);
    $year = ' ' . date('Y') . '';

    if ($pos) {
        $copyright = substr_replace($copyright, $year, $pos, 6);
    }
?>  
<footer>
    <div class="container">
        <div class="info-wrapper">
            <a href="<?= home_url(); ?>" class="logo" aria-label="logo">
                <?php if (!empty($logo)) {
                    echo wp_get_attachment_image($logo, 'full', false, ['class' => '']);
                } else {
                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                } ?>
            </a>
            <?php if (!empty($footer_description)) : ?>
                <p class="paragraph lg text">
                    <?php echo $footer_description; ?>
                </p>
            <?php endif; ?>
            <?php if (!empty($footer_socials)) : ?>
                <ul class="socials">
                    <?php foreach ($footer_socials as $social) : 
                        $icon = $social['icon'];  
                        $url = $social['url'];
                    ?>
                        <li>
                            <a href="<?php echo $url; ?>" target="_blank">
                                <?php echo wp_get_attachment_image($icon, 'full', false, ['class' => '']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <?php if (get_field('copyright', 'options')) : ?>
                <p class="paragraph copyright">
                    <?php echo $copyright; ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="menus-wrapper">
            <?php 
                $footer_menus = ['footer_menu_1', 'footer_menu_2', 'footer_menu_3', 'footer_menu_4'];
                $locations    = get_nav_menu_locations();

                foreach ( $footer_menus as $location ) : 
                    if ( has_nav_menu( $location ) ) : 
                        $menu_id  = $locations[ $location ] ?? 0; 
                        $menu_obj = wp_get_nav_menu_object( $menu_id );
                        ?>
                        <div class="menu-elem">
                            <?php if ( $menu_obj ) : ?>
                                <p class="paragraph lg strong"><?= esc_html( $menu_obj->name ); ?></p>
                            <?php endif; ?>

                            <?php wp_nav_menu([
                                'theme_location' => $location,
                                'menu_class'     => 'footer-menu',
                                'container'      => false,
                                'fallback_cb'    => false,
                            ]); ?>
                        </div>
                    <?php 
                    endif; 
                endforeach; 
            ?>
        </div>
    </div>
</footer>
<?php wp_footer(); 
if (get_option('blog_public') == '1') {
    $external_html_code_in_footer = get_field('external_html_code_in_footer', 'options');
    if (!empty($external_html_code_in_footer)) echo $external_html_code_in_footer;
}
?>
</body>
</html>