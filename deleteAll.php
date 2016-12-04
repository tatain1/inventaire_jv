<?php include 'include/pdo.php' ?>
<?php include 'include/fonctions.php' ?>

<?php
if (isLogged()) {
  $id_user = $_SESSION['user']['id'];
} else {
  $id_user = 0;
}

$sql = "DELETE FROM general WHERE status=0 AND id_user=$id_user";
$query = $pdo->prepare($sql);

$query->execute();
// REDIRECTION
header('Location: corbeille.php');
exit();

 ?>
