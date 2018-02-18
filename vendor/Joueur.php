<?php 
class Joueur { 
    private $numJouer = array (1,2);
    private $compteurCoup = 0;

    public function getNumJouer()
    {
        return $this->numJouer;
    }

    public function setNumJouer($numJouer)
    {
        $this->numJouer = $numJouer;
    }

    function compteCoup() {
        
    } 
} 
?> 