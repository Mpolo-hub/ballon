<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "football_vote";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erreur de connexion: " . $conn->connect_error);
    }

    if (empty($_POST['playerId'])) {
        die("Erreur : l'ID du joueur n'est pas spécifié.");
    }

    $idplayer = $conn->real_escape_string($_POST['playerId']);
    $username = $conn->real_escape_string($_POST['username']);
    $userNationality = $conn->real_escape_string($_POST['nationality']);
    $userCountry = $conn->real_escape_string($_POST['country']);
    $userEmail = $conn->real_escape_string($_POST['email']);
    $userPhone = $conn->real_escape_string($_POST['phone']);

    // Vérification que le playerId existe dans la table players
    $checkPlayer = "SELECT id FROM players WHERE id = '$idplayer'";
    $result = $conn->query($checkPlayer);

    if ($result->num_rows == 0) {
        die("Erreur : l'ID du joueur n'existe pas dans la table players.");
    }

    // Insertion des données dans la table 'votes'
    $sql = "INSERT INTO votes (player_id, username, nationality, country, email, phone, vote_date) 
            VALUES ('$idplayer', '$username', '$userNationality', '$userCountry', '$userEmail', '$userPhone', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "Vote enregistré avec succès pour $username!";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Méthode de requête non valide.";
}
?>
