document.addEventListener("DOMContentLoaded", () => {
    const menuIcon = document.getElementById("menu-icon");
    const dropdownMenu = document.getElementById("dropdown-menu");

    menuIcon.addEventListener("click", (event) => {
        event.preventDefault();
        dropdownMenu.classList.toggle("show");
    });

    document.addEventListener("click", (event) => {
        if (!menuIcon.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.remove("show");
        }
    });
});
