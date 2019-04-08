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

echo print_r($persoon1). "<br />";


?>