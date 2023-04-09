<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package serviceria
 */

?>

<?php
        $args = array(
            'post_type' => 'slides', 
            'posts_per_page' => '-1',
            'order_by' => 'date', 
            'order' => 'ASC', 
            );
        $query = new WP_Query ($args);
        if ($query->have_posts()) {
            while($query->have_posts()) {?>


    <div id="panel-1" class="module full-screen red overflow-hidden ">
        <div class="container h-full">

	<?php                $query->the_post(); 
                $first_post = $query->posts[0];
                if($first_post) {
                    $url = wp_get_attachment_url( get_post_thumbnail_id($first_post->ID), 'thumbnail' ); ?>
					<div class="w-full">
						<div class=" img w-3/4 pb-8 h-homeHeight" style="background-image: url('<?php echo $url  ?>')">
						</div>
					</div>
               
                
                    <div id="text" class="overflow-hidden large-child absolute top-0 right-0 w-[400px] h-full flex items-center justify-end z-[50]">
                         <h2 id="scrolling-text" class="w-[400px] slide-text text-purpleColor text-7xl md:mr-20 ">
                            <?php   
                            $slide_text =  get_field( 'slide_text', $first_post->ID ) ;
                            
                            if( $slide_text ): ?>
                                <?php the_field('slide_text',  $first_post->ID  ); ?>
                            <?php endif; ?>
                            </h2> 
                
                    </div>              
            <?php }
            ?>
       
        </div>  
    </div>
    
    <div id="panel-2" class="!w-[200vw] module full-screen orange">


	<div class="container-this" data-scroll-container>
                               
    <div id="trigger" class="ml-[50vw] max-h-[100vh] h-[100vh] w-[150vw] flex">

      <svg viewBox="0 0 1440 400" fill="none">
        <path id="textPath" d="M0 .5c155.69 0 155.69 64 311.39 64S467.08.5 622.77.5s155.7 64 311.39 64 155.7-64 311.39-64 155.7 64 311.39 64" stroke="black" />
        <text>
          <textPath id="textOnPath1" class="text-on-path" href="#textPath">There’s no way we can spread the tsunami </textPath>
        </text>
      </svg>
    </div>
  
    </div>
                    


    </div>
    <div id="panel-3" class="module full-screen purple">
    <div class="container h-full">
        <?php
       
                $query->the_post(); 
                $sec_post = $query->posts[1];
                if($sec_post) {
                    $url = wp_get_attachment_url( get_post_thumbnail_id($sec_post->ID), 'thumbnail' ); ?>
                
                    <div class=" img w-3/4 pb-8 h-homeHeight" style="background-image: url('<?php echo $url  ?>')">
                    </div>
                
                    <div id="text" class="absolute top-0 left-0 w-[100vw] h-full flex items-center z-[50]">
                         <h2 id="scrolling-text" class="lg:w-[400px] slide-text text-purpleColor text-7xl md:mr-20 ">
                            <?php   
                            $slide_text =  get_field( 'slide_text',  $sec_post->ID ) ;
                            
                            if( $slide_text ): ?>
                                <?php the_field('slide_text',  $sec_post->ID  ); ?>
                            <?php endif; ?>
                            </h2> 
                
                    </div>              
            <?php }
            
     ?>
        </div>  
    </div>
    <div id="panel-4" class="parent module full-screen green text-container">

     </div>
   <?php 
}
		}
wp_reset_postdata(); ?>