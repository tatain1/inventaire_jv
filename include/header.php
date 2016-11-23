<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <title>Inventaire</title>
      <meta name="auteur" content="Kilian Mirail">
      <meta name="descrip" content="Description du ">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/style.css">
  </head>
  <header>
    <section> <!-- second menu avec deroulant -->
      <ul id="menu">
        <li>
          <a href="index.php">Accueil</a>
        </li>
        <li>
          <a href="#">Consulter</a>
          <ul>
            <li><a href="general.php">Tout</a></li>
            <li><a href="gamecube.php">GameCube</a></li>
            <li><a href="#">GameBoy</a></li>
            <li><a href="nes.php">NES</a></li>
            <li><a href="#">SNES</a></li>
            <li><a href="n64.php">N64</a></li>
            <li><a href="#">Autre</a></li>
          </ul>
        </li>
        <li>
          <a href="ajout.php">Ajouter un jeu</a>
        </li>
      </ul>
    </section>
    <div class="spacer"></div>

    <!-- =================================CARROUSSEL================================
    https://openclassrooms.com/courses/un-site-web-dynamique-avec-jquery/manipuler-le-code-html-avec-jquery -->
        <div id="carrousel">
          <ul>
            <li><img src="image/1.jpg" /></li>
        	  <li><img src="image/2.jpg" /></li>
            <li><img src="image/3.jpg" /></li>
            <li><img src="image/2.jpg" /></li>
          </ul>
        </div>
  </header>
  <body>
