<?php
	session_start();

	include("functions.php");

	$user = userinfo($_SESSION['mail']);

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
		<link href="assets/css/profil.css" rel="stylesheet">

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

    <!-- *****************************************    BARRE DE NAVIGATION    ************************************************ -->
	<?php include("navbar.php"); ?>	


	<!-- *****************************************    CORPS DE LA PAGE    ************************************************ -->
   <div id="profil_">
       <div class="container-fluid">
         <div class="row" id="profil_title">
           <div class="col-lg-4 col-lg-offset-4">
               <h1>Profil</h1>
           </div>
					 <div class="col-lg-offset-3 col-lg-1">
						 <a href="modification_profil.php"><button type="button">Modifier mon profil</button></a>
					 </div>
         </div> <!-- row -->
         <!-- ___________________________________________________ -->
         <div class="row profil_category">
           <div class="col-lg-offset-3 col-lg-6 profil_content">
             <p>Nom : <?php echo $user['lastName'] ?></p>
             <p>Prénom : <?php echo $user['firstName'] ?></p>
             <p>Pseudo : <?php echo $user['alias'] ?></p>
						 <p>Adresse mail : <?php echo $user['mailAddress'] ?></p>
           </div>
         </div> <!-- row -->

	 <div class="row profil_category">
			<div class="col-lg-6 col-lg-offset-3">
				<h3>Pétitions signées</h3>
				<?php
					$ID_petitions_signees = ID_signed_petitions($user['ID']);
					foreach($ID_petitions_signees as $ID){
						//Aller chercher les infos d'une pétition et afficher les différents champs dans un jolie rectangle
						$petition = petitioninfo($ID);
						echo "<div class=\"floating-box\">
						<h4 class = \"petition_title\" >" . $petition['title'] . "</h4>
						<p> ". $petition['description'] ." </p>
						<p> Nombre de signatures : " . $petition['nbOfSignature'] . "</p>
						</div>";
					}
				 ?>
			</div>
	 </div><!-- row -->

	<div class="row profil_category">
		 <div class="col-lg-6 col-lg-offset-3">
			 <h3>Pétitions créées</h3>
			 <?php
				 $ID_petitions_crees = ID_created_petitions($user['ID']);
				 foreach($ID_petitions_crees as $ID){
					 //Aller chercher les infos d'une pétition et afficher les différents champs dans un jolie rectangle
					 $petition = petitioninfo($ID);
					 echo "<div class=\"floating-box\">
					 <h4 class = \"petition_title\" >" . $petition['title'] . "</h4>
					 <p> ". $petition['description'] ." </p>
					 <p> Nombre de signatures : " . $petition['nbOfSignature'] . "</p>
					 </div>";
				 }
				?>
		 </div>
	</div><!-- row -->
	</div><!-- container -->

	</div><!-- /headerwrap -->




	<!-- *****************************************    BAS DE LA PAGE    ************************************************ -->
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
