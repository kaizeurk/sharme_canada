

		<!-- WRAPPER -->
		<div id="wrapper">

			<!-- PAGE TITLE -->
			<header id="page-title" class="nopadding">
				<div id="gma"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5591.008572846246!2d-73.50145506877239!3d45.52005668306728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91b375e56dee7%3A0x567cab844f52a624!2s1031+Rue+Albani%2C+Longueuil%2C+QC+J4K+1P8!5e0!3m2!1sen!2sca!4v1426288696593" width="1353" height="400" frameborder="0" style="border:0"></iframe><!-- google map --></div>
				<!-- <script type="text/javascript">
					var	$googlemap_latitude 	= -37.812344,
						$googlemap_longitude	= 144.968900,
						$googlemap_zoom			= 13;
				</script>-->
			</header>

			<section id="contact" class="container">


				<div class="row">

					<!-- FORM -->
					<div class="col-md-8">

						<h2>Laisser nous votre <strong><em>Message!</em></strong></h2>

						<!-- 
							if you want to use your own contact script, remove .hide class
						-->

						<!-- SENT OK -->
						<div id="_sent_ok_" class="alert alert-success fade in fsize16 hide">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Merci!</strong> Votre message a été envoyé avec succès!
						</div>
						<!-- /SENT OK -->

						<!-- SENT FAILED -->
						<div id="_sent_required_" class="alert alert-danger fade in fsize16 hide">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Failed!</strong> S'il vous plait veillez remplir tous les champs avec (*)!
						</div>
						<!-- /SENT FAILED -->

						<form id="contactForm" class="white-row" action="<?=$this->racineWeb ?>Contenu/Services/contact.php" method="post">
							<div class="row">
								<div class="form-group">
									<div class="col-md-4">
										<label>Nom *</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="contact_name" id="contact_name">
									</div>
									<div class="col-md-4">
										<label>Adresse courriel *</label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="contact_email" id="contact_email">
									</div>
									<div class="col-md-4">
										<label>Téléphone</label>
										<input type="text" value="" data-msg-required="Please enter your phone" data-msg-email="Please enter your phone" maxlength="100" class="form-control" name="contact_phone" id="contact_phone">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>Subject</label>
										<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="contact_subject" id="contact_subject">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>Message *</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="contact_message" id="contact_message"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">

									<span class="pull-right"><!-- captcha -->
										<label class="block text-right fsize12">Antispam Code</label>
										<img alt="" rel="nofollow,noindex" width="50" height="18" src="<?=$this->racineWeb ?>Contenu/Services/captcha.php?bgcolor=ffffff&amp;txtcolor=000000') }}">
										<input type="text" name="contact_captcha" id="contact_captcha" value="" data-msg-required="Please enter the subject." maxlength="6" style="width:100px; margin-left:10px;">
									</span>

									<input id="contact_submit" type="submit" value="Envoyer" class="btn btn-primary btn-lg" data-loading-text="Loading...">
								</div>
							</div>
						</form>
					
					</div>
					<!-- /FORM -->


					<!-- INFO -->
					<div class="col-md-4">

						<h2>Visit Us</h2>

						<p>
							Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.
						</p>

						<div class="divider half-margins"><!-- divider -->
							<i class="fa fa-star"></i>
						</div>

						<p>
							<span class="block"><strong><i class="fa fa-map-marker"></i> Adresse:</strong>1031 Rue Albani - J4K 1P8</span>
							<span class="block"><strong><i class="fa fa-phone"></i> Phone:</strong> Phone: + 1 514-531-3057</span>
							<span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:mail@yourdomain.com">sharmecanada@gmail.com</a></span>
						</p>

						<div class="divider half-margins"><!-- divider -->
							<i class="fa fa-star"></i>
						</div>

						<h4 class="font300">Business Hours</h4>
						<p>
							<span class="block"><strong>Monday - Friday:</strong> 10am to 6pm</span>
							<span class="block"><strong>Saturday:</strong> 10am to 2pm</span>
							<span class="block"><strong>Sunday:</strong> Closed</span>
						</p>

					</div>
					<!-- /INFO -->

				</div>

			</section>

		</div>
		<!-- /WRAPPER -->