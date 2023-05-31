<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package serviceria
 */

?>
<div class="container-wrapper !hidden lg:!flex">
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


    <div id="panel-1" class="module full-screen red overflow-hidden " data-pin="true">
        <div class="container relative h-full">

	<?php       $query->the_post(); 
                $first_post = $query->posts[0];
                if($first_post) {
                    $url = wp_get_attachment_url( get_post_thumbnail_id($first_post->ID), 'full' ); ?>
					<div class="w-full">
						<div class=" img w-3/4 pb-8 h-homeHeight" style="background-image: url('<?php echo $url  ?>')">
						</div>
					</div>
               
                   
                    <div id="text" class="w-full overflow-hidden large-child absolute flex items-center top-0 right-0 h-full z-[50]">
                         <h2 id="scrolling-text" class="w-[400px] slide-text text-purpleColor text-7xl absolute right-0 mr-[4%]">
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
    
    <!-- <div id="panel-2" class="module p2 h-full w-full" >

    </div> -->

    <div id="panel-3" class="panel-3 relative module pink text-start panel-text" data-pin="true">
         
    <?php
       
       $query->the_post(); 
       $sec_post = $query->posts[1];
       if($sec_post) {
           $url = wp_get_attachment_url( get_post_thumbnail_id($sec_post->ID), 'full' ); ?>
       <div class="panel_3_content relative w-full h-full">
        <div class="img-wrapper w-full h-full overflow-hidden h-[100vh] w-[100vw]">
            <div class=" panel_3_img img w-[100vw] h-[100vh]" style="background-image: url('<?php echo $url  ?>')"></div>      
            </div>      
       </div>
            <?php }
            
        ?>
            <div class="text-wrap">
           
            <svg viewBox="0 0 3500 400" fill="none" class="text">
                <!-- <path id ="textPath" id="textPath" d="M0 .5c155.69 0 155.69 64 311.39 64 S 467.08.5 622.77.5 s 155.7 64 311.39 64 155.7-64 311.39-64 155.7 64 311.39 64" stroke="black" /> -->
                <!-- <path id ="textPath" id="textPath" d="M0 .5 c 155.69 0 155.69 64 311.39 64 S 467.08 .5 622.77 .5 s 155.7 64 311.39 64 155.7-64 311.39-64 155.7 64 311.39 64  " stroke="black" /> -->
                <path  id="textPath" d="M 0 0 Q 300 500, 700 90 T 1400 90 T 2100 90 T 2800 90 T 3500 90 T 4200 90 T 4900 90 T 5600 90 T 
                6300 90 T 7000 90 T 7700 90 T 
                8400 90 T 9100 90 "  />
                <text x="3500" class="">                                      
                    <textPath id="textOnPath1" style="position: relative; padding-left: 500px" class="text-on-path" href="#textPath">we make it personal because it is personal</textPath>
                </text> 
            </svg>
            
            </div>
        </div>
    <div id="panel-4" class="panel-4 w-full  h-full module z-[30]" data-pin="true">
    <!-- <div class="start-reveal" style="position: relative; left: -50vw; background-image:  url('<?php bloginfo('template_url'); ?>/assets/img1.jpg'); width: 50px; height: 50px"></div> -->
    <?php  $query->the_post(); 
                $third_post = $query->posts[2];
                if($third_post) { ?>
                    
                    <div class="panel_4_content flex items-center relative h-[100vh]">
                        
                        <div class="h-2 w-[100vw] flex justify-start items-center h-[100%] z-30 relative ">
                         <h2 id="quote" class="ml-12 text-pinkColor revealRtoL text-8xl leading-tight">
                            <?php   
                            $slide_text =  get_field( 'slide_text', $third_post->ID ) ;
                            
                            if( $slide_text ): ?>
                                <?php the_field('slide_text',  $third_post->ID ); ?>
                            <?php endif; ?>
                        </h2> 
                        </div>
                       
                        <div class="gallery flex gap-4 relative overflow-hidden  w-full z-[22]"  data-pin="true">
                            <div id="img-grid-1" class="image-grid-1 mb-4 w-36 flex flex-col gap-2">
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/img1.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/img2.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/img3.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/img4.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/img5.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/25.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/26.jpg')"></div>
                            </div>
                            <div id="img-grid-2" class="image-grid-2 mb-4 w-36 flex flex-col gap-2">
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/img6.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/img7.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/img8.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/img9.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/img10.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/23.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/24.jpg')"></div>
                            </div>
                            <div id="img-grid-3" class="image-grid-1 mb-4 w-36 flex flex-col gap-2">
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/img11.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/img12.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/img13.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/img14.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/07.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/20.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/28.jpg')"></div>
                            </div>
                            <div id="img-grid-4" class="image-grid-2 mb-4 w-36 flex flex-col gap-2">
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/08.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/12.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/10.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/13.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/15.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/18.jpg')"></div>
                                <div class=" h-48" style="background-image:  url('<?php bloginfo('template_url'); ?>/assets/19.jpg')"></div>
                            </div>
                        </div>
                        </div>
                   
                
            <?php }
            ?> 
            
     </div>
    <div id="panel-5" class="panel-5 w-full h-full module" data-pin="true">
    <?php  $query->the_post(); 
                $fourth_post = $query->posts[3];
                if($fourth_post) { ?>
                    <div class="panel_5_content w-full h-full relative">
                         <h2 class="vertical_text overflow-hidden w-full h-full flex justify-end flex-col text-pinkColor text-4xl absolute  top-0 leading-tight rotate-90 z-30">
                            <?php   
                            $slide_text =  get_field( 'slide_text', $fourth_post->ID ) ;
                            $slide_text2 =  get_field( 'slide_text_2', $fourth_post->ID ) ;
                            
                            if( $slide_text ): ?>
                                <div id="text_1"  data-speed="0.25" class="text_1 w-[max-content]"><?php the_field('slide_text',  $fourth_post->ID ); ?></div>
                                <div id="text_2"  data-speed="0.25" class="text_2 w-[max-content]"><?php the_field('slide_text_2',  $fourth_post->ID ); ?></div>
                            <?php endif; ?>
                        </h2> 
                        
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($fourth_post->ID), 'full' ); ?>
                       <div class="mov absolute top-0 w-full h-full">
                        <div class="img-container w-full relative flex h-full flex justify-center items-center overflow-hidden">
                            <img class="last-sl-front w-auto img m-auto h-1/2 z-20" src="<?php echo $url  ?>"></img>
                            <img id="last-sl-blue" class="last-sl-blue img m-auto h-4/5 w-auto z-10  -right-24 top-1/5 rotate-[6deg]" src="<?php echo esc_url( get_theme_file_uri( './assets/serviceria-lastslide.png' ) ); ?>"></img>
                        </div>
                        </div>
                        <div id="home-footer" class="absolute top-0 right-0 flex h-full flex w-[20vw] justify-center items-center overflow-hidden">
                            <footer id="colophon" class="absolute top-0 hidden lg:block">
                            <div id="container" class="w-full h-auto grid gap-10">
                            </div>
                                <div class="text-xl w-full h-full absolute bottom-0 left-0 text-purpleColor flex items-end flex-col justify-around">
                                    <div id="first-col" class="w-full flex flex-col items-end justify-center">
                                        <button class="btn js-open-popup-cred" data-target="custom-popup-cred">
                                        Credits
                                        </button>
                                        <a href="/privacy-policy">Privacy Policy</a>
                                        <p class="text-purpleColor text-end w-full">
                                            © <span id="year"></span> SERVICERIA d.o.o. All rights reserved. 
                                        </p>
                                    </div>
                                    <div class="w-full flex flex-col items-end justify-center text-end">
                                        <p>SERVICERIA d.o.o. <br>
                                        Brodišče 23, <br>
                                        1236 Trzin, Slovenia</p>
                                    </div>
                                    <div class="w-full flex flex-col items-end justify-center">
                                        <a target="_blank" href="https://www.instagram.com/serviceria/">Instagram</a>
                                        <a target="_blank" href="https://vimeo.com/serviceria">Vimeo</a>
                                    </div>
                                </div>
                            </footer>
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
<div class="container">
<?php get_template_part( 'template-parts/content/content', 'modal' ); ?>
</div>
<?php get_template_part( 'template-parts/content/content', 'modal-credits' ); ?>
