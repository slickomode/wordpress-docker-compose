document.addEventListener('DOMContentLoaded', function () {
    var hamburgerMenu = document.querySelector(theme_vars.hamburgerMenu);
    var navMenu = document.querySelector(theme_vars.navMenu);

    hamburgerMenu.addEventListener('click', function () {
        navMenu.classList.toggle('show');
    });
});
