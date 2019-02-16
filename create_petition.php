<?php
session_start();
include("functions.php");
if(ISSET($_POST['title'], $_POST['description'], $_POST['category'])){
  addpetition(htmlspecialchars($_POST['title']), htmlspecialchars($_POST['category']), htmlspecialchars($_SESSION['ID']),htmlspecialchars('2017'), htmlspecialchars($_POST['hopesign']), htmlspecialchars($_POST['description']) );
  header('location: index.php');	
}
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


     <!-- Just for debugging purposes. Don't actually copy this line! -->
     <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
     <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

     <script src="assets/js/modernizr.js"></script>
   </head>

   <body>

     <!-- *****************************************    BARRE DE NAVIGATION     ************************************************ -->
     <?php include("navbar.php"); ?>
     
     
     
     <!-- *****************************************    CORPS DE LA PAGE     ************************************************ -->
   <div id="headerwrap">
       <div class="container-fluid">
         <div class="row">
           <div class="col-lg-4 col-lg-offset-4">
             <section>
    <?php
      if(ISSET($_SESSION['firstName'])) {
    ?>
        <h3> Créez votre pétition ci-dessous</h3>
        <form method="POST" action="create_petition.php" id="usrform">
          <input type="text" name="title" id="title" placeholder="Titre de votre pétition"><br><br>
          <h5>Choisissez votre catégorie :</h5>
		  <input type="radio" name="category" value="culture" checked> Culture        
		  <input type="radio" name="category" value="economie"> Economie
		  <input type="radio" name="category" value="environnement"> Environnement
		  <input type="radio" name="category" value="international"> International
		  <input type="radio" name="category" value="justice"> Justice
		  <input type="radio" name="category" value="politique"> Politique
		  <input type="radio" name="category" value="sante"> Santé
		  <input type="radio" name="category" value="sciences"> Sciences
		  <input type="radio" name="category" value="sciences"> Sports
		  <input type="radio" name="category" value="vie"> Vie quotidienne
          <br><br>
          <input type="text" name="hopesign" class="input" placeholder="Nombre de signatures espérées">
          <input type="submit" id="submit">
        </form>
        <br>
        <textarea rows="5" cols="60" name="description" form="usrform" placeholder="Tapez votre pétition ici..."></textarea>
    <?php }
    else {
      ?>
        <h3>Vous n'êtes pas connecté</h3>
        <h4>Pour vous connecter, cliquez <a href="connexion.php">ici</a></h4>
      <?php
    }
    ?>
            </section>
          </div>
        </div>
      </div>
   </div>



		<!-- *****************************************    BAS DE PAGE     ************************************************ -->
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
</script>
 </body>
 </html>
