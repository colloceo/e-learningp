document.addEventListener("DOMContentLoaded", () => {
    console.log("Main JS loaded");

    // Highlight active nav link
    const currentPath = window.location.pathname;
    document.querySelectorAll("nav a").forEach(link => {
        if (link.getAttribute("href") === currentPath) {
            link.classList.add("active");
        }
    });

    // Global logout button (if any)
    const logoutBtn = document.querySelector("#logoutBtn");
    if (logoutBtn) {
        logoutBtn.addEventListener("click", () => {
            window.location.href = "/logout.php";
        });
    }
});
