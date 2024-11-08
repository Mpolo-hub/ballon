<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Connexion � la base de donn�es
    $servername = "localhost"; // Remplacez par votre serveur de base de donn�es
    $username = "root"; // Remplacez par votre nom d'utilisateur de base de donn�es
    $password = ""; // Remplacez par votre mot de passe de base de donn�es
    $dbname = "football_vote"; // Remplacez par votre nom de base de donn�es

    // Cr�ation de la connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // V�rification de la connexion
    if ($conn->connect_error) {
        die("Erreur de connexion: " . $conn->connect_error);
    }

    // R�cup�ration des donn�es
    $idplayer = $conn->real_escape_string($_POST['playerId']);
    $username = $conn->real_escape_string($_POST['username']);
    $userNationality = $conn->real_escape_string($_POST['nationality']);
    $userCountry = $conn->real_escape_string($_POST['country']);
    $userEmail = $conn->real_escape_string($_POST['email']);
    $userPhone = $conn->real_escape_string($_POST['phone']);

    // Insertion des donn�es dans la table 'votes'
    $sql = "INSERT INTO votes (player_id, username, nationality, country, email, phone, vote_date) VALUES ('$idplayer', '$username', '$userNationality', '$userCountry', '$userEmail', '$userPhone', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "Vote enregistr� avec succ�s pour $username!";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    // Fermeture de la connexion
    $conn->close();
} else {
    echo "M�thode de requ�te non valide.";
}
?>
