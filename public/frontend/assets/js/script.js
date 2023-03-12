//spinner
// window.addEventListener("load", () => {
//     const spinner = document.querySelector(".spinner");
//     spinner.classList.add("spinner-hidden");
//     });


 // Header scroll class
 $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
    $('.nav-bar').addClass('header-scrolled');
    } else {
    $('.nav-bar').removeClass('header-scrolled');
    }
});

$(".togglemenu-open").on('click', function () {
    $(".nav-drawer").addClass("show__nav-drawer");
    $(".nav-overlay").addClass("active");
});

$(".nav-overlay").on('click', function () {
    $(".nav-drawer").removeClass("show__nav-drawer");
    $(".nav-overlay").removeClass("active");
});
