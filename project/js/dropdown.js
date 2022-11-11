$(document).ready(() => {
    // dropdown
    $(".dropdown").on({
        click: () => {
            $(".dropdown-content").toggle();
            $(".icon-user").toggleClass("active")
        },
    });

    $(document).on("click", (event) => {
        if (!$(event.target).closest(".dropdown").length) {
            $(".dropdown-content").hide();
            $(".icon-user").removeClass("active")
        }
    });
});
