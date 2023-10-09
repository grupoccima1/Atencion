<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <script type="text/javascript">
				$(document).ready(function(){
					$('#btnEditar').on("click", function(){
						$("#miModal2").modal();
					});



				});
	</script>
<form method="post" id="ticket_form">

    <div id="miModal2" class="modal fade show" role="dialog" aria-hideen="true">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                    <input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION["usu_id"] ?>">

                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="exampleInput">Categoria</label>
                                <select id="cat_id" name="cat_id"  class="form-control">
                                    
                                </select>
                            </fieldset>
                        </div>

                        <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="tick_titulo">Titulo</label>
                                        <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Ingrese Titulo">
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
                                    <button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
                        </div>
            </div>
                    
        </div>
    </div>
</form>
</body>
</html>