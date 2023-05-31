/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */



$('.grid-image').each(function() {
  if($(this).width() > $(this).height()) {
    $(this).parent().addClass("horizontal"); 
  } else {
    $(this).parent().addClass("vertical");
  }        
});
$('.grid-image-2').each(function() {
  if($(this).width() > $(this).height()) {
        $(this).parent().addClass("horizontal"); 
  } else {
    $(this).parent().addClass("vertical");
  }        
});
$('.item video').each(function() {
  if($(this).width() > $(this).height()) {
        $(this).parent().addClass("horizontal"); 
  } else {
    $(this).parent().addClass("vertical");
  }        
});
$('.item a').hover(
  function(){
      $(this).find('img').css('opacity','.6');
      $(this).find('video').css('opacity','.6');
      $(this).find('span').fadeIn();
      $(this).find('span').css('display', 'flex');

  },
  function(){
      $(this).find('img').css('opacity','1');
      $(this).find('video').css('opacity','1');
      $(this).find('span').fadeOut();
  }
);

$(document).ready(function() {
  if($('body').hasClass('single-projects')) {
    $('body').find('.menu .menu-item:first-child a').addClass('active-link');
  }
  if($(window).width() < 1024) {
    $('#words p br').remove();

  }
})
$( ".open-close-btn" ).on('click touchstart', function(e) {
  // prevent default anchor click 
  e.preventDefault();
  $(".overlay").toggleClass("overlay-open");
  $("#hamburger-icon").toggleClass("hamburger-open");
});

function customPopup() {

  let $btnShowPopup = $('.js-open-popup');
  let $btnClosePopup = $('.js-close-popup');
  let $popup = $('.js-custom-popup');

  $btnShowPopup.on('click', function () {

      let targetPopup = $(this).attr('data-target');
      $("[data-popup=" + targetPopup + "]").addClass('is-active');

  });

  $btnClosePopup.on('click', function () {
      $(".js-custom-popup").removeClass('is-active');
      $popup.css('transition', '0.4s')
  });

  $popup.on('click', function (event) {
      if (!$(event.target).closest('.js-custom-popup-holder').length && !$(event.target).is('js-custom-popup')) {
          if ($popup.hasClass('is-active')) {
              $popup.removeClass('is-active');
          }
      }
  });

}
customPopup();

function customPopupCredits() {

  let $btnShowPopup = $('.js-open-popup-cred');
  let $btnClosePopup = $('.js-close-popup-cred');
  let $popup = $('.js-custom-popup-cred');

  $btnShowPopup.on('click', function () {
      revealWord();
      $(".js-custom-popup-cred").addClass('is-active');
  });

  $btnClosePopup.on('click', function () {
      $(".js-custom-popup-cred").removeClass('is-active');
      $popup.css('transition', '0.4s')
  });

  $popup.on('click', function (event) {
      if (!$(event.target).closest('.js-custom-popup-holder-cred').length && !$(event.target).is('js-custom-popup-cred')) {
          if ($popup.hasClass('is-active')) {
              $popup.removeClass('is-active');
          }
      }
  });

}
customPopupCredits();

function revealWord() {
  if($(window).width() > 1024) {
$('#credits-reveal').each(function() {
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({
    loop: false
  })
  .add({
    targets: '#credits-reveal .letter',
    translateY: [100, 0],
    easing: "easeOutExpo",
    duration: 1800,
    delay: function(el, i) {
      return 170 * i;
    }
  })
}

}

if($(window).width() > 1024) {
(function () {
  var contact_text1 = $('span#text1').html();
  var contact_text2 = $('span#text2').html();
  var contact_text3 = $('span#text3').html();
  var contact_text4 = $('span#text4').html();
  var contact_text5 = $('span#text5').html();
  
  var words = [contact_text1, contact_text2, contact_text3, contact_text4, contact_text5],

   i = 0;
   $('.js-open-popup').click(function () {
    setInterval(function(){ 
      $('#words').animate({'opacity': 1, right: '300px'}, 400, function(){
        $(this).html(words[(i = (i + 1) % words.length)]).animate({'opacity': 1, right: "0"}, 400);    
    });

    }, 4000)
  })
})();

}


//  /*footer copyright*/
 if($('footer').length > 0 ){
  document.getElementById("year").innerHTML =new Date().getFullYear();
}

/**gsap */
gsap.registerPlugin(ScrollTrigger);
if($('.home').length > 0) {
let sections = gsap.utils.toArray(".module");
let container = document.getElementsByClassName("container-wrapper");
const tl = gsap.timeline({
  xPercent: -100 * (sections.length - 1),
  // x: () => -(container.clientWidth + document.documentElement.clientWidth ) + "px",
  defaults: {
    ease: "none"
  },
  scrollTrigger: {
    trigger: ".container-wrapper",
    pin: true,
    scrub: 0.5,
    end: "+=6000",
  
  }
});
const stops = [];

sections.forEach((section, index) => {
  if (section.dataset.pin) stops.push(index);
});
const svgText = document.querySelector('#textOnPath1');

stops.forEach((stop, index) => {
  let currentSection = sections[stop];
  const q = gsap.utils.selector(currentSection);

  tl.to(sections, {
    xPercent: -(100 * stop),
    duration: stop
  });

  if (currentSection.querySelector(".large-child")) {
    tl.to(".slide-text", {
      x: () => "-100vw",
    });
  }
  if (currentSection.querySelector(".panel_3_content")) {
    console.log("p5");
    tl.to(".panel_3_img", {
      x: () => "0vw",
    })
  }
   if (currentSection.querySelector(".panel_4_content")) {
    console.log("p5");
    tl.to(".h-2", {
      x: () => "0", }
    )
  
   }
   if (currentSection.querySelector(".panel_5_content")) {
    console.log("p5");
    tl.to(".img-container", {
      x: () => "0vw",
    })
   
   
   }
  
 

  if (index === stops.length - 1) {
    tl.to(sections, {
      xPercent: -(100 * (sections.length - 1)),
      duration: sections.length - stop
    });
  }
});

gsap.to(".text-wrap", {
  x: "150vw",
  ease: "none",
  // duration: 3,
  scrollTrigger: {
      trigger: ".text-start",
      scrub: true,
      start: "left -80%",
      end: "left -400%"
      // end: "+=3500",
      // markers: true
      // start: "left right"
  }
})
gsap.to(".text", {
  x: "-30vw",
  ease: "none",
  // duration: 3,
  scrollTrigger: {
      trigger: ".text-start",
      scrub: true,
      start: "left -100%",
      // end: "left 50%"
      end: "+=2500",
      // markers: true
      // start: "left right"
  }
})
let tle = gsap.timeline()
  .to(svgText, {
    x: "-100vw",
    attr: {
      startOffset: -5200
    }
})

ScrollTrigger.create({
  animation: tle,
  scrub: true
});

gsap.set(".revealRtoL", { x: '100vw', opacity:0, autoAlpha: 0});

gsap.to(
  ".revealRtoL",
  {
    x: '0',
    opacity:1,
    autoAlpha: 1,
    duration: 1.2,
    // Adjust the duration as per your preference
    ease: 'power2.out', // Adjust the easing function as desired
    scrollTrigger: {
      trigger: ".panel-4",
      pin: true,
      containerAnimation: tl,
      start: "-120%",
      toggleActions: "play none none reset",
      id: "1",
    }
  }, 0
);



/**panel 4, split text */
// var panel_3_text =$('#quote').text();
// const panel_3_words = panel_3_text.replace(/\n/g, ' ');
// let result = panel_3_words.trim();
// var text_array = result.split(' ');
// var word = text_array[text_array.length-2];

// var character = word.charAt(3);

let sections1 = gsap.utils.toArray("#img-grid-1 > div");
let sections2 = gsap.utils.toArray("#img-grid-2 > div");
let sections3 = gsap.utils.toArray("#img-grid-3 > div");
let sections4 = gsap.utils.toArray("#img-grid-4 > div");
let sections1_grid = gsap.utils.toArray('.image-grid-1');
let sections2_grid = gsap.utils.toArray('.image-grid-2');

let section = $(".gallery");

const timeline = gsap.timeline({
  ease: "none",
  scrollTrigger: {
    trigger: ".panel-4",
    pin: true,
    containerAnimation: tl,
    scrub: 2,
    start: "-120%",
    end: "+=4500" 
   
  }
});

gsap.set(sections1, {yPercent:-110 * (sections1.length-1)});
gsap.set(sections2, {yPercent:110 * (sections2.length-1)});
gsap.set(sections3, {yPercent:-110 * (sections3.length-1)});
gsap.set(sections4, {yPercent:110 * (sections4.length-1)});

timeline.to(
  sections1_grid,
  
  {yPercent: 80* (sections1.length -1), }, 
)

.to(
  sections2_grid,
  
  {yPercent: -80* (sections2.length -1), }, 0
)


const image = document.querySelector('.last-sl-blue');
const image2 = document.querySelector('.last-sl-front');


gsap.set(image, { x: '40%' });


gsap.fromTo(
  image,
  { x: '40%' },
  {
    x: '0%',
    duration: 1, // Adjust the duration as per your preference
    ease: 'power2.out', // Adjust the easing function as desired
    scrollTrigger: {
      trigger: ".panel-5",
      containerAnimation: tl,
      start: "-100%",
      toggleActions: "play none none reset",
      id: "3",
    }
  }
);


gsap.set(image2, { x: '300%' });
gsap.fromTo(
  image2,
  { x: '300%' },
  {
    x: '0%',
    duration: 1, // Adjust the duration as per your preference
    ease: 'power2.out', // Adjust the easing function as desired
    scrollTrigger: {
      trigger: ".panel-5",
      containerAnimation: tl,
      start: "-100%",
      toggleActions: "play none none reset",
      id: "4",
    }
  }
);



let left_text = gsap.utils.toArray('#text_2 > p');
let right_text = gsap.utils.toArray('#text_1 > p');

const timelineVerticalText = gsap.timeline({
  ease: "none",
  autoAlpha: 1,
  onComplete: startNextTimeline,
  scrollTrigger: {
    trigger: ".panel-5",
    pin: true,
    containerAnimation: tl,
    scrub: 1,
    start: "left 50%",
    end: "+=100%",
  }
});


gsap.set(left_text, {xPercent:-150});
gsap.set(right_text, {xPercent:150});


timelineVerticalText.to(
  left_text,
  {xPercent: 300, duration: 2}, 
)

.to(
  right_text,
  {xPercent: -300, duration: 2}, 0, 
)


function startNextTimeline() {
  const footer = gsap.timeline({
    scrollTrigger: {
      trigger: '.panel-5',
      start: '-10%',
      containerAnimation: tl,
      end: '0%',
      pin: true,
      scrub: 2,
    }
  })
  footer.fromTo(
    "#home-footer",
    {  x: "400%" },
    {
    x: "40%",
    ease: "back.out(2)"
  }).to('.mov', {
    x: "-40%"
  }, 0)

}

 



const container2 = document.getElementById('container');
const text = 'Contact Us';
const repeatCount = 5;

for (let i = 0; i < repeatCount; i++) {
  const span = document.createElement('span');
  span.textContent = text;
  span.classList.add("contact-us");
  container2.appendChild(span);
}

container2.dir = 'rtl'; // Change text direction to right-to-left


const svgText2 = document.querySelector("#textOnPath2");



gsap.set(svgText2, { x: '0%' });

let tleMob = gsap.timeline()
  tleMob.to(
    svgText2,
   
    {
      x: '-100%',
      scrollTrigger: {
        trigger: '.panel-mob-1',
        start: 'left right', 
        end: '+=200%',
        scrub: 1,
      },
      ease: 'power2.out', // Adjust the easing function as desired
      attr: {
        startOffset: -2000
      }
    }
  );


ScrollTrigger.create({
  animation: tleMob,
  scrub: true
});

/**mobile gallery */

let sections1_mob = gsap.utils.toArray("#img-grid-1mob > img");
let sections2_mob = gsap.utils.toArray("#img-grid-2mob > img");
let sections3_mob = gsap.utils.toArray("#img-grid-3mob > img");
let sections4_mob = gsap.utils.toArray("#img-grid-4mob > img");
let sections1_grid_mob = gsap.utils.toArray('.image-grid-1mob');
let sections2_grid_mob = gsap.utils.toArray('.image-grid-2mob');

let sectionGalMob = $(".gallery_mob");

const timelineGalMob = gsap.timeline({
  ease: "none",
  scrollTrigger: {
    trigger: ".panel-mob-2",
    pin: true,
    scrub: 1,
    start: () => "top top",
    end: "+=2000",
   
  }
});

gsap.set(sections1_mob, {xPercent:-85 * (sections1_mob.length-3)});
gsap.set(sections2_mob, {xPercent:100 * (sections2_mob.length-7)});
gsap.set(sections3_mob, {xPercent:-95 * (sections3_mob.length-3)});
gsap.set(sections4_mob, {xPercent:95 * (sections4_mob.length-7)});

timelineGalMob.to(
  sections1_grid_mob,
  {xPercent: 18 * (sections1_mob.length-4)}, 
)

.to(
  sections2_grid_mob,
  
  {xPercent: -18 * (sections2_mob.length-4)}, 0
)

/**last slide text mobile */
let upper_text = gsap.utils.toArray('#text_2_mob > p');
let down_text = gsap.utils.toArray('#text_1_mob > p');
let hor_text1 = gsap.utils.toArray('.text_2_mob');
let hor_text2 = gsap.utils.toArray('.text_1_mob');


const timelineHorizontalText = gsap.timeline({
  ease: "none",
  autoAlpha: 1,
  scrollTrigger: {
    trigger: ".panel-mob-3",
    scrub: 1,
    pin: true,
    start: () => "top top",
    end: "+=2000",
  }
});


gsap.set(upper_text, {xPercent: -100});
gsap.set(down_text, {xPercent: 100});


timelineHorizontalText.to(
  upper_text,
  {xPercent: 50}, 
)

.to(
  down_text,
  {xPercent: -50}, 0, 
)
}

const container_popup = document.querySelector('.js-custom-popup');
const container_cred_popup = document.querySelector('.js-custom-popup-cred');
const updateViewportElements = () => {
  container_popup.style.height = `${window.innerHeight}px`;
  container_cred_popup.style.height = `${window.innerHeight}px`;
};

window.addEventListener('resize', updateViewportElements);

updateViewportElements();