<?php
    // Fonction pour vérifier les identifiants
    function verifierIdentifiants($identifiant, $mot_de_passe) {
        // Chemin du fichier CSV contenant les identifiants admin
        $fichier_admin = "admin.csv";

        // Vérification des identifiants
        if (($handle = fopen($fichier_admin, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                // Vérifie si les identifiants correspondent
                if ($data[0] === $identifiant && $data[1] === $mot_de_passe) {
                    fclose($handle);
                    return true;
                }
            }
            fclose($handle);
        }

        return false;
    }

    // Vérifie si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['connexion'])) {
        // Récupére les identifiants saisis dans le formulaire
        $identifiant = $_POST['username'];
        $mot_de_passe = $_POST['password'];

        // Vérifie les identifiants
        if (verifierIdentifiants($identifiant, $mot_de_passe)) {
            // Définit une session pour indiquer que l'utilisateur est connecté
            session_start();
            $_SESSION['connecte'] = true;
            // Redirige vers le tableau de bord
            header("Location: index.php");
            exit();
        } else {
            session_start();
            $_SESSION['erreur'] = "Identifiant ou mot de passe incorrect.";
            // Redirige vers la page de connexion
            header("Location: connect.php");
            exit();
        }
    }
?>
