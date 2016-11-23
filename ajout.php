<?php include 'include/pdo.php' ?>
<?php include 'include/fonctions.php' ?>

<?php

$error=array();
$success=false;

  if(!empty($_POST['submit'])) {
    // Faille XSS
    $jeu = trim(strip_tags($_POST['jeu']));
    $console = trim(strip_tags($_POST['console']));
    $boite = trim(strip_tags($_POST['boite']));
    $notice = trim(strip_tags($_POST['notice']));
    $fourreau = trim(strip_tags($_POST['fourreau']));
    $cale = trim(strip_tags($_POST['cale']));
    $note = trim(strip_tags($_POST['note']));

    // JEU
    if(!empty($jeu)) {
      if (strlen($jeu) > 100) {
        $error['jeu'] = 'Le nom doit contenir moins de 100 caracteres';
      } elseif (strlen($jeu) < 2) {
        $error['jeu'] = 'Le nom doit contenir plus de 2 caracteres';
      }
    } else {
      $error['jeu'] = 'Ce champs doit etre rempli';
    }

    //CONSOLE
    if(!empty($console)) {
      if (strlen($console) > 100) {
        $error['console'] = 'Le nom doit contenir moins de 100 caracteres';
      } elseif (strlen($console) < 2) {
        $error['console'] = 'Le nom doit contenir plus de 2 caracteres';
      }
    } else {
      $error['console'] = 'Ce champs doit etre rempli';
    }

    //BOITE
    if(!empty($boite)) {

    } else {
      $error['boite'] = 'Choississez une valeur SVP.';
    }

    //NOTICE
    if(!empty($notice)) {

    } else {
      $error['notice'] = 'Choississez une valeur SVP.';
    }
    //FOURREAU
    if(!empty($fourreau)) {

    } else {
      $error['fourreau'] = 'Choississez une valeur SVP.';
    }
    //CALE
    if(!empty($cale)) {

    } else {
      $error['cale'] = 'Choississez une valeur SVP.';
    }
    // SI TOUT EST OK => INSERT INTO
    if (count($error) == 0)  {
      $sql = "INSERT INTO general (nom, console, boite, notice, fourreau, cale, status, note, created_at)
              VALUES (:nom, :console, :boite, :notice, :fourreau, :cale, 1, :note, now())";
      $query = $pdo->prepare($sql);
      // bind VALUES (protec injection SQL)
      $query->bindValue(':nom', $jeu, PDO::PARAM_STR);
      $query->bindValue(':console', $console, PDO::PARAM_STR);
      $query->bindValue(':boite', $boite, PDO::PARAM_STR);
      $query->bindValue(':notice', $notice, PDO::PARAM_STR);
      $query->bindValue(':fourreau', $fourreau, PDO::PARAM_STR);
      $query->bindValue(':cale', $cale, PDO::PARAM_STR);
      $query->bindValue(':note', $note, PDO::PARAM_STR);
      $query->execute();

      $success=true;
    }
   }

 ?>

<?php include 'include/header.php' ?>

<?php
if ($success == true) {
  echo '<div class="container">
          <div class="green">Jeu enregistré.</div><br/>
          <a href="ajout.php">Enregistrer un nouveau jeu</a>
        </div>';
} else { ?>

  <div class="container formulaire">
    <form method="POST" action="ajout.php">

      <label class="intitule" for="jeu">Nom du jeu :</label>
      <input type="text" name="jeu" value="<?php if (!empty($_POST['jeu'])) { echo ($_POST['jeu']); } ?>"/><br>
      <span class="error"><?php if (!empty($error['jeu'])) { echo ($error['jeu']); } ?></span><br />

      <label class="intitule" for="console">Plateforme :</label>
      <select name="console" value="">
        <option value="">---Choisir---</option>
        <option value="NES" <?php if (!empty($_POST['console']) && $_POST['console'] === 'NES') { echo 'selected'; } ?>>NES</option>
        <option value="N64" <?php if (!empty($_POST['console']) && $_POST['console'] === 'N64') { echo 'selected'; } ?>>N64</option>
        <option value="gamecube" <?php if (!empty($_POST['console']) && $_POST['console'] === 'gamecube') { echo 'selected'; } ?>>GameCube</option>
      </select><br>
      <div class="spacer"></div>
      <span class="error"><?php if (!empty($error['console'])) { echo ($error['console']); } ?></span><br />

      <label class="intitule" for="boite">Boite/boitier :</label>
      <select name="boite" value="">
        <option value="" >---Choisir---</option>
        <option value="Present" <?php if (!empty($_POST['boite']) && $_POST['boite'] === 'Present') { echo 'selected'; } ?>>Present</option>
        <option value="Absent" <?php if (!empty($_POST['boite']) && $_POST['boite'] === 'Absent') { echo 'selected'; } ?>>Absent</option>
        <option value="Reproduction" <?php if (!empty($_POST['boite']) && $_POST['boite'] === 'Reproduction') { echo 'selected'; } ?>>Reproduction</option>
        <option value="Non Concerné" <?php if (!empty($_POST['boite']) && $_POST['boite'] === 'Non Concerné') { echo 'selected'; } ?>>Non concerné</option>
      </select><br>
      <div class="spacer"></div>
      <span class="error"><?php if (!empty($error['boite'])) { echo ($error['boite']); } ?></span><br />

      <label class="intitule" for="notice">Notice :</label>
      <select name="notice" value="">
        <option value="">---Choisir---</option>
        <option value="Present" <?php if (!empty($_POST['notice']) && $_POST['notice'] === 'Present') { echo 'selected'; } ?>>Present</option>
        <option value="Absent" <?php if (!empty($_POST['notice']) && $_POST['notice'] === 'Absent') { echo 'selected'; } ?>>Absent</option>
        <option value="Reproduction" <?php if (!empty($_POST['notice']) && $_POST['notice'] === 'Reproduction') { echo 'selected'; } ?>>Reproduction</option>
        <option value="Non Concerné" <?php if (!empty($_POST['notice']) && $_POST['notice'] === 'Non Concerné') { echo 'selected'; } ?>>Non concerné</option>
      </select><br>
      <div class="spacer"></div>
      <span class="error"><?php if (!empty($error['notice'])) { echo ($error['notice']); } ?></span><br />

      <label class="intitule" for="fourreau">Fourreau :</label>
      <select name="fourreau" value="">
        <option value="">---Choisir---</option>
        <option value="Nintendo" <?php if (!empty($_POST['fourreau']) && $_POST['fourreau'] === 'Nintendo') { echo 'selected'; } ?>>Nintendo</option>
        <option value="Black" <?php if (!empty($_POST['fourreau']) && $_POST['fourreau'] === 'Black') { echo 'selected'; } ?>>Black</option>
        <option value="Absent" <?php if (!empty($_POST['fourreau']) && $_POST['fourreau'] === 'Absent') { echo 'selected'; } ?>>Absent</option>
        <option value="Non Concerné" <?php if (!empty($_POST['fourreau']) && $_POST['fourreau'] === 'Non Concerné') { echo 'selected'; } ?>>Non concerné</option>
      </select><br>
      <div class="spacer"></div>
      <span class="error"><?php if (!empty($error['fourreau'])) { echo ($error['fourreau']); } ?></span><br />

      <label class="intitule" for="cale">Cale :</label>
      <select name="cale" value="">
        <option value="">---Choisir---</option>
        <option value="Present" <?php if (!empty($_POST['cale']) && $_POST['cale'] === 'Present') { echo 'selected'; } ?>>Present</option>
        <option value="Absent" <?php if (!empty($_POST['cale']) && $_POST['cale'] === 'Absent') { echo 'selected'; } ?>>Absent</option>
        <option value="Reproduction" <?php if (!empty($_POST['cale']) && $_POST['cale'] === 'Reproduction') { echo 'selected'; } ?>>Reproduction</option>
        <option value="Non Concerné" <?php if (!empty($_POST['cale']) && $_POST['cale'] === 'Non Concerné') { echo 'selected'; } ?>>Non concerné</option>
      </select><br>
      <div class="spacer"></div>
      <span class="error"><?php if (!empty($error['cale'])) { echo ($error['cale']); } ?></span><br />

      <label class="intitule" for="note">Note :</label><br>
      <textarea name="note" rows="4" cols="21" placeholder="Note"></textarea><br>

      <div class="btn">
        <input type="submit" name="submit" value="Enregistrer">
      </div>

    </form>
  </div>
<?php } ?>

<?php include 'include/footer.php'; ?>
