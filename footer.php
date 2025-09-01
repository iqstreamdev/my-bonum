</main>
<?php
    // $copyright = get_field('copyright', 'options');
    // $social_links = get_field('social_links', 'options');
    // $enable_year = get_field('add_year_to_the_copyright', 'options');

    // $script = "%year%";
    // $pos = strripos($copyright, $script);
    // $year = ' ' . date('Y') . '';

    // if ($enable_year) {
    //     if ($pos) {
    //         $copyright = substr_replace($copyright, $year, $pos, 6);
    //     }
    // }
?>  
<footer>
    <div class="container">
        <div class="info-wrapper">
            <a href="<?= home_url(); ?>" class="logo">
                <img src="<?= get_template_directory_uri(); ?>/images/logo-light.svg" alt="Logo">
            </a>
            <p class="paragraph lg text">
                Connecting families with specialized therapy services for children with special needs.
            </p>
            <ul class="socials">
                <a href="#" target="_blank">
                    <img src="<?= get_template_directory_uri(); ?>/images/Instagram.svg" alt="Instagram">
                </a>
                <a href="#" target="_blank">
                    <img src="<?= get_template_directory_uri(); ?>/images/Facebook.svg" alt="Facebook">
                </a>
                <a href="#" target="_blank">
                    <img src="<?= get_template_directory_uri(); ?>/images/Linkedin.svg" alt="Linkedin">
                </a>
                <a href="#" target="_blank">
                    <img src="<?= get_template_directory_uri(); ?>/images/X.svg" alt="X">
                </a>
            </ul>
            <p class="paragraph copyright">
                © 2025 MyBonum. All rights reserved.
            </p>
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
<?php wp_footer(); ?>
</body>
</html>