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

const stopSlideShow = (intervalId) => {
    console.log("interval (id: " + intervalId + ")")
    if (intervalId !== undefined) {
        clearInterval(intervalId);
    }
}
