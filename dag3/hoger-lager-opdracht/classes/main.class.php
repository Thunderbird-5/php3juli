<?php
class Main {
    private $laagste ;
    private $hoogste ;
    private $teraden ;
    private $bezig ;
    public function __construct($init)
    {
        $this->laagste = $init->i_laagste ;
        $this->hoogste = $init->i_hoogste ;
        $this->teraden = $init->i_teRaden ;
        $this->bezig   = $init->b_isBezig ;
    }
    public function spelcontrole($geraden)
    {
        $_SESSION['beurten'][] = $geraden ;
        if (!$this->bezig || !$geraden){ 
            return 'welkom' ;
        } else
        if ($geraden > $this->teraden) {
            return 'lager' ;
        } else
        if ($geraden < $this->teraden) {
            return 'hoger' ;
        } else {
            // reset game.
            $_SESSION['b_isBezig'] = false ;
            return 'goed' ;
        }   
    }
    public function spelinstellingen()
    {
        # code...
    }
}
