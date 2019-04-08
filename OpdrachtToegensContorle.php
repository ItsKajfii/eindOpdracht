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

$GekkePersoon = new person();
$GekkePersoon->naam = "Kaj";
$GekkePersoon->achternaam = "de Wilt";
$GekkePersoon->leeftijd = 17;
$GekkePersoon->geslacht = "Man";
$GekkePersoon->veranderAfkomst();

echo print_r($persoon1). "<br />";


?>