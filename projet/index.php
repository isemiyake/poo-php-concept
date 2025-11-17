 <?php 
require_once 'noyau/init.php';
$etudiant1 =new Etudiant();
$etudiant1->setPrenom("Pascale");
$etudiant2 = new Etudiant();
$etudiant2->hydrater([
    'prenom'=>"remy",
    'nom'=>"sans-ami"
]);
$etudiant3=new Etudiant([
     'prenom'=>"remy",
    'nom'=>"sans-ami"
]);
echo $etudiant1->getPrenom();
echo "</br>";
echo $etudiant2->getPrenom();