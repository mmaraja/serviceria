<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package serviceria
 */

?>
<div class="container-wrapper !flex lg:!hidden">
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
    
    <div id="panel-2" class="module p2 h-full w-full" >
    &nbsp;
    </div>

    <div id="panel-3" class="relative module pink text-start panel-text" data-pin="true">
            <!-- <div class="text">this is very long text that will do what it needs</div> -->
        
    <?php
       
       $query->the_post(); 
       $sec_post = $query->posts[1];
       if($sec_post) {
           $url = wp_get_attachment_url( get_post_thumbnail_id($sec_post->ID), 'full' ); ?>
       <div class="panel_3_content relative w-full h-full">
       <div class=" panel_3_img img w-[100vw] h-[100vh]" style="background-image: url('<?php echo $url  ?>')"></div>            
       </div>
            <?php }
            
        ?>
            <div class="text-wrap">

            <svg viewBox="0 0 4500 400" fill="none" class="text">
                <!-- <path id="textPath" d="M0 .5c155.69 0 155.69 64 311.39 64 S 467.08.5 622.77.5 s 155.7 64 311.39 64 155.7-64 311.39-64 155.7 64 311.39 64" stroke="black" /> -->
                <!-- <path id="textPath" d="M0 .5 c 155.69 0 155.69 64 311.39 64 S 467.08 .5 622.77 .5 s 155.7 64 311.39 64 155.7-64 311.39-64 155.7 64 311.39 64  " stroke="black" /> -->
                <path id="textPath" d="M 0 90 Q 200 170, 400 90 T 800 90 T 1200 90 T 1600 90 T 2000 90 T 2400 90 T 2800 90 T 3200 90 T 3600 90 T 4000 90 T 4400 90 T 4800 90 T 5200 90 T 5600 90 T 6000 90 T 6400 90 T 6800 90 T 7200 90 T 7600 90 T 8000 90 T 8400 90" stroke="black" />
                <text x="4700" class="">                                      
                    <textPath id="textOnPath1" style="position: relative; padding-left: 500px" class="text-on-path" href="#textPath">we make it personal because it is personal</textPath>
                </text>

                
            </svg>
            </div>
        </div>
      


    <div id="panel-4" class="panel-4 pl-12 w-full h-full module z-[30]" data-pin="true">
    <!-- <div class="start-reveal" style="position: relative; left: -50vw; background-color: red; width: 50px; height: 50px"></div> -->
    <?php  $query->the_post(); 
                $third_post = $query->posts[2];
                if($third_post) { ?>
                    
                    <div class="panel_4_content flex items-center relative h-[100vh]">
                        
                        <div class="h-2 w-[100vw] flex justify-start items-center h-[100%] z-30 relative ">
                         <h2 id="quote" class="text-pinkColor revealRtoL text-7xl leading-tight">
                            <?php   
                            $slide_text =  get_field( 'slide_text', $third_post->ID ) ;
                            
                            if( $slide_text ): ?>
                                <?php the_field('slide_text',  $third_post->ID ); ?>
                            <?php endif; ?>
                        </h2> 
                        </div>
                       
                        <div class="gallery flex gap-4 relative overflow-hidden  w-full z-[22]"  data-pin="true">
                            <div id="img-grid-1" class="image-grid-1 mb-4 w-36 flex flex-col gap-2">
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                            </div>
                            <div id="img-grid-2" class="image-grid-2 mb-4 w-36 flex flex-col gap-2">
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                            </div>
                            <div id="img-grid-3" class="image-grid-1 mb-4 w-36 flex flex-col gap-2">
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                            </div>
                            <div id="img-grid-4" class="image-grid-2 mb-4 w-36 flex flex-col gap-2">
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                                <div class=" h-48" style="background-color: red">im</div>
                            </div>
                        </div>
                        </div>
                   
                
            <?php }
            ?> 
            
     </div>
    <div id="panel-5" class="panel-5 w-full h-full module" data-pin="true" >
    <?php  $query->the_post(); 
                $fourth_post = $query->posts[3];
                if($fourth_post) { ?>
                    <div class="panel_5_content w-full h-full relative container">
                         <h2 class="vertical_text text-pinkColor text-4xl absolute  top-0 leading-tight rotate-90 z-30">
                            <?php   
                            $slide_text =  get_field( 'slide_text', $fourth_post->ID ) ;
                            $slide_text2 =  get_field( 'slide_text_2', $fourth_post->ID ) ;
                            
                            if( $slide_text ): ?>
                                <div id="text_1" class="text_1"><?php the_field('slide_text',  $fourth_post->ID ); ?></div>
                                <div id="text_2" class="text_2"><?php the_field('slide_text_2',  $fourth_post->ID ); ?></div>
                            <?php endif; ?>
                        </h2> 
                        
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($fourth_post->ID), 'full' ); ?>
                       <div class="mov absolute top-0 w-full h-full">
                        <div class="img-container w-full relative flex h-full flex justify-center items-center overflow-hidden">
                            <img class="last-sl-front w-auto img m-auto h-1/2 z-20" src="<?php echo $url  ?>"></img>
                            <img id="last-sl-blue" class="last-sl-blue img m-auto h-4/5 w-auto z-10  -right-24 top-1/5 rotate-[6deg]" src="<?php echo esc_url( get_theme_file_uri( './assets/serviceria-lastslide.png' ) ); ?>"></img>
                        </div>
                        </div>
                        <div id="home-footer" class="absolute w-[30vw] top-0 right-0 flex h-full flex justify-center items-center overflow-hidden">
                            <footer id="colophon" class="absolute top-0 hidden lg:block">
                            <div id="container" class="w-full h-auto grid ">
                            </div>
                                <div class="text-xl pr-12 w-full h-full absolute bottom-0 left-0 text-purpleColor flex items-end flex-col justify-around">
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
                                        <a href="https://instagram.com">Instagram</a>
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
