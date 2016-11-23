<?php include 'include/pdo.php' ?>
<?php include 'include/fonctions.php' ?>
<?php include 'include/header.php' ?>

<?php


// REQUETE D'AFFICHAGE
$sql = "SELECT * FROM general WHERE status=1 ORDER BY created_at DESC LIMIT 5";
$query = $pdo->prepare($sql);
$query->execute();
$crees = $query->fetchAll();

?>
<main>
  <h2>Dernier jeux ajoutés :</h2>
  <table class="inventaire">
    <thead>
    <tr><td>Plateforme</td>
        <td>Nom du jeu</td>
        <td>Boite</td>
        <td>Notice</td>
        <td>Fourreau</td>
        <td>Cale</td>
        <td>Action</td>
        <td>Date de modification</td></tr>
    </thead>
  <tbody>

  <?php

  foreach ($crees as $cree) {

  $dateCrea = strtotime($cree['created_at']);
   echo '<tr><td class="etat">' .$cree['console']. '</td>
         <td class="nom">' .$cree['nom']. '</td>
         <td>' .$cree['boite']. '</td>
         <td>' .$cree['notice']. '</td>
         <td>' .$cree['fourreau']. '</td>
         <td>' .$cree['cale']. '</td>
         <td class="center"><a href="edit.php?id=' .$cree['id']. '"><img class="action" src="image/edit.png" alt="" title="Modifier"/></a>
                            <a href="delete.php?id=' .$cree['id']. '"><img class="action" src="image/delete.png" alt="" title="Supprimer"/></a></td>
         <td>' .date('d/m/Y G:i',$dateCrea). '</td></tr>';
   } ?>
  </tbody>
   </table>

   <?php
   // REQUETE D'AFFICHAGE
   $sql = "SELECT * FROM general WHERE status=1 ORDER BY modified_at DESC LIMIT 5";
   $query = $pdo->prepare($sql);
   $query->execute();
   $modifies = $query->fetchAll();

   ?>

   <h2>Dernier jeux modifiés :</h2>
   <table class="inventaire">
     <thead>
     <tr><td>Plateforme</td>
         <td>Nom du jeu</td>
         <td>Boite</td>
         <td>Notice</td>
         <td>Fourreau</td>
         <td>Cale</td>
         <td>Action</td>
         <td>Date de modification</td></tr>
     </thead>
   <tbody>

   <?php

   foreach ($modifies as $modifie) {

    $dateModif = strtotime($modifie['modified_at']);
    echo '<tr><td class="etat">' .$modifie['console']. '</td>
          <td class="nom">' .$modifie['nom']. '</td>
          <td>' .$modifie['boite']. '</td>
          <td>' .$modifie['notice']. '</td>
          <td>' .$modifie['fourreau']. '</td>
          <td>' .$modifie['cale']. '</td>
          <td class="center"><a href="edit.php?id=' .$modifie['id']. '"><img class="action" src="image/edit.png" alt="" title="Modifier"/></a>
                             <a href="delete.php?id=' .$modifie['id']. '"><img class="action" src="image/delete.png" alt="" title="Supprimer"/></a></td>
          <td>' .date('d/m/Y G:i',$dateModif). '</td></tr>';
    } ?>
   </tbody>
  </table>

  <?php
  // REQUETE D'AFFICHAGE
  $sql = "SELECT * FROM general WHERE console='nes' AND status=1";
  $query = $pdo->prepare($sql);
  $query->execute();
  $nes = $query->fetchAll();
  $nes = count($nes);

  $sql = "SELECT * FROM general WHERE console='gamecube' AND status=1";
  $query = $pdo->prepare($sql);
  $query->execute();
  $gamecube = $query->fetchAll();
  $gamecube = count($gamecube);


  ?>

  <h2>Etat general de la collection :</h2>
  <table class="inventaire check">
    <thead>
    <tr><td>Plateforme</td>
        <td>Nombre de jeux</td>
        <td>Dont complet</td></tr>
    </thead>
    <tbody>
      <tr><td><a href="nes.php">NES</a></td>
          <td><?php echo $nes. '/349' ?></td>
          <td>A venir</td>
      </tr>
      <tr><td><a href="gamecube.php">GameCube</a></td>
          <td><?php echo $gamecube. '/449' ?></td>
          <td>A venir</td>
      </tr>
    </tbody>
</main>


<?php include 'include/footer.php'; ?>
