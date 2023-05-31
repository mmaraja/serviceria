<?php /* Template Name: Privacy Policy  */ ?>
<?php get_header(); ?>

<div class="privacy-policy bg-white relative pt-32 container h-full ">
    <a class="mr-0 absolute lg:relative ml-auto right-4 md:right-0 top-20 lg:-top-12 h-5 w-5" href="javascript://" onclick="history.back();">
        <img class="h-5 w-5 float-right" src="<?php echo esc_url( get_theme_file_uri( './assets/close.svg' ) ) ?>" alt="">
    </a>
    <div class="lg:max-w-[60%] w-full lg:m-auto text-pinkColor pb-16 ">
        <h1 class="text-center text-2xl pb-12"><?php the_title() ?></h1>
        <div class="text-sm" style="overflow-wrap: anywhere;"><?php the_content() ?></div>
    </div>
</div>
<div class="container">
<?php get_template_part( 'template-parts/content/content', 'modal' ); ?>
</div>

<?php get_footer('none') ?>

