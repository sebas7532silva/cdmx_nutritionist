// console.log("funcionando")
// almacena los datos sin refrescar el sitio
$("#formulario").submit(function(event){
    event.preventDefault(); 
    enviar();
});
function enviar (){
    // console.log("ejecutando");
    var datos = $("#formulario").serialize();
    $.ajax({
        type: "post",
        url: "formulario.php",
        data: datos,
        success: function(texto){
            if(texto=="exito"){
                correcto();
            }else{
                phperror(texto);
            }
        }
    })
}
function correcto(){
    $("#mexito").removeClass("d-none");
    $("#merror").addClass("d-none");
}
function phperror(texto){
    $("#merror").removeClass("d-none");
    $("#merror").html(texto);
}