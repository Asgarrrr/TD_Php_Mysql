<!DOCTYPE html>

<html lang="fr">

    <head>

        <meta charset="UTF-8">
        <title>Exemple 3</title>
        <link rel="stylesheet" href="../CSS/style.css">
        <link rel="stylesheet" href="css/exo3.css">
    </head>

    <body>

        <?php include "../navbar.php" ?>

        <div class="container pt-4">

            <h2>Exercice 3: (2h)</h2>
            <span>Chercher sur google les balises suivante :</span>

            <p>Afficher une image</p>
            <img src="img/ChatMignon.bmp" alt="Un petit chat tout mignon" width="300px">

            <p>Afficher une video Youtube</p>
            <iframe width="640" height="360" src="https://www.youtube.com/embed/5qap5aO4i9A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <p>Afficher un son dezzer</p>
            <iframe id="dzplayer" dztype="dzplayer" src="http://developers.deezer.com/fr/plugins/player?playlist=true&width=700&height=240&autoplay=false&type=playlist&id=30595446" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" width="700" height="240" allowTransparency="true"></iframe>

            <p>Afficher un tableau</p>

            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>1er Semestre</th>
                        <th>2e Semestre</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="3">SIO 1</td>
                        <td>Sl1, Sl2, Sl3, Sl4</td>
                        <td>Sl4, Sl5</td>
                    </tr>
                    <tr>
                        <td>SLAM</td>
                        <td>SISIR</td>
                    </tr>
                    <tr>
                        <td>SLAM1, SLAM2</td>
                        <td>SISIR1, SISIR2</td>
                    </tr>
                    <tr>
                        <th rowspan="3">SIO 2</td>
                        <td colspan="2">Sl7</td>
                    </tr>
                    <tr>
                        <td>SLAM</td>
                        <td>SISIR</td>
                    </tr>
                    <tr>
                        <td>SLAM3, SLAM4, SLAM5</td>
                        <td>SISIR3, SISIR4, SISIR5</td>
                    </tr>
                </tbody>
            </table>
        </body>
    </div>
</html>
