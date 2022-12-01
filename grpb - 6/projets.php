<?php require_once "menu.php" ?>
<?php
$sql = "SELECT * FROM projets WHERE id=".$_GET['id']; //votre requêtes SQL (vous savez faire maintenant héhé !)
$pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
$pre->execute();//on l'execute
$project = $pre->fetchAll(PDO::FETCH_ASSOC);// on stocke les données dans une variable (ici $data)
?>
    <div class="body">
      <div class="title">
        <div class="h1">
            <h1><?php echo $project[0]['titre'] ?></h1>
        </div>
      </div>
    </div>
    <div class="row row-william" style="background-image: url(img/Kyhudji_background_white.jpg);">
      <h2 class="col s12"></h2>
          <div class="col l6 m6 s12" ><img class="<?php echo $project[0]['titre'] ?>" src="<?php echo $project[0]['img1'] ?>" alt="<?php echo $project[0]['titre']?>" style="background-image: url(img/Kyhudji_background_white.jpg); width: 50%;"></div>
          <div class="col l6 m6 s12"></div>
      </div>
    </div>
    <div class="skills-william">
        <div class="skill-bar white-text">
          <h3>HTML</h3>
          <p></p>
          <div class="skills-container white-text">
            <div class="skills html" style="width:<?php echo $project[0]['HTML'] ?>%"><?php echo $project[0]['HTML'] ?>%</div>
          </div>
          
          <p>CSS</p>
          <div class="skills-container white-text">
            <div class="skills css" style="width:<?php echo $project[0]['CSS'] ?>%"><?php echo $project[0]['CSS'] ?>%</div>
          </div>
          
          <p>JavaScript</p>
          <div class="skills-container white-text">
            <div class="skills js" style="width:<?php echo $project[0]['JS'] ?>%"><?php echo $project[0]['JS'] ?>%</div>
          </div>
          
          <p>PHP</p>
          <div class="skills-container white-text">
            <div class="skills php" style="width:<?php echo $project[0]['PHP'] ?>%"><?php echo $project[0]['PHP'] ?>%</div>
          </div>

          <p>SQL</p>
          <div class="skills-container white-text">
            <div class="skills sql" style="width:<?php echo $project[0]['SQL'] ?>%"><?php echo $project[0]['SQL'] ?>%</div>
          </div>
      </div>
    </div>
      <div class="carousel carousel-slider center dylan">
        <div class="carousel-item Kyhu1 white-text" style="background-image: url(<?php echo $project[0]['img2']?>); background-size: 100%;    background-repeat: no-repeat;    background-position: center;" >
          <h2><?php echo $project[0]['H2'] ?></h2>
          <p class="white-text"><?php echo $project[0]['P1'] ?></p>
          <div class="carousel-fixed-item center">
            <a class="btn waves-effect white grey-text darken-text-2" href="">button</a>
          </div>
        </div>
        <div class="carousel-item Kyhu2 white-text" style="background-image: url(<?php echo $project[0]['img3']?>); background-size: 100%;    background-repeat: no-repeat;    background-position: center;">
          <h3><?php echo $project[0]['H3'] ?></h3>
          <p class="white-text"><?php echo $project[0]['P2'] ?></p>
          <div class="carousel-fixed-item center">
            <a class="btn waves-effect white grey-text darken-text-2" href="">button</a>
          </div>
        </div>
        <div class="carousel-item Kyhu3 white-text" style="background-image: url(<?php echo $project[0]['img4']?>); background-size: 100%;    background-repeat: no-repeat;    background-position: center;">
          <h4><?php echo $project[0]['H4'] ?></h4>
          <p class="white-text"><?php echo $project[0]['P3'] ?></p>
          <div class="carousel-fixed-item center">
            <a class="btn waves-effect white grey-text darken-text-2" href="">button</a>
          </div>
        </div>
      </div>
      <?php require_once "footer.php"?>