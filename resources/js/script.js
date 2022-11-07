// const preloader = document.querySelector(".preloader");
// window.addEventListener("load", () => {
//   window.setTimeout(() => {
//     preloader.classList.add("preloader--active");
//   }, 1000);
// });

const hamburger = document.querySelector(".hamburger");
const navbar = document.querySelector(".nav--links");
const navLinks = document.querySelectorAll(".nav--links li");
hamburger.addEventListener("click", () => {
  navbar.classList.toggle("nav--active");
  // console.log(hamburger.children)
  hamburger.children[0].classList.toggle('rotate--one')
  hamburger.children[1].classList.toggle('middle')
  hamburger.children[2].classList.toggle('rotate--two')
});
navLinks.forEach(el=>{
  el.addEventListener("click", () => {
    navbar.classList.toggle("nav--active");
    hamburger.children[0].classList.toggle('rotate--one')
  hamburger.children[1].classList.toggle('middle')
  hamburger.children[2].classList.toggle('rotate--two')
  });
})
