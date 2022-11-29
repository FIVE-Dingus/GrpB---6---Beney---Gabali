
    <?php require_once "menu.php";?>
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