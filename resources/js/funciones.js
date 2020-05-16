$(document).ready(function(){

        $('#equipos').change(function(){
            cargarEquipo($(this).val());
        });

function cargarEquipo(id){
    $.ajax({

        type : "POST",
        url:"",



    })
}


});