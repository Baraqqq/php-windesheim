<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../app/Models/Project.php';

use App\Models\Project;

$projectModel = new Project();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'] ?? null;
    $title = $_POST['title'];
    $tag = $_POST['tag'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $full_description = $_POST['full_description'];
    $github_link = $_POST['github_link'];
    if ($id) {
        $projectModel->updateProject($id, $title, $tag, $description, $image, $full_description, $github_link);
    } else {
        $projectModel->addProject($title, $tag, $description, $image, $full_description, $github_link);
    }
    header('Location: /admin/manage_projects');
    exit;
}

$projects = $projectModel->getAllProjects();
$currentProject = null;
if (isset($_GET['edit'])) {
    $currentProject = $projectModel->getProjectById($_GET['edit']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Projects</title>
</head>
<body>
    <h1>Manage Projects</h1>
    <form method="post">
        <?php if ($currentProject): ?>
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($currentProject['id']); ?>">
        <?php endif; ?>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?php echo htmlspecialchars($currentProject['title'] ?? ''); ?>" required>
        <br>
        <label for="tag">Tag:</label>
        <input type="text" name="tag" id="tag" value="<?php echo htmlspecialchars($currentProject['tag'] ?? ''); ?>" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" cols="50" required><?php echo htmlspecialchars($currentProject['description'] ?? ''); ?></textarea>
        <br>
        <label for="image">Image URL:</label>
        <input type="text" name="image" id="image" value="<?php echo htmlspecialchars($currentProject['image'] ?? ''); ?>" required>
        <br>
        <label for="full_description">Full Description:</label>
        <textarea name="full_description" id="full_description" rows="4" cols="50" required><?php echo htmlspecialchars($currentProject['full_description'] ?? ''); ?></textarea>
        <br>
        <label for="github_link">GitHub Link:</label>
        <input type="text" name="github_link" id="github_link" value="<?php echo htmlspecialchars($currentProject['github_link'] ?? ''); ?>" required>
        <br>
        <button type="submit"><?php echo $currentProject ? 'Update Project' : 'Add Project'; ?></button>
    </form>
    <h2>Existing Projects</h2>
    <ul>
        <?php foreach ($projects as $project): ?>
            <li>
                <?php echo htmlspecialchars($project['title']) . ' (' . htmlspecialchars($project['tag']) . ')'; ?>
                <a href="/admin/manage_projects?edit=<?php echo htmlspecialchars($project['id']); ?>">Edit</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>