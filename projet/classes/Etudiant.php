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

    public function __construct(array $data=null)
    {
      SELF::$nombreObjetCreer++ ;
      if($data): 
      $this->hydrater($data);
      endif;
  }
   public function __destruct()
    {
      SELF::$nombreObjetCreer-- ; 
  }
    
     public static function getNombreObjetCreer(){
        return SELF::$nombreObjetCreer;

    }
    //methode hydrater
    public function hydrater(array $data = null){
        if($data):
            foreach($data as $prop=>$valeur):
                $nomMethode='set'.ucfirst($prop);
                if(method_exists($this, $nomMethode)):
                    $this->$nomMethode($valeur);
             endif;
            endforeach;
        endif;
    }
}
