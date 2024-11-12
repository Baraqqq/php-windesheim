<?php
require_once __DIR__ . '/config/database.php';

$pdo = getDBConnection();

$username = 'admin';
$password = 'password'; // Verander dit naar het gewenste wachtwoord
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
$stmt->execute(['username' => $username, 'password' => $hashedPassword]);

echo "User added successfully.";
?>