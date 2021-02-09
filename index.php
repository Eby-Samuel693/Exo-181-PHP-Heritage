<?php
// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon

require "./classes/Personnage.php";
require "./classes/Dragon.php";
require "./classes/princess.php";

// Creation d'une instance de la classe personnage
$humain = new personnage();
$humain->setNom("Eby");
echo 'point de vie de Eby a '. $humain->getVie().'<br>';

// Creation d'une instance de la classe dragon
$dragon = new dragon();
$dragon->setNom('dark');
echo 'point de vie de Dark a' .$dragon->getVie().'<br>';

$princess = new princess();
$princess->setNom('peach');
echo 'pv de peach a ' . $princess->getVie();


