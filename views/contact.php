<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Home Page</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header>
        <h1>Welcome to the Second Home Page</h1>
        <nav>
            <ul>
                <li><a href="<?php echo $routeToProfile; ?>">Profile</a></li>
                <li><a href="<?php echo $routeToProfileForm; ?>">Profile Form</a></li>
                <li><a href="<?php echo $routeToContact; ?>">Profile Form</a></li>
 
            </ul>
        </nav>
    </header>
    <main>
        <!-- Voeg hier je design toe -->
    </main>
    <script src="/js/scripts.js"></script>
</body>
</html>

<?php include 'footer.php'; ?>