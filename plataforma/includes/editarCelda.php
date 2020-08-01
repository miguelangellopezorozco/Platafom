<?php

include_once("./plataforma/includes/Conectar.php");
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {   
    $update_field='';
    if(isset($input['Service tag'])) {
        $update_field.= "Service tag='".$input['Service tag']."'";
    } else if(isset($input['Categoria'])) {
        $update_field.= "Categoria='".$input['Categoria']."'";
    } else if(isset($input['Planta'])) {
        $update_field.= "Planta='".$input['Planta']."'";
    } else if(isset($input['Finalizacion del contrato'])) {
        $update_field.= "Finalizacion del contrato='".$input['Finalizacion del contrato']."'";
    }    else if(isset($input['Logo'])) {
        $update_field.= "Logo='".$input['Logo']."'";
    }   
    if($update_field && $input['id']) {
        $sql_query = "UPDATE quipos SET $update_field WHERE id='" . $input['id'] . "'";  
        mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));     
    }
}