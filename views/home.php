<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP MVC</title>
</head>
<body>

<nav>
    <ul>
        <?php foreach ($profiles as $profile): ?>
            <li><a href="/profile?id=<?php echo $profile['id']; ?>"><?php echo htmlspecialchars($profile['name']); ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>

<section>
    <h1>Homepage</h1>
    <p>
        <a href="/profile/form">Create Profile</a>
    </p>
</section>

</body>
</html>