<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../models/Course.php';

class CourseController {
    public static function listCourses() {
        return Course::getAll();
    }

    public static function getCourse($id) {
        return Course::findById($id);
    }

    public static function createCourse($data) {
        return Course::create($data);
    }

    public static function updateCourse($id, $data) {
        return Course::update($id, $data);
    }

    public static function deleteCourse($id) {
        return Course::delete($id);
    }
}
