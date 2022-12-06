/*
 >
 --> UTILIZANDO JQUERY PARA REALIZAR LA PETICION
 > 
 */

/*
 * PRIMERO SE CREA UN OBJETO EL CUAL 
 * CONTENDRA LAS CONFIGURACIONES DE LA PETICION. 
 */
// const settings = {
//     "async": true,
//     "crossDomain": true,
//     "url": "../Back/webhook/consulta_ticket.php",
//     "method": "GET",
//     "headers": {
//         "Content-Type": "application/json"
//     }
// };

 /*
  * LLAMAMOS AL METODO AJAX Y LE PASAMOS LAS
  * CONFIGURACIONES SEGUIDO DE SU METODO DONE,
  * QUE RECIBE UNA FUNCION LA CUAL CONTIENE LA RESPUESTA DE LA PETICION,
  * MISMA QUE SE PARSEA EN FORMATO JSON PARA
  * DESPUES ITERARSE MEDIANTE UN FOREACH Y POR
  * ULTIMO PINTAR LOS DATOS EN EL HTML.
  */
// $.ajax(settings).done((response) => {
//     response = JSON.parse(response);

//     response.forEach(element => {
//         crearTicket(element.folio, element.descripcion, element.estatus, element.nivel_prioridad);        
//     });
// });


/*
 >
 --> UTILIZANDO FETCH (JAVA VANILA) PARA REALIZAR LA PETICION
 > 
 */

/*
 * SE HACE USO DE LA FUNCION FETCH, LA CUAL RECIBE
 * LA URL DE LA API, SEGUIDO SE USA SU METODO THEN PARA
 * COMPROBAR QUE EXISTE UNA RESPUESTA Y RETORNARLA EN
 * FORMATO JSON, UN SEGUNDO METODO THEN SE ENCARGA DE RECIBIR
 * LA RESPUESTA PARSEADA PARA ITERARLA Y PINTAR LOS DATOS
 * EN EL HTML, POR ULTIMO EL METODO CATCH RECIBIRA LOS ERRORES
 * Y LOS MOSTRARA EN CONSOLA.
 */

fetch('../Back/webhook/consulta_ticket.php')
.then(response => {
    return response.json();
})
.then(
    (data) => {
        data.forEach(element => {
            crearTicket(element.folio, element.descripcion, element.estatus, element.nivel_prioridad);  
        });
    }
)
.catch(err => console.error(err))

/*
 >
 --> FUNCION PARA MATIPULAR EL DOM
 > 
 */

function crearTicket(folio, descripcion, estatus, prioridad) {
    /*
     * LLAMAMOS AL ELEMENTO CON EL ID TBODY_TICKET
     * Y CREAMOS UN ELEMENTO HTML TR 
    */
    const tbody = document.getElementById("tbody_ticket");
    const tr = document.createElement('tr');
   
    // CREANDO EL Folio
    /*
     * CREAMOS UN ELEMENTO TH Y UN ELEMENTO A
     * AL ELEMENTO A LE AGREGAMOS TEXTO MEDIANTE
     * SU PROPIEDAD INNERTEXT, POR ULTIMO AL ELEMENTO
     * TH LE AGREGAMOS COMO HIJO EL ELEMENTO A
    */
    const thFolio = document.createElement('th');
    const aFolio = document.createElement('a');
    aFolio.innerText = "#" + folio;
    thFolio.appendChild(aFolio);


    // CREANDO EL Asunto
    /*
     * CREAMOS UN ELEMENTO TD Y UN ELEMENTO A
     * AL ELEMENTO A LE AGREGAMOS TEXTO MEDIANTE
     * SU PROPIEDAD INNERTEXT, LUEGO LE AGREGAMOS
     * LA CLASE TEXT-PRIMARY, POR ULTIMO AL ELEMENTO
     * TD LE AGREGAMOS COMO HIJO EL ELEMENTO A
    */
    const tdAsunto = document.createElement('td');
    const aAsunto = document.createElement('a');
    aAsunto.innerText = descripcion;
    aAsunto.className = 'text-primary';
    tdAsunto.appendChild(aAsunto);

    // CREANDO EL Estatus
    /*
     * CREAMOS UN ELEMENTO TD Y UN ELEMENTO SPAN
     * AL ELEMENTO SPAN LE AGREGAMOS TEXTO MEDIANTE
     * SU PROPIEDAD INNERTEXT, LUEGO LE AGREGAMOS
     * UNA CLASE DEPENDIENDO DE LO QUE VALGA LA VARIABLE
     * ESTATUS, HACIENDO USO DE UN OPERADOR TERNARIO, 
     * POR ULTIMO AL ELEMENTO TD LE AGREGAMOS COMO HIJO EL ELEMENTO SPAN
    */
    const tdStatus = document.createElement('td');
    const spanStatus = document.createElement('span');  
    //el cero sera el estado realizado y el 1 pendiente
    spanStatus.innerText = estatus == 0?'REALIZADO':'PENDIENTE'; 
    spanStatus.className = estatus ==  1? 'badge bg-warning' : 'badge bg-success';
    tdStatus.appendChild(spanStatus);

    // CREANDO LA Prioridad
    /*
     * CREAMOS UN ELEMENTO TD, UN ELEMENTO SPAN Y
     * UNA VARIABLE VACIA.
     * AL ELEMENTO SPAN LE AGREGAMOS TEXTO MEDIANTE
     * SU PROPIEDAD INNERTEXT, LUEGO MEDIANTE CONDICIONES
     * AGREGAMOS A LA VARIABLE UNA CLASE DIFERENTE
     * HACEMOS QUE EL SPAN TENGA COMO CLASE ESA VARIABLE
     * Y POR ULTIMO AL ELEMENTO TD LE AGREGAMOS COMO HIJO EL ELEMENTO SPAN
    */
    const tdPrioridad = document.createElement('td');
    const spanPrioridad = document.createElement('span');
    let clasePrioridad = '';
    //EL CERO ES BAJO EL 1 ES MEDIO Y 2 ES ALTA
    if(prioridad==2 )spanPrioridad.innerText= 'ALTA';
    if(prioridad==1 )spanPrioridad.innerText= 'MEDIA';
    if(prioridad==0 )spanPrioridad.innerText= 'BAJA';
    if(prioridad  == 2) clasePrioridad = 'badge bg-danger';
    if(prioridad  == 1) clasePrioridad = 'badge bg-warning';
    if(prioridad  == 0) clasePrioridad = 'badge bg-success';
    spanPrioridad.className = clasePrioridad;
    tdPrioridad.appendChild(spanPrioridad);

    // TR
    /*
     * AL TR LE AGREGAMOS COMO HIJOS TODOS LOS
     * ELEMENTOS TH Y TD
    */
    tr.appendChild(thFolio);
    tr.appendChild(tdAsunto);
    tr.appendChild(tdStatus);
    tr.appendChild(tdPrioridad);

    // TBODY
    /*
     * PARA FINALIZAR, AL TBODY LE AGREGAMOS
     * COMO HIJO NUESTRO TR Y DE ESTE MODO
     * HEMOS TERMINADO :D
    */
    tbody.appendChild(tr);
}