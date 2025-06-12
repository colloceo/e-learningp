<?php
class Course {
    private $conn;
    private $table = "courses";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $stmt = $this->conn->query("SELECT * FROM {$this->table}");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByTeacher($teacherId) {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table} WHERE teacher_id = ?");
        $stmt->execute([$teacherId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (title, description, teacher_id) VALUES (?, ?, ?)");
        return $stmt->execute([$data['title'], $data['description'], $data['teacher_id']]);
    }
}
