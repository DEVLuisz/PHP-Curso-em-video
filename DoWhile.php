<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Do While - PHP</title>
</head>
<body>
<div>
    <?php

$v= isset($_GET["val"])?$_GET["val"]:1;
echo "<h1>Calculando o fatorial de $v </h1>";

$f = $v;
$fat =1;
do{
$fat = $fat *$f;
$f--;
} while ($f >=1);
echo "<h2>$v ! =  $fat</h2>";



    /*
$c=10;
do{
    echo "$c ";
    $c-=2;
}  while($c>=0);

    
 $c=0;
 do{
     echo "$c ";
     $c+=2;
 }  while($c<=20);
 */
 ?>

 <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>