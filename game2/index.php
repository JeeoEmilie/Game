<?php

require "class/Personnage.php";
require "class/Archer.php";
require "class/Mage.php";
require "class/Guerrier.php";


$guerriere = new Guerrier('Emilie', false);
droDump($guerriere);

echo "Le sexe de mon perso est : " .$guerriere->getSexe();



function droDump($var){
    echo '<pre>' . var_export($var, true) . '</pre>';
}






//echo '<pre>' . var_export($perso1, true) . '</pre>';
//echo '<pre>' . var_export($perso2, true) . '</pre>';
//
//for($i = 0; $i < 10; $i++){
//    echo "Fabrice attaque Abdel <br>";
//    $perso2->attaque($perso1);
//    echo "Abdel vie :" . $perso1->getVie() . "<br>";
//}