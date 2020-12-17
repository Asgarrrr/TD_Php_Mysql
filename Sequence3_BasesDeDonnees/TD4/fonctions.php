<?php
    function connec($table){
        return new PDO('mysql:host=localhost; dbname='.$table.'; charset=utf8','root', '23w9j4');
    }

    function afficher_requet_select($DB, $marequete) {
        try {
            $query = $DB->query($marequete);
            
            $col = $query->columnCount();
            $row = $query->rowCount();


            if ($row == 0)
                echo "<p style='color:red;'>Pas de resultat</p>";

        } catch (\Throwable $th) {
            echo "Erreur de requete __ ".$th;
        }
       

?>
    <table border="1">
        <tbody>
<?php

        while($userArray = $query->fetch()){
            echo "<tr>";
            for ($i=0; $i < $col; $i++) 
                echo "<td>".$userArray[$i]."</td>";
        }
?>
    
        </tbody>
    </table>
            
<?php
    }

    function insert($DB, $query) {
        try	{
            $query = $DB->query("INSERT INTO `RDV`(`Nom`, `Prenom`) VALUES (".$query.")");
        } catch (\Throwable $th) {
            echo "Erreur de requete __ ".$th;
        }
    }
?>