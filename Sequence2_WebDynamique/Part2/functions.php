<?php

    function PrintTable($col1, $col2, $col3) {
       echo "
          <table border='1'>
                <tr>
                    <th>$col1</th><th>$col2</th><th>$col3</th>
                </tr>
                <tr>
                    <td>Contenu 1</td><td>Contenu 2</td><td>Contenu 3</td>
                </tr>
            </table>
       ";
    }

    function Moyenne($val) {

        return ($val[0] + $val[1] + $val[2] + $val[3] + $val[4]) / 5;

    }

    function login() {

        $form = true;

         if (isset($_POST["login"])) {
            if ($_POST["user"] === "Julien" && $_POST["password"] === "1234")
                { $form = false; return "OK"; }
            else
                { $form = true; return "Off"; }

        }

        if ($form) {
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
        }

    }


?>
