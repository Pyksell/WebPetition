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
    <link href="assets/css/menu_petitions.css" rel="stylesheet">

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
    
    
    
    


	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>Parcourir les pétitions</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<!-- *****************************************************************************************************************
	 TITLE & CONTENT
	 ***************************************************************************************************************** -->

	 <div class="container mt">
	 	<div class="row">

      <div class="col-lg-8 col-lg-offset-2">
        <?php
          $ID_tab = ID_petitions();
          foreach($ID_tab as $ID){
            //Aller chercher les infos d'une pétition et afficher les différents champs dans un jolie rectangle
            $petition = petitioninfo($ID);
            $createur = petitionCreator($petition['creatorID']);
            echo "<div class=\"floating-box\">
            <h4 class = \"petition_title\" >" . $petition['title'] . "</h4>
            <p> ". $petition['description'] ." </p>
            <p> Nombre de signatures espérées : " . $petition['hopesign'] . "</p>
            <p> Nombre de signatures : " . $petition['nbOfSignature'] . "</p>
            <p> Catégorie : " . $petition['category'] . "</p>
            <p> Créateur : " . $createur['firstName'] . " " . $createur['lastName'] ."</p>
            <a href=\"signature.php?petition=" . $ID . "\"><button type=\"button\">Signer cette pétition</button></a>
            </div>";
          }
         ?>
      </div>


	 	</div><! --/row -->
	 </div><! --/container -->

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
