<?php
session_start();

// Définir la locale en français
setlocale(LC_TIME, 'fr_FR.utf8');

// Vérifiez si les informations de l'utilisateur sont stockées dans la session
if (isset($_SESSION['user_info']) && isset($_SESSION['user_info']['id_eleve'])) {
    // Récupérez l'ID de l'élève à partir des informations de l'utilisateur
    $eleveId = $_SESSION['user_info']['id_eleve'];

    // Connexion à la base de données
    $db_username = 'root';
    $db_password = 'root';
    $db_name = 'kelasi';
    $db_host = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('could not connect to database');

    // Récupération des informations de présence de l'élève
    $sql = "SELECT DATE_FORMAT(date_de_presence, '%W %e %M %Y') AS date_formattee, IF(presence = 'Oui', 'Présent', 'Absent') AS etat
            FROM presence
            WHERE id_eleve = $eleveId AND WEEK(date_de_presence) = WEEK(CURDATE())";
    $result = mysqli_query($db, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // Affichage des informations de présence
            echo "<table>";
            echo "<tr><th>Date</th><th>État</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                $dateFormattee = $row['date_formattee'];
                $etat = $row['etat'];

                echo "<tr>";
                echo "<td>$dateFormattee</td>";
                echo "<td>$etat</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Aucune présence trouvée pour cet élève.";
        }
    } else {
        echo "Erreur lors de l'exécution de la requête : " . mysqli_error($db);
    }

    // Fermeture de la connexion à la base de données
    mysqli_close($db);
} else {
    echo "Informations de l'utilisateur non trouvées dans la session.";
}
?>