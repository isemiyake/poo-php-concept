<?php 

class Etudiant {
    private $prenom;
    private $nom;

    //getters
    public function getPrenom(){
        return $this->prenom;
    }
     public function getNom(){
        return $this->nom;

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
echo $etudiant1->getPrenom();
