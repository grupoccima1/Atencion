<?php
require_once("../../config/conexion.php");
require_once("../../config/config.php");
if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
	crossorigin="anonymous"></script>

<?php require_once("../MainHead/head.php");?>
<title>Consultar Ticket</title>
</head>

<body class="with-side-menu">

	<?php require_once("../MainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>

	<?php require_once("../MainNav/nav.php");?>

	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">

			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Consultar Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="../Home">Home</a></li>
								<li class="active">Consultar Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<script type="text/javascript">
				$(document).ready(function () {
					$('#btnLlamar').on("click", function () {
						$("#miModal").modal();
					});
				});
			</script>

			<input type="button" id="btnLlamar" value="Agregar ticket" class="btn btn-primary">


			<!-- Inicio Modal -->
			<form method="post" id="ticket_form">

				<div id="miModal" class="modal fade show" role="dialog" aria-hideen="true">
					<div class="modal-dialog modal-lg">

						<div class="modal-content">
							<input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION["usu_id"] ?>">

							<div class="col-lg-6">
								<fieldset class="form-group">
									<label class="form-label semibold" for="exampleInput">Categoria</label>
									<select id="categoria" name="cat_id" class="form-control">
											<option selected disabled>Categorias</option>
                                            <option value="1">Contrato</option>
                                            <option value="2">Dudas y Aclaraciones</option>
                                            <option value="3">Cancelaciones</option>
									</select>
								</fieldset>
							</div>

							<div class="col-lg-6">
								<fieldset class="form-group">
									<label class="form-label semibold" for="exampleInput">Subcategoria</label>
									<select id="subcategoria" name="subcat_id" class="form-control">

									</select>
								</fieldset>
							</div>

							<div class="col-lg-6">
								<fieldset class="form-group">
									<label class="form-label semibold" for="tick_titulo">Titulo</label>
									<input type="text" class="form-control" id="tick_titulo" name="tick_titulo"
										placeholder="Ingrese Titulo">
								</fieldset>
							</div>

							<div class="col-lg-12">
								<fieldset class="form-group">
									<label class="form-label semibold" for="tick_descrip">Descripción</label>
									<div class="summernote-theme-1">
										<textarea id="tick_descrip" class="summernote" name="tick_descrip"></textarea>
									</div>
								</fieldset>
							</div>
							<div class="col-lg-10">
								<div class="input-group">
									<input type="file" class="form-group" id="img-evidencia"
										aria-describedby="inputGroupFileAddon04" aria-label="Upload">
								</div>
							</div>

							<div class="col-lg-12">
								<button type="submit" name="action" value="add"
									class="btn btn-rounded btn-inline btn-primary">Guardar</button>
							</div>
						</div>

					</div>
				</div>
			</form>
			<!-- Fin Modal -->

			<!-- Modal 2 -->
			<form method="post" id="ticket_form">

				<div id="miModal2" class="modal fade show" role="dialog" aria-hideen="true">
					<div class="modal-dialog modal-lg">

						<div class="modal-content">
							<!-- <input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION["usu_id"] ?>"> -->

							<div class="col-lg-6">
								<fieldset class="form-group">
									<label class="form-label semibold" for="cat_nom">Categoria</label>
									<input type="text" class="form-control" id="cat_nom" name="cat_nom" readonly>
								</fieldset>
							</div>

							<div class="col-lg-6">
								<fieldset class="form-group">
									<label class="form-label semibold" for="tick_titulo">Titulo</label>
									<input type="text" class="form-control" id="tick_titulo" name="tick_titulo"
										readonly>
								</fieldset>
							</div>

							<div class="col-lg-12">
								<fieldset class="form-group">
									<label class="form-label semibold" for="tick_titulo">Descripcion</label>
									<input type="text" class="form-control" id="tick_titulo" name="tick_titulo"
										readonly>
								</fieldset>
							</div>

							<div class="col-lg-12">
								<button type="submit" name="action" value="add"
									class="btn btn-rounded btn-inline btn-primary">Guardar</button>

								<button type="submit" name="action" value=""
									class="btn btn-rounded btn-danger ladda-button" onclick="close()">Cancelar</button>
							</div>

						</div>

					</div>
				</div>
			</form>
			<!-- FIn Modal 2 -->

			<!-- Modal 2 -->
			<form method="post" id="ticket_form">

				<div id="miModal3" class="modal fade show" role="dialog" aria-hideen="true">
					<div class="modal-dialog modal-lg">

						<div class="modal-content">
							<!-- <input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION["usu_id"] ?>"> -->


							<center>
								<h3>¿Desea Eliminar el ticket?</h3>
							</center>

							<div class="col-lg-12">
								<button type="submit" name="action" value="add"
									class="btn btn-rounded btn-inline btn-primary">Aceptar</button>

								<button type="submit" name="action" value=""
									class="btn btn-rounded btn-danger ladda-button" onclick="">Cancelar
								</button>
							</div>

						</div>

					</div>
				</div>
			</form>
			<!-- FIn Modal 2 -->

			<div class="box-typical box-typical-padding">
				<table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
					<thead>
						<tr>
							<th style="width: 1%;">No. Ticket</th>
							<th style="width: 15%;">Descripcion</th>
							<th class="d-none d-sm-table-cell" style="width: 40%;">Evidencia</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Agente</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Mesa</th>
							<th class="d-none d-sm-table-cell" style="width: 5%;">Estado</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Fecha</th>
							<th class="text-center" style="width: 5%;">Modificar</th>
							<th class="text-center" style="width: 5%;">Eliminar</th>
						</tr>
					</thead>
					<tbody>
						<h1></h1>
					</tbody>
				</table>
			</div>

		</div>
	</div>
	<!-- Contenido -->


	<?php require_once("../EliminarTicket/modalmantenimiento.php");?>

	<?php require_once("../MainJs/js.php"); ?>

	<script type="text/javascript" src="consultarticket.js"></script>
	<script type="text/javascript" src="categorias.js"></script>

	<script type="text/javascript" src="../NuevoTicket/nuevoticket.js"></script>

	<script type="text/javascript" src="../EliminarTicket/mtto.js"></script>

	<!-- <script type="text/javascript" src="../notificacion.js"></script> -->
</body>

</html>
<?php
} else {
	header("Location:".$rootPath."index.php");
}
?>