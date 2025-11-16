<?php 

class Etudiant {
    private $prenom;
    private $nom;
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
    //getters
    public function getPrenom(){
        return $this->prenom;
    }
     public function getNom(){
        return $this->nom;

    }
     public static function getNombreObjetCreer(){
        return SELF::$nombreObjetCreer;

    }
    //setters
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
    
}

$etudiant1 =new Etudiant();
$etudiant1->setPrenom("Pascale");

$etudiant2 =new Etudiant();
$etudiant2->setPrenom("semih");
echo Etudiant::Ecole;
echo "<br/>";
echo Etudiant::getNombreObjetCreer();
echo "<br/>";
unset($etudiant2);
echo Etudiant::getNombreObjetCreer();

