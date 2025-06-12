<?php
class Grade {
    private $conn;
    private $table = "grades";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getByStudent($studentId) {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table} WHERE student_id = ?");
        $stmt->execute([$studentId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function record($data) {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (assignment_id, student_id, grade, feedback) VALUES (?, ?, ?, ?)");
        return $stmt->execute([
            $data['assignment_id'],
            $data['student_id'],
            $data['grade'],
            $data['feedback']
        ]);
    }

    public function update($data) {
        $stmt = $this->conn->prepare("UPDATE {$this->table} SET grade = ?, feedback = ? WHERE assignment_id = ? AND student_id = ?");
        return $stmt->execute([
            $data['grade'],
            $data['feedback'],
            $data['assignment_id'],
            $data['student_id']
        ]);
    }
}
