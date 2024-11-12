<?php
namespace App\Models;

use PDO;

class About {
    private $pdo;

    public function __construct() {
        require __DIR__ . '/../../config/database.php';
        $this->pdo = getDBConnection();
    }

    public function getContent() {
        $stmt = $this->pdo->query("SELECT content FROM about_me");
        return $stmt->fetch(PDO::FETCH_ASSOC)['content'];
    }

    public function updateContent($content) {
        $stmt = $this->pdo->prepare("UPDATE about_me SET content = :content WHERE id = 1");
        $stmt->execute(['content' => $content]);
    }
}