<?php
namespace App\Models;

use PDO;

class Project {
    private $pdo;

    public function __construct() {
        require __DIR__ . '/../../config/database.php';
        $this->pdo = getDBConnection();
    }

    public function getAllProjects() {
        $stmt = $this->pdo->query("SELECT * FROM projects");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addProject($title, $tag, $description, $image, $full_description, $github_link) {
        $stmt = $this->pdo->prepare("INSERT INTO projects (title, tag, description, image, full_description, github_link) VALUES (:title, :tag, :description, :image, :full_description, :github_link)");
        $stmt->execute(['title' => $title, 'tag' => $tag, 'description' => $description, 'image' => $image, 'full_description' => $full_description, 'github_link' => $github_link]);
    }

    public function updateProject($id, $title, $tag, $description, $image, $full_description, $github_link) {
        $stmt = $this->pdo->prepare("UPDATE projects SET title = :title, tag = :tag, description = :description, image = :image, full_description = :full_description, github_link = :github_link WHERE id = :id");
        $stmt->execute(['id' => $id, 'title' => $title, 'tag' => $tag, 'description' => $description, 'image' => $image, 'full_description' => $full_description, 'github_link' => $github_link]);
    }

    public function getProjectById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM projects WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}