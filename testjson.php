<?php
$con=new pdo('mysql:host=localhost;dbname=bts; charset=utf8',

    'root','');
$sql = "SELECT * FROM etudiants";
$stmt = $con->prepare($sql);
$stmt->execute();

$etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);
$tab = array('etudiant1' =>array("nom"=>"ziani","prenom"=>"ali", "age"=>25),'etudiant2' =>array("nom"=>"faraji","prenom"=>"anass", "age"=>25));
$st= json_encode($tab);
echo $st;
$ob=json_decode($st,true);
//var_dump($ob);
foreach ($ob as  $etude) {
	// code...
	echo $etude['nom'].PHP_EOL;
}

