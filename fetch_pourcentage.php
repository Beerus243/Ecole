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
    $db = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('Could not connect to database');

    // Récupération du nombre maximum de points pour un calcul de pourcentage
    $maxPoints = 100; // Par exemple, si le maximum est sur 100 points

    // Récupération des informations de pourcentage
    $sql = "SELECT p.id_periode, p.nom_periode, SUM(n.note_devoir + n.note_interrogation + n.note_examen) AS total_points
            FROM periode p
            LEFT JOIN note n ON p.id_periode = n.id_periode AND n.id_eleve = $eleveId
            GROUP BY p.id_periode, p.nom_periode
            ORDER BY p.id_periode";

    $result = mysqli_query($db, $sql);

    if ($result) {
        echo "<table>";
        echo "<tr><th>Période</th><th>Pourcentage</th></tr>";

        // Affichage des pourcentages par période
        while ($row = mysqli_fetch_assoc($result)) {
            $nomPeriode = $row['nom_periode'];
            $totalPoints = $row['total_points'];

            echo "<tr>";
            echo "<td>$nomPeriode</td>";

            if ($totalPoints === null) {
                echo "<td>En cours...</td>";
            } else {
                // Calcul du pourcentage
                $pourcentage = ($totalPoints / $maxPoints) * 100;
                $pourcentage = round($pourcentage, 2) . '%';
                echo "<td>$pourcentage</td>";
            }

            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Erreur lors de l'exécution de la requête : " . mysqli_error($db);
    }

    // Fermeture de la connexion à la base de données
    mysqli_close($db);
} else {
    echo "Informations de l'utilisateur non trouvées dans la session.";
}
?>