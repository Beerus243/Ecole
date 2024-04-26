<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", initial-scale="1">
    <title>KELASI</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css'><link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;1,500;1,600&display=swap" rel="stylesheet">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
</head>
<header>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="image/logo_accueil.png" alt="Votre logo" class="img-fluid"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Appros pos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#footer-content">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
  

</head>
<body>
  <!-- partial:index.partial.html -->
  <figure class="icon-cards mt-3">
    <div class="icon-cards__content">
      <div class="icon-cards__item d-flex align-items-center justify-content-center"><img src="image/image1.jpg" alt="Eleve" width="480" height="480"></span></div>
      <div class="icon-cards__item d-flex align-items-center justify-content-center"><img src="image/image2.png" alt="Eleve" width="480" height="480"></span></div>
      <div class="icon-cards__item d-flex align-items-center justify-content-center"><img src="image/image3.png" alt="Eleve" width="480" height="480"></span></div>
      
    </div>
  </figure>
  
  <div class="checkbox">
    <input class="d-none" id="toggle-animation" type="checkbox" checked />
    <label class="checkbox__checkbox" for="toggle-animation"></label>
  </div>

            <script  src="./script.js"></script>
          </div>
  
          <p id="intro"> Nos services </p>
          <section class="carree">    
   <button class="carre" id="presence-btn" class="custom-button"><img src="image/presence.png" alt="Eleve" width="24" height="24" id="icon"></i><p id="note">PRESENCE</p></button>
   <div id="presence-modal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <div id="presence-content"></div>
      </div>
    </div>
   <button  class="carre" id="application-btn" class="custom-button"><img src="image/application.png" alt="Eleve" width="24" height="24" id="icon"></i><p id="note">APPLICATION</p></button>
   <div id="application-modal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <div id="application-content"></div>
      </div>
    </div>
    <button class="carre"  id="pourcentage-btn" class="custom-button"><img src="image/pourcentage.png" alt="Eleve" width="24" height="24" id="icon"></i><p id="note">POURCENTAGE</p></button>
    <div id="pourcentage-modal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <div id="pourcentage-content"></div>
      </div>
    </div>
  </section>
  
          <section  class="carree">
  <button class="carre" id="note-btn"> <img src="image/note.png" alt="Eleve" width="24" height="24" id="icon"></i><p id="note">NOTE</p></button>
  <div id="note-modal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <div id="note-content"></div>
      </div>
    </div>
  <button class="carre" id="btn-communique"><img src="image/communiquer.png" alt="Eleve" width="24" height="24" id="icon"></i><p id="note">COMMUNICATION</p></button>
  <div id="modal-communique" class="modal">
      <div class="modal-content">
      <span class="close">&times;</span>
        <h2>Communique</h2>
        <p>Contenu du communiquer...</p>
        <button id="close-btn">Fermer</button>
      </div>
    </div>
  <button class="carre"  id="cours-btn" onclick="togglePopup()"><img src="image/cours.png" alt="Eleve" width="24" height="24" id="icon"></i><p id="note">COURS</p></button>
  <div id="cours-modal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <div id="cours-content"></div>
      </div>
    </div>
  </section>
          <script src="script.js"></script>
              
        <p id="intro2"> Appropos de kelasi </p>
 
            <div class="Ecrit">
              <p><span>Presence</span><br>
              La fonctionnalité "Présence" vous donne la possibilité de suivre le nombre de fois que votre enfant a été présent
               en classe du début des cours jusqu'à la fin et il permet aussi de savoir l'heure à laquelle l'enfant
                est arrivé à l'école </p>
               <img src="image/Presence2.png" alt="imageDroite">
            </div>
            <div class="Ecrit">
              <p><span>Application</span><br>
              La fonctionnalité "Application" vous permet vérifier l'évolution de votre enfant, voir les progrès qu'il
               a fait au cours de chaque périodes et trimestre y compris l'avis des professeurs sur votre enfant
              </p>
               <img src="image/Application2.png" alt="imageDroite">
            </div>
            <div class="Ecrit">
              <p><span>Pourcentage</span><br>
              La fonctionnalité "Pourcentage" vous permet d'avoir accès à un clic au pourcentage obtenu par votre enfants
               dans les périodes et semestres encours ou passé pour vous permettre de bien l'orienté</p>
               <img src="image/Pourcentage2.png" alt="imageDroite">
            </div>
            <div class="Ecrit">
              <p><span>Cours</span><br>
              La fonctionnalité "COURS" vous permet d'avoir accès à l'horaire du jours des cours de votre enfants l'heure du début et de la fin
            ainsi que le nom du professeurs qui presentera le cours</p>
               <img src="image/Cours2.png" alt="imageDroite">
            </div>
            <div class="Ecrit">
              <p><span>Note</span><br>
              La fonctionnalité "NOTE" vous permet d'avoir accès aux points obtenus de vos enfants dans les différentes matières</p>
               <img src="image/Note2.png" alt="imageDroite">
            </div>            
            <div class="Ecrit">
              <p><span>Communiquer</span><br>
              La fonctionnalité "COMMUNIQUER" vous permet d'avoir accès aux communiqués officiels de l'école pour éviter
               toute mauvaise information fournie aux parents</p>
               <img src="image/communiquer2.png" alt="imageDroite">
            </div>
            
            <footer class="footer-section">
              <div class="container">
                  <div class="footer-cta pt-5 ">
                      <div class="row">
                          <div class="col-xl-4 col-md-4 mb-30">
                              <div class="single-cta">
                                  <i class="fas fa-map-marker-alt"></i>
                                  <div class="cta-text">
                                      <h4>Find us</h4>
                                      <span>kinshasa, Gombe Rue Tabulaye</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-4 col-md-4 mb-30">
                              <div class="single-cta">
                                  <i class="fas fa-phone"></i>
                                  <div class="cta-text">
                                      <h4>Call us</h4>
                                      <span>+243 991 760 427 Or 900 595 192</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-4 col-md-4 mb-30">
                              <div class="single-cta">
                                  <i class="far fa-envelope-open"></i>
                                  <div class="cta-text">
                                      <h4>Mail us</h4>
                                      <span>malangafabrice@gmail.com</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="footer-content pt-5 pb-1">
                      <div class="row">
                          <div class="col-xl-4 col-lg-4 mb-50">
                              <div class="footer-widget">
                                  <div class="footer-logo">
                                      <a href="index.html"><img src="image/logo_accueil.png" class="img-fluid" alt="logo"></a>
                                  </div>
                                  <div class="footer-text">
                                      <p> Miser l'avenir de votre enfant avec Kelasi </p>
                                  </div>
                                  <div class="footer-social-icon">
                                      <span>Suivez nous sur</span>
                                      <ul class="social_icon">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                              <div class="footer-widget">
                                  <div class="footer-widget-heading">
                                      <h3>Useful Links</h3>
                                  </div>
                                  <ul>
                                      <li><a href="#">Our Team</a></li>
                                      <li><a href="#">About Us</a></li>
                                      <li><a href="#">Sponsorship</a></li>
                                      <li><a href="#">Our Team</a></li>
                                      <li><a href="#">Contact us</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                              <div class="footer-widget">
                                  <div class="footer-widget-heading">
                                      <h3>Subscribe</h3>
                                  </div>
                                  <div class="footer-text mb-25">
                                      <p>Conctactez nous</p>
                                  </div>
                                  <div class="subscribe-form">
                                      <form action="#">
                                          <input type="text" placeholder="Email Address">
                                          <button><i class="fab fa-telegram-plane"></i></button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="copyright-area">
                  <div class="container">
                      <div class="row">
                          <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                              <div class="copyright-text">
                                  <p>Copyright &copy; 2023, All Right Reserved <a href="#">Lamar Creative</a></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </footer>
    <!-- partial -->
      
    </body>
    </html>