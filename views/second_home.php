<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Home</title>
    <style>
        .frame-3709,
        .frame-3709 * {
            box-sizing: border-box;
        }

        .frame-3709 {
            height: 100vh; /* Gebruik viewport height voor responsiviteit */
            position: relative;
        }

        .rectangle-64 {
            background: #eaeaea;
            border-radius: 0px 0px 220px 220px;
            width: 100%; /* Gebruik percentage voor breedte */
            height: 100%; /* Gebruik percentage voor hoogte */
            position: absolute;
            left: 0;
            top: 0;
            box-shadow: 0px 30px 30px 0px rgba(0, 0, 0, 0.25);
        }

        /* Media queries voor verschillende schermgroottes */
        @media (max-width: 1200px) {
            .rectangle-64 {
                border-radius: 0px 0px 180px 180px; /* Pas border-radius aan voor kleinere schermen */
            }
        }

        @media (max-width: 768px) {
            .rectangle-64 {
                border-radius: 0px 0px 140px 140px; /* Pas border-radius aan voor tablets */
            }
        }

        @media (max-width: 480px) {
            .rectangle-64 {
                border-radius: 0px 0px 100px 100px; /* Pas border-radius aan voor mobiele telefoons */
            }
        }
    </style>
</head>
<body>
    <div class="frame-3709">
        <div class="rectangle-64"></div>
    </div>
    <?php include 'includes/footer.php'; ?>

</body>
</html>