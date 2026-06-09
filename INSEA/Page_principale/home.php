<?php

session_start();

if (isset($_GET['lang']) && in_array($_GET['lang'], ['fr', 'ar'], true)) {
    $_SESSION['lang'] = $_GET['lang'];
}
$lang  = $_SESSION['lang'] ?? 'fr';
$dir   = ($lang === 'ar') ? 'rtl' : 'ltr';
$arrow = ($lang === 'ar') ? '←' : '→';

$T = [
/* FRANÇAIS  */
'fr' => [
  'page_title'        => "INSEA – Institut National de Statistique et d'Économie Appliquée",
  'login'             => "Se connecter",
  'search'            => "RECHERCHER",
  'search_placeholder'=> "Rechercher…",
  'theme_toggle'      => "Basculer le thème",
  'menu'              => "Menu",

  'logo_l1'           => "Institut National<br>de Statistique",
  'logo_l2'           => "& d'Économie Appliquée",

  'nav_formations'    => "Formations",
  'nav_admissions'    => "Admissions",
  'nav_vie'           => "Vie étudiante",
  'nav_carrieres'     => "Carrières",
  'nav_recherche'     => "Recherche",
  'nav_actualites'    => "Actualités",

  'dd_cycle'          => "Cycle Ingénieur",
  'dd_masters'        => "Masters",
  'dd_doctorat'       => "Doctorats",
  'dd_form_continue'  => "Formation continue",
  'dd_candidature'    => "Candidater",
  'dd_concours'       => "Concours",
  'dd_internationaux' => "Étudiants internationaux",
  'dd_faq'            => "FAQ",
  'dd_associations'   => "Associations",
  'dd_clubs'          => "Clubs",
  'dd_logement'       => "Logement",
  'dd_evenements'     => "Événements",
  'dd_stages'         => "Stages &amp; emplois",
  'dd_emplois'        => "Offres d'emploi",
  'dd_alumni'         => "Réseau alumni",
  'dd_laboratoires'   => "Laboratoires",
  'dd_publications'   => "Publications",
  'dd_projets'        => "Projets",
  'dd_news'           => "Dernières nouvelles",
  'dd_agenda'         => "Agenda",

  'hero_title'        => "Façonner l'avenir<br>par la connaissance",
  'hero_sub'          => "Formation d'excellence en statistique et économie appliquée au service du développement du Maroc.",
  'hero_cta1'         => "Candidater maintenant →",
  'hero_cta2'         => "Découvrir les formations",

  'partners_label'    => "Nos partenaires &amp; institutions",

  'news_tag'          => "Actualités",
  'news_title'        => "Dernières nouvelles<br>de l'INSEA",
  'news_all'          => "Toutes les actualités →",
  'news_feat_cat'     => "À la une",
  'news_feat_title'   => "L'INSEA célèbre 58 ans d'excellence au service du développement statistique du Maroc",
  'news_feat_meta'    => "12 mai 2026 · 5 min de lecture",
  'news1_cat'         => "Partenariat",
  'news1_title'       => "Signature d'un accord de coopération avec l'Université Laval (Canada)",
  'news1_date'        => "6 mai 2026",
  'news1_excerpt'     => "Un nouveau programme d'échange académique ouvre de nouvelles perspectives pour nos étudiants en master.",
  'news2_cat'         => "Recherche",
  'news2_title'       => "Publication : Big Data et politiques publiques — nouvelles méthodologies appliquées au Maroc",
  'news2_date'        => "2 mai 2026",
  'news2_excerpt'     => "L'équipe du laboratoire LAREMAF publie une étude pionnière dans le Journal of Applied Econometrics.",
  'news3_cat'         => "Événement",
  'news3_title'       => "Forum Emploi INSEA 2026 : plus de 60 recruteurs attendus le 28 mai",
  'news3_date'        => "28 avril 2026",
  'news3_excerpt'     => "Rencontrez les employeurs leaders en finance, conseil, administration publique et secteur digital.",

  'form_eyebrow'      => "Nos filières",
  'form_title'        => "Six voies vers <em>l'excellence</em>",
  'form_sub'          => "Cliquez pour explorer chaque filière d'ingénieur.",

  'p1_tag'   => "Data &amp; Software Eng.",
  'p1_title' => "Data &amp; Software Engineering",
  'p1_coord' => "Pr. Kaoutar Elhari",
  'p1_desc'  => "Formation polyvalente alliant ingénierie des données et génie logiciel : architecture, Big Data, DevOps, Intelligence Artificielle et Cloud.",
  'p1_s1'=>"Big Data", 'p1_s2'=>"Machine Learning", 'p1_s3'=>"DevOps", 'p1_s4'=>"Cloud",
  'p1_link'  => "Fiche complète →",

  'p2_tag'   => "Data Science",
  'p2_title' => "Data Science",
  'p2_coord' => "Pr. Imade Benelallam",
  'p2_desc'  => "IA, Deep Learning, analyse prédictive, visualisation des données et systèmes intelligents.",
  'p2_s1'=>"Deep Learning", 'p2_s2'=>"Big Data", 'p2_s3'=>"DataViz",
  'p2_link'  => "Fiche complète →",

  'p3_tag'   => "Actuariat",
  'p3_title' => "Actuariat &amp; Finance",
  'p3_desc'  => "Gestion des risques, finance quantitative, assurance et modélisation actuarielle.",
  'p3_s1'=>"Finance", 'p3_s2'=>"Risk Management", 'p3_s3'=>"Actuariat",
  'p3_link'  => "Fiche complète →",

  'p4_tag'   => "Biostatistique",
  'p4_title' => "Biostatistique &amp; Big Data",
  'p4_desc'  => "Analyse biomédicale, démographie, santé publique et intelligence des données.",
  'p4_s1'=>"Santé", 'p4_s2'=>"Statistiques", 'p4_s3'=>"ML",
  'p4_link'  => "En savoir plus →",

  'p5_tag'   => "Économie",
  'p5_title' => "Économie &amp; Statistique",
  'p5_desc'  => "Économétrie, prévisions économiques, finance et analyse des politiques publiques.",
  'p5_s1'=>"Économétrie", 'p5_s2'=>"Finance", 'p5_s3'=>"Data Mining",
  'p5_link'  => "En savoir plus →",

  'p6_tag'   => "Recherche Opérationnelle",
  'p6_title' => "Sciences de la Décision",
  'p6_desc'  => "Optimisation, logistique, modélisation mathématique et aide à la décision.",
  'p6_s1'=>"Optimisation", 'p6_s2'=>"Algorithmes", 'p6_s3'=>"Simulation",
  'p6_link'  => "En savoir plus →",

  'adm_tag'   => "Admissions 2026–2027",
  'adm_title' => "Rejoignez l'INSEA,<br>construisez votre avenir",
  'adm_sub'   => "Les candidatures pour l'année académique 2026–2027 sont ouvertes. Concours national d'entrée en cycle ingénieur et admissions directes en master.",
  'adm_cta1'  => "Déposer ma candidature →",
  'adm_cta2'  => "Guide d'admission",
  'adm_deadline_label' => "Date limite :",
  'adm_deadline_date'  => "30 juin 2026",
  'adm_process' => "Processus d'admission",
  'adm_s1_t' => "Créer votre dossier en ligne",
  'adm_s1_d' => "Renseignez votre profil académique et téléversez vos documents sur la plateforme candidature.",
  'adm_s2_t' => "Passer les épreuves de sélection",
  'adm_s2_d' => "Concours écrit en mathématiques, statistiques et culture générale selon le programme visé.",
  'adm_s3_t' => "Entretien de motivation",
  'adm_s3_d' => "Les candidats retenus passent un entretien devant un jury de professeurs et professionnels.",
  'adm_s4_t' => "Confirmation d'inscription",
  'adm_s4_d' => "Résultats publiés fin juillet — confirmation et paiement des frais d'inscription en ligne.",

  'res_tag'   => "Recherche &amp; Impact",
  'res_title' => "Des laboratoires au cœur<br>des enjeux contemporains",
  'res_all'   => "Toutes les publications →",
  'lab1_tag'  => "Économétrie",
  'lab1_desc' => "Laboratoire de Recherche en Économétrie, Macroéconomie et Finance. Évaluation des politiques publiques et modélisation macroéconomique du Maroc et de l'Afrique.",
  'lab1_pubs' => "42 publications · 2024–2026",
  'lab2_tag'  => "Data Science",
  'lab2_desc' => "Laboratoire d'Analyse des Données et Systèmes. Intelligence artificielle, traitement automatique du langage et apprentissage automatique appliqués aux données sociales.",
  'lab2_pubs' => "31 publications · 2024–2026",
  'lab3_tag'  => "Démographie",
  'lab3_desc' => "Laboratoire d'Études et Recherches Démographiques. Dynamiques de population, migrations, transitions démographiques et planification territoriale au Maghreb.",
  'lab3_pubs' => "27 publications · 2024–2026",

  'ev_tag'   => "Agenda",
  'ev_title' => "Événements à venir",
  'ev_all'   => "Voir l'agenda complet →",
  'ev1_month'=>"Mai", 'ev1_type'=>"Forum GNI", 'ev1_title'=>"Forum GNI INSEA 2026 — 60+ recruteurs", 'ev1_meta'=>"📍 Campus INSEA, Rabat · 9h–17h",
  'ev2_month'=>"Jun", 'ev2_type'=>"Conférence", 'ev2_title'=>"Intelligence Artificielle et statistiques publiques : enjeux et opportunités", 'ev2_meta'=>"📍 Salle de Conférences · 14h–17h",
  'ev3_month'=>"Jun", 'ev3_type'=>"Portes Ouvertes", 'ev3_title'=>"Journée Portes Ouvertes — Découvrez l'INSEA et ses formations", 'ev3_meta'=>"📍 Campus INSEA, Rabat · 9h–13h",
  'ev4_month'=>"Jun", 'ev4_type'=>"Cérémonie", 'ev4_title'=>"Remise des diplômes — Promotion 2026", 'ev4_meta'=>"📍 Salle de Conférences · 15h · Sur invitation",

  'temo_tag'   => "Témoignages",
  'temo_title' => "Ce que disent<br>nos alumni",
  't1_text' => "« L'INSEA m'a donné bien plus que des compétences techniques. J'ai appris à penser par les données, à argumenter avec rigueur et à m'adapter à tout contexte professionnel. »",
  't1_name' => "Sara Benali", 't1_role' => "Data Analyst · Banque Centrale (Promo 2022)",
  't2_text' => "« La qualité des professeurs et la rigueur du programme m'ont préparé à un poste international dès la sortie. Je dois ma carrière à l'INSEA. »",
  't2_name' => "Youssef El Amrani", 't2_role' => "Actuaire · AXA France (Promo 2019)",
  't3_text' => "« Intégrer l'INSEA, c'est rejoindre une famille. Le réseau alumni est extraordinaire — partout où je vais, je retrouve d'anciens camarades prêts à s'entraider. »",
  't3_name' => "Mint Ahmed", 't3_role' => "Économiste · Banque Mondiale (Promo 2020)",

  'car_tag'   => "Carrières &amp; Développement",
  'car_title' => "Vos diplômes,<br>votre tremplin",
  'car_sub'   => "Nos diplômés sont recrutés par les plus grandes institutions du Maroc et à l'international, dès la fin de leurs études.",
  'car_recent'=> "Offres récentes",
  'job1_title'=>"Analyste Risques Quantitatifs", 'job1_company'=>"Banque Populaire · Casablanca", 'job1_type'=>"CDI",
  'job2_title'=>"Data Scientist – Secteur Public", 'job2_company'=>"HCP · Rabat", 'job2_type'=>"Fonctionnaire",
  'job3_title'=>"Économiste Junior", 'job3_company'=>"IDinsight · Dakar / Remote", 'job3_type'=>"CDD",
  'job4_title'=>"Stage – Machine Learning Engineer", 'job4_company'=>"OCP Group · Casablanca", 'job4_type'=>"Stage PFE",
  'taux_label'=> "Taux d'insertion professionnelle",
  'taux_sub'  => "dans les 6 mois suivant le diplôme — Enquête Alumni 2025",
  'deb_label' => "Débouchés par secteur",
  'dest1_sector'=>"Finance &amp; Banque", 'dest2_sector'=>"Secteur Public", 'dest3_sector'=>"Conseil &amp; Tech", 'dest4_sector'=>"International",
  'dest_of'   => "des diplômés",

  'foot_desc' => "Institut National de Statistique et d'Économie Appliquée. Excellence académique et innovation au service du Maroc.",
  'foot_nav_h'=> "Navigation",
  'foot_nav_accueil'=>"Accueil", 'foot_nav_formations'=>"Formations", 'foot_nav_recherche'=>"Recherche", 'foot_nav_admissions'=>"Admissions", 'foot_nav_vie'=>"Vie étudiante",
  'foot_res_h'=> "Ressources",
  'foot_res_biblio'=>"Bibliothèque", 'foot_res_pub'=>"Publications", 'foot_res_elearn'=>"E-learning", 'foot_res_stages'=>"Offres de stage", 'foot_res_contact'=>"Contact",
  'foot_news_h'=> "Newsletter",
  'foot_news_desc'=> "Recevez nos actualités et événements directement dans votre boîte mail.",
  'foot_news_placeholder'=> "Votre adresse email",
  'foot_copy' => "© 2026 INSEA — Tous droits réservés · Rabat, Maroc",
],

/*  ARABE  */
'ar' => [
  'page_title'        => "المعهد الوطني للإحصاء والاقتصاد التطبيقي",
  'login'             => "تسجيل الدخول",
  'search'            => "بحث",
  'search_placeholder'=> "ابحث…",
  'theme_toggle'      => "تبديل الوضع",
  'menu'              => "القائمة",

  'logo_l1'           => "المعهد الوطني<br>للإحصاء",
  'logo_l2'           => "والاقتصاد التطبيقي",

  'nav_formations'    => "التكوينات",
  'nav_admissions'    => "الولوج",
  'nav_vie'           => "الحياة الطلابية",
  'nav_carrieres'     => "المسار المهني",
  'nav_recherche'     => "البحث العلمي",
  'nav_actualites'    => "الأخبار",

  'dd_cycle'          => "سلك المهندس",
  'dd_masters'        => "الماجستير",
  'dd_doctorat'       => "الدكتوراه",
  'dd_form_continue'  => "التكوين المستمر",
  'dd_candidature'    => "الترشّح",
  'dd_concours'       => "المباراة",
  'dd_internationaux' => "الطلبة الدوليون",
  'dd_faq'            => "الأسئلة الشائعة",
  'dd_associations'   => "الجمعيات",
  'dd_clubs'          => "الأندية",
  'dd_logement'       => "السكن",
  'dd_evenements'     => "الفعاليات",
  'dd_stages'         => "التداريب والتشغيل",
  'dd_emplois'        => "عروض الشغل",
  'dd_alumni'         => "شبكة الخريجين",
  'dd_laboratoires'   => "المختبرات",
  'dd_publications'   => "المنشورات",
  'dd_projets'        => "المشاريع",
  'dd_news'           => "آخر الأخبار",
  'dd_agenda'         => "الأجندة",

  'hero_title'        => "نَصنع المستقبل<br>بالمعرفة",
  'hero_sub'          => "تكوين متميّز في الإحصاء والاقتصاد التطبيقي في خدمة تنمية المغرب.",
  'hero_cta1'         => "ترشّح الآن ←",
  'hero_cta2'         => "اكتشف التكوينات",

  'partners_label'    => "شركاؤنا والمؤسسات",

  'news_tag'          => "الأخبار",
  'news_title'        => "آخر أخبار<br>المعهد",
  'news_all'          => "كل الأخبار ←",
  'news_feat_cat'     => "في الواجهة",
  'news_feat_title'   => "المعهد يحتفل بمرور 58 سنة من التميّز في خدمة التنمية الإحصائية بالمغرب",
  'news_feat_meta'    => "12 ماي 2026 · 5 دقائق قراءة",
  'news1_cat'         => "شراكة",
  'news1_title'       => "توقيع اتفاقية تعاون مع جامعة لافال (كندا)",
  'news1_date'        => "6 ماي 2026",
  'news1_excerpt'     => "برنامج جديد للتبادل الأكاديمي يفتح آفاقاً جديدة لطلبتنا في سلك الماجستير.",
  'news2_cat'         => "بحث علمي",
  'news2_title'       => "نشر: البيانات الضخمة والسياسات العمومية — منهجيات جديدة مطبّقة على المغرب",
  'news2_date'        => "2 ماي 2026",
  'news2_excerpt'     => "ينشر فريق مختبر LAREMAF دراسة رائدة في مجلة Journal of Applied Econometrics.",
  'news3_cat'         => "فعالية",
  'news3_title'       => "ملتقى التشغيل بالمعهد 2026: أكثر من 60 مشغّلاً يوم 28 ماي",
  'news3_date'        => "28 أبريل 2026",
  'news3_excerpt'     => "التقِ بكبرى المشغّلين في مجالات المالية والاستشارة والإدارة العمومية والقطاع الرقمي.",

  'form_eyebrow'      => "شُعَبنا",
  'form_title'        => "ستّ مسارات نحو <em>التميّز</em>",
  'form_sub'          => "انقر لاستكشاف كل شعبة هندسية.",

  'p1_tag'   => "هندسة البيانات والبرمجيات",
  'p1_title' => "هندسة البيانات والبرمجيات",
  'p1_coord' => "الأستاذة كوثر الهري",
  'p1_desc'  => "تكوين متعدد التخصصات يجمع بين هندسة البيانات وهندسة البرمجيات: البنية المعلوماتية، البيانات الضخمة، DevOps، الذكاء الاصطناعي والحوسبة السحابية.",
  'p1_s1'=>"البيانات الضخمة", 'p1_s2'=>"التعلّم الآلي", 'p1_s3'=>"DevOps", 'p1_s4'=>"الحوسبة السحابية",
  'p1_link'  => "البطاقة الكاملة ←",

  'p2_tag'   => "علم البيانات",
  'p2_title' => "علم البيانات",
  'p2_coord' => "الأستاذ عماد بنلعلام",
  'p2_desc'  => "الذكاء الاصطناعي، التعلّم العميق، التحليل التنبّئي، تصوير البيانات والأنظمة الذكية.",
  'p2_s1'=>"التعلّم العميق", 'p2_s2'=>"البيانات الضخمة", 'p2_s3'=>"تصوير البيانات",
  'p2_link'  => "البطاقة الكاملة ←",

  'p3_tag'   => "علم الاكتواريا",
  'p3_title' => "علم الاكتواريا والمالية",
  'p3_desc'  => "تدبير المخاطر، المالية الكمية، التأمين والنمذجة الاكتوارية.",
  'p3_s1'=>"المالية", 'p3_s2'=>"تدبير المخاطر", 'p3_s3'=>"الاكتواريا",
  'p3_link'  => "البطاقة الكاملة ←",

  'p4_tag'   => "الإحصاء الحيوي",
  'p4_title' => "الإحصاء الحيوي والبيانات الضخمة",
  'p4_desc'  => "التحليل الطبي الحيوي، الديموغرافيا، الصحة العمومية وذكاء البيانات.",
  'p4_s1'=>"الصحة", 'p4_s2'=>"الإحصاء", 'p4_s3'=>"ML",
  'p4_link'  => "اعرف المزيد ←",

  'p5_tag'   => "الاقتصاد",
  'p5_title' => "الاقتصاد والإحصاء",
  'p5_desc'  => "الاقتصاد القياسي، التنبؤات الاقتصادية، المالية وتحليل السياسات العمومية.",
  'p5_s1'=>"الاقتصاد القياسي", 'p5_s2'=>"المالية", 'p5_s3'=>"التنقيب في البيانات",
  'p5_link'  => "اعرف المزيد ←",

  'p6_tag'   => "البحث العملياتي",
  'p6_title' => "علوم القرار",
  'p6_desc'  => "الاستمثال، اللوجستيك، النمذجة الرياضية ودعم اتخاذ القرار.",
  'p6_s1'=>"الاستمثال", 'p6_s2'=>"الخوارزميات", 'p6_s3'=>"المحاكاة",
  'p6_link'  => "اعرف المزيد ←",

  'adm_tag'   => "الولوج 2026–2027",
  'adm_title' => "التحق بالمعهد،<br>وابنِ مستقبلك",
  'adm_sub'   => "باب الترشيح برسم السنة الجامعية 2026–2027 مفتوح. مباراة وطنية لولوج سلك المهندس وولوج مباشر لسلك الماجستير.",
  'adm_cta1'  => "إيداع ترشيحي ←",
  'adm_cta2'  => "دليل الولوج",
  'adm_deadline_label' => "آخر أجل:",
  'adm_deadline_date'  => "30 يونيو 2026",
  'adm_process' => "مسار الولوج",
  'adm_s1_t' => "إنشاء ملفك عبر الإنترنت",
  'adm_s1_d' => "املأ بياناتك الأكاديمية وحمّل وثائقك على منصة الترشيح.",
  'adm_s2_t' => "اجتياز اختبارات الانتقاء",
  'adm_s2_d' => "مباراة كتابية في الرياضيات والإحصاء والثقافة العامة حسب البرنامج المستهدف.",
  'adm_s3_t' => "مقابلة شفوية",
  'adm_s3_d' => "يجتاز المترشحون المقبولون مقابلة أمام لجنة من الأساتذة والمهنيين.",
  'adm_s4_t' => "تأكيد التسجيل",
  'adm_s4_d' => "تُعلن النتائج نهاية يوليوز — التأكيد وأداء رسوم التسجيل عبر الإنترنت.",

  'res_tag'   => "البحث العلمي والأثر",
  'res_title' => "مختبرات في صلب<br>الرهانات المعاصرة",
  'res_all'   => "كل المنشورات ←",
  'lab1_tag'  => "الاقتصاد القياسي",
  'lab1_desc' => "مختبر البحث في الاقتصاد القياسي والاقتصاد الكلي والمالية. تقييم السياسات العمومية والنمذجة الاقتصادية الكلية للمغرب وإفريقيا.",
  'lab1_pubs' => "42 منشوراً · 2024–2026",
  'lab2_tag'  => "علم البيانات",
  'lab2_desc' => "مختبر تحليل البيانات والأنظمة. الذكاء الاصطناعي والمعالجة الآلية للغة والتعلّم الآلي المطبّقة على البيانات الاجتماعية.",
  'lab2_pubs' => "31 منشوراً · 2024–2026",
  'lab3_tag'  => "الديموغرافيا",
  'lab3_desc' => "مختبر الدراسات والأبحاث الديموغرافية. ديناميات السكان والهجرات والتحولات الديموغرافية والتخطيط الترابي بالمغرب الكبير.",
  'lab3_pubs' => "27 منشوراً · 2024–2026",

  'ev_tag'   => "الأجندة",
  'ev_title' => "فعاليات قادمة",
  'ev_all'   => "عرض الأجندة كاملة ←",
  'ev1_month'=>"ماي", 'ev1_type'=>"ملتقى التشغيل", 'ev1_title'=>"ملتقى التشغيل بالمعهد 2026 — أكثر من 60 مشغّلاً", 'ev1_meta'=>"📍 حرم المعهد، الرباط · 9ص–5م",
  'ev2_month'=>"يونيو", 'ev2_type'=>"ندوة", 'ev2_title'=>"الذكاء الاصطناعي والإحصاء العمومي: الرهانات والفرص", 'ev2_meta'=>"📍 مدرج ابن خلدون · 2م–5م",
  'ev3_month'=>"يونيو", 'ev3_type'=>"أبواب مفتوحة", 'ev3_title'=>"يوم الأبواب المفتوحة — اكتشف المعهد وتكويناته", 'ev3_meta'=>"📍 حرم المعهد، الرباط · 9ص–1م",
  'ev4_month'=>"يونيو", 'ev4_type'=>"حفل", 'ev4_title'=>"توزيع الشهادات — فوج 2026", 'ev4_meta'=>"📍 القاعة الكبرى · 3م · بدعوة",

  'temo_tag'   => "شهادات",
  'temo_title' => "ماذا يقول<br>خريجونا",
  't1_text' => "«منحني المعهد أكثر بكثير من المهارات التقنية. تعلّمت أن أفكّر انطلاقاً من البيانات، وأن أُحاجج بدقة، وأن أتكيّف مع أي سياق مهني.»",
  't1_name' => "سارة بنعلي", 't1_role' => "محللة بيانات · البنك المركزي (فوج 2022)",
  't2_text' => "«أعدّتني جودة الأساتذة وصرامة البرنامج لمنصب دولي فور التخرج. أدين بمساري المهني للمعهد.»",
  't2_name' => "يوسف العمراني", 't2_role' => "اكتواري · AXA فرنسا (فوج 2019)",
  't3_text' => "«الالتحاق بالمعهد يعني الانضمام إلى عائلة. شبكة الخريجين استثنائية — أينما حللت أجد زملاء قدامى مستعدين للمساعدة.»",
  't3_name' => "نواكشوط منت أحمد", 't3_role' => "اقتصادية · البنك الدولي (فوج 2020)",

  'car_tag'   => "المسار المهني والتطوير",
  'car_title' => "شهاداتك،<br>منصة انطلاقك",
  'car_sub'   => "يُوظَّف خريجونا في كبرى المؤسسات بالمغرب وعلى الصعيد الدولي فور إتمام دراستهم.",
  'car_recent'=> "عروض حديثة",
  'job1_title'=>"محلل المخاطر الكمية", 'job1_company'=>"البنك الشعبي · الدار البيضاء", 'job1_type'=>"عقد دائم",
  'job2_title'=>"عالم بيانات – القطاع العام", 'job2_company'=>"المندوبية السامية للتخطيط · الرباط", 'job2_type'=>"موظف عمومي",
  'job3_title'=>"اقتصادي مبتدئ", 'job3_company'=>"IDinsight · داكار / عن بُعد", 'job3_type'=>"عقد محدد المدة",
  'job4_title'=>"تدريب – مهندس تعلّم آلي", 'job4_company'=>"مجموعة OCP · الدار البيضاء", 'job4_type'=>"تدريب نهاية الدراسة",
  'taux_label'=> "نسبة الاندماج المهني",
  'taux_sub'  => "خلال 6 أشهر بعد التخرج — استطلاع الخريجين 2025",
  'deb_label' => "الآفاق حسب القطاع",
  'dest1_sector'=>"المالية والأبناك", 'dest2_sector'=>"القطاع العام", 'dest3_sector'=>"الاستشارة والتكنولوجيا", 'dest4_sector'=>"الدولي",
  'dest_of'   => "من الخريجين",

  'foot_desc' => "المعهد الوطني للإحصاء والاقتصاد التطبيقي. التميّز الأكاديمي والابتكار في خدمة المغرب.",
  'foot_nav_h'=> "التصفّح",
  'foot_nav_accueil'=>"الرئيسية", 'foot_nav_formations'=>"التكوينات", 'foot_nav_recherche'=>"البحث العلمي", 'foot_nav_admissions'=>"الولوج", 'foot_nav_vie'=>"الحياة الطلابية",
  'foot_res_h'=> "الموارد",
  'foot_res_biblio'=>"المكتبة", 'foot_res_pub'=>"المنشورات", 'foot_res_elearn'=>"التعلّم الإلكتروني", 'foot_res_stages'=>"عروض التداريب", 'foot_res_contact'=>"اتصل بنا",
  'foot_news_h'=> "النشرة الإخبارية",
  'foot_news_desc'=> "تصلك أخبارنا وفعالياتنا مباشرة على بريدك الإلكتروني.",
  'foot_news_placeholder'=> "عنوان بريدك الإلكتروني",
  'foot_copy' => "© 2026 المعهد الوطني للإحصاء والاقتصاد التطبيقي — جميع الحقوق محفوظة · الرباط، المغرب",
],
];

$t = $T[$lang];
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>" dir="<?= $dir ?>" data-theme="light">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $t['page_title'] ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap" rel="stylesheet" />
  <!-- Police arabe -->
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="styles/base.css" >
  <link rel="stylesheet" href="styles/navbar.css" />
  <link rel="stylesheet" href="styles/marquee.css" />
  <link rel="stylesheet" href="styles/sections.css" />
  <link rel="stylesheet" href="styles/footer.css" />
  <link rel="stylesheet" href="styles/Cards.css" />
  <style>
    body { margin: 0; }
    main { margin-top: 0 !important; padding-top: 0 !important; }
    main > section.page-hero {
      max-width: none;
      width: 100%;
      margin: 0;
    }
    .util-bar { margin-bottom: 0 !important; }
    .main-nav { margin-bottom: 0 !important; }

    /* --- Sélecteur de langue (barre du haut) --- */
    .util-lang { display:flex; gap:4px; align-items:center; }
    .util-lang a { text-decoration:none; font-weight:600; font-size:12px; padding:2px 9px; border-radius:6px; opacity:.65; color:inherit; transition:opacity .2s; }
    .util-lang a:hover { opacity:1; }
    .util-lang a.active { background:var(--logo-accent,#0a7d4d); color:#fff; opacity:1; }

    /* --- Arabe / Droite-à-gauche --- */
    html[lang="ar"] body,
    html[lang="ar"] input,
    html[lang="ar"] button,
    html[lang="ar"] textarea { font-family: 'Cairo','DM Sans',sans-serif; }
    /* éviter que l'espacement des lettres coupe la liaison des lettres arabes */
    html[dir="rtl"] body, html[dir="rtl"] body * { letter-spacing: normal !important; }
    
  </style>
</head>
<body>

<!-- UTIL BAR -->
<div class="util-bar">
  <div class="util-inner">
    <ul class="util-links">
      <li><a href="../Connexion/index.php"><?= $t['login'] ?></a></li>
      <li class="util-lang">
        <a href="?lang=fr" class="<?= $lang==='fr' ? 'active' : '' ?>">FR</a>
        <a href="?lang=ar" class="<?= $lang==='ar' ? 'active' : '' ?>">ع</a>
      </li>
      <li class="util-search">
        <button class="search-trigger" id="searchTrigger"><?= $t['search'] ?> <svg viewBox="0 0 16 16" fill="none"><circle cx="6.5" cy="6.5" r="4.5" stroke="currentColor" stroke-width="1.6"/><path d="M10 10l3.5 3.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg></button>
        <div class="search-expanded" id="searchExpanded">
          <input type="text" id="searchInput" placeholder="<?= $t['search_placeholder'] ?>" autocomplete="off" />
          <button type="button"><svg viewBox="0 0 16 16" fill="none"><circle cx="6.5" cy="6.5" r="4.5" stroke="currentColor" stroke-width="1.6"/><path d="M10 10l3.5 3.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg></button>
        </div>
      </li>
    </ul>
  </div>
</div>

<!-- MAIN NAV -->
<nav class="main-nav">
  <div class="nav-inner">
    <a class="nav-logo" href="home.php">
      <img src="images/LOGO_INSEA.png" alt="INSEA Logo" class="logo-emblem" />
      <div class="logo-text">
        <span class="logo-school"><?= $t['logo_l1'] ?></span>
        <span class="logo-faculty"><?= $t['logo_l2'] ?></span>
      </div>
    </a>
    <ul class="nav-items" id="navItems">

      <li class="nav-item has-mega">
        <a class="nav-link" href="#formations">
          <span class="word"><?= $t['nav_formations'] ?></span>
          <svg class="chevron" viewBox="0 0 10 6" fill="none"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <div class="nav-dropdown">
          <a href="formations/cycle.html"><?= $t['dd_cycle'] ?></a>
          <a href="formations/masters.html"><?= $t['dd_masters'] ?></a>
          <a href="formations/doctorat.html"><?= $t['dd_doctorat'] ?></a>
          <a href="formations/formation-continue.html"><?= $t['dd_form_continue'] ?></a>
        </div>
      </li>

      <li class="nav-item has-mega">
        <a class="nav-link" href="#admissions">
          <span class="word"><?= $t['nav_admissions'] ?></span>
          <svg class="chevron" viewBox="0 0 10 6" fill="none"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <div class="nav-dropdown">
          <a href="admissions/candidature.html"><?= $t['dd_candidature'] ?></a>
          <a href="admissions/concours.html"><?= $t['dd_concours'] ?></a>
          <a href="admissions/internationaux.html"><?= $t['dd_internationaux'] ?></a>
          <a href="admissions/faq.html"><?= $t['dd_faq'] ?></a>
        </div>
      </li>

      <li class="nav-item has-mega">
        <a class="nav-link" href="#vie">
          <span class="word"><?= $t['nav_vie'] ?></span>
          <svg class="chevron" viewBox="0 0 10 6" fill="none"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <div class="nav-dropdown">
          <a href="vie-etudiante/associations.html"><?= $t['dd_associations'] ?></a>
          <a href="vie-etudiante/clubs.html"><?= $t['dd_clubs'] ?></a>
          <a href="vie-etudiante/logement.html"><?= $t['dd_logement'] ?></a>
          <a href="vie-etudiante/evenements.html"><?= $t['dd_evenements'] ?></a>
        </div>
      </li>

      <li class="nav-item has-mega">
        <a class="nav-link" href="#carrieres">
          <span class="word"><?= $t['nav_carrieres'] ?></span>
          <svg class="chevron" viewBox="0 0 10 6" fill="none"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <div class="nav-dropdown">
          <a href="carriere/stages.html"><?= $t['dd_stages'] ?></a>
          <a href="carriere/emplois.html"><?= $t['dd_emplois'] ?></a>
          <a href="carriere/alumni.html"><?= $t['dd_alumni'] ?></a>
        </div>
      </li>

      <li class="nav-item has-mega">
        <a class="nav-link" href="#recherche">
          <span class="word"><?= $t['nav_recherche'] ?></span>
          <svg class="chevron" viewBox="0 0 10 6" fill="none"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <div class="nav-dropdown">
          <a href="recherche/laboratoires.html"><?= $t['dd_laboratoires'] ?></a>
          <a href="recherche/publications.html"><?= $t['dd_publications'] ?></a>
          <a href="recherche/projets.html"><?= $t['dd_projets'] ?></a>
        </div>
      </li>

      <li class="nav-item has-mega">
        <a class="nav-link" href="#actualites">
          <span class="word"><?= $t['nav_actualites'] ?></span>
          <svg class="chevron" viewBox="0 0 10 6" fill="none"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <div class="nav-dropdown">
          <a href="actualites/news.html"><?= $t['dd_news'] ?></a>
          <a href="actualites/agenda.html"><?= $t['dd_agenda'] ?></a>
        </div>
      </li>

    </ul>
    <button class="theme-toggle" id="themeToggle" title="<?= $t['theme_toggle'] ?>">
      <svg id="themeIcon" viewBox="0 0 20 20" fill="none"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" fill="currentColor"/></svg>
    </button>
    <button class="hamburger" id="hamburger" aria-label="<?= $t['menu'] ?>"><span></span><span></span><span></span></button>
  </div>
</nav>

<main>
  <!-- HERO -->
  <section class="page-hero" style="
    position:relative;
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    padding:0;
    overflow:hidden;
    background:none;
    margin-top:0 !important;
  ">
    <!-- Background image -->
    <div style="
      position:absolute;inset:0;
      background-image:url('images/INSEEA-447a1620.jpg');
      background-size:cover;
      background-position:center;
      z-index:0;
    "></div>
    <!-- Dark overlay -->
    <div style="
      position:absolute;inset:0;
      background:rgba(10,12,20,0.58);
      z-index:1;
    "></div>
    <!-- Content -->
    <div style="position:relative;z-index:2;padding:40px 24px;max-width:820px;">
      <h1 style="
        color:#fff;
        font-size:clamp(2.2rem,5vw,4rem);
        font-weight:800;
        line-height:1.1;
        margin-bottom:20px;
        text-shadow:0 2px 24px rgba(0,0,0,0.5);
      "><?= $t['hero_title'] ?></h1>
      <p style="
        color:rgba(255,255,255,0.85);
        font-size:clamp(1rem,2vw,1.2rem);
        max-width:580px;
        margin:0 auto 36px;
        line-height:1.6;
        text-shadow:0 1px 8px rgba(0,0,0,0.4);
      "><?= $t['hero_sub'] ?></p>
      <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
        <a href="admissions/candidature.html" class="btn-primary"><?= $t['hero_cta1'] ?></a>
        <a href="formations/cycle.html" class="btn-ghost" style="color:#fff;border-color:rgba(255,255,255,0.5);"><?= $t['hero_cta2'] ?></a>
      </div>
    </div>
  </section>

  <!-- MARQUEE -->
  <section class="marquee-section">
    <p class="section-label"><?= $t['partners_label'] ?></p>
    <div class="marquee-wrapper">
      <div class="marquee">
        <div class="marquee__group">
          <svg><use href="#logo-hcp" /></svg>
          <svg><use href="#logo-laval" /></svg>
          <svg><use href="#logo-ucad" /></svg>
          <svg><use href="#logo-idinsight" /></svg>
          <svg><use href="#logo-ensae" /></svg>
          <svg><use href="#logo-bp" /></svg>
          <svg><use href="#logo-ensai" /></svg>
        </div>
        <div aria-hidden="true" class="marquee__group">
          <svg><use href="#logo-hcp" /></svg>
          <svg><use href="#logo-laval" /></svg>
          <svg><use href="#logo-ucad" /></svg>
          <svg><use href="#logo-idinsight" /></svg>
          <svg><use href="#logo-ensae" /></svg>
          <svg><use href="#logo-bp" /></svg>
          <svg><use href="#logo-ensai" /></svg>
        </div>
      </div>
    </div>
  </section>

  <!-- ACTUALITES -->
  <section id="actualites">
    <div class="actualites-section">
      <div class="actualites-header">
        <div><p class="section-tag"><?= $t['news_tag'] ?></p><h2 class="section-title"><?= $t['news_title'] ?></h2></div>
        <a href="actualites/news.html" class="btn-ghost"><?= $t['news_all'] ?></a>
      </div>
      <div class="news-grid">
        <div class="news-featured" data-href="actualites/news.html">
          <div class="news-featured-img"><img src="images/Gemini_Generated_Image_.png" alt="INSEA" /></div>
          <div class="news-featured-body">
            <span class="news-cat"><?= $t['news_feat_cat'] ?></span>
            <h3 class="news-featured-title"><?= $t['news_feat_title'] ?></h3>
            <p class="news-featured-meta"><?= $t['news_feat_meta'] ?></p>
          </div>
        </div>
        <div class="news-side">
          <div class="news-card" data-href="actualites/news.html">
            <span class="news-cat" style="font-size:9px;padding:3px 8px;"><?= $t['news1_cat'] ?></span>
            <p class="news-card-title"><?= $t['news1_title'] ?></p>
            <p class="news-card-meta"><?= $t['news1_date'] ?></p>
            <p class="news-card-excerpt"><?= $t['news1_excerpt'] ?></p>
          </div>
          <div class="news-card" data-href="actualites/news.html">
            <span class="news-cat" style="font-size:9px;padding:3px 8px;"><?= $t['news2_cat'] ?></span>
            <p class="news-card-title"><?= $t['news2_title'] ?></p>
            <p class="news-card-meta"><?= $t['news2_date'] ?></p>
            <p class="news-card-excerpt"><?= $t['news2_excerpt'] ?></p>
          </div>
          <div class="news-card" data-href="actualites/agenda.html">
            <span class="news-cat" style="font-size:9px;padding:3px 8px;"><?= $t['news3_cat'] ?></span>
            <p class="news-card-title"><?= $t['news3_title'] ?></p>
            <p class="news-card-meta"><?= $t['news3_date'] ?></p>
            <p class="news-card-excerpt"><?= $t['news3_excerpt'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FORMATIONS -->
  <section id="formations" class="formations-section">
    <div class="sec-header">
      <span class="sec-eyebrow"><?= $t['form_eyebrow'] ?></span>
      <h1 class="sec-title"><?= $t['form_title'] ?></h1>
      <p class="sec-sub"><?= $t['form_sub'] ?></p>
    </div>

    <div class="strip" role="list">

      <!-- 1 · DSE -->
      <div class="panel active" role="listitem" tabindex="0">
        <div class="panel-bg"></div>
        <div class="panel-overlay"></div>
        <div class="panel-slim">
          <span class="slim-label">DSE</span>
          <div class="slim-badge">⚙️</div>
        </div>
        <div class="panel-full">
          <div class="full-top"><div class="full-icon">⚙️</div><span class="full-tag"><?= $t['p1_tag'] ?></span></div>
          <h2 class="full-title"><?= $t['p1_title'] ?></h2>
          <p class="full-coord"><strong><?= $t['p1_coord'] ?></strong></p>
          <p class="full-desc"><?= $t['p1_desc'] ?></p>
          <div class="full-skills">
            <span class="full-skill"><?= $t['p1_s1'] ?></span>
            <span class="full-skill"><?= $t['p1_s2'] ?></span>
            <span class="full-skill"><?= $t['p1_s3'] ?></span>
            <span class="full-skill"><?= $t['p1_s4'] ?></span>
          </div>
          <a class="full-link" href="https://insea.ac.ma/files/DSE_fiche_description_2022.pdf" target="_blank"><?= $t['p1_link'] ?></a>
        </div>
      </div>

      <!-- 2 · DS -->
      <div class="panel" role="listitem" tabindex="0">
        <div class="panel-bg"></div>
        <div class="panel-overlay"></div>
        <div class="panel-slim">
          <span class="slim-label">DS</span>
          <div class="slim-badge">🔬</div>
        </div>
        <div class="panel-full">
          <div class="full-top"><div class="full-icon">🔬</div><span class="full-tag"><?= $t['p2_tag'] ?></span></div>
          <h2 class="full-title"><?= $t['p2_title'] ?></h2>
          <p class="full-coord"><strong><?= $t['p2_coord'] ?></strong></p>
          <p class="full-desc"><?= $t['p2_desc'] ?></p>
          <div class="full-skills">
            <span class="full-skill"><?= $t['p2_s1'] ?></span>
            <span class="full-skill"><?= $t['p2_s2'] ?></span>
            <span class="full-skill"><?= $t['p2_s3'] ?></span>
          </div>
          <a class="full-link" href="https://insea.ac.ma/files/DS_fiche_description_2022.pdf" target="_blank"><?= $t['p2_link'] ?></a>
        </div>
      </div>

      <!-- 3 · AF -->
      <div class="panel" role="listitem" tabindex="0">
        <div class="panel-bg"></div>
        <div class="panel-overlay"></div>
        <div class="panel-slim">
          <span class="slim-label">AF</span>
          <div class="slim-badge">📊</div>
        </div>
        <div class="panel-full">
          <div class="full-top"><div class="full-icon">📊</div><span class="full-tag"><?= $t['p3_tag'] ?></span></div>
          <h2 class="full-title"><?= $t['p3_title'] ?></h2>
          <p class="full-desc"><?= $t['p3_desc'] ?></p>
          <div class="full-skills">
            <span class="full-skill"><?= $t['p3_s1'] ?></span>
            <span class="full-skill"><?= $t['p3_s2'] ?></span>
            <span class="full-skill"><?= $t['p3_s3'] ?></span>
          </div>
          <a class="full-link" href="https://insea.ac.ma/files/AF_fiche_description_2022.pdf" target="_blank"><?= $t['p3_link'] ?></a>
        </div>
      </div>

      <!-- 4 · BSD -->
      <div class="panel" role="listitem" tabindex="0">
        <div class="panel-bg"></div>
        <div class="panel-overlay"></div>
        <div class="panel-slim">
          <span class="slim-label">BSD</span>
          <div class="slim-badge">🧬</div>
        </div>
        <div class="panel-full">
          <div class="full-top"><div class="full-icon">🧬</div><span class="full-tag"><?= $t['p4_tag'] ?></span></div>
          <h2 class="full-title"><?= $t['p4_title'] ?></h2>
          <p class="full-desc"><?= $t['p4_desc'] ?></p>
          <div class="full-skills">
            <span class="full-skill"><?= $t['p4_s1'] ?></span>
            <span class="full-skill"><?= $t['p4_s2'] ?></span>
            <span class="full-skill"><?= $t['p4_s3'] ?></span>
          </div>
          <a class="full-link" href="formations/cycle.html"><?= $t['p4_link'] ?></a>
        </div>
      </div>

      <!-- 5 · EASBD -->
      <div class="panel" role="listitem" tabindex="0">
        <div class="panel-bg"></div>
        <div class="panel-overlay"></div>
        <div class="panel-slim">
          <span class="slim-label">EASBD</span>
          <div class="slim-badge">📈</div>
        </div>
        <div class="panel-full">
          <div class="full-top"><div class="full-icon">📈</div><span class="full-tag"><?= $t['p5_tag'] ?></span></div>
          <h2 class="full-title"><?= $t['p5_title'] ?></h2>
          <p class="full-desc"><?= $t['p5_desc'] ?></p>
          <div class="full-skills">
            <span class="full-skill"><?= $t['p5_s1'] ?></span>
            <span class="full-skill"><?= $t['p5_s2'] ?></span>
            <span class="full-skill"><?= $t['p5_s3'] ?></span>
          </div>
          <a class="full-link" href="formations/cycle.html"><?= $t['p5_link'] ?></a>
        </div>
      </div>

      <!-- 6 · SDRO -->
      <div class="panel" role="listitem" tabindex="0">
        <div class="panel-bg"></div>
        <div class="panel-overlay"></div>
        <div class="panel-slim">
          <span class="slim-label">SDRO</span>
          <div class="slim-badge">🧮</div>
        </div>
        <div class="panel-full">
          <div class="full-top"><div class="full-icon">🧮</div><span class="full-tag"><?= $t['p6_tag'] ?></span></div>
          <h2 class="full-title"><?= $t['p6_title'] ?></h2>
          <p class="full-desc"><?= $t['p6_desc'] ?></p>
          <div class="full-skills">
            <span class="full-skill"><?= $t['p6_s1'] ?></span>
            <span class="full-skill"><?= $t['p6_s2'] ?></span>
            <span class="full-skill"><?= $t['p6_s3'] ?></span>
          </div>
          <a class="full-link" href="formations/cycle.html"><?= $t['p6_link'] ?></a>
        </div>
      </div>

    </div>
  </section>

  <!-- ADMISSIONS -->
  <section id="admissions" class="admissions-section">
    <div class="admissions-inner">
      <div class="admissions-content">
        <p class="section-tag"><?= $t['adm_tag'] ?></p>
        <h2 class="admissions-title"><?= $t['adm_title'] ?></h2>
        <p class="admissions-sub"><?= $t['adm_sub'] ?></p>
        <div class="admissions-btns">
          <a href="admissions/candidature.html" class="btn-white"><?= $t['adm_cta1'] ?></a>
          <a href="admissions/concours.html" class="btn-outline-white"><?= $t['adm_cta2'] ?></a>
        </div>
        <div style="margin-top:28px;padding:16px 20px;background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);border-radius:8px;display:inline-flex;align-items:center;gap:12px;">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="rgba(168,230,192,0.9)" stroke-width="1.8" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
          <span style="color:rgba(255,255,255,0.85);font-size:13.5px;font-weight:500;"><?= $t['adm_deadline_label'] ?> <strong style="color:#a8e6c0;"><?= $t['adm_deadline_date'] ?></strong></span>
        </div>
      </div>
      <div class="admissions-steps">
        <h3 style="font-size:12px;font-weight:700;color:rgba(255,255,255,0.5);text-transform:uppercase;letter-spacing:0.1em;margin-bottom:20px;"><?= $t['adm_process'] ?></h3>
        <div class="adm-step"><div class="adm-step-num">01</div><div><p class="adm-step-title"><?= $t['adm_s1_t'] ?></p><p class="adm-step-desc"><?= $t['adm_s1_d'] ?></p></div></div>
        <div class="adm-step"><div class="adm-step-num">02</div><div><p class="adm-step-title"><?= $t['adm_s2_t'] ?></p><p class="adm-step-desc"><?= $t['adm_s2_d'] ?></p></div></div>
        <div class="adm-step"><div class="adm-step-num">03</div><div><p class="adm-step-title"><?= $t['adm_s3_t'] ?></p><p class="adm-step-desc"><?= $t['adm_s3_d'] ?></p></div></div>
        <div class="adm-step"><div class="adm-step-num">04</div><div><p class="adm-step-title"><?= $t['adm_s4_t'] ?></p><p class="adm-step-desc"><?= $t['adm_s4_d'] ?></p></div></div>
      </div>
    </div>
  </section>

  <!-- RECHERCHE -->
  <section id="recherche" class="recherche-section">
    <div class="recherche-inner">
      <div class="recherche-header">
        <div><p class="section-tag"><?= $t['res_tag'] ?></p><h2 class="section-title"><?= $t['res_title'] ?></h2></div>
        <a href="recherche/publications.html" class="btn-ghost"><?= $t['res_all'] ?></a>
      </div>
      <div class="recherche-grid">
        <div class="lab-card" onclick="location.href='recherche/laboratoires.html'">
          <span class="lab-tag"><?= $t['lab1_tag'] ?></span><h3 class="lab-title">LAREMAF</h3>
          <p class="lab-desc"><?= $t['lab1_desc'] ?></p>
          <div class="lab-footer"><span class="lab-pubs"><?= $t['lab1_pubs'] ?></span><div class="lab-arrow"><svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
        </div>
        <div class="lab-card" onclick="location.href='recherche/laboratoires.html'">
          <span class="lab-tag"><?= $t['lab2_tag'] ?></span><h3 class="lab-title">LADS</h3>
          <p class="lab-desc"><?= $t['lab2_desc'] ?></p>
          <div class="lab-footer"><span class="lab-pubs"><?= $t['lab2_pubs'] ?></span><div class="lab-arrow"><svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
        </div>
        <div class="lab-card" onclick="location.href='recherche/laboratoires.html'">
          <span class="lab-tag"><?= $t['lab3_tag'] ?></span><h3 class="lab-title">LERD</h3>
          <p class="lab-desc"><?= $t['lab3_desc'] ?></p>
          <div class="lab-footer"><span class="lab-pubs"><?= $t['lab3_pubs'] ?></span><div class="lab-arrow"><svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- EVENEMENTS -->
  <div class="evenements-section">
    <div class="evenements-header">
      <div><p class="section-tag"><?= $t['ev_tag'] ?></p><h2 class="section-title"><?= $t['ev_title'] ?></h2></div>
      <a href="actualites/agenda.html" class="btn-ghost"><?= $t['ev_all'] ?></a>
    </div>
    <div class="events-list">
      <div class="event-card" onclick="location.href='carrieres/stages.html'">
        <div class="event-date"><span class="event-day">28</span><span class="event-month"><?= $t['ev1_month'] ?></span></div>
        <div class="event-body"><p class="event-type"><?= $t['ev1_type'] ?></p><p class="event-title"><?= $t['ev1_title'] ?></p><p class="event-meta"><?= $t['ev1_meta'] ?></p></div>
      </div>
      <div class="event-card" onclick="location.href='actualites/agenda.html'">
        <div class="event-date"><span class="event-day">05</span><span class="event-month"><?= $t['ev2_month'] ?></span></div>
        <div class="event-body"><p class="event-type"><?= $t['ev2_type'] ?></p><p class="event-title"><?= $t['ev2_title'] ?></p><p class="event-meta"><?= $t['ev2_meta'] ?></p></div>
      </div>
      <div class="event-card" onclick="location.href='actualites/agenda.html'">
        <div class="event-date"><span class="event-day">12</span><span class="event-month"><?= $t['ev3_month'] ?></span></div>
        <div class="event-body"><p class="event-type"><?= $t['ev3_type'] ?></p><p class="event-title"><?= $t['ev3_title'] ?></p><p class="event-meta"><?= $t['ev3_meta'] ?></p></div>
      </div>
      <div class="event-card" onclick="location.href='actualites/agenda.html'">
        <div class="event-date"><span class="event-day">20</span><span class="event-month"><?= $t['ev4_month'] ?></span></div>
        <div class="event-body"><p class="event-type"><?= $t['ev4_type'] ?></p><p class="event-title"><?= $t['ev4_title'] ?></p><p class="event-meta"><?= $t['ev4_meta'] ?></p></div>
      </div>
    </div>
  </div>

  <!-- TEMOIGNAGES -->
  <section class="temoignages-section">
    <div class="temoignages-inner">
      <div class="temoignages-header"><p class="section-tag"><?= $t['temo_tag'] ?></p><h2 class="section-title"><?= $t['temo_title'] ?></h2></div>
      <div class="temoignages-grid">
        <div class="temoignage-card">
          <p class="temoignage-text"><?= $t['t1_text'] ?></p>
          <div class="temoignage-author"><div class="temoignage-avatar">S</div><div><p class="temoignage-name"><?= $t['t1_name'] ?></p><p class="temoignage-role"><?= $t['t1_role'] ?></p></div></div>
        </div>
        <div class="temoignage-card">
          <p class="temoignage-text"><?= $t['t2_text'] ?></p>
          <div class="temoignage-author"><div class="temoignage-avatar">Y</div><div><p class="temoignage-name"><?= $t['t2_name'] ?></p><p class="temoignage-role"><?= $t['t2_role'] ?></p></div></div>
        </div>
        <div class="temoignage-card">
          <p class="temoignage-text"><?= $t['t3_text'] ?></p>
          <div class="temoignage-author"><div class="temoignage-avatar"><img src="images/Nouwakshout.jpg" alt="Alumni" /></div><div><p class="temoignage-name"><?= $t['t3_name'] ?></p><p class="temoignage-role"><?= $t['t3_role'] ?></p></div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- CARRIERES -->
  <section id="carrieres">
    <div class="carrieres-section">
      <div class="carrieres-layout">
        <div>
          <p class="section-tag"><?= $t['car_tag'] ?></p>
          <h2 class="section-title"><?= $t['car_title'] ?></h2>
          <p class="section-sub" style="margin-bottom:24px;"><?= $t['car_sub'] ?></p>
          <h4 style="font-size:12px;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:var(--logo-accent);margin-bottom:14px;"><?= $t['car_recent'] ?></h4>
          <div class="emploi-list">
            <div class="emploi-card" onclick="location.href='carrieres/emplois.html'"><div class="emploi-logo">🏦</div><div class="emploi-info"><p class="emploi-title"><?= $t['job1_title'] ?></p><p class="emploi-company"><?= $t['job1_company'] ?></p></div><span class="emploi-type"><?= $t['job1_type'] ?></span></div>
            <div class="emploi-card" onclick="location.href='carrieres/emplois.html'"><div class="emploi-logo">📊</div><div class="emploi-info"><p class="emploi-title"><?= $t['job2_title'] ?></p><p class="emploi-company"><?= $t['job2_company'] ?></p></div><span class="emploi-type"><?= $t['job2_type'] ?></span></div>
            <div class="emploi-card" onclick="location.href='carrieres/emplois.html'"><div class="emploi-logo">🌍</div><div class="emploi-info"><p class="emploi-title"><?= $t['job3_title'] ?></p><p class="emploi-company"><?= $t['job3_company'] ?></p></div><span class="emploi-type"><?= $t['job3_type'] ?></span></div>
            <div class="emploi-card" onclick="location.href='carrieres/stages.html'"><div class="emploi-logo">💻</div><div class="emploi-info"><p class="emploi-title"><?= $t['job4_title'] ?></p><p class="emploi-company"><?= $t['job4_company'] ?></p></div><span class="emploi-type"><?= $t['job4_type'] ?></span></div>
          </div>
        </div>
        <div>
          <div class="taux-placement">
            <div class="taux-number">94%</div>
            <p class="taux-label"><?= $t['taux_label'] ?></p>
            <p class="taux-sub"><?= $t['taux_sub'] ?></p>
          </div>
          <p style="font-size:12px;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:var(--logo-accent);margin-bottom:14px;"><?= $t['deb_label'] ?></p>
          <div class="destinations-grid">
            <div class="dest-card"><span class="dest-sector"><?= $t['dest1_sector'] ?></span><span class="dest-pct">32%</span><span class="dest-label"><?= $t['dest_of'] ?></span></div>
            <div class="dest-card"><span class="dest-sector"><?= $t['dest2_sector'] ?></span><span class="dest-pct">24%</span><span class="dest-label"><?= $t['dest_of'] ?></span></div>
            <div class="dest-card"><span class="dest-sector"><?= $t['dest3_sector'] ?></span><span class="dest-pct">28%</span><span class="dest-label"><?= $t['dest_of'] ?></span></div>
            <div class="dest-card"><span class="dest-sector"><?= $t['dest4_sector'] ?></span><span class="dest-pct">16%</span><span class="dest-label"><?= $t['dest_of'] ?></span></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- SVG SPRITE -->
<svg style="display:none" aria-hidden="true">
  <defs>
    <symbol id="logo-hcp"      viewBox="0 0 400 130"><image href="images/hcp.png"      width="100%" height="100%" preserveAspectRatio="xMidYMid meet"/></symbol>
    <symbol id="logo-laval"    viewBox="0 0 300 200"><image href="images/laval.png"    width="100%" height="100%" preserveAspectRatio="xMidYMid meet"/></symbol>
    <symbol id="logo-ucad"     viewBox="0 0 300 200"><image href="images/ucad.png"     width="100%" height="100%" preserveAspectRatio="xMidYMid meet"/></symbol>
    <symbol id="logo-idinsight" viewBox="0 0 300 170"><image href="images/idinsight.png" width="100%" height="100%" preserveAspectRatio="xMidYMid meet"/></symbol>
    <symbol id="logo-ensae"    viewBox="0 0 225 225"><image href="images/ensae.png"    width="100%" height="100%" preserveAspectRatio="xMidYMid meet"/></symbol>
    <symbol id="logo-bp"       viewBox="0 0 300 150"><image href="images/bp.jpg"       width="100%" height="100%" preserveAspectRatio="xMidYMid meet"/></symbol>
    <symbol id="logo-ensai"    viewBox="0 0 225 225"><image href="images/ensai.png"    width="100%" height="100%" preserveAspectRatio="xMidYMid meet"/></symbol>
  </defs>
</svg>

<!-- FOOTER -->
<footer class="ultimate-footer" id="footer">
  <div class="footer-glow"></div>
  <div class="footer-container">
    <div class="footer-col footer-brand" data-depth="0.3">
      <img src="images/LOGO_INSEA.png" alt="INSEA Logo" class="footer-logo" />
      <p class="footer-desc"><?= $t['foot_desc'] ?></p>
      <div class="footer-socials">
        <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24"><path d="M4 3a2 2 0 100 4 2 2 0 000-4zm1 5H3v13h2V8zm4 0h-2v13h2v-7c0-2 3-2 3 0v7h2v-8c0-4-5-4-5 0V8z"/></svg></a>
        <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24"><path d="M22 12a10 10 0 10-11.5 9.9v-7h-2v-3h2v-2c0-2 1-3 3-3h2v3h-2c-1 0-1 .5-1 1v1h3l-.5 3h-2.5v7A10 10 0 0022 12"/></svg></a>
        <a href="#" aria-label="X"><svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg></a>
      </div>
    </div>
    <div class="footer-col" data-depth="0.2">
      <h4><?= $t['foot_nav_h'] ?></h4>
      <ul>
        <li><a href="home.php"><?= $t['foot_nav_accueil'] ?></a></li>
        <li><a href="formations/cycle.html"><?= $t['foot_nav_formations'] ?></a></li>
        <li><a href="recherche/laboratoires.html"><?= $t['foot_nav_recherche'] ?></a></li>
        <li><a href="admissions/candidature.html"><?= $t['foot_nav_admissions'] ?></a></li>
        <li><a href="vie-etudiante/associations.html"><?= $t['foot_nav_vie'] ?></a></li>
      </ul>
    </div>
    <div class="footer-col" data-depth="0.2">
      <h4><?= $t['foot_res_h'] ?></h4>
      <ul>
        <li><a href="recherche/laboratoires.html"><?= $t['foot_res_biblio'] ?></a></li>
        <li><a href="recherche/publications.html"><?= $t['foot_res_pub'] ?></a></li>
        <li><a href="formations/formation-continue.html"><?= $t['foot_res_elearn'] ?></a></li>
        <li><a href="carrieres/stages.html"><?= $t['foot_res_stages'] ?></a></li>
        <li><a href="actualites/news.html"><?= $t['foot_res_contact'] ?></a></li>
      </ul>
    </div>
    <div class="footer-col" data-depth="0.4">
      <h4><?= $t['foot_news_h'] ?></h4>
      <p style="font-size:13px;color:rgba(255,255,255,0.55);margin-bottom:12px;line-height:1.5;"><?= $t['foot_news_desc'] ?></p>
      <form class="newsletter-form" id="newsletterForm">
        <input type="email" name="email" placeholder="<?= $t['foot_news_placeholder'] ?>" required />
        <button type="submit"><?= $arrow ?></button>
      </form>
      <p id="newsletterMsg"></p>
      <div class="footer-lang">
        <button class="<?= $lang==='fr' ? 'active' : '' ?>" onclick="location.href='?lang=fr'">FR</button>
        <button class="<?= $lang==='ar' ? 'active' : '' ?>" onclick="location.href='?lang=ar'">ع</button>
      </div>
    </div>
  </div>
  <div class="footer-bottom"><p><?= $t['foot_copy'] ?></p></div>
</footer>

<script src="JS/navbar.js"></script>
<script src="JS/footer.js"></script>
<script src="JS/sections.js"></script>
<script src="JS/Cards.js"></script>

<div class="image-modal" id="imageModal">
  <span class="close-modal">&times;</span>
  <img id="modalImage" src="" alt="">
</div>

</body>
</html>