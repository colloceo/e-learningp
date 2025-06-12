document.addEventListener("DOMContentLoaded", () => {
    console.log("Dashboard script loaded");

    // Simulate loading progress bars
    const progressBars = document.querySelectorAll(".progress-bar");
    progressBars.forEach(bar => {
        const value = bar.dataset.value;
        bar.style.width = value + "%";
        bar.textContent = value + "%";
    });
});
