$(document).ready(function(){
    var id_cliente;
    $("#fmr-costumer").on("submit", function(e){
        var combo = document.getElementById("tipo");
        var selected = combo.options[combo.selectedIndex].text;
        if($("#nombre").val()!='' && $("#lastName1").val()!='' && $("#lastName2").val()!='' && $("#eMail").val()!='' 
            && $("#telephone").val()!='' && $("#about").val()!='' && $("#imagen").val()!='' && selected!='Elige una opción'){
            var formData = new FormData(document.getElementById("fmr-costumer"));
            formData.append("nombre", $("#nombre").val());
            formData.append("apaterno", $("#lastName1").val());
            formData.append("amaterno", $("#lastName2").val());
            $.ajax({
                url: "../Back/webhook/add_cliente.php",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            })
            .done(function(res){
                console.log(res);
                if(res==1){
                    $.ajax({
                        url: "../Back/webhook/consulta_cliente_id.php",
                        type: "post",
                        dataType: "html",
                        cache: false,
                        contentType: false,
                        processData: false
                    })
                    .done(function (res) {
                        let CLIENTE = JSON.parse(res);
                        $("#id_cliente").val(CLIENTE[0].id_clientes);
                        console.log($   ("#id_cliente").val());
                        formData.append("id_cliente", $("#id_cliente").val());
                        formData.append("correo", $("#eMail").val());
                        $.ajax({
                            url: "../Back/webhook/add_correo.php",
                            type: "post",
                            dataType: "html",
                            data: formData,
                            cache: false,
                            contentType: false,
                            processData: false
                        })
                        .done(function(res){
                            console.log(res);
                            if($("#eMail2").val()!=''){
                                formData.append("correo", $("#eMail2").val());
                                $.ajax({
                                    url: "../Back/webhook/add_correo.php",
                                    type: "post",
                                    dataType: "html",
                                    data: formData,
                                    cache: false,
                                    contentType: false,
                                    processData: false
                                })
                                .done(function(res){
                                    console.log(res);
                                    formData.append("telefono", $("#telephone").val());
                                    $.ajax({
                                        url: "../Back/webhook/add_telefono.php",
                                        type: "post",
                                        dataType: "html",
                                        data: formData,
                                        cache: false,
                                        contentType: false,
                                        processData: false
                                    })
                                    .done(function(res){
                                        console.log(res);
                                        if($("#telephone2").val()!=''){
                                            formData.append("telefono", $("#telephone2").val());
                                            $.ajax({
                                                url: "../Back/webhook/add_telefono.php",
                                                type: "post",
                                                dataType: "html",
                                                data: formData,
                                                cache: false,
                                                contentType: false,
                                                processData: false
                                            })
                                            .done(function(res){
                                                console.log(res);
                                                var combo = document.getElementById("tipo");
                                                var selected = combo.options[combo.selectedIndex].text;
                                                console.log(selected);
                                                formData.append("tipo", selected);
                                                    $.ajax({
                                                        url: "../Back/webhook/add_incidente.php",
                                                        type: "post",
                                                        dataType: "html",
                                                        data: formData,
                                                        cache: false,
                                                        contentType: false,
                                                        processData: false
                                                    })
                                                    .done(function(res){
                                                        console.log(res);
                                                        if(res==1){
                                                            $.ajax({
                                                                url: "../Back/webhook/consulta_incidente_id.php",
                                                                type: "post",
                                                                dataType: "html",
                                                                cache: false,
                                                                contentType: false,
                                                                processData: false
                                                            })
                                                            .done(function (res){
                                                                let INCIDENTE = JSON.parse(res);                                                                console.log(INCIDENTE[0].id_incidente);
                                                                $("#id_incidente").val(INCIDENTE[0].id_incidente);
                                                                formData.append("id_incidente", $("#id_incidente").val());
                                                                formData.append("id_cliente", $("#id_cliente").val());
                                                                formData.append("descripcion", $("#about").val());
                                                                $.ajax({
                                                                    url: "../Back/webhook/add_ticket.php",
                                                                    type: "post",
                                                                    dataType: "html",
                                                                    data: formData,
                                                                    cache: false,
                                                                    contentType: false,
                                                                    processData: false
                                                                })
                                                                .done(function(res){
                                                                    console.log(res);
                                                                    if(res==1){
                                                                        $.ajax({
                                                                            url: "../Back/webhook/consulta_ticket_id.php",
                                                                            type: "post",
                                                                            dataType: "html",
                                                                            cache: false,
                                                                            contentType: false,
                                                                            processData: false
                                                                        })
                                                                        .done(function(res){
                                                                            let TICKET = JSON.parse(res);
                                                                            $("#folio").val("Tu folio de seguimiento es: "+TICKET[0].folio);
                                                                        })
                                                                    }else{
                                                                        $("#folio").val("No se guardo el ticket");
                                                                    }
                                                                })
                                                            })
                                                        }else{
                                                            $("#folio").val("No se guardo el incidente");
                                                        }
                                                    })
                                            })
                                        }else{
                                            var combo = document.getElementById("tipo");
                                            var selected = combo.options[combo.selectedIndex].text;
                                            console.log(selected);
                                            formData.append("tipo", selected);
                                            $.ajax({
                                                url: "../Back/webhook/add_incidente.php",
                                                type: "post",
                                                dataType: "html",
                                                data: formData,
                                                cache: false,
                                                contentType: false,
                                                processData: false
                                            })
                                            .done(function(res){
                                                console.log(res);
                                                if(res==1){
                                                    $.ajax({
                                                        url: "../Back/webhook/consulta_incidente_id.php",
                                                        type: "post",
                                                        dataType: "html",
                                                        cache: false,
                                                        contentType: false,
                                                        processData: false
                                                    })
                                                    .done(function (res){
                                                        let INCIDENTE = JSON.parse(res);                                                                console.log(INCIDENTE[0].id_incidente);
                                                        $("#id_incidente").val(INCIDENTE[0].id_incidente);
                                                        formData.append("id_incidente", $("#id_incidente").val());
                                                        formData.append("id_cliente", $("#id_cliente").val());
                                                        formData.append("descripcion", $("#about").val());
                                                        $.ajax({
                                                            url: "../Back/webhook/add_ticket.php",
                                                            type: "post",
                                                            dataType: "html",
                                                            data: formData,
                                                            cache: false,
                                                            contentType: false,
                                                            processData: false
                                                        })
                                                        .done(function(res){
                                                            console.log(res);
                                                            if(res==1){
                                                                $.ajax({
                                                                    url: "../Back/webhook/consulta_ticket_id.php",
                                                                    type: "post",
                                                                    dataType: "html",
                                                                    cache: false,
                                                                    contentType: false,
                                                                    processData: false
                                                                })
                                                                .done(function(res){
                                                                    let TICKET = JSON.parse(res);
                                                                    $("#folio").val("Tu folio de seguimiento es: "+TICKET[0].folio);
                                                                })
                                                            }
                                                        })
                                                    })
                                                }
                                            })
                                        }
                                    })

                                })
                            }else{
                            formData.append("telefono", $("#telephone").val());
                                $.ajax({
                                    url: "../Back/webhook/add_telefono.php",
                                    type: "post",
                                    dataType: "html",
                                    data: formData,
                                    cache: false,
                                    contentType: false,
                                    processData: false
                                })
                                .done(function(res){
                                    console.log(res);
                                    if($("#telephone2").val()!=''){
                                        formData.append("telefono", $("#telephone2").val());
                                        $.ajax({
                                            url: "../Back/webhook/add_telefono.php",
                                            type: "post",
                                            dataType: "html",
                                            data: formData,
                                            cache: false,
                                            contentType: false,
                                            processData: false
                                        })
                                        .done(function(res){
                                            console.log(res);
                                            var combo = document.getElementById("tipo");
                                            var selected = combo.options[combo.selectedIndex].text;
                                            console.log(selected);
                                            formData.append("tipo", selected);
                                            $.ajax({
                                                url: "../Back/webhook/add_incidente.php",
                                                type: "post",
                                                dataType: "html",
                                                data: formData,
                                                cache: false,
                                                contentType: false,
                                                processData: false
                                            })
                                            .done(function(res){
                                                console.log(res);
                                                if(res==1){
                                                    $.ajax({
                                                        url: "../Back/webhook/consulta_incidente_id.php",
                                                        type: "post",
                                                        dataType: "html",
                                                        cache: false,
                                                        contentType: false,
                                                        processData: false
                                                    })
                                                    .done(function (res){
                                                        let INCIDENTE = JSON.parse(res);                                                                console.log(INCIDENTE[0].id_incidente);
                                                        $("#id_incidente").val(INCIDENTE[0].id_incidente);
                                                        formData.append("id_incidente", $("#id_incidente").val());
                                                        formData.append("id_cliente", $("#id_cliente").val());
                                                        formData.append("descripcion", $("#about").val());
                                                        $.ajax({
                                                            url: "../Back/webhook/add_ticket.php",
                                                            type: "post",
                                                            dataType: "html",
                                                            data: formData,
                                                            cache: false,
                                                            contentType: false,
                                                            processData: false
                                                        })
                                                        .done(function(res){
                                                            console.log(res);
                                                            if(res==1){
                                                                $.ajax({
                                                                    url: "../Back/webhook/consulta_ticket_id.php",
                                                                    type: "post",
                                                                    dataType: "html",
                                                                    cache: false,
                                                                    contentType: false,
                                                                    processData: false
                                                                })
                                                                .done(function(res){
                                                                    let TICKET = JSON.parse(res);
                                                                    $("#folio").val("Tu folio de seguimiento es: "+TICKET[0].folio);
                                                                })
                                                            }else{
                                                                $("#folio").val("No se guardo el ticket");
                                                            }
                                                        })
                                                    })
                                                }else{
                                                    $("#folio").val("No se guardo el incidente");
                                                }
                                            })
                                        })
                                    }else{
                                        var combo = document.getElementById("tipo");
                                        var selected = combo.options[combo.selectedIndex].text;
                                        console.log(selected);
                                        formData.append("tipo", selected);
                                        $.ajax({
                                            url: "../Back/webhook/add_incidente.php",
                                            type: "post",
                                            dataType: "html",
                                            data: formData,
                                            cache: false,
                                            contentType: false,
                                            processData: false
                                        })
                                        .done(function(res){
                                            console.log(res);
                                            if(res==1){
                                                $.ajax({
                                                    url: "../Back/webhook/consulta_incidente_id.php",
                                                    type: "post",
                                                    dataType: "html",
                                                    cache: false,
                                                    contentType: false,
                                                    processData: false
                                                })
                                                .done(function (res){
                                                    let INCIDENTE = JSON.parse(res);                                                                console.log(INCIDENTE[0].id_incidente);
                                                    $("#id_incidente").val(INCIDENTE[0].id_incidente);
                                                    formData.append("id_incidente", $("#id_incidente").val());
                                                    formData.append("id_cliente", $("#id_cliente").val());
                                                    formData.append("descripcion", $("#about").val());
                                                    $.ajax({
                                                        url: "../Back/webhook/add_ticket.php",
                                                        type: "post",
                                                        dataType: "html",
                                                        data: formData,
                                                        cache: false,
                                                        contentType: false,
                                                        processData: false
                                                    })
                                                    .done(function(res){
                                                        console.log(res);
                                                        if(res==1){
                                                            $.ajax({
                                                                url: "../Back/webhook/consulta_ticket_id.php",
                                                                type: "post",
                                                                dataType: "html",
                                                                cache: false,
                                                                contentType: false,
                                                                processData: false
                                                            })
                                                            .done(function(res){
                                                                console.log(res);
                                                                let TICKET = JSON.parse(res);
                                                                $("#folio").val("Tu folio de seguimiento es: "+TICKET[0].folio);
                                                            })
                                                        }else{
                                                            $("#folio").val("No se guardo el ticket");
                                                        }
                                                    })
                                                })
                                            }else{
                                                $("#folio").val("No se guardo el incidente");
                                            }
                                        })
                                    }
                                })
                            }
                        })
                    })
                }else{
                    $("#folio").val("No se guardo el cliente");
                }            
            });
        e.preventDefault();
    }else{
        $("#folio").val("Favor de llenar los campos");
    }
    });
});