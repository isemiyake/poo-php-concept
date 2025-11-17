 <?php 
require_once 'noyau/init.php';
$etudiant1 =new Etudiant();
$etudiant1->setPrenom("Pascale");
echo $etudiant1->getPrenom();