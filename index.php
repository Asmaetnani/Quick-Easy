<?php
session_start();
include 'db_function.php'; 
include 'function.php'; 
if (!isset($_SESSION['id'])) {
	header('Location: connexion.html'); 
        exit();
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="Q&E.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="Q&E.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	
		<title id="title">Quick&Easy</title>
	
	    <!-- meta tags that specify the theme color of a website for different browsers and platforms.-->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#4285f4">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#4285f4">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#4285f4">
	
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
		<!-- Font awesome CSS -->
		<link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
	
		<!--Font Awesome est une bibliothèque d'icônes populaires utilisées sur de nombreux sites web. Ces fichiers CSS contiennent les styles nécessaires pour afficher les icônes dans votre site web.-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/brands.css" integrity="sha384-n9+6/aSqa9lBidZMRCQHTHKJscPq6NW4pCQBiMmHdUCvPN8ZOg2zJJTkC7WIezWv" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/fontawesome.css" integrity="sha384-vd1e11sR28tEK9YANUtpIOdjGW14pS87bUBuOIoBILVWLFnS+MCX9T6MMf0VdPGq" crossorigin="anonymous">
	
		<link rel="stylesheet" type="text/css" href="styleIndex.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="js/backToTop.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-XX1TnTerni27xZC9XtT9/Q0pxBEC+yHljQ5NjCV+YbIz1TJpXTxkcugX9lWt76qr" crossorigin="anonymous">

         
	</head>
<body>
	<meta name="viewport" content="width=device-width">

	<a href="#" class="back-to-top"><img src="Back.png" alt="Back to Top"></a>
	
	<header class="header_section sticky front">
	  <div class="header_top">
		<div class="container-fluid">
		  <div class="top_nav_container">
			<div class="contact_nav">
			  <a href="mailto:contact@q&e.fr">
				<i class="fa fa-envelope" aria-hidden="true"></i>
				<span>
				  Email : contact@q&e.fr
				</span>
			  </a>
			</div>
			<div class="user_option_box">
			  <a href="profil.php" class="account-link">
				<i class="fa fa-user" aria-hidden="true"></i>
				<span>
				  My Account
				</span>
			  </a>
			  
			</div>
		  </div>
		</div>
	  </div>
	
	  <div class="header_bottom">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <a class="navbar-brand" href="index.php">
				<img id="Produtz_Hunt_cvn" src="Q&E2.jpg" alt="Quick&Easy">
			  </a>
		  
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item active">
					<a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="recette.php">Receipts</a>
				  </li>
		  
				  <li class="nav-item">
					<a class="nav-link" href="">Contact</a>
				  </li>
				</ul>
		  
				<div class="header_subscribe">
				  <a href="#" class="subscribe-btn">S'abonner</a>
				</div>
			  </div>
			</nav>
		  </div>
		  
	  </div>
	  
	</header>
	
	 <!-- slider section -->
	 <section class="slider_section ">
		<div id="customCarousel1" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <div class="container ">
				<div class="row">
				  <div class="col-md-6">
					<div class="detail-box">
					  <h1>
						Welcome to Quick&Easy
					  </h1>
					  <p>
						"Cuisine pour les Nuls" ! Ici, vous trouverez tout ce dont vous avez besoin pour commencer à cuisiner de délicieux plats, même si vous n'avez jamais touché un couteau de cuisine auparavant.
					  </p>
					  <a href="">
						Read More
					  </a>
					</div>
				  </div>
				  <div class="col-md-6">
					<div class="img-box">
					  <img src="1.png" alt="">
					</div>
				  </div>
				</div>
			  </div>
			</div>
			<div class="carousel-item">
			  <div class="container ">
				<div class="row">
				  <div class="col-md-6">
					<div class="detail-box">
					  <p>
						Nous croyons que la cuisine est accessible à tous, quel que soit votre niveau de compétence ou d'expérience. Que vous cherchiez des recettes simples pour les débutants ou des astuces pour impressionner vos invités, vous êtes au bon endroit.Nous croyons que la cuisine est accessible à tous, quel que soit votre niveau de compétence ou d'expérience. Que vous cherchiez des recettes simples pour les débutants ou des astuces pour impressionner vos invités, vous êtes au bon endroit.</p>
					  <a href="">
						Read More
					  </a>
					</div>
				  </div>
				  <div class="col-md-6">
					<div class="img-box">
					  <img src="2.png" alt="">
					</div>
				  </div>
				</div>
			  </div>
			</div>
			<div class="carousel-item">
			  <div class="container ">
				<div class="row">
				  <div class="col-md-6">
					<div class="detail-box">
					  <p>
						Notre objectif est de vous aider à découvrir le plaisir de cuisiner et à vous sentir à l'aise dans la cuisine. Alors, prenez votre tablier, préparez vos ingrédients et laissez-nous vous guider dans le monde merveilleux de la cuisine !
					  </p>
					  <a href="">
						Read More
					  </a>
					</div>
				  </div>
				  <div class="col-md-6">
					<div class="img-box">
					  <img src="3.png" alt="">
					</div>
				  </div>
				</div>
			  </div>
			</div>
			<div class="carousel_btn_box">
				<a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
				  <i class="fa fa-angle-left" aria-hidden="true"></i>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
				  <i class="fa fa-angle-right" aria-hidden="true"></i>
				  <span class="sr-only">Next</span>
				</a>
			  </div>
		  </div>
		  
		</div>
	</div>
	</section>
	<!-- end slider section -->


	<!-- why us section -->

  <section class="why_us_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Why Choose Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="perso.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Recettes personnalisées
              </h5>
              <p>
                Rechercher des recettes en fonction des ingrédients que vous avez déjà.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="s.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Recettes saines et équilibrées
              </h5>
              <p>
                Vous pouvez facilement trouver des recettes adaptées à votre régime alimentaire.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="claire.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
				Instructions claires et précises 
              </h5>
              <p>
                Suivre les instructions étape par étape et obtenir des résultats délicieux à chaque fois.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end why us section -->
  <!--subscribe start-->
  <section id="subscribe" class="subscribe">
	<div class="container">
	  <div class="subscribe-title text-center">
		<h2>Abonnez-vous à notre newsletter pour recevoir les dernières recettes</h2>
		<p>Inscrivez-vous maintenant pour ne rien manquer !</p>
	  </div>
	  <div class="row justify-content-center">
		<div class="col-md-6 col-sm-8">
		  <form>
			<div class="input-group">
			  <input type="email" class="form-control" placeholder="Enter your email">
			  <div class="input-group-append">
				<button class="btn btn-primary" type="submit">Subscribe</button>
			  </div>
			</div>
		  </form>
		</div>
	  </div>
	</div>
  </section>
  

<section class="temoignage" id="temoignage" style="background-color: #f4f2ee;">
	<div class="titre">
	  <h2 class="titre-texte" style="text-align: center; color: #834e02; text-transform: capitalize;">
		Que disent nos <span style="color: #ff8c00;">C</span>lients
	  </h2>
	  <p style="text-align: center;">Vous avez des doutes sur notre méthode de cuisine simplifiée pour débutants ? Écoutez ce que nos clients ont à dire !</p>
	</div>
	<div class="contenu">
	  <div class="box">
		<div class="imbox">
		  <img src="client3.png" alt="">
		</div>
		<div class="text">
		  <p>Je suis absolument ravi de ce site de cuisine pour les nuls ! J'ai appris à cuisiner des plats délicieux en un rien de temps, grâce aux instructions claires et simples</p>
		  <h3 style="color: #ff8c00;">Amir Khalil</h3>
		</div>
	  </div>
	  <div class="box">
		<div class="imbox">
		  <img src="client1.png" alt="">
		</div>
		<div class="text">
		  <p>Je suis une débutante en cuisine et j'ai trouvé ce site absolument parfait pour moi. Les recettes sont faciles à suivre et les instructions sont très claires </p>
		  <h3 style="color: #ff8c00;">Aylin Demir</h3>
		</div>
	  </div>
	  <div class="box">
		<div class="imbox">
		  <img src="client2.png" alt="">
		</div>
		<div class="text">
		  <p>Ce site m'a sauvé la vie ! Grâce à ses astuces simples et ses recettes faciles à suivre, j'ai enfin réussi à cuisiner des plats délicieux sans me sentir dépassé.</p>
		  <h3 style="color: #ff8c00;">Mei-Ling Wong</h3>
		</div>
	  </div>
	  <div class="box">
		<form action="#" method="POST" class="comment-form">
		  <div class="form-group">
			<input type="file" id="photo" name="photo">
		  </div>
		  <div class="form-group">
			<label for="name">Nom :</label>
			<input type="text" id="name" name="name">
		  </div>
		  <div class="form-group">
			<label for="comment">Commentaire :</label>
			<textarea name="comment" id="comment" cols="30" rows="3" placeholder="Laissez votre commentaire ici"></textarea>
		  </div>
		  <input type="submit" value="Envoyer">
		</form>
	  </div>
	</div>
  </section>



  
  
	

   
	 <hr>
	 <div class="foot-icons text-center">
	   <ul class="footer-social-links list-inline list-unstyled">
		 <li><a href="https://www.fb.com" target="_blank" class="foot-icon-bg-1"><i class="fa fa-facebook"></i></a></li>
		 <li><a href="https://www.twitter.com" target="_blank" class="foot-icon-bg-2"><i class="fa fa-twitter"></i></a></li>
		 <li><a href="https://www.instagram.com" target="_blank" class="foot-icon-bg-3"><i class="fa fa-instagram"></i></a></li>
		 <li><a href="mailto:contact@q&e.fr" class="foot-icon-bg-gmail" target="_blank"><i class="fa fa-envelope"></i></a></li>
	 
	   </ul>
	   <p>&copy; 2023 Q&E TEAM</a> </p>
	 </div>
	 <!--/.foot-icons-->
	 <div id="scroll-Top">
	   <i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
	 </div>
	 <!--/.scroll-Top-->
	 
				 </div><!-- /.container-->
	 
			 </footer><!-- /.footer-copyright-->
			 <!-- footer-copyright end -->
	 
	 
	   
			<!--bootstrap pour javascript: un framework front-end open-source qui offre des composants de design et des outils pour créer rapidement des sites web responsives et esthétiquement plaisants. -->
		   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		   <!-- bootsnav js permet de créer facilement une barre de navigation responsive pour les sites web. -->
			 <script src="js/bootsnav.js"></script>
	 
			 <!--jquery-ui.min.js fournit des fonctionnalités telles que des animations, des effets visuels, des widgets, 
				 des interactions glisser-déposer, etc. pour rendre les sites Web plus interactifs et conviviaux-->
				 <script src="js/jquery-ui.min.js"></script>
	 
				 <!--owl.carousel.js créer des carrousels (slideshows) personnalisables pour afficher des images ou du contenu HTML-->
				 <script src="js/owl.carousel.min.js"></script>
		 
				 <!-- jquery.sticky.js rendre un élément (comme un menu de navigation) collant/fixed sur la page, même lorsqu'on fait défiler la page.-->
				 <script src="js/jquery.sticky.js"></script>
	 
		   <!-- jQuery pour certains de ses composants, comme les menus déroulants et les modals.-->
		   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		   
</body>
</html>
