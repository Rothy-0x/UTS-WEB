let navbarlinks = document.querySelectorAll('#navbar a');

function navbarlinksActive() {
  navbarlinks.forEach(navbarlink => {

    if (!navbarlink.hash) return;

    let section = document.querySelector(navbarlink.hash);
    if (!section) return;

    let position = window.scrollY + 200;

    if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
      navbarlink.classList.add('active');
    } else {
      navbarlink.classList.remove('active');
    }
  })
}
window.addEventListener('load', navbarlinksActive);
document.addEventListener('scroll', navbarlinksActive);

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  grabCursor: true,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
 /**
   * Mobile nav toggle
   */
 const mobileNavShow = document.querySelector('.mobile-nav-show');
 const mobileNavHide = document.querySelector('.mobile-nav-hide');

 document.querySelectorAll('.mobile-nav-toggle').forEach(el => {
   el.addEventListener('click', function(event) {
     event.preventDefault();
     mobileNavToogle();
   })
 });

 function mobileNavToogle() {
   document.querySelector('body').classList.toggle('mobile-nav-active');
   mobileNavShow.classList.toggle('d-none');
   mobileNavHide.classList.toggle('d-none');
 }

 /**
  * Hide mobile nav on same-page/hash links
  */
 document.querySelectorAll('#navbar a').forEach(navbarlink => {

   if (!navbarlink.hash) return;

   let section = document.querySelector(navbarlink.hash);
   if (!section) return;

   navbarlink.addEventListener('click', () => {
     if (document.querySelector('.mobile-nav-active')) {
       mobileNavToogle();
     }
   });

 });
