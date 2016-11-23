<!-- refaire le tabelau country dans un tableau HTML -->
<?php include 'include/pdo.php' ?>
<?php include 'include/fonctions.php' ?>
<?php include 'include/header.php' ?>

<?php
// REQUETE D'AFFICHAGE
$sql = "SELECT * FROM general WHERE status=1 ORDER BY console DESC";
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
        <td>Action</td></tr>
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
         <td><a href="edit.php?id=' .$jeu['id']. '"><img class="action" src="image/edit.png" alt="" title="Modifier"/></a>
             <a href="delete.php?id=' .$jeu['id']. '"><img class="action" src="image/delete.png" alt="" title="Supprimer"/></a></td></tr>';
   } ?>
  </tbody>
   </table>
</main>


<?php include 'include/footer.php'; ?>
