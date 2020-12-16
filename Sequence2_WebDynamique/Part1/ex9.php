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
        <h1>Exercice Final.</h1>
        <p>Créer une appli web avec un bouton de connexion qui demande un login et un mot de
            pass. Comparer la valeur saisie avec le mdp et le login qui sera dans le code « Julien »
            « 1234 »
            - Si le login n’est pas bon afficher toujours le formulaire avec le message le login est
            inconnu.
            -Si le mdp n’est pas bon afficher toujours le formulaire avec le message le mot de pass
            est incorrect.
            -Si le login et le mdp sont ok affichez un message de bienvenue et cachez le formulaire.
            Puis affichez un bouton de déconnexion. Faites en sorte qu’une fois connecté l’utilisateur
            le reste lorsque on actualise la page.
            Lorsque l’on clique sur le bouton de déconnexion la session doit être détruite.</p>
       
        <h2>Resultat</h2>

        <?php session_start();

            if (isset($_SESSION["Logged"]) && $_SESSION["Logged"]) {
                echo "<h1>Bonjour Julien</h1>";
                echo "<form action='' method='post'><button type='submit' name='logout'>Logout</button></form>";
                if (isset($_POST["logout"])) {
                    session_destroy();
                    header("Refresh:0");
                }
            } else {

                ?>        
                    <form action="" method="post">
                        <p>
                            <label for="user">Nom d'utilisateur</label>
                            <input type="text" name="user" require>
                        </p>
                        <p>
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" require>
                        </p>
                        <button type="submit" name="login">login</button>
                    </form>
                <?php 
                
                if (isset($_POST["login"]) ) {
                    if (isset($_POST["user"]) && $_POST["user"] == "Julien") {
                        if (isset($_POST["password"]) && $_POST["password"] == "1234") {
                            $_SESSION["Logged"] = true;
                            header("Refresh:0");
                        } else {
                            echo "<p>Mot de passe incorrect ...</p>";
                        }
                    } else {
                        echo "<p>Nom d'utilisateur inconnu ...</p>";
                    }
                }
            }
        ?>

        <h2>Code</h2>
        <pre class="code">
            <?php highlight_file( __FILE__ ); ?>
        </pre>

    </body>
</html>





