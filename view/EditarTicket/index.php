<?php
require_once("../../config/conexion.php");
require_once("../../config/config.php");
if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php");?>
    <title>Editar Ticket</title>
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
							<h3 id="lblnomidticket">Ticket</h3>
							<span id="lblestado"></span>
							<span class="label label-pill label-info" id="lblcat_nom"></span>
							<span class="label label-pill label-info" id="lblsubcat_nom"></span>
							<span class="label label-pill label-primary" id="lblnomusuario"></span>
							<span class="label label-pill label-default" id="lblfechcrea"></span>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="../ConsultarTicket">Home</a></li>
							</ol>
						</div>
					</div>
				</div> 
			</header>
			
			<div class="box-typical box-typical-padding">
				<div class="row">
					<form method="post" id="edit_form">
					<?php
						if ($_SESSION["rol_id"]==1) {
   					 ?>
						<div class="col-lg-6 d-none">
							<input type="hidden" id="tick_id" name="tick_id">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Categoria</label>
								<select id="catcompleta_id" name="cat_id"  class="form-control"> 
								</select>
							</fieldset>
						</div>
						<div class="col-lg-6 d-none">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Subcategoria</label>
								<select id="subcat_id" name="subcat_id"  class="form-control">
									
								</select>
							</fieldset>
						</div>
					<?php
						} else {
					?>	
					
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Status</label>
								<select id="tick_estado" name="tick_estado"  class="form-control">
									<option value="Abierto">Abierto</option>
  									<option value="Cerrado">Cerrado</option>
								</select>
							</fieldset>
						</div>

						<div class="col-lg-6">
							<input type="hidden" id="tick_id" name="tick_id">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Categoria</label>
								<select id="catcompleta_id" name="cat_id"  class="form-control"> 
								</select>
							</fieldset>
						</div>
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Subcategoria</label>
								<select id="subcat_id" name="subcat_id"  class="form-control">
									
								</select>
							</fieldset>
						</div>
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Agente Resolutor</label>
								<select id="tick_estado" name="tick_resolutor"  class="form-control">
									<option value="Katia">Katia Aguilar</option>
									<option value="Liu">Liu Velazquez</option>
  									<option value="Dulce">Dulce Mendoza</option>
								</select>
							</fieldset>
						</div>
						
						
					<?php
						}
					?>

						
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Titulo</label>
								<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" >
							</fieldset>
						</div>
						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_descrip">Descripción</label>
									<div class="summernote-theme-1" >
									<textarea id="tick_descrip" class="summernote" name="tick_descrip"></textarea>
								</div>
							</fieldset>
						</div>
						<div class="col-lg-12">
							<button type="submit" name="action" value="add" id="" name="" class="btn btn-rounded  btn-primary">Confirmar</button>
						</div>
					</form>
				</div>
			</div>
			
            <section class="activity-line" id="lbldetalle">                   
            
			</section>
		</div>
	</div>
	<!-- Contenido -->
	<?php require_once("../MainJs/js.php"); ?>
	<script type="text/javascript" src="editarticket.js"></script>
</body>
</html>
<?php
} else {
	header("Location:".$rootPath."index.php");
}
?>