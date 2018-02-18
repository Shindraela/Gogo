<?php 
class Pion extends Goban { 
    private $couleur = ['noir','blanc'];
    private $vivantMort = TRUE;

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

} 
?> 