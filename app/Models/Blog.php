<?php
namespace App\Models;

class Blog {
    private $pdo;

    public function __construct() {
        require __DIR__ . '/../../config/database.php';
        $this->pdo = getDBConnection();
    }

    public function getAllBlogs() {
        $stmt = $this->pdo->query("SELECT * FROM blogs");
        return $stmt->fetchAll();
    }
}