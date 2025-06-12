export function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add("visible");
    }
}

export function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove("visible");
    }
}

// Optional: Close modals on background click
document.addEventListener("click", (e) => {
    if (e.target.classList.contains("modal-background")) {
        e.target.closest(".modal").classList.remove("visible");
    }
});
