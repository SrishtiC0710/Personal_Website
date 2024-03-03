new Swiper("#swiper-1",{
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 30,
    lazyLoading: true,
    loop: true,
    keyboard: {
        enabled: true
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
});