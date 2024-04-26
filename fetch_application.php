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

    // Récupération des applications
    $sql = "SELECT id_application, nom_application FROM application";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $applications = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($applications) {
        // Affichage des applications sous forme de tableau
        echo "<h2>Applications</h2>";
        echo "<table>";
        echo "<tr><th>Nom de l'Application</th></tr>";
        foreach ($applications as $app) {
            $nomApplication = $app['nom_application'];

            echo "<tr>";
            echo "<td>$nomApplication</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Aucune application trouvée.";
    }

    // Fermeture de la connexion à la base de données
    $db = null;
} else {
    echo "Informations de l'utilisateur non trouvées dans la session.";
}
?>