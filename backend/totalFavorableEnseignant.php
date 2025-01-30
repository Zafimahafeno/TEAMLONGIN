<?php
// Connexion à la base de données
$conn = new mysqli("mysql-mahafeno.alwaysdata.net", "mahafeno", "antso0201", "mahafeno_longin");

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données: " . $conn->connect_error);
}

$sql_favorable_enseignant = "
    SELECT COUNT(*) AS total_favorable_enseignant
    FROM votant
    WHERE fonction = 'Enseignant' AND intentionVote = 'favorable'
";

$result = $conn->query($sql_favorable_enseignant);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total = $row["total_favorable_enseignant"];
    echo $total;  // Afficher directement le nombre
}

// Fermeture de la connexion
$conn->close();
?>
