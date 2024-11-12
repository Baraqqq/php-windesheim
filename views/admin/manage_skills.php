<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../app/Models/Skill.php';

use App\Models\Skill;

$skillModel = new Skill();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category = $_POST['category'];
    $skill_name = $_POST['skill_name'];
    $experience_level = $_POST['experience_level'];
    $description = $_POST['description'];
    $skillModel->addSkill($category, $skill_name, $experience_level, $description);
    header('Location: /admin/manage_skills');
    exit;
}

$backendSkills = $skillModel->getSkillsByCategory('Backend Development');
$frontendSkills = $skillModel->getSkillsByCategory('Front-end Development');
$uxuiSkills = $skillModel->getSkillsByCategory('UX/UI Design');

$backendDescription = $skillModel->getCategoryDescription('Backend Development');
$frontendDescription = $skillModel->getCategoryDescription('Front-end Development');
$uxuiDescription = $skillModel->getCategoryDescription('UX/UI Design');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Skills</title>
</head>
<body>
    <h1>Manage Skills</h1>
    <form method="post">
        <label for="category">Category:</label>
        <select name="category" id="category" required>
            <option value="Backend Development">Backend Development</option>
            <option value="Front-end Development">Front-end Development</option>
            <option value="UX/UI Design">UX/UI Design</option>
        </select>
        <br>
        <label for="skill_name">Skill Name:</label>
        <input type="text" name="skill_name" id="skill_name" required>
        <br>
        <label for="experience_level">Experience Level:</label>
        <input type="text" name="experience_level" id="experience_level" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" cols="50" required></textarea>
        <br>
        <button type="submit">Add Skill</button>
    </form>
    <h2>Backend Development Skills</h2>
    <form method="post">
        <input type="hidden" name="category" value="Backend Development">
        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" cols="50" required><?php echo htmlspecialchars($backendDescription ?? ''); ?></textarea>
        <br>
        <button type="submit" name="category_description">Save Description</button>
    </form>
    <ul>
        <?php foreach ($backendSkills as $skill): ?>
            <li><?php echo htmlspecialchars($skill['skill_name']) . ' (' . htmlspecialchars($skill['experience_level']); ?></li>
        <?php endforeach; ?>
    </ul>
    <h2>Front-end Development Skills</h2>
    <form method="post">
        <input type="hidden" name="category" value="Front-end Development">
        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" cols="50" required><?php echo htmlspecialchars($frontendDescription ?? ''); ?></textarea>
        <br>
        <button type="submit" name="category_description">Save Description</button>
    </form>
    <ul>
        <?php foreach ($frontendSkills as $skill): ?>
            <li><?php echo htmlspecialchars($skill['skill_name']) . ' (' . htmlspecialchars($skill['experience_level']); ?></li>
        <?php endforeach; ?>
    </ul>
    <h2>UX/UI Design Skills</h2>
    <form method="post">
        <input type="hidden" name="category" value="UX/UI Design">
        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" cols="50" required><?php echo htmlspecialchars($uxuiDescription ?? ''); ?></textarea>
        <br>
        <button type="submit" name="category_description">Save Description</button>
    </form>
    <ul>
        <?php foreach ($uxuiSkills as $skill): ?>
            <li><?php echo htmlspecialchars($skill['skill_name']) . ' (' . htmlspecialchars($skill['experience_level']); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>