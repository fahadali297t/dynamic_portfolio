// Simulate loading time and hide preloader
window.addEventListener("load", function () {
    setTimeout(() => {
        const preloader = document.getElementById("preloader");
        const mainContent = document.getElementById("mainContent");

        preloader.classList.add("fade-out");

        setTimeout(() => {
            preloader.style.display = "none";
            mainContent.classList.add("show");
        }, 500);
    }, 500); // 3 second delay to show the full loading animation
});
