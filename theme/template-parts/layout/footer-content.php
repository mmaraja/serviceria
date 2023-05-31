<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package serviceria
 */

?>

<footer id="colophon" class="page relative mt-32 hidden lg:block">
	<span class="text-pinkColor -z-1 absolute w-full contact">Contact Us</span>
	<div class="m-auto container flex absolute bottom-0 left-0 text-purpleColor">
		<div id="first-col" class="w-full flex flex-col items-start justify-center">
			<button class="btn js-open-popup-cred" data-target="custom-popup-cred">
			Credits
			</button>
			<a href="/privacy-policy">Privacy Policy</a>
			<p class="text-purpleColor text-start w-[max-content]">
				© <span id="year"></span> SERVICERIA d.o.o. All rights reserved. 
			</p>
		</div>
		<div class="w-full flex flex-col items-center justify-center text-start">
			<p>SERVICERIA d.o.o. <br>
			Brodišče 23, <br>
			1236 Trzin, Slovenia</p>
		</div>
		<div class="w-full flex flex-col items-start md:pl-12 text-start justify-center ">
			<a href="https://www.instagram.com/serviceria/">Instagram</a>
			<a href="https://vimeo.com/serviceria">Vimeo</a>
		</div>
	</div>	
	
</footer>
<footer id="colophon-mob" class="mob-footer relative mt-12 block lg:hidden">
	<span class="text-pinkColor -z-1 absolute w-full contact bottom-0">Contact Us</span>
	<div class="foot-mobile m-auto container absolute top-0 left-0 text-purpleColor flex justify-between items-center h-full">
		<div id="first-col" class="w-full flex flex-row items-start justify-between">
			<button class="btn js-open-popup-cred" data-target="custom-popup-cred">
			Credits
			</button>
			<a href="/privacy-policy">Privacy Policy</a>
			<a target="_blank" href="https://www.instagram.com/serviceria/">Instagram</a>
			<a target="_blank" href="https://vimeo.com/serviceria">Vimeo</a>

		</div>
	</div>
	<p class="text-purpleColor text-xs absolute bottom-0 text-center w-full">
        © <span id="year"></span> SERVICERIA d.o.o. All rights reserved. 
    </p>
</footer>
