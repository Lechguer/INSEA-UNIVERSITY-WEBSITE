<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require "db.php";

// Sécurité : utilisateur connecté
if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit;
}

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $ancien = $_POST["ancien_mdp"] ?? "";
    $nouveau = $_POST["nouveau_mdp"] ?? "";
    $confirm = $_POST["confirmer_mdp"] ?? "";

    // Récupérer l'utilisateur en session
    $stmt = $db->prepare("SELECT * FROM etudiants WHERE id = ?");
    $stmt->execute([$_SESSION["user_id"]]);
    $user = $stmt->fetch();

    if (!$user) {
        $error = "Utilisateur introuvable.";

    } elseif (!password_verify($ancien, $user["Password"])) {
        $error = "Ancien mot de passe incorrect.";

    } elseif (strlen($nouveau) < 6) {
        $error = "Le nouveau mot de passe doit contenir au moins 6 caractères.";

    } elseif ($nouveau !== $confirm) {
        $error = "Les deux nouveaux mots de passe ne correspondent pas.";

    } elseif (password_verify($nouveau, $user["Password"])) {
        $error = "Le nouveau mot de passe doit être différent de l'ancien.";

    } else {

        $hash = password_hash($nouveau, PASSWORD_DEFAULT);

        // ⚠️ IMPORTANT : adaptation à ta base (users + first_login)
        $update = $db->prepare("UPDATE etudiants SET Password = ?, first_login = 0 WHERE id = ?");
        $update->execute([$hash, $_SESSION["user_id"]]);

        $success = "Mot de passe modifié avec succès !";

        header("Location: ../E_space/E_space.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changer le mot de passe</title>

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 40px 36px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #1F4E79;
            margin-bottom: 8px;
            font-size: 22px;
        }

        .subtitle {
            text-align: center;
            color: #666;
            font-size: 13px;
            margin-bottom: 28px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #333;
            margin-bottom: 6px;
        }

        .input-wrapper {
            position: relative;
        }

        input[type="password"], input[type="text"] {
            width: 100%;
            padding: 10px 40px 10px 14px;
            border: 1.5px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
        }

        input:focus {
            border-color: #2E75B6;
        }

        .toggle-eye {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background: #1F4E79;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .btn:hover {
            background: #2E75B6;
        }

        .alert {
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 15px;
            text-align: center;
        }

        .alert-error {
            background: #fde8e8;
            color: #c0392b;
        }

        .alert-success {
            background: #e8f5e9;
            color: #27ae60;
        }
    </style>
</head>

<body>

<div class="card">

    <h2>🔒 Changer le mot de passe</h2>
    <p class="subtitle">Veuillez définir un nouveau mot de passe personnel</p>

    <!-- ERREUR -->
    <?php if (!empty($error)): ?>
        <div class="alert alert-error">
            <?= htmlspecialchars($error) ?>
        </div>
    <?php endif; ?>

    <!-- SUCCESS -->
    <?php if (!empty($success)): ?>
        <div class="alert alert-success">
            <?= htmlspecialchars($success) ?>
        </div>
    <?php endif; ?>

    <!-- FORMULAIRE (TON CODE GARANTI INTACT) -->
    <form method="POST">

        <div class="form-group">
            <label>Ancien mot de passe</label>
            <div class="input-wrapper">
                <input type="password" name="ancien_mdp" id="ancien_mdp" required>
                <span class="toggle-eye" onclick="toggle('ancien_mdp', this)">👁️</span>
            </div>
        </div>

        <div class="form-group">
            <label>Nouveau mot de passe</label>
            <div class="input-wrapper">
                <input type="password" name="nouveau_mdp" id="nouveau_mdp" required>
                <span class="toggle-eye" onclick="toggle('nouveau_mdp', this)">👁️</span>
            </div>
        </div>

        <div class="form-group">
            <label>Confirmer le nouveau mot de passe</label>
            <div class="input-wrapper">
                <input type="password" name="confirmer_mdp" id="confirmer_mdp" required>
                <span class="toggle-eye" onclick="toggle('confirmer_mdp', this)">👁️</span>
            </div>
        </div>

        <button type="submit" class="btn">Confirmer</button>

    </form>

</div>

<script>
function toggle(id, icon) {
    const input = document.getElementById(id);

    if (input.type === "password") {
        input.type = "text";
        icon.textContent = "🙈";
    } else {
        input.type = "password";
        icon.textContent = "👁️";
    }
}
</script>

</body>
</html>