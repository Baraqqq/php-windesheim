<?php

namespace App\Controllers;

use App\Models\Profile;
use Symfony\Component\Routing\RouteCollection;

class ProfileController
{
    // Profile page action
    public function profileAction()
    {
        $profile = Profile::getProfileById($_GET['id']);
        require_once APP_ROOT . '/views/profile.php';
    }

    // Profile form action
    public function profileFormAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $profileData = [
                'name' => $_POST['name'],
                'username' => $_POST['username'],
                'age' => $_POST['age'],
                'email' => $_POST['email'],
                'city' => $_POST['city'],
                'photo' => $_FILES['photo']['name']
            ];

            // Move uploaded file to a directory
            $uploadDir = APP_ROOT . '/uploads/';
            $uploadFile = $uploadDir . basename($_FILES['photo']['name']);
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) {
                Profile::saveProfile($profileData);
                header('Location: /');
                exit();
            } else {
                echo "Failed to upload file.";
            }
        }

        require_once APP_ROOT . '/views/profile_form.php';
    }

    // Home page action to display profiles
    public function homeAction()
    {
        // Profielgegevens ophalen
        $profiles = Profile::getProfiles();

        // Profielen doorgeven aan de view
        require_once APP_ROOT . '/views/home.php';
    }
}
?>