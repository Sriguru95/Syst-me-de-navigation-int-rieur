<?php
    session_start();
    $_SESSION['connecte'] = false;
    $titre = "Connexion";
    require "./include/header.inc.php";
?>

<body>

<main>

<h1>Espace Administrateur</h1>

<section>
 <div class="connexion">
    <form method="post" action="connect_traitement.php">
            <div class="form-group">
                <div class="user_zone">
                  <label for="username">Identifiant :</label>
                   <input type="text" id="username" name="username" required>
                </div>
            
                <div class="mdp_zone">
                  <label for="password">Mot de passe :</label>
                  <input type="password" id="password" name="password" required>
                </div>
               
            </div>
            <button type="submit" name="connexion">Se connecter</button>
    </form>
    <?php
     // Vérifie si un message d'erreur est présent dans la session
     if(isset($_SESSION['erreur'])) {
        echo "<p style='color: red; font-weight: bold;'>{$_SESSION['erreur']}</p>";
        // Efface le message d'erreur de la session
        unset($_SESSION['erreur']);
    }
    ?>
 </div>
</section>

<?php
    require "./include/footer.inc.php";
?>

</main>

</body>
</html>
