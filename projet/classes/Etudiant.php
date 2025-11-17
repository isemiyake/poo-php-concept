<?php
class Etudiant extends ClasseGenerique{
    // Les valeurs d'un objet de la class Etudiant
    private $prenom;
    private $nom;
    const ECOLE="Iescf Fleron";
    private static $nombreObjetCreer=0;
    //getters des objets
    public function getPrenom(){
        return $this->prenom;
    }
     public function getNom(){
        return $this->nom;
    }
    //constructeur
    public function __construct(?array $data = null)
    {
        parent::__construct($data);
        SELF::$nombreObjetCreer++;
    }
    public function __desctruct(?array $data = null)
    {
        //parent::__desctruct($data);
        SELF::$nombreObjetCreer--;
    }
     //setters des objets
     public function setPrenom(string $data=null){
       if($data):
        $this->prenom=$data;
       endif;
    }
     public function setNom(string $data=null){
            if($data):
        $this->nom=$data;
            endif;
    }
    // Les valeurs de la class Etudiant
     public static function getNombreObjetCreer(){
        return SELF::$nombreObjetCreer;

    }
    //methode hydrater
   
}
