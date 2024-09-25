<?php
    // Démarre la session
    session_start();
    // Détruit toutes les données de la session
    session_destroy();
    // Redirige vers la page de connexion
    header("Location: index.php");
    exit();
?>
