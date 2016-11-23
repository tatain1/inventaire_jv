<?php include 'include/pdo.php' ?>
<?php include 'include/fonctions.php' ?>

<?php
$sql = "DELETE FROM general WHERE status=0";
$query = $pdo->prepare($sql);

$query->execute();
// REDIRECTION
header('Location: corbeille.php');
exit();

 ?>
