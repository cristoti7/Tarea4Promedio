<html>
 <body>

<?php

class Promedio{

public function _construct(){
return 0;
}

public function obtenerPromedio(array $arreglo){
$promedio;
$promedio= array_sum($arreglo)/count($arreglo);
echo "El promedio es:".$promedio;
}

}

?>
</body>

</html>