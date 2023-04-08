<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package serviceria
 */

?>




	<div id="panel-1" class="module full-screen red">
		<div class="container h-full">
		<?php
		$args = array(
			'post_type' => 'slides', 
			'posts_per_page' => '-1',
			'order_by' => 'date', 
			'order' => 'ASC', 
			);
		$query = new WP_Query ($args);
		if ($query->have_posts()) {
			while($query->have_posts()) {
				$query->the_post(); 
				$first_post = $query->posts[0];
				if($first_post) {
					$url = wp_get_attachment_url( get_post_thumbnail_id($first_post->ID), 'thumbnail' ); ?>
				
					<div class=" img w-3/4 pb-8 h-homeHeight" style="background-image: url('<?php echo $url  ?>')">
					</div>
				
					<div id="text" class="absolute top-0 left-0 w-[200vw] h-full flex items-center z-[50]">
						 <h2 id="scrolling-text" class="pl-[60vw] lg:w-[400px] slide-text text-purpleColor text-7xl md:mr-20 ">
							<?php	
							$slide_text =  get_field( 'slide_text', false, false ) ;
							
							if( $slide_text ): ?>
								<?php the_field('slide_text', false, false ); ?>
							<?php endif; ?>
							</h2> 
				
					</div>				
			<?php }
			}
		}
		wp_reset_postdata(); ?>
		</div>	
	</div>
	
	<div id="panel-2" class="module full-screen orange">
		<div class="container">
			
		</div>
	</div>
	<div id="panel-3" class="module full-screen purple">
	<div class="container h-full">
		<?php
		$args = array(
			'post_type' => 'slides', 
			'posts_per_page' => '-1',
			'order_by' => 'date', 
			'order' => 'ASC', 
			);
		$query = new WP_Query ($args);
		if ($query->have_posts()) {
			while($query->have_posts()) {
				$query->the_post(); 
				$sec_post = $query->posts[1];
				if($sec_post) {
					$url = wp_get_attachment_url( get_post_thumbnail_id($sec_post->ID), 'thumbnail' ); ?>
				
					<div class=" img w-3/4 pb-8 h-homeHeight" style="background-image: url('<?php echo $url  ?>')">
					</div>
				
					<div id="text" class="absolute top-0 left-0 w-[200vw] h-full flex items-center z-[50]">
						 <h2 id="scrolling-text" class="pl-[60vw] lg:w-[400px] slide-text text-purpleColor text-7xl md:mr-20 ">
							<?php	
							$slide_text =  get_field( 'slide_text', false, false ) ;
							
							if( $slide_text ): ?>
								<?php the_field('slide_text', false, false ); ?>
							<?php endif; ?>
							</h2> 
				
					</div>				
			<?php }
			}
		}
		wp_reset_postdata(); ?>
		</div>	
	</div>
	<div id="panel-4" class="module full-screen green">
		<div class="container">
			<div class="row">
			<div class="col-6">

				<img src="" alt="">

			</div>
			<div class="col-6 d-flex flex-column">

				<h2>Panel 4</h2>

				<p class="step-description">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Including versions of Lorem Ipsum.
				</p>

				<div class="panels-navigation">
				<div class="nav-panel" data-sign="minus"><a href="#panel-3" class="anchor">Prev</a></div>
				<div class="nav-panel" data-sign="plus"><a href="#panel-5" class="anchor">Next</a></div>
				</div>
			</div>
			</div>
		</div>
	</div>
	


