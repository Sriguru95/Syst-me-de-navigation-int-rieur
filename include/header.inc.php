
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre; ?></title>
    <meta name="author" content="ELUMALAI Sriguru" /> 
    <meta name="date" content="2024-01-26" />
    <meta name="keywords" content="PROJET LONG, " /> 
    <meta name="description" content="Ceci est la page qui représentera les etages du campus Halle aux Farines" />
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="style.css"/>

    <style>
        #gridOverlay_floor2, #gridOverlay_floor3{
            position: absolute;
            top: 0;
            left: 0;

        }
        .grid-line {
            stroke: gray;
            stroke-width: 1;
            stroke-opacity: 0; /*invisible*/
        }

    </style>

</head>
<body>
    
<header class="menu">
    <a href="index.php">
        <img src="./images/UniversiteParisCite.png" class="logo" alt="Logo">
    </a>
    <div class="menu-links">
        <?php
        if(isset($_SESSION['connecte']) && $_SESSION['connecte'] === true) {
            echo '<a href="dashboard.php" class="admin-link';
            // Vérifie si la page actuelle est dashboard.php
            if(basename($_SERVER['PHP_SELF']) == 'dashboard.php') {
                echo ' active'; //  la classe active si c'est la page dashboard.php
            }
            echo '">Dashboard</a>';
            echo '<a href="deconnexion.php" class="admin-logo"><img src="./images/logout_logo.png" class="logoA" alt="Déconnexion"></a>';
        } else {
            echo '<a href="connect.php" class="admin-logo"><img src="./images/admin_logo.png" class="logoA" alt="Admin Logo"></a>';
        }
        ?>
    </div>
</header>

