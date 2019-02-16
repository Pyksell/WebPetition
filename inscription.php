<?php
session_start();

include("functions.php");
include("config.php");
//header("location: connexion.php");

/*if(ISSET($_POST['mail'])){
  header("location: connexion.php");
}*/

if(ISSET($_POST['mail'], $_POST['mdp'], $_POST['mdp2'], $_POST['firstName'], $_POST['lastName'], $_POST['alias'])){

  if(strcmp($_POST['mdp'],$_POST['mdp2'])==0){ //Les mots de passes correspondent
    $string = "Xx" . $_POST['mail'] . "eirbdu33lolilol" . $_POST['mdp'];
    if($password = hash("sha256",$string)){
      adduser(htmlspecialchars($_POST['firstName']), htmlspecialchars($_POST['lastName']),htmlspecialchars($_POST['alias']), htmlspecialchars($_POST['mail']),htmlspecialchars($password));
    }
    header('location: connexion.php');
  }
}
/*header('location : connexion.php');*/
 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>SOLID - Bootstrap 3 Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/inscription.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--<script src="assets/js/modernizr.js"></script>-->
  </head>

  <body>

    <!-- *****************************************    BARRE DE NAVIGATION    ************************************************ -->
    <?php include("navbar.php"); ?>


	<!-- *****************************************    CORPS DE LA PAGE    ************************************************ -->
	<div id="headerwrap">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-lg-offset-4">
            <section>
              <h3>Inscription</h3>
              <form method="POST" action="inscription.php" onsubmit="return verifForm(this)">
                <input type="text" name="mail" placeholder="Mail" onblur="verifMail(this)"><br>
                <input type="password" name="mdp" placeholder="Mot de passe" onblur="verifMDP(this)"><br>
                <input type="password" name="mdp2" placeholder="Mot de passe" onblur="verifMDP(this)"><br>
                <input type="text" name="lastName" placeholder="Nom"><br>
                <input type="text" name="firstName" placeholder="Prénom"><br>
                <!--<input type="text" name="mdp" placeholder="Adresse"><br>-->
                <input type="text" name="alias" placeholder="Pseudo"><br>
                <input type="submit" value="Valider" name="valider" class="submit">
              </form>
            </section>
          <!--  <p> -->
              <a class="inscription" href=connexion.php>
                Déjà inscrit ? Connecte-toi maintenant !
              </a>
          <!--  </p> -->
          </div>
        </div> <!-- row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->

	

	
	
	
	<!-- *****************************************    BAS DE LA PAGE   ************************************************ -->
	<?php include("footer.html"); ?>
	
	
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/retina-1.1.0.js"></script>
	<script src="assets/js/jquery.hoverdir.js"></script>
	<script src="assets/js/jquery.hoverex.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
  	<script src="assets/js/jquery.isotope.min.js"></script>
  	<script src="assets/js/custom.js"></script>


    <script>
// Portfolio
(function($) {
	"use strict";
	var $container = $('.portfolio'),
		$items = $container.find('.portfolio-item'),
		portfolioLayout = 'fitRows';

		if( $container.hasClass('portfolio-centered') ) {
			portfolioLayout = 'masonry';
		}

		$container.isotope({
			filter: '*',
			animationEngine: 'best-available',
			layoutMode: portfolioLayout,
			animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
		},
		masonry: {
		}
		}, refreshWaypoints());

		function refreshWaypoints() {
			setTimeout(function() {
			}, 1000);
		}

		$('nav.portfolio-filter ul a').on('click', function() {
				var selector = $(this).attr('data-filter');
				$container.isotope({ filter: selector }, refreshWaypoints());
				$('nav.portfolio-filter ul a').removeClass('active');
				$(this).addClass('active');
				return false;
		});

		function getColumnNumber() {
			var winWidth = $(window).width(),
			columnNumber = 1;

			if (winWidth > 1200) {
				columnNumber = 5;
			} else if (winWidth > 950) {
				columnNumber = 4;
			} else if (winWidth > 600) {
				columnNumber = 3;
			} else if (winWidth > 400) {
				columnNumber = 2;
			} else if (winWidth > 250) {
				columnNumber = 1;
			}
				return columnNumber;
			}

			function setColumns() {
				var winWidth = $(window).width(),
				columnNumber = getColumnNumber(),
				itemWidth = Math.floor(winWidth / columnNumber);

				$container.find('.portfolio-item').each(function() {
					$(this).css( {
					width : itemWidth + 'px'
				});
			});
		}

		function setPortfolio() {
			setColumns();
			$container.isotope('reLayout');
		}

		$container.imagesLoaded(function () {
			setPortfolio();
		});

		$(window).on('resize', function () {
		setPortfolio();
	});
})(jQuery);



function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifMDP(champ)
{
   if(champ.value.length < 6)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}


function verifForm(f)
{
   var mdpOk = verifMDP(f.mdp);
   var mdp2Ok = verifMDP(f.mdp2);
   var mailOk = verifMail(f.mail);
   
   if(mdpOk && mailOk && mdp2OK)
      return true;
   }
   else{
		alert("Veuillez remplir correctement tous les champs");
		return false;
   }
}


</script>
  </body>
</html>
