<?php
session_start();
require "../Connexion/db.php";

$id = $_SESSION["user_id"]; 

$sql = "SELECT * FROM etudiants WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->execute(["id" => $id]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,500;0,9..144,700;1,9..144,400&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="style_space.css"> 
</head>
<body>
<!-- SIDEBAR -->
<aside class="sb">
  <div class="sb-top">
    <!-- BRAND -->
    <div class="brand">
      <div class="brand-mark">
        <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="40" height="40" rx="11" fill="url(#bg)"/>
          <!-- Stylized open book / leaf shape -->
          <path d="M20 10 C12 10 8 16 8 22 C8 28 13 32 20 32" stroke="white" stroke-width="2.2" stroke-linecap="round" fill="none"/>
          <path d="M20 10 C28 10 32 16 32 22 C32 28 27 32 20 32" stroke="rgba(255,255,255,.45)" stroke-width="2.2" stroke-linecap="round" fill="none"/>
          <line x1="20" y1="10" x2="20" y2="32" stroke="rgba(255,255,255,.25)" stroke-width="1.5" stroke-linecap="round"/>
          <circle cx="20" cy="10" r="3" fill="#e9a83a"/>
          <defs>
            <linearGradient id="bg" x1="0" y1="0" x2="40" y2="40">
              <stop offset="0%" stop-color="#0f7a58"/>
              <stop offset="100%" stop-color="#022b1c"/>
            </linearGradient>
          </defs>
        </svg>
      </div>
      <div class="brand-name">
        <span class="b1">INSEA</span>
        <span class="b2">Learning Space</span>
      </div>
    </div>

    <!-- NAV -->
    <div class="nav-section">
      <div class="nav-label">Principal</div>
      <div class="nav-item active" onclick="show('accueil',this)">
        <div class="ni-dot"></div>
        <svg class="ni-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
        Accueil
      </div>
      <div class="nav-item" onclick="show('cours',this)">
        <div class="ni-dot"></div>
        <svg class="ni-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg>
        Mes cours
      </div>
    </div>
    <div class="nav-section">
      <div class="nav-label">Suivi</div>
      <div class="nav-item" onclick="show('notes',this)">
        <div class="ni-dot"></div>
        <svg class="ni-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
        Notes & résultats
      </div>
      <div class="nav-item" onclick="show('remarques',this)">
        <div class="ni-dot"></div>
        <svg class="ni-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
        Remarques
      </div>
      <div class="nav-item" onclick="show('devoirs',this)">
        <div class="ni-dot"></div>
        <svg class="ni-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
        Devoirs
      </div>
    </div>
  </div>
  <div class="sb-foot">
    <div class="user-row">
      <div class="ava">Z</div>
      <div>
        <div class="u-name"><?= $user["prenom"] ?></div>
        <div class="u-role">Étudiant(e)</div>
      </div>
    </div>
    <a href="../Log_out/out.php" class="btn-out">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
      Déconnexion
    </a>
  </div>
</aside>

<!-- MAIN -->
<div class="main">
  <header class="topbar">
    <div class="top-left">
      <span class="top-title" id="pt">Tableau de bord</span>
      <span class="top-sub" id="ps">Mardi 12 mai 2026</span>
    </div>
    <div class="top-right">
      <div class="search-box">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        Rechercher…
      </div>
      <div class="icon-btn">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 01-3.46 0"/></svg>
        <span class="ndot"></span>
      </div>
    </div>
  </header>

  <div class="content">

    <!-- ── ACCUEIL ── -->
    <section class="section visible" id="sec-accueil">

      <div class="hero">
        <div class="hero-bg"><span></span><span></span><span></span></div>
        <div class="hero-text">
          <h2>Bonjour, <?= $user["prenom"] ?></h2>
          <p>Semestre en cours · 6 cours actifs · Semaine 18</p>
          <div style="margin-top:14px;display:flex;gap:8px;flex-wrap:wrap;">
            <span class="tag">📈 Moyenne 14.5/20</span>
            <span class="tag">📅 4 devoirs à venir</span>
          </div>
        </div>
        <div class="hero-badge">
          <div class="hb-num">72%</div>
          <div class="hb-lbl">Progression</div>
        </div>
      </div>

      <div class="stats-grid">
        <div class="sc c1"><div class="sc-ico">📚</div><div class="sc-info"><div class="sc-num">6</div><div class="sc-lbl">Cours actifs</div></div></div>
        <div class="sc c2"><div class="sc-ico">📝</div><div class="sc-info"><div class="sc-num">4</div><div class="sc-lbl">Devoirs à venir</div></div></div>
        <div class="sc c3"><div class="sc-ico">📊</div><div class="sc-info"><div class="sc-num">14.5<span style="font-size:1rem">/20</span></div><div class="sc-lbl">Moyenne générale</div></div></div>
        <div class="sc c4"><div class="sc-ico">💬</div><div class="sc-info"><div class="sc-num">3</div><div class="sc-lbl">Remarques</div></div></div>
      </div>

      <div class="two-col">
        <div class="card">
          <div class="card-head">
            <div class="card-title"><div class="ct-dot"></div>Dernières notes</div>
            <span class="card-more">Voir tout →</span>
          </div>
          <table class="gt">
            <tr><th>Matière</th><th>Note</th><th>Évaluation</th></tr>
            <tr><td>Base de données</td><td><span class="gp h">16/20</span></td><td style="color:var(--ink-3);font-size:.77rem">Examen</td></tr>
            <tr><td>Language C</td><td><span class="gp m">12/20</span></td><td style="color:var(--ink-3);font-size:.77rem">TP </td></tr>
            <tr><td>Français</td><td><span class="gp h">15/20</span></td><td style="color:var(--ink-3);font-size:.77rem">Dissertation</td></tr>
            <tr><td>Probabilités</td><td><span class="gp l">8/20</span></td><td style="color:var(--ink-3);font-size:.77rem">Chance de redoubler</td></tr>
          </table>
        </div>

        <div class="card">
          <div class="card-head">
            <div class="card-title"><div class="ct-dot"></div>Prochains devoirs</div>
            <span class="card-more">Voir tout →</span>
          </div>
          <div class="ai">
            <div class="ai-left">
              <div class="ai-ico" style="background:rgba(226,88,112,.09)">📐</div>
              <div><div class="ai-title">Démonstration de la loi de khi 2</div><div class="ai-course">Inférence</div></div>
            </div>
            <span class="ad soon">14/05</span>
          </div>
          <div class="ai">
            <div class="ai-left">
              <div class="ai-ico" style="background:rgba(58,123,213,.09)">🔭</div>
              <div><div class="ai-title">Rapport de TP</div><div class="ai-course">Développement Web</div></div>
            </div>
            <span class="ad ok">20/05</span>
          </div>
          <div class="ai">
            <div class="ai-left">
              <div class="ai-ico" style="background:rgba(31,142,120,.09)">📖</div>
              <div><div class="ai-title">Dissertation</div><div class="ai-course">Français</div></div>
            </div>
            <span class="ad done">✓ Rendu</span>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-head">
          <div class="card-title"><div class="ct-dot"></div>Remarques récentes</div>
        </div>
        <div class="ri">
          <div class="ri-bar pos"></div>
          <div><div class="ri-text">Excellent travail en classe, participation très active ce semestre.</div><div class="ri-meta">Par <strong>M. Skalli</strong> · 08/05/2026</div></div>
        </div>
        <div class="ri">
          <div class="ri-bar neu"></div>
          <div><div class="ri-text">Peut mieux faire en termes de rigueur dans les démonstrations.</div><div class="ri-meta">Par <strong>M Ouazza</strong> · 03/05/2026</div></div>
        </div>
        <div class="ri">
          <div class="ri-bar neg"></div>
          <div><div class="ri-text">Retard dans le rendu du dernier projet — veiller à respecter les délais.</div><div class="ri-meta">Par <strong>M Benassila</strong> · 28/04/2026</div></div>
        </div>
      </div>
    </section>

    <!-- ── COURS ── -->
    <section class="section" id="sec-cours">
      <div class="sh2"><h2>Mes cours</h2><p>6 cours inscrits ce semestre.</p></div>
      <div class="cg">
        <div class="cc">
          <div class="cc-head"><div class="cc-ico" style="background:#e6f5f0">🔢</div><div><div class="cc-name">Mathématiques</div><div class="cc-teacher">👤 M. Benali</div></div></div>
          <div class="cc-desc">Analyse, algèbre linéaire et probabilités appliquées.</div>
          <div class="pb"><div class="pf" style="width:72%"></div></div><div class="pl">72% complété</div>
        </div>
        <div class="cc">
          <div class="cc-head"><div class="cc-ico" style="background:#eaf0f8">⚗️</div><div><div class="cc-name">Physique-Chimie</div><div class="cc-teacher">👤 Mme. Chraibi</div></div></div>
          <div class="cc-desc">Mécanique, optique géométrique et thermodynamique.</div>
          <div class="pb"><div class="pf" style="width:58%"></div></div><div class="pl">58% complété</div>
        </div>
        <div class="cc">
          <div class="cc-head"><div class="cc-ico" style="background:#fdf3e7">💻</div><div><div class="cc-name">Informatique</div><div class="cc-teacher">👤 M. Tazi</div></div></div>
          <div class="cc-desc">Python, algorithmes et bases de données relationnelles.</div>
          <div class="pb"><div class="pf" style="width:45%"></div></div><div class="pl">45% complété</div>
        </div>
        <div class="cc">
          <div class="cc-head"><div class="cc-ico" style="background:#f5edf8">📝</div><div><div class="cc-name">Français</div><div class="cc-teacher">👤 Mme. Ouhbi</div></div></div>
          <div class="cc-desc">Littérature, expression écrite et analyse de textes.</div>
          <div class="pb"><div class="pf" style="width:80%"></div></div><div class="pl">80% complété</div>
        </div>
      </div>
    </section>

    <!-- ── NOTES ── -->
    <section class="section" id="sec-notes">
      <div class="sh2"><h2>Notes & résultats</h2><p>Moyenne générale : <strong>14.5/20</strong></p></div>
      <div class="card">
        <table class="gt">
          <tr><th>Matière</th><th>Note</th><th>Sur</th><th>Évaluation</th><th>Date</th></tr>
          <tr><td>Mathématiques</td><td><span class="gp h">16</span></td><td style="color:var(--ink-3)">20</td><td>Contrôle n°3</td><td style="color:var(--ink-3);font-size:.77rem">05/05/2026</td></tr>
          <tr><td>Physique</td><td><span class="gp m">12</span></td><td style="color:var(--ink-3)">20</td><td>TP Optique</td><td style="color:var(--ink-3);font-size:.77rem">28/04/2026</td></tr>
          <tr><td>Français</td><td><span class="gp h">15</span></td><td style="color:var(--ink-3)">20</td><td>Dissertation</td><td style="color:var(--ink-3);font-size:.77rem">22/04/2026</td></tr>
          <tr><td>Informatique</td><td><span class="gp l">8</span></td><td style="color:var(--ink-3)">20</td><td>Projet Python</td><td style="color:var(--ink-3);font-size:.77rem">15/04/2026</td></tr>
        </table>
      </div>
    </section>

    <!-- ── REMARQUES ── -->
    <section class="section" id="sec-remarques">
      <div class="sh2"><h2>Remarques des enseignants</h2><p>3 remarques au total.</p></div>
      <div class="card">
        <div class="ri"><div class="ri-bar pos"></div><div><div class="ri-text">Excellent travail en classe, participation très active ce semestre.</div><div class="ri-meta">Par <strong>M. Benali</strong> · 08/05/2026</div></div></div>
        <div class="ri"><div class="ri-bar neu"></div><div><div class="ri-text">Peut mieux faire en termes de rigueur dans les démonstrations.</div><div class="ri-meta">Par <strong>Mme. Chraibi</strong> · 03/05/2026</div></div></div>
        <div class="ri"><div class="ri-bar neg"></div><div><div class="ri-text">Retard dans le rendu du dernier projet — veiller à respecter les délais.</div><div class="ri-meta">Par <strong>M. Tazi</strong> · 28/04/2026</div></div></div>
      </div>
    </section>

    <!-- ── DEVOIRS ── -->
    <section class="section" id="sec-devoirs">
      <div class="sh2"><h2>Devoirs & travaux</h2><p>3 devoirs à venir.</p></div>
      <div class="card">
        <div class="ai"><div class="ai-left"><div class="ai-ico" style="background:rgba(226,88,112,.09)">📐</div><div><div class="ai-title">Exercices intégrales</div><div class="ai-course">Mathématiques</div></div></div><span class="ad soon">Dû le 14/05/2026</span></div>
        <div class="ai"><div class="ai-left"><div class="ai-ico" style="background:rgba(58,123,213,.09)">🔭</div><div><div class="ai-title">Rapport de TP Optique</div><div class="ai-course">Physique-Chimie</div></div></div><span class="ad ok">Dû le 20/05/2026</span></div>
        <div class="ai"><div class="ai-left"><div class="ai-ico" style="background:rgba(31,142,120,.09)">📖</div><div><div class="ai-title">Lecture chapitre 4</div><div class="ai-course">Français</div></div></div><span class="ad done">✓ Rendu</span></div>
      </div>
    </section>

  </div>
</div>

<script>
const titles={accueil:'Tableau de bord',cours:'Mes cours',notes:'Notes & résultats',remarques:'Remarques',devoirs:'Devoirs'};
function show(id,el){
  document.querySelectorAll('.section').forEach(s=>s.classList.remove('visible'));
  document.getElementById('sec-'+id).classList.add('visible');
  document.querySelectorAll('.nav-item').forEach(n=>n.classList.remove('active'));
  if(el)el.classList.add('active');
  document.getElementById('pt').textContent=titles[id]||'';
}
</script>
</body>
</html>



