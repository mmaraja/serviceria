<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package serviceria
 */

?>
<div class="!block h-auto w-full lg:!hidden container-mobile">
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

<div class="relative w-full ">
	        <?php    
                $query->the_post(); 
                $first_post = $query->posts[0];
                if($first_post) { ?>
             
                <div class="h-[100vh] w-full bg-cover" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/first-slide-mob.jpg')">
                    <div class="container h-full relative z-[30]">
                        <h2 class="first-text-mob text-purpleColor absolute bottom-6 text-5xl">
                            <span id="first_slide_h2">
                                <?php   
                                $slide_text =  get_field( 'slide_text_mob', $first_post->ID ) ;
                                if( $slide_text ): the_field('slide_text_mob', $first_post->ID)?>
                                <?php endif; ?>
                            </span>
                        </h2> 
                    </div>
                </div>
                <h2 class="first-text-mob text-purpleColor text-5xl relative container pt-2">
                    <span id="second_slide_h2">
                        <?php   
                        $slide_text =  get_field( 'slide_text_mob_2', $first_post->ID ) ;
                        if( $slide_text ): the_field('slide_text_mob_2', $first_post->ID)?>
                        <?php endif; ?>
                    </span>
                </h2> 
            <?php }
            ?>
        </div>
        <div class="panel-mob-1 relative h-[90vh] pt-20 md:flex md:justify-center" data-pin="true">
            <?php
            $query->the_post(); 
            $sec_post = $query->posts[1];
            if($sec_post) {
                $url = wp_get_attachment_url( get_post_thumbnail_id($sec_post->ID), 'full' ); ?>
            
                <div class="round-div rounded-full overflow-hidden w-full md:w-auto md:h-full"><img class="h-full object-cover" src="<?php echo $url  ?>"/></div>
                <div class="scroll-text overflow-hidden absolute bottom-0">
                    <svg viewBox="1400 0 3000 400" fill="none" class="reveal-text rotate-[50deg] md:rotate-45">
                        <!-- <path id="textPath" d="M0 .5c155.69 0 155.69 64 311.39 64 S 467.08.5 622.77.5 s 155.7 64 311.39 64 155.7-64 311.39-64 155.7 64 311.39 64" stroke="black" /> -->
                        <!-- <path id="textPath" d="M0 .5 c 155.69 0 155.69 64 311.39 64 S 467.08 .5 622.77 .5 s 155.7 64 311.39 64 155.7-64 311.39-64 155.7 64 311.39 64  " stroke="black" /> -->
                        <path id="textPath" d="M 0 0 Q 200 170, 400 90 T 800 90 T 1200 90 T 1600 90 T 2000 90 T 2400 90 T 2800 90 T 3200 90 T 3600 90 T 4000 90 T 4400 90 T 4800 90 T 5200 90 T 5600 90 T 6000 90 T 6400 90 T 6800 90 T 7200 90 T 7600 90 T 8000 90 T 8400 90" />
                        <text x="2000" class="">                                      
                            <textPath id="textOnPath2" class="pl-[500px] relative md:pl-[1000px] text-on-path" href="#textPath">we make it personal because it is personal</textPath>
                        </text>
                    </svg>
                   
                </div>
               
            <?php } ?>
        </div>
        
    
        
            <div class="panel-mob-2 relative w-full h-[100vh]" data-pin="true" >
            <?php  $query->the_post(); 
                    $third_post = $query->posts[2];
                    if($third_post) { ?>
                    
                    <div class="panel-mob-2-content relative h-full w-full top-24">
                        <div class="gallery_mob flex gap-3 relative flex-col w-full overflow-hidden">
                            <div id="img-grid-1mob" class="image-grid-1mob flex w-full flex-row gap-x-2 w-[max-content]">
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/img1.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/img2.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/img3.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/img4.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/img5.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/25.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/26.jpg' ) ); ?>"/>
                            </div>
                            <div id="img-grid-2mob" class="image-grid-2mob w-full flex flex-row gap-x-2 w-[max-content]">
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/img6.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/img7.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/img8.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/img9.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/img10.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/23.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/24.jpg' ) ); ?>"/>

                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                            <h2 class="text-pinkColor text-xl leading-tight text-center py-2">
                                <?php   
                                $slide_text =  get_field( 'slide_text_mob', $third_post->ID ) ;
                                
                                if( $slide_text ): ?>
                                    <?php the_field('slide_text_mob',  $third_post->ID ); ?>
                                <?php endif; ?>
                            </h2> 
                        </div>
                       
                        <div class="gallery_mob flex gap-3 relative flex-col  overflow-hidden"  >
                            <div id="img-grid-3mob" class="image-grid-1mob  w-full flex flex-row gap-x-2">
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/img11.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/img12.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/img13.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/img14.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/07.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/20.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/28.jpg' ) ); ?>"/>
                            </div>
                            <div id="img-grid-4mob" class="image-grid-2mob w-full flex flex-row gap-x-2">
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/08.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/12.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/10.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/13.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/15.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/18.jpg' ) ); ?>"/>
                                <img class=" h-[18vh]" src="<?php echo esc_url( get_theme_file_uri( './assets/19.jpg' ) ); ?>"/>
                            </div>
                        </div>
                        
                    </div>
                
            <?php }
            ?> 
            </div>
            <div class="panel-mob-3 relative w-full h-[100vh]" data-pin="true">
            <?php  
                $query->the_post(); 
                $fourth_post = $query->posts[3];
                if($fourth_post) { ?>
                
                    <div class="panel-mob-3-content relative w-full h-full">
                         <div class="absolute z-30 w-full h-full flex justify-center items-center flex-col text-pinkColor text-xl overflow-hidden  leading-tight">
                            <?php   
                            $slide_text =  get_field( 'slide_text', $fourth_post->ID ) ;
                            $slide_text2 =  get_field( 'slide_text_2', $fourth_post->ID ) ;
                            
                            if( $slide_text ): ?>
                                <h3 id="text_1_mob" class="text_1_mob w-[max-content]"><?php the_field('slide_text',  $fourth_post->ID ); ?></h3>
                                <h3 id="text_2_mob" class="text_2_mob w-[max-content]"><?php the_field('slide_text_2',  $fourth_post->ID ); ?></h3>
                            <?php endif; ?>
                        </div> 
                       
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($fourth_post->ID), 'full' ); ?>
                        <div class="absolute left-0 top-0 w-full h-full">
                            <div class="w-full relative h-full flex justify-center items-center overflow-hidden container">
                                <img class="w-full m-auto h-auto md:h-1/2 md:w-auto z-20" src="<?php echo $url  ?>"></img>
                                <img class="img m-auto h-1/2 w-[max-content] sm:m-auto sm:h-4/5 sm:w-auto z-10 rotate-[6deg] z-10 object-cover" src="<?php echo esc_url( get_theme_file_uri( './assets/serviceria-lastslide.png' ) ); ?>"></img>
                            </div>
                        </div>
                    </div>
            <?php }
            ?> 
           </div>

   <?php 
}
		}
wp_reset_postdata(); ?>
</div>
<div class="lg:hidden">
<div class="container">
<?php get_template_part( 'template-parts/content/content', 'modal' ); ?>
</div>
<?php get_template_part( 'template-parts/content/content', 'modal-credits' ); ?>
<?php get_footer() ?>
</div>