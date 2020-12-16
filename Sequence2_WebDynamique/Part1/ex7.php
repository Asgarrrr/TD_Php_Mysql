<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice 7 Les Variables de session</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <a href="../../index.php">Retour</a>
        <h1>Exercice 7 Les Variables de session</h1>
        <p>Créer un petit formulaire avec une zone de texte et un bouton. Lorsque vous cliquer sur le bouton la page doit afficher ce que vous avez saisie et l’enregistre dans une variable desession $_SESSIONS[]. Le but est que si vous actualisez votre page la variable est mémorisée et le site affiche toujours la valeur saisie.</p>

        <h2>Resultat</h2>

        <form action="" method="post">
            <label for="text">Texte à memoriser dans votre session</label>
            <input type="text" name="setvar" require>
            <button type="submit" name="Save">SAVE</button>
        </form>

        <?php session_start();

            if (isset($_POST["Save"]))
                $_SESSION["variable"] = $_POST["setvar"];

            if (isset($_SESSION["variable"]))
                echo "<p>Votre variable est :".$_SESSION["variable"]."<p>";
            else
                echo "<p>Vous n'avez pas definie de variable<p>";

        ?>

        <h2>Code</h2>
        <pre class="code">
            <?php highlight_file( __FILE__ ); ?>
        </pre>

    </body>
</html>





