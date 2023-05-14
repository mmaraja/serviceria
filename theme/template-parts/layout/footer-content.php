<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package serviceria
 */

?>

<footer id="colophon" class="relative mt-32 hidden lg:block">
	<span class="text-pinkColor -z-1 absolute w-full contact">Contact Us</span>
	<div class="m-auto container absolute bottom-0 left-0 text-purpleColor">
	<?php dynamic_sidebar('Footer - contact');?>   	
	</div>
</footer>
<footer id="colophon-mob" class="mob-footer relative mt-12 block lg:hidden">
	<span class="text-pinkColor -z-1 absolute w-full contact bottom-0">Contact Us</span>
	<div class="foot-mobile m-auto container absolute top-0 left-0 text-purpleColor flex justify-between items-center h-full">
		<?php dynamic_sidebar('Footer - contact(mobile)');?>   	
	</div>
	<p class="text-purpleColor text-xs absolute bottom-0 text-center w-full">
        © <span id="year"></span> SERVICERIA d.o.o. All rights reserved. 
    </p>
</footer>
