<?php 
/**
 * Ce fichier est le template principal qui "contient" ce qui aura été généré par les autres vues.  
 * 
 * Les variables qui doivent impérativement être définie sont : 
 *      $title string : le titre de la page.
 *      $content string : le contenu de la page. 
 */

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emilie Forteroche</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/749a47ec2c.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav>
            <a href="index.php">Articles</a>
            <a href="index.php?action=apropos">À propos</a>
        </nav>
        <h1>Emilie Forteroche</h1>
    </header>

    <main>    
        <?= $content /* Ici est affiché le contenu réel de la page. */ ?>
        <?php 
            // Si on est connecté, on affiche le menu d'administration: 
            if (isset($_SESSION['user'])) {
                // Obtenir l'action actuelle pour appliqué la classe
                $action = isset($_GET['action']) ? $_GET['action'] : 'admin'; 
                ?>
                <div class="adminBar">
                    <a class="<?= $action === 'admin' ? 'adminBarActive' : '' ?>" href="index.php?action=admin"><i class="fa fa-pen-to-square"></i></a>
                    <a class="<?= $action === 'monitoring' ? 'adminBarActive' : '' ?>" href="index.php?action=monitoring"><i class="fa fa-chart-simple"></i></a>
                    <a class="<?= $action === 'disconnectUser' ? 'adminBarActive' : '' ?>" href="index.php?action=disconnectUser"><i class="fa fa-power-off"></i></a>
                </div>
                <?php 
            }
        ?>
    </main>
    
    <footer>
        <p>Copyright © Emilie Forteroche 2023 - Openclassrooms - <a href="index.php?action=admin">Admin</a>
    </footer>

</body>
</html>