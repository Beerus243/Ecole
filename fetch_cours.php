<?php
session_start();

// Vérifiez si les informations de l'utilisateur sont stockées dans la session
if (isset($_SESSION['user_info']) && isset($_SESSION['user_info']['id_eleve'])) {
    // Récupérer l'ID de l'élève à partir des informations de l'utilisateur
    $eleveId = $_SESSION['user_info']['id_eleve'];

    // Connexion à la base de données
    $db_username = 'root';
    $db_password = 'root';
    $db_name = 'kelasi';
    $db_host = 'localhost';

    try {
        $db = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_username, $db_password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Récupération du jour de la semaine actuel (0 pour dimanche, 6 pour samedi)
        $jourSemaineActuel = date('w');

        // Requête pour récupérer les cours du jour avec les informations du professeur et de l'horaire
        $query = "SELECT c.nom_cours, e.nom_enseignant, h.horaire_debut
                  FROM cours c
                  INNER JOIN enseignant e ON c.id_enseignant = e.id_enseignant
                  WHERE h.jour_semaine = :jourSemaineActuel";

        $stmt = $db->prepare($query);
        $stmt->bindParam(':jourSemaineActuel', $jourSemaineActuel, PDO::PARAM_INT);
        $stmt->execute();

        $coursDuJour = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($coursDuJour)) {
            echo "<table>";
            echo "<tr><th>Cours du jour</th><th>Nom du professeur</th><th>Heure de début</th></tr>";
            foreach ($coursDuJour as $cours) {
                $nomCours = $cours['nom_cours'];
                $nomEnseignant = $cours['nom_enseignant'];
                $heureDebut = $cours['horaire_debut'];
                echo "<tr><td>$nomCours</td><td>$nomEnseignant</td><td>$heureDebut</td></tr>";
            }
            echo "</table>";
        } else {
            echo "Aucun cours trouvé pour aujourd'hui.";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    } finally {
        // Fermeture de la connexion à la base de données
        $db = null;
    }
} else {
    echo "Informations de l'utilisateur non trouvées dans la session.";
}
?>