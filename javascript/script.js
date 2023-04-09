/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
gsap.registerPlugin(ScrollTrigger)

let container = document.getElementById("container")

gsap.to(container, {
    x: () => -(container.scrollWidth - document.documentElement.clientWidth) + "px",
    ease: "none",
    scrollTrigger: {
      trigger: container,
      invalidateOnRefresh: true,
      pin: true,
      scrub: 1,
      start: 'top 80',

      end: () => "+=" + container.offsetWidth
    }
  });


const large = document.querySelector(".large-child");
gsap.to(large, {
  x: () => -(large.clientWidth + document.documentElement.clientWidth ) + "px",
  ease: "none",
  scrollTrigger: {
    trigger: large,
    pin: true,
    start: "left left",
    end: () => "+=1000",
    scrub: 1,
    invalidateOnRefresh: true,
    

  }
});
  
const pageContainer = document.querySelector(".container-this");

/* SMOOTH SCROLL */
const scroller = new LocomotiveScroll({
  el: pageContainer,
  smooth: true,
  
});

scroller.on("scroll", ScrollTrigger.update);

ScrollTrigger.scrollerProxy(pageContainer, {
  scrollTop(value) {
    return arguments.length
      ? scroller.scrollTo(value, 0, 0)
      : scroller.scroll.instance.scroll.y;
  },
  getBoundingClientRect() {
    return {
      right: 0,
      top: 0,
      width: window.innerWidth,
      height: window.innerHeight
    };
  },
  pinType: pageContainer.style.transform ? "transform" : "fixed"
});

const svgText = document.querySelector("#textOnPath1");

//timeline test
var tl = gsap.timeline({
  scrollTrigger: {
    trigger: "#trigger",
    scroller: pageContainer,
    scrub: true,
    pin: true,
    start: 'top 80',
    end: () => "+=500%",
    yoyo:true,

  }
});

tl
.to(svgText, {
 
 yoyo: true,
  attr: {
    startOffset: -2000
  },
  
}, 0)



ScrollTrigger.addEventListener("refresh", () => scroller.update()); //locomotive-scroll

ScrollTrigger.refresh();
