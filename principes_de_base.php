<?php 

class Etudiant {
    private $prenom;
    private $nom;
    private static $nombreObjetCreer=0;
    const Ecole = "iepscf fleron";
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
echo Etudiant::Ecole;
echo "<br/>";
echo Etudiant::getNombreObjetCreer();

