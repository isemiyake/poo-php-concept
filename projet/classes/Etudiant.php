<?php
class Etudiant {
    // Les valeurs d'un objet de la class Etudiant
    private $prenom;
    private $nom;
    //getters des objets
    public function getPrenom(){
        return $this->prenom;
    }
     public function getNom(){
        return $this->nom;
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
    private static $nombreObjetCreer=0;
    const Ecole = "iepscf fleron";

    public function __construct()
    {
      SELF::$nombreObjetCreer++ ; 
  }
   public function __destruct()
    {
      SELF::$nombreObjetCreer-- ; 
  }
    
     public static function getNombreObjetCreer(){
        return SELF::$nombreObjetCreer;

    }
    
}
