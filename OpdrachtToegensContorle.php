<?php
/**
 * Created by PhpStorm.
 * User: kajde
 * Date: 11-3-2019
 * Time: 09:08
 */

class person{

    public $naam;
    public $achternaam;
    public $leeftijd;
    public $geslacht;
    protected $nationaliteit = "Nederlands";

    public function veranderAfkomst(){
        $this->nationaliteit = "Buitenlander";
    }

}
class Spanjaard extends person{
    protected $nationaliteit = "Spanjaard";
}

$GekkePersoonNederland = new person();
$GekkePersoonNederland->naam = "Kaj";
$GekkePersoonNederland->achternaam = "de Wilt";
$GekkePersoonNederland->leeftijd = 17;
$GekkePersoonNederland->geslacht = "Man";
$GekkePersoonNederland->veranderAfkomst();

$GekkePersoonDuitsland = new person();
$GekkePersoonDuitsland->naam = "Peter";
$GekkePersoonDuitsland->achternaam = "de Wilde";
$GekkePersoonDuitsland->leeftijd = 21;
$GekkePersoonDuitsland->geslacht = "Transgender";

echo print_r($GekkePersoonDuitsland). "<br />";


?>