<?php
use App\Models\About;

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/Models/About.php';

include('includes/header.php');
?>

<main>
    <section class="about">
        <h2>About Me</h2>
        <?php
        $about = new About();
        $content = $about->getContent();
        echo '<p>' . htmlspecialchars($content) . '</p>';
        ?>
    </section>
</main>
<?php include('includes/footer.php'); ?>