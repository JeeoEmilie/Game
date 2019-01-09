<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21/12/2018
 * Time: 14:05
 */

class Guerrier extends Personnage
{
    /**
     * Guerrier constructor.
     * @param $name
     */
    public function __construct($name, $sexe = true)
    {
        parent::__construct($name, $sexe);
        $this->vie = 200;
        $this->attaque = 25;
        $this->armure = 15;
    }
}