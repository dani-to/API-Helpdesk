<?php
include_once"../control/controlticket.php";
/* Getting file name */
$filename = $_POST['id_cliente'].".jpg";
/* Location */
$location = "../files/img/".$filename;
$uploadOk = 1;
$imageFileType = pathinfo($location,PATHINFO_EXTENSION);
/* Valid Extensions */
$valid_extensions = array("jpg","jpeg","png");
/* Check file extension */
if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
   $uploadOk = 0;
}
if($uploadOk == 0){
   echo 0;
}else{
   /* Upload file */
}

/*if(isset($_FILES['imagen']['name'])){
    $archivo="false";
}*/
$params=[
    "id_cliente" =>$_POST['id_cliente'],
    "id_incidente" =>$_POST['id_incidente'],
    "id_venta" =>$_POST['idventa'],
    "producto" =>$_POST['producto'],
    "descripcion" =>$_POST['descripcion'],
    "estatus" =>'0',
    "imagen" =>$filename
  ];

$result=insertTicket($params);
echo $result;
?>