<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<header>
    <div class="frame-3712">
        <div class="component1">
            <div class="mail">
                <div class="rectangle-48"></div>
                <div class="iliasbach-hotmail-com">iliasbach@hotmail.com</div>
                <div class="copy">
                    <div class="rectangle-50"></div>
                    <div class="copy2" onclick="copyEmail()">Copy</div>
                </div>
            </div>
        </div>
        <div class="navbar">
            <div class="home"><a href="/"><span class="home-span">#</span><span class="home-span2">home</span></a></div>
            <div class="projects"><a href="/projects"><span class="projects-span">#</span><span class="projects-span2">projects</span></a></div>
            <div class="about"><a href="/about"><span class="about-span">#</span><span class="about-span2">about</span></a></div>
            <div class="blogs"><a href="/blogs"><span class="blogs-span">#</span><span class="blogs-span2">blogs</span></a></div>
            <div class="skills"><a href="/skills"><span class="skills-span">#</span><span class="skills-span2">skills</span></a></div>
        </div>
        <div class="login-container">
            <div class="login"><a href="/admin/login">Login</a></div>
        </div>
    </div>
</header>
<script>
function copyEmail() {
    const email = "iliasbach@hotmail.com";
    navigator.clipboard.writeText(email).then(() => {
        alert("Email copied to clipboard");
    }).catch(err => {
        console.error("Failed to copy email: ", err);
    });
}
</script>
</body>
</html>