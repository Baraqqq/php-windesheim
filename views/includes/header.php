<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="/css/styles.css">
      <!-- <style>
.header {
    padding: 20px;
    text-align: center;
    background-color: transparent;
    position: relative;
    z-index: 10;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.mail {
    background-color: #E2E2E2;
    border-radius: 20px; /* Pas de border-radius aan */
    padding: 5px 10px;
    display: flex;
    align-items: center;
    height: 40px; /* Pas de hoogte aan */
}

.rectangle-48 {
    background: linear-gradient(to left, #e2e2e2, #e2e2e2);
    border-radius: 20px; /* Pas de border-radius aan */
    height: 30px;
    position: relative;
}

.iliasbach-hotmail-com {
    font-size: 16px;
    color: #333;
    display: inline-block;
    vertical-align: middle;
    margin-left: 10px;
}

.copy-button {
    margin-left: 10px;
    padding: 5px 10px;
    background-color: #333;
    color: white;
    border: none;
    border-radius: 20px; /* Pas de border-radius aan */
    cursor: pointer;
    height: 40px; /* Pas de hoogte aan */
}

.copy-button:hover {
    background-color: #555;
}

.login-frame {
    width: 100px; /* Pas de breedte aan */
    height: 40px; /* Pas de hoogte aan */
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(to left, #ffffff, #ffffff);
    border-radius: 20px; /* Pas de border-radius aan */
    cursor: pointer;
}

.login2 {
    color: #000000;
    font-family: "Rubik-Regular", sans-serif;
    font-size: 16px; /* Pas de font-size aan */
    letter-spacing: 0.02em;
    font-weight: 400;
}
    </style> -->
</head>
<body>
    <div class="header">
        <div class="mail">
            <div class="rectangle-48"></div>
            <div class="iliasbach-hotmail-com" id="email">iliasbach@hotmail.com</div>
            <button class="copy-button" onclick="copyEmail()">Copy</button>
        </div>
        <nav>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/about-me">About Me</a></li>
                <li><a href="/blogs">Blogs</a></li>
                <li><a href="/works">Works</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
        <a href="/login" class="login-frame">
            <div class="login2">Login</div>
        </a>
    </div>

    <script>
        function copyEmail() {
            const emailText = document.getElementById('email').innerText;
            const textarea = document.createElement('textarea');
            textarea.value = emailText;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
        }
    </script>
</body>
</html>