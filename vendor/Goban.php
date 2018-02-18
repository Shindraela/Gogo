<?php 
class Goban { 

    private $nb_col;
    private $nb_ligne;
    private $pion;
    private static $instance;

    private function __construct($nb_col, $nb_ligne)
    {
        $this->nb_col = $nb_col;
        $this->nb_ligne = $nb_ligne;
        
        for($i=1;$i<=$nb_col;$i++)
            {
                echo "<tr>";
                for($j=1;$j<=$nb_ligne;$j++)
                {
                    echo "<td height=50px width=50px bgcolor=#fcba54></td>";
                }
                echo "</tr>";
            }
    }

    public function getNbCol()
    {
        return $this->nb_col;
    }

    public function setNbCol($nb_col)
    {
        $this->nb_col = $nb_col;
    }

    public function getNbLigne()
    {
        return $this->nb_ligne;
    }

    public function setNbLigne($nb_ligne)
    {
        $this->nb_ligne = $nb_ligne;
    }

    public static function affichageGoban($nb_col, $nb_ligne)
    {
        if (is_null(Goban::$instance))
        {
            Goban::$instance = new Goban($nb_col, $nb_ligne);
            return Goban::$instance;
        }
        else
        {
            return Goban::$instance;
        }
    }

    public function mvmt($intersectionDepart,$intersectionArrive)
    {

    }
    
    function capture() {

    }

    function territoire() {

    }
    
    public function supprimerPion()
    {
        $this->pion = null ;
    }

} 
?> 