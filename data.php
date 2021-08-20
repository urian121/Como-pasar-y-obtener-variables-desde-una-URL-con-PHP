<?php
$nameFull = !empty($_REQUEST['nameFull']);
$cedula   = isset($_REQUEST['cedula']);
echo $_REQUEST['canal'];


foreach ($_POST as $i => $value)
{
  echo 'Valores Recibidos:' .$value.'<br>';
} 



//isset, Determina si una variable está definida y no es NULL
echo $var = isset($_POST['nameFull']) ? $_POST['nameFull'] : $_GET['nameFull'];
//$a = $cond ? true : false; 
$miVar = (!empty( $_GET[ 'nameFull' ]) ? $_GET[ 'nameFull' ] : 'No hay Nada' );



if(!empty($_GET[ 'nameFull' ])) {
   echo 'caso 1:'. $_GET[ 'nameFull' ];
}
else {
   echo $id = 'No hay nada';
}

?>