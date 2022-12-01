<?php require_once "menu.php"; ?>
<?php 
if (!isset($_SESSION['user']) || $_SESSION['user']['admin']==0){
    header('location: index.php');
}
?>
<h1>Liste des Users</h1>
<?php
$sql = "SELECT * FROM user"; //votre requêtes SQL (vous savez faire maintenant héhé !)
$pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
$pre->execute();//on l'execute
$data = $pre->fetchAll(PDO::FETCH_ASSOC);// on stocke les données dans une variable (ici $data)
foreach($data as $user){
?>
<?php
$sql = "SELECT * FROM projets"; //votre requêtes SQL (vous savez faire maintenant héhé !)
$pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
$pre->execute();//on l'execute
$project = $pre->fetchAll(PDO::FETCH_ASSOC);// on stocke les données dans une variable (ici $data)
?>
<form method='post' action='action/delete_user.php'>
    <h2><?php echo $user['username'] ?></h2>
    <input type="hidden" value="<?php echo $user['id'] ?>" name="id">
    <input type='submit' value='suprimer' />
    </form>
<form method='post' action='action/update_user.php'>
    <label for="#username">Le pseudo</label>
    <input id="username" type='text' name='username' value="<?php echo $user['username'] ?>">
    <input type="hidden" value="<?php echo $user['id'] ?>" name="id">
    <input type='submit' value='update' />
</form>
<?php }?>
<h3><?php echo $project[0]['titre'] ?></h3>
<form method="post" action="action/ADD_PROJECT.php" enctype="multipart/form-data">
    <label for="#prenom">Votre prenom</label>
    <input id="prenom" type='name' name='prenom'>
    <label for="#titre">Votre titre</label>
    <input id="titre" type='title' name='titre'>
    <label for="#img1">Votre photo</label>
    <input id="img1" type='file' name='img1'>
    <label for="#img2">Votre 1ere image de background dans la carouselle</label>
    <input id="img2" type='file' name='img2'>
    <label for="#img3">Votre 2eme image de background dans la carouselle</label>
    <input id="img3" type='file' name='img3'>
    <label for="#img4">Votre 3eme image de background dans la carouselle</label>
    <input id="img4" type='file' name='img4'>
    <label for="#HTML">Votre niveau en html</label>
    <input id="HTML" type='int' name='HTML'>
    <label for="#CSS">Votre niveau en css</label>
    <input id="CSS" type='int' name='CSS'>
    <label for="#JS">Votre niveau en javascript</label>
    <input id="js" type='int' name='JS'>
    <label for="#PHP">Votre niveau en php</label>
    <input id="PHP" type='int' name='PHP'>
    <label for="#SQL">Votre niveau en sql</label>
    <input id="SQL" type='int' name='SQL'>
    <label for="#P1">Votre 1er paragraphe dans le carousel</label>
    <input id="P1" type='text' name='P1'>
    <label for="#P2">Votre 2eme paragraphe dans le carousel</label>
    <input id="P2" type='text' name='P2'>
    <label for="#P3">Votre 3eme paragraphe dans le carousel</label>
    <input id="P3" type='text' name='P3'>
    <label for="#H2">Votre 1er titre dans le carousel</label>
    <input id="H2" type='text' name='H2'>
    <label for="#H3">Votre 2eme titre dans le carousel</label>
    <input id="H3" type='text' name='H3'>
    <label for="#H4">Votre 3eme titre dans le carousel</label>
    <input id="H4" type='text' name='H4'>
    <input type='submit' value='créer le projet' />
</form>
<?php require_once "footer.php"?>