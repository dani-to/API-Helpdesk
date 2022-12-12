$(document).ready(function(){
    $("#login").on("submit", function(e){
        if($("#correo").val()=="Admin@gmail.com"){
            window.location = "./indexManager.html";
        }else if($("#correo").val()=="Cliente@gmail.com"){
            window.location = "./indexCostumer.html";
        }else if($("#correo").val()=="Empleado@gmail.com"){
            window.location = "./index.html?id_empleado=${1}";
        }else{
            console.log("Error con api cesar");
        }
        e.preventDefault();
    })   
});

