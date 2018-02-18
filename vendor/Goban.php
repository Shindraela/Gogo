<?php 
class Goban { 
    public $nbIntesection = 81;
    public $nbColonne = 9;
    public $nbLigne = 9;
    public $array = array();

    function affichageGoban($array,$nbColonne,$nbLigne) {
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