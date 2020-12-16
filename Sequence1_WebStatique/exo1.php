<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <title>Exercice 1</title>

        <link rel="stylesheet" href="../CSS/style.css">
    </head>

    <body>

        <?php
            include "../navbar.php"
        ?>

        <div class="container mt-5 ">

            <span class="badge badge-dark">30min</span>
            <span class="badge badge-dark">Web Statique</span>
            <h1>Exercice 1</h1>
            <blockquote class="blockquote">
                <p class="mb-0">Chercher sur google les balises HTML suivantes</p>
            </blockquote>

            <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                <li class="nav-item " role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Rendu</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="result-tab" data-toggle="pill" href="#result" role="tab" aria-controls="pills-profile" aria-selected="false">Code</a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <ul>
                        <li>Gras        : <strong>Texte en gras</strong> </li>
                        <li>Italique    : <i>Texte en italic</i> </li>
                        <li>Paragraphe  : <p>Paragraphe</p> </li>
                        <li>Text        : <span>Text</span> </li>
                    </ul>
                </div>
                <pre class="tab-pane fade" id="result" role="tabpanel" aria-labelledby="result">
                    <?php highlight_file(__FILE__); ?>
                </pre>
            </div>
        </div>
    </body>
</html>