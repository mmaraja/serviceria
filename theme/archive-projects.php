<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package serviceria
 */

get_header();
?>

	<div class="pt-16 container container_2 w-full h-full">
	<div class="left-side hidden md:grid">
    	<?php get_template_part( 'template-parts/content/content', 'projects-even' ); ?>
	</div>
	<div class="right-side hidden md:grid">
		<?php get_template_part( 'template-parts/content/content', 'projects-odd' ); ?>
	</div>
	<div class="block md:hidden">
		<?php get_template_part( 'template-parts/content/content', 'projects-mobile' ); ?>
	</div>
	</div>
	

<?php get_footer(); ?>
