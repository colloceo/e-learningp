<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../models/Quiz.php';

class QuizController {
    public static function listQuizzes($courseId) {
        return Quiz::getByCourse($courseId);
    }

    public static function createQuiz($data) {
        return Quiz::create($data);
    }

    public static function submitQuiz($quizId, $answers, $userId) {
        return Quiz::submit($quizId, $answers, $userId);
    }

    public static function gradeQuiz($submissionId) {
        return Quiz::grade($submissionId);
    }
}
