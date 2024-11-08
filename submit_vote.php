<?php
header('Content-Type: application/json');
$input = json_decode(file_get_contents('php://input'), true);

// Connexion à la base de données (ajuste avec tes propres informations)
$conn = new mysqli('localhost', 'username', 'password', 'database_name');

if ($conn->connect_error) {
    die(json_encode(['message' => 'Erreur de connexion à la base de données.']));
}

// Préparation de la requête
$stmt = $conn->prepare("INSERT INTO votes (player_id, username, nationality, country, email, phone) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssss", $input['player_id'], $input['username'], $input['nationality'], $input['country'], $input['email'], $input['phone']);

if ($stmt->execute()) {
    echo json_encode(['message' => 'Votre vote a été enregistré avec succès !']);
} else {
    echo json_encode(['message' => 'Erreur lors de l\'enregistrement du vote.']);
}

$stmt->close();
$conn->close();
?>
