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
        <div class="nav-wrapper black" >
          <a class="waves-effect waves-light btn modal-trigger black" href="#modal2">Inscrivez vous</a>
          <div id="modal2" class="modal">
              <form method="post" action="action/register.php">
                <label for="#email">Votre email</label>
                <input id="email" type='email' name='email'>
                <label for="#password">Votre Mot de passe</label>
                <input id="password" type='password' name='password'>
                <label for="#username">Votre pseudo</label>
                <input id="username" type='username' name='username'>
                <input type='submit' value='se register' />
              </form>
          </div>
          <a class="waves-effect waves-light btn modal-trigger black" href="#modal3">Connectez vous</a>
          <div id="modal3" class="modal">
              <form method="post" action="action/login.php">
                <label for="#email">Votre email</label>
                <input id="email" type='email' name='email'>
                <label for="#password">Votre Mot de passe</label>
                <input id="password" type='password' name='password'>
                <input type='submit' value='se connecter' />
              </form>
          </div>
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
            <a href="https://gamingcampus.fr"><i><img class="circle" src="https://img-cdn.tnwcdn.com/image?url=https%3A%2F%2Fpbs.twimg.com%2Fprofile_images%2F1267815531391770625%2FcAGe24Ly.jpg&signature=bd635c392b10c6a4ef378e48e4ce42f0" alt="Logo du Gaming Campus"></i></a>
            <span class="white-text name">Beney Dylan</span>
            <span class="white-text email">Gabali William</span></div></li>
            <li class="kyhudji"><a href="kyhudji.php"><i><img src="https://pbs.twimg.com/profile_images/1567358240224153600/iHuX-JWg_400x400.jpg" alt="Logo de William" rel="no-follow"></i>Kyhudji.gg</a></li>
            <li class="squadhost_nav"><a href="squadHost_.php"><i><img src="img/logo.PNG" alt="Logo de SquadHost_"></i>SquadHost_</a></li>
          </ul>
          <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          </div>
      </nav>
    </header>
    <div class="index">
      <div class="row row-index">
        <div class="col l12 m12 s12">
        <h1>Bienvenue sur le site de William Gabali et Dylan Beney</h1>
        </div>
        <div class="col l3 m3"></div>
        <div class="col l3 m3 s12 img"><a href="kyhudji.php" ><img class="index" src="img/william.jpg" alt="Photo de William"></a></div>
      <div class="col l3 m3 s12 img"><a href="squadHost_.php"><img class="index" src="img/Dylan.jpg" alt="Photo de Dylan"></a></div>

      </div>
    </div>
    <div class="carousel carousel-slider center">
      <div class="carousel-fixed-item center">
      </div>
      <div class="carousel-item index1 white-text">
        <div>
        <h2>Gabali William</h2>
        <p class="white-text">Ma page de présentation</p>

        <div class="carousel-fixed-item center">
          <a class="btn waves-effect white grey-text darken-text-2" href="kyhudji.php">button</a>
        </div> 
        </div>
      </div>
      <div class="carousel-item index2 white-text">
        <h2>SquadHost_</h2>
        <p class="white-text">Mon entreprise de machine virtuel</p>
        <img src="img/logo.PNG" alt="Logo de SquadHost_">
        <div class="carousel-fixed-item center">
          <a class="btn waves-effect white grey-text darken-text-2" href="squadHost_.php">button</a>
        </div> 
      </div>
    </div>
    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Conclusion</h5>
            <p class="grey-text text-lighten-4">N'hésitez pas check les autres pages.</p>
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