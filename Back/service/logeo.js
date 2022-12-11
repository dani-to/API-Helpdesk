$(document).ready(function(){
    $("#login").on("submit", function(e){
        if($("#correo").val()!='' && $("#pass").val()!=''){
            var formData = new FormData(document.getElementById("login"));
            formData.append("email", $("#correo").val());
            formData.append("password", $("#pass").val());
            $.ajax({
                url: "https://dashboard-app-sdaw-ii-ecsml.ondigitalocean.app/api/login",
                type: "post",
                dataType: "html",
                data: formData,
                contentType: "application/json",
                headers: {
                    "accept": "application/json",
                    "Access-Control-Allow-Origin":"*"
                }

            })
            .done(function(res){
                console.log(res);
                window.location.href = data.redirect;
                
            })
        }else{
            console.log("no sale");
        }
        
    });
});

