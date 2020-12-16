<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice 8 Vider les Variables de session</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <a href="../../index.php">Retour</a>
        <h1>Exercice 8 Vider les Variables de session</h1>
        <p>Reprenez l’exercice 7 et rajouter un bouton qui permet lorsque l’on clique dessus de vider la session.</p>
       
        <h2>Resultat</h2>

        <form action="" method="post">
            <label for="text">Texte à memoriser dans votre session</label>
            <input type="text" name="setvar" require>
            <button type="submit" name="Save">SAVE</button>
            <button type="submit" name="Delete">Delete</button>
        </form>

        <?php session_start();

            if (isset($_POST["Save"]))
                $_SESSION["variable"] = $_POST["setvar"];

            if (isset($_POST["Delete"]))
                unset($_SESSION["variable"]);

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





