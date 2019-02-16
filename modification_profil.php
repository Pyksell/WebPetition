<?php
	session_start();

	include("functions.php");

	$user = userinfo($_SESSION['mail']);
	if(ISSET($_POST['firstName'], $_POST['lastName'], $_POST['alias'])){
		updateuser($user['ID'], htmlspecialchars($_POST['firstName']), htmlspecialchars($_POST['lastName']),htmlspecialchars($_POST['alias']));
		$_SESSION['firstName'] = $_POST['firstName'];
		if(ISSET($_POST['password'])){
			$string = "Xx" . $user['mailAddress'] . "eirbdu33lolilol" . $_POST['password'];
			$password = hash("sha256",$string);
			updatepassword($user['ID'], $password);
		}
		header('location: profil.php');
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
               <h1>Modifier mon profil</h1>
           </div>
					 <div class="col-lg-offset-3 col-lg-1">
						 <a href="profil.php"><button type="button">Retourner sur mon profil</button></a>
					 </div>
         </div> <!-- row -->
         <!-- ___________________________________________________ -->
<form method="POST" action="modification_profil.php">
				 <div class="row profil_category">
           <div class="col-lg-2 col-lg-offset-2">
             <h3>Perso :</h3>
           </div>
           <div class="col-lg-4 profil_content">
             <p>Nom : </p><input type="text" name="lastName" value="<?php echo $user['lastName'] ?>">
             <p>Prénom : </p><input type="text" name="firstName" value="<?php echo $user['firstName'] ?>">
             <p>Pseudo : </p><input type="text" name="alias" value="<?php echo $user['alias'] ?>">
           </div>
         </div> <!-- row -->
         <!-- __________________________________________________  -->
         <div class="row profil_category">
           <div class="col-lg-2 col-lg-offset-2">
             <h3>Sécurité :</h3>
           </div>
           <div class="col-lg-4 profil_content">
             <p>Mot de passe : </p><input type="password" name="password" placeholder="Mot de passe">
           </div>
         </div> <!-- row -->
				 <!-- _____________________________________________________ -->
				 <div class="row">
					 <div class="col-lg-offset-5 col-lg-2">
						 <br><input type="submit" value="Valider" name="valider">
					 </div>
				 </div>

</form>
       </div> <!-- /container -->

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
