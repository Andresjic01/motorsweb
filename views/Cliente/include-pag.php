
<!-- Start Top Header Bar -->
<section class="top-header">
	<div class="container justify-content-between">
		<div class="row">
			<div class="col-md-4  col-xs-12 col-sm-4 text-center">
				<p>"Potencia tu auto con repuestos de calidad. Encuentra lo que necesitas para seguir en camino."</p>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Site Logo -->
				<div class="logo text-center">
					<a href="home.php">
						<img  src="../Cliensite/images/logo.png" alt="" style="width: 160px;	height: 50px;">
					</a>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Cart -->
				<ul class="top-menu text-right list-inline">
					<li class=" cart-nav ">
						<a href="cart.php"><i
								class="tf-ion-android-cart" style="font-size:40px;"></i></a>
								<h4 style="background:red; color:white; width:20px; text-align:center; border-radius:50%; position:absolute; right:120px; top:-16px;"><?php echo(empty($_SESSION['carrito']))? "":count($_SESSION['carrito']);?></h4>
					</li><!-- / Cart -->

					<!-- Search -->
					<li class="dropdown search dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
								class="tf-ion-ios-search-strong" style="font-size:30px;"></i> Buscar</a>
						<ul class="dropdown-menu search-dropdown">
							<li>
								<form action="post"><input type="search" class="form-control" placeholder="Search..."></form>
							</li>
						</ul>
					</li><!-- / Search -->



				</ul><!-- / .nav .navbar-nav .navbar-right -->
			</div>
		</div>
	</div>
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
	<nav class="navbar navigation">
		<div class="container">
			<div class="navbar-header">
				<h2 class="menu-title">Main Menu</h2>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div><!-- / .navbar-header -->

			<!-- Navbar Links -->
			<div id="navbar" class="navbar-collapse collapse text-center">
				<ul class="nav navbar-nav">

					<!-- Home -->
					<li class="hoverred">
						<a href="home.php">Inicio</a>
					</li>
					<!-- / Home -->

					<li class="dropdown width:130px dropdown-slide hoverred">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Talleres<span
								class="tf-ion-ios-arrow-down"></span></a>
						<div class="dropdown-menu">
							<div class="row">

								<!-- Servicios -->
								<div class="col-sm-12 col-xs-6">
									<ul>
										<li class="dropdown-header">Servicios</li>
										<li role="separator" class="divider"></li>
										<li><a href="Service.php">Servicios</a></li>
										<li><a href="Talleres.php">Talleres</a></li>
									</ul>
								</div>
							</div>
						</div>
					</li>

					<li class="dropdown width:130px dropdown-slide hoverred">
						<a href="shop-sidebar.php" >Repuestos<span ></span></a>
						
					</li>
								

					<!-- Pages -->
					<!-- <li class="dropdown full-width dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Mi taller <span
								class="tf-ion-ios-arrow-down"></span></a>
						<div class="dropdown-menu">
							<div class="row"> -->

								<!-- Introduction -->
								<!-- <div class="col-sm-6 col-xs-12">
									<ul>
										<li class="dropdown-header">Introduction</li>
										<li role="separator" class="divider"></li>
										<li><a href="contact.html">Contact Us</a></li>
										<li><a href="about.html">About Us</a></li>
										<li><a href="404.html">404 Page</a></li>
										<li><a href="coming-soon.html">Coming Soon</a></li>
										<li><a href="faq.html">FAQ</a></li>
									</ul>
								</div> -->

								<!-- Contact -->
								<!-- <div class="col-sm-6 col-xs-12">
									<ul>
										<li class="dropdown-header">Dashboard</li>
										<li role="separator" class="divider"></li>
										<li><a href="dashboard.html">User Interface</a></li>
										<li><a href="order.html">Orders</a></li>
										<li><a href="address.html">Address</a></li>
										<li><a href="profile-details.html">Profile Details</a></li>
									</ul>
								</div>
							</div>
						</div>
					</li> -->
					
					<li class="hoverred">
						<a href="about.php">Informacion del sitio</a>
					</li>
					<!-- inicio de sesion -->
					<li class="dropdown dropdown-slide hoverred">
						<?php
							verActividadBoton()
						?>
							
					</li><!-- / inisio de sesion -->

					<!-- Registro -->
					<li class="dropdown width:130px dropdown-slide hoverred">
						<a href="#!" class="sidebar-sub-toggle"   data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Perfil
							<span class="sidebar-collapse-icon ti-angle-down"></span>
						</a>
						<div class="dropdown-menu">
							<div class="row">

								<!-- Servicios -->
								<div class="col-sm-12 col-xs-6" style="text-align: center;">
									<?php
										perfil()
									?>
								</div>
							</div>
						</div>
					</li><!-- / Registo -->

				</ul><!-- / .nav .navbar-nav -->

			</div>
			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>