<?php
// Connexion � la base de donn�es
$host = 'localhost';
$username = 'root'; // Remplacez par votre nom d'utilisateur de base de donn�es
$password = ''; // Remplacez par votre mot de passe de base de donn�es
$dbname = 'football_vote'; // Remplacez par le nom de votre base de donn�es

$conn = new mysqli($host, $username, $password, $dbname);

// V�rifie la connexion
if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

// R�cup�re la requ�te de recherche
$query = isset($_GET['query']) ? $_GET['query'] : '';

$sql = "SELECT id, full_name, nationality, club_name, club_country, position, dorsal, age FROM players WHERE full_name LIKE ?";
$stmt = $conn->prepare($sql);
$searchTerm = "%$query%";
$stmt->bind_param('s', $searchTerm);

// Ex�cute la requ�te et obtient le r�sultat
$stmt->execute();
$result = $stmt->get_result();

$players = [];
while ($row = $result->fetch_assoc()) {
    $players[] = $row;
}

// Ferme la connexion
$stmt->close();
$conn->close();

// Envoie la r�ponse en JSON
header('Content-Type: application/json');
echo json_encode($players);
?>
