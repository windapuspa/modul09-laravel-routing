import 'bootstrap';

// navbar jadi hitam setelah discroll
const nav = document.querySelector(".navbar");
if (nav) {
    window.addEventListener("scroll", function () {
        nav.classList.toggle("bg-black", window.scrollY > 50);
    });
}