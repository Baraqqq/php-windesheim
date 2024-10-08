<?php

namespace App\Models;

require_once APP_ROOT . '/config/database.php';

class Profile
{
    private $name;
    private $username;
    private $age;
    private $email;
    private $city;
    private $photo;

    public function __construct($name, $username, $age, $email, $city, $photo)
    {
        $this->name = $name;
        $this->username = $username;
        $this->age = $age;
        $this->email = $email;
        $this->city = $city;
        $this->photo = $photo;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public static function saveProfile($profileData)
    {
        $pdo = getDBConnection();
        $stmt = $pdo->prepare('INSERT INTO profiles (name, username, age, email, city, photo) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute([
            $profileData['name'],
            $profileData['username'],
            $profileData['age'],
            $profileData['email'],
            $profileData['city'],
            $profileData['photo']
        ]);
    }

    public static function getProfiles()
    {
        $pdo = getDBConnection();
        $stmt = $pdo->query('SELECT * FROM profiles');
        return $stmt->fetchAll();
    }

    public static function getProfileById($id)
    {
        $pdo = getDBConnection();
        $stmt = $pdo->prepare('SELECT * FROM profiles WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
?>