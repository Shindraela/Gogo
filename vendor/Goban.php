<?php 
class Goban { 
    public $nbColonne = 9;
    public $nbLigne = 9;

    function affichageGoban($nbColonne,$nbLigne) {
        for($i=1;$i<=$nbColonne;$i++)
            {
                echo "<tr>";
                for($j=1;$j<=$nbLigne;$j++)
                {
                    echo "<td height=50px width=50px bgcolor=#fcba54></td>";
                }
                echo "</tr>";
            }
    } 
} 
?> 