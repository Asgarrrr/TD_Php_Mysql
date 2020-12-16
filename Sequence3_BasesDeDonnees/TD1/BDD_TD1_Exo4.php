<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TD1 - Q4</title>
        <link rel="stylesheet" href="../../CSS/style.css">
    </head>
    <body>
        <?php include("../../navbar.php") ?>
        <div class="container pt-4">
            <h1>Ex4</h1>
            <img src="../Screen/TD1EX4.PNG" alt="" srcset="">
            <h3>Questions :</h3>
            <ol>
                <li>Un patient peut-il effectuer plusieurs consultations ?</li>
                <li>Un médecin peut-il recevoir plusieurs patients dans la même Consultation ?</li>
                <li>Peut-on prescrire plusieurs médicaments dans une même consultation ?</li>
                <li>Deux médecins différents peuvent-ils prescrire le même médicament ?</li>
            </ol>
            <h3>Réponses :</h3>
            <ol>
                <li>Oui, en raison de la cardinalité 1-n</li>
                <li>Non, en raison de la cardinalité 1-1</li>
                <li>Oui, en raison de la cardinalité 0-n</li>
                <li>Oui, en raison de la cardinalité 0-n</li>
            </ol>
        </div>
    </body>
</html>