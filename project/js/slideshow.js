window.addEventListener("load", () => {
    return show_slides(0);
});

const show_slides = (slideIndex) => {
    const slides = document.getElementsByClassName("slide");

    slides[slideIndex].classList.add("show");

    return setInterval(() => {
        for (let i = 0; i < slides.length; i++) {
            slides[i].classList.remove("show");
        }

        slideIndex = (slideIndex + 1) % (slides.length);

        slides[slideIndex].classList.add("show");
    }, 2000, slideIndex);
}

const stopSlideShow = () => {
    // https://gist.github.com/mcenirm/4165198
    (function (w) {
        w = w || window;
        let i = w.setInterval(function () {
        }, 100000);
        while (i >= 0) {
            w.clearInterval(i--);
        }
    })(/*window*/);
}
