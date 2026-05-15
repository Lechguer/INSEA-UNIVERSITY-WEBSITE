<?php
$user="KniDyy";
$pass="Tuveuxmehackersalechienchehhh";

try{
    $db=new PDO("mysql:host=localhost;dbname=etudiants_1dse",$user,$pass);
}
catch(PDOException $e){
    print "Erreur : " . $e->getMessage() . "<br>";
    die;
}

?>