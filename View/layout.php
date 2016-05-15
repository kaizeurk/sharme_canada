<?php include_once 'View/_Commun/partialInit.php'; ?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Sharme Canada</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />
		
		<!-- ICON -->
        <link rel="shortcut icon" href="<?=$racineWebFront ?>Contenu/assets/images/icon/canada-qc.png">

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		<!-- WEB FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<?php include_once 'View/_Commun/cssPartial.php';?>

            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/plugins/modernizr.min.js"></script>

	</head>
	<body><!-- Available classes for body: boxed , pattern1...pattern10 . Background Image - example add: data-background="assets/images/boxed_background/1.jpg"  -->

		<!-- Top Bar -->
		<header id="topHead">
			<div class="container">

				<!-- PHONE/EMAIL -->
				<span class="quick-contact pull-left">
					<i class="fa fa-phone">+ 1 514-531-3057</i> 
				</span>
				<!-- /PHONE/EMAIL -->

				<!-- LANGUAGE -->
				<div class="btn-group pull-right hidden-xs">
					<button class="dropdown-toggle language" type="button" data-toggle="dropdown">
                        <?php include_once 'View/_Commun/changelanguage.php'; ?>
					</button>

					<ul class="dropdown-menu">
						<li>
							<a id="idEn" href="#">
                                <img src="<?=$racineWebFront ?>Contenu/assets/images/flags/us.png" width="16" height="11" alt="EN Language" /> [US] English
							</a>
						</li>
						<li>
							<a id="idFr" href="#">
								<img src="<?=$racineWebFront ?>Contenu/assets/images/icon/canada_ico.png" width="16" height="11" alt="FR Language" /> [FR] French
							</a>
						</li>
					</ul>
				</div>
				<!-- /LANGUAGE -->
                        
				       <?php if (!isset($member)): ?>
				<!-- Se connecter -->
				<div class="pull-right nav signin-dd">
					<a id="quick_sign_in" href="<?=$racineWebFront ?>connexion/" data-toggle="dropdown"><i class="fa fa-users"></i><span class="hidden-xs"><?php echo $lang['MENU_CONNEXION'][$langId] ?></span></a>
					<div class="dropdown-menu" role="menu" aria-labelledby="quick_sign_in">

						<h4><a href="<?=$racineWebFront ?>connexion/"><?php echo $lang['MENU_CONNEXION'][$langId] ?></a></h4>
						<form action="<?=$racineWebFront ?>connexion/connecter/" method="post" role="connecter">

							<div class="form-group"><!-- email -->
								<input required type="email" name="courriel" class="form-control" placeholder="Username or email">
							</div>

							<div class="input-group">

								<!-- password -->
								<input required  name="mdp" type="password" class="form-control" placeholder="Password">

								<!-- submit button -->
								<span class="input-group-btn">
									<button class="btn btn-primary"><?php echo $lang['MENU_CONNEXION'][$langId] ?></button>
								</span>

							</div>

							<div class="checkbox"><!-- remmember -->
								<label>
									<input type="checkbox"> se rappeller de moi &bull; <a href="connexion/">Mot de passe oubli&#233;?</a>
								</label>
							</div>

						</form>

						<hr />

						<a href="#" class="btn-facebook fullwidth radius3"><i class="fa fa-facebook"></i> Connect With Facebook</a>
						<a href="#" class="btn-twitter fullwidth radius3"><i class="fa fa-twitter"></i> Connect With Twitter</a>
						<!--<a href="#" class="btn-google-plus fullwidth radius3"><i class="fa fa-google-plus"></i> Connect With Google</a>-->

						<p class="bottom-create-account">
							<a href="<?=$racineWebFront ?>connexion/signup">Cr&#233;er manuellement votre compte</a>
						</p>
					</div>
				</div>
				<!-- /Se déconnecter -->
				       <?php else: ?>
                           <div class="pull-right nav"><?=$lang['WELCOME'][$langId] ?>, <a id="info_member" href="<?=$racineWebFront ?>member/" data-toggle="dropdown"><?= $this->clean($member['firstname']) ?></a>
                              <div class="dropdown-menu" role="menu" aria-labelledby="info_member">
						         <h4><a href="<?=$racineWebFront ?>member/">Informations personnelles</a></h4>
                              	 
                              </div>
                              &nbsp;<a href="<?=$racineWebFront ?>connexion/disconnect"><?php echo $lang['MENU_DISCONNECT'][$langId] ?></a>
                           </div>
                       <?php endif ?>

				<!-- CART MOBILE BUTTON -->
				<!--  a class="pull-right" id="btn-mobile-quick-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a-->
				<!-- CART MOBILE BUTTON -->

				<!-- LINKS --
				<div class="pull-right nav hidden-xs">
					<a href="{{ path('sharmecanadaplatform_about') }}"><i class="fa fa-angle-right"></i> Apropos</a>
					<a href="{{ path('sharmecanadaplatform_contact') }}"><i class="fa fa-angle-right"></i> Contact</a>
				</div>
				<!-- /LINKS -->

			</div>
		</header>
		<!-- /Top Bar -->

		<!-- TOP NAV -->
		<header id="topNav" class="topHead"><!-- remove class="topHead" if no topHead used! -->
			<div class="container">

				<!-- Mobile Menu Button -->
				<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
					<i class="fa fa-bars"></i>
				</button>

				<!-- Logo text or image -->
				<a class="logo" href="<?=$racineWebFront ?>">
					SH<img src="<?=$racineWebFront ?>Contenu/assets/images/icon/canada-qc.png" alt="SHARME"/>RME CANADA
				</a>

				<!-- Top Nav -->
				<div class="navbar-collapse nav-main-collapse collapse pull-right">
                      <?php include_once 'View/_Commun/navBar.php'; ?>
				</div>
				<!-- /Top Nav -->

			</div>
		</header>

		<!-- body -->
		<div id="wrapper" class = "body">
           <?= $contenu ?>
		<!-- body -->
		<!-- body --><!-- body -->

		<!-- body --><!-- body -->
		<!-- body -->

		</div>
		<!-- fin body -->
<!-- FOOTER -->
		<footer>

			<!-- copyright , scrollTo Top -->
			<div class="footer-bar">
				<div class="container">
					<span class="copyright">Copyright &copy; Your Company, LLC . All Rights Reserved.</span>
					<a class="toTop" href="#topNav">Retournez au d&#233;but <i class="fa fa-arrow-circle-up"></i></a>
				</div>
			</div>
			<!-- copyright , scrollTo Top -->


			<!-- footer content -->
			<div class="footer-content">
				<div class="container">

					<div class="row">


						<!-- FOOTER CONTACT INFO -->
						<div class="column col-md-4">
							<h3>CONTACT</h3>

							<p class="contact-desc">
								Sharme Canada est une association &#224; but non lucratif qui &#156;uvre pour rendre les premiers jours des nouveaux arriv&#233;&#233;es aux Canada plus agr&#233;able afin de faciliter leur int&#233;gration.
							</p>
							<address class="font-opensans">
								<ul>
									<li class="footer-sprite address">
										Ceci est une adresse temporaire<br />
										1031 Rue Albani - J4K 1P8<br />
									</li>
									<li class="footer-sprite phone">
										Phone: + 1 514-531-3057
									</li>
									<li class="footer-sprite email">
										<a href="mailto:sharmecanada@gmail.com">sharmecanada@gmail.com</a>
									</li>
								</ul>
							</address>

						</div>
						<!-- /FOOTER CONTACT INFO -->


						<!-- FOOTER LOGO -->
						<div class="column logo col-md-4 text-center">
							<div class="logo-content">
								<img class="animate_fade_in" src="<?=$racineWebFront ?>Contenu/assets/images/icon/logo2.png" width="200" alt="" />
								<h4>SHARME CANADA</h4>
							</div>
						</div>
						<!-- /FOOTER LOGO -->


						<!-- FOOTER LATEST POSTS -->
						<div class="column col-md-4 text-right">
							<h3>DERNIERES ACTIVITES</h3>

							<div class="post-item">
								<small>JANUARY 2, 2014 BY ADMIN</small>
								<h3><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h3>
							</div>
							<div class="post-item">
								<small>JANUARY 2, 2014 BY ADMIN</small>
								<h3><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h3>
							</div>
							<div class="post-item">
								<small>JANUARY 2, 2014 BY ADMIN</small>
								<h3><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h3>
							</div>

							<a href="blog-masonry-sidebar.html" class="view-more pull-right">View Blog <i class="fa fa-arrow-right"></i></a>

						</div>
						<!-- /FOOTER LATEST POSTS -->

					</div>

				</div>
			</div>
			<!-- footer content -->

		</footer>
		<!-- /FOOTER -->



		<!-- JAVASCRIPT FILES -->
            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/plugins/jquery-2.1.3.min.js"></script>
            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/plugins/jquery.easing.1.3.js"></script>
            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/plugins/jquery.cookie.js"></script>
            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/plugins/jquery.appear.js"></script>
            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/plugins/jquery.isotope.js"></script>
            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/plugins/masonry.js"></script>


            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/plugins/stellar/jquery.stellar.min.js"></script>
            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/plugins/knob/js/jquery.knob.js"></script>
            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/plugins/jquery.backstretch.min.js"></script>
            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/plugins/superslides/dist/jquery.superslides.min.js"></script>
            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/plugins/styleswitcher/styleswitcher.js"></script>

            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/plugins/mediaelement/build/mediaelement-and-player.min.js"></script>


            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/plugins/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/plugins/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/js/slider_revolution.js"></script>

            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/js/scripts.js"></script>
            <script type="text/javascript" src="<?=$racineWebFront ?>Contenu/assets/js/languageAjax.js"></script>



		<!-- REVOLUTION SLIDER -->



		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
		<!--<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-XXXXX-X', 'domainname.com');
			ga('send', 'pageview');
		</script>
		-->

	</body>
</html>
