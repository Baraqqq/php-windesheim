<?php

namespace App\Models;

class Profile
{
    public static function getProfileById($id)
    {
        require_once APP_ROOT . '/config/database.php';
        $conn = getDBConnection();

        $sql = "SELECT * FROM profiles WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch();
    }

    public static function saveProfile($profileData)
    {
        require_once APP_ROOT . '/config/database.php';
        $conn = getDBConnection();

        $sql = "INSERT INTO profiles (name, username, age, email, city, photo) VALUES (:name, :username, :age, :email, :city, :photo)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $profileData['name']);
        $stmt->bindParam(':username', $profileData['username']);
        $stmt->bindParam(':age', $profileData['age']);
        $stmt->bindParam(':email', $profileData['email']);
        $stmt->bindParam(':city', $profileData['city']);
        $stmt->bindParam(':photo', $profileData['photo']);
        $stmt->execute();
    }

    public static function getProfiles()
    {
        require_once APP_ROOT . '/config/database.php';
        $conn = getDBConnection();

        $sql = "SELECT * FROM profiles";
        $stmt = $conn->query($sql);

        $profiles = [];
        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch()) {
                $profiles[] = $row;
            }
        }

        return $profiles;
    }
}
?>