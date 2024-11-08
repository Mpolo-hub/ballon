<?php
// Connexion à la base de données
$host = 'localhost';
$username = 'root'; // Remplacez par votre nom d'utilisateur de base de données
$password = ''; // Remplacez par votre mot de passe de base de données
$dbname = 'football_vote'; // Remplacez par le nom de votre base de données

$conn = new mysqli($host, $username, $password, $dbname);

// Vérifie la connexion
if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

// Récupère la requête de recherche
$query = isset($_GET['query']) ? $_GET['query'] : '';

$sql = "SELECT id, full_name, nationality, club_name, club_country, position, dorsal, age FROM players WHERE full_name LIKE ?";
$stmt = $conn->prepare($sql);
$searchTerm = "%$query%";
$stmt->bind_param('s', $searchTerm);

// Exécute la requête et obtient le résultat
$stmt->execute();
$result = $stmt->get_result();

$players = [];
while ($row = $result->fetch_assoc()) {
    $players[] = $row;
}

// Ferme la connexion
$stmt->close();
$conn->close();

// Envoie la réponse en JSON
header('Content-Type: application/json');
echo json_encode($players);
?>
