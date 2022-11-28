<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Portfolio de GigaChad</title>
    <meta name="description" content="Ce site est un Portfolio de William Gabali et de Dylan Beney, deux GigaChad">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Modern+Antiqua&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <header>
      <nav>
        <div class="nav-wrapper black">
            <a href="index.php" class="brand-logo">Accueil</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="kyhudji.php">Kyhudji.gg</a></li>
            <li><a href="squadhost_.php">SquadHost_</a></li>
          </ul>
          <ul id="slide-out" class="sidenav">
                <li><div class="user-view">
                <div class="background">
                  <img src="img/Kyhudji_background.jpg" alt="Background de la side nav">
                </div>
                <a class="logo_nav" href="https://gamingcampus.fr"><i><img class="circle" src="https://img-cdn.tnwcdn.com/image?url=https%3A%2F%2Fpbs.twimg.com%2Fprofile_images%2F1267815531391770625%2FcAGe24Ly.jpg&signature=bd635c392b10c6a4ef378e48e4ce42f0" alt="Logo du Gaming Campus"></i></a>
                <span class="white-text name">Beney Dylan</span>
                <span class="white-text email">dbeney@gaming.tech</span>
                </div></li>
                <li class="kyhudji"><a href="kyhudji.php"><i><img src="https://pbs.twimg.com/profile_images/1567358240224153600/iHuX-JWg_400x400.jpg" alt="Logo de William"></i>Kyhudji.gg</a></li>
                <li class="squadhost_nav"><a href="squadHost_.php"><i><img src="img/logo.PNG" alt="Logo de SquadHost_"></i>SquadHost_</a></li>
              </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
      </nav>
    </header>
    <div class="title">
      <div class="row row-squadhost">
            <div class="col l12 m12 s12 h1"><h1>SquadHost_</h1></div>
            <div class="col l3 m3 s3"></div>
            <div class="col l6 m6 s6 squadhostlogo"><img class="logosquadhost" src="img/logo.PNG" alt="Logo de SquadHost_"></div>
      </div>
    </div>  
    <div class="presentation">
      <div class="row">
          <div class="col l8 m12 s12 text">SquadHost_ est un projet créer par moi(Dylan) et mon ami, il consiste a vouloir créer un service d'hébergement de service virtuel appelé SquadHost_.
          </div>
          <div class="col l4 m12 s12 img" id="trigger"><img class="william" src="img/Dylan.jpg" alt="Photo de Dylan"></div>
      </div>
      <div class="skills-william">
        <div class="skill-bar white-text">
          <h3>Mes Compétences</h3>
          <p>html</p>
          <div class="skills-container white-text">
            <div class="skills htmldylan">75%</div>
          </div>
          
          <p>CSS</p>
          <div class="skills-container white-text">
            <div class="skills cssdylan">65%</div>
          </div>
          
          <p>JavaScript</p>
          <div class="skills-container white-text">
            <div class="skills jsdylan">30%</div>
          </div>
          <br>
        </div>
      </div>
    </div>
      <div class="carousel carousel-slider center">
        <div class="carousel-item squadhost white-text">
          <div>
          <h2>POURQUOI NOUS ET PAS SHADOW</h2>
          <p>
            Nous proposons des machine qui tourne sur Linux et celle ci sera déstiné a la bureautique mais également au gaming grâce a une Nvidia tesla k80.
          </p>
          </div>
        </div>
        <div class="carousel-item squadhost white-text">
          <h3>NOS OFFRES</h3>
          <p>
            Nous proposont 2 offres qui sont:
          </p>
          <p>
            Une offre a 5ctm d'euro/heure
          </p>
          <p>
            Une offre a 5euro/mois
          </p>
        </div>
        <div class="carousel-item squadhost white-text">
          <h4>L'intérêt</h4>
          <p class="decription">
            L'intérêt ici est de proposer une offre /mois pour les personne utilisant plus la machine (+ de 100 heures) et une offre a l'heure pour les personnes l'utilisant moin(- de 100 heures).
          </p>
        </div>
      </div> 
      <footer class="page-footer">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Conclusion</h5>
              <p class="grey-text text-lighten-4">clique pour devenir un <a href="gigachad.php">Gigachad</a></p>
            </div>
            <div class="col l4 offset-l2 s12 footer">
              <!-- Modal Trigger -->
              <a class="waves-effect waves-light btn modal-trigger black" href="#modal1">Contactez nous</a>

              <!-- Modal Structure -->
              <div id="modal1" class="modal">
                <div class="modal-content">
                  <div class="container">
                  
                      <label for="fname">Prénom</label>
                      <input type="text" id="fname" name="firstname" placeholder="Votre prénom de GigaChad...">
                  
                      <label for="lname">Nom</label>
                      <input type="text" id="lname" name="lastname" placeholder="Votre nom de GigaChad...">
                  
                      <label for="subject">E.Mail</label>
                      <textarea id="subject" name="subject" placeholder="Un E.Mail de Chad"></textarea>
                  
                      <input class="submit" type="submit" value="Envoyer">
                  
                  </div>
                </div>
                <div class="modal-footer">
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Accepter</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © Copyright Les deux GigaChad appeler Dylan Beney et William Gabali
          </div>
        </div>
      </footer>
    <script type="text/javascript" src="js/JqueryMin.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>