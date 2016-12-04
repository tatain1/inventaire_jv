<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <title>Inventaire</title>
      <meta name="auteur" content="Kilian Mirail">
      <meta name="descrip" content="Outil de gestion d'inventaire de jeux video">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/font-awesome.css" media="screen" title="no title">
      <link rel="stylesheet" href="css/style.css">
  </head>
  <header>
    <section>
      <nav class="k_navbar navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Mon inventaire</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">
              <?php if (isLogged()) { ?>
              <li><a class="noPointer">Bienvenue <?php echo $_SESSION['user']['pseudo']; ?></a></li>
              <?php } ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-cogs" aria-hidden="true"></i>
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <?php if (isLogged()) { ?>
                  <li><a href="deconnexion.php">Deconnexion</a></li>
                  <?php } else { ?>
                  <li><a href="connexion.php">Connexion</a></li>
                  <li><a href="inscription.php">Inscription</a></li>
                  <?php } ?>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </section>
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
