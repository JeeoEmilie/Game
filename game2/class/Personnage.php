<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19/12/2018
 * Time: 10:54
 */

class Personnage
{
    /**
     * @var string Nom du personnage
     */
    protected $name;
    /**
     * @var int Points de vie
     */
    protected $vie = 80;
    /**
     * @var int Points d'attaque
     */
    protected $attaque = 20;
    /**
     * @var int Point d'armure
     */
    protected $armure = 10;

    /**
     * @var int Points de magie
     */
    protected $pm = 1;

    protected $sexe;

    /**
     * Personnage constructor.
     * @param $name string Nom du personnage
     * @param $sexe boolean Sexe du personnage (true = Homme)
     */
    public function __construct($name, $sexe = true)
    {
        $this->name = $name;
        $this->sexe = $sexe;
    }

    /**
     * @return int Point de vie
     */
    public function getVie()
    {
        return $this->vie;
    }

    /**
     * @param $pv int Point de vie
     */
    public function setVie($pv){
        $this->vie = $pv;
    }

    /**
     * @return string Nom du personnage
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string Sexe du personnage
     */
    public function getSexe()
    {
        if($this->sexe == true){
            return "Homme";
        }else{
            return "Femme";
        }
    }


    /**
     * Soigne le personnage
     * @param null $pv Nombre de pv à ajouter à la vie du personnage
     */
    public function heal($pv = null)
    {
        if($pv == null){
            $this->vie = 100;
        }else{
            $this->vie += $pv;
        }

    }

    /**
     * Permet d'attaquer un autre personnage et de lui retirer des PV
     * @param $cible object Personnage
     */
    public function attaque($cible){
        if($cible->isDead()){ //Si cible morte, ne pas attaquer
            echo $cible->getName() . " est déjà mort(e) <br>";

        }else{ //Si la cible est vivante, on peut attaquer
            $degat = $this->attaque + rand(0,5); //Addition de l'attaque + d'une valeur au hasard entre 0 et 5

            $cible->vie -= ($degat - $cible->armure); //On retire le nombre de points d'attaque (de l'attaquant) aux points de vie de la cible
            $cible->empecherPVNegatif();
            if($cible->isDead()){ //Si l'attaque a tué le personnage
                echo $this->name . " a tué " . $cible->name . "<br>";
            }
        }
    }

    /**
     * Permet de ne jamais avoir un personnage avec des points de vie négatifs
     */
    protected function empecherPVNegatif()
    {
        if($this->vie < 0){
            $this->vie = 0;
        }
    }

    /**
     * Retourne vrai si le personnage n'a plus de vie
     * @return bool
     */
    protected function isDead()
    {
        if($this->vie <= 0){
            return true;
        }else{
            return false;
        }
    }
}




