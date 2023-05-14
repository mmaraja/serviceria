<?php get_header() ?>

<div class="container single-project pt-16 relative hidden lg:flex">
    <div class="left-col overflow-y-scroll w-3/4 h-4/5 mt-32">
        <?php the_content() ?>
    </div>
    <div class="overflow-hidden w-1/4 pt-32 h-4/5 flex flex-col justify-between relative">
        <a class="absolute right-0 top-0 h-4" href="<?php echo get_post_type_archive_link( 'projects' ) ?>">
            <img class="h-full" src="<?php echo esc_url( get_theme_file_uri( './assets/close.svg' ) ) ?>" alt="">
        </a>
        <div class="relative">
        <h1 class="project-title text-pinkColor text-xl uppercase"><?php the_title() ?></h1>
        <h2 class="project-description text-purpleColor text-light text-3xl pl-20">
            <?php the_field('description',  false, false) ?>
        </h2>
        </div>
        <div class="text-xs leading-5 pl-4 text-pinkColor">
            <?php the_field('creators_info', false, false) ?>
        </div> 
    </div>
    <?php get_template_part( 'template-parts/content/content', 'modal' ); ?>
</div>
<div class="container single-project pt-32 relative block lg:hidden">
    <div class="h-5/6">
        <a class="fixed top-0 right-0 mr-4 mt-4 h-10 z-20" href="<?php echo get_post_type_archive_link( 'projects' ) ?>">
            <img class="h-full" src="<?php echo esc_url( get_theme_file_uri( './assets/close.svg' ) ) ?>" alt="">
        </a>
        <h1 class="text-pinkColor text-2xl uppercase"><?php the_title() ?></h1>

        <h2 class="py-6 project-description text-purpleColor text-light text-xl">
            <?php the_field('description',  false, false) ?>
        </h2>
        <?php
        $blocks = parse_blocks( get_the_content() );
        echo($blocks[0]['innerHTML']);?>
        <div class="text-xs py-6 leading-5 text-pinkColor">
            <?php the_field('creators_info', false, false) ?>
        </div> 
    </div>

    <div class="mob-video">
        <?php the_content() ?>
    </div>        
   

        
    <?php get_template_part( 'template-parts/content/content', 'modal' ); ?>
</div>

<?php get_footer() ?>