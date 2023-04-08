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
      end: () => "+=" + container.offsetWidth
    }
  })


  
  const galleryContainer = document.getElementById("text");

  gsap.timeline({
    scrollTrigger: {
      trigger: galleryContainer,
      invalidateOnRefresh: true,
      pin: true,
      scrub: 1,
      end: () => "+=" + galleryContainer.offsetWidth
    }
  })
    .to(galleryContainer, {
      x: () => -(galleryContainer.scrollWidth - document.documentElement.clientWidth) + "px",
      ease: "none",
    })
  .to('.h-homeHeight', {
      x: () => (galleryContainer.scrollWidth - document.documentElement.clientWidth) + "px",
      ease: "none",
    },0)