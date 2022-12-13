$(document).ready(function(){
    let prioridad;
    cargaticket();
    solucion();
    $("#id_empleado").val(1);
});


function cargaticket(){
    let cont=0;
    let template="";
    let estaus="";
    let prioridad="";
        $.ajax({
            url: "../Back/webhook/consulta_ticket.php",   
            type: "post",   
            dataType: "html",       
            cache: false,       
            contentType: false,   
            processData: false,
        success: function(res){    
            console.log(res); 
                let TICKET = JSON.parse(res);
                TICKET.forEach(element => {
                    if(element.estatus==1){
                        estatus="SOLUCIONADO";
                    }else{
                        estatus="PENDIENTE";
                    }
                    if(element.nivel_prioridad==0){
                        prioridad="BAJA";
                    }else if(element.nivel_prioridad==1){
                        prioridad="MEDIA";
                    }else if(element.nivel_prioridad==2){
                        prioridad="ALTA";
                    }else{
                        prioridad="";
                    }
                    if(estatus=="PENDIENTE"){
                        template += `
                    <tr>
                        <td data-label="folio" onclick="cargadatos(${element.folio})">${element.folio}</td>
                        <td data-label="tipo">${element.tipo_problema}</td>
                        <td data-label="estatus">${estatus}</td>
                        <td data-label="prioridad">${prioridad}</td>
                    </tr>`
                    }else{
                        template += `
                    <tr>
                        <td data-label="folio">${element.folio}</td>
                        <td data-label="tipo">${element.tipo_problema}</td>
                        <td data-label="estatus">${estatus}</td>
                        <td data-label="prioridad">${prioridad}</td>
                    </tr>`
                    }
                    
                cont++;
                });
                $("#tbody_ticket").html(template);
         }
    });
}

function cargadatos(folio){
    $("#folio").val(folio);
    $.ajax({
        url: "../Back/webhook/consulta_ticket_datos.php",
        type: "GET",
        dataType: "json",
        data: {folio: $("#folio").val()},
        contentType: "application/json"
    })
    .done(function (res) {
        let DATOS = res[0];
        console.log(DATOS);
        $("#firstNombre").val(DATOS.nombre);
        $("#lastName").val(DATOS.a_paterno);
        $("#lastName2").val(DATOS.a_materno);
        $("#idTicket").val(DATOS.id_venta);
        $("#producto").val(DATOS.nombre_producto);
        $("#eMail").val(DATOS.correo);
        $("#telephone").val(DATOS.tel);
        $("#about").val(DATOS.descripcion);
        $("#tipo").val(DATOS.tipo_problema);
        $("#id_incidente").val(DATOS.id_incidente);
        $("#imagen").attr("src","../Back/files/img/"+DATOS.imagen);
    });
}

function solucion(){
    $("#fmr-employer").on("submit", function(e){
        var combo = document.getElementById("prio");
        var selected = combo.options[combo.selectedIndex].text;
        if($("#solProcess").val()!='' && $("#solProcess").val()!='...' && $("#processSol").val()!='' && $("#processSol").val()!='...' 
            && selected!='Elige una opción'){
            if(selected=="Baja"){
                prioridad=0;
            }else if(selected=="Media"){
                prioridad=1;
            }else{
                prioridad=2;
            }
            var formData = new FormData(document.getElementById("fmr-employer"));
            formData.append("id", $("#id_incidente").val());
            formData.append("proceso", $("#solProcess").val());
            formData.append("solucion", $("#processSol").val());
            formData.append("prioridad", prioridad);
            $.ajax({
                url: "../Back/webhook/update_incidente.php",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            })
            .done(function(res){
                console.log(res);
                $("#id_empleado").val("1");
                    formData.append("folio", $("#folio").val());
                    formData.append("id_empleado", $("#id_empleado").val());
                    $.ajax({
                        url: "../Back/webhook/update_ticket.php",
                        type: "post",
                        dataType: "html",
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false
                    })
                    .done(function(res){
                        console.log(res);
                    })
            })
        }else{
            console.log("no sale");
        }
        e.preventDefault();
    });

}