<?php
use App\Models\Project;

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/Models/Project.php';

include('includes/header.php');

if (!isset($_GET['id'])) {
    echo "Project not found.";
    exit;
}

$projectModel = new Project();
$project = $projectModel->getProjectById($_GET['id']);

if (!$project) {
    echo "Project not found.";
    exit;
}
?>

<main>
    <section class="project">
        <h2><?php echo htmlspecialchars($project['title']); ?></h2>
        <span class="tag"><?php echo htmlspecialchars($project['tag']); ?></span>
        <p><?php echo htmlspecialchars($project['full_description']); ?></p>
        <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
        <a href="<?php echo htmlspecialchars($project['github_link']); ?>" class="btn">GitHub Repo</a>
    </section>
</main>
<?php include('includes/footer.php'); ?>