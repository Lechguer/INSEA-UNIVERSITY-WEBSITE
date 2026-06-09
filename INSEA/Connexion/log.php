<?php
session_start();
require "db.php";

$email = trim($_POST["email"]);
$password = $_POST["password"];

$verify = $db->prepare("SELECT * FROM etudiants_1dse WHERE email = ?");
$verify->execute([$email]);
$user = $verify->fetch();

if (!$user) {
    $_SESSION["Error"] = "Email incorrect";
    header("Location: index.php");
    exit;
}

if (!password_verify($password, $user["mot_de_passe"])) {
    $_SESSION["Error"] = "Mot de passe incorrect";
    header("Location: index.php");
    exit;
}

// ✅ LOGIN OK
$_SESSION["user_id"] = $user["id"];
$_SESSION["nom"] = $user["nom_complet"];

header("Location: ../E_space/E_space.php");
exit;
?>