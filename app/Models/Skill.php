<?php
namespace App\Models;

use PDO;

class Skill {
    private $pdo;

    public function __construct() {
        require __DIR__ . '/../../config/database.php';
        $this->pdo = getDBConnection();
    }

    public function getAllSkills() {
        $stmt = $this->pdo->query("SELECT * FROM skills");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addSkill($category, $skill_name, $experience_level) {
        $stmt = $this->pdo->prepare("INSERT INTO skills (category, skill_name, experience_level) VALUES (:category, :skill_name, :experience_level)");
        $stmt->execute(['category' => $category, 'skill_name' => $skill_name, 'experience_level' => $experience_level]);
    }

    public function getSkillsByCategory($category) {
        $stmt = $this->pdo->prepare("SELECT * FROM skills WHERE category = :category");
        $stmt->execute(['category' => $category]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCategoryDescription($category) {
        $stmt = $this->pdo->prepare("SELECT description FROM category_descriptions WHERE category = :category");
        $stmt->execute(['category' => $category]);
        return $stmt->fetch(PDO::FETCH_ASSOC)['description'];
    }

    public function setCategoryDescription($category, $description) {
        $stmt = $this->pdo->prepare("REPLACE INTO category_descriptions (category, description) VALUES (:category, :description)");
        $stmt->execute(['category' => $category, 'description' => $description]);
    }
}