<?php
$user="root";
$pass="game123";

try{
    $db=new PDO("mysql:host=localhost;dbname=etudiant;charset=utf8mb4",$user,$pass);
}
catch(PDOException $e){
    print "Erreur : " . $e->getMessage() . "<br>";
    die;
}

?>