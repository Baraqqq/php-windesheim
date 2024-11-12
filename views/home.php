<?php
use App\Models\About;
use App\Models\Project;

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/Models/About.php';
require_once __DIR__ . '/../app/Models/Project.php';

function getFirstWords($text, $wordCount) {
    $words = explode(' ', $text);
    return implode(' ', array_slice($words, 0, $wordCount));
}
?>

<main>
    <section class="hero">
        <?php include('includes/header.php'); ?>
        <div class="header">
            <div class="frame-3710">
                <div class="rectangle-74"></div>
            </div>
            <div class="group-60">
                <div class="group-52">
                    <div class="rectangle-84"></div>
                    <div class="download-cv"><a href="path/to/cv.pdf">Download CV</a></div>
                </div>
                <div class="group-53">
                    <div class="rectangle-83"></div>
                    <div class="lets-connect">Let's Connect</div>
                </div>
            </div>
            <div class="group-61">
                <div class="rectangle-51"></div>
                <div class="hello-im-ilias">Hello, I’m Ilias!</div>
            </div>
            <div class="student-software-developer">Student Software Developer</div>
            <div class="image1">
                <img src="/images/image-10.png" alt="Profile Picture">
            </div>
        </div>
    </section>
    <section class="about">
        <h2 class="who-is-this">WHO IS THIS?</h2>
        <div class="frame">
            <div class="about-text">
                <p class="text">Hello! I’m Ilias el Bachiri, a creative and driven web developer with <span class="highlight">3 YEARS OF EXPERIENCE</span> in the field. I thrive on turning imaginative ideas into digital realities, constantly seeking innovative ways to blend design and technology. I possess a strong foundation in <span class="highlight">FRONT-END</span> and <span class="highlight">BACK-END</span> development, as well as a keen eye for responsive design and user-centered interfaces.</p>
            </div>
            <div class="read-more"><a href="about.php">Read More</a></div>
        </div>
    </section>
    <section class="skills">
        <h2>Skills</h2>
        <ul>
            <li><a href="skills.php?category=backend">Backend Development</a></li>
            <li><a href="skills.php?category=frontend">Front-end Development</a></li>
            <li><a href="skills.php?category=uxui">UX/UI Design</a></li>
        </ul>
    </section>
    <section class="projects">
        <h2>Project</h2>
        <?php
        $projectModel = new Project();
        $projects = $projectModel->getAllProjects();
        if (!empty($projects)) {
            $project = $projects[0];
            echo "<div class='project'>";
            echo "<span class='tag'>" . htmlspecialchars($project['tag'] ?? '') . "</span>";
            echo "<h3>" . htmlspecialchars($project['title']) . "</h3>";
            echo "<p>" . htmlspecialchars($project['description']) . "</p>";
            echo "<img src='" . htmlspecialchars($project['image'] ?? '') . "' alt='" . htmlspecialchars($project['title']) . "'>";
            echo "<a href='/project?id=" . htmlspecialchars($project['id']) . "' class='btn'>Ontdek meer over het project</a>";
            echo "</div>";
        }
        ?>
    </section>
</main>
<?php include('includes/footer.php'); ?>