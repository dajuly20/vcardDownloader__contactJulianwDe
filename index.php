<?php
// ============================================================
//  SITE CONFIG — edit here, values flow everywhere below
// ============================================================
$me = [
    'name'          => 'Julian Max Wiche',
    'email'         => 'julian@wiche.eu',
    'city'          => 'Freiburg im Breisgau',
    'country'       => 'Deutschland',
    'copyright_year'=> '2024',

    // GitHub / Git server
    'github_url'    => 'https://github.com/dajuly20',
    'git_server_url'=> 'http://GIT.julianw.de/',
    'git_server_display' => 'GIT.julianw.de',

    // Social — leave empty string '' to hide the icon
    'social_github'    => 'https://github.com/dajuly20',
    'social_instagram' => '',   // e.g. 'https://instagram.com/yourhandle'
    'social_youtube'   => '',   // e.g. 'https://youtube.com/@yourchannel'
    'social_linkedin'  => '',   // e.g. 'https://linkedin.com/in/yourprofile'
    'social_whatsapp'  => '',   // e.g. 'https://wa.me/49...'

    // vCard
    'vcard_file'    => '/usr/share/vcards_contacts/julian-wiche.vcf',
    'vcard_name'    => 'julian-wiche.vcf',
];

$vcard_exists = file_exists($me['vcard_file']);
?>
<!doctype html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Persönliche Visitenkarte und Portfolio von <?= htmlspecialchars($me['name']) ?> — Elektrotechnik, Embedded Systems, Smart Home und Software-Entwicklung aus <?= htmlspecialchars($me['city']) ?>.">
    <meta name="author" content="<?= htmlspecialchars($me['name']) ?>">

    <title><?= htmlspecialchars($me['name']) ?> — Visitenkarte</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/julCustom.css" rel="stylesheet">
    <link href="css/templatemo-nomad-force.css" rel="stylesheet">
</head>

<body>

    <main>

        <section class="hero" id="hero">
            <div class="heroText">
                <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                    <?= htmlspecialchars($me['name']) ?>
                </h1>

                <p class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">
                    Und ob du wirklich richtig Wählst..
                    <strong>
                        <a class="easter-egg-link"
                           href="https://github.com/dajuly20/RetroSmarthomeWithRotaryPhone"
                           target="_blank"
                           title="Projekt Retro Smarthome auf GitHub — Nicht sinnvoll.. aber geil!">
                            siehst du, wenn der Rolladen zu fährt.
                        </a>
                    </strong>
                </p>

                <div class="hero-buttons mt-4" data-aos="fade-up" data-aos-delay="1200">
                    <a href="Lebenslauf-Julian-Wiche.pdf" download class="btn btn-warning me-3">
                        <i class="bi-file-earmark-person me-2"></i>Lebenslauf (PDF)
                    </a>
                    <?php if ($vcard_exists): ?>
                    <button onclick="downloadVCard()" class="btn btn-outline-light">
                        <i class="bi-person-vcard me-2"></i>Kontakt speichern
                    </button>
                    <?php endif; ?>
                </div>
            </div>

            <div class="videoWrapper">
                <video loop muted class="custom-video" id="video_background" poster="images/julian.png">
                    <source src="videos/wahlscheibe.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="overlay"></div>
        </section>

        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <strong><?= htmlspecialchars($me['name']) ?></strong>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#hero">cd ~</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about"><b>whoami</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">ls -la ./projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#news">addEventListener()</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">sendmail $addr</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="section-padding pb-0" id="about">
            <div class="container mb-5 pb-lg-5">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-3" data-aos="fade-up">
                            <a href="javascript:a=prompt('julian && git remote get-url origin','<?= htmlspecialchars($me['git_server_url']) ?>');if(a){window.location.href=a};">whoami</a>
                            &nbsp;
                            <a target="_blank" href="<?= htmlspecialchars($me['github_url']) ?>">
                                <img title="Repositories auf GitHub aufrufen" src="images/github-mark.png" width="50px" alt="GitHub">
                            </a>
                        </h2>
                    </div>

                    <div class="col-lg-6 col-12 mt-3 mb-lg-5">
                        <p class="me-4" data-aos="fade-up" data-aos-delay="300">
                            Wenn's was mit Strom zu tun hat, dann bin ich dabei!<br>
                            Andere haben Pronomen, ich habe Spannungsebenen:
                        </p>
                    </div>

                    <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5">
                        <p data-aos="fade-up" data-aos-delay="500">
                        <ul>
                            <li>&gt; 400 V — Was brummt denn hier so? Spannend — aber nur von weitem.</li>
                            <li>400/230 V — Als gelernter Elektriker fühlt man sich hier zu Hause.</li>
                            <li>60–48 V — Hoffentlich ruft beim Dose anschließen gerade keiner an!</li>
                            <li>12 V DC — Van Life hatte ich auch schon durch. Mit Solar und so —
                                <a href="https://github.com/dajuly20/SolarData" target="_blank">SolarData auf GitHub</a>
                            </li>
                            <li>5 V / 3,3 V — Embedded, da komm ich mit der Technischen Informatik her —
                                <a href="https://www.hs-pforzheim.de/" target="_blank">HS Pforzheim</a>
                            </li>
                        </ul>
                        </p>
                    </div>

                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-12 p-0">
                        <img src="images/FreundeToll.jpg" class="img-fluid about-image" alt="">
                    </div>

                    <div class="col-lg-3 col-12 bg-dark">
                        <div class="d-flex flex-column flex-wrap justify-content-center h-100 py-5 px-4 pt-lg-4 pb-lg-0">
                            <h3 class="text-white mb-3" data-aos="fade-up">Mich gibt's aber auch ohne Strom</h3>
                            <p class="text-secondary-white-color" data-aos="fade-up">... und ganz entspannt.</p>
                            <div class="mt-3 custom-links">
                                <a href="#news" class="custom-link" data-aos="zoom-in" data-aos-delay="100" style="color: #ffc107;">Lagerfeuer sind toll.</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 p-0">
                        <section id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/IchBouldern.jpg" class="img-fluid team-image" alt="Bouldern">
                                    <div class="team-thumb bg-warning">
                                        <h3 class="text-white mb-0">
                                            <a target="_blank" href="https://www.freiburg-boulderkitchen.de/">Boulder Kitchen Freiburg</a>
                                        </h3>
                                        <p class="text-secondary-white-color mb-0">
                                            Und natürlich niemals in der Halle,<br>
                                            <a target="_blank" href="https://www.blockhaus-freiburg.de/">deren Namen</a> nicht genannt werden darf!
                                        </p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="images/bikeSun.jpg" class="img-fluid team-image" alt="Mountainbike">
                                    <div class="team-thumb bg-info">
                                        <h3 class="text-white mb-0">Die Staatskarosse</h3>
                                        <p class="text-secondary-white-color mb-0">YT Capra Pro 2021</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="images/hundMuede.png" class="img-fluid team-image" alt="Hund Oskar">
                                    <div class="team-thumb bg-info">
                                        <h3 class="text-white mb-0">Graf von Oskar</h3>
                                        <p class="text-secondary-white-color mb-0">Pflegehund Sept. 23 – März 24</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="images/KrikoHelmUndWeste.png" class="img-fluid team-image" alt="Julian mit Helm und Weste">
                                    <div class="team-thumb bg-danger">
                                        <h3 class="text-white mb-0">Julian Wiche</h3>
                                        <p class="text-secondary-white-color mb-0">It's dangerous out there, you might need these</p>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding" id="portfolio">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="mb-5 text-center" data-aos="fade-up">Portfolio</h2>
                    </div>

                    <!-- LEFT COLUMN -->
                    <div class="col-lg-6 col-12">

                        <div class="portfolio-thumb mb-5" data-aos="fade-up">
                            <a href="images/TelegramDoorOpener.gif" class="image-popup">
                                <img src="images/TelegramDoorOpener.gif" class="img-fluid portfolio-image" alt="Türöffner per Telegram">
                            </a>
                            <div class="portfolio-info">
                                <h4 class="portfolio-title mb-0">
                                    Türe öffnen&nbsp;
                                    <a target="_blank" href="https://github.com/dajuly20/ritto_intercom_shelly_uni/blob/main/README.md">
                                        <img title="Repository auf GitHub" src="images/github-mark.png" width="30px" alt="GitHub">
                                    </a>
                                </h4>
                                <p class="text-danger">Per Telegram Gruppe — Shelly Uni in Ritto Gegensprechanlage</p>
                            </div>
                        </div>

                        <div class="portfolio-thumb mb-5" data-aos="fade-up">
                            <a href="images/ikeMitTelefon.jpg" class="image-popup">
                                <img src="images/ikeMitTelefon.jpg" class="img-fluid portfolio-image" alt="Retro Smarthome">
                            </a>
                            <div class="portfolio-info">
                                <h4 class="portfolio-title mb-0">
                                    Retro Smarthome&nbsp;
                                    <a target="_blank" href="https://github.com/dajuly20/RetroSmarthomeWithRotaryPhone">
                                        <img title="Repository auf GitHub" src="images/github-mark.png" width="30px" alt="GitHub">
                                    </a>
                                </h4>
                                <p class="text-warning">Smart Home steuern per Wählscheibentelefon</p>
                            </div>
                        </div>

                        <div class="portfolio-thumb" data-aos="fade-up">
                            <a href="images/manualOnkyoRi.png" class="image-popup">
                                <img src="images/manualOnkyoRi.png" class="img-fluid portfolio-image" alt="Onkyo RI">
                            </a>
                            <div class="portfolio-info">
                                <h4 class="portfolio-title mb-0">
                                    <a href="https://github.com/dajuly20/node-red-contrib-onkyo-ri" target="_blank">node-red-contrib-onkyo-ri</a>
                                </h4>
                                <p class="text-info">Onkyo RI Protokoll für Node-RED</p>
                            </div>
                        </div>

                    </div>

                    <!-- RIGHT COLUMN -->
                    <div class="col-lg-6 col-12">

                        <div class="portfolio-thumb mt-5 mt-lg-0 mb-5" data-aos="fade-up">
                            <a href="images/aufmSchwabentorZurBardoRaus.jpg" class="image-popup">
                                <img src="images/aufmSchwabentorZurBardoRaus.jpg" class="img-fluid portfolio-image" alt="Freiburg">
                            </a>
                            <div class="portfolio-info">
                                <h4 class="portfolio-title mb-0">
                                    Freiburg im Breisgau&nbsp;
                                    <a target="_blank" href="https://github.com/dajuly20/network-documentation-plan-wg-merzhauser">
                                        <img title="Netzwerkdoku auf GitHub" src="images/github-mark.png" width="30px" alt="GitHub">
                                    </a>
                                </h4>
                                <p class="text-warning">Arbeiten &amp; leben in einer der schönsten Städte der Welt!</p>
                            </div>
                        </div>

                        <div class="portfolio-thumb mb-5" data-aos="fade-up">
                            <a href="images/rennradKueche.png" class="image-popup">
                                <img src="images/rennradKueche.png" class="img-fluid portfolio-image" alt="Solar Projekt">
                            </a>
                            <div class="portfolio-info">
                                <h4 class="portfolio-title mb-0">
                                    Solar Datenprojekt&nbsp;
                                    <a target="_blank" href="https://github.com/dajuly20/SolarData">
                                        <img title="Repository auf GitHub" src="images/github-mark.png" width="30px" alt="GitHub">
                                    </a>
                                </h4>
                                <p class="text-success">RS485 Solar-Leistungsdaten → Web-Frontend + MariaDB (Uni-Projekt)</p>
                            </div>
                        </div>

                        <div class="portfolio-thumb" data-aos="fade-up">
                            <a href="images/abgefahreneFreunde.png" class="image-popup">
                                <img src="images/abgefahreneFreunde.png" class="img-fluid portfolio-image" alt="Home Assistant Floor Plan">
                            </a>
                            <div class="portfolio-info">
                                <h4 class="portfolio-title mb-0">
                                    Sweet Home 3D → Home Assistant&nbsp;
                                    <a target="_blank" href="https://github.com/dajuly20/home-assistant-floor-plan">
                                        <img title="Repository auf GitHub" src="images/github-mark.png" width="30px" alt="GitHub">
                                    </a>
                                </h4>
                                <p class="text-primary">Plugin: generiert HA-Grundriss aus Sweet Home 3D</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section class="news section-padding" id="news">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="mb-5 text-center" data-aos="fade-up">News &amp; Projekte</h2>
                    </div>

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <div class="news-thumb" data-aos="fade-up">
                            <a href="https://github.com/dajuly20/hoymiles-mqtt" target="_blank" class="news-image-hover news-image-hover-warning">
                                <img src="images/balkon.jpg" class="img-fluid large-news-image news-image" alt="Hoymiles MQTT">
                            </a>
                            <div class="news-category bg-warning text-white">Projekt</div>
                            <div class="news-text-info">
                                <h5 class="news-title">
                                    <a href="https://github.com/dajuly20/hoymiles-mqtt" target="_blank" class="news-title-link">
                                        Hoymiles PV-Anlage → Home Assistant ohne Cloud
                                    </a>
                                </h5>
                                <span class="text-muted">hoymiles-mqtt auf GitHub</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                            <div class="news-top w-100">
                                <a href="https://github.com/dajuly20/PyThermalCamera" target="_blank" class="news-image-hover news-image-hover-primary">
                                    <img src="images/IMG_20210528_174008.jpg" class="img-fluid news-image" alt="Thermal Camera">
                                </a>
                                <div class="news-category bg-primary text-white">Projekt</div>
                            </div>
                            <div class="news-bottom w-100">
                                <div class="news-text-info">
                                    <h5 class="news-title">
                                        <a href="https://github.com/dajuly20/PyThermalCamera" target="_blank" class="news-title-link">
                                            Python Wärmebildkamera (Topdon TC001) auf dem Pi
                                        </a>
                                    </h5>
                                    <div class="d-flex flex-wrap">
                                        <span class="text-muted">PyThermalCamera auf GitHub</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                            <div class="news-top w-100">
                                <a href="https://github.com/dajuly20/freepbx_voicemail_handler" target="_blank" class="news-image-hover news-image-hover-success">
                                    <img src="images/IMG-20210613-WA0021.jpg" class="img-fluid news-image" alt="FreePBX Voicemail">
                                </a>
                                <div class="news-category bg-success text-white">Projekt</div>
                            </div>
                            <div class="news-bottom w-100">
                                <div class="news-text-info">
                                    <h5 class="news-title">
                                        <a href="https://github.com/dajuly20/freepbx_voicemail_handler" target="_blank" class="news-title-link">
                                            FreePBX Voicemail → MQTT Bridge
                                        </a>
                                    </h5>
                                    <span class="text-muted">Asterisk-Voicemail-Events per MQTT</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="contact section-padding" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-12 mx-auto">

                        <h2 class="mb-4 text-center" data-aos="fade-up">Schreib mir gerne!</h2>

                        <form action="sendmail.php" method="post" class="contact-form" role="form" data-aos="fade-up">

                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Dein Name" required>
                                </div>

                                <div class="col-lg-6 col-6">
                                    <label for="email" class="form-label">E-Mail <sup class="text-danger">*</sup></label>
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="deine@email.de" required>
                                </div>

                                <div class="col-12 my-4">
                                    <label for="message" class="form-label">Nachricht</label>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Worum geht's?" required></textarea>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Ich suche jemanden für <sup class="text-danger">*</sup></label>
                                </div>

                                <div class="col-lg-4 col-12">
                                    <div class="form-check">
                                        <input type="checkbox" id="check_embedded" name="check_embedded" class="form-check-input">
                                        <label class="form-check-label" for="check_embedded">Embedded / Hardware</label>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-12 my-2 my-lg-0">
                                    <div class="form-check">
                                        <input type="checkbox" id="check_smarthome" name="check_smarthome" class="form-check-input">
                                        <label class="form-check-label" for="check_smarthome">Smart Home / IoT</label>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-12">
                                    <div class="form-check">
                                        <input type="checkbox" id="check_software" name="check_software" class="form-check-input">
                                        <label class="form-check-label" for="check_software">Software-Entwicklung</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 col-12 mx-auto mt-5">
                                <button type="submit" class="form-control">Nachricht senden</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

        <section class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2670.5058369699623!2d7.833648276738962!3d47.984610761797626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47911b59760d917d%3A0xbf958a70395a46d0!2sMerzhauser%20Str.%2014%2C%2079100%20Freiburg%20im%20Breisgau!5e0!3m2!1sde!2sde!4v1711280243415!5m2!1sde!2sde"
                class="map-iframe" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h5 class="text-white">
                        <i class="bi-geo-alt-fill me-2"></i>
                        <?= htmlspecialchars($me['city']) ?>, <?= htmlspecialchars($me['country']) ?>
                    </h5>
                    <a href="mailto:<?= htmlspecialchars($me['email']) ?>" class="custom-link mt-3 mb-5">
                        <?= htmlspecialchars($me['email']) ?>
                    </a>
                </div>

                <div class="col-6">
                    <p class="copyright-text mb-0">
                        Copyright &copy; <?= htmlspecialchars($me['name']) ?> <?= htmlspecialchars($me['copyright_year']) ?>
                    </p>
                </div>

                <div class="col-lg-3 col-5 ms-auto">
                    <ul class="social-icon">
                        <?php if ($me['social_github']): ?>
                        <li><a href="<?= htmlspecialchars($me['social_github']) ?>" target="_blank" class="social-icon-link bi-github"></a></li>
                        <?php endif; ?>
                        <?php if ($me['social_instagram']): ?>
                        <li><a href="<?= htmlspecialchars($me['social_instagram']) ?>" target="_blank" class="social-icon-link bi-instagram"></a></li>
                        <?php endif; ?>
                        <?php if ($me['social_youtube']): ?>
                        <li><a href="<?= htmlspecialchars($me['social_youtube']) ?>" target="_blank" class="social-icon-link bi-youtube"></a></li>
                        <?php endif; ?>
                        <?php if ($me['social_linkedin']): ?>
                        <li><a href="<?= htmlspecialchars($me['social_linkedin']) ?>" target="_blank" class="social-icon-link bi-linkedin"></a></li>
                        <?php endif; ?>
                        <?php if ($me['social_whatsapp']): ?>
                        <li><a href="<?= htmlspecialchars($me['social_whatsapp']) ?>" target="_blank" class="social-icon-link bi-whatsapp"></a></li>
                        <?php endif; ?>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/scrollspy.min.js"></script>
    <script src="js/custom.js"></script>

    <script>
        var video = document.getElementById("video_background");
        video.playbackRate = 1.5;
        video.addEventListener("canplay", function () {
            setTimeout(function () { video.play(); }, 5000);
        });
    </script>

    <?php if ($vcard_exists): ?>
    <script>
        var vCardData = <?= json_encode(file_get_contents($me['vcard_file'])) ?>;
        function downloadVCard() {
            var a = document.createElement('a');
            a.setAttribute('href', 'data:text/x-vcard;charset=utf-8,' + encodeURIComponent(vCardData));
            a.setAttribute('download', '<?= htmlspecialchars($me['vcard_name']) ?>');
            a.click();
        }
    </script>
    <?php endif; ?>

</body>

</html>
