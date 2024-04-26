<?php
session_start();

// Vérifier si les informations de l'utilisateur sont stockées dans la session
if (isset($_SESSION['user_info']) && isset($_SESSION['user_info']['id_eleve'])) {
    // Récupérer l'ID de l'élève à partir des informations de l'utilisateur
    $eleveId = $_SESSION['user_info']['id_eleve'];

    // Connexion à la base de données
    $db_username = 'root';
    $db_password = 'root';
    $db_name = 'kelasi';
    $db_host = 'localhost';
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);

    // Récupération des communiqués
    $sql = "SELECT date_communique, contenu FROM communique";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $communiques = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($communiques) {
        // Affichage des communiqués sous forme de tableau
        echo "<h2>Communiqués</h2>";
        echo "<table>";
        echo "<tr><th>Date</th><th>Contenu</th></tr>";
        foreach ($communiques as $comm) {
            $dateCommunique = $comm['date_communique'];
            $contenuCommunique = $comm['contenu'];

            echo "<tr>";
            echo "<td>$dateCommunique</td>";
            echo "<td>$contenuCommunique</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Aucun communiqué trouvé.";
    }

    // Fermeture de la connexion à la base de données
    $db = null;
} else {
    echo "Informations de l'utilisateur non trouvées dans la session.";
}
?>