<?php
	session_start();

	include("functions.php");
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
    <link href="assets/css/index.css" rel="stylesheet">

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
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h3>Le site de pétitions n°1 à Bordeaux</h3>
					<h1>Bienvenue sur Eirb Pétitions</h1>
					<h5>Grâce à cette plateforme innovante, vous pouvez agir de chez vous sur le monde qui vous entoure.</h5>
					<h5>N'attendez plus, agissez !</h5>
				</div>
				<div class="col-lg-8 col-lg-offset-2 himg">
					<img src="assets/img/browser.jpg" class="img-responsive">
				</div>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->

	<!-- *****************************************************************************************************************
	 SERVICE LOGOS
	 *****************************************************************************************************************
	 <div id="service">
	 	<div class="container">
 			<div class="row centered">
 				<div class="col-md-4">
 					<i class="fa fa-heart-o"></i>
 					<h4>Handsomely Crafted</h4>
 					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
 					<p><br/><a href="#" class="btn btn-theme">More Info</a></p>
 				</div>
 				<div class="col-md-4">
 					<i class="fa fa-flask"></i>
 					<h4>Retina Ready</h4>
 					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
 					<p><br/><a href="#" class="btn btn-theme">More Info</a></p>
 				</div>
 				<div class="col-md-4">
 					<i class="fa fa-trophy"></i>
 					<h4>Quality Theme</h4>
 					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
 					<p><br/><a href="#" class="btn btn-theme">More Info</a></p>
 				</div>
	 		</div>
	 	</div>
	 </div>
		-->
	<!-- *****************************************************************************************************************
	 PORTFOLIO SECTION
	 ***************************************************************************************************************** -->
	 <div id="portfoliowrap">
        <h3>Catégories</h3>

        <div class="portfolio-centered">
            <div class="recentitems portfolio">
				<div class="portfolio-item graphic-design">
					<div class="he-wrap tpl6">
					<img src="assets/img/portfolio/culture.jpg" alt="">
						<div class="he-view">
							<a href="category.php?cat=culture">
							<div class="bg a0" data-animate="fadeIn">
                                <h3 class="a1" data-animate="fadeInDown">CULTURE</h3>
                                <!--<a data-rel="prettyPhoto" href="assets/img/portfolio/culture.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>-->
                        	</div><!-- he bg -->
                        	</a>
						</div><!-- he view -->
					</div><!-- he wrap -->
				</div><!-- end col-12 -->

                <div class="portfolio-item web-design">
                    <div class="he-wrap tpl6">
					<img src="assets/img/portfolio/economie.jpg" alt="">
						<div class="he-view">
							<a href="category.php?cat=economie">
							<div class="bg a0" data-animate="fadeIn">
                                <h3 class="a1" data-animate="fadeInDown">ECONOMIE</h3>
                                <!--<a data-rel="prettyPhoto" href="assets/img/portfolio/economie.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>-->
                        	</div><!-- he bg -->
                        	</a>
						</div><!-- he view -->
					</div><!-- he wrap -->
				</div><!-- end col-12 -->

                <div class="portfolio-item graphic-design">
                    <div class="he-wrap tpl6">
					<img src="assets/img/portfolio/environnement.jpg" alt="">
						<div class="he-view">
							<a href="category.php?cat=environnement">
							<div class="bg a0" data-animate="fadeIn">
                                <h3 class="a1" data-animate="fadeInDown">ENVIRONNEMENT</h3>
                                <!--<a data-rel="prettyPhoto" href="assets/img/portfolio/environnement.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>-->
                        	</div><!-- he bg -->
                        	</a>
						</div><!-- he view -->
					</div><!-- he wrap -->
				</div><!-- end col-12 -->

                <div class="portfolio-item graphic-design">
                    <div class="he-wrap tpl6">
					<img src="assets/img/portfolio/international.jpg" alt="">
						<div class="he-view">
							<a href="category.php?cat=international">
							<div class="bg a0" data-animate="fadeIn">
                                <h3 class="a1" data-animate="fadeInDown">INTERNATIONAL</h3>
                                <!--<a data-rel="prettyPhoto" href="assets/img/portfolio/international.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>-->
                        	</div><!-- he bg -->
                        	</a>
						</div><!-- he view -->
					</div><!-- he wrap -->
				</div><!-- end col-12 -->

                <div class="portfolio-item books">
                    <div class="he-wrap tpl6">
					<img src="assets/img/portfolio/justice.jpg" alt="">
						<div class="he-view">
							<a href="category.php?cat=justice">
							<div class="bg a0" data-animate="fadeIn">
                                <h3 class="a1" data-animate="fadeInDown">JUSTICE</h3>
                                <!--<a data-rel="prettyPhoto" href="assets/img/portfolio/justice.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>-->
                        	</div><!-- he bg -->
                        	</a>
						</div><!-- he view -->
					</div><!-- he wrap -->
				</div><!-- end col-12 -->

                <div class="portfolio-item graphic-design">
                    <div class="he-wrap tpl6">
					<img src="assets/img/portfolio/politique.jpg" alt="">
						<div class="he-view">
							<a href="category.php?cat=politique">
							<div class="bg a0" data-animate="fadeIn">
                                <h3 class="a1" data-animate="fadeInDown">POLITIQUE</h3>
                                <!--<a data-rel="prettyPhoto" href="assets/img/portfolio/politique.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>-->
                        	</div><!-- he bg -->
                        	</a>
						</div><!-- he view -->
					</div><!-- he wrap -->
				</div><!-- end col-12 -->

                <div class="portfolio-item books">
                    <div class="he-wrap tpl6">
					<img src="assets/img/portfolio/sante.jpg" alt="">
						<div class="he-view">
							<a href="category.php?cat=sante">
							<div class="bg a0" data-animate="fadeIn">
                                <h3 class="a1" data-animate="fadeInDown">SANTE</h3>
                                <!--<a data-rel="prettyPhoto" href="assets/img/portfolio/sante.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>-->
                        	</div><!-- he bg -->
                        	</a>
						</div><!-- he view -->
					</div><!-- he wrap -->
				</div><!-- end col-12 -->

                <div class="portfolio-item graphic-design">
                    <div class="he-wrap tpl6">
					<img src="assets/img/portfolio/sciences.jpg" alt="">
						<div class="he-view">
							<a href="category.php?cat=sciences">
							<div class="bg a0" data-animate="fadeIn">
                                <h3 class="a1" data-animate="fadeInDown">SCIENCES</h3>
                                <!--<a data-rel="prettyPhoto" href="assets/img/portfolio/sciences.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>-->
                        	</div><!-- he bg -->
                        	</a>
						</div><!-- he view -->
					</div><!-- he wrap -->
				</div><!-- end col-12 -->

                <div class="portfolio-item web-design">
                    <div class="he-wrap tpl6">
					<img src="assets/img/portfolio/sport.jpg" alt="">
						<div class="he-view">
							<a href="category.php?cat=sport">
							<div class="bg a0" data-animate="fadeIn">
                                <h3 class="a1" data-animate="fadeInDown">SPORT</h3>
                                <!--<a data-rel="prettyPhoto" href="assets/img/portfolio/portfolio_01.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>-->
                        	</div><!-- he bg -->
                        	</a>
						</div><!-- he view -->
					</div><!-- he wrap -->
				</div><!-- end col-12 -->

			<div class="portfolio-item books">
                <div class="he-wrap tpl6">
					<img src="assets/img/portfolio/family.jpg" alt="">
						<div class="he-view">
							<a href="category.php?cat=viequot">
							<div class="bg a0" data-animate="fadeIn">
                                <h3 class="a1" data-animate="fadeInDown">VIE QUOTIDIENNE</h3>
                                <!--<a data-rel="prettyPhoto" href="assets/img/portfolio/portfolio_10.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>-->
                        	</div><!-- he bg -->
                        	</a>
						</div><!-- he view -->
					</div><!-- he wrap -->
				</div><!-- end col-12 -->

            </div><!-- portfolio -->
        </div><!-- portfolio container -->
	 </div><!--/Portfoliowrap -->


	<!-- *****************************************************************************************************************
	 MIDDLE CONTENT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-4 col-lg-offset-1">
		 		<h4>En savoir plus</h4>
		 		<p>Notre société permet aux citoyens du monde de s'adresser au plus grand nombre à travers des pétitions sur tous les grands sujets d'actualité.</p>
 				<!--<p><br/><a href="about.html" class="btn btn-theme">More Info</a></p>-->
	 		</div>

	 		<div class="col-lg-3">
	 			<h4>FAQ</h4>
	 			<div class="hline"></div>
	 			<p><button type="button" onclick="alert('Les pétitions ne sont pas anonymes. Le nom du créateur est indiqué à côté de chaque pétition.')">Ma pétition est-elle anonyme ?</button></p>
				<p><button type="button" onclick="alert('Le service est totalement gratuit. Sauf pour M. Falleri.')">Le service est-il payant ?</button></p>
	 			<p><button type="button" onclick="alert('Toute personne se connectant au site peut voir votre pétition.')">Qui peut voir ma pétition ?</button></p>
	 			<p><button type="button" onclick="alert('Vous êtes obligés d'avoir une adresse mail pour vous inscrire.')">Comment créer une pétition sans mail ?</button></p>
				<p><button type="button" onclick="alert('Pour cela, veuillez nous contacter via l'adresse mail en bas du site.')">Comment annuler ma signature ?</button></p>
	 		</div>

	 		<div class="col-lg-3">
	 			<h4>Règles</h4>
	 			<div class="hline"></div>
	 			<p>Il est interdit de proférer des insultes.<p>
	 			<p>Les propos discriminatoires seront supprimés et les utilisateurs en question bannis.</p>
	 			<p>Soyez concis et concret.</p>
	 			<p>Concentrez-vous sur la (ou les) solution(s) et non sur la ou (les) plaintes.</p>
	 		</div>

	 	</div><! --/row -->
	 </div><! --/container -->

	<!-- *****************************************************************************************************************
	 TESTIMONIALS
	 ***************************************************************************************************************** -->
	 <div id="twrap">
	 	<div class="container centered">
	 		<div class="row">
	 			<div class="col-lg-8 col-lg-offset-2">
	 			<i class="fa fa-comment-o"></i>
	 			<p>Vous savez, moi je ne crois pas qu'il y ait de bonne ou de mauvaise situation. Moi, si je devais résumer ma vie aujourd'hui avec vous, je dirais que c'est d'abord des rencontres. Des gens qui m'ont tendu la main, peut-être à un moment où je ne pouvais pas, où j'étais seul chez moi. Et c'est assez curieux de se dire que les hasards, les rencontres forgent une destinée... Parce que quand on a le goût de la chose, quand on a le goût de la chose bien faite, le beau geste, parfois on ne trouve pas l'interlocuteur en face je dirais, le miroir qui vous aide à avancer. Alors ça n'est pas mon cas, comme je disais là, puisque moi au contraire, j'ai pu : et je dis merci à la vie, je lui dis merci, je chante la vie, je danse la vie... je ne suis qu'amour ! Et finalement, quand beaucoup de gens aujourd'hui me disent « Mais comment fais-tu pour avoir cette humanité ? », et bien je leur réponds très simplement, je leur dis que c'est ce goût de l'amour ce goût donc qui m'a poussé aujourd'hui à entreprendre une construction mécanique, mais demain qui sait ? Peut-être simplement à me mettre au service de la communauté, à faire le don, le don de soi...</p>
	 			<h4><br/>Maël Hamon</h4>
	 			<p>Vice directeur général des opérations commerciales</p>
	 			</div>
	 		</div><! --/row -->
	 	</div><! --/container -->
	 </div><! --/twrap -->

	<!-- *****************************************************************************************************************
	 OUR CLIENTS
	 ***************************************************************************************************************** -->
	 <div id="cwrap">
		 <div class="container">
		 	<div class="row centered">
			 	<h3>NOS PARTENAIRES</h3>
			 	<div class="col-lg-3 col-md-3 col-sm-3">
			 		<img src="assets/img/clients/google.png" class="img-responsive">
			 	</div>
			 	<div class="col-lg-3 col-md-3 col-sm-3">
			 		<img src="assets/img/clients/samsung.png" class="img-responsive">
			 	</div>
			 	<div class="col-lg-3 col-md-3 col-sm-3">
			 		<img src="assets/img/clients/heinz.svg" class="img-responsive">
			 	</div>
			 	<div class="col-lg-3 col-md-3 col-sm-3">
			 		<img src="assets/img/clients/microsoft.png" class="img-responsive">
			 	</div>
		 	</div><! --/row -->
		 </div><! --/container -->
	 </div><! --/cwrap -->




	<!-- *****************************************    BAS DE PAGE    ************************************************ -->
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
