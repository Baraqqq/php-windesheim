<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Form</title>
</head>
<body>

<section>
    <h1>Profile Form</h1>
    <form method="post" action="/profile/form" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="city">City:</label>
        <input type="text" id="city" name="city" required><br>
        <label for="photo">Profile Photo:</label>
        <input type="file" id="photo" name="photo" required><br>
        <button type="submit">Submit</button>
    </form>
</section>

</body>
</html>