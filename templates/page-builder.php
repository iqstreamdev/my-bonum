<?php
/*
Template Name: Page builder
*/
?>

<?php get_header(); 


if ( have_posts() ) : while ( have_posts() ) : the_post();?>

<?php while ( have_rows( 'page_widgets' ) ) {

		the_row();

		$section_name = preg_replace( '/_/', '-', get_row_layout() );

		get_template_part( "templates/widgets/{$section_name}" );

	};
endwhile; endif; ?>
	
<?php get_footer(); ?>
