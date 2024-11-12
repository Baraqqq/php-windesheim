<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome to the Admin Dashboard</h1>
    <ul>
        <li><a href="/admin/manage_about">Manage About Me</a></li>
        <li><a href="/admin/manage_skills">Manage Skills</a></li>
        <li><a href="/admin/manage_projects">Manage Projects</a></li>
        <li><a href="/admin/manage_blogs">Manage Blogs</a></li>
    </ul>
    <a href="/admin/logout">Logout</a>
</body>
</html>