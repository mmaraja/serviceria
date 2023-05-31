<div class="wrapper  mb-4 mr-4 md:mr-0 float-right z-50">
  <div class="fixed bottom-8 z-[9999]">
  <button class="btn js-open-popup h-5" style="background-image: url(<?php echo esc_url( get_theme_file_uri( './assets/at-icon.svg' ) ) ?>)"data-target="custom-popup"></button>

    <div class="custom-popup js-custom-popup" id="custom-popup" data-popup="custom-popup">
   
    <div class="custom-popup__holder js-custom-popup-holder relative container items-center flex justify-center">
      
      <span class="custom-popup__close h-5 js-close-popup z-[9999]" ></span>
     
      <div class="custom-popup__content flex justify-center items-center h-full">
        <div class="w-1/2 h-1/2 lg:h-auto">
          <div id="words" class="relative float-right text-right text-2xl md:text-5xl lg:text-6xl leading-tight	md:pr-8 h-full">
            <span id="text1"  ><?php the_field('text_1', 122); ?> </span>
            <span id="text2" hidden><?php the_field('text_2', 122); ?> </span>
            <span id="text3" hidden><?php the_field('text_3', 122); ?> </span>
            <span id="text4" hidden><?php the_field('text_4', 122); ?> </span>
            <span id="text5" hidden><?php the_field('text_5', 122); ?> </span>
          </div>
        </div>
        <div class="w-1/2 h-1/2 lg:h-auto">
          <div class="lg:w-1/2">
          <?php echo get_post_field('post_content', 122, false, false); ?>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
