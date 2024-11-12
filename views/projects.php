<?php
use App\Models\Project;

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/Models/Project.php';

include('includes/header.php');
?>

<main>
    <section class="projects">
        <h2>Projects</h2>
        <?php
        $projectModel = new Project();
        $projects = $projectModel->getAllProjects();
        foreach ($projects as $project) {
            echo "<div class='project'>";
            echo "<span class='tag'>" . htmlspecialchars($project['tag']) . "</span>";
            echo "<h3>" . htmlspecialchars($project['title']) . "</h3>";
            echo "<p>" . htmlspecialchars($project['description']) . "</p>";
            echo "<img src='" . htmlspecialchars($project['image']) . "' alt='" . htmlspecialchars($project['title']) . "'>";
            echo "<a href='/project?id=" . htmlspecialchars($project['id']) . "' class='btn'>Bekijk project</a>";
            echo "</div>";
        }
        ?>
    </section>
</main>
<?php include('includes/footer.php'); ?>