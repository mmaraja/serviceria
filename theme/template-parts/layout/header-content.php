<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package serviceria
 */

?>

<header class="w-full text-pinkColor pt-6 pb-2 text-lg fixed z-20 h-[60px]" >
	<div class="container flex justify-between items-end">
		<div class="w-3/4">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img class="w-32" src="<?php echo esc_url( get_theme_file_uri( './assets/site-logo.svg' ) ); ?>" alt="<?php _e( 'Site logo') ?>" />
			</a>
		</div>
		
		<div class="w-1/4 flex">
			<nav class="-ml-6" id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'serviceria' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
			</nav>
			<div class="text-end">
				EN
			</div> 
		</div>
	</div>
</header>
