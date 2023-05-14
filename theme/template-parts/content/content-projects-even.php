<?php  
  $row_start = 1; 
   while ( have_posts() ) : the_post(); 
    if( $row_start % 2 == 0) {// even 
        $alignment =  get_field( 'post_class') ; ?>
        
        <div class="item relative">
          <a class="<?php the_field('post_class'); ?> relative" href="<?php the_permalink() ?>">
            <img class="grid-image" src="<?php echo the_post_thumbnail_url(); ?>" title="<?php echo get_the_title() ?>">
            <span hidden class="text-pinkColor justify-center items-center absolute top-0 left-0 w-full h-full"><?php echo get_the_title() ?></span>
          </a>
        </div>
    
  <?php  }
    ++$row_start; 
    endwhile;
?>