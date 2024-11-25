<?php
// Connexion à la base de données
$host = 'localhost'; // Adresse du serveur
$port = 5432; // Port du serveur
$dbname = 'recette_melanie';
$username = 'postgres'; // Nom d'utilisateur
$password = 'postgres'; // Mot de passe

try {
    // Connexion à la base de données
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion: " . $e->getMessage();
    exit;
}



?>