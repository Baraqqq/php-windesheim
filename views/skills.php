<?php
use App\Models\Skill;

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/Models/Skill.php';

include('includes/header.php');
?>

<main>
    <section class="skills">
        <h2>Backend Development Skills</h2>
        <?php
        $skillModel = new Skill();
        $backendDescription = $skillModel->getCategoryDescription('Backend Development');
        echo "<p>" . htmlspecialchars($backendDescription ?? '') . "</p>";
        ?>
        <ul>
            <?php
            $backendSkills = $skillModel->getSkillsByCategory('Backend Development');
            foreach ($backendSkills as $skill) {
                echo "<li>" . htmlspecialchars($skill['skill_name']) . " (" . htmlspecialchars($skill['experience_level']) . ")</li>";
            }
            ?>
        </ul>
        <h2>Front-end Development Skills</h2>
        <?php
        $frontendDescription = $skillModel->getCategoryDescription('Front-end Development');
        echo "<p>" . htmlspecialchars($frontendDescription ?? '') . "</p>";
        ?>
        <ul>
            <?php
            $frontendSkills = $skillModel->getSkillsByCategory('Front-end Development');
            foreach ($frontendSkills as $skill) {
                echo "<li>" . htmlspecialchars($skill['skill_name']) . " (" . htmlspecialchars($skill['experience_level']) . ")</li>";
            }
            ?>
        </ul>
        <h2>UX/UI Design Skills</h2>
        <?php
        $uxuiDescription = $skillModel->getCategoryDescription('UX/UI Design');
        echo "<p>" . htmlspecialchars($uxuiDescription ?? '') . "</p>";
        ?>
        <ul>
            <?php
            $uxuiSkills = $skillModel->getSkillsByCategory('UX/UI Design');
            foreach ($uxuiSkills as $skill) {
                echo "<li>" . htmlspecialchars($skill['skill_name']) . " (" . htmlspecialchars($skill['experience_level']) . ")</li>";
            }
            ?>
        </ul>
    </section>
</main>
<?php include('includes/footer.php'); ?>