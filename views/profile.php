<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
</head>
<body>

<section>
    <h1>Profile Page</h1>
    <?php if ($profile): ?>
        <p>Name: <?php echo htmlspecialchars($profile['name']); ?></p>
        <p>Username: <?php echo htmlspecialchars($profile['username']); ?></p>
        <p>Age: <?php echo htmlspecialchars($profile['age']); ?></p>
        <p>Email: <?php echo htmlspecialchars($profile['email']); ?></p>
        <p>City: <?php echo htmlspecialchars($profile['city']); ?></p>
        <p>Photo: <img src="/uploads/<?php echo htmlspecialchars($profile['photo']); ?>" alt="Profile Photo" width="100"></p>
    <?php else: ?>
        <p>No profile information available.</p>
    <?php endif; ?>
    <p><a href="/profile/form">Edit Profile</a></p>
</section>

</body>
</html>