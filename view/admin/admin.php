<?php
session_start();

if (!isset($_SESSION['cargo']) == 1) {
	header('location: ../../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>CITAS MEDICAS PANEL ADMINISTRATIVO</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../../assets/img/logo.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['../../assets/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../../assets/css/demo.css">
</head>

<body>

	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">

				<a href="admin.php" class="logo">
					<img src="../../assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>



						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../../assets/img/user.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">

											<div class="avatar-lg"><img src="../../assets/img/avatar.png" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4><?php echo ucfirst($_SESSION['nombre']); ?></h4>
												<p class="text-muted">Administrador</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Mi Perfil</a>

										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="../../cerrarSesion.php">Cerar Sesion</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../../assets/img/user.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo ucfirst($_SESSION['nombre']); ?>
									<span class="user-level">Administrador</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Home</p>
								<span class="caret"></span>
							</a>

						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Citas</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">

									<li>
										<a href="../../folder/appointment.php">
											<span class="sub-item">Mostrar</span>
										</a>
									</li>

								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-male"></i>
								<p>Pacientes</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
										<a href="../../folder/customers.php">
											<span class="sub-item">Mostrar</span>
										</a>
									</li>

								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-user-md"></i>
								<p>Médicos</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="../../folder/doctor.php">
											<span class="sub-item">Mostrar</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p>Áreas médicas</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="../../folder/specialty.php">
											<span class="sub-item">Mostrar</span>
										</a>
									</li>

								</ul>
							</div>
						</li>


						<li class="nav-item">
							<a data-toggle="collapse" href="#calendar">
								<i class="fas fa-calendar-alt"></i>
								<p>Horarios</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="calendar">
								<ul class="nav nav-collapse">
									<li>
										<a href="../../folder/horario.php">
											<span class="sub-item">Mostrar</span>
										</a>
									</li>

								</ul>
							</div>
						</li>


						<li class="nav-item">
							<a data-toggle="collapse" href="#user">
								<i class="fas fa-user"></i>
								<p>Usuarios</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="user">
								<ul class="nav nav-collapse">
									<li>
										<a href="../../folder/usuarios.php">
											<span class="sub-item">Mostrar</span>
										</a>
									</li>

								</ul>
							</div>
						</li>

					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>

							</div>

						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Resumen</div>

									<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-1"></div>
											<h6 class="fw-bold mt-3 mb-0">Pacientes</h6>
											<?php
											require_once "../config/conexion1.php";
											$sql = "SELECT COUNT(*) total FROM customers";
											$result = $bd->query($sql); //$pdo sería el objeto conexión
											$total = $result->fetchColumn();
											?>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-2"></div>
											<h6 class="fw-bold mt-3 mb-0">Doctores</h6>
											<?php
											require_once "../config/conexion1.php";
											$sql = "SELECT COUNT(*) total FROM doctor";
											$result = $bd->query($sql); //$pdo sería el objeto conexión
											$total2 = $result->fetchColumn();
											?>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-3"></div>
											<h6 class="fw-bold mt-3 mb-0">Citas</h6>
											<?php
											require_once "../config/conexion1.php";
											$sql = "SELECT COUNT(*) total FROM appointment";
											$result = $bd->query($sql); //$pdo sería el objeto conexión
											$total3 = $result->fetchColumn();
											?>
										</div>
									</div>
								</div>
							</div>
						</div>


					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title fw-mediumbold">Nuevos pacientes</div>
									<?php
									function connect()
									{
										return new mysqli("localhost", "root", "", "proyecto_final");
									}
									$con = connect();
									$sql = "SELECT * FROM customers   ORDER BY apellidop ASC LIMIT 5";
									$query  = $con->query($sql);
									$data =  array();
									if ($query) {
										while ($r = $query->fetch_object()) {
											$data[] = $r;
										}
									}
									?>
									<?php if (count($data) > 0) : ?>
										<?php foreach ($data as $d) : ?>
											<div class="card-list">
												<!-- POR ACA COMENTO O BAJO DATOS DE MYSQL PARA VISUALIZARLO CON LAS CONEXIONES--------  -->

												<div class="item-list">
													<div class="avatar">
														<img src="../../assets/img/avatar.png" alt="..." class="avatar-img rounded-circle">
													</div>
													<div class="info-user ml-3">
														<div class="username"><?php echo $d->apellidop; ?></div>
														<div class="status">Pacientes</div>
													</div>

												</div>


											</div>
										<?php endforeach; ?>
									<?php else : ?>
										<p class="alert alert-warning"><strong>No hay datos</strong></p>
									<?php endif; ?>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title fw-mediumbold">Nuevos doctores</div>
									<?php

									$con = connect();
									$sql = "SELECT * FROM doctor   ORDER BY apedoc ASC LIMIT 5";
									$query  = $con->query($sql);
									$data =  array();
									if ($query) {
										while ($r = $query->fetch_object()) {
											$data[] = $r;
										}
									}
									?>
									<?php if (count($data) > 0) : ?>
										<?php foreach ($data as $d) : ?>
											<div class="card-list">
												<!-- POR ACA COMENTO O BAJO DATOS DE MYSQL PARA VISUALIZARLO CON LAS CONEXIONES--------  -->

												<div class="item-list">
													<div class="avatar">
														<img src="../../assets/img/avatar.png" alt="..." class="avatar-img rounded-circle">
													</div>
													<div class="info-user ml-3">
														<div class="username"><?php echo $d->apedoc; ?></div>
														<div class="status">Doctores</div>
													</div>

												</div>


											</div>
										<?php endforeach; ?>
									<?php else : ?>
										<p class="alert alert-warning"><strong>No hay datos</strong></p>
									<?php endif; ?>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title fw-mediumbold">Nuevos especialidades</div>
									<?php

									$con = connect();
									$sql = "SELECT * FROM specialty   ORDER BY nombrees ASC LIMIT 5";
									$query  = $con->query($sql);
									$data =  array();
									if ($query) {
										while ($r = $query->fetch_object()) {
											$data[] = $r;
										}
									}
									?>
									<?php if (count($data) > 0) : ?>
										<?php foreach ($data as $d) : ?>
											<div class="card-list">
												<!-- POR ACA COMENTO O BAJO DATOS DE MYSQL PARA VISUALIZARLO CON LAS CONEXIONES--------  -->

												<div class="item-list">

													<div class="info-user ml-3">
														<div class="username"><?php echo $d->nombrees; ?></div>
														<div class="status">Especialidades</div>
													</div>

												</div>


											</div>
										<?php endforeach; ?>
									<?php else : ?>
										<p class="alert alert-warning"><strong>No hay datos</strong></p>
									<?php endif; ?>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

		</div>



		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../../assets/js/core/popper.min.js"></script>
	<script src="../../assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="../../assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="../../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="../../assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="../../assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->


	<!-- jQuery Vector Maps -->
	<script src="../../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="../../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="../../assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../../assets/js/setting-demo.js"></script>
	<script src="../../assets/js/demo.js"></script>
	<script>
		Circles.create({
			id: 'circles-1',
			radius: 45,
			value: 60,
			maxValue: 100,
			width: 7,
			text: <?php echo  $total; ?>,
			colors: ['#f1f1f1', '#FF9E27'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-2',
			radius: 45,
			value: 70,
			maxValue: 100,
			width: 7,
			text: <?php echo  $total2; ?>,
			colors: ['#f1f1f1', '#2BB930'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-3',
			radius: 45,
			value: 40,
			maxValue: 100,
			width: 7,
			text: <?php echo  $total3; ?>,
			colors: ['#f1f1f1', '#F25961'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets: [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines: {
							drawBorder: false,
							display: false
						}
					}],
					xAxes: [{
						gridLines: {
							drawBorder: false,
							display: false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
</body>

</html>