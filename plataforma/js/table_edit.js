$(document).ready(function(){
    $('#Tabla-equipos').Tabledit({
        deleteButton: false,
        editButton: false,          
        columns: {
          identifier: [0, 'id'],                    
          editable: [[1, 'Service tag'], [2, 'Categoria'], [3, 'Planta'], [4, 'Finalizacion del contrato'], [5, 'Logo']]
        },
        hideIdentifier: true,
        url: 'editarCelda.php'      
    });
});