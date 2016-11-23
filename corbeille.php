<?php include 'include/pdo.php' ?>
<?php include 'include/fonctions.php' ?>
<?php include 'include/header.php' ?>

<?php
// REQUETE D'AFFICHAGE
$sql = "SELECT * FROM general WHERE status=0 ORDER BY console DESC";
$query = $pdo->prepare($sql);
$query->execute();
$jeux = $query->fetchAll();

?>
<main>
  <table class="inventaire">
    <thead>
    <tr><td class="nom">Nom du jeu</td>
        <td class="etat">Plateforme</td>
        <td>Boite</td>
        <td>Notice</td>
        <td>Fourreau</td>
        <td>Cale</td>
        <td>Restaurer</td></tr>
    </thead>
  <tbody>

  <?php

  foreach ($jeux as $jeu) {
   echo '<tr><td class="etat">' .$jeu['console']. '</td>
         <td class="nom">' .$jeu['nom']. '</td>
         <td>' .$jeu['boite']. '</td>
         <td>' .$jeu['notice']. '</td>
         <td>' .$jeu['fourreau']. '</td>
         <td>' .$jeu['cale']. '</td>
         <td class="center"><a href="restore.php?id=' .$jeu['id']. '"><img class="action" src="image/restor.png" alt="" title="Restaurer"/></a></td></tr>';
   } ?>
  </tbody>
   </table>
   <div class="container center">
     <a href="deleteAll.php">Supprimer ces jeux</a><br>
     <span class="red">Attention cette action est definitive. Ces données ne pourront pas etre recupérées...</span>
   </div>
</main>


<?php include 'include/footer.php'; ?>
