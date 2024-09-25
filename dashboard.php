<?php
    session_start();
    $_SESSION['connecte'] = true;
    $titre = "Dashboard";
    require "./include/header.inc.php";


    // Vérifie si le formulaire a été soumis (le bouton "Enregistrer" a été cliqué)
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enregistrer'])) {
        // Ouvre le fichier CSV en mode écriture
        $handle = fopen("salles.csv", "w");
        // Écrit les en-têtes de colonne dans le fichier
        fputcsv($handle, array('num_salle', 'disponibilite', 'raison'));

        // Parcoure les données soumises via le formulaire et les écrire dans le fichier CSV
        foreach ($_POST['num_salle'] as $key => $num_salle) {
            $disponibilite = $_POST['disponibilite'][$key];
            $raison = $_POST['raison'][$key];
            // Écrit les données dans le fichier CSV
            fputcsv($handle, array($num_salle, $disponibilite, $raison));
        }

        // Ferme le fichier CSV
        fclose($handle);
        // Redirige vers la page actuelle pour actualiser le tableau avec les modifications
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
?>


<body>

<main>

<h1>État des salles de cours</h1>

<section>
    <div class="container_table">
    <form method="post">
        <table>
            <thead>
                <tr>
                    <?php
                    // Ouvre le fichier CSV
                    if (($handle = fopen("salles.csv", "r")) !== FALSE) {
                        // Lit la première ligne du fichier comme en-têtes de colonne
                        $headers = fgetcsv($handle, 1000, ",");
                        // Affiche les en-têtes de colonne dans le tableau HTML
                        foreach ($headers as $header) {
                            echo "<th>{$header}</th>";
                        }
                        // Ferme le fichier CSV
                        fclose($handle);
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                // Ouvre à nouveau le fichier CSV
                if (($handle = fopen("salles.csv", "r")) !== FALSE) {
                    // Ignore la première ligne (en-têtes de colonne)
                    fgetcsv($handle, 1000, ",");
                    // Lit les lignes suivantes et les afficher dans le tableau HTML
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        echo "<tr>";
                        foreach ($data as $key => $value) {
                            // Si c'est la première colonne, afficher le numéro de salle
                            if ($key === 0) {
                                echo "<td>{$value}</td>";
                                // Ajoute un champ caché pour le numéro de salle
                                echo "<input type='hidden' name='num_salle[]' value='{$value}'>";
                            } else {
                                // Affiche une liste déroulante pour la colonne "Disponibilité"
                                if ($key === 1) {
                                    // Si la disponibilité est "oui", le champ de texte est non modifiable et grisé
                                    if ($value === 'oui') {
                                        echo "<td><select name='disponibilite[]' onchange='onChangeSelect(this)'><option value='oui' selected>oui</option><option value='non'>non</option></select></td>";
                                    } else {
                                        echo "<td><select name='disponibilite[]' onchange='onChangeSelect(this)'><option value='oui'>oui</option><option value='non' selected>non</option></select></td>";
                                    }
                                }

                                // Affiche un champ de texte pour la colonne "Raison"
                                elseif ($key === 2) {
                                    // Si la disponibilité est "oui", ajouter la classe CSS "hidden" pour cacher le champ de texte
                                    if ($data[1] === 'oui') {
                                        echo "<td><input type='text' name='raison[]' value='{$value}' style='background-color: #f2f2f2;' class='hidden_champ'></td>";
                                    } else {
                                        echo "<td><input type='text' name='raison[]' value='{$value}'></td>";
                                    }
                                }
                            }
                        }
                        echo "</tr>";
                    }
                    // Ferme le fichier CSV
                    fclose($handle);
                }
                ?>
            </tbody>
        </table>

        <div class="save_button" style="text-align: center;">
            <button type="submit" name="enregistrer" >Enregistrer</button>
        </div>
    </form>
    </div>
</section>

<?php
    require "./include/footer.inc.php";
?>

<script>
    // Fonction pour gérer le changement de valeur dans la liste déroulante
    function onChangeSelect(element) {
        // Récupére le champ de texte correspondant à la liste déroulante
        var textField = element.parentNode.nextElementSibling.querySelector('input[type="text"]');
        // Si la valeur sélectionnée est "oui"
        if (element.value === 'oui') {
            // Cache le champ de texte
            textField.classList.add('hidden_champ');
        } else {
            // Affiche le champ de texte
            textField.classList.remove('hidden_champ');
        }
    }
</script>
   
</main>

</body>
</html>
