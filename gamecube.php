<?php include 'include/pdo.php' ?>
<?php include 'include/fonctions.php' ?>
<?php include 'include/header.php' ?>

<?php
if (isLogged()) {
  $id_user = $_SESSION['user']['id'];
} else {
  $id_user = 0;
}// ecrire la requete
$sql = "SELECT * FROM general WHERE console = 'gamecube' AND status = 1 AND id_user = $id_user ORDER BY nom ASC";
// preparer la requete
$query = $pdo->prepare($sql);
// executer la requete
$query->execute();
$jeux = $query->fetchAll();

?>
<table class="inventaire">
  <thead>
  <tr><td>Nom du jeu</td>
      <td>Plateforme</td>
      <td>Boite</td>
      <td>Notice</td>
      <td>Fourreau</td>
      <td>Cale</td>
      <td>Action</td></tr>
  </thead>
<tbody>

<?php

foreach ($jeux as $jeu) {
 echo '<tr><td class="nom">' .$jeu['nom']. '</td>
       <td class="etat">' .$jeu['console']. '</td>
       <td>' .$jeu['boite']. '</td>
       <td>' .$jeu['notice']. '</td>
       <td>' .$jeu['fourreau']. '</td>
       <td>' .$jeu['cale']. '</td>
       <td><a href="edit.php?id=' .$jeu['id']. '"><img class="action" src="image/edit.png" alt="" title="Modifier"/></a>
           <a href="delete.php?id=' .$jeu['id']. '"><img class="action" src="image/delete.png" alt="" title="Supprimer"/></a></td></tr>';
 } ?>
</tbody>
 </table>

<?php include 'include/footer.php'; ?>
