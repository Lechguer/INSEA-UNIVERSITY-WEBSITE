# Site vitrine de l'INSEA

> Site institutionnel **bilingue (français / arabe)** de l'Institut National de Statistique et d'Économie Appliquée — une vitrine moderne, responsive et accessible, construite sans framework.

![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=black)
![Bilingue](https://img.shields.io/badge/Bilingue-FR%20%C2%B7%20AR-1e7d50)
![Responsive](https://img.shields.io/badge/Responsive-mobile%20%E2%86%92%20desktop-0d3d2b)

---

## À propos

Ce projet est le site vitrine de l'INSEA : la première image que reçoit un visiteur qui découvre l'école en ligne. Il s'adresse à trois publics à la fois — les futurs candidats, les étudiants déjà inscrits, et les chercheurs ou recruteurs — et organise ses sections autour de ces trois besoins.

Sa particularité est d'être **entièrement bilingue, français et arabe**. En un clic, toute la page bascule d'une langue à l'autre et se réorganise en miroir pour respecter le sens de lecture de droite à gauche de l'arabe. L'ensemble est écrit en PHP, HTML, CSS et JavaScript natif, sans aucun framework ni étape de compilation : il suffit d'un serveur PHP pour le faire tourner.

---

## Captures d'écran

> Ajoutez vos propres captures dans un dossier `assets/screenshots/`, puis décommentez les lignes ci-dessous.

<!--
| Accueil (FR) | Accueil (AR — droite à gauche) |
|---|---|
| ![Accueil FR](assets/screenshots/accueil-fr.png) | ![Accueil AR](assets/screenshots/accueil-ar.png) |

| Mode sombre | Section Formations (accordéon) |
|---|---|
| ![Mode sombre](assets/screenshots/mode-sombre.png) | ![Formations](assets/screenshots/formations.png) |
-->

---

## Fonctionnalités

**Système bilingue FR / AR**
- Bascule de langue en un clic, sur l'ensemble du site.
- Passage automatique en mise en page miroir (RTL) pour l'arabe.
- Police dédiée à l'arabe (Cairo) pour une lecture nette, et correction de l'espacement entre lettres propre à l'écriture arabe.
- Choix de langue mémorisé pendant toute la visite grâce à une session PHP.
- Contenu séparé du code, rangé dans un dictionnaire de traductions : pour ajouter une langue, il suffit d'ajouter une colonne.

**Interface et design**
- Mode clair et mode sombre, au choix du visiteur, via des variables CSS.
- Affichage responsive, pensé du téléphone à l'ordinateur (menu « hamburger » sur mobile).
- Barre de navigation collante (sticky) avec méga-menus déroulants, accessibles au clavier.
- Bandeau de partenaires en défilement infini, avec pause au survol et respect des préférences de mouvement réduit.
- Section formations en accordéon interactif : un clic ouvre la filière choisie et affiche son détail.
- Animations discrètes au défilement et micro-interactions au survol.

**Bonnes pratiques**
- Architecture CSS modulaire : une feuille de style par zone du site (un fichier = une responsabilité).
- JavaScript volontairement léger : il se contente de basculer des classes, et c'est le CSS qui traduit ces classes en apparence.
- Réflexe de sécurité : la langue reçue est validée par une liste blanche, afin de ne jamais faire confiance aveuglément à une donnée venant de l'utilisateur.

---

## Stack technique

| Couche | Technologie |
|---|---|
| Serveur | PHP (sessions, internationalisation) |
| Structure | HTML5 sémantique |
| Style | CSS3 — variables, Grid, Flexbox, animations |
| Interactivité | JavaScript natif (vanilla) |
| Typographie | [DM Sans](https://fonts.google.com/specimen/DM+Sans) (latin) · [Cairo](https://fonts.google.com/specimen/Cairo) (arabe), via Google Fonts |

Aucun framework, aucune dépendance à installer, aucun build.

---

## Structure du projet

```
insea-site/
├── home.php                  # Page principale dynamique (FR/AR, session, dictionnaire i18n)
│
├── styles/
│   ├── base.css              # Variables, thème clair/sombre, reset du navigateur
│   ├── navbar.css            # Barre de navigation sticky + méga-menus
│   ├── marquee.css           # Bandeau des partenaires (défilement infini)
│   ├── sections.css          # Sections de contenu : grilles, cartes, animations
│   ├── Cards.css             # Accordéon interactif des formations
│   └── footer.css            # Pied de page : apparition au défilement, ambiance
│
├── JS/
│   ├── navbar.js             # Menu hamburger, bascule de thème, recherche
│   ├── footer.js             # Apparition du pied de page au défilement
│   ├── sections.js           # Micro-interactions des sections
│   └── Cards.js              # Ouverture / fermeture des panneaux de formation
│
├── images/                   # Photos du campus, logos des partenaires
│
├── formations/               # cycle · masters · doctorat · formation-continue (.html)
├── admissions/               # candidature · concours · internationaux · faq (.html)
├── vie-etudiante/            # associations · clubs · logement · evenements (.html)
├── carrieres/                # stages · emplois · alumni (.html)
├── recherche/                # laboratoires · publications · projets (.html)
└── actualites/               # news · agenda (.html)
```

---

## Installation et lancement

Le site a besoin d'un serveur capable d'exécuter du PHP (version 7.4 ou supérieure).

### Option 1 — XAMPP (recommandé)

1. Installez [XAMPP](https://www.apachefriends.org/).
2. Clonez le dépôt dans le dossier `htdocs` de XAMPP :
   ```bash
   git clone https://github.com/<votre-utilisateur>/insea-site.git
   ```
3. Démarrez **Apache** depuis le panneau de contrôle XAMPP.
4. Ouvrez votre navigateur à l'adresse :
   ```
   http://localhost/insea-site/home.php
   ```

### Option 2 — Serveur intégré de PHP

À la racine du projet :

```bash
php -S localhost:8000
```

Puis rendez-vous sur `http://localhost:8000/home.php`.

> Astuce : pour ouvrir directement le site sur `http://localhost:8000/`, vous pouvez renommer `home.php` en `index.php`, ou ajouter une redirection.

---

## Utilisation

- **Changer de langue** : bouton `FR` / `ع` en haut à droite.
- **Changer de thème** : icône clair / sombre, à côté du choix de langue.
- **Rechercher** : icône en forme de loupe, qui déploie une barre de recherche.
- **Explorer une formation** : cliquez sur l'un des six panneaux de la section Formations pour l'ouvrir.
- **Sur mobile** : les menus se regroupent derrière l'icône à trois traits.

---

## Le système bilingue, en bref

Le cœur du projet est la séparation entre le **contenu** et le **code**.

Tout le texte du site est rangé dans un dictionnaire à deux entrées : une version française et une version arabe, partageant exactement les mêmes clés. Lorsqu'un visiteur choisit une langue, le serveur sélectionne la bonne version et l'injecte dans la page. Le choix est conservé en session, de sorte qu'il reste valable d'une page à l'autre.

Pour l'arabe, deux ajustements s'ajoutent automatiquement : l'attribut `dir="rtl"` sur la balise racine, qui demande au navigateur de mettre toute la page en miroir, et le chargement d'une police adaptée. Cette approche rend l'entretien simple — un texte se corrige à un seul endroit — et l'ajout d'une troisième langue ne demanderait qu'une colonne de traductions supplémentaire.

---

## Feuille de route

- [ ] Relier les actualités et les événements à une base de données (MySQL) pour les mettre à jour sans toucher au code.
- [ ] Traduire également les pages internes (formations, admissions, recherche…).
- [ ] Ajouter une troisième langue (anglais).
- [ ] Mémoriser la langue préférée d'une visite à l'autre (cookie).
- [ ] Espace de connexion pour l'administration du contenu.

---

## Crédits et inspiration

- **Polices** : [DM Sans](https://fonts.google.com/specimen/DM+Sans) et [Cairo](https://fonts.google.com/specimen/Cairo) (Google Fonts).
- **Photographie** : campus de l'INSEA.
- **Design** : inspiré des sites de grandes écoles et d'universités modernes ; l'intégralité du code a été écrite de zéro pour ce projet.

---

## Auteur

Réalisé par **Hamza** dans le cadre d'un projet de Développement Web.

- GitHub : [@\<votre-utilisateur\>](https://github.com/<votre-utilisateur>)
- LinkedIn : [votre profil](https://www.linkedin.com/in/<votre-profil>)

---

## Licence

Projet académique. Vous êtes libre de le réutiliser et de l'adapter ; une licence [MIT](LICENSE) est recommandée si vous souhaitez le rendre public.
