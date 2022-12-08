$(document).ready(function(){
    cargaticket();
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
                    }else{
                        prioridad="ALTA";
                    }
                    template += `
                    <tr>
                        <td data-label="folio">${element.folio}</td>
                        <td data-label="tipo">${element.tipo_problema}</td>
                        <td data-label="estatus">${estatus}</td>
                        <td data-label="prioridad">${prioridad}</td>
                    </tr>`
                cont++;
                });
                $("#tbody_ticket").html(template);
         }
    });
}