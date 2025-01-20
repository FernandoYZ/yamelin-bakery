document.addEventListener("DOMContentLoaded", () => {
    const hamburger = document.querySelector(".hamburger-menu");
    const menu = document.querySelector(".menu");
    const menuLinks = document.querySelectorAll(".menu-link");

    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("open");
        menu.classList.toggle("active");
    });

    document.addEventListener("click", (e) => {
        if (!hamburger.contains(e.target) && !menu.contains(e.target) && menu.classList.contains("active")) {
            hamburger.classList.remove("open");
            menu.classList.remove("active");
        }
    });

    menuLinks.forEach(link => {
        link.addEventListener("click", () => {
            if (window.innerWidth <= 768) {
                hamburger.classList.remove("open");
                menu.classList.remove("active");
            }
        });
    });

    window.addEventListener("resize", () => {
        if (window.innerWidth > 768) {
            hamburger.classList.remove("open");
            menu.classList.remove("active");
        }
    });
});