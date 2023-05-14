/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */


// let container = document.getElementById("container")

// gsap.to(container, {
//     x: () => -(container.scrollWidth - document.documentElement.clientWidth) + "px",
//     ease: "none",
//     scrollTrigger: {
//       trigger: container,
//       invalidateOnRefresh: true,
//       pin: true,
//       scrub: 0.2,
//       start: 'top 80',

//       end: () => "+=" + container.offsetWidth
//     }
//   });


// const large = document.querySelector(".large-child");
// gsap.to(large, {
//   x: () => -(large.clientWidth + document.documentElement.clientWidth ) + "px",
//   ease: "none",
//   scrollTrigger: {
//     trigger: large,
//     pin: true,
//     start: "center right",
//     end: () => "+=" + container.offsetWidth,
//     scrub: 1,
//     invalidateOnRefresh: true,
    

//   }
// });
  
// const pageContainer = document.querySelector(".container-this");

// /* SMOOTH SCROLL */
// const scroller = new LocomotiveScroll({
//   el: pageContainer,
//   smooth: true,
  
// });

// scroller.on("scroll", ScrollTrigger.update);

// ScrollTrigger.scrollerProxy(pageContainer, {
//   scrollTop(value) {
//     return arguments.length
//       ? scroller.scrollTo(value, 0, 0)
//       : scroller.scroll.instance.scroll.y;
//   },
//   getBoundingClientRect() {
//     return {
//       right: 0,
//       top: 0,
//       width: window.innerWidth,
//       height: window.innerHeight
//     };
//   },
//   pinType: pageContainer.style.transform ? "transform" : "fixed"
// });

// const svgText = document.querySelector("#textOnPath1");



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
$('.item a').hover(
  function(){
      $(this).find('img').css('opacity','.6');
      $(this).find('span').fadeIn();
      $(this).find('span').css('display', 'flex');

  },
  function(){
      $(this).find('img').css('opacity','1');
      $(this).find('span').fadeOut();
  }
);

$(document).ready(function() {
  if($('body').hasClass('single-projects')) {
    $('body').find('.menu .menu-item:first-child a').addClass('active-link');
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




(function () {
  var contact_text1 = $('span#text1').html();
  var contact_text2 = $('span#text2').html();
  var contact_text3 = $('span#text3').html();
  var contact_text4 = $('span#text4').html();
  var contact_text5 = $('span#text5').html();

  var words = [contact_text1, contact_text2, contact_text3, contact_text4, contact_text5],

   i = 0;
    setInterval(function(){ 
      $('#words').animate({'opacity': 0, right: '-200px'}, 400, function(){
        $(this).html(words[(i = (i + 1) % words.length)]).animate({'opacity': 1}, 400);    
    });

    }, 4000)
})();




//  /*footer copyright*/
 if($('footer').length > 0 ){
  document.getElementById("year").innerHTML =new Date().getFullYear();
}

/**gsap */
gsap.registerPlugin(ScrollTrigger);

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
    end: "+=4000",
  
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
  x: "-70vw",
  ease: "none",
  // duration: 3,
  scrollTrigger: {
      trigger: ".text-start",
      scrub: true,
      start: "left -100%",
      // end: "left 50%"
      end: "+=3500",
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

// gsap.set(".revealRtoL", {x: "60vw"});

// gsap.to(".revealRtoL", {
//   x: 0,

//   ease: "none",
//   scrollTrigger: {
//     trigger: ".panel-4",
//     containerAnimation: tl,
//     start: "left right",

//     id: "1",
//   }
// });
gsap.set(".revealRtoL", { x: '100vw', opacity:0 });
gsap.to(
  ".revealRtoL",

  {
    x: '0',
    opacity:1,
    // Adjust the duration as per your preference
    ease: 'power2.out', // Adjust the easing function as desired
    scrollTrigger: {
      trigger: ".panel-4",
      containerAnimation: tl,
      start: "-150%",
      toggleActions: "play none none reset",
      id: "1",
    }
  }, 
);



/**panel 4, split text */
var panel_3_text =$('#quote').text();
const panel_3_words = panel_3_text.replace(/\n/g, ' ');
let result = panel_3_words.trim();
var text_array = result.split(' ');
var word = text_array[text_array.length-2];

var character = word.charAt(3);

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
    start: "-130%",
    end: "+=5000" 
   
  }
});

gsap.set(sections1, {yPercent:-90 * (sections1.length-1)});
gsap.set(sections2, {yPercent:90 * (sections2.length-1)});
gsap.set(sections3, {yPercent:-90 * (sections3.length-1)});
gsap.set(sections4, {yPercent:90 * (sections4.length-1)});

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
let vertical_text1 = gsap.utils.toArray('.text_2');
let vertical_text2 = gsap.utils.toArray('.text_1');


const timelineVerticalText = gsap.timeline({
  ease: "none",
  autoAlpha: 1,
  onComplete: startNextTimeline,
  scrollTrigger: {
    trigger: ".panel-5",
    pin: true,
    containerAnimation: tl,
    scrub: 1,
    start: "left 80%",
    end: "+=4000",
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

gsap.set("#home-footer", { x: "50vw"});


// Function to toggle between timelines
function startNextTimeline() {
  const footer = gsap.timeline({
    scrollTrigger: {
      trigger: '.panel-5',
      start: '-100%',
      containerAnimation: tl,
      end: '+=5000',
      pin: true,
      scrub: 2,
    }
  })

  footer.fromTo(
    "#home-footer",
    {  x: "50vw" },
    {
    width: "20vw",
    x: "0",
    ease: "back.out(2)"
  }).to('.mov', {
    x: "-40%"
  }, 0)

  // Add animations to the second timeline
 

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





