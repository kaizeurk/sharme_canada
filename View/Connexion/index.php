<?php $this->title = "Connexion"; ?>

<?php if (isset($msgErreur)) : ?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Erreur !</strong> <?= $this->clean($msgErreur) ?>
    </div>
<?php endif; ?>

	<div id="shop">

		<!-- PAGE TITLE -->
		<header id="page-title">
			<div class="container">
				<h1>Sign In</h1>

				<ul class="breadcrumb">
					<li><a href="<?= $this->racineWebFront ?>">Home</a></li>
					<li class="active">Sign In</li>
				</ul>
			</div>
		</header>


		<section class="container">

			<div class="row">
              <?php if(!isset($msgGod)) :?>
				<!-- LOGIN -->
				<div class="col-md-6">

					<h2>Sign <strong>In</strong></h2>

					<form class="white-row" method="post" action="connecter">

						<!-- alert failed -->
						<?php if (isset($msgErreurCPwd)) : ?>
							<div class="alert alert-danger">
						        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<i class="fa fa-frown-o"></i> 
								Wrong <strong>E-mail Address</strong> or <strong>Password</strong>!
							</div>
						<?php endif; ?>
														

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>E-mail Address</label>
									<input name="courriel" type="text" value="" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Password</label>
									<input name="mdp" type="password" value="" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="remember-box checkbox">
									<label for="rememberme">
										<input type="checkbox" id="rememberme" name="rememberme">Remember Me
									</label>
								</span>
							</div>
							<div class="col-md-6">
								<input type="submit" value="Sign In" class="btn btn-primary pull-right" data-loading-text="Loading...">
							</div>
						</div>

					</form>

				</div>
				<!-- /LOGIN -->
				<?php elseif($msgGod == ControllerConnexion::GOD_MSG) :?>

				<!-- RESET -->
				<div class="col-md-6">

					<h2><strong>Reset Password</strong></h2>

					<form class="white-row" method="post" action="changepwd">	
						<div class="row">
							<div class="form-group">
					           <div class="col-md-12">
									<label>New Password</label>
									<input name="mdp" type="password" required class="form-control">
								</div>
						    </div>
						</div>
						<div class="row">
							<div class="form-group">
					            <div class="col-md-12">
									<label>Re-enter Password</label>
									<input name="mdp1" type="password" required class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
					            <div class="col-md-12">
									<label>Entrer le code recu par courriel</label>
									<input name="codeReset" type="text" required class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<input type="submit" name="courriel" value="Sign In" class="btn btn-primary pull-right" data-loading-text="Loading...">
								</div>
						    </div>
						</div>

					</form>

				</div>
				<!-- /RESET -->
				
				<?php endif; ?>

				<!-- PASSWORD -->
				<div class="col-md-6">

					<h2>Forgot <strong>Password</strong>?</h2>

					<div class="white-row">

						<p>
							Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo.
						</p>

						<!-- alert success -->
						<?php if (isset($msgGod) && $msgGod = ControllerConnexion::GOD_MSG) : ?>
							<div class="alert alert-success">
						        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>								        
								<i class="fa fa-check-circle"></i> 
								<strong>New Password Sent!</strong> Check your E-mail Address!
							</div>
						<?php endif; ?>

						<!-- alert failed -->
						<?php if (isset($msgBad) && $msgBad = ControllerConnexion::ERROR_MSG) : ?>
							<div class="alert alert-danger">
						        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<i class="fa fa-frown-o"></i> 
								<strong>E-mail Address</strong> not found!
							</div>
						<?php endif; ?>

						<!-- password form -->
						<label>Type your E-mail Address</label>
						<form class="input-group" method="post" action="resetpwd">
							<input type="text" class="form-control" name="courriel" id="s" value="" placeholder="E-mail Address" />
							<span class="input-group-btn">
								<button class="btn btn-primary">SEND</button>
							</span>
						</form>

					</div>

				</div>
				<!-- /PASSWORD -->

			</div>


			<p class="white-row">
				Don't have an account yet? <a href="signup">Click to create one</a>, it's free!
			</p>

		</section>

	</div>
 <?php $msgBad =null; 
       $msgGod =null;
       ?>
