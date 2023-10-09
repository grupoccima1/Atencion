<?php
    require_once("../config/conexion.php");
    require_once("../models/Subcategoria.php");
    $subcategoria = new Subcategoria();

    switch($_GET["op"]){
        case "combo":
            $datos = $subcategoria->get_subcategoria();
            
            if(is_Array($datos) == true and count($datos) > 0){
                /* $html = "<option></option>"; */
                foreach($datos as $row)
                {
                    $html.="<option value='".$row['subcat_id']."'>".$row['subcat_nom']."</option>";
                }
                echo $html;
            }
        break;
    }

    function write_to_console($data) {
        $console = $data;
        if (is_array($console))
        $console = implode(',', $console);
       
        echo "<script>console.log('Console: " . $console . "' );</script>";
    }
    write_to_console($datos);

?>