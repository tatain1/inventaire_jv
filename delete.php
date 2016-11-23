<?php include 'include/pdo.php' ?>
<?php include 'include/fonctions.php' ?>


<?php

if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // SELECT verif que id est bien dans la BDD
    $sql = "SELECT id FROM general WHERE id= :id";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $idValue = $query->fetch();

      if (!empty($idValue)) { //Si $idValue existe, je fais la requete suivante
        // ecrire la requete
        $sql = "UPDATE general SET status=0 WHERE id=:id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();

        header('Location: index.php');
        exit();
      } else {
        echo 'Cette page n\'existe pas. <br/>';
        ?><a href="index.php">Revenir à la page d'accueil</a><?php
      }
}



?>
