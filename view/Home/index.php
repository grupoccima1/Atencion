<?php
require_once("../../config/conexion.php");
require_once("../../config/config.php");
require ('selectores.php');

if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html>
<?php require_once("../MainHead/head.php");?>

<title>Panel</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="../../public/css/dashboard.css">
</head>

<body class="with-side-menu">

	<?php require_once("../MainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>

	<?php require_once("../MainNav/nav.php");?>

	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
			<div class="row"> 
				<div class="col-12 my-5">
					<h3>Buenos Dias <?php echo $_SESSION["usu_nom"] ?> <?php echo $_SESSION["usu_ape"] ?> </h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<h5 class="fs-15 fw-semibold">Katia Aguilar </h5>
							<p class="text-muted">Lider</p>
							<div class="d-flex flex-wrap justify-content-evenly">
								<p class="text-muted mb-0">
									<i
										class="mdi mdi-numeric-1-circle text-success fs-18 align-middle me-2"></i>Cerrados
								</p>
								<p class="text-muted mb-0">
									<i class="mdi mdi-numeric-3-circle text-info fs-18 align-middle me-2"></i>Abiertos
								</p>
								<p class="text-muted mb-0"><i
										class="mdi mdi-numeric-2-circle text-primary fs-18 align-middle me-2"></i>Vencidos
								</p>
							</div>
						</div>
						<div class="progress animated-progress rounded-bottom rounded-0" style="height: 6px;">
							<div class="progress-bar bg-success rounded-0" role="progressbar" style="width: 30%"
								aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
							<div class="progress-bar bg-info rounded-0" role="progressbar" style="width: 50%"
								aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							<div class="progress-bar rounded-0" role="progressbar" style="width: 20%" aria-valuenow="20"
								aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div><!-- end col -->
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<h5 class="fs-15 fw-semibold">Liu Y. Velazquez</h5>
							<p class="text-muted">Auxiliar</p>
							<div class="d-flex flex-wrap justify-content-evenly">
								<p class="text-muted mb-0">
									<i
										class="mdi mdi-numeric-3-circle text-success fs-18 align-middle me-2"></i>Cerrados
								</p>
								<p class="text-muted mb-0"><i
										class="mdi mdi-numeric-0-circle text-info fs-18 align-middle me-2"></i>Abiertos</p>
								<p class="text-muted mb-0"><i
										class="mdi mdi-numeric-8-circle text-primary fs-18 align-middle me-2"></i>Vencidos
								</p>
							</div>
						</div>
						<div class="progress animated-progress rounded-bottom rounded-0" style="height: 6px;">
							<div class="progress-bar bg-success rounded-0" role="progressbar" style="width: 30%"
								aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
							<div class="progress-bar bg-info rounded-0" role="progressbar" style="width: 0%"
								aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							<div class="progress-bar rounded-0" role="progressbar" style="width: 70%" aria-valuenow="70"
								aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div><!-- end col -->
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<h5 class="fs-15 fw-semibold">Dulce Mendoza</h5>
							<p class="text-muted">Recepcion</p>
							<div class="d-flex flex-wrap justify-content-evenly">
								<p class="text-muted mb-0">
									<i
										class="mdi mdi-numeric-10-circle text-success fs-18 align-middle me-2"></i>Cerrados
								</p>
								<p class="text-muted mb-0"><i
										class="mdi mdi-numeric-3-circle text-info fs-18 align-middle me-2"></i>Abiertos</p>
								<p class="text-muted mb-0"><i
										class="mdi mdi-numeric-2-circle text-primary fs-18 align-middle me-2"></i>Vencidos
								</p>
							</div>
						</div>
						<div class="progress animated-progress rounded-bottom rounded-0" style="height: 6px;">
							<div class="progress-bar bg-success rounded-0" role="progressbar" style="width: 60%"
								aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
							<div class="progress-bar bg-info rounded-0" role="progressbar" style="width: 25%"
								aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							<div class="progress-bar rounded-0" role="progressbar" style="width: 15%" aria-valuenow="15"
								aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div><!-- end col -->
			</div>
			<div class="row">
				<div class="col-3">
					<div class="card card-animate">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="flex-grow-1 overflow-hidden">
									<p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total de Tickets
									</p>
								</div>
								<div class="flex-shrink-0">
									<h5 class="text-success fs-14 mb-0">
										<i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %
									</h5>
								</div>
							</div>
							<div class="d-flex align-items-end justify-content-between mt-4">
								<div>
									<h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value"
											data-target="559.25"><?php echo $ticket_total ?> </span></h4>
									<a href="" class="text-decoration-underline"></a>
								</div>
								<div class="avatar-sm flex-shrink-0">
									<span class="avatar-title bg-soft-success rounded fs-3">
										<i class="bx bx-dollar-circle text-success"></i>
									</span>
								</div>
							</div>
						</div>
						<!-- end card body -->
					</div>
				</div>
				<div class="col-3">
					<div class="card card-animate">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="flex-grow-1 overflow-hidden">
									<p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Abiertos
									</p>
								</div>
								<div class="flex-shrink-0">
									<h5 class="text-success fs-14 mb-0">
										<i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %
									</h5>
								</div>
							</div>
							<div class="d-flex align-items-end justify-content-between mt-4">
								<div>
									<h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value"
											data-target="559.25"><?php echo $ticket_abierto ?></span></h4>
									<a href="" class="text-decoration-underline"></a>
								</div>
								<div class="avatar-sm flex-shrink-0">
									<span class="avatar-title bg-soft-success rounded fs-3">
										<i class="bx bx-dollar-circle text-success"></i>
									</span>
								</div>
							</div>
						</div>
						<!-- end card body -->
					</div>
				</div>
				<div class="col-3">
					<div class="card card-animate">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="flex-grow-1 overflow-hidden">
									<p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Cerrados
									</p>
								</div>
								<div class="flex-shrink-0">
									<h5 class="text-success fs-14 mb-0">
										<i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %
									</h5>
								</div>
							</div>
							<div class="d-flex align-items-end justify-content-between mt-4">
								<div>
									<h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value"
											data-target="559.25"><?php echo $ticket_cerrado ?> </span> </h4>
									<a href="" class="text-decoration-underline"></a>
								</div>
								<div class="avatar-sm flex-shrink-0">
									<span class="avatar-title bg-soft-success rounded fs-3">
										<i class="bx bx-dollar-circle text-success"></i>
									</span>
								</div>
							</div>
						</div>
						<!-- end card body -->
					</div>
				</div>
				<div class="col-3">
					<div class="card card-animate">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="flex-grow-1 overflow-hidden">
									<p class="text-uppercase fw-medium text-muted text-truncate mb-0">Cancelaciones
									</p>
								</div>
								<div class="flex-shrink-0">
									<h5 class="text-success fs-14 mb-0">
										<i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %
									</h5>
								</div>
							</div>
							<div class="d-flex align-items-end justify-content-between mt-4">
								<div>
									<h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value"
											data-target="559.25"> <?php echo $categoria_cancelados ?> </span></h4>
									<a href="" class="text-decoration-underline"></a>
								</div>
								<div class="avatar-sm flex-shrink-0">
									<span class="avatar-title bg-soft-success rounded fs-3">
										<i class="bx bx-dollar-circle text-success"></i>
									</span>
								</div>
							</div>
						</div>
						<!-- end card body -->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-3">
					<div class="">
						<div class="card bg-success card-height-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="avatar-sm flex-shrink-0">
										<span class="avatar-title bg-soft-light text-white rounded-2 fs-2">
											<i class="bx bx-shopping-bag"></i>
										</span>
									</div>
									<div class="flex-grow-1 ms-3">
										<p class="text-uppercase fw-medium text-white-50 mb-3">Total de Tickets Cerrados
										</p>
										<h4 class="fs-4 mb-3 text-white"><span class="counter-value"
												data-target="2045">2,045</span></h4>
										<p class="text-white-50 mb-0">de 2500 en </p>
									</div>
									<div class="flex-shrink-0 align-self-center">
										<span class="badge badge-soft-light fs-12"><i
												class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>6.11
											%<span></span></span>
									</div>
								</div>
							</div><!-- end card body -->
						</div>
					</div>
				</div>
				<div class="col-3">
					<div class="">
						<div class="card card-animate">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<div>
										<p class="fw-medium text-muted mb-0">Total de Clientes Registrados </p>
										<h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
												data-target="28.05">2000</span></h2>
										<p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0"><i
													class="ri-arrow-up-line align-middle"></i> 16.24 % </span> vs.
											previous month</p>
									</div>
									<div>
										<div class="avatar-sm flex-shrink-0">
											<span class="avatar-title bg-soft-info rounded-circle fs-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-users text-info">
													<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
													<circle cx="9" cy="7" r="4"></circle>
													<path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
													<path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
												</svg>
											</span>
										</div>
									</div>
								</div>
							</div><!-- end card body -->
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="card">
						<div class="card-header align-items-center d-flex">
							<h4 class="card-title mb-0 flex-grow-1">Ticktes que Vencen Hoy</h4>

						</div><!-- end card header -->

						<div class="card-body mt-3">
							<div class="table-responsive table-card">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Titulo</th>
											<th scope="col">Resolutor</th>
											<th scope="col">Mesa</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Elemento 1</td>
											<td>Dulce</td>
											<td>Navetec</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Elemento 2 </td>
											<td>Liu</td>
											<td>Portto Blanco</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Elemento 3 </td>
											<td>Katia</td>
											<td>Navetec</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contenido -->
	<?php require_once("../MainJs/js.php"); ?>
	<script type="text/javascript" src="home.js"></script>
</body>

</html>
<?php
} else {
	header("Location:".$rootPath."index.php");
	
}
?>				