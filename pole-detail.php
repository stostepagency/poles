<?php
include 'https://etourism.africa/be/functions/main.php';

//Tout//
function get_pole(){
    global $db;
    $req = $db->query("SELECT * FROM poles ORDER BY date DESC");
    $results = array();

    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }
    return $results;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Région de Dakar - Pôle Touristique | Sénégal</title>
    <meta name="description" content="Découvrez la région de Dakar : attractions, plages, culture et patrimoine">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- AOS - Animate On Scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style_pole_detail.css">
</head>
<body>

    <!-- Header -->
    <header class="main-header">
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <a href="index.html" class="logo">
                            <img src="ca.png" alt="logo" style="max-height:75px;">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <nav class="main-nav">
                            <ul>
                                <li><a href="index.html">Accueil</a></li>
                                <li><a href="index.html#main-content">Pôles touristiques</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-3">
                        <div class="header-actions">
                            <button class="dark-mode-toggle" id="darkModeToggle" aria-label="Toggle Dark Mode">
                                <i class="fas fa-moon"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section with Overlay -->
    <section class="hero-detail">
        <div class="hero-overlay"></div>
        <div class="hero-background" style="background-image: url('https://images.unsplash.com/photo-1681225241052-ac67808b0c62?w=1920&auto=format&fit=crop&q=80');">
        </div>
        <div class="hero-content-detail">
            <div class="container">
                <nav aria-label="breadcrumb" data-aos="fade-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="poles.html">Pôles touristiques</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Région de Dakar</li>
                    </ol>
                </nav>
                <h1 class="hero-title" data-aos="fade-up" data-aos-delay="200">Région de Dakar</h1>
                <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="400">Le cœur vibrant du Sénégal</p>
                <div class="hero-stats" data-aos="fade-up" data-aos-delay="600">
                    <div class="stat-item">
                        <i class="fas fa-map-marked-alt"></i>
                        <span class="stat-value">550 km²</span>
                        <span class="stat-label">Superficie</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-users"></i>
                        <span class="stat-value">3.5M</span>
                        <span class="stat-label">Habitants</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-landmark"></i>
                        <span class="stat-value">25+</span>
                        <span class="stat-label">Sites touristiques</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-umbrella-beach"></i>
                        <span class="stat-value">15</span>
                        <span class="stat-label">Plages</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="intro-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="section-title">Découvrez la région de Dakar</h2>
                    <div class="intro-text">
                        <p style="text-align:justify;">Pour parler du pôle  de Dakar, nous nous trouvons obligés de partir de ses origines « la ville de Dakar » qui remonte aux environs du 16ème siècle. <br/>C’est en 1750 que le naturaliste Français Michel ADANSON arrivé à Gorée en 1749, établit le premier croquis du Cap-Vert dans lequel est mentionné le nom de Dakar. L’histoire de Dakar est intimement liée à celle de Gorée  dont la présentation suivra. <br/>Officiellement le 25 Mai 1857 est la date de fondation de la ville de Dakar par le commandant PINET-LAPRADE à qui elle doit son premier plan cadastral réalisé en 1852 ainsi que ses premières installations portuaires inaugurées en 1866. La décision prise en 1902 par les autorités de fixer à Dakar le siège du gouvernement général de l’A.O.F devait accélérer le développement de Dakar avec l’afflux de fonctionnaires, obligeant ainsi les propriétaires des premières concessions à construire et à y commencer à s’y installer. En 2 ans 1902 à 1904, la population de Dakar était passée de 8737 à 18.949 habitants pour atteindre 32.440 habitants dont 1 661 Européens en 1921.</p>
                        
                        <p style="text-align:justify;">Dakar commençait à déborder de son périmètre initial entraînant le déplacement vers l’actuel Médina, des africains occupants traditionnels de certains terrains qui allaient constituer le 1er quartier résidentiel de la ville.<br/>

Depuis, la croissance de Dakar n’avait cessé de s’accélérer, surtout, avec l’attrait exercé par la capitale sur les populations rurales à la recherche d’un meilleur cadre de vie et d’opportunités économiques.C’est cette situation qui donna naissance à de nombreux pôles « d’agglomération ville » que sont : Pikine et Guédiawaye devenus départements au même titre que Dakar et Rufisque avec lesquels ils constituent aujourd’hui la région de Dakar qui doit tout à sa capitale régionale, et capitale du Sénégal. Ville cosmopolite, véritable métropole, les autorités actuelles ne cessent de se battre pour lui redonner son lustre d’antan. 
En effet jusqu’en 1939, Dakar était la seule véritable ville en Afrique noire francophone.<br/>

Constitué de 4 arrondissements et 19 Communes d’arrondissements, il est peuplé de 955.897 habitants soit 42,2% de la population de la région occupant 78,7 km² du territoire régional soit 14, 3% ce qui correspond à une densité de 12.146 habitants au km².<br/>
Cette densité relativement élevée s’explique par les fortes concentrations au niveau de certaines de ses communes d’arrondissement telles :<br/>

▪	« Grand Dakar » avec une population de 62.290 habitants qui n’occupent qu’un (1) km² ;<br/>
▪	« La Médina » avec 129.398 habitants sur 2,42 soit une densité de 53.916 habitants au km² ;<br/>
▪	« Biscuiterie » avec 50.597 habitants sur 1,2 km² soit 42.164 habitants au km².
</p>
                        
                    </div>

                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="intro-image-grid">
                        <div class="grid-item grid-large">
                            <img src="https://images.unsplash.com/photo-1600166898405-da9535204843?w=800&q=80" alt="Dakar" class="img-fluid rounded shadow">
                        </div>
                        <div class="grid-item">
                            <img src="https://images.unsplash.com/photo-1648504735627-6af97e8337a9?w=800&q=80" alt="Culture" class="img-fluid rounded shadow">
                        </div>
                        <div class="grid-item">
                            <img src="https://images.unsplash.com/photo-1681225241052-ac67808b0c62?w=800&q=80" alt="Plage" class="img-fluid rounded shadow">
                        </div>
                    </div><br/>
                    <div class="intro-image-grid">
                        <div class="grid-item">
                            <img src="https://images.unsplash.com/photo-1600166898405-da9535204843?w=800&q=80" alt="Dakar" class="img-fluid rounded shadow">
                        </div>
                        <div class="grid-item">
                            <img src="https://images.unsplash.com/photo-1648504735627-6af97e8337a9?w=800&q=80" alt="Culture" class="img-fluid rounded shadow">
                        </div>
                        <div class="grid-item grid-large">
                            <img src="https://images.unsplash.com/photo-1681225241052-ac67808b0c62?w=800&q=80" alt="Plage" class="img-fluid rounded shadow">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Introduction Section -->
    <section class="intro-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="section-title">Le département n’attire pas que les populations de l‘intérieur du pays, il est le principal centre du tourisme d’affaires et de loisirs.</h2>
                    <div class="intro-text">
                        <p style="text-align:justify;">Si avec 61 réceptifs hôteliers soit 3.434 chambres et 6.490 lits répertoriés, le département concentre 32, 2% de la capacité d’accueil du pays, il faudrait reconnaître qu’il la doit à la ville de Dakar.Il était nécessaire aussi de noter que Dakar n’aurait pas été véritable capitale si elle ne disposait pas de son port et son aéroport international qui, aujourd’hui est transféré à DIASS, en font un grand carrefour commercial facilité par sa position géographique de porte Océane de l’Afrique, Carrefour des grandes voies maritimes et océaniques.</p>
                        
                    </div>

                </div>
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="intro-image-grid">
                        <div class="grid-item grid-large">
                            <img src="https://images.unsplash.com/photo-1600166898405-da9535204843?w=800&q=80" alt="Dakar" class="img-fluid rounded shadow">
                        </div>
                        <div class="grid-item">
                            <img src="https://images.unsplash.com/photo-1648504735627-6af97e8337a9?w=800&q=80" alt="Culture" class="img-fluid rounded shadow">
                        </div>
                        <div class="grid-item">
                            <img src="https://images.unsplash.com/photo-1681225241052-ac67808b0c62?w=800&q=80" alt="Plage" class="img-fluid rounded shadow">
                        </div>
                    </div><br/>
                </div>
            </div>
        </div>
    </section>

    <!-- Carousel Section -->
    <section class="carousel-section">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">Galerie photographique</h2>
            <p class="section-subtitle text-center" data-aos="fade-up" data-aos-delay="100">Explorez les beautés de la région en images</p>
            
            <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up" data-aos-delay="200">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="8" aria-label="Slide 9"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="9" aria-label="Slide 10"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1681225241052-ac67808b0c62?w=1920&q=80" class="d-block w-100" alt="Monument de la Renaissance africaine">
                        <div class="carousel-caption">
                            <h3>Monument de la Renaissance africaine</h3>
                            <p>Symbole de la fierté et du renouveau africain</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://senegaldates.com/images/page/goree.jpg" class="d-block w-100" alt="Île de Gorée">
                        <div class="carousel-caption">
                            <h3>Île de Gorée</h3>
                            <p>Site classé au patrimoine mondial de l'UNESCO</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.portdakar.sn/sites/default/files/pc301069.jpg" class="d-block w-100" alt="Île de Gorée">
                        <div class="carousel-caption">
                            <h3>Port Autonome de Dakar</h3>
                            <p>Un port, moteur de l'émergence</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://aem-all.accor.com/content/dam/destinations/africa/sn/dakar/642-39.jpg" class="d-block w-100" alt="Plages de Dakar">
                        <div class="carousel-caption">
                            <h3>Plages de Dakar</h3>
                            <p>Des étendues de sable fin bordées par l'océan Atlantique</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://assets.dream.clubmed/pm_7531_639_639978-8ou05ot6wn-swhr.jpg" class="d-block w-100" alt="Marché de Sandaga">
                        <div class="carousel-caption">
                            <h3>Marché de Sandaga</h3>
                            <p>L'âme commerciale et culturelle de Dakar</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://ecotour-voyage-nature.com/images/ecotour/blog/2-0-lac-rose-une-curiosite-naturelle-du-senegal.jpg" class="d-block w-100" alt="Lac Rose">
                        <div class="carousel-caption">
                            <h3>Lac Rose (Lac Retba)</h3>
                            <p>Un lac aux eaux rosées, merveille naturelle unique</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.lechotouristique.com/wp-content/uploads/2019/04/dsc8955-scaled.jpg" class="d-block w-100" alt="Aeroport">
                        <div class="carousel-caption">
                            <h3>L'Aéroport International de Dakar</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://lequotidien.sn/wp-content/uploads/2024/09/Parc-Hann.jpg" class="d-block w-100" alt="Parc">
                        <div class="carousel-caption">
                            <h3>Parc zoologique de Hann</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.bonjoursenegal.com/wp-content/uploads/2018/12/1280px-S%C3%A9n%C3%A9gal_-_Iles_de_la_Madeleine_depuis_la_mer_1.jpg" class="d-block w-100" alt="Parc">
                        <div class="carousel-caption">
                            <h3>Île des Madeleines</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.adsttc.com/media/images/66e4/921d/2e09/f157/11cf/edcd/large_jpg/dakar-train-station-ga2d_2.jpg?1726255679" class="d-block w-100" alt="Parc">
                        <div class="carousel-caption">
                            <h3>Gare ferroviaire de Dakar</h3>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Attractions Section with Cards -->
    <section class="attractions-section">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">Sites incontournables</h2>
            <p class="section-subtitle text-center" data-aos="fade-up" data-aos-delay="100">Les attractions majeures de la région</p>
            
            <div class="row g-4">
                
                            <?php
                                foreach(get_pole() as $pole){
                            ?>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="attraction-card" data-attraction="goree">
                        <div class="attraction-image">
                            <img src="https://etourism.africa/be/assets/img/poles/<?= $pole->img?>" alt="Île de Gorée">
                            <div class="attraction-overlay">

                            </div>
                        </div>
                        <div class="attraction-content">
                            <h3><a href="site.php?id=<?= $pole->id?>"><?= $pole->name?></a></h3>
                            <div class="attraction-meta">
                                <span><i class="fas fa-map-marker-alt"></i><?= $pole->location?></span>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                            <?php
                                }
                            ?>



            </div>
        </div>
    </section>


    <!-- Modal for Attraction Details -->
    <div class="modal fade" id="attractionModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Attraction</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="modalCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
                        <div class="carousel-inner" id="modalCarouselInner">
                            <!-- Images will be inserted here -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#modalCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#modalCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div id="modalDescription">
                        <!-- Description will be inserted here -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-brand">
                        <img src="ca.png" alt="logo" style="max-height:150px;">
                    </div>
                </div>
                <div class="col-md-4">
                    <h5>À propos</h5>
                    <ul class="footer-links">
                        <li><a href="https://afrique.stostep.tech/a-propos.html">Qui sommes-nous</a></li>
                        <li><a href="https://afrique.stostep.tech/contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Services</h5>
                    <ul class="footer-links">
                        <li><a href="poles.html">Destinations</a></li>
                        <li><a href="https://afrique.stostep.tech/blog.php">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2026 Connaitrel'Afrique. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS - Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom JS -->
    <script src="script_pole_detail.js"></script>
</body>
</html>
