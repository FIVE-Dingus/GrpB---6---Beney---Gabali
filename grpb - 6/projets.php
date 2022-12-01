<?php require_once "menu.php" ?>
<?php
$sql = "SELECT * FROM projets"; //votre requêtes SQL (vous savez faire maintenant héhé !)
$pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
$pre->execute();//on l'execute
$data = $pre->fetchAll(PDO::FETCH_ASSOC);// on stocke les données dans une variable (ici $data)
foreach($data as $project){
?>
    <div class="body">
      <div class="title">
        <div class="h1">
            <h1><?php echo $project['id']['titre'] ?></h1>
        </div>
      </div>
    </div>
    <div class="row row-<?php echo $project['id']['prenom'] ?>">
      <h2 class="col s12"></h2>
          <div class="col l6 m6 s12" id="trigger-wg"><img class="<?php echo $project['id']['titre'] ?>" src="<?php echo $project['id']['img1'] ?>" alt="<?php echo $project['id']['titre'] ?>"></div>
          <div class="col l6 m6 s12"></div>
      </div>
    </div>
    <div class="skills-william">
        <div class="skill-bar white-text">
          <h3>HTML</h3>
          <p></p>
          <div class="skills-container white-text">
            <div class="skills html" style="width:<?php echo $project['id']['HTML'] ?>%"></div>
          </div>
          
          <p>CSS</p>
          <div class="skills-container white-text">
            <div class="skills css" style="width:<?php echo $project['id']['CSS'] ?>%"></div>
          </div>
          
          <p>JavaScript</p>
          <div class="skills-container white-text">
            <div class="skills js" style="width:<?php echo $project['id']['JS'] ?>%"></div>
          </div>
          
          <p>PHP</p>
          <div class="skills-container white-text">
            <div class="skills php" style="width:<?php echo $project['id']['PHP'] ?>%"></div>
          </div>

          <p>SQL</p>
          <div class="skills-container white-text">
            <div class="skills sql" style="width:<?php echo $project['id']['SQL'] ?>%"></div>
          </div>
      </div>
    </div>
      <div class="carousel carousel-slider center dylan">
        <div class="carousel-item Kyhu1 white-text" style="background-image: url(<?php echo $project['img2']?>); background-size: 100%;    background-repeat: no-repeat;    background-position: center;" >
          <h2><?php echo $project['id']['H2'] ?></h2>
          <p class="white-text"><?php echo $project['id']['P1'] ?></p>
          <div class="carousel-fixed-item center">
            <a class="btn waves-effect white grey-text darken-text-2" href="">button</a>
          </div>
        </div>
        <div class="carousel-item Kyhu2 white-text" style="background-image: url(<?php echo $project['img3']?>); background-size: 100%;    background-repeat: no-repeat;    background-position: center;">
          <h3><?php echo $project['id']['H3'] ?></h3>
          <p class="white-text"><?php echo $project['id']['P2'] ?></p>
          <div class="carousel-fixed-item center">
            <a class="btn waves-effect white grey-text darken-text-2" href="">button</a>
          </div>
        </div>
        <div class="carousel-item Kyhu3 white-text" style="background-image: url(<?php echo $project['img4']?>); background-size: 100%;    background-repeat: no-repeat;    background-position: center;">
          <h4><?php echo $project['id']['H4'] ?></h4>
          <p class="white-text"><?php echo $project['id']['P3'] ?></p>
          <div class="carousel-fixed-item center">
            <a class="btn waves-effect white grey-text darken-text-2" href="">button</a>
          </div>
        </div>
      </div>
      <?php } require_once "footer.php"?>