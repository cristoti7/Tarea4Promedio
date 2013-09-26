<html>
 <body>
<head> </head>
<?php

require_once ("Promedio.php");
$notas=array(5,6,8,10,3);


$Promedio = new Promedio();

$Promedio->obtenerPromedio($notas);

?>
</body>

</html>