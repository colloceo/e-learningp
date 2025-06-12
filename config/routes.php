<?php
/**
 * Simple route map.
 * This assumes you're using a front controller like `public/index.php`
 */

$routes = [
    '/' => 'views/dashboard/student.php',
    '/login' => 'public/login.php',
    '/logout' => 'public/logout.php',
    '/register' => 'public/register.php',

    // Dashboard by role
    '/admin' => 'views/dashboard/admin.php',
    '/teacher' => 'views/dashboard/teacher.php',
    '/student' => 'views/dashboard/student.php',

    // Courses
    '/courses' => 'views/courses/course_list.php',
    '/course/create' => 'views/courses/create_course.php',

    // Quizzes
    '/quizzes' => 'views/quizzes/index.php',

    // Assignments
    '/assignments' => 'views/assignments/index.php',
];
