<?php
// search_player.php

header("Content-Type: application/json");
$pdo = new PDO("mysql:host=localhost;dbname=football_vote;charset=utf8", "root", "");

if (isset($_GET['query'])) {
    $query = "%" . $_GET['query'] . "%";
    $stmt = $pdo->prepare("SELECT id, full_name, nationality, age, position, dorsal, club_country, club_name FROM players WHERE full_name LIKE ?");
    $stmt->execute([$query]);
    $players = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($players);
}
?>
