<?php
class Assignment {
    private $conn;
    private $table = "assignments";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getByCourse($courseId) {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table} WHERE course_id = ?");
        $stmt->execute([$courseId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (course_id, title, description, due_date) VALUES (?, ?, ?, ?)");
        return $stmt->execute([
            $data['course_id'],
            $data['title'],
            $data['description'],
            $data['due_date']
        ]);
    }
}
