<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Connexion à la base de données
    $servername = "localhost"; // Remplacez par votre serveur de base de données
    $username = "root"; // Remplacez par votre nom d'utilisateur de base de données
    $password = ""; // Remplacez par votre mot de passe de base de données
    $dbname = "football_vote"; // Remplacez par votre nom de base de données

    // Création de la connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("Erreur de connexion: " . $conn->connect_error);
    }

    // Récupération des données
    $idplayer = $conn->real_escape_string($_POST['playerId']);
    $username = $conn->real_escape_string($_POST['username']);
    $userNationality = $conn->real_escape_string($_POST['nationality']);
    $userCountry = $conn->real_escape_string($_POST['country']);
    $userEmail = $conn->real_escape_string($_POST['email']);
    $userPhone = $conn->real_escape_string($_POST['phone']);

    // Insertion des données dans la table 'votes'
    $sql = "INSERT INTO votes (player_id, username, nationality, country, email, phone, vote_date) VALUES ('$idplayer', '$username', '$userNationality', '$userCountry', '$userEmail', '$userPhone', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "Vote enregistré avec succès pour $username!";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    // Fermeture de la connexion
    $conn->close();
} else {
    echo "Méthode de requête non valide.";
}
?>
