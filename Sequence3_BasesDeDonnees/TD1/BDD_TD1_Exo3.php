<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TD1 - Q3</title>
        <link rel="stylesheet" href="../../CSS/style.css">
    </head>
    <body>
        <?php include("../../navbar.php") ?>
        <div class="container pt-4">
            <h1>Ex3</h1>
            <img src="../Screen/TD1EX3.PNG" alt="" srcset="">
            <h3>Questions :</h3>
            <ol>
                <li>Peut-on jouer des matchs de double ?</li>
                <li>Un joueur peut-il gagner un match sans y avoir participé ?</li>
                <li>Peut-il y avoir deux matchs sur le même terrain à la même heure ?</li>
                <li>Connaissant un joueur, peut-on savoir sur quels terrains il a joué ?</li>
            </ol>

            <h3>Réponses :</h3>
            <ol>
                <li>Non, le match est joué entre 2 et 2 joueurs.</li>
                <li>Oui, la cardinalité d’un joueur étant compris entre 0 et N.</li>
                <li>Oui, un terrain n’as pas de limite de match joués</li>
                <li>Oui, Le terrain référence le mach, qui lui-même référence les joueurs</li>
            </ol>
        </div>
    </body>
</html>