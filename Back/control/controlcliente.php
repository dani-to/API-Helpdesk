<?php                                                   //abrimos etiqueta php
function consultaCliente($id_cliente){                  
    include_once "../modelo/cliente.php";
    $CLIENTE = new CLIENTE();
    $CLIENTE ->setIdCliente($id_cliente);
    $result = $CLIENTE->queryConsultaCliente();
   return json_encode($result);
}

function insertCliente($params){                        //la funcion resive los datos
    include_once "../modelo/cliente.php";               //llamamos al documento a donde vamos a enviar los datos, en este 
                                                        //caso (modelo/cliente.php)
    $CLIENTE = new CLIENTE();                           //creamos nuevo objeto de la clase ($CLIENTE es variable local, le 
                                                        //ponemos como queramos) y (new CLIENTE(); es el nombre de la clase de cliente.php)
    $CLIENTE ->setNombre($params['nombre']);            //llamamos los set que necesitamos (estan en modelo/cliente.php) y
    $CLIENTE ->setApaterno($params['a_paterno']);       //dentro le ponemos la variable (en este caso) $params y el nombre
    $CLIENTE ->setAmaterno($params['a_materno']);       //de dato que le pusimos en el webhook
    return $CLIENTE->queryInsertCliente();              /*envia a ejecutarse la funcion de insertar en cliente.php y que
                                                          regrese resultado*/
}     
function consultaClienteID(){
    include_once "../modelo/cliente.php";
    $CLIENTE = new CLIENTE();
    $result = $CLIENTE->queryConsultaClienteID();
   return json_encode($result);
}