<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21/12/2018
 * Time: 10:56
 */

class Mage extends Personnage
{
    /**
     * Mage constructor.
     * @param $name
     */
    public function __construct($name, $sexe = true)
    {
        parent::__construct($name, $sexe);
        $this->vie = $this->vie/4*3;
        $this->attaque = $this->attaque/2;
        $this->name = "Magic " . $name;
        $this->pm = 15;
    }

    /**
     * Permet de voler 10 points de vie a la cible
     * @param $cible
     */
    public function volVie($cible)
    {
        $cible->vie -= $this->attaque;
        $this->vie += $this->attaque;
    }


    public function healTarget($cible){
        $cible->vie += $this->pm;
    }
}