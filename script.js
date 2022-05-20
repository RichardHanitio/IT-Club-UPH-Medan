// variables
const headerNavbarContainer = document.querySelector(
    ".header-navbar-container"
);
const hamburgerIcon = document.querySelector(".header-hamburger-icon");
const header = document.querySelector(".header");
const headerNavbarList = [
    ...headerNavbarContainer.querySelectorAll(".header-navbar-list"),
];

// init swiper
if (screen.width <= 700) {
    let swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        centeredSlides: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
} else {
    let swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
}

// click hamburger icon
hamburgerIcon.addEventListener("click", () => {
    headerNavbarContainer.classList.toggle("header-active");
    headerNavbarList.forEach((list) =>
        list.classList.toggle("header-navbar-list-anim")
    );
});

// scroll down header
window.addEventListener("scroll", () => {
    const scrolled = window.scrollY;
    if (screen.width > 700) {
        if (scrolled >= 200) {
            header.style.cssText = `
                height : 4rem;
                opacity : 0.6;
                transition : all 0.3s;
                box-shadow: 0 5px 10px 0 rgba(0,0,0,.5);
            `;
        } else {
            header.style.cssText = `
                height : 5rem;
                opacity : 1;
                transition : all 0.3s;
            `;
        }
    }
});
