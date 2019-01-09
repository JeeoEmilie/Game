<?php


class Archer extends Personnage
{
    
public function __construct($name, $sexe = true)
      {
       parent::__construct($name, $sexe);
		$this->vie = 40;
		$this->attaque = 40;
      }
	
}