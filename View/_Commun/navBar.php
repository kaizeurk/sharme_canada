
					<nav class="nav-main mega-menu">
						<ul class="nav nav-pills nav-main scroll-menu" id="topMain">
							<li id="accueil" class="dropdown <?=$controlloresActive["accueil"] ?>">
								<a class="dropdown-toggle" href="#">
									Home <i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li class="dropdown-submenu"><a href="#">Acceuil nouveaux arrivants</a>
										<ul class="dropdown-menu">
											<li><a href="#">Acceuil à l'a&#233;roport</a></li>
											<li><a href="#">Accompagnement</a></li>
											<li><a href="#">Aide à l'int&#233;gration</a></li>
											<li><a href="#">Activit&#233;s d'orientation et conseil</a></li>
											<li><a href="#">Autres</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu"><a href="{{ path('sharmecanadaplatform_activity_file') }}">Activit&#233;s familiales</a>
										<ul class="dropdown-menu">
											<li><a href="#">Cabane à sucre</a></li>
											<li><a href="#">BBQ</a></li>
											<li><a href="#">Sorties de familles</a></li>
											<li><a href="#">Reunion conseil de familles</a></li>
										</ul>
									</li>
									<li class="divider"></li>
									<li><a href="#">Extended</a></li>
									<li><a href="#">Portfolio</a></li>
									<li><a href="#">Shop</a></li>
									<li><a href="#">Real Estate</a></li>
									<li><a href="#">Church</a></li>
									<li><a href="#">Medical</a></li>
									<li><a href="#">College</a></li>
									<li class="divider"></li>
									<li><a href="#">More...</a></li>
								</ul>
							</li>
							<li id="activity" class="dropdown <?=$controlloresActive["activity"] ?>">
								<a class="dropdown-toggle" href="#">
									Activit&#233;s<i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li class="dropdown-toggle">
									   <a href="<?=$racineWebFront ?>activity">Toutes nos activités</a>
									</li>
									<li class="divider"></li>
									<li class="dropdown-submenu"><a href="#">Acceuil nouveaux arrivants</a>
										<ul class="dropdown-menu">
											<li><a href="#">Acceuil à l'a&#233;roport</a></li>
											<li><a href="#">Accompagnement</a></li>
											<li><a href="#">Aide à l'int&#233;gration</a></li>
											<li><a href="#">Activit&#233;s d'orientation et conseil</a></li>
											<li><a href="#">Autres</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu"><a href="#">Activit&#233;s familiales</a>
										<ul class="dropdown-menu">
											<li><a href="#">Cabane à sucre</a></li>
											<li><a href="#">BBQ</a></li>
											<li><a href="#">Sorties de familles</a></li>
											<li><a href="#">Reunion conseil de familles</a></li>
										</ul>
									</li>
								</ul>
							</li>

							<li id="blog" class="dropdown <?=$controlloresActive["blog"] ?>">
								<a class="dropdown-toggle" href="#">
									Blog <i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Blog Without Sidebar</a></li>
									<li><a href="#">Single Post</a></li>
								</ul>
							</li>
							<li id="conseil" class="dropdown">
					            <a href="#">Conseils<i class="fa fa-angle-down"></i></a>

							</li>
							<li class="dropdown  <?=$controlloresActive["about"] ?>">
                                <a class="dropdown-toggle" href="<?=$racineWebFront ?>about">Apropos<i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="<?=$racineWebFront ?>about#projetId">Parrainage de nouveaux arrivants</a></li>
									<li><a href="<?=$racineWebFront ?>about#howToWorkId">Comment nous operons</a></li>
									<li><a href="<?=$racineWebFront ?>about#domaineId">Domaines d'intervention</a></li>
									<li><a href="<?=$racineWebFront ?>about#objectifId">Objectifs visés par le projet</a></li>
									<li><a href="<?=$racineWebFront ?>about#longId">Durée du parrainge</a></li>
									<li><a href="<?=$racineWebFront ?>about#budgetId">Budget du projet</a></li>
									<li><a href="<?=$racineWebFront ?>about#documentId">Document a fournir</a></li>
								</ul>

							</li>
							<li class="dropdown <?=$controlloresActive["legalnotice"] ?>">
								<a class="dropdown-toggle" href="<?=$racineWebFront ?>legalnotice">
									Avis legal<i class="fa fa-angle-down"></i>
								</a>
							</li>
							<li class="dropdown <?=$controlloresActive["contact"] ?>">
					            <a href="<?=$racineWebFront ?>contact">Contact<i class="fa fa-angle-down"></i></a>

							</li>

							<!-- GLOBAL SEARCH -->
							<li class="search">
								<!-- search form -->
								<form method="get" action="#" class="input-group pull-right">
									<input type="text" class="form-control" name="k" id="k" value="" placeholder="Search">
									<span class="input-group-btn">
										<button class="btn btn-primary notransition"><i class="fa fa-search"></i></button>
									</span>
								</form>
								<!-- /search form -->
							</li>
							<!-- /GLOBAL SEARCH -->
						</ul>
					</nav>