<?php
session_start();
require "db.php";

$email = $_POST["email"];
$password = $_POST["password"];

$verify = $db->prepare("SELECT * FROM etudiants WHERE email = ?");
$verify->execute([$email]);
$user = $verify->fetch();

if (!$user) {
    $_SESSION["Error"] = "Email incorrect";
    header("Location: index.php");
    exit;
}

if (!password_verify($password, $user["Password"])) {
    $_SESSION["Error"] = "Mot de passe incorrect";
    header("Location: index.php");
    exit;
}

// ✅ LOGIN OK
$_SESSION["user_id"] = $user["id"];
$_SESSION["annee"] = $user["Année"];

// 🔥 première connexion
if ($user["first_login"] == 1) {
    header("Location: password_change.php");
} else {
    header("Location: ../E_space/E_space.php");
}
exit;
?>