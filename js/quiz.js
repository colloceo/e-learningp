document.addEventListener("DOMContentLoaded", () => {
    console.log("Quiz script loaded");

    const quizForm = document.querySelector("#quizForm");
    if (quizForm) {
        quizForm.addEventListener("submit", e => {
            e.preventDefault();
            const formData = new FormData(quizForm);

            // Optional: Validate required questions
            const unanswered = [...formData.entries()].filter(([k, v]) => !v);
            if (unanswered.length > 0) {
                alert("Please answer all questions before submitting.");
                return;
            }

            // Submit quiz via fetch (AJAX)
            fetch("/controllers/QuizController.php", {
                method: "POST",
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                alert("Quiz submitted! Score: " + data.score);
                window.location.href = "/student/dashboard.php";
            })
            .catch(err => {
                console.error(err);
                alert("Error submitting quiz.");
            });
        });
    }
});
