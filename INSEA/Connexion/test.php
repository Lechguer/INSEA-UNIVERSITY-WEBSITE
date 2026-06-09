<?php
require "db.php";

$stmt = $db->prepare("SELECT * FROM etudiants_1dse WHERE email = ?");
$stmt->execute(["hamzasabir@insea.ac.ma"]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

echo "<pre>";
echo "Colonnes réelles de la table :\n";
print_r(array_keys($user));
echo "</pre>";