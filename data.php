<?php
$nameFull = $_REQUEST['nameFull'];
$cedula   = $_REQUEST['cedula'];

foreach ($_POST as $i => $value)
{
  echo 'Valores Recibidos:' .$value.'<br>';
} 


//isset, Determina si una variable está definida y no es NULL
$var = isset($_POST['canal']) ? $_POST['canal'] : $_GET['canal'];
//$a = $cond ? true : false; 
$miVar = ( !empty( $_GET[ 'canal' ] ) ? $_GET[ 'canal' ] : 'No hay Nada' );



if(!empty( $_GET[ 'canal' ])) {
   $id = $_GET[ 'canal' ];
}
else {
   $id = 'No hay nada';
}

?>