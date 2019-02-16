<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Eirb Pétitions</a>
    </div>
    <div class="navbar-collapse collapse navbar-right">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Accueil</a></li>
        <li><a href="create_petition.php">Lancer une pétition</a></li>
        <li><a href="menu_petitions.php">Parcourir les pétitions</a></li>
        <?php
    if(ISSET($_SESSION['firstName']))
    {
  ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['firstName']; ?> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="profil.php">Profil</a></li>
            <li><a href="deconnexion.php">Déconnexion</a></li>
          </ul>
        </li>
        <?php
  }
    else
    {
        ?>
        <li><a href="connexion.php">Se connecter</a></li>
        <?php
  }
  ?>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
