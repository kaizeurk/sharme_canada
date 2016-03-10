<?php ?>

		<!-- WRAPPER -->
		<div id="wrapper">

			<div id="shop">

				<!-- PAGE TITLE -->
				<header id="page-title">
					<div class="container">
						<h1>Sign UP</h1>

						<ul class="breadcrumb">
							<li><a href="<?= $this->racineWeb ?>">Home</a></li>
							<li class="active">Sign UP</li>
						</ul>
					</div>
				</header>


				<section class="container">

					<div class="row">

						<!-- REGISTER -->
						<div class="col-md-6">

							<h2>Create <strong>Account</strong></h2>
							<form class="white-row" method="post" action="inscrire">

								<!-- alert failed -->
								<div class="alert alert-danger">
									<i class="fa fa-frown-o"></i> 
									<strong>Password</strong> do not match!
								</div>

								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>E-mail Address</label>
											<input name="courriel" type="text" required class="form-control">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
										    <label>Nom</label>
											<input name="nom" required class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
     									<label class="col-sm-4 col-md-12 control-label">Prénom</label>
										<div class="col-md-12">
											<input name="prenom" required type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
							        <div class="form-group">
							            <label class="col-sm-4 col-md-12 control-label">Adresse</label>
							            <div class="col-md-12">
							                <input name="address" type="text" class="form-control" value="">
							            </div>
							        </div>
							    </div>
								<div class="row">
							        <div class="form-group">
							            <label class="col-sm-4 col-md-12 control-label">Code postal</label>
							            <div class="col-md-12">
							                <input name="codePostal" type="text" class="form-control" value="">
							            </div>
							        </div>
							    </div>
								<div class="row">
							        <div class="form-group">
							            <label class="col-md-12 control-label">Ville</label>
							            <div class="col-md-12">
							                <input name="ville" type="text" class="form-control" value="">
							            </div>
							        </div>
							    </div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Password</label>
											<input name="mdp" type="password" required class="form-control">
										</div>
										<div class="col-md-6">
											<label>Re-enter Password</label>
											<input name="mdp" type="password" required class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Sign Up" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
									</div>
								</div>

							</form>

						</div>
						<!-- /REGISTER -->

						<!-- WHY? -->
						<div class="col-md-6">

							<h2>Why to register?</h2>

							<div class="white-row">

								<h4>Registration is fast, easy, and free.</h4>

								<p>Once you're registered, you can:</p>
								<ul class="list-icon check">
									<li>Buy, sell, and interact with other members.</li>
									<li>Save your favorite searches and get notified.</li>
									<li>Watch the status of up to 200 items.</li>
									<li>View your Atropos information from any computer in the world.</li>
									<li>Connect with the Atropos community.</li>
								</ul>

								<hr class="half-margins" />

								<p>
									Already have an account?
									<a href="<?= $this->racineWeb ?>connexion">Click to Sign In</a>
								</p>
							</div>

							<div class="white-row">
								<h4>Contact Customer Support</h4>
								<p>
									If you're looking for more help or have a question to ask, please <a href="contact-us.html">contact us</a>.
								</p>
							</div>

						</div>
						<!-- /WHY? -->

					</div>

				</section>

			</div>
		</div>
		<!-- /WRAPPER -->