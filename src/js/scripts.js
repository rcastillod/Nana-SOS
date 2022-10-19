var swiper = new Swiper("#heroSlider", {
  loop: true,
  navigation: {
    nextEl: ".swiper-next-button",
    prevEl: ".swiper-prev-button"
  },
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  effect: "fade",
  autoplay: {
    delay: 6500,
    disableOnInteraction: true,
  },
});