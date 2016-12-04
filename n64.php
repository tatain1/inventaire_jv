<!-- refaire le tabelau country dans un tableau HTML -->
<?php include 'include/pdo.php' ?>
<?php include 'include/fonctions.php' ?>
<?php include 'include/header.php' ?>

<?php
if (isLogged()) {
  $id_user = $_SESSION['user']['id'];
} else {
  $id_user = 0;
}// ecrire la requete
$sql = "SELECT * FROM general WHERE console = 'N64' AND status = 1 AND id_user = $id_user ORDER BY nom ASC";
// preparer la requete
$query = $pdo->prepare($sql);
// executer la requete
$query->execute();
$jeux = $query->fetchAll();

?>


          <table class="inventaire">
            <thead>
              <tr><td><img class="logo" src="image/logon64.png" alt="" /></td>
                  <td>Nom du jeu</td>
                  <td>Boite</td>
                  <td>Notice</td>
                  <td>Fourreau</td>
                  <td>Cale</td>
                  <td>Action</td></tr>
                </thead>
                <tbody>

<?php

foreach ($jeux as $jeu) {
 echo '<tr><td></td>
       <td>' .$jeu['nom']. '</td>
       <td>' .$jeu['boite']. '</td>
       <td>' .$jeu['notice']. '</td>
       <td>' .$jeu['fourreau']. '</td>
       <td>' .$jeu['cale']. '</td>
       <td class="action"><a href="edit.php?id=' .$jeu['id']. '"><img class="action" src="image/edit.png" alt="" title="Modifier"/></a>
           <a href="delete.php?id=' .$jeu['id']. '"><img class="action" src="image/delete.png" alt="" title="Supprimer"/></a></td></tr>';
 } ?>
                </tbody>
              </table>




<?php include 'include/footer.php'; ?>
