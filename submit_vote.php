<?php
header('Content-Type: application/json');
$input = json_decode(file_get_contents('php://input'), true);

// Connexion � la base de donn�es (ajuste avec tes propres informations)
$conn = new mysqli('localhost', 'username', 'password', 'database_name');

if ($conn->connect_error) {
    die(json_encode(['message' => 'Erreur de connexion � la base de donn�es.']));
}

// Pr�paration de la requ�te
$stmt = $conn->prepare("INSERT INTO votes (player_id, username, nationality, country, email, phone) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssss", $input['player_id'], $input['username'], $input['nationality'], $input['country'], $input['email'], $input['phone']);

if ($stmt->execute()) {
    echo json_encode(['message' => 'Votre vote a �t� enregistr� avec succ�s !']);
} else {
    echo json_encode(['message' => 'Erreur lors de l\'enregistrement du vote.']);
}

$stmt->close();
$conn->close();
?>
