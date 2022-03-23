<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>While - PHP</title>
</head>
<body>
<div>
    <?php
 $i = 1;
 while($i <= 5){
     $v = "num".$i;
     $url="v".$i;
     $$v=isset($_GET[$url])?$_GET[$url]:0;
     $i++;
 }
 echo"$num1 $num2 $num3 $num4 $num5";
 /*
  
     para diminuir de 2 em 2
 $c =10;
 while($c>-0){
     echo $c. "</br>";
     $c -=2;
 }
Para aumentar
    /*
   $c =1;
   while($c<=15){
       echo $c. "</br>";
       $c ++;
   }
  */
 ?>

 <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>