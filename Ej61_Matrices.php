<!DOCTYPE html>
<html>
<body>
<?php
/*CBTIS 89
  YAMILET SIMENTAL
  PROGRAMACION 3°A
  PROGRAMA QEU IMPRIME UN ARREGLO MULTIDIMENSIONAL.
  05-NOVIEMBRE-2026*/
echo "<h2>Contenido del arreglo</h2>";
echo "<h2>MatrizA</h2>";
$MatrizA = array();
$valor = 100;
for ($f= 0; $f< 3; $f++){
    for ($c= 0; $c< 3; $c++){
    $MatrizA[$f][$c] = $valor;
    $valor+=10;}
}
for($f =0; $f<3; $f++){
  for($c =0; $c<3; $c++){
    echo $MatrizA[$f][$c]. " ";}
    echo "<br>";
}
     echo "<br>";

echo "<h2>MatrizB</h2>";
$MatrizB = array();
$valorB = 500;
for ($f= 0; $f< 3; $f++){
    for ($c= 0; $c< 3; $c++){
    $MatrizB[$f][$c] = $valorB;
    $valorB+=20;}
}
for($f =0; $f<3; $f++){
  for($c =0; $c<3; $c++){
    echo $MatrizB[$f][$c]. " ";}
    echo "<br>";
}
     echo "<br>";

echo "<h2>MatrizC</h2>";
$MatrizC = array();
for ($f= 0; $f< 3; $f++){
    for ($c= 0; $c< 3; $c++){
    $MatrizC[$f][$c] = $MatrizA[$f][$c]+$MatrizB[$f][$c];}
}
for($f =0; $f<3; $f++){
  for($c =0; $c<3; $c++){
    echo $MatrizC[$f][$c] . " ";}
    echo "<br>";
}
     echo "<br>";
?>
</body>
</html>