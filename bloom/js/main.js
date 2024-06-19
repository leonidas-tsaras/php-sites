window.addEventListener("load", function () {
    let icon = document.querySelector("header > nav#hidden-menu");
    let drop = document.querySelector("header > nav#dropdown-menu");
    icon.addEventListener("click", function () {
        drop.classList.toggle("nodisplay");
    });
});
