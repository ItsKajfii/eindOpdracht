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

$persoon1 = new person();
$persoon1->naam = "Kaj";
$persoon1->achternaam = "de Wilt";
$persoon1->leeftijd = 17;
$persoon1->geslacht = "Man";
$persoon1->veranderAfkomst();

echo print_r($persoon1). "<br />";


?>