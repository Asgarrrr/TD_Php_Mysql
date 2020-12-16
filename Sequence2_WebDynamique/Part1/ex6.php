<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice 6 Les formulaires et la methode GET.</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <a href="../../index.php">Retour</a>
        <h1>Exercice 6 Les formulaires et la methode GET.</h1>
        <p>Créer un petit formulaire avec une zone de texte et un bouton. Lorsque vous cliquer sur le bouton la page doit afficher ce que vous avez saisie en violet Utilisez $_GET [‘champ1’]</p>

        <h2>Resultat</h2>
        <form action="" method="get">
            <label for="text">Texte à afficher en violet</label>
            <input type="text" name="text" require>
            <button type="submit">Envoyer</button>
        </form>

        <?php
            if (isset($_GET['text'])) {
                echo "<span class='textpurple'>".$_GET['text']."</span>";
            }
        ?>

        <h2>Code</h2>
        <pre class="code">
            <?php highlight_file( __FILE__ ); ?>
        </pre>
    </body>
</html>





