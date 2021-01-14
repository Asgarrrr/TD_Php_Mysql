<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
      
        <link rel="stylesheet" href="../../CSS/style.css"/>
        <link rel="stylesheet" href="CSS/style.css"/>
    </head>
    <body>

        <?php include("../../navbar.php"); ?>

        <div class="container mt-5">
        
            <h1>Exercice 1. (création d’une classe en php)</h1>
            <p>Vous devez faire cet exercice en suivant le cours ( ne pas copier coller le code de vos
            anciens exercices ! ) le code source doit être disponible dans votre github dans un
            repertorie PhpObjet. Le code source doit être visible sur votre page dans une balise :
            pre/pre</p>

            <ol>
                <li>Créer une classe User qui possède 2 propriétés : Nom et Prenom ainsi qu’une methode afficheUser qui echo « je suis un User »</li>
                <li>Créer 1 users dans votre page index.html puis appeler sa méthode afficheUser</li>
                <li>En disign CSS HTML reproduiser le schémas de classe de votre objet</li>
            </ol>

            <?php

                include "Class/Ex1.php";

                $perso = new User();
                $perso->afficheUser();
            
            ?>


            <table class="Object">
                <thead>
                    <tr>
                        <th>User</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <p>- Nom : String</p>
                            <p>- Prenom : String</p>
                        </td>
                    </tr>
                    <tr>
                        <td>+ afficheUser() : void</td>
                    </tr>
                </tbody>
            </table>


            <h2>Code</h2>
            <pre class="code">
                <?php highlight_file( __FILE__ ); ?>
            </pre>
        </div>

    </body>
</html>